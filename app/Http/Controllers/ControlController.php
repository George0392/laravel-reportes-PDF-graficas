<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ControlRequest;
use Barryvdh\DomPDF\Facade as PDF;

use DB;
use Carbon\Carbon;

class ControlController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busqueda Basica
        $control = DB::table('controls')
            ->join('pacientes', 'pacientes.id', '=', 'controls.id_paciente')
            ->select('pacientes.id as ','pacientes.nombre','pacientes.cedula','pacientes.num_historia', 'controls.*')
            ->where('pacientes.cedula', 'like', '%'.Input::get('searchtext').'%')
            ->orWhere('pacientes.num_historia', 'like', '%'.Input::get('searchtext').'%')
            ->orderByDesc('controls.id_control')

            ->paginate();


        return view('control.index',compact('control'));

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

        return view('control.create',compact('pacientes'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ControlRequest $request)
    {
        $control = Control::create($request->all());

        return redirect()->route('control.index',$control->id)->with('info', 'Guardado Exitosamente' );

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $control = DB::select(DB::raw("select pacientes.*, controls.* from controls inner join pacientes on pacientes.id = controls.id_paciente where controls.id_control=" . $id ));

        // dd($control);
        return view('control.show',compact('control'));

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

        $control = Control::find($id);

        // dd($controla);

        return view('control.edit', compact('control','pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ControlRequest $request, $id)
    {
        //validar formulario y editar
        $control = Control::findOrFail($id);
        $control->fill($request->all())->save();

        return redirect()->route('control.index')->with('info', 'Informacion actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $control = Control::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }


    public function exportarpdf($id)
    {
        $control = DB::select(DB::raw("select pacientes.*, controls.* from controls inner join pacientes on pacientes.id = controls.id_paciente where controls.id_control=" . $id ));

        $pdf=PDF::loadView('control.pdf',compact('control'))
                 ->setPaper('letter', 'portrait');

        // return $pdf->download('pacientes-list.pdf');
        return $pdf->stream();

    }

}

