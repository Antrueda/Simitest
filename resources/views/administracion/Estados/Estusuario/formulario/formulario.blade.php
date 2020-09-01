<div class="form-group row">

    <div class="col-md-4">
        {{ Form::label('estado', 'ESTADO USUARIO', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::text('estado', null, ['class' => $errors->first('estado') ? 'form-control  is-invalid' :
            'form-control', 'placeholder' => 'MOTIVO', 'maxlength' => '120', 'autofocus','style'=>'height: 28px']) }}
        @if($errors->has('estado'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estado') }}
        </div>
        @endif
    </div>

    <div class="col-md-4">
        {{ Form::label('prm_formular_id', 'FORMULARIO', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_formular_id', $todoxxxx['formular'], null, ['class' => $errors->first('prm_formular_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('prm_formular_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_formular_id') }}
        </div>
        @endif
    </div>

    <div class="col-md-4">
        {{ Form::label('sis_esta_id', 'ESTADO', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
