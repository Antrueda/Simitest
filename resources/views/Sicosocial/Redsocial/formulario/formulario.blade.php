<?php

$tablaxxx = 'principa';
if (isset($todoxxxx['rowscols'])) {
    $tablaxxx = $todoxxxx['rowscols'];
}

?>
<div class="row">
    <div class="col-md">
        {{ Form::label('prm_presenta_id', '7.1.1 ¿Presenta alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_presenta_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_presenta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...', 'onchange' => 'doc2(this.value)', 'autofocus']) }}
        @if($errors->has('prm_presenta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_presenta_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_protector_id', '7.1.2 ¿La red de apoyo con la que cuenta actualmente es un factor protector?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_protector_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_protector_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...']) }}
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
                {{ Form::select('prm_dificultad_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...', 'onchange' => 'doc(this.value)']) }}
                @if($errors->has('prm_dificultad_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('prm_dificultad_id') }}
                    </div>
                @endif
            </div>
            <div class="col-md">
                {{ Form::label('prm_quien_id', '¿Quién?', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::select('prm_quien_id', $todoxxxx['personax'], null, ['class' => $errors->first('prm_quien_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...']) }}
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
        {{ Form::label('motivos', '7.1.4 Motivos por el cual se presenta la dificultad', ['class' => 'control-label col-form-label-sm']) }}
        <div id="motivos_div">
            {{ Form::select('motivos[]', $todoxxxx['motivosx'], null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple']) }}
        </div>
        @if($errors->has('motivos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('motivos') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_ruptura_genero_id', '7.1.5 ¿Existe la ruptura de redes de apoyo por exteorización de su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ruptura_genero_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_ruptura_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_ruptura_genero_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_ruptura_genero_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_ruptura_sexual_id', '7.1.6 ¿Existe la ruptura de redes de apoyo por exteorización de su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ruptura_sexual_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_ruptura_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...']) }}
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
        {{ Form::select('prm_acceso_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_acceso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)','data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_acceso_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_acceso_id') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('accesos', '7.1.8 Motivos de restricción de acceso a espacios, servicio o redes de apoyo', ['class' => 'control-label col-form-label-sm']) }}
        <div id="accesos_div">
            {{ Form::select('accesos[]', $todoxxxx['accesoxx'], null, ['class' => $errors->first('accesos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'accesos', 'multiple']) }}
        </div>
        @if($errors->has('accesos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('accesos') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        {{ Form::label('prm_servicio_id', '7.1.9 ¿Recibió servicios de alguna red de apoyo?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_servicio_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_servicio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','data-placeholder' => 'Seleccione...']) }}
        @if($errors->has('prm_servicio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_servicio_id') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h6><b>7.1.10 REDES ACTUALES</b></h6>
    </div>
</div>
@foreach ($todoxxxx['tablasxx'] as $key=> $tablasxx)
<div class="row">
                    <div class="col-md-12">
                        <h6>{{$tablasxx['relacion']}}</h6>
                    </div>
                </div>
@component('layouts.components.tablajquery.'.$tablaxxx, ['todoxxxx'=>$tablasxx])
@slot('tableName')
{{$tablasxx['tablaxxx'] }}
@endslot
@slot('class')
@endslot
@endcomponent
@endforeach
<div class="col-md-12">
    {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
    @if($errors->has('sis_esta_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('sis_esta_id') }}
    </div>
    @endif
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
