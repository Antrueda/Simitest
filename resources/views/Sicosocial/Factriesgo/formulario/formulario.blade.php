<div class="row">
<div class="col-md-6">
		{{ Form::label('riesgo', '17.2 Factor riesgo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('riesgo', null, ['class' => $errors->first('riesgo') ? 'form-control form-control-sm is-invalid' :
            'form-control form-control-sm', 'maxlenght' => '120',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();',
            'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('riesgo'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('riesgo') }}
			</div>
		@endif
	</div>
  </div>

<div class="form-group row">
    @include('layouts.registro')
</div>
