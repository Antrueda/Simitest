<div class="row">
	<div class="col-md">
		{{ Form::label('motivos', '2.1 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('motivos[]', $todoxxxx['motivosx'], null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione', 'id' => 'motivos', 'multiple', 'autofocus']) }}
		@if($errors->has('motivos'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('motivos') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion', '2.2 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
		<p id="contadorindescripcion">0/4000</p>
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
	</div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
