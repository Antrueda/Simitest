<hr>
<div class="row">
	<div class="col-md-12">
		{{ Form::label('descripcion', '8 Antecedentes (Acontecimientos; hechos significativos; antecedentes en ámbitos como: socio familiar, académico, barrial; destacados que el NNAJ describió durante la valoración):', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadorindescripcion">0/4000</p>
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
    </div>
</div>
<hr>

<div class="form-group row">
    @include('layouts.registro')
</div>
