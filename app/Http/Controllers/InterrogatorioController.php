<?php

namespace App\Http\Controllers;

use App\Interrogatorio;
use App\Paciente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;

use DB;
use Carbon\Carbon;


class InterrogatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $interrogatorio = DB::table('interrogatorios')
            ->join('pacientes', 'pacientes.id', '=', 'interrogatorios.id_paciente')
            ->select('pacientes.*', 'interrogatorios.*')
            ->orderByDesc('interrogatorios.id_interrogatorio')
            ->where('pacientes.nombre', 'like', '%'.Input::get('searchtext').'%')
            ->orWhere('pacientes.cedula', 'like', '%'.Input::get('searchtext').'%')
            ->orWhere('pacientes.num_historia', 'like', '%'.Input::get('searchtext').'%')
            ->paginate();


        return view('interrogatorios.index',compact('interrogatorio'));

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $pacientes = DB::table('pacientes')
                    ->select('id','nombre','cedula')
                    ->get();

        // dd($pacientes);

        return view('interrogatorios.create',compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interrogatorio = Interrogatorio::create($request->all());

        return redirect()->route('interrogatorios.index',$interrogatorio->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $interrogatorio = DB::table('interrogatorios')
                    ->join('pacientes', 'pacientes.id', '=', 'interrogatorios.id_paciente')
                    ->select('pacientes.*', 'interrogatorios.*')
                    // ->whereColumn([
                    // ['pacientes.id', '=', 'interrogatorios.id_paciente']])
                    ->find($id);

        return view('interrogatorios.show',compact('interrogatorio','paciente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function edit($id)
    {
       
        $pacientes = Paciente::pluck('nombre','id');

        $interrogatorio = Interrogatorio::find($id);

        return view('interrogatorios.edit', compact('interrogatorio','pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar formulario y editar
        $interrogatorio = Interrogatorio::find($id);
        $interrogatorio->fill($request->all())->save();

        return redirect()->route('interrogatorios.index', $interrogatorio->id)->with('info', 'Datos actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interrogatorio = Interrogatorio::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
        $interrogatorio = DB::table('interrogatorios')
                    ->join('pacientes', 'pacientes.id', '=', 'interrogatorios.id_paciente')
                    ->select('pacientes.*', 'interrogatorios.*')
                    ->find($id);

        $pdf=PDF::loadView('interrogatorios.pdf',compact('interrogatorio'));
                 // ->setPaper('legal', 'portrait');

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();



    }
}

