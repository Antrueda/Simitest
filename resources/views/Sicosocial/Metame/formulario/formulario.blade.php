<div class="row">
    <div class="col-md-6">
        {{ Form::label('meta', '18.2 Meta', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('meta', null, ['class' => $errors->first('meta') ?
            'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();',
            'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('meta'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('meta') }}
        </div>
        @endif
    </div>
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
