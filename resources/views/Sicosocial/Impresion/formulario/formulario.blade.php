<div class="row">
	<div class="col-md">
		{{ Form::label('concepto', 'Concepto:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('concepto', null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Concepto', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', 'autofocus']) }}
		<p id="contadorconcepto">0/4000</p>
		@if($errors->has('concepto'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('concepto') }}
	      	</div>
	    @endif
	</div>
</div>
@if($todoxxxx['usuariox']->nnaj_nacimi->Edad<18)
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_ingreso_id', 'Considera pertinente el Ingreso del NNA a IDIPRON:', ['class' => 'control-label col-form-label-sm']) }}
		@if ($todoxxxx['usuariox']->edad<18)
			{{ Form::select('prm_ingreso_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_ingreso_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
		@endif
		@if($errors->has('prm_ingreso_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_ingreso_id') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('porque', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
		@if ($todoxxxx['usuariox']->edad<18)
			{{ Form::textarea('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '¿Por qué?', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
			<p id="contadorporque">0/4000</p>
			@endif
		@if($errors->has('porque'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('porque') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md">
		{{ Form::label('redes', '20.1 DIRECCIONAR A: Red(es) intrainstitucional(es)', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('redes[]', $todoxxxx['areasxxx'], null, ['class' => $errors->first('redes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...',  'id' => 'redes', 'multiple']) }}
		@if($errors->has('redes'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('redes') }}
			</div>
		@endif
		{{ Form::label('cual', 'Redes Interinstitucionales: ¿Cuál(es)?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('cual', null, ['class' => $errors->first('cual') ?
            'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
            'placeholder' => 'Redes Interinstitucionales', 'maxlength' => '120',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();',
            'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('cual'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('cual') }}
	      	</div>
	    @endif
	</div>
</div>
@endif




<div class="form-group row">
    @include('layouts.registro')
</div>
