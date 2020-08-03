<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('model_id', 'Contraseña', ['class' => 'control-label col-form-label-sm']) }}
        {{Form::password('password', ['class' => 'form-control form-control-sm'])}}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('password_confirmation', 'Confirmar Contraseña', ['class' => 'control-label col-form-label-sm']) }}
        {{Form::password('password_confirmation', ['class' => 'form-control form-control-sm'])}}
    </div>
    @include('layouts.registro')
</div>
