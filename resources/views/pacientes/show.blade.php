@extends('layouts.admin')
@section('contenido')

<div class="container">

 <div class="col-md-11 panel-heading ">
    <h3>
        Ficha Técnica del Medico:
        <br>
        <a href="{{ route('pacientes.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>


    </h3>
<br>
    <h2 class="text-center">
        {{ $paciente->nombre }}
    </h2>
{{-- <a href="{{ route('pacientes.pdf') }}" class="btn btn-info pull-right  btn-lg " ><i class="fa fa-download  " ></i><span> Descargar</span> </a> --}}

</div>

<div class="row">
    <div class="col-md-11">
        <div class="panel panel-default">

            <div class="panel-heading">

                <div class="row">

                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="medico" class="col-sm-2 control-label"> <strong> Nombre </strong></label>
                            <div class="col-sm-10">
                                {{ $paciente->nombre }}
                            </div>
                        </div>
                    </div> --}}

{{--##############################################
foto
############################################## --}}

                    <div class="col-md-12">


                    <img class="pull-right" height="200px" width="200px" src="{{ $paciente->foto }}">



                    </div>

{{--##############################################
fin foto
############################################## --}}

                </div> <!-- row -->
                <br>

       </div> <!-- panel heading -->
       <div class="panel-body">
          <h3 class="panel-title">Ficha Tecnica</h3>

          <table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Cedula</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Numero de Historia</th>
                <th class="text-center">Estado Civil</th>
                <th class="text-center">Nivel Educativo</th>

            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-center">{{$paciente->nombre }}</td>
            <td class="text-center">{{$paciente->cedula }}</td>
            <td class="text-center">{{$paciente->sexo }}</td>
            <td class="text-center">{{$paciente->num_historia }}</td>
            <td class="text-center">{{$paciente->edo_civil}}</td>
            <td class="text-center">{{$paciente->nivel_educativo }}</td>


        </tr>

    </tbody>

</table>

<hr>

<table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center ">Ocupación</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Dirección</th>

            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-center">{{$paciente->ocupacion }}</td>
            <td class="text-justify">{{$paciente->telefono }}</td>
             <td class="text-justify">{{$paciente->direccion }}</td>

        </tr>

    </tbody>
</table>


<table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center ">Observaciones</th>

            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-center">{{$paciente->observaciones }}</td>

        </tr>

    </tbody>
</table>

</div> <!-- panel body -->

</div> <!-- panel -->
</div> <!-- col -->
</div> <!-- row -->

</div>    <!-- container -->

@endsection

