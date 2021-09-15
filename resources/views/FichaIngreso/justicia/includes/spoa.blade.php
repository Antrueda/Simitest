<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ha_estado_spoa_id', '10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ha_estado_spoa_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_actualmente_spoa_id', '¿Actualmente se encuentra en conflicto con la ley - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_actualmente_spoa_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_cuanto_spoa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-6">
        {{ Form::number('i_cuanto_spoa', null, ['class' => 'form-control form-control-sm', $todoxxxx['readspoa'], 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
      </div>
      <div class="col-md-6">
        {{ Form::select('i_prm_tipo_tiempo_spoa_id', $todoxxxx["titispoa"], null, ['class' => 'form-control form-control-sm select2','id'=>'i_prm_tipo_tiempo_spoa_id']) }}
      </div>
    </div>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_motivo_spoa_id', 'Motivo de la vinculación al SPOA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_motivo_spoa_id', $todoxxxx["motispoa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_mod_cumple_pena_id', '¿En qué modalidad de cumplimiento de la pena se encuentra?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_mod_cumple_pena_id', $todoxxxx["sancspoa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ha_estado_preso_id', '10.3A ¿Ha estado privado de la libertad?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ha_estado_preso_id', $todoxxxx["condspoa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_vinculado_violencia_id', '10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_vinculado_violencia_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_causa_vincula_vio_id', 'Seleccionar las causas que originaron tal situación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_causa_vincula_vio_id', $todoxxxx["vincviol"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_riesgo_participar_id', '10.5 ¿Se cuentra en riesgo de participar en actos delictivos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_riesgo_participar_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_causa_riesgo_part_id', 'Seleccionar las causas que pueden llegar a materializar el riesgo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_causa_riesgo_part_id', $todoxxxx["riesviol"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>