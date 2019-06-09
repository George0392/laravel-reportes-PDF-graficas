@extends('layouts.admin')
@section('contenido')



<div class="container">
  <div class="row">
    <div class="col-md-11">
      <div class="panel panel-info ">
        <div class="panel-heading">Total de Consultas por mes: </div>

        <div class="panel-body">

          {{-- grafico --}}

          <canvas id="canvas"></canvas>

          {{-- fin grafico --}}


        </div>
      </div>
    </div>
  </div>
</div>

@push ('scripts')

<script src="{{ asset('js/graficos/chart.min.js') }}"></script>
<script src="{{ asset('js/graficos/utils.js') }}"></script>


<script>
  var url = "{{url('graficas/estadisticas')}}";
  var sexo = new Array();
  var mes = new Array();
  var total = new Array();

var color = Array(
            window.chartColors.red,
            window.chartColors.orange,
            window.chartColors.green,
            window.chartColors.yellow,
            window.chartColors.blue,
            window.chartColors.purple,
            window.chartColors.red,
            window.chartColors.orange,
            window.chartColors.green,
            window.chartColors.yellow,
            window.chartColors.blue,
            window.chartColors.purple,
)



  $(document).ready(function(){
    $.get(url, function(response){
      response.forEach(function(data){

        sexo.push(data.sexo);
        mes.push(data.mes);
        total.push(data.total);

      });
      var ctx = document.getElementById("canvas").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels:mes,
          datasets: [{
            label: 'Total de Consultas por mes: ',
            data: total,
            backgroundColor: color,
            borderColor:color,
            borderWidth: 1
          },]
        },
        options: {

          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    });
  });
</script>

@endpush

@endsection