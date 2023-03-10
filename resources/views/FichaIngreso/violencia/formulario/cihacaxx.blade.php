
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('prm_violbasa_id', '11.2 El tipo de violencia referenciado corresponde a violencia basada en?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_violbasa_id[]', $todoxxxx["violbasa"], null, ['class' => 'form-control form-control-sm select2','multiple','id'=>'violbasa']) }}
        @if($errors->has('prm_violbasa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_violbasa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_lesicome_id', '11.1.B Que tipo de presuntas lesiones ha cometido durante la actividad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_lesicome_id[]', $todoxxxx["lesicome"], null, ['class' => 'form-control form-control-sm select2','multiple']) }}
        @if($errors->has('prm_lesicome_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_lesicome_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_condicion_presenta_id', '11.3 ¿Qué condición especial presenta?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_condicion_presenta_id', $todoxxxx["condespe"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_condicion_presenta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_condicion_presenta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_depto_condicion_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_depto_condicion_id', $todoxxxx["departam"], null, ['class' => 'form-control form-control-sm departam select2']) }}
        @if($errors->has('i_prm_depto_condicion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_depto_condicion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">

        {{ Form::label('i_prm_municipio_condicion_id', 'Ciudad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_municipio_condicion_id', $todoxxxx["municipi"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_municipio_condicion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_municipio_condicion_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tiene_certificado_id', '11.4 ¿Cuenta con certificado?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tiene_certificado_id', $todoxxxx["condiesp"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_tiene_certificado_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_tiene_certificado_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_depto_certifica_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_depto_certifica_id', $todoxxxx["deparexp"], null, ['class' => 'form-control form-control-sm departam select2']) }}
        @if($errors->has('i_prm_depto_certifica_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_depto_certifica_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_municipio_certifica_id', 'Ciudad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_municipio_certifica_id', $todoxxxx["municexp"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_municipio_certifica_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_municipio_certifica_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('prm_cabefami_id', '11.5 ¿Es cabeza de familia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_cabefami_id', $todoxxxx["cabefami"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_cabefami_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_cabefami_id') }}
        </div>
        @endif
    </div>
</div>
