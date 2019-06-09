<div class="form-group col-md-6 ">
	{{ Form::label ('nombre','Nombre:') }}
	{{ Form::text ('nombre',null, ['placeholder'=>'Nombre del Consultorio','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('direccion','Dirección:') }}
	{{ Form::text ('direccion',null, ['placeholder'=>'Dirección del Consultorio','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('telefono','Telefono:') }}
	{{ Form::number ('telefono',null, ['placeholder'=>'Telefono principal del Consultorio','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('municipio','Municipio:') }}
	{{ Form::text ('municipio',null, ['placeholder'=>'Municipio del Consultorio','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('parroquia','Parroquia:') }}
	{{ Form::text ('parroquia',null, ['placeholder'=>'Parroquia del Consultorio','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('estado','Estado:') }}
	{{ Form::text ('estado',null, ['placeholder'=>'Estado','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('asic','ASIC:') }}
	{{ Form::text ('asic',null, ['placeholder'=>'ASIC','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('familia','Consultorio:') }}
	{{ Form::text ('familia',null, ['placeholder'=>'Familias a cubrir','class'=>'form-control']) }}
</div>


<div class="form-group col-md-12 ">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>