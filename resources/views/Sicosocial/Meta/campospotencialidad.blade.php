{{ Form::hidden('sis_nnaj_id', $nnaj->id) }}
<div class="row">
	<div class="col-md-9">
		{{ Form::label('potencialidad', '18.1 Potencialidad', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('potencialidad', null, ['class' => $errors->first('potencialidad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'maxlenght' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('potencialidad'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('potencialidad') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		@if ($vsi->activo == 1)
			@canany(['vsimeta-crear', 'vsimeta-editar'])
				{{ Form::submit('Agregar', ['class' => 'btn btn-sm btn-primary mt-4']) }}
			@endcanany
		@endif
	</div>
</div>