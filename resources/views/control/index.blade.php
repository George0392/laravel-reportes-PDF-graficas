@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Controles Registrados en el Sistema
                        @can('control.create')
                        <a href="{{ route('control.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('control.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>
                        <th class="text-center" >#</th>
                        <th class="text-center" >Nombre y Apellido</th>
                        <th class="text-center" >Cedula</th>
                        <th class="text-center" ># Historia</th>
                        <th class="text-center" >Fecha y Hora</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($control as $p )
                    <tr >

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->id_control }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->nombre }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->cedula }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->num_historia }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ date('d/m/Y g:i a', strtotime($p->created_at)) }}
                        </td>

                        <td >

                            @include('control.partials.actions')


                        </td>
                    </tr>

                    @endforeach

                    <tfoot>
                        <th class="text-center" >#</th>
                        <th class="text-center" >Nombre y Apellido</th>
                        <th class="text-center" >Cedula</th>
                        <th class="text-center" ># Historia</th>
                        <th class="text-center" >Fecha y Hora</th>
                        <th colspan="3" class="text-center"  >Acciones</th>

                    </tfoot>


                </tbody>
            </table>
        </div>
        {{ $control->render() }}
    </div>
</div>
</div>
@endsection