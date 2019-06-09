<!-- ##############################
				ver
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('control.show')
					<a href="{{ route('control.show',$p->id_control) }}" class="btn btn-success "><i class="fa fa-eye fa-2x "></i></a>
					@endcan
				</td>

<!-- ##############################
				editar
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('control.edit')
					<a href="{{ route('control.edit', $p->id_control) }}"
						class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
						@endcan
					</td>




<!-- ##############################
				eliminar
				################################### -->

				<td width="10px" style="vertical-align: middle;" >
					@can('control.destroy')
					{!! Form::open(['route'=>['control.destroy',$p->id_control],'method'=>'DELETE']) !!}

					<button class="btn btn-danger"
					onclick="
					return confirm('Esta seguro de eliminar el registro: {{ strtoupper($p->nombre) }} ')"
					class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>
				</button>
				{!! Form::close() !!}
				@endcan
			</td>