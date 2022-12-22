<div class="form-row align-items-end">
  <div class="form-group col-md-4">
      {{ Form::label('prm_regisalu_id', '6.1 Estado de afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_regisalu_id', $todoxxxx["estafili"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('sis_entidad_salud_id', '6.2 Entidad / Régimen', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_entidad_salud_id', $todoxxxx["entid_id"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<hr>
<div class="row">
<div class="form-group col-md-4">
  {{ Form::label('i_prm_estudia_id', '4.4 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], null, ['class' => 'form-control form-control-sm',]) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_estudia_id') }}
  </div>
</div>
<div class="form-group col-md-4">
  {{ Form::label('prm_jornestu_id', '4.5 ¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('prm_jornestu_id', $todoxxxx["jornestu"], null, ['class' => 'form-control form-control-sm']) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('prm_jornestu_id') }}
  </div>
</div>
<div class="form-group col-md-4">
  {{ Form::label('prm_natuenti_id', '4.6 ¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('prm_natuenti_id', $todoxxxx["natuenti"], null, ['class' => 'form-control form-control-sm']) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('prm_natuenti_id') }}
  </div>
</div>

<div class="form-group col-md-4">
  {{ Form::label('s_institucion_edu', '4.7 Nombre de la Institución', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('s_institucion_edu', null, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('s_institucion_edu') }}
  </div>
</div>

<div class="form-group col-md-4">
  {{ Form::label('tiemposinestudio', '4.8 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="row">
      <div class="col-md-4">
          {{ Form::label('diasines', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::number('diasines', null, ['class' => 'form-control form-control-sm',  'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30',"onkeypress" => "return soloNumeros(event);"]) }}
      </div>
      <div class="col-md-4">
          {{ Form::label('mesinest', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::number('mesinest', null, ['class' => 'form-control form-control-sm',  'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
      </div>
      <div class="col-md-4">
          {{ Form::label('anosines', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::number('anosines', null, ['class' => 'form-control form-control-sm',  'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20',"onkeypress" => "return soloNumeros(event);"]) }}
      </div>
  </div>
</div>
</div>
{{-- <div class="form-group col-md-4">
  {{ Form::label('prm_ultniest_id', '4.9 ¿Cuál es su último nivel de estudio?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('prm_ultniest_id', $todoxxxx["ulnivest"], null, ['class' => 'form-control form-control-sm select2']) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('prm_ultniest_id') }}
  </div>
</div>
<div class="form-group col-md-4">
  {{ Form::label('prm_ultgrapr_id', '4.10 Último grado, modulo o semestre aprobado', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('prm_ultgrapr_id', $todoxxxx["ulgradap"], null, ['class' => 'form-control form-control-sm select2']) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('prm_ultgrapr_id') }}
  </div> --}}
<hr>
  <div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_ha_estado_pard_id', '10.1 ¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_actualmente_pard_id', '¿Actualmente se encuentra en el PARD?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_actualmente_pard_id', $todoxxxx["actupard"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_cuanto_pard', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::number('i_cuanto_pard', null, ['class' => 'form-control form-control-sm',  'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-6">
                {{ Form::select('i_prm_tipo_tiempo_pard_id', $todoxxxx["titipard"], null, ['class' => 'form-control form-control-sm select2','id'=>'i_prm_tipo_tiempo_pard_id']) }}
            </div>
        </div>
    </div>
</div>
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_motivo_pard_id', '10.1A Motivo del PARD', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_motivo_pard_id', $todoxxxx["motipard"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_nombre_defensor', '10.1B Nombre del defensor de familia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_nombre_defensor', null, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_telefono_defensor', '10.1C Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('s_telefono_defensor', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
    </div>
</div>
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('s_lugar_abierto_pard', '10.1D Lugar donde tiene abierto el PARD', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_lugar_abierto_pard', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
</div>
<hr>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
      {{ Form::label('i_prm_ha_estado_srpa_id', '10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_ha_estado_srpa_id', $todoxxxx["estaspoa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('i_prm_actualmente_srpa_id', '¿Actualmente se encuentra vinculado al SRPA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_actualmente_srpa_id', $todoxxxx["actusrpa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('i_cuanto_srpa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="row">
          <div class="col-md-6">
              {{ Form::number('i_cuanto_srpa', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
          </div>
          <div class="col-md-6">
              {{ Form::select('i_prm_tipo_tiempo_srpa_id', $todoxxxx["titisrpa"], null, ['class' => 'form-control form-control-sm select2','id'=>'i_prm_tipo_tiempo_srpa_id']) }}
          </div>
      </div>
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('i_prm_motivo_srpa_id', 'Motivo de la vinculación al SRPA', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_motivo_srpa_id', $todoxxxx["motisrpa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('i_prm_sancion_srpa_id', '¿Qué sanción pedagógica se encuentra cumpliendo?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_sancion_srpa_id', $todoxxxx["sancsrpa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<hr>
{{-- SPOA Sistema Penal Oral Acusatorio para Jóvenes (J) (MAYOR DE 18 AÑOS) --}}
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
      {{ Form::label('i_prm_ha_estado_spoa_id', '10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_ha_estado_spoa_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('i_prm_actualmente_spoa_id', '¿Actualmente se encuentra en conflicto con la ley - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_actualmente_spoa_id', $todoxxxx["actuspoa"], null, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('i_cuanto_spoa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="row">
          <div class="col-md-6">
              {{ Form::number('i_cuanto_spoa', null, ['class' => 'form-control form-control-sm',  'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
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
<hr>

</div>
</div>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
