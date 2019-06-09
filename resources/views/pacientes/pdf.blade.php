<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ficha Del Medico</title>

    <link rel="stylesheet" href="{{ public_path('css/bootstrap/css/bootstrap.css')}}" />


</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <br>

                    </div> <!-- panel heading -->
                    <div class="panel-body">
                      <h3 class="panel-title">Ficha Tecnica</h3>

                      <table class="table table-condensed table-bordered">
                        <thead class="bg-success">
                          <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Cedula</th>
                            <th class="text-center">Codigo Medico</th>
                            <th class="text-center">Especialidad</th>
                            <th class="text-center">Cargo</th>

                        </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td class="text-center">{{$doctor->nombre }}</td>
                        <td class="text-center">{{$doctor->cedula }}</td>
                        <td class="text-center">{{$doctor->codigo_medico }}</td>
                        <td class="text-center">{{$doctor->especialidad}}</td>
                        <td class="text-center">{{$doctor->cargo }}</td>


                    </tr>
                </tbody>

            </table>

            <hr>

            <table class="table table-condensed table-bordered">
                <thead class="bg-success">
                  <tr>
                    <th class="text-center ">Telefono</th>
                    <th class="text-center">Observaciones</th>

                </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-center">{{$doctor->telefono }}</td>
                <td class="text-justify">{{$doctor->observaciones }}</td>

            </tr>

        </tbody>
    </table>

</div> <!-- panel body -->

</div> <!-- panel -->
</div> <!-- col -->
</div> <!-- row -->

</div>
</body>
</html>
