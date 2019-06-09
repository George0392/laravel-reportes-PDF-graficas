@extends('layouts.admin')
@section('contenido')

<div class="container">

 <div class="col-md-11 panel-heading ">
  <h3>
    Ficha Consulta:
    <br>
    <a href="{{ route('control.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>


  </h3>
  <br>
  <h2 class="text-center">
    @foreach( $control as $cont )
    {{ $cont->nombre }}
    @endforeach
  </h2>
  <a href="{{ route('control.pdf', $cont->id_control) }}" class="btn btn-info pull-right  btn-lg " ><i class="fa fa-print  " ></i><span> Imprimir</span> </a>

</div>

<div class="row">
  <div class="col-md-11">
    <div class="panel panel-default">

      <div class="panel-heading">


      </div> <!-- panel heading -->
      <div class="panel-body">
        <br>
        <h2 class="panel-title text-center">Detalle Paciente</h2>
        <br>
        <table class="table table-condensed table-bordered">
          <thead class="bg-success">
            <tr>
              <th class="text-center">Nombre</th>
              <th class="text-center">Cedula</th>
              <th class="text-center"> Historia </th>
              <th class="text-center">Fecha</th>
              <th class="text-center">Hora</th>

            </tr>
          </thead>

          <tbody>
            <tr>

             {{--        @foreach( $control as $cont ) --}}
             <td class="text-center">{{$cont->nombre }}</td>
             <td class="text-center">{{$cont->cedula }}</td>
             <td class="text-center">{{$cont->num_historia }}</td>
             <td class="text-center">{{ date('d/m/Y', strtotime($cont->created_at)) }}
              <td class="text-center">{{ date('g:i a', strtotime($cont->created_at)) }}</td>
              {{-- @endforeach --}}



            </tr>

          </tbody>

        </table>

        <hr>

        <table class="table table-condensed table-bordered">
         <h3 class="text-center " >Detalle Consulta</h3>
          <thead class="bg-success">
            <tr>
              <th class="text-center ">Motivo Consulta</th>
              <th class="text-center">HEA</th>
              <th class="text-center">Examén Fisico</th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text-center">{{$cont->motivo_consulta }}</td>
              <td class="text-justify">{{$cont->hea }}</td>
              <td class="text-justify">{{$cont->examen_fisico }}</td>



            </tr>

          </tbody>
        </table>

        <table class="table table-condensed table-bordered">
          <thead class="bg-success">
            <tr>
              <th class="text-center ">Examen Complementario</th>
              <th class="text-center">Impresión Diagnóstica</th>
              <th class="text-center">Conducta a Seguir</th>

            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text-center">{{$cont->examen_complementario }}</td>
              <td class="text-justify">{{$cont->impresion_diagnostica }}</td>
              <td class="text-justify">{{$cont->conducta_seguir }}</td>



            </tr>

          </tbody>
        </table>


      </div> <!-- panel body -->

    </div> <!-- panel -->
  </div> <!-- col -->
</div> <!-- row -->

</div>    <!-- container -->

@endsection

