<div class="row">
	<div class="col-md-4">
		{{ Form::label('emocionales', '19.1 Área Emocional', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('emocionales[]', $emocionales, null, ['class' => $errors->first('emocionales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'emocionales', 'multiple', 'autofocus', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('emocionales'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('emocionales') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('sexuales', '19.2 Área Sexual', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('sexuales[]', $sexuales, null, ['class' => $errors->first('sexuales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'sexuales', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('sexuales'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('sexuales') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('comportamentales', '19.3 Área Comportamental', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('comportamentales[]', $comportamentales, null, ['class' => $errors->first('comportamentales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...',  'id' =>'comportamentales', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('comportamentales'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('comportamentales') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		{{ Form::label('academicas', '19.4 Área Académica', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('academicas[]', $academicas, null, ['class' => $errors->first('academicas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'academicas', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('academicas'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('academicas') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('sociales', '19.5 Área Social', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('sociales[]', $sociales, null, ['class' => $errors->first('sociales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'sociales', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('sociales'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('sociales') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('familiares', '19.6 Área Familiar', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('familiares[]', $familiares, null, ['class' => $errors->first('familiares') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'familiares', 'multiple', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('familiares'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('familiares') }}
			</div>
		@endif
	</div>
</div>
<div class="row mt-3">
	@if ($vsi->sis_esta_id == 1)
		@canany(['vsiareaajuste-crear', 'vsiareaajuste-editar'])
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcanany
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>