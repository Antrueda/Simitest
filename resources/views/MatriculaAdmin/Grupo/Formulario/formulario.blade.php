<div class="form-row align-items-end">
    <div class="form-group col-md-6">
        {{ Form::label('s_grupo', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_grupo', null, ['class' => $errors->first('s_grupo') ? 'form-control form-control-sm is-invalid ' :
            'form-control form-control-sm', 'placeholder' => 'Nombre del Grupo', 'maxlength' => '120',
            'autofocus',"onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase']) }}
        @if($errors->has('s_grupo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_grupo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('observacion', 'Descripción:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid contarcaracteres' :
            'form-control form-control-sm contarcaracteres', 'placeholder' => 'Escriba una descripción para el Grupo',
            'contador'=>'observacion','maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="contadorobservacion">0/4000</p>
        @if($errors->has('observacion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observacion') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('horario', 'Horario:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::time('horario', null, ['class' => $errors->first('horario') ? 'form-control form-control-sm is-invalid ' :
            'form-control form-control-sm', 'placeholder' => 'Nombre del Grupo', 'maxlength' => '120',
            'autofocus',"onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase']) }}
        @if($errors->has('horario'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('horario') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prm_jornada', 'Jornada', ['class' => 'control-label']) }}
        {{ Form::select('prm_jornada', $todoxxxx['jornadax'], null, ['class' => $errors->first('prm_jornada') ?
    'form-control form-control-sm is-invalid cargos' : 'form-control form-control-sm cargos',
    'data-placeholder' => 'Seleccione una Jornada']) }}
        @if($errors->has('prm_jornada'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_jornada') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control form-control-sm is-invalid cargos' : 'form-control form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('estusuario_id','Justificación Estado') }}
        {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
    </div>
    <br><hr>

</div>
<hr>
<div class="col-md">
    {{ Form::label('dias', 'Días', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('dias[]', $todoxxxx["diaseman"], null, ['class' => $errors->first('dias') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'dias', 'multiple']) }}
    @if($errors->has('dias'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('dias') }}
        </div>
    @endif
</div>
<div><hr><br></div>
