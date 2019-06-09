@extends('layouts.admin')
@section('contenido')
<div class="container">

    @include('medicamentos.partials.error')

    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                    Ingresar nuevo Medicamento:
                    <a href="{{ route('medicamentos.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    </h3>
                </div>
                <div class="panel-body">
                   {{ Form::open(['route' => 'medicamentos.store']) }}
                    @include('medicamentos.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
