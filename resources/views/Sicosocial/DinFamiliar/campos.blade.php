<div class="row">
    <div class="col-md">
        {{ Form::label('prm_familiar_id', '5.3 Tipología familiar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_familiar_id', $familiar, null, ['class' => $errors->first('prm_familiar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_familiar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_familiar_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_hogar_id', '5.4 Tipología de Hogar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_hogar_id', $hogar, null, ['class' => $errors->first('prm_hogar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_hogar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_hogar_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('cuidador', '5.5 ¿Quién(es) asume(n) el cuidado y la crianza de los menores de 18 años en ausencia de los representantes legales?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('cuidador[]', $familiares, null, ['class' => $errors->first('cuidador') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'cuidador', 'multiple', 'onchange' => 'doc(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('cuidador'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('cuidador') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        {{ Form::label('lugar', '5.6 Descripción (Lugar donde los cuidan, entre otras)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('lugar', null, ['class' => $errors->first('lugar') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción del lugar', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('lugar'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('lugar') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('ausencia', '5.7 Motivos por el cual hay ausencia de/los representantes legales', ['class' => 'control-label col-form-label-sm']) }}
        <div id="ausencia_div">
            {{ Form::select('ausencia[]', $ausencia, null, ['class' => $errors->first('ausencia') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'ausencia', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        </div>
        @if($errors->has('ausencia'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('ausencia') }}
            </div>
        @endif
    </div>
</div>
<div class="row my-2">
    <div class="col-md-12">
        <h6>5.8 Antecedentes familiares asociados a:</h6>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('calles', '5.8.1 Habitabilidad en la calle', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('calles[]', $familiares, null, ['class' => $errors->first('v') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'calles', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('calles'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('calles') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('delitos', '5.8.2 Conductas delictivas', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('delitos[]', $familiares, null, ['class' => $errors->first('delitos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'delitos', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('delitos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('delitos') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prostituciones', '5.8.3 Prostitución', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prostituciones[]', $familiares, null, ['class' => $errors->first('prostituciones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'prostituciones', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('prostituciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prostituciones') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('libertades', '5.8.4 Privación de la libertad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('libertades[]', $familiares, null, ['class' => $errors->first('libertades') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'libertades', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('libertades'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('libertades') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('consumo', '5.8.5 Consumo de SPA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('consumo[]', $familiares, null, ['class' => $errors->first('consumo') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'consumo', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('consumo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('consumo') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('salud', '5.8.6 Salud mental', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('salud[]', $familiares, null, ['class' => $errors->first('salud') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'salud', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
        @if($errors->has('salud'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('salud') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    {{ Form::label('descripcion', '5.9 Descripción: (Interpretación de la composición familiar. Motivos de separaciones, fallecimientos, tipo de relaciones, impacto en el NNAJ)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
    @if($errors->has('descripcion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('descripcion') }}
        </div>
    @endif
</div>
<div class="row mt-3">
    @if ($vsi->activo == 1)
        @canany(['vsidinfamiliar-crear', 'vsidinfamiliar-editar'])
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        @endcanany
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>