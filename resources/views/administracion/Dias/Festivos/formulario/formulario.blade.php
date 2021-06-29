<div class="form-group row">

    <div class="col-md-6">
        {{ Form::label('diafestivo', 'FECHA FESTIVO', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('diafestivo', null, ['class' => $errors->first('diafestivo') ? 'form-control  is-invalid' :
            'form-control', 'placeholder' => 'FECHA FESTIVO',  'autofocus','readonly']) }}
        @if($errors->has('diafestivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('diafestivo') }}
        </div>
        @endif
    </div>

    <div class="col-md-6">
        {{ Form::label('sis_esta_id', 'ESTADO', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
