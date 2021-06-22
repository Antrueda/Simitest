{{-- SRPA - Sistema de Responsabilidad Penal Para Adolescentes (DE 14 A 17 AÑOS) --}}
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_ha_estado_srpa_id', '10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_ha_estado_srpa_id', $todoxxxx["estaspoa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_ha_estado_srpa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_ha_estado_srpa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_actualmente_srpa_id', '¿Actualmente se encuentra vinculado al SRPA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_actualmente_srpa_id', $todoxxxx["actusrpa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_actualmente_srpa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_actualmente_srpa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_cuanto_srpa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::number('i_cuanto_srpa', null, ['class' => 'form-control form-control-sm', $todoxxxx['readsrpa'], 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',"onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('i_cuanto_srpa'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_cuanto_srpa') }}
                </div>
                @endif

            </div>
            <div class="col-md-6">
                {{ Form::select('i_prm_tipo_tiempo_srpa_id', $todoxxxx["titisrpa"], null, ['class' => 'form-control form-control-sm','id'=>'i_prm_tipo_tiempo_srpa_id']) }}
                @if($errors->has('i_prm_tipo_tiempo_srpa_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_tipo_tiempo_srpa_id') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_motivo_srpa_id', 'Motivo de la vinculación al SRPA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_motivo_srpa_id', $todoxxxx["motisrpa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_motivo_srpa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_motivo_srpa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sancion_srpa_id', '¿Qué sanción pedagógica se encuentra cumpliendo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sancion_srpa_id', $todoxxxx["sancsrpa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_sancion_srpa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_sancion_srpa_id') }}
        </div>
        @endif
    </div>


    {{-- SPOA Sistema Penal Oral Acusatorio para Jóvenes (J) (MAYOR DE 18 AÑOS) --}}

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_ha_estado_spoa_id', '10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_ha_estado_spoa_id', $todoxxxx["estaspoa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_ha_estado_spoa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_ha_estado_spoa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_actualmente_spoa_id', '¿Actualmente se encuentra en conflicto con la ley - SPOA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_actualmente_spoa_id', $todoxxxx["actuspoa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_actualmente_spoa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_actualmente_spoa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_cuanto_spoa', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::number('i_cuanto_spoa', null, ['class' => 'form-control form-control-sm', $todoxxxx['readspoa'], 'placeholder' => 'Cuantos', 'min' => '0', 'max' => '5000000',$todoxxxx['readspoa'],"onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('i_cuanto_spoa'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_cuanto_spoa') }}
                </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::select('i_prm_tipo_tiempo_spoa_id', $todoxxxx["titispoa"], null, ['class' => 'form-control form-control-sm','id'=>'i_prm_tipo_tiempo_spoa_id']) }}
                @if($errors->has('i_prm_tipo_tiempo_spoa_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_tipo_tiempo_spoa_id') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_motivo_spoa_id', 'Motivo de la vinculación al SPOA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_motivo_spoa_id', $todoxxxx["motispoa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_motivo_spoa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_motivo_spoa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_mod_cumple_pena_id', '¿En qué modalidad de cumplimiento de la pena se encuentra?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_mod_cumple_pena_id', $todoxxxx["sancspoa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_mod_cumple_pena_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_mod_cumple_pena_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_ha_estado_preso_id', '10.3A ¿Ha estado privado de la libertad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_ha_estado_preso_id', $todoxxxx["condspoa"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_ha_estado_preso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_ha_estado_preso_id') }}
        </div>
        @endif
    </div>

    {{-- Otras preguntas --}}

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_vinculado_violencia_id', '10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_vinculado_violencia_id', $todoxxxx["violvinc"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_vinculado_violencia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_vinculado_violencia_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_situacion_id', 'Seleccionar las causas que originaron tal situación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_situacion_id[]', $todoxxxx["vincviol"], null, ['class' =>$errors->first('prm_situacion_id') ?
            'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'multiple','id'=>'prm_situacion_id']) }}

        @if($errors->has('prm_situacion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_situacion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_riesgo_participar_id', '10.5 ¿Se encuentra en riesgo de participar en actos delictivos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_riesgo_participar_id', $todoxxxx["violries"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('i_prm_riesgo_participar_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_riesgo_participar_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_riesgo_id', 'Seleccionar las causas que pueden llegar a materializar el riesgo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_riesgo_id[]', $todoxxxx["riesviol"], null, ['class' =>$errors->first('prm_riesgo_id') ?
            'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
            'id'=>'prm_riesgo_id'
            ]) }}
        @if($errors->has('prm_riesgo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_riesgo_id') }}
        </div>
        @endif
    </div>
</div>
