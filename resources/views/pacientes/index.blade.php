@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Pacientes Registrados en el Sistema
                        @can('pacientes.create')
                        <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('pacientes.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>

                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Cedula</th>
                        <th class="text-center" ># Historia</th>
                        <th class="text-center" >Foto</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paciente as $p )
                    <tr >
                        <td style="vertical-align: middle;" >
                            {{ $p->nombre }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->cedula }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->num_historia }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >

                            <img src="{{ $p->foto }}" class="img-thumbnail" width="70px"  alt="{{ $p->cedula }}">

                        </td>

                        <td >

                            @include('pacientes.partials.actions')


                        </td>
                    </tr>

                    @endforeach

                    <tfoot>

                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Cedula</th>
                        <th class="text-center" ># Historia</th>
                        <th class="text-center" >Foto</th>

                    </tfoot>


                </tbody>
            </table>
        </div>
        {{ $paciente->render() }}
    </div>
</div>
</div>
@endsection