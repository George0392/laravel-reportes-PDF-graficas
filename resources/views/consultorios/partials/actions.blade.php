<!-- ##############################
				ver
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('consultorios.show')
					<a href="{{ route('consultorios.show',$p->id) }}" class="btn btn-success " target="_blank"><i class="fa fa-eye fa-2x "></i></a>
					@endcan
				</td>

<!-- ##############################
				editar
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('consultorios.edit')
					<a href="{{ route('consultorios.edit', $p->id) }}"
						class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
						@endcan
					</td>




<!-- ##############################
				eliminar
				################################### -->

				<td width="10px" style="vertical-align: middle;" >
					@can('consultorios.destroy')
					{!! Form::open(['route'=>['consultorios.destroy',$p->id],'method'=>'DELETE']) !!}

					<button class="btn btn-danger"
					onclick="
					return confirm('Esta seguro de eliminar el registro: {{ strtoupper($p->nombre) }} ')"
					class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>
				</button>
				{!! Form::close() !!}
				@endcan
			</td>