{{-- Proceso Administrativo de Restablecimiento de Derechos para Niños, Niñas y Adolescentes (DE 8 A 17 AÑOS) --}}
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_ha_estado_pard_id', '10.1 ¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_actualmente_pard_id', '¿Actualmente se encuentra en el PARD?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_actualmente_pard_id', $todoxxxx["actupard"], null, ['class' => 'form-control form-control-sm']) }}
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

{{-- SRPA - Sistema de Responsabilidad Penal Para Adolescentes (DE 14 A 17 AÑOS) --}}
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_ha_estado_srpa_id', '10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_ha_estado_srpa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_actualmente_srpa_id', '¿Actualmente se encuentra vinculado al SRPA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_actualmente_srpa_id', $todoxxxx["actusrpa"], null, ['class' => 'form-control form-control-sm']) }}
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

{{-- SPOA Sistema Penal Oral Acusatorio para Jóvenes (J) (MAYOR DE 18 AÑOS) --}}
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_ha_estado_spoa_id', '10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_ha_estado_spoa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_actualmente_spoa_id', '¿Actualmente se encuentra en conflicto con la ley - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_actualmente_spoa_id', $todoxxxx["actuspoa"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_cuanto_spoa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="row">
        <div class="col-md-6">
          {{ Form::number('i_cuanto_spoa', null, ['class' => 'form-control form-control-sm', $todoxxxx['readspoa'], 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000']) }}
        </div>
        <div class="col-md-6">
          {{ Form::select('i_prm_tipo_tiempo_spoa_id', $todoxxxx["titispoa"], null, ['class' => 'form-control form-control-sm','id'=>'i_prm_tipo_tiempo_spoa_id']) }}
        </div>
      </div>
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_motivo_spoa_id', 'Motivo de la vinculación al SPOA', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_motivo_spoa_id', $todoxxxx["motispoa"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_mod_cumple_pena_id', '¿En qué modalidad de cumplimiento de la pena se encuentra?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_mod_cumple_pena_id', $todoxxxx["sancspoa"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_ha_estado_preso_id', '10.3A ¿Ha estado privado de la libertad?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_ha_estado_preso_id', $todoxxxx["condspoa"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  {{-- Otras preguntas --}}
  <div class="form-row align-items-end">
    <div class="form-group col-md-6">
      {{ Form::label('i_prm_vinculado_violencia_id', '10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_vinculado_violencia_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('prm_situacion_id', 'Seleccionar las causas que originaron tal situación', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_situacion_id[]', $todoxxxx["vincviol"], null, ['class' =>$errors->first('prm_situacion_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'multiple']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('i_prm_riesgo_participar_id', '10.5 ¿Se cuentra en riesgo de participar en actos delictivos?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_riesgo_participar_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm','id'=>'i_prm_riesgo_participar_id']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('prm_riesgo_id', 'Seleccionar las causas que pueden llegar a materializar el riesgo', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_riesgo_id[]', $todoxxxx["riesviol"], null, ['class' =>$errors->first('prm_riesgo_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple']) }}
    </div>
  </div>
  @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

