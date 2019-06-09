     <div class="form-group col-md-6 " >

     	{{ Form::label ('paciente','Paciente:') }}

          {!! Form::select('id_paciente', $pacientes , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}

     </div>


     <div class="form-group col-md-6 " >

     	{{ Form::label ('id_consultorio','Consultorio:') }}

     	{!! Form::select('id_consultorio', $consultorios , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}

     </div>

         <div class="form-group col-md-6 " >

     	{{ Form::label ('medico','Medico:') }}

     	{!! Form::select('id_medico', $medicos , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}


     </div>

     <div class="form-group col-md-6 " >

     	{{ Form::label ('id_medicamento','Medicina:') }}

     	{!! Form::select('id_medicamento', $medicamentos , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}

     </div>


     <div class="form-group col-md-6 ">
     	{{ Form::label ('cantidad','Cantidad:') }}
     	{{ Form::number ('cantidad',null, ['placeholder'=>'Cantidad entregada','class'=>'form-control']) }}
     </div>

     <div class="form-group col-md-12 ">
     	{{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
     	{{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
     </div>