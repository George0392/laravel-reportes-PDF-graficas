@extends('layouts.admin')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col-md-11">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3>
                        Medicamentos Registrados en el Sistema
                        @can('medicamentos.create')
                        <a href="{{ route('medicamentos.create') }}" class="btn btn-primary btn-lg  pull-right " ><i class="fa fa-plus " ></i><span> Nuevo</span> </a>
                        @endcan
                    </h3>

                </div>
                <div class="panel-body">
                  @include('medicamentos.partials.search')
              </div>
              <table class="table table-hover table-striped table-responsive" >
                <thead>
                    <tr>
                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Código</th>
                        <th class="text-center" >Cod. Barras</th>
                        <th class="text-center" >Inventario</th>
                        <th colspan="3" class="text-center"  >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicamento as $p )
                    <tr>

                        <td style="vertical-align: middle;" >
                            {{ $p->nombre }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            {{ $p->codigo }}
                        </td>
                        <td class="text-center" style="vertical-align: middle;" >
                            <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG( $p->codigo , 'EAN13' ,1,45) }}" alt="barcode" />
                        </td>

                        @if($p->cantidad ==0)

                        <td class="text-center" style="vertical-align: middle;background: #dd4b39;color: white;" >
                            {{ $p->cantidad }}
                        </td>

                        @elseif($p->cantidad>=10)
                        <td class="text-center text-primary" style="vertical-align: middle;background: #008d4c;color: white;" >
                            {{ $p->cantidad }}
                        </td>
                        @elseif($p->cantidad<10 and $p->cantidad>1 )
                        <td class="text-center text-primary" style="vertical-align: middle;background: #e08e0b;color: white;" >
                            {{ $p->cantidad }}
                        </td>
                        @else
                        <td class="text-center" style="vertical-align: middle" >
                            {{ $p->cantidad }}
                        </td>
                        @endif



                        <td >

                            @include('medicamentos.partials.actions')


                        </td>
                    </tr>

                    @endforeach

                    <tfoot>

                        <th class="text-center" >Nombre</th>
                        <th class="text-center" >Código</th>
                        <th class="text-center" >Cod. Barras</th>
                        <th class="text-center" >Inventario</th>
                        <th colspan="3" class="text-center"  >Acciones</th>

                    </tfoot>


                </tbody>
            </table>
        </div>
        {{ $medicamento->render() }}
    </div>
</div>
</div>
@endsection