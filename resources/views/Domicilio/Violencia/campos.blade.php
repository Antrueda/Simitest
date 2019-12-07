<div class="row">
    <div class="col-md">
        {{ Form::label('prm_condicion_id', '2.1 ¿Qué condición especial presenta?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_condicion_id', $condicion, null, ['class' => $errors->first('prm_condicion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)', 'autofocus']) }}
        @if($errors->has('prm_condicion_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_condicion_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('departamento_cond_id', '2.1(a) Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('departamento_cond_id', $departamentos, (!$valor) ? 6 : null, ['class' => $errors->first('departamento_cond_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'cambiaDepartamento(this.value)']) }}
        @if($errors->has('departamento_cond_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('departamento_cond_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('municipio_cond_id', '2.1(b) Municipio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('municipio_cond_id', $municipios, null, ['class' => $errors->first('municipio_cond_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('municipio_cond_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('municipio_cond_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_certificado_id', '2.2 ¿Cuenta con certificado?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_certificado_id', $sino, null, ['class' => $errors->first('prm_certificado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
        @if($errors->has('prm_certificado_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_certificado_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('departamento_cert_id', 'Lugar de expedición 2.2(a) Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('departamento_cert_id', $departamentos, (!$valor) ? 6 : null, ['class' => $errors->first('departamento_cert_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'cambiaDepartamento1(this.value)']) }}
        @if($errors->has('departamento_cert_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('departamento_cert_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('municipio_cert_id', '2.2(b) Municipio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('municipio_cert_id', $municipios, null, ['class' => $errors->first('municipio_cert_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('municipio_cert_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('municipio_cert_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @canany(['csdviolencia-crear', 'csdviolencia-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
</div>