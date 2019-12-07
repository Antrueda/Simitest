<div class="row">
	<div class="col-md">
		{{ Form::label('motivos', '2.1 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('motivos[]', $motivos, null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple', 'autofocus', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('motivos'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('motivos') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion', '2.2 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row mt-3">
	@if($vsi->activo == 1)
		@canany(['vsibienvenida-crear', 'vsibienvenida-editar'])
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcanany
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>