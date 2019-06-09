@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Listado de Usuarios
                    @can('users.create')
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
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
                            <th>Cargo</th>
                            <th colspan="3" >&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $p )
                        <tr>
                            <td>
                                {{ $p->id}}
                            </td>
                            <td>
                                {{ $p->name }}
                            </td>
                            <td>
                                {{ $p->charge }}
                            </td>
                            <td width="10px" >
                                @can('users.show')
                                <a href="{{ route('users.show',$p->id) }}" class="btn btn-success "><i class="fa fa-eye fa-2x "></i></a>
                                @endcan
                            </td>
                            <td width="10px" >
                                @can('users.edit')
                                <a href="{{ route('users.edit', $p->id) }}"
                                class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
                                @endcan
                            </td>
                            <td width="10px" >
                                @can('users.destroy')
                                {!! Form::open(['route'=>['users.destroy',$p->id],'method'=>'DELETE']) !!}
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
        {{ $user->render() }}
    </div>
</div>
</div>
@endsection