<?php

namespace App\Http\Controllers;

use App\Paciente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PacienteStoreRequest;
use App\Http\Requests\PacienteUpdateRequest;

use Barryvdh\DomPDF\Facade as PDF;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $paciente = Paciente::where('cedula', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('nombre', 'like', '%'.Input::get('searchtext').'%')
                ->orWhere('num_historia', 'like', '%'.Input::get('searchtext').'%')
                ->orderByDesc('id')
                ->paginate();


        return view('pacientes.index',compact('paciente'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteStoreRequest $request)
    {
        $paciente = Paciente::create($request->all());

        //guardar imagen
        if($request->file('foto')){
            // guardar en el disco en la carpeta public dentro de la carpeta imagen el archivo pasado por request
            $path = Storage::disk('public')->put('imagenes/pacientes',  $request->file('foto'));

        // 2- actualizar  y guardar la ruta de la imagen
            $paciente->fill(['foto' => asset($path)])->save();
        }

        return redirect()->route('pacientes.index',$paciente->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $paciente = Paciente::findOrFail($id);

        return view('pacientes.show',compact('paciente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function edit($id)
    {
        $paciente = Paciente::find($id);

        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(PacienteUpdateRequest $request, $id)
    {
        //validar formulario y editar
        $paciente = Paciente::findOrFail($id);
        $paciente->fill($request->all())->save();

        //guardar imagen
        if($request->file('foto')){
            // guardar en el disco en la carpeta public dentro de la carpeta imagen el archivo pasado por request
            $path = Storage::disk('public')->put('imagenes/pacientes',  $request->file('foto'));

        // 2- actualizar  y guardar la ruta de la imagen
            $paciente->fill(['foto' => asset($path)])->save();
        }

        return redirect()->route('pacientes.index')->with('info', 'Etiqueta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
        $paciente = Paciente::findOrFail($id);
        // $paciente = Paciente::get();
        $pdf=PDF::loadView('pacientes.pdf',compact('paciente'));

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();
    }
}

