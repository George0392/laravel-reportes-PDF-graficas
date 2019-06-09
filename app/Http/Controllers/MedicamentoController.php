<?php

namespace App\Http\Controllers;

use App\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MedicamentoStoreRequest;
use App\Http\Requests\MedicamentoUpdateRequest;

use Barryvdh\DomPDF\Facade as PDF;
use \Milon\Barcode\DNS1D;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $medicamento = Medicamento::where('nombre', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('codigo', 'like', '%'.Input::get('searchtext').'%')
                ->orderBy('nombre')
                ->paginate();


        return view('medicamentos.index',compact('medicamento'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('medicamentos.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicamentoStoreRequest $request)
    {
        $medicamento = Medicamento::create($request->all());        

        return redirect()->route('medicamentos.index',$medicamento->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $medicamento = Medicamento::findOrFail($id);

        return view('medicamentos.show',compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function edit($id)
    {

        $medicamento = Medicamento::findOrFail($id);

        return view('medicamentos.edit', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicamentoUpdateRequest $request, $id)
    {
        //validar formulario y editar
        $medicamento = Medicamento::findOrFail($id);
        $medicamento->fill($request->all())->save();

        return redirect()->route('medicamentos.index')->with('info', 'Etiqueta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
        $medicamento = Medicamento::findOrFail($id);
     
        $pdf=PDF::loadView('medicamentos.pdf',compact('medicamento'))
                 ->setPaper('letter', 'portrait');

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();

    }
    
}
