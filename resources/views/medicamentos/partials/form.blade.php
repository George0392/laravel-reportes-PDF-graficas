<div class="form-group col-md-6 ">
	{{ Form::label ('codigo','Código de Barras:') }}
	{{ Form::text ('codigo',null, ['placeholder'=>'Codigo del Medicamento','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('nombre','Nombre:') }}
	{{ Form::text ('nombre',null, ['placeholder'=>'Nombre del Consultorio','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('cantidad','Cantidad:') }}
	{{ Form::number ('cantidad',null, ['placeholder'=>'Cantidad Disponible','class'=>'form-control']) }}
</div>


<div class="form-group col-md-12 ">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>