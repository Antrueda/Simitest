<div class="row">
    <div class="col-md">
        {{ Form::label('prm_consumo_id', '16.1 ¿Ha presentado consumo de sustancias Psicoactivas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_consumo_id', $sino, null, ['class' => $errors->first('prm_consumo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus', 'onchange' => 'doc(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_consumo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_consumo_id') }}
            </div>
        @endif
        {{ Form::label('cantidad', '¿Cuántas sustancias?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('cantidad', null, ['class' => $errors->first('cantidad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', 'max' => '99', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('cantidad'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('cantidad') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('inicio', '16.2 Edad de inicio del consumo de la primera sustancia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('inicio', null, ['class' => $errors->first('inicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Años', 'min' => '0', 'max' => '99', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('inicio'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('inicio') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_contexto_ini_id', '16.3 ¿En qué contexto se dió el inicio del consumo de Sustancias Psicoactivas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_contexto_ini_id', $contexto, null, ['class' => $errors->first('prm_contexto_ini_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_contexto_ini_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_contexto_ini_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_consume_id', '16.4 ¿Actualmente consume SPA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_consume_id', $sino, null, ['class' => $errors->first('prm_consume_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_consume_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_consume_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_contexto_man_id', '16.5 ¿En cuál contexto se mantiene el consumo de Sustancias Psicoactivas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_contexto_man_id', $contexto, null, ['class' => $errors->first('prm_contexto_man_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_contexto_man_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_contexto_man_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_problema_id', '16.6 ¿Considera que su consumo de Sustancias Psicoactivas es problemático?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_problema_id', $sino, null, ['class' => $errors->first('prm_problema_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_problema_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_problema_id') }}
            </div>
        @endif
        {{ Form::label('porque', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '¿Por qué?', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('porque'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('porque') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_motivo_id', '16.7 ¿Por qué motivo considera que se presenta su consumo de SPA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_motivo_id', $motivo, null, ['class' => $errors->first('prm_motivo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_motivo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_motivo_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('expectativas', '16.8 ¿Expectativas frente al consumo de Sustancias Psicoactivas?', ['class' => 'control-label col-form-label-sm']) }}
        <div id="expectativas_div">
            {{ Form::select('expectativas[]', $expectativas, null, ['class' => $errors->first('expectativas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'multiple', 'id' => 'expectativas', $vsi->activo == 0 ? 'disabled' : '']) }}
        </div>
        @if($errors->has('expectativas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('expectativas') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_familia_id', '16.9 ¿Algún miembro del nucleo familiar consume SPA?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_familia_id', $sino, null, ['class' => $errors->first('prm_familia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_familia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_familia_id') }}
            </div>
        @endif
        {{ Form::label('quienes', '¿Quién?', ['class' => 'control-label col-form-label-sm']) }}
        <div id="quienes_div">
            {{ Form::select('quienes[]', $familiares, null, ['class' => $errors->first('quienes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'multiple', 'id' => 'quienes', $vsi->activo == 0 ? 'disabled' : '']) }}
        </div>
        @if($errors->has('quienes'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('quienes') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('descripcion', '16.10 Descripción', ['class' => 'control-label col-form-label-sm']) }}
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
        @canany(['vsiconsumo-crear', 'vsiconsumo-editar'])
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        @endcanany
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>