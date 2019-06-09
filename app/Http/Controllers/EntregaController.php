<?php

namespace App\Http\Controllers;

use App\Entrega;
use App\Paciente;
use App\Consultorio;
use App\Medico;
use App\Medicamento;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\EntregaRequest;
use Barryvdh\DomPDF\Facade as PDF;

use DB;
use Carbon\Carbon;

class EntregaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $entregas = DB::table('entregas')
            ->join('pacientes', 'pacientes.id', '=', 'entregas.id_paciente')
            ->join('medicamentos', 'medicamentos.id', '=', 'entregas.id_medicamento')
            ->select(
                    'pacientes.nombre as nom_paciente',
                    'pacientes.cedula as ced_paciente',
                    'pacientes.num_historia as hist_paciente',
                    'medicamentos.nombre as medicina'
                    ,'entregas.*')

            ->where('pacientes.cedula', 'like', '%'.Input::get('searchtext').'%')
            ->orWhere('pacientes.num_historia', 'like', '%'.Input::get('searchtext').'%')
            ->orWhere('pacientes.nombre', 'like', '%'.Input::get('searchtext').'%')
            ->orWhere('medicamentos.nombre', 'like', '%'.Input::get('searchtext').'%')
            ->orderByDesc('entregas.id_entrega')
            ->paginate();


        return view('entregas.index',compact('entregas'));

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
                    ->orderBy('cedula')
                    ->get();

        $consultorios =Consultorio::pluck('nombre','id');

        $medicos = DB::table('medicos')
                    ->select('id','nombre','cedula')
                    ->orderBy('cedula')
                    ->get();

        $medicamentos =Medicamento::pluck('nombre','id');

        return view('entregas.create',compact('pacientes','consultorios','medicos','medicamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntregaRequest $request)
    {
        $entregas = Entrega::create($request->all());

        $cantidad = $request->get('cantidad');
        $producto = $request->get('id_medicamento');

        $inventario = Medicamento::where('id','=',$producto )->decrement('cantidad',$cantidad);

        return redirect()->route('entregas.index',$entregas->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $entregas = DB::select(DB::raw("select
            pacientes.nombre as nombre,
            pacientes.cedula as cedula,
            pacientes.num_historia,
            consultorios.nombre as consultorio,
            medicos.nombre as medico,
            medicamentos.nombre as medicina,

            entregas.* from entregas
            inner join pacientes on pacientes.id = entregas.id_paciente
            inner join consultorios on consultorios.id = entregas.id_consultorio
            inner join medicos on medicos.id = entregas.id_medico
            inner join medicamentos on medicamentos.id = entregas.id_medicamento
            where entregas.id_entrega=" . $id ));

        // dd($entregas);
        return view('entregas.show',compact('entregas'));

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
        $consultorios =Consultorio::pluck('nombre','id');
        $medicos = Medico::pluck('nombre','id');
        $medicamentos =Medicamento::pluck('nombre','id');
        $entregas = Entrega::find($id);

        return view('entregas.edit', compact('pacientes','consultorios','medicos','medicamentos','entregas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EntregaRequest $request, $id)
    {
        //validar formulario y editar
        $entregas = Entrega::findOrFail($id);
        $entregas->fill($request->all())->save();

        return redirect()->route('entregas.index')->with('info', 'Informacion actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entregas = Entrega::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
       $entregas = DB::select(DB::raw("select
            pacientes.nombre as nombre,
            pacientes.cedula as cedula,
            pacientes.num_historia,
            consultorios.nombre as consultorio,
            medicos.nombre as medico,
            medicamentos.nombre as medicina,

            entregas.* from entregas
            inner join pacientes on pacientes.id = entregas.id_paciente
            inner join consultorios on consultorios.id = entregas.id_consultorio
            inner join medicos on medicos.id = entregas.id_medico
            inner join medicamentos on medicamentos.id = entregas.id_medicamento
            where entregas.id_entrega=" . $id ));

        $pdf=PDF::loadView('entregas.pdf',compact('entregas'))
                 ->setPaper('letter', 'portrait');

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();

    }

}

