<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_estudia_id', '10.1 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_estudia_id', $sino, null, ['class' => $errors->first('prm_estudia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)', 'autofocus', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_estudia_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_estudia_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label(null, '10.2 ¿Cuánto tiempo lleva sin estudiar?', ['class' => 'control-label col-form-label-sm']) }}
		<div class="row">
			<div class="col-md-4">
				{{ Form::label('dia', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99', $vsi->activo == 0 ? 'disabled' : '']) }}
				@if($errors->has('dia'))
					<div class="invalid-feedback d-block">
			        	{{ $errors->first('dia') }}
			      	</div>
			    @endif
			</div>
			<div class="col-md-4">
				{{ Form::label('mes', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99', $vsi->activo == 0 ? 'disabled' : '']) }}
				@if($errors->has('mes'))
					<div class="invalid-feedback d-block">
			        	{{ $errors->first('mes') }}
			      	</div>
			    @endif
			</div>
			<div class="col-md-4">
				{{ Form::label('ano', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99', $vsi->activo == 0 ? 'disabled' : '']) }}
				@if($errors->has('ano'))
					<div class="invalid-feedback d-block">
			        	{{ $errors->first('ano') }}
			      	</div>
			    @endif
			</div>
		</div>
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_motivo_id', '10.3 Motivo por el cual no está escolarizado', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_motivo_id', $motivos, null, ['class' => $errors->first('prm_motivo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_motivo_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_motivo_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('causas', '10.4 ¿Cuáles son las principales causas de deserción?', ['class' => 'control-label col-form-label-sm']) }}
		<div id="causas_div">	
			{{ Form::select('causas[]', $causas, null, ['class' => $errors->first('causas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'causas', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
		</div>
		@if($errors->has('causas'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('causas') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_rendimiento_id', '10.5 ¿Cómo ha sido su rendimiento académico hasta el momento?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_rendimiento_id', $rendimientos, null, ['class' => $errors->first('prm_rendimiento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_rendimiento_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_rendimiento_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('fortalezas', '10.6 ¿En qué materias presenta fortaleza?', ['class' => 'control-label col-form-label-sm']) }}
		<div id="fortalezas_div">
			{{ Form::select('fortalezas[]', $materias, null, ['class' => $errors->first('fortalezas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'fortalezas', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
		</div>
		@if($errors->has('fortalezas'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('fortalezas') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('dificultades', '10.7 ¿En qué materias presenta dificultades?', ['class' => 'control-label col-form-label-sm']) }}
		<div id='dificultades_div'>
			{{ Form::select('dificultades[]', $materias, null, ['class' => $errors->first('dificultades') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'dificultades', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
		</div>
		@if($errors->has('dificultades'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('dificultades') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_dificultad_id', '10.8 ¿Presenta dificultades para seguir instrucciones a la hora de realizar las tareas?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_dificultad_id', $sino, null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_dificultad_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_dificultad_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('dificultadesa', '10.9 ¿Qué tipo de dificultades?', ['class' => 'control-label col-form-label-sm']) }}
		<div id="dificultadesa_div">
			{{ Form::select('dificultadesa[]', $dificultad1, null, ['class' => $errors->first('dificultadesa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'dificultadesa', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
		</div>
		@if($errors->has('dificultadesa'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('dificultadesa') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('dificultadesb', '10.10 Identifica algún tipo de dificultad en:', ['class' => 'control-label col-form-label-sm']) }}
		<div id="dificultadesb_div">
			{{ Form::select('dificultadesb[]', $dificultad2, null, ['class' => $errors->first('dificultadesb') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...','id' => 'dificultadesb', 'multiple', $vsi->activo == 0 ? 'disabled' : '']) }}
		</div>
			@if($errors->has('dificultadesb'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('dificultadesb') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_leer_id', '10.11 ¿Sabe Leer?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_leer_id', $sino, null, ['class' => $errors->first('prm_leer_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_leer_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_leer_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_escribir_id', '10.12 ¿Sabe Escribir?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_escribir_id', $sino, null, ['class' => $errors->first('prm_escribir_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_escribir_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_escribir_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		{{ Form::label('descripcion', '10.13 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', $vsi->activo == 0 ? 'disabled' : '']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row mt-3">
	@if ($vsi->activo == 1)
		@canany(['vsieducacion-crear', 'vsieducacion-editar'])
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcanany
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>