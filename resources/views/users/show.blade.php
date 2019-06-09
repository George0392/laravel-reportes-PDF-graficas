@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                    <div class="panel-heading">
                    <h3>
                    Detalle de Usuarios

                    <a href="{{ route('users.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>

                    </h3>
                </div>


                <div class="panel-body">
                    <p><strong>Nombre:</strong><br>{{ $users->name }}</p>
                    {{-- <p><strong>Contraseña:</strong><br>{{ $users->password }}</p> --}}
                    <p><strong>Correo:</strong><br>{{ $users->email }}</p>
                    <p><strong>Telefono:</strong><br>{{ $users->phone }}</p>
                    <p><strong>Direccion:</strong><br>{{ $users->address }}</p>
                    <p><strong>imagen:</strong><br>{{ $users->photo }}</p>
                    <p><strong>Cargo:</strong><br>{{ $users->charge }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection