<?php

namespace App\Http\Controllers;

use App\Consultorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ConsultorioRequest;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $consultorio = Consultorio::where('nombre', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('municipio', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('parroquia', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('estado', 'like', '%'.Input::get('searchtext').'%')
                ->orderBy('nombre')
                ->paginate();


        return view('consultorios.index',compact('consultorio'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('consultorios.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultorioRequest $request)
    {
        $consultorio = Consultorio::create($request->all());        

        return redirect()->route('consultorios.index',$consultorio->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $consultorio = Consultorio::findOrFail($id);

        return view('consultorios.show',compact('consultorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function edit($id)
    {

        $consultorio = Consultorio::findOrFail($id);

        return view('consultorios.edit', compact('consultorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultorioRequest $request, $id)
    {
        //validar formulario y editar
        $consultorio = Consultorio::findOrFail($id);
        $consultorio->fill($request->all())->save();

        return redirect()->route('consultorios.index')->with('info', 'Etiqueta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultorio = Consultorio::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
        $consultorio = Consultorio::findOrFail($id);
     
        $pdf=PDF::loadView('consultorios.pdf',compact('consultorio'))
                 ->setPaper('letter', 'portrait');

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();

    }
    
}
