{{--
#########################################################
                datos del paciente
#########################################################
 --}}
<div class="stepy-step"> {{-- paso 1 --}}

    <h3 class="text-info" >Datos Personales</h3>

    <hr>

    <div class="form-group col-md-6 " >
        {{ Form::label ('cedula','Cedula:') }}
        {{ Form::number ('cedula',null, ['placeholder'=>'Cedula de identidad','class'=>'form-control','id'=>'cedula', 'onblur'=>'codigo()' ]) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('num_historia','Numero de Historia:') }}
        {{ Form::text ('num_historia',null, ['placeholder'=>'Numero de Historia del Paciente','class'=>'form-control','id'=>'historia' ,'readonly' ]) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('nombre','Nombres y Apellidos:') }}
        {{ Form::text ('nombre',null, ['placeholder'=>'Nombres y Apellidos','class'=>'form-control ','id'=>'nombre' , 'onblur'=>'codigo()' ]) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('fecha_nac','Fecha Nacimiento:') }}
        {{ Form::date ('fecha_nac',null, ['placeholder'=>'Cedula de identidad','class'=>'form-control']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('telefono','Telefono:') }}
        {{ Form::number ('telefono',null, ['placeholder'=>'Telefono','class'=>'form-control']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('sexo','Sexo:') }}
        {{ Form::select('sexo', ['M' => 'M', 'F' => 'F'], 'M' , ['class'=>'form-control' , 'id' => 'sexo' ]) }}
    </div>

    <div class="form-group col-md-12 " >
        {{ Form::label ('direccion','Dirección:') }}
        {{ Form::textarea ('direccion',null, ['placeholder'=>'Direccion','class'=>'form-control ','rows' => '2']) }}
    </div>



    <div class="form-group col-md-6 ">
        {{ Form::label ('foto','Fotografia del paciente:') }}
        {{ Form::file ('foto',null, ['class'=>'form-control']) }}
    </div>

    <div id="femenino" >

        <div class="clearfix"></div>
        <h3 class="text-info" > Femenino </h3>

        <div class="form-group col-md-6 " >
        {{ Form::label ('menarquia','Menarquia:') }}
        {{ Form::text ('menarquia',null, ['placeholder'=>'Menarquia ','class'=>'form-control ']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('embarazos','Embarazos:') }}
        {{ Form::text ('embarazos',null, ['placeholder'=>'Embarazos ','class'=>'form-control ']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('menstrual','Menstrual:') }}
        {{ Form::text ('menstrual',null, ['placeholder'=>'Menstrual ','class'=>'form-control ']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('partos','partos:') }}
        {{ Form::text ('partos',null, ['placeholder'=>'partos ','class'=>'form-control ']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('abortos','Abortos:') }}
        {{ Form::text ('abortos',null, ['placeholder'=>'Abortos ','class'=>'form-control ']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('menopausia','Menopausia:') }}
        {{ Form::text ('menopausia',null, ['placeholder'=>'Menopausia ','class'=>'form-control ']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('citologia','Citologia:') }}
        {{ Form::text ('citologia',null, ['placeholder'=>'Citologia ','class'=>'form-control ']) }}
    </div>


    </div>



</div> {{-- fin paso 1 --}}
{{--
#########################################################
                fin datos del paciente
#########################################################
--}}

{{--
#########################################################
                datos clinicos 1
#########################################################
 --}}
<div class="stepy-step"> {{-- paso 2 --}}

    <h3 class="text-info" >Datos Clínicos 1 - 2 </h3>

    <hr>

   <div class="form-group col-md-6 " >
        {{ Form::label ('app','APP:') }}
        {{ Form::textarea ('app',null, ['placeholder'=>'APP','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('apf','APF:') }}
        {{ Form::textarea ('apf',null, ['placeholder'=>'APF','class'=>'form-control ','rows' => '4']) }}
    </div>

     <div class="form-group col-md-4 " >
        {{ Form::label ('grupo_sangre','Grupo sanguineo:') }}
        {{ Form::select('grupo_sangre', ['A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], null , ['class'=>'form-control' ]) }}
    </div>

    <div class="form-group col-md-4 " >
        {{ Form::label ('rh','RH:') }}
        {{ Form::select('rh', ['+' => '+', '-' => '-'], null , ['class'=>'form-control' ]) }}
    </div>

    <div class="form-group col-md-4 " >
        {{ Form::label ('vacunacion','Vacunación:') }}
        {{ Form::select('vacunacion', ['SI' => 'SI', 'NO' => 'NO'], null , ['class'=>'form-control' ]) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('reaccion_med','Reaccion Medica:') }}
        {{ Form::textarea ('reaccion_med',null, ['placeholder'=>'Reaccion Medica','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('alergias','Alergias:') }}
        {{ Form::textarea ('alergias',null, ['placeholder'=>'Alergias','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('piel','Piel:') }}
        {{ Form::textarea ('piel',null, ['placeholder'=>'Piel','class'=>'form-control ','rows' => '4']) }}
    </div>

        <div class="form-group col-md-6 " >
        {{ Form::label ('etnia','etnia:') }}
        {{ Form::textarea ('etnia',null, ['placeholder'=>'etnia','class'=>'form-control ','rows' => '4']) }}
    </div>



</div> {{-- fin paso 2 --}}
{{--
#########################################################
                fin datos clinicos 1
#########################################################
--}}


{{--
#########################################################
                datos clinicos 2
#########################################################
 --}}
<div class="stepy-step"> {{-- paso 2 --}}

    <h3 class="text-info" >Datos Clínicos 2 - 2 </h3>

    <hr>

   <div class="form-group col-md-6 " >
        {{ Form::label ('cafe','Café:') }}
        {{ Form::textarea ('cafe',null, ['placeholder'=>'Café, Cuantas tazas al dia, tamaño de la taza','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('tabaco','Tabaco o Cigarro:') }}
        {{ Form::textarea ('tabaco',null, ['placeholder'=>'Tabaco o Cigarro, Cuantos al dia ','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('alcohol','Alcohol:') }}
        {{ Form::textarea ('alcohol',null, ['placeholder'=>'Alcohol, Cuantas vasos al dia, tamaño de la taza','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('otros','Otras adicciones o Vicios:') }}
        {{ Form::textarea ('otros',null, ['placeholder'=>'Otras adicciones o Vicios, Cuantas veces al dia ','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('trans_sangre','Transferencias de Sangre:') }}
        {{ Form::textarea ('trans_sangre',null, ['placeholder'=>'Transferencias de sangre, Especifique la Fecha ','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('accidentes','Accidentes:') }}
        {{ Form::textarea ('accidentes',null, ['placeholder'=>'Accidentes, Especifique la Fecha ','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('traumatismos','Traumatismos:') }}
        {{ Form::textarea ('traumatismos',null, ['placeholder'=>'Traumatismos, Especifique la Fecha ','class'=>'form-control ','rows' => '4']) }}
    </div>

    <div class="form-group col-md-6 " >
        {{ Form::label ('operaciones','Operaciones:') }}
        {{ Form::textarea ('operaciones',null, ['placeholder'=>'Operaciones, Especifique la Fecha ','class'=>'form-control ','rows' => '4']) }}
    </div>



<br>

<div class="form-group col-md-12 ">
    {{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
    {{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>



</div> {{-- fin paso 2 --}}
{{--
#########################################################
                fin datos clinicos 2
#########################################################
--}}



@push ('scripts')

<script type="text/javascript">

$(document).ready(function(){

    $("#femenino").hide();

    $('#sexo').on("change", function(){
        var sexo_paciente = document.getElementById("sexo");
        if (sexo_paciente.value == 'F') {
             $("#femenino").show();
        }
        else {
             $("#femenino").hide();
        }
    });


$(function () {
        $("form").stepyform({
            navButtonsAttrs: {
                "class":"navigate"
            },
            nextButtonsClass: "btn btn-success btn-lg ",
            prevButtonsClass: "btn btn-warning btn-lg ",
            prevButtonText: "Anterior",
            nextButtonText: "Siguiente",


            onChangeStep: function(){
                console.log(this)
            }
        })

    })

})

function codigo()
    {
        var ced = document.getElementById("cedula").value;
        var fecha = new Date();

        var palabras = document.getElementById("nombre").value;
        var resultado= palabras.concat(' ').replace(/([a-zA-Z]{0,} )/g, function(match){ return (match.trim()[0]);});

        var final = document.getElementById("historia").value= resultado.toUpperCase() + ced + fecha.getDay() + fecha.getMonth() +fecha.getFullYear();

    }


</script>

@endpush