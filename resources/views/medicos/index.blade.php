@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Medicos Registrados en el Sistema
                        @can('medicos.create')
                        <a href="{{ route('medicos.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('medicos.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>

                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Especialidad</th>
                        <th class="text-center" >Cargo</th>
                        <th class="text-center" >Foto</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctor as $p )
                    <tr >

                        <td style="vertical-align: middle;" >
                            {{ $p->nombre }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->especialidad }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->cargo }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >

                            <img src="{{ $p->foto }}" class="img-thumbnail" width="70px"  alt="{{ $p->cedula }}">

                        </td>

                        <td >

                            @include('medicos.partials.actions')


                        </td>
                    </tr>

                    @endforeach

                    <tfoot>

                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Especialidad</th>
                        <th class="text-center" >Cargo</th>
                        <th colspan="3" class="text-center"  >Acciones</th>

                    </tfoot>


                </tbody>
            </table>
        </div>
        {{ $doctor->render() }}
    </div>
</div>
</div>
@endsection