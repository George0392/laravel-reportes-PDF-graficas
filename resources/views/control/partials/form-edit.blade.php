     <div class="form-group col-md-10 " >

        	{{ Form::label ('paciente','Paciente:') }}

            {!! Form::select('id_paciente', $pacientes , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}
        </div>

<div class="form-group col-md-6 ">
	{{ Form::label ('motivo_consulta','Motivo:') }}
	{{ Form::textarea ('motivo_consulta',null, ['placeholder'=>'Motivo de la Consulta','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('hea','HEA:') }}
	{{ Form::textarea ('hea',null, ['placeholder'=>'HEA','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('examen_fisico','Examen Fisico:') }}
	{{ Form::textarea ('examen_fisico',null, ['placeholder'=>'Examen Fisico','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('examen_complementario','Examen Complementario:') }}
	{{ Form::textarea ('examen_complementario',null, ['placeholder'=>'Examen Complementario','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('impresion_diagnostica','Impresion Diagnostica:') }}
	{{ Form::textarea ('impresion_diagnostica',null, ['placeholder'=>'Impresion Diagnostica','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('conducta_seguir','Conducta a Seguir:') }}
	{{ Form::textarea ('conducta_seguir',null, ['placeholder'=>'Conducta a Seguir','class'=>'form-control']) }}
</div>


<div class="form-group col-md-12 ">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>