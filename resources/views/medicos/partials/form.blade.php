<div class="form-group col-md-6 ">
	{{ Form::label ('cedula','Cedula:') }}
	{{ Form::number ('cedula',null, ['placeholder'=>'Cedula de identidad','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('nombre','Nombre:') }}
	{{ Form::text ('nombre',null, ['placeholder'=>'Nombre completo del medico','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('codigo_medico','Codigo medico:') }}
	{{ Form::text ('codigo_medico',null, ['placeholder'=>'codigo_medico','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('especialidad','Especialidad:') }}
	{{ Form::text ('especialidad',null, ['placeholder'=>'Especialidad del Medico','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('cargo','Cargo:') }}
	{{ Form::text ('cargo',null, ['placeholder'=>'Cargo en el recinto','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('telefono','Telefono:') }}
	{{ Form::text ('telefono',null, ['placeholder'=>'Telefono principal de contacto','class'=>'form-control']) }}
</div>

<div class="form-group col-md-6 ">
	{{ Form::label ('correo','Email:') }}
	{{ Form::text ('correo',null, ['placeholder'=>'Correo Electronico','class'=>'form-control']) }}
</div>

<div class="form-group col-md-10">
	{{ Form::label ('observaciones','Notas adicionales:') }}
	{{ Form::textarea ('observaciones',null, ['placeholder'=>'Observaciones o notas adicionales','class'=>'form-control']) }}
</div>

<div class="form-group col-md-10 ">
	{{ Form::label ('otros',' Otras Notas adicionales:') }}
	{{ Form::textarea ('otros',null, ['placeholder'=>'Otras Observaciones o notas adicionales','class'=>'form-control']) }}
</div>


<div class="form-group col-md-12">
	{{ Form::label ('foto','Fotografia del medico:') }}
	{{ Form::file ('foto',null, ['class'=>'form-control']) }}
</div>


<div class="form-group col-md-12 ">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>