<div class="row">
	<div class="col-md">
		{{ Form::label('concepto', 'Concepto:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('concepto', null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Concepto', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', 'autofocus', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('concepto'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('concepto') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_ingreso_id', 'Considera pertinente el Ingreso del NNA a IDIPRON:', ['class' => 'control-label col-form-label-sm']) }}
		@if ($nnaj->edad<18)
			{{ Form::select('prm_ingreso_id', $sino, null, ['class' => $errors->first('prm_ingreso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@endif
		@if($errors->has('prm_ingreso_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_ingreso_id') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('porque', '¿Por qué?', ['class' => 'control-label col-form-label-sm']) }}
		@if ($nnaj->edad<18)
			{{ Form::textarea('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '¿Por qué?', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@endif
		@if($errors->has('porque'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('porque') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md">
		{{ Form::label('redes', '20.1 DIRECCIONAR A: Red(es) intrainstitucional(es)', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('redes[]', $areas, null, ['class' => $errors->first('redes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...',  'id' => 'redes', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('redes'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('redes') }}
			</div>
		@endif
		{{ Form::label('cual', 'Redes Interinstitucionales: ¿Cuál(es)?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('cual', null, ['class' => $errors->first('cual') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Redes Interinstitucionales', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('cual'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('cual') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row mt-3">
	@if ($vsi->sis_esta_id == 1)
		@canany(['vsiconcepto-crear', 'vsiconcepto-editar'])
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcanany
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>