<!-- ##############################
				ver
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('entregas.show')
					<a href="{{ route('entregas.show',$p->id_entrega) }}" class="btn btn-success "><i class="fa fa-eye fa-2x "></i></a>
					@endcan
				</td>

<!-- ##############################
				editar
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('entregas.edit')
					<a href="{{ route('entregas.edit', $p->id_entrega) }}"
						class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
						@endcan
					</td>




<!-- ##############################
				eliminar
				################################### -->

				<td width="10px" style="vertical-align: middle;" >
					@can('entregas.destroy')
					{!! Form::open(['route'=>['entregas.destroy',$p->id_entrega],'method'=>'DELETE']) !!}

					<button class="btn btn-danger"
					onclick="
					return confirm('Esta seguro de eliminar el registro: {{ strtoupper($p->nom_paciente) }} ')"
					class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>
				</button>
				{!! Form::close() !!}
				@endcan
			</td>