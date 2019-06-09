@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Control Entrega de Medicinas
                        @can('entregas.create')
                        <a href="{{ route('entregas.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('entregas.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>
                        <th class="text-center" >#</th>
                        <th class="text-center" >Nombre y Apellido</th>
                        <th class="text-center" >Cedula</th>
                        <th class="text-center" ># Historia</th>
                        <th class="text-center" >Medicina</th>
                        <th class="text-center" >Fecha</th>

                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($entregas as $p )
                    <tr >

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->id_entrega }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->nom_paciente }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->ced_paciente }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->hist_paciente }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->medicina }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ date('d/m/Y', strtotime($p->created_at)) }}
                        </td>

                        <td >

                            @include('entregas.partials.actions')


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
        {{ $entregas->render() }}
    </div>
</div>
</div>
@endsection