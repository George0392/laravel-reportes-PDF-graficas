@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Listado de Roles
                    @can('roles.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                    @endcan
                    </h3>
                </div>
                {{-- <div class="panel-body">
                    Para Buscador
                </div> --}}
                    <table class="table table-hover table-striped table-responsive" >
                        <thead>
                            <tr>
                                <th width="2%">ID</th>
                                <th>Nombre</th>
                                 <th>Descripcion</th>

                                <th colspan="3" >&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $p )
                            <tr>
                                <td>
                                    {{ $p->id}}
                                </td>
                                <td>
                                    {{ $p->name }}
                                </td>
                                <td>
                                    {{ $p->description }}
                                </td>

                                <td width="10px" >
                                    @can('roles.show')
                                    <a href="{{ route('roles.show',$p->id) }}" class="btn btn-success "><i class="fa fa-eye fa-2x "></i></a>
                                @endcan
                                </td>
                                 <td width="10px" >
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit', $p->id) }}"
                                    class="btn btn-warning">
                                    <i class="fa fa-edit fa-2x" ></i>
                                </a>
                                @endcan
                                    </td>
                                     <td width="10px" >
                                    @can('roles.destroy')

                                    {!! Form::open(['route'=>['roles.destroy',$p->id],'method'=>'DELETE']) !!}

                                    <button class="btn btn-danger"><i class="fa fa-trash fa-2x" ></i></button>
                                {!! Form::close() !!}
                                @endcan
                                    </td>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
        {{ $roles->render() }}
    </div>
</div>
</div>
@endsection