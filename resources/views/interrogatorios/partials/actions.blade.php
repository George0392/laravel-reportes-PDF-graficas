<!-- ##############################
				ver
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('interrogatorios.show')
					<a href="{{ route('interrogatorios.show',$p->id) }}" class="btn btn-success "><i class="fa fa-eye fa-2x "></i></a>
					@endcan
				</td>

<!-- ##############################
				imprimir
				################################### -->

			{{-- 	<td width="10px" style="vertical-align: middle;"  >
					@can('interrogatorios.show')
					<a href="{{ route('interrogatorios.pdf',$p->id) }}" class="btn btn-info " target="_blank"><i class="fa fa-print fa-2x "></i></a>
					@endcan
				</td> --}}

<!-- ##############################
				editar
				################################### -->

				<td width="10px" style="vertical-align: middle;"  >
					@can('interrogatorios.edit')
					<a href="{{ route('interrogatorios.edit', $p->id) }}"
						class="btn btn-warning "><i class="fa fa-edit fa-2x "></i></a>
						@endcan
					</td>





<!-- ##############################
				eliminar
				################################### -->

				<td width="10px" style="vertical-align: middle;" >
					@can('interrogatorios.destroy')
					{!! Form::open(['route'=>['interrogatorios.destroy',$p->id],'method'=>'DELETE']) !!}

					<button class="btn btn-danger"
					onclick="
					return confirm('Esta seguro de eliminar el registro: {{ strtoupper($p->nombre) }} ')"
					class="btn btn-danger"><i class="fa fa-trash fa-2x "></i>
				</button>
				{!! Form::close() !!}
				@endcan
			</td>