@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Consultorios Registrados en el Sistema
                        @can('consultorios.create')
                        <a href="{{ route('consultorios.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('consultorios.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>
                        
                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Municipio</th>
                        <th class="text-center" >Parroquia</th>
                        <th class="text-center" >Estado</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultorio as $p )
                    <tr>

                        <td style="vertical-align: middle;" >
                            {{ $p->nombre }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->municipio }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->parroquia }}
                        </td>

                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->estado }}
                        </td>

                        

                        <td >

                            @include('consultorios.partials.actions')


                        </td>
                    </tr>

                    @endforeach

                    <tfoot>

                        <th class="text-center" >#</th>
                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Municipio</th>
                        <th class="text-center" >Parroquia</th>
                        <th class="text-center" >Estado</th>
                        <th colspan="3" class="text-center"  >Acciones</th>

                    </tfoot>


                </tbody>
            </table>
        </div>
        {{ $consultorio->render() }}
    </div>
</div>
</div>
@endsection