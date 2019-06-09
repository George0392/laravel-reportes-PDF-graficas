<div class="form-group">
	{{ Form::label ('name','Nombre del Usuario:') }}
	{{ Form::text ('name',null, ['placeholder'=>'Nombre','class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label ('phone','Telefono del Usuario:') }}
	{{ Form::number ('phone',null, ['placeholder'=>'Telefono de contacto','class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label ('address','Direccion del Usuario:') }}
	{{ Form::text ('address',null, ['placeholder'=>'Direccion','class'=>'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label ('photo','imagen del Usuario:') }}
	{{ Form::file ('photo',null, ['class'=>'form-control']) }}
</div>


<hr>
<h3> Roles del Usuario </h3>
<div class="form-group">
	<ul class="list-unstyled" >
		@foreach($roles as $rol)
		<li>
			<label>
				{{ Form::checkbox('roles[]',$rol->id,null) }}
				{{ $rol->name }}
				<em>{{ $rol->description ?: '( Sin Descripcion )' }}</em>
			</label>
		</li>
		@endforeach


	</ul>

</div>

<div class="form-group">
	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
</div>