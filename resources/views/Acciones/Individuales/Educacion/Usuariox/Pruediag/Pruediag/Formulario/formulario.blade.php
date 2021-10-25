<div class="row">
    <div class="col-md-12">
        <h6>LUGAR Y FECHA DE DILIGENCIAMIENTO </h6>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('sis_depen_id', 'UPI/Área/Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id',$todoxxxx['dependen'], null, ['class' => $errors->first('sis_depen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fechdili', 'Fecha de diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fechdili', null, ['class' => $errors->first('fechdili') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
        </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('eda_grado_id', 'Grado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('eda_grado_id',$todoxxxx['gradoxxx'], null, ['class' => $errors->first('eda_grado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('eda_grado_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('eda_grado_id') }}
        </div>
        @endif
    </div>


</div>

<div class="row mt-3">
    <div class="col-md-12">
        <h6>DATOS BÁSICOS</h6>
    </div>
</div>
<hr>

<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('primnombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->s_primer_nombre}}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('segunnombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->s_segundo_nombre}}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('primapellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->s_primer_apellido}}
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('segunapellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->s_segundo_apellido}}
        </div>

    </div>

    <div class="form-group col-md-4">
        {{ Form::label('nombreidentitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->nnaj_sexo->s_nombre_identitario}}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('tipodocumento', 'Tipo de Documento', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->nnaj_docu->tipoDocumento->nombre}}
        </div>
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('nodocumento', 'No. De Documento', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{$todoxxxx['usuariox']->nnaj_docu->s_documento}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    </div>
</div>
<div class="row">
    <div class="col-12">
        {{ Form::label('persdili_id', 'PERSONA QUIEN DILIGENCIA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('persdili_id', $todoxxxx['respoupi'], null, ['class' => $errors->first('persdili_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
        @if($errors->has('persdili_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('persdili_id') }}
        </div>
        @endif
    </div>
</div>
<div class="row">
    @include('layouts.registro')
</div>
