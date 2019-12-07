<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ha_estado_pard_id', '10.1 ¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_actualmente_pard_id', '¿Actualmente se encuentra en el PARD?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_actualmente_pard_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_cuanto_pard', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
			<div class="col-md-6">
        {{ Form::number('i_cuanto_pard', null, ['class' => 'form-control form-control-sm', $todoxxxx['readpard'], 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000']) }}
      </div>
      <div class="col-md-6">
        {{ Form::select('i_prm_tipo_tiempo_pard_id', $todoxxxx["titipard"], null, ['class' => 'form-control form-control-sm','id'=>'i_prm_tipo_tiempo_pard_id']) }}
      </div>
    </div>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_motivo_pard_id', '10.1A Motivo del PARD', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_motivo_pard_id', $todoxxxx["motipard"], null, ['class' => 'form-control form-control-sm']) }}
  </div>  
  <div class="form-group col-md-4">
    {{ Form::label('s_nombre_defensor', '10.1B Nombre del defensor de familia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_nombre_defensor', null, ['class' => 'form-control form-control-sm', $todoxxxx['readnomd']]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('s_telefono_defensor', '10.1C Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('s_telefono_defensor', null, ['class' => 'form-control form-control-sm', $todoxxxx['readteld']]) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('s_lugar_abierto_pard', '10.1D Lugar donde tiene abierto el PARD', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_lugar_abierto_pard', null, ['class' => 'form-control form-control-sm', $todoxxxx['readluga']]) }}
  </div>
</div>