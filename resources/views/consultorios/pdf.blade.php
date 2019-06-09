<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ficha Del Consultorio</title>

    <link rel="stylesheet" href="{{ public_path('css/bootstrap/css/bootstrap.css')}}" />


</head>


<body>




<div class="container">

   <div class="col-md-11 panel-heading ">
    <h4>
        Datos Consultorio:        
    </h4>
    <br>
    <h3 class="text-center">
        {{ $consultorio->nombre }}
    </h3>
    
</div>

<div class="row">
    <div class="col-md-11">
        <div class="panel panel-default">

            <div class="panel-heading">

                <div class="row">

                </div> <!-- row -->
                <br>

            </div> <!-- panel heading -->
            <div class="panel-body">
              <h3 class="panel-title">Datos Consultorio</h3>

              <table class="table table-condensed table-bordered">
                <thead class="bg-success">
                  <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Dirección</th>
                    <th class="text-center">Telefono</th>                
                </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-center">{{$consultorio->nombre }}</td>
                <td class="text-center">{{$consultorio->direccion }}</td>
                <td class="text-center">{{$consultorio->telefono }}</td>           
            </tr>

        </tbody>

    </table>

    <hr>

    <table class="table table-condensed table-bordered">
                <thead class="bg-success">
                  <tr>
                    <th class="text-center">Municipio</th>
                    <th class="text-center">Parroquia</th>
                    <th class="text-center">Estado</th>                
                </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-center">{{$consultorio->municipio }}</td>
                <td class="text-center">{{$consultorio->parroquia }}</td>
                <td class="text-center">{{$consultorio->estado }}</td>           
            </tr>

        </tbody>

    </table>

    <table class="table table-condensed table-bordered">
                <thead class="bg-success">
                  <tr>
                    <th class="text-center">ASIC</th>
                    <th class="text-center">Familias</th>
                           
                </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-center">{{$consultorio->asic }}</td>
                <td class="text-center">{{$consultorio->familia }}</td>
                      
            </tr>

        </tbody>

    </table>

</div> <!-- panel body -->

</div> <!-- panel -->
</div> <!-- col -->
</div> <!-- row -->

</div>    <!-- container -->
    






</body>
</html>
