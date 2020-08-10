<div class="row">
	<div class="col-md-4">
		{{ Form::label('emocionales', '19.1 Área Emocional', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('emocionales[]', $todoxxxx['emociona'], null, ['class' => $errors->first('emocionales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'emocionales', 'multiple', 'autofocus']) }}
		@if($errors->has('emocionales'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('emocionales') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('sexuales', '19.2 Área Sexual', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('sexuales[]', $todoxxxx['sexuales'], null, ['class' => $errors->first('sexuales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'sexuales', 'multiple']) }}
		@if($errors->has('sexuales'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('sexuales') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('comportamentales', '19.3 Área Comportamental', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('comportamentales[]', $todoxxxx['comporta'], null, ['class' => $errors->first('comportamentales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...',  'id' =>'comportamentales', 'multiple']) }}
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
		{{ Form::select('academicas[]', $todoxxxx['academic'], null, ['class' => $errors->first('academicas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'academicas', 'multiple']) }}
		@if($errors->has('academicas'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('academicas') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('sociales', '19.5 Área Social', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('sociales[]', $todoxxxx['sociales'], null, ['class' => $errors->first('sociales') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'sociales', 'multiple']) }}
		@if($errors->has('sociales'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('sociales') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('familiares', '19.6 Área Familiar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('familiares[]', $todoxxxx['familiar'], null,
            ['class' => $errors->first('familiares') ? 'form-control form-control-sm is-invalid' :
                'form-control form-control-sm', 'data-placeholder' => 'Seleccione...',
                'id' => 'familiares', 'multiple']) }}
		@if($errors->has('familiares'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('familiares') }}
			</div>
		@endif
	</div>
</div>


<div class="row">
   <div class="col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
