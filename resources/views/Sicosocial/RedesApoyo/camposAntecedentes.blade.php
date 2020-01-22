<div class="row">
    <div class="col-md">
        {{ Form::label('prm_presenta_id', '7.1.1 ¿Presenta alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_presenta_id', $sino, null, ['class' => $errors->first('prm_presenta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)', 'autofocus', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_presenta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_presenta_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_protector_id', '7.1.2 ¿La red de apoyo con la que cuenta actualmente es un factor protector?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_protector_id', $sino, null, ['class' => $errors->first('prm_protector_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_protector_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_protector_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_dificultad_id', '7.1.3 ¿Presenta dificultades para acceder a alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md">
                {{ Form::select('prm_dificultad_id', $sino, null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
                @if($errors->has('prm_dificultad_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_dificultad_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md">
                {{ Form::label('prm_quien_id', '¿Quién?', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::select('prm_quien_id', $persona, null, ['class' => $errors->first('prm_quien_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
                @if($errors->has('prm_quien_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_quien_id') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('motivos', '7.1.4 Motivos por el cual se presenta la restricción', ['class' => 'control-label col-form-label-sm']) }}
        <div id="motivos_div">
            {{ Form::select('motivos[]', $motivos, null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        </div>
        @if($errors->has('motivos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('motivos') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_ruptura_genero_id', '7.1.5 ¿Existe la ruptura de redes de apoyo por exteorización de su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ruptura_genero_id', $sino, null, ['class' => $errors->first('prm_ruptura_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_ruptura_genero_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_ruptura_genero_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_ruptura_sexual_id', '7.1.6 ¿Existe la ruptura de redes de apoyo por exteorización de su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ruptura_sexual_id', $sino, null, ['class' => $errors->first('prm_ruptura_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_ruptura_sexual_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_ruptura_sexual_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_acceso_id', '7.1.7 ¿Ha existido restricción para el acceso a espacios, servicios o redes de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_acceso_id', $sino, null, ['class' => $errors->first('prm_acceso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_acceso_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_acceso_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('accesos', '7.1.8 Motivos de restricción de acceso a espacios, servicio o redes de apoyo', ['class' => 'control-label col-form-label-sm']) }}
        <div id="accesos_div">
            {{ Form::select('accesos[]', $acceso, null, ['class' => $errors->first('accesos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'accesos', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        </div>
        @if($errors->has('accesos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('accesos') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_servicio_id', '7.1.9 ¿Recibió servicios de alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_servicio_id', $sino, null, ['class' => $errors->first('prm_servicio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
        @if($errors->has('prm_servicio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_servicio_id') }}
            </div>
        @endif
    </div>
</div>