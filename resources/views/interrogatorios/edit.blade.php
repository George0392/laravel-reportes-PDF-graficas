@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Modificar Datos del Interrogatorio Médico:
                    <a href="{{ route('interrogatorios.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    </h3>
                </div>
                <div class="panel-body">
                    {!! Form::model($interrogatorio, ['route' => ['interrogatorios.update', $interrogatorio->id], 'method' => 'PUT', 'files'=> true ]) !!}
                    @include('interrogatorios.partials.form-edit')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection