<div class="form-group row">
<div class="form-group col-md-6">
        {{ Form::label('name', 'Rol:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('name', null, ['class' => 'form-control form-control']) }}
        @if($errors->has('name'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control-sm is-invalid' : 'form-control','id'=>'sis_esta_id']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    @include('administracion.dependencia.Dependencia.formulario.motivoestado')
    @include('layouts.registro')
</div>

