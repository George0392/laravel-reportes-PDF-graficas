@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                    <div class="panel-heading">
                    <h3>
                    Detalle de Permisos

                    <a href="{{ route('permisos.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>

                    </h3>
                </div>


                <div class="panel-body">
                    <p><strong>Nombre:</strong><br>{{ $permisos->name }}</p>
                    <p><strong>URL:</strong><br>{{ $permisos->slug }}</p>
                    <p><strong>Descripcion:</strong><br>{{ $permisos->description }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection