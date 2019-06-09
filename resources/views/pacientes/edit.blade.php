@extends('layouts.admin')
@section('contenido')
<div class="container">
       @include('pacientes.partials.error')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Modificar Datos del Paciente:
                    <a href="{{ route('pacientes.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    </h3>
                </div>
                <div class="panel-body">
                    {!! Form::model($paciente, ['route' => ['pacientes.update', $paciente->id], 'method' => 'PUT', 'files'=> true ]) !!}
                    @include('pacientes.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection