<div class="form-group">
	{{ Form::label ('name','Nombre del permiso:') }}
	{{ Form::text ('name',null, ['placeholder'=>'Nombre del permiso','class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label ('slug','URL amigable:') }}
	{{ Form::text ('slug',null, ['placeholder'=>'url del permiso','class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label ('description','Descripcion:') }}
	{{ Form::textarea ('description',null, ['placeholder'=>'Descripcion del permiso','class'=>'form-control']) }}
</div>

<div class="form-group">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>
