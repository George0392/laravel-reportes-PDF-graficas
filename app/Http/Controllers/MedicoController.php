<?php

namespace App\Http\Controllers;

use App\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MedicoStoreRequest;
use App\Http\Requests\MedicoUpdateRequest;
use Barryvdh\DomPDF\Facade as PDF;


class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $doctor = Medico::where('cedula', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('nombre', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('especialidad', 'like', '%'.Input::get('searchtext').'%')
                ->orderBy('nombre')
                ->paginate();


        return view('medicos.index',compact('doctor'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('medicos.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicoStoreRequest $request)
    {
        $doctor = Medico::create($request->all());

        //guardar imagen
        if($request->file('foto')){
            // guardar en el disco en la carpeta public dentro de la carpeta imagen el archivo pasado por request
            $path = Storage::disk('public')->put('imagenes',  $request->file('foto'));

        // 2- actualizar  y guardar la ruta de la imagen
            $doctor->fill(['foto' => asset($path)])->save();
        }



        return redirect()->route('medicos.index',$doctor->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $doctor = Medico::findOrFail($id);

        return view('medicos.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function edit($id)
    {

        $doctor = Medico::findOrFail($id);

        return view('medicos.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicoUpdateRequest $request, $id)
    {
        //validar formulario y editar
        $doctor = Medico::findOrFail($id);
        $doctor->fill($request->all())->save();

        //guardar imagen
        if($request->file('foto')){
            // guardar en el disco en la carpeta public dentro de la carpeta imagen el archivo pasado por request
            $path = Storage::disk('public')->put('imagenes',  $request->file('foto'));

        // 2- actualizar  y guardar la ruta de la imagen
            $doctor->fill(['foto' => asset($path)])->save();
        }

        return redirect()->route('medicos.index')->with('info', 'Etiqueta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Medico::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
        $doctor = Medico::findOrFail($id);
     
        $pdf=PDF::loadView('medicos.pdf',compact('doctor'))
                 ->setPaper('letter', 'portrait');

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();

    }
    
}
