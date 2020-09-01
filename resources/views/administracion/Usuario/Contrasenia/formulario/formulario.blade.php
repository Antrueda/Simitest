<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('password', 'Contraseña', ['class' => 'control-label col-form-label-sm']) }}
        {{Form::password('password', ['class' => $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm'])}}
        @if($errors->has('password'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('password') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('password_confirmation', 'Confirmar Contraseña', ['class' => 'control-label col-form-label-sm']) }}
        {{Form::password('password_confirmation', ['class' => $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm'])}}
        @if($errors->has('password_confirmation'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('password_confirmation') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
