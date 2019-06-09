<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ficha Interrogatorio</title>

    <link rel="stylesheet" href="{{ public_path('css/bootstrap/css/bootstrap.css')}}" />

<style>

body {
    font-size: 0.9em ;
}


</style>

</head>
<body>

    <div class="container">

 <div class="col-md-11 panel-heading ">
      <h4 class="text-center">
        {{ $interrogatorio->nombre }}
    </h4>

</div>

<div class="row">
    <div class="col-md-11">
        <div class="panel panel-default">

            <div class="panel-heading">

       </div> <!-- panel heading -->
       <div class="panel-body">
          <table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center">Fecha</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Cedula</th>
                <th class="text-center">#Historia</th>


            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-center">{{ date('d/m/Y', strtotime($interrogatorio->created_at)) }}</td>
            <td class="text-center">{{$interrogatorio->nombre }}</td>
            <td class="text-center">{{$interrogatorio->sexo }}</td>
            <td class="text-center">{{$interrogatorio->cedula }}</td>
            <td class="text-center">{{$interrogatorio->num_historia }}</td>



        </tr>

    </tbody>

</table>

<table class="table table-condensed table-bordered">
            <thead class="bg-success">
              <tr>
                <th class="text-center "><h4>Ficha Interrogatorio del {{ date('d/m/Y', strtotime($interrogatorio->created_at)) }} </h4></th>
            </tr>
        </thead>

</table>




<table class="table table-condensed table-bordered page-break " >
            <thead class="bg-success">
              <tr>
                <th class="text-center">Antecedentes Personales</th>
                <th class="text-center">Antecedentes Familiares</th>
                <th class="text-center">Hábitos Psicobiologicos</th>



            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-justify">{{$interrogatorio->app }}</td>
            <td class="text-justify">{{$interrogatorio->apf }}</td>
            <td class="text-justify">{{$interrogatorio->hpsico}}</td>

        </tr>

    </tbody>


    <thead class="bg-success">
              <tr>
                <th class="text-center">Examen funcional General</th>
                <th class="text-center">Piel</th>
                <th class="text-center">Cabeza</th>



            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-justify">{{$interrogatorio->efg }}</td>
            <td class="text-justify">{{$interrogatorio->piel }}</td>
            <td class="text-justify">{{$interrogatorio->cabeza}}</td>

        </tr>

    </tbody>

    <thead class="bg-success">
              <tr>
                <th class="text-center">Ojos</th>
                <th class="text-center">Oidos</th>
                <th class="text-center">Nariz</th>

            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-justify">{{$interrogatorio->ojos }}</td>
            <td class="text-justify">{{$interrogatorio->oidos }}</td>
            <td class="text-justify">{{$interrogatorio->nariz}}</td>

        </tr>

    </tbody>



    <thead class="bg-success">
              <tr>
                <th class="text-center">Boca</th>
                <th class="text-center">Garganta</th>
                <th class="text-center">Respiratorio</th>



            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-justify">{{$interrogatorio->boca }}</td>
            <td class="text-justify">{{$interrogatorio->garganta }}</td>
            <td class="text-justify">{{$interrogatorio->respiratorio}}</td>

        </tr>

    </tbody>



<thead class="bg-success">
              <tr>
                <th class="text-center">Sistema Osteomioarticular</th>
                <th class="text-center">Cardiovascular</th>
                <th class="text-center">Gastrointestinal</th>



            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-justify">{{$interrogatorio->soma }}</td>
            <td class="text-justify">{{$interrogatorio->cardio }}</td>
            <td class="text-justify">{{$interrogatorio->gastro}}</td>

        </tr>

    </tbody>



<thead class="bg-success">
              <tr>
                <th class="text-center">Genitourinario</th>
                <th class="text-center">Psicologico</th>
                <th class="text-center">Nervioso y Mental</th>



            </tr>
        </thead>

        <tbody>
          <tr>
            <td class="text-justify">{{$interrogatorio->geni_uri }}</td>
            <td class="text-justify">{{$interrogatorio->psicologico }}</td>
            <td class="text-justify">{{$interrogatorio->nerv_mental}}</td>

        </tr>

    </tbody>






</table>

<hr>






</div> <!-- panel body -->

</div> <!-- panel -->
</div> <!-- col -->
</div> <!-- row -->

</div>    <!-- container -->


</body>
</html>
