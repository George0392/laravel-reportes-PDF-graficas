@extends('layouts.admin')
@section('contenido')
<div class="container">

   @include('consultorios.partials.error')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Modificar Datos del Consultorio:
                    <a href="{{ route('consultorios.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    </h3>
                </div>
                <div class="panel-body">
                    {!! Form::model($consultorio, ['route' => ['consultorios.update', $consultorio->id], 'method' => 'PUT', 'files'=> true ]) !!}
                    @include('consultorios.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection