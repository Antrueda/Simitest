<div class="row">
  <div class="col-md-3">
    {{ Form::label('cant_personas', '9.1 ¿Cuántos miembros de la familia ingieren alimentos que son preparados en esta vivienda?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('cant_personas', null, ['class' => $errors->first('cant_personas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nº Personas', 'min' => '0', 'max' => '50',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('cant_personas'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('cant_personas') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('frecuencia', '9.2 ¿Con qué frecuencia compra alimentos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('frecuencia[]', $todoxxxx["frecuenx"], null, ['class' => $errors->first('frecuencia') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'frecuencia', 'multiple']) }}
    @if($errors->has('frecuencia'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('frecuencia') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('compra', '9.3 ¿Dónde compra los alimentos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('compra[]', $todoxxxx["lugaresx"], null, ['class' => $errors->first('compra') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'compra', 'multiple']) }}
    @if($errors->has('compra'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('compra') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('ingeridas', '9.4 Alimentación diaria', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('ingeridas[]', $todoxxxx["alimenta"], null, ['class' => $errors->first('ingeridas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'ingeridas', 'multiple']) }}
    @if($errors->has('ingeridas'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('ingeridas') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_horario_id', '9.5 ¿Ha establecido un horario para el consumo de alimentos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_horario_id', $todoxxxx["horariox"], null, ['class' => $errors->first('prm_horario_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_horario_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_horario_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prepara', '9.6 ¿Por lo general quien prepara los alimentos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prepara[]', $todoxxxx["familiax"], null, ['class' => $errors->first('prepara') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'prepara', 'multiple']) }}
    @if($errors->has('prepara'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prepara') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_apoyo_id', '9.7 ¿Recibe algún tipo de apoyo alimentario?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_apoyo_id', $todoxxxx["apoyoxxx"], null, ['class' => $errors->first('prm_apoyo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc(this.value)']) }}
    @if($errors->has('prm_apoyo_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_apoyo_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_entidad_id', '9.8 ¿De qué entidad lo recibe?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_entidad_id', $todoxxxx["entidadx"] , null, ['class' => $errors->first('prm_entidad_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_entidad_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_entidad_id') }}
    </div>
    @endif
  </div>
</div>
