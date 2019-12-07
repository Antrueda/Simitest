{{ Form::hidden('sis_nnaj_id', $nnaj->id) }}
<div class="row">
	<div class="col-md-9">
		{{ Form::label('riesgo', '17.2 Factor riesgo', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('riesgo', null, ['class' => $errors->first('riesgo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('riesgo'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('riesgo') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		@if ($vsi->activo == 1)
			@canany(['vsifactor-crear', 'vsifactor-editar'])
				{{ Form::submit('Agregar', ['class' => 'btn btn-sm btn-primary mt-4']) }}
			@endcanany
		@endif
	</div>
</div>