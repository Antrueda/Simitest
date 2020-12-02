<div class="row">
<div class="col-md-6">
		{{ Form::label('protector', '17.1 Factor protector', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('protector', null, ['class' => $errors->first('protector') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120', 'autofocus',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();',
            'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('protector'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('protector') }}
			</div>
		@endif
	</div>
  </div>

<div class="form-group row">
    @include('layouts.registro')
</div>
