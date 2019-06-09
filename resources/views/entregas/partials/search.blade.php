
<div class="col-md-10">

{{ Form::open(['route' => ['entregas.index'],'method'=>'GET','autocomplete'=>'off', 'role'=>'search']) }}
  <div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control " name="searchtext" placeholder="Buscar por Nombre del Paciente Cedula, Numero de Historia ó Medicina...">
		<span class="input-group-btn ">
			<button type="submit" class="btn btn-primary" > Buscar </button>
		</span>
	</div>
</div>
{{ Form::close() }}
</div>