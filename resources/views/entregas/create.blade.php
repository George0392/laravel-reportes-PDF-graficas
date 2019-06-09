@extends('layouts.admin')
@section('contenido')
<div class="container">

    @include('entregas.partials.error')

    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Registrar Entrega:
                    <a href="{{ route('entregas.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    </h3>
                </div>
                <div class="panel-body">
                   {{ Form::open(['route' => 'entregas.store']) }}
                    @include('entregas.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
