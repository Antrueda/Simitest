<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ha_estado_srpa_id', '10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ha_estado_srpa_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_actualmente_srpa_id', '¿Actualmente se encuentra vinculado al SRPA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_actualmente_srpa_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_cuanto_srpa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-6">
        {{ Form::number('i_cuanto_srpa', null, ['class' => 'form-control form-control-sm', $todoxxxx['readsrpa'], 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000']) }}
      </div>
      <div class="col-md-6">
        {{ Form::select('i_prm_tipo_tiempo_srpa_id', $todoxxxx["titisrpa"], null, ['class' => 'form-control form-control-sm','id'=>'i_prm_tipo_tiempo_srpa_id']) }}
      </div>
    </div>
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_motivo_srpa_id', 'Motivo de la vinculación al SRPA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_motivo_srpa_id', $todoxxxx["motisrpa"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_sancion_srpa_id', '¿Qué sanción pedagógica se encuentra cumpliendo?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_sancion_srpa_id', $todoxxxx["sancsrpa"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>