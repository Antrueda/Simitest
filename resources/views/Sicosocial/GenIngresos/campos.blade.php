<div class="row">
    <div class="col-md">
        {{ Form::label('prm_actividad_id', '9.1 ¿Qué actividades realiza para generar ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_actividad_id', $actividad, null, ['class' => $errors->first('prm_actividad_id') ? 'form-control form-control-sm is-invalid' : 'form-control float-right form-control-sm', 'onchange' => 'doc(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_actividad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_actividad_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('trabaja', '9.2 ¿Mencione en qué trabaja?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('trabaja', null, ['class' => $errors->first('trabaja') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('trabaja'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('trabaja') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_informal_id', '9.3. Seleccione', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_informal_id', $informal, null, ['class' => $errors->first('prm_informal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_informal_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_informal_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div>
            {{ Form::label('prm_otra_id', '9.4. Seleccione', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::select('prm_otra_id', $otros, null, ['class' => $errors->first('prm_otra_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
            @if($errors->has('prm_otra_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_otra_id') }}
                </div>
            @endif
        </div>
    </div>
    <div class="col-md">
        {{ Form::label('prm_no_id', '9.5 ¿Por qué no genera ingresos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_no_id', $ninguna, null, ['class' => $errors->first('prm_no_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_no_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_no_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('cuanto', 'Hace cuánto', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::label('prm_periodo_id', 'tiempo', ['class' => 'control-label col-form-label-sm d-none']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::number('cuanto', null, ['class' => $errors->first('cuanto') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '99', $vsi->activo == 0 ? 'disabled' : '']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_periodo_id', $tiempo, null, ['class' => $errors->first('prm_periodo_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
            </div>
        </div>
        @if($errors->has('cuanto'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('cuanto') }}
            </div>
        @endif
        @if($errors->has('prm_periodo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_periodo_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('jornada_entre', '9.6. ¿En qué jornada genera los ingresos?', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::label('prm_jor_entre_id', 'Entre', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
            </div>
            <div class="col-md">
                {{ Form::number('jornada_entre', null, ['class' => $errors->first('jornada_entre') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '12', $vsi->activo == 0 ? 'disabled' : '']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_jor_entre_id', $ampm, null, ['class' => $errors->first('prm_jor_entre_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                {{ Form::label('jornada_a', 'A', ['class' => 'control-label col-md-8 col-form-label-sm']) }}
                {{ Form::label('prm_jor_a_id', 'A', ['class' => 'control-label col-md-8 col-form-label-sm d-none']) }}
            </div>
            <div class="col-md">
                {{ Form::number('jornada_a', null, ['class' => $errors->first('jornada_a') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '1', 'max' => '12', $vsi->activo == 0 ? 'disabled' : '']) }}
            </div>
            <div class="col-md">
                {{ Form::select('prm_jor_a_id', $ampm, null, ['class' => $errors->first('prm_jor_a_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
            </div>
        </div>
        @if($errors->has('jornada_entre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('jornada_entre') }}
            </div>
        @endif
        @if($errors->has('prm_jor_entre_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_jor_entre_id') }}
            </div>
        @endif
        @if($errors->has('jornada_a'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('jornada_a') }}
            </div>
        @endif
        @if($errors->has('prm_jor_a_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_jor_a_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('dias', '9.7 ¿En qué días?', ['class' => 'control-label col-form-label-sm']) }}
        <div id="dias_div">
            {{ Form::select('dias[]', $semana, null, ['class' => $errors->first('dias') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'dias', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}    
        </div>
        @if($errors->has('dias'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('dias') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_frecuencia_id', '9.8. ¿Con qué frecuencia recibe el ingreso por la actividad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_frecuencia_id', $frecuencia, null, ['class' => $errors->first('prm_frecuencia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_frecuencia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_frecuencia_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_laboral_id', '9.9. ¿Tipo de relación laboral?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_laboral_id', $laboral, null, ['class' => $errors->first('prm_laboral_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_laboral_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_laboral_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('aporte', '9.10. Total de aportes mensuales al hogar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('aporte', null, ['class' => $errors->first('aporte') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('aporte'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('aporte') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_aporta_id', '9.11. ¿En el hogar usted realiza algún aporte mensual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_aporta_id', $sino, null, ['class' => $errors->first('prm_aporta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_aporta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_aporta_id') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('porque', '¿Porqué?:', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Porqué', 'maxlength' => '120', $vsi->activo == 0 ? 'disabled' : '']) }}
                @if($errors->has('porque'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('porque') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('cuanto_aporta', '¿Cuánto?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('cuanto_aporta', null, ['class' => $errors->first('cuanto_aporta') ? 'form-control col-md-6 form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', $vsi->activo == 0 ? 'disabled' : '']) }}
                @if($errors->has('cuanto_aporta'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('cuanto_aporta') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('expectativa', '9.12. Describa las expectativas de el/la Joven a nivel laboral y/o económico:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('expectativa', null, ['class' => $errors->first('expectativa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Expectativas', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('expectativa'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('expectativa') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('quienes', '9.13. ¿Quién (es) aporta(n)?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('quienes[]', $parentesco, null, ['class' => $errors->first('quienes') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'quienes', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('quienes'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('quienes') }}
            </div>
        @endif
        {{ Form::label('labores', '9.14. Labor que desempeña para conseguir los ingresos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('labores[]', $actividad, null, ['class' => $errors->first('labores') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'labores', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('labores'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('labores') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('descripcion', '9.15. Descripción:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('descripcion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('descripcion') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @if ($vsi->activo == 1)
        @canany(['vsigeningresos-crear', 'vsigeningresos-editar'])
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        @endcanany
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>