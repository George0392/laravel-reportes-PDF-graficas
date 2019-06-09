        <div class="form-group col-md-6 " >

        	{{ Form::label ('paciente','Paciente:') }}

            {!! Form::select('id_paciente', $pacientes , null, ['data-live-search'=>'true' ,'class'=>'form-control selectpicker '] ) !!}

        </div>

        <div class="clearfix" ></div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('app',' APP:') }}
            {{ Form::textarea ('app',null, ['placeholder'=>' Antecedentes Familiares','class'=>'form-control']) }}
        </div>


        <div class="form-group col-md-6 ">
            {{ Form::label ('apf',' APF:') }}
            {{ Form::textarea ('apf',null, ['placeholder'=>' Antecedentes Familiares','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('hpsico',' HPSICO:') }}
            {{ Form::textarea ('hpsico',null, ['placeholder'=>' Habitos Psicologicos','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('efg',' EFG:') }}
            {{ Form::textarea ('efg',null, ['placeholder'=>' Examen Funcional General','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('piel',' PIEL:') }}
            {{ Form::textarea ('piel',null, ['placeholder'=>' Piel','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('cabeza',' CABEZA:') }}
            {{ Form::textarea ('cabeza',null, ['placeholder'=>' Cabeza','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('ojos',' OJOS:') }}
            {{ Form::textarea ('ojos',null, ['placeholder'=>' Ojos','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('oidos',' OIDOS:') }}
            {{ Form::textarea ('oidos',null, ['placeholder'=>' Oidos','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('nariz',' NARIZ:') }}
            {{ Form::textarea ('nariz',null, ['placeholder'=>' Nariz','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('boca',' BOCA:') }}
            {{ Form::textarea ('boca',null, ['placeholder'=>' Boca','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('garganta',' GARGANTA:') }}
            {{ Form::textarea ('garganta',null, ['placeholder'=>' Garganta','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('respiratorio',' RESPIRATORIO:') }}
            {{ Form::textarea ('respiratorio',null, ['placeholder'=>' Respiratorio','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('soma',' SOMA:') }}
            {{ Form::textarea ('soma',null, ['placeholder'=>' Sistema Osteomioarticular','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('cardio',' CARDIOVASCULAR:') }}
            {{ Form::textarea ('cardio',null, ['placeholder'=>' Cardiovascular','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('gastro',' GASTROINTESTINAL:') }}
            {{ Form::textarea ('gastro',null, ['placeholder'=>' Gastrointestinal','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('geni_uri',' GENITOURINARIO:') }}
            {{ Form::textarea ('geni_uri',null, ['placeholder'=>' Genitourinario','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('psicologico',' PSICOLOGICO:') }}
            {{ Form::textarea ('psicologico',null, ['placeholder'=>' Psicologico','class'=>'form-control']) }}
        </div>

        <div class="form-group col-md-6 ">
            {{ Form::label ('nerv_mental',' NERVIOSO Y MENTAL:') }}
            {{ Form::textarea ('nerv_mental',null, ['placeholder'=>' Nervioso y mental','class'=>'form-control']) }}
        </div>


        <br>

        <div class="form-group col-md-12 ">
           {{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
           {{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg'] )  }}
       </div>