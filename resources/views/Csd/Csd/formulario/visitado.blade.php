

<div class="row">
    <div class="col-md-9">
        {{ Form::label('proposito', 'Propósito:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('proposito', null, ['class' => $errors->first('proposito') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Propósito', 'maxlength' => '200', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('proposito'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('proposito') }}
            </div>
        @endif
    </div>
    <div class="col-md-3">
        {{ Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
</div>

