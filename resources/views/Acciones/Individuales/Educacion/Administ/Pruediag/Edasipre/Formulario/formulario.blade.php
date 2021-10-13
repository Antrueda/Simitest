<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('s_presaber', 'Presaber:', ['class' => 'control-label']) }}
        {{ Form::textarea('s_presaber', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Presaber', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if(isset($errors) && $errors->has('s_presaber'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_presaber') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
