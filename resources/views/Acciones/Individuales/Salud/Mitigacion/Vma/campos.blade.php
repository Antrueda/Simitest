<div class="form-row">
    <div class="col-md-4">
        {{ Form::label('prm_upi_id', 'UPI de Atención', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $upis, null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI', 'autofocus' ]) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha de diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('prm_valoracion_id', 'Tipo de Valoración', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_valoracion_id', $tValoracion, null, ['class' => $errors->first('prm_valoracion_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
                @if($errors->has('prm_valoracion_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_valoracion_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('sesion', '# Sesion', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('sesion', null, ['class' => $errors->first('sesion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0']) }}
                @if($errors->has('sesion'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('sesion') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>2. Consumo Inicial</h6>
    </div>
</div>
<div class="form-row align-items-end">
    <div class="col-md-4">
        {{ Form::label('prm_probado_id', '2.1 Alguna vez en su vida ha probado o consumido algún tipo de Sustancia Psicoactiva?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_probado_id', $sinoc, null, ['class' => $errors->first('prm_probado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('prm_probado_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_probado_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_sustancia_id', '¿Cual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_sustancia_id', $sustancia, null, ['class' => $errors->first('prm_sustancia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_sustancia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_sustancia_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('edad', '2.2 Edad en la cual la usó por primera vez', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('edad', null, ['class' => $errors->first('edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
        @if($errors->has('edad'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('edad') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-md-4">
        {{ Form::label('prm_calle_id', '2.3 ¿Habitó en la calle?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_calle_id', $sino, null, ['class' => $errors->first('prm_calle_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_calle_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_calle_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_ansiedad_id', '2.4 Sustancia que más le genera ansiedad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ansiedad_id', $sustancia, null, ['class' => $errors->first('prm_ansiedad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_ansiedad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_ansiedad_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>3. Consumo Actual</h6>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        @include('Acciones.Individuales.Salud.Mitigacion.Vma.Tabla')
    </div>
</div>
<div class="form-row align-items-end">
    <div class="col-md-3">
        {{ Form::label('sustancias_consumidas', '3.2 Número total de sustancias consumidas', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('sustancias_consumidas', null, ['class' => $errors->first('sustancias_consumidas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '', 'min' => '0', 'max' => '99']) }}
        @if($errors->has('sustancias_consumidas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sustancias_consumidas') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_recaida_id', '3.3 Recaídas o Recidiva', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_recaida_id', $sino, null, ['class' => $errors->first('prm_recaida_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_recaida_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_recaida_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>4. Sintomas de ansiedad</h6>
    </div>
</div>
<div class="form-row align-items-end">
    <div class="col-md-3">
        {{ Form::label('prm_niv_ansiedad_id', '4.1 Nivel de ansiedad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_niv_ansiedad_id', $nivel, null, ['class' => $errors->first('prm_niv_ansiedad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_niv_ansiedad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_niv_ansiedad_id') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="row align-items-end">
            <div class="col-md-6">
                {{ Form::label('prm_trastorno_id', '4.2 Trastonos del sueño', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_trastorno_id', $sinoc, null, ['class' => $errors->first('prm_trastorno_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc14(this.value)']) }}
                @if($errors->has('prm_trastorno_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_trastorno_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('prm_tTrastorno_id', 'Tipo de Trastono', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_tTrastorno_id', $trastorno, null, ['class' => $errors->first('prm_tTrastorno_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                @if($errors->has('prm_tTrastorno_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_tTrastorno_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row align-items-end">
            <div class="col-md-6">
                {{ Form::label('prm_apetito_id', '4.3 Apetito', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_apetito_id', $sinoc, null, ['class' => $errors->first('prm_apetito_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc15(this.value)']) }}
                @if($errors->has('prm_apetito_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_apetito_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('prm_tapetito_id', 'Tipo de Apetito', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_tapetito_id', $apetito, null, ['class' => $errors->first('prm_tapetito_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                @if($errors->has('prm_tapetito_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_tapetito_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="row align-items-end">
            <div class="col-md-6">
                {{ Form::label('prm_sudoracion_id', '4.4 Sudoracion', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_sudoracion_id', $sinoc, null, ['class' => $errors->first('prm_sudoracion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc16(this.value)']) }}
                @if($errors->has('prm_sudoracion_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_sudoracion_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('prm_tsudoracion_id', 'Tipo de Sudoracion', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_tsudoracion_id', $sudoracion, null, ['class' => $errors->first('prm_tsudoracion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                @if($errors->has('prm_tsudoracion_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_tsudoracion_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row align-items-end">
            <div class="col-md-6">
                {{ Form::label('prm_animo_id', '4.5 Estado de Ánimo', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_animo_id', $sinoc, null, ['class' => $errors->first('prm_animo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc17(this.value)']) }}
                @if($errors->has('prm_animo_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_animo_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                {{ Form::label('prm_tanimo_id', 'Tipo de Ánimo', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_tanimo_id', $animo, null, ['class' => $errors->first('prm_tanimo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                @if($errors->has('prm_tanimo_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_tanimo_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-3">
        {{ Form::label('prm_palpitaciones_id', '4.6 Palpitaciones', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_palpitaciones_id', $sino, null, ['class' => $errors->first('prm_palpitaciones_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_palpitaciones_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_palpitaciones_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_dolor_id', '4.7 Dolor Abdominal ', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dolor_id', $sino, null, ['class' => $errors->first('prm_dolor_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_dolor_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dolor_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>5. Antecedentes</h6>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{ Form::label('patologicos', '5.1 Patológicos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('patologicos', null, ['class' => $errors->first('patologicos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los antecedentes según la información recopilada del usuario', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('patologicos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('patologicos') }}
                </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('quirurgicos', '5.2 Quirúrgicos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('quirurgicos', null, ['class' => $errors->first('quirurgicos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los antecedentes según la información recopilada del usuario', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('quirurgicos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('quirurgicos') }}
                </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('familiares', '5.3 Familiares', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('familiares', null, ['class' => $errors->first('familiares') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los antecedentes según la información recopilada del usuario', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('familiares'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('familiares') }}
                </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('traumaticos', '5.4 Traumaticos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('traumaticos', null, ['class' => $errors->first('traumaticos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los antecedentes según la información recopilada del usuario', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('traumaticos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('traumaticos') }}
                </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('gineco', '5.5 Ginecoobtétricos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('gineco', null, ['class' => $errors->first('gineco') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los antecedentes según la información recopilada del usuario, Especifique número de hijos, abortos, última citología y resultado, y si planifica en la actualidad.', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('gineco'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('gineco') }}
                </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-md-4">
        {{ Form::label('prm_tatuajes_id', '5.6 ¿Tatuajes?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tatuajes_id', $sino, null, ['class' => $errors->first('prm_tatuajes_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_tatuajes_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tatuajes_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_piercing_id', '5.7 ¿Piercing?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_piercing_id', $sino, null, ['class' => $errors->first('prm_piercing_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_piercing_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_piercing_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>6. Diagnóstico</h6>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{ Form::label('prm_dx_ppal_id', '6.1 Diagnóstico Principal', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dx_ppal_id', $diagnosticos, null, ['class' => $errors->first('prm_dx_ppal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_dx_ppal_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dx_ppal_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('prm_dx_rel_uno_id', 'Diagnóstico Relacionado Uno', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dx_rel_uno_id', $diagnosticos, null, ['class' => $errors->first('prm_dx_rel_uno_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_dx_rel_uno_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dx_rel_uno_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('prm_dx_rel_dos_id', 'Diagnóstico Relacionado Dos', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dx_rel_dos_id', $diagnosticos, null, ['class' => $errors->first('prm_dx_rel_dos_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_dx_rel_dos_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dx_rel_dos_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('prm_dx_rel_tres_id', 'Diagnóstico Relacionado Tres', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dx_rel_tres_id', $diagnosticos, null, ['class' => $errors->first('prm_dx_rel_tres_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_dx_rel_tres_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dx_rel_tres_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('prm_dx_rel_com_id', 'Diagnóstico de Complicación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dx_rel_com_id', $diagnosticos, null, ['class' => $errors->first('prm_dx_rel_com_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_dx_rel_com_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dx_rel_com_id') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-md-4">
        {{ Form::label('prm_tipo_dx_id', '6.2 Tipo de Diagnóstico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipo_dx_id', $tipoDx, null, ['class' => $errors->first('prm_tipo_dx_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
        @if($errors->has('prm_tipo_dx_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipo_dx_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <h6>7. Plan de Manejo</h6>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4">
        {{ Form::label('tratamiento', '7.1 Tratamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('tratamiento[]', $tratamiento, null, ['class' => $errors->first('tratamiento') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'tratamiento', 'multiple']) }}
        @if($errors->has('tratamiento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('tratamiento') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_conducta_id', '7.2 Conducta', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_conducta_id', $conducta, null, ['class' => $errors->first('prm_conducta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_conducta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_conducta_id') }}
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        {{ Form::label('alerta', '7.3 Alerta', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('alerta', null, ['class' => $errors->first('alerta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los motivos por los cuales considere pertinente crear una alerta entre el equipo de mitigación y el equipo psicosocial de la unidad, para realizar intervenciones y seguimiento específicas (recaídas, duelos, crisis emocional, entre otros). Si no considera una alerta necesaria en el momento escriba No', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('alerta'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('alerta') }}
                </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('observaciones', '7.4 Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa otros datos del usuario que considera relevantes y que no hayan quedado consignados en el formulario. ', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('observaciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observaciones') }}
                </div>
        @endif
    </div>
</div>


<div class="row mt-3">
    @canany(['vma-crear', 'vma-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('ai.ver', $dato->id) }}">Regresar</a>
</div>