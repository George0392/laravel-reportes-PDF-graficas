<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ficha Del Medicamento</title>

    <link rel="stylesheet" href="{{ public_path('css/bootstrap/css/bootstrap.css')}}" />


</head>


<body>




<div class="container">

   <div class="col-md-11 panel-heading ">
    <h4>
        Datos Medicamento:        
    </h4>
    <br>
    <h3 class="text-center">
        {{ $medicamento->nombre }}
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
                    <th class="text-center">Codigo</th>
                    <th class="text-center">Cantidad</th>                
                </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-center">{{$medicamento->nombre }}</td>
                <td class="text-center">{{$medicamento->codigo }}</td>
                <td class="text-center">{{$medicamento->cantidad }}</td>           
            </tr>

        </tbody>

    </table>

    <table class="table table-condensed table-bordered">
                <thead class="bg-success">
                  <tr>
                    <th class="text-center">Cod. Barras</th>
                                   
                </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-center">
                    <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG( $medicamento->codigo , 'EAN13' ,2,60) }}" alt="barcode" />
                </td>
                          
            </tr>

        </tbody>

    </table>
    

</div> <!-- panel body -->

</div> <!-- panel -->
</div> <!-- col -->
</div> <!-- row -->

</body>
</html>
