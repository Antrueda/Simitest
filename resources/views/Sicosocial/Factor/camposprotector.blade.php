{{ Form::hidden('sis_nnaj_id', $nnaj->id) }}
<div class="row">
	<div class="col-md-9">
		{{ Form::label('protector', '17.1 Factor protector', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('protector', null, ['class' => $errors->first('protector') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('protector'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('protector') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		@if ($vsi->sis_esta_id == 1)
			@canany(['vsifactor-crear', 'vsifactor-editar'])
				{{ Form::submit('Agregar', ['class' => 'btn btn-sm btn-primary mt-4']) }}
			@endcanany
		@endif
	</div>
</div>