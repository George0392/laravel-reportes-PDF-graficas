@extends('layouts.admin')
@section('contenido')

<div class="container">

 <div class="col-md-11 panel-heading ">
  <h3>
    Ficha Entrega de Medicinas:
    <br>
    <a href="{{ route('entregas.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>


  </h3>
  <br>
  <h2 class="text-center">
    @foreach( $entregas  as $entrega )
    {{ $entrega->nombre }}
    @endforeach
  </h2>
  <a href="{{ route('entregas.pdf', $entrega->id_entrega) }}" class="btn btn-info pull-right  btn-lg " ><i class="fa fa-print  " ></i><span> Imprimir</span> </a>

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

            </tr>
          </thead>

          <tbody>
            <tr>

             {{--        @foreach( $entregas as $entrega ) --}}
             <td class="text-center">{{$entrega->nombre }}</td>
             <td class="text-center">{{$entrega->cedula }}</td>
             <td class="text-center">{{$entrega->num_historia }}</td>

              {{-- @endforeach --}}



            </tr>

          </tbody>

        </table>

        <hr>

        <table class="table table-condensed table-bordered">
         <h3 class="text-center " >Detalle Entrega</h3>
          <thead class="bg-success">
            <tr>
              <th class="text-center ">Medicina</th>
              <th class="text-center">Cantidad</th>
              <th class="text-center">Medico</th>
              <th class="text-center">Consultorio</th>
              <th class="text-center">Fecha</th>
              <th class="text-center">Hora</th>

            </tr>
          </thead>

          <tbody>
            <tr>
                <td class="text-center">{{$entrega->medicina }}</td>
                <td class="text-center">{{$entrega->cantidad }}</td>
                <td class="text-center">{{$entrega->medico }}</td>
                <td class="text-center">{{$entrega->consultorio }}</td>
                <td class="text-center">{{ date('d/m/Y', strtotime($entrega->created_at)) }}
                <td class="text-center">{{ date('g:i a', strtotime($entrega->created_at)) }}</td>




            </tr>

          </tbody>
        </table>

      </div> <!-- panel body -->

    </div> <!-- panel -->
  </div> <!-- col -->
</div> <!-- row -->

</div>    <!-- container -->

@endsection

