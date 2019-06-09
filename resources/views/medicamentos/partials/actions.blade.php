<!-- ##############################
				ver
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('medicamento.show')
					<a href="{{ route('medicamentos.show',$p->id) }}" class="btn btn-success " target="_blank"><i class="fa fa-eye fa-2x "></i></a>
					@endcan
				</td>

<!-- ##############################
				editar
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('medicamento.edit')
					<a href="{{ route('medicamentos.edit', $p->id) }}"
						class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
						@endcan
					</td>




<!-- ##############################
				eliminar
				################################### -->

				<td width="10px" style="vertical-align: middle;" >
					@can('medicamento.destroy')
					{!! Form::open(['route'=>['medicamentos.destroy',$p->id],'method'=>'DELETE']) !!}

					<button class="btn btn-danger"
					onclick="
					return confirm('Esta seguro de eliminar el registro: {{ strtoupper($p->nombre) }} ')"
					class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>
				</button>
				{!! Form::close() !!}
				@endcan
			</td>