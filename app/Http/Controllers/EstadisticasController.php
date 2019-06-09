<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Control;
use DB;


class EstadisticasController extends Controller
{

public function index()
    {
        return view('estadisticas.consultas_mes');

     }


	public function graficas(){
    	// agrupar por consultas mensuales
    	$result= Control::select(
            DB::raw('count(*) as total'),
            DB::raw("DATE_FORMAT(created_at,'%m %Y') as mes")
        )
            ->groupBy('mes')
            ->get();
    	// dd($result);

// graficas/estadisticas

        return response()->json($result);

    }

public function edad_pacientes(){
	//agrupar pacientes por edad
	// SELECT TIMESTAMPDIFF(YEAR,fecha_nac,CURDATE()) AS edad FROM pacientes

	$result= Paciente::select(
            DB::raw('count(*) as total'),
            DB::raw("TIMESTAMPDIFF(YEAR,fecha_nac,CURDATE()) AS edad")
        )
            ->groupBy('edad')
            ->get();
    	// dd($result);

// graficas/estadisticas

        return response()->json($result);


}



}
