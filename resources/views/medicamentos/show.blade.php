@extends('layouts.admin')
@section('contenido')

<div class="container">

   <div class="col-md-11 panel-heading ">
    <h3>
        Datos Medicamento:
        <br>
        <a href="{{ route('medicamentos.index') }}" class="btn btn-success pull-right  btn-lg " ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>


    </h3>
    <br>
    <h2 class="text-center">
        {{ $medicamento->nombre }}
    </h2>
    <a href="{{ route('medicamentos.pdf', $medicamento->id) }}" class="btn btn-info pull-right  btn-lg " ><i class="fa fa-print  " ></i><span> Imprimir</span> </a>

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

</div>    <!-- container -->

@endsection

