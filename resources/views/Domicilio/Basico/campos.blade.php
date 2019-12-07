<div class="row">
    <div class="col-md">
        {{ Form::label('primer_apellido', '1.1 1er. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('primer_apellido', null, ['class' => $errors->first('primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer apellido', 'maxlength' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('primer_apellido'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('primer_apellido') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('segundo_apellido', '2do. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('segundo_apellido', null, ['class' => $errors->first('segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('segundo_apellido'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('segundo_apellido') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('primer_nombre', '1er. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('primer_nombre', null, ['class' => $errors->first('primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('primer_nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('primer_nombre') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('segundo_nombre', '2do. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('segundo_nombre', null, ['class' => $errors->first('segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('segundo_nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('segundo_nombre') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('identitario', '1.2 Nombre Identitario:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('identitario', null, ['class' => $errors->first('identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre Identitario', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('identitario'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('identitario') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('apodo', '1.3 Apodo:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('apodo', null, ['class' => $errors->first('apodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Apodo', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('apodo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('apodo') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_sexo_id', '1.4 ¿Cuál es su sexo de nacimiento?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_sexo_id', $sexo, null, ['class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc3(this.value)']) }}
        @if($errors->has('prm_sexo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_sexo_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_genero_id', '1.5 ¿Cuál es su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_genero_id', $genero, null, ['class' => $errors->first('prm_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_genero_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_genero_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_sexual_id', '1.6 ¿Cuál es su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_sexual_id', $sexual, null, ['class' => $errors->first('prm_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_sexual_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_sexual_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('nacimiento', '1.7 Fecha de nacimiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('nacimiento', null, ['class' => $errors->first('nacimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'calcularEdad(this.value)']) }}
        @if($errors->has('nacimiento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('nacimiento') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('edad', '1.8 Edad(Años)', ['class' => 'control-label col-form-label-sm']) }}
        <div id="edad"></div>
    </div>
    <div class="col-md">
        {{ Form::label('pais_id', '1.9 País de nacimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('pais_id', $paises, (!$valor) ? 2 : null, ['class' => $errors->first('pais_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'cambioPais(this.value)']) }}
        @if($errors->has('pais_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('pais_id') }}
            </div>
        @endif
        {{ Form::label('departamento_id', '1.9(a) Departamento de nacimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('departamento_id', $departamentos, (!$valor) ? 6 : null, ['class' => $errors->first('departamento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'cambiaDepartamento(this.value)']) }}
        @if($errors->has('departamento_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('departamento_id') }}
            </div>
        @endif
        {{ Form::label('municipio_id', '1.9(b) Municipio de nacimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('municipio_id', $municipios, (!$valor) ? 233 : null, ['class' => $errors->first('municipio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('municipio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('municipio_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_documento_id', '1.10 Documento con el cual se identifica', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_documento_id', $documentos, null, ['class' => $errors->first('prm_documento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_documento_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_documento_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_doc_fisico_id', '1.11 Cuenta con el documento físico?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_doc_fisico_id', $sino, null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('prm_doc_fisico_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_doc_fisico_id') }}
            </div>
        @endif
        {{ Form::label('prm_sin_fisico_id', 'Motivo:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_sin_fisico_id', $sindocumento, null, ['class' => $errors->first('prm_sin_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_sin_fisico_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_sin_fisico_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('documento', '1.12 No. de documento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('documento', null, ['class' => $errors->first('documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'No. de documento', 'maxlength' => '120']) }}
        @if($errors->has('documento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('documento') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('pais_docum_id', '1.13 País de expedición', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('pais_docum_id', $paises, (!$valor) ? 2 : null, ['class' => $errors->first('pais_docum_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'cambioPais1(this.value)']) }}
        @if($errors->has('pais_docum_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('pais_docum_id') }}
            </div>
        @endif
        {{ Form::label('departamento_docum_id', '1.13(a) Departamento de expedición', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('departamento_docum_id', $departamentos1, (!$valor) ? 6 : null, ['class' => $errors->first('departamento_docum_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'departamento_docum_id', 'onchange' => 'cambiaDepartamento1(this.value)']) }}
        @if($errors->has('departamento_docum_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('departamento_docum_id') }}
            </div>
        @endif
        {{ Form::label('municipio_docum_id', '1.13(b) Municipio de expedición', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('municipio_docum_id', $municipios1, null, ['class' => $errors->first('municipio_docum_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('municipio_docum_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('municipio_docum_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_gruposang_id', '1.14 Grupo Sanguíneo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_gruposang_id', $grupo, null, ['class' => $errors->first('prm_gruposang_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_gruposang_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_gruposang_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_factorsang_id', 'RH', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_factorsang_id', $rh, null, ['class' => $errors->first('prm_factorsang_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_factorsang_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_factorsang_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_militar_id', '1.15 ¿Tiene definida su situación militar?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_militar_id', $sino, null, ['class' => $errors->first('prm_militar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
        @if($errors->has('prm_militar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_militar_id') }}
            </div>
        @endif
        {{ Form::label('prm_libreta_id', 'Si cuenta con libreta militar indicar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_libreta_id', $claseLibreta, null, ['class' => $errors->first('prm_libreta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_libreta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_libreta_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_civil_id', '1.16 Estado Civil', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_civil_id', $estadoCivil, null, ['class' => $errors->first('prm_civil_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_civil_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_civil_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        {{ Form::label('prm_etnia_id', '1.17 ¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_etnia_id', $grupoEtnico, null, ['class' => $errors->first('prm_etnia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)']) }}
        @if($errors->has('prm_etnia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_etnia_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_cual_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_cual_id', $grupoIndigena, null, ['class' => $errors->first('prm_cual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_cual_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_cual_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('prm_poblacion_id', '1.18 ¿Tipo de población?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_poblacion_id', $tPoblacion, null, ['class' => $errors->first('prm_poblacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_poblacion_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_poblacion_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-3">
    @canany(['csddatobasico-crear', 'csddatobasico-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
</div>