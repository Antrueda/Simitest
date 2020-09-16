<div class="form-row align-items-end ">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_lee_id', '4.1 ¿Sabe leer?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_lee_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_escribe_id', '4.2 ¿Sabe escribir?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_escribe_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_operaciones_id', '4.3 ¿Sabe operaciones básicas matemáticas?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_operaciones_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_estudia_id', '4.4 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_jornada_estudio_id', '4.5 ¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_jornada_estudio_id', $todoxxxx["jornestu"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_naturaleza_entidad_id', '4.6 ¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_naturaleza_entidad_id', $todoxxxx["natuenti"], null, ['class' => 'form-control form-control-sm']) }}
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('s_institucion_edu', '4.7 Nombre de la Institución', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_institucion_edu', null, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();", $todoxxxx['readinst']]) }}
</div>
  <div class="form-group col-md-4">
    {{ Form::label('tiemposinestudio', '4.8 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-4">
        {{ Form::label('i_dias_sin_estudio', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::number('i_dias_sin_estudio', null, ['class' => 'form-control form-control-sm', $todoxxxx['readdiax'], 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('i_meses_sin_estudio', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::number('i_meses_sin_estudio', null, ['class' => 'form-control form-control-sm', $todoxxxx['readmesx'], 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11']) }}
      </div>
      <div class="col-md-4">
        {{ Form::label('i_anos_sin_estudio', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
        {{ Form::number('i_anos_sin_estudio', null, ['class' => 'form-control form-control-sm', $todoxxxx['readanox'], 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20']) }}
      </div>
    </div>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ultimo_nivel_estudio_id', '4.9 ¿Cuál es su último nivel de estudio?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ultimo_nivel_estudio_id', $todoxxxx["ulnivest"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_ultimo_grado_aprobado_id', '4.10 Último grado, modulo o semestre aprobado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ultimo_grado_aprobado_id', $todoxxxx["ulgradap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_certificado_ultimo_nivel_id', '4.11 ¿Tiene certificado del último nivel de estudio alcanzado?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_certificado_ultimo_nivel_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>

  <div class="form-group col-md-12">
    {{ Form::label('i_prm_motivo_vinc_id', '4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?', ['class' => 'control-label']) }}
    {{ Form::select('i_prm_motivo_vinc_id[]', $todoxxxx['motvincu'], null, ['class' => $errors->first('i_prm_motivo_vinc_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione los motivos de vinculación']) }}
    @if($errors->has('i_prm_motivo_vinc_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_motivo_vinc_id') }}
    </div>
    @endif
  </div>
</div>
