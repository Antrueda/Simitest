<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

input[type="checkbox"]:checked {
    box-shadow: 0 0 2px #0069d9, 0 0 10px #0069d9, 0 0 15px #0069d9;
}

input[type="checkbox"]:hover {
    box-shadow: 0 0 2px #A9A9A9, 0 0 10px #A9A9A9, 0 0 15px #A9A9A9;
}
.perfilvocacional .lista{
    height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}

table, th, td {
  border: 2px solid black;
}
</style>


<div class="row">

<div class="form-group col-md-6">
        {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>

        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', old('fecha'), ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
            @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
            @endif
        </div>

        <div class="form-group col-md-12">
            {!! Form::label('sintoma', 'Sintoma:', ['class' => 'control-label']) !!}
            {!! Form::textarea('sintoma', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('sintoma')"]) !!}
            <p id="sintoma_char_counter" class="text-right">0/500</p>
            @if($errors->has('sintoma'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sintoma') }}
            </div>
            @endif
        </div>


       


        <style>
            .has-error .select2-selection {
            border-color: rgb(185, 74, 72) !important;
        }
        </style>
        <div class="form-row">
        
            
            <div class="form-group col-md-4" {{$errors->first('prm_actividad_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_actividad_id', ' MOTIVO DE ATENCIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_actividad_id', $todoxxxx['prm_acti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
                @if($errors->has('prm_actividad_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_actividad_id') }}
                </div>
                @endif
            </div>


            <div id="tipo_curso_box" class="d-none form-group col-md-6 {{$errors->first('prm_tipo_curso') ? 'has-error' : ''}}">
                {!! Form::label('prm_tipo_curso', 'TIPO DE ATENCIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_tipo_curso', $todoxxxx['tpcursos'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_tipo_curso'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_tipo_curso') }}
                </div>
                @endif
            </div>
            

            <div id="observaciones" class="d-none form-group col-md-12 {{$errors->first('observacion') ? 'has-error' : ''}}">
                {!! Form::label('observacion', 'OBSERVACIONES:', ['class' => 'control-label']) !!}
                {!! Form::textarea('observacion', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('observacion')"]) !!}
                <p id="observacion_char_counter" class="text-right">0/4000</p>
                @if($errors->has('observacion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('observacion') }}
                </div>
                @endif
            </div>

        
            <div id="prm_convenio_id_field" class="d-none form-group col-md-6 {{$errors->first('prm_convenio_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_convenio_id', 'CONVENIO /PROGRAMA:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_convenio_id',$todoxxxx['convenios_progs'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_convenio_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_convenio_id') }}
                </div>
                @endif
            </div>
            <div id="tipoacti_id_field" class="d-none form-group col-md-6 {{$errors->first('tipoacti_id') ? 'has-error' : ''}}">
                {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
                {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
                @if($errors->has('tipoacti_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipoacti_id') }}
                </div>
                @endif
            </div>
            <div id="actividade_id_field" class="d-none form-group col-md-6 {{$errors->first('actividade_id') ? 'has-error' : ''}}">
                {!! Form::label('actividade_id', 'Actividad:', ['class' => 'control-label']) !!}
                {!! Form::select('actividade_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('actividade_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('actividade_id') }}
                </div>
                @endif
            </div>
         
            <div id="curso_box" class="d-none form-group col-md-6 {{$errors->first('prm_curso') ? 'has-error' : ''}}">
                {!! Form::label('prm_curso', 'CURSO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_curso', $todoxxxx['cursosxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_curso'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_curso') }}
                </div>
                @endif
            </div>
            <div id="grado_id_field" class="d-none form-group col-md-6 {{$errors->first('eda_grados_id') ? 'has-error' : ''}}">
                {!! Form::label('eda_grados_id', 'GRADO:', ['class' => 'control-label']) !!}
                {!! Form::select('eda_grados_id', $todoxxxx['gradosxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('eda_grados_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('eda_grados_id') }}
                </div>
                @endif
            </div>
            <div id="grupo_id_field" class="d-none form-group col-md-6 {{$errors->first('prm_grupo_id') ? 'has-error' : ''}}">
                {!! Form::label('prm_grupo_id', 'GRUPO:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_grupo_id', $todoxxxx['gruposxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
                @if($errors->has('prm_grupo_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_grupo_id') }}
                </div>
                @endif
            </div>
            
          
            <div class="form-group col-md-6">
                {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el registro:', ['class' => 'control-label']) !!}
                {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
                @if($errors->has('user_fun_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('user_fun_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('user_res_id', 'Responsable de UPI:', ['class' => 'control-label']) !!}
                {!! Form::select('user_res_id', $todoxxxx['usuariox'], null, ['class' => 'form-control form-control-sm','required','id'=>'responsable']) !!}
                @if($errors->has('user_res_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('user_res_id') }}
                </div>
                @endif
            </div>
        
        </div>
        
    
   
