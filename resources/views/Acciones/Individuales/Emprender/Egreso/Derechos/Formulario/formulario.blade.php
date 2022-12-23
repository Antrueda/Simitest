<div class="form-row align-items-end">
  <div class="form-group col-md-4">
      {{ Form::label('prm_regisalu_id', 'Estado de afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_regisalu_id', $todoxxxx["estafili"], $todoxxxx['usuariox']->sis_nnaj->fi_saluds->prm_regisalu->id, ['class' => 'form-control form-control-sm select2']) }}
  </div>
  <div class="form-group col-md-4">
      {{ Form::label('sis_entidad_salud_id', 'Entidad / Régimen', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_entidad_salud_id', $todoxxxx["entid_id"], $todoxxxx['usuariox']->sis_nnaj->fi_saluds->sis_entidad_salud_id, ['class' => 'form-control form-control-sm select2']) }}
  </div>
</div>
<hr>
<div class="row">
<div class="form-group col-md-4">
  {{ Form::label('i_prm_estudia_id', '¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('i_prm_estudia_id', $todoxxxx["actuestu"], $todoxxxx['usuariox']->sis_nnaj->fi_formacions->i_prm_estudia_id, ['class' => 'form-control form-control-sm',]) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_estudia_id') }}
  </div>
</div>
<div class="form-group col-md-4">
  {{ Form::label('prm_jornestu_id', '¿En qué jornada estudia?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('prm_jornestu_id', $todoxxxx["jornestu"], $todoxxxx['usuariox']->sis_nnaj->fi_formacions->prm_jornestu_id, ['class' => 'form-control form-control-sm']) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('prm_jornestu_id') }}
  </div>
</div>
<div class="form-group col-md-4">
  {{ Form::label('prm_natuenti_id', '¿Naturaleza de la entidad en la que estudia?', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('prm_natuenti_id', $todoxxxx["natuenti"], $todoxxxx['usuariox']->sis_nnaj->fi_formacions->prm_natuenti_id, ['class' => 'form-control form-control-sm']) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('prm_natuenti_id') }}
  </div>
</div>

<div class="form-group col-md-4">
  {{ Form::label('s_institucion_edu', 'Nombre de la Institución', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('s_institucion_edu', $todoxxxx['usuariox']->sis_nnaj->fi_formacions->s_institucion_edu, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
  <div class="invalid-feedback d-block">
      {{ $errors->first('s_institucion_edu') }}
  </div>
</div>

<div class="form-group col-md-4">
  {{ Form::label('tiemposinestudio', '¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="row">
      <div class="col-md-4">
          {{ Form::label('diasines', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::number('diasines', $todoxxxx['usuariox']->sis_nnaj->fi_formacions->diasines, ['class' => 'form-control form-control-sm',  'placeholder' => 'Día(s)', 'min' => '0', 'max' => '30',"onkeypress" => "return soloNumeros(event);"]) }}
      </div>
      <div class="col-md-4">
          {{ Form::label('mesinest', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::number('mesinest', $todoxxxx['usuariox']->sis_nnaj->fi_formacions->mesinest, ['class' => 'form-control form-control-sm',  'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
      </div>
      <div class="col-md-4">
          {{ Form::label('anosines', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
          {{ Form::number('anosines', $todoxxxx['usuariox']->sis_nnaj->fi_formacions->anosines, ['class' => 'form-control form-control-sm',  'placeholder' => 'Año(s)', 'min' => '0', 'max' => '20',"onkeypress" => "return soloNumeros(event);"]) }}
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
@if($todoxxxx['usuariox']->prm_tipoblaci_id!=650)
            <div class="form-row align-items-end">
                <div class="form-group col-md-4">
                    {{ Form::label('i_prm_ha_estado_pard_id', '¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx["condnoap"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->i_prm_ha_estado_pard_id, ['class' => 'form-control form-control-sm select2']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('i_prm_actualmente_pard_id', '¿Actualmente se encuentra en el PARD?', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('i_prm_actualmente_pard_id', $todoxxxx["actupard"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->i_prm_actualmente_pard_id, ['class' => 'form-control form-control-sm select2']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('i_cuanto_pard', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
                    <div class="row">
                        <div class="col-md-6">
                            {{ Form::number('i_cuanto_pard', $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->i_cuanto_pard, ['class' => 'form-control form-control-sm',  'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
                        </div>
                        <div class="col-md-6">
                            {{ Form::select('i_prm_tipo_tiempo_pard_id', $todoxxxx["titipard"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->i_prm_tipo_tiempo_pard_id, ['class' => 'form-control form-control-sm select2','id'=>'i_prm_tipo_tiempo_pard_id']) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row align-items-end">
                <div class="form-group col-md-4">
                    {{ Form::label('i_prm_motivo_pard_id', 'Motivo del PARD', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('i_prm_motivo_pard_id', $todoxxxx["motipard"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->i_prm_motivo_pard_id, ['class' => 'form-control form-control-sm select2']) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_nombre_defensor', 'Nombre del defensor de familia', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::text('s_nombre_defensor', $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->s_nombre_defensor, ['class' => 'form-control form-control-sm',  "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('s_telefono_defensor', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::number('s_telefono_defensor', $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_pard->s_telefono_defensor, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
                </div>
            </div>
            <div class="form-row align-items-end">
                <div class="form-group col-md-3" id='zonal_id'>
                    {{ Form::label('centro_id', 'Centro Zonal', ['class' => 'control-label col-form-label-sm']) }}
                    {{ Form::select('centro_id', $todoxxxx['centrozo'], null, ['class' => $errors->first('centro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc1(this.value)']) }}
                    @if($errors->has('centro_id'))
                    <div class="invalid-feedback d-block">
                    {{ $errors->first('centro_id') }}
                    </div>
                    @endif
                </div>
                <div class="form-group col-md-3" id='bogota_id'>
                {{ Form::label('censec_id', 'Centro Zonal Secundario', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('censec_id', $todoxxxx['centrose'], null, ['class' => $errors->first('censec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                @if($errors->has('censec_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('censec_id') }}
                </div>
                @endif
                </div>
            </div>
            <hr>
            <div class="form-row align-items-end">
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_ha_estado_srpa_id', '10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_ha_estado_srpa_id', $todoxxxx["estaspoa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_srpas->i_prm_ha_estado_srpa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_actualmente_srpa_id', '¿Actualmente se encuentra vinculado al SRPA?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_actualmente_srpa_id', $todoxxxx["actusrpa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_srpas->i_prm_actualmente_srpa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_cuanto_srpa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::number('i_cuanto_srpa', $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_srpas->i_cuanto_srpa, ['class' => 'form-control form-control-sm', 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::select('i_prm_tipo_tiempo_srpa_id', $todoxxxx["titisrpa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_srpas->i_prm_tipo_tiempo_srpa_id, ['class' => 'form-control form-control-sm select2','id'=>'i_prm_tipo_tiempo_srpa_id']) }}
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_motivo_srpa_id', 'Motivo de la vinculación al SRPA', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_motivo_srpa_id', $todoxxxx["motisrpa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_srpas->i_prm_motivo_srpa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_sancion_srpa_id', '¿Qué sanción pedagógica se encuentra cumpliendo?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_sancion_srpa_id', $todoxxxx["sancsrpa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_srpas->i_prm_sancion_srpa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            </div>
            <hr>
            {{-- SPOA Sistema Penal Oral Acusatorio para Jóvenes (J) (MAYOR DE 18 AÑOS) --}}
            <div class="form-row align-items-end">
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_ha_estado_spoa_id', '10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_ha_estado_spoa_id', $todoxxxx["condicio"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_prm_ha_estado_spoa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_actualmente_spoa_id', '¿Actualmente se encuentra en conflicto con la ley - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_actualmente_spoa_id', $todoxxxx["actuspoa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_prm_actualmente_spoa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_cuanto_spoa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::number('i_cuanto_spoa', $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_cuanto_spoa, ['class' => 'form-control form-control-sm',  'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::select('i_prm_tipo_tiempo_spoa_id', $todoxxxx["titispoa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_prm_tipo_tiempo_spoa_id, ['class' => 'form-control form-control-sm select2','id'=>'i_prm_tipo_tiempo_spoa_id']) }}
                    </div>
                </div>
            </div>
            </div>
            <div class="form-row align-items-end">
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_motivo_spoa_id', 'Motivo de la vinculación al SPOA', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_motivo_spoa_id', $todoxxxx["motispoa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_prm_motivo_spoa_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_mod_cumple_pena_id', '¿En qué modalidad de cumplimiento de la pena se encuentra?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_mod_cumple_pena_id', $todoxxxx["sancspoa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_prm_mod_cumple_pena_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_ha_estado_preso_id', '10.3A ¿Ha estado privado de la libertad?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_ha_estado_preso_id', $todoxxxx["condspoa"], $todoxxxx['usuariox']->sis_nnaj->fi_justrests->fi_proceso_spoas->i_prm_ha_estado_preso_id, ['class' => 'form-control form-control-sm select2']) }}
            </div>
            </div>
<hr>
@endif

</div>
</div>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
