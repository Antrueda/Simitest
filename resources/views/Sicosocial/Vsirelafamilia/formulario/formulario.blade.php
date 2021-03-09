<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_representativa_id', '3.1 ¿Indique cuál es la persona más representativa de su familia?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_representativa_id', $todoxxxx['familiar'], null, ['class' => $errors->first('prm_representativa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
		@if($errors->has('prm_representativa_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_representativa_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-9">
		{{ Form::label('representativa', '3.2 ¿Por qué es la más representativa?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('representativa', null, ['class' => $errors->first('representativa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Por qué es la más representativa', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toCase();", 'style' => 'text-transform:uppercase;']) }}
		<p id="contadorrepresentativa">0/4000</p>
		@if($errors->has('representativa'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('representativa') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_mala_id', '3.3 ¿Cuál es la persona con quien no tiene buenas relaciones en su familia?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_mala_id', $todoxxxx['familiar'], null, ['class' => $errors->first('prm_mala_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc3(this.value)']) }}
		@if($errors->has('prm_mala_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_mala_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('motivos', '3.4	Mencione el/los motivos por lo cual no existen buenas relaciones', ['class' => 'control-label col-form-label-sm']) }}
		<div id="motivos_div">
		{{ Form::select('motivos[]', $todoxxxx['motivosx'], null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple']) }}
		</div>
		@if($errors->has('motivos'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('motivos') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_relacion_id', '3.5 ¿Cómo es la relación con su familia?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_relacion_id', $todoxxxx['relacion'], null, ['class' => $errors->first('prm_relacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_relacion_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_relacion_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_gusto_id', '3.6 ¿Se siente a gusto con el tipo de relación?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_gusto_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_gusto_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_gusto_id'))
			<div class="invalid-feedback d-block">
					{{ $errors->first('prm_gusto_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		{{ Form::label('porque', '3.7 ¿Por qué?:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('porque', null, ['class' => $errors->first('porque') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '¿Por qué?', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
		<p id="contadorporque">0/4000</p>
		@if($errors->has('porque'))
		<div class="invalid-feedback d-block">
				{{ $errors->first('porque') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_familia_id', '3.8 ¿Se presenta algún tipo de dificultad en su familia?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_familia_id', $todoxxxx['sinoxxxxx'], null, ['class' => $errors->first('prm_familia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
		@if($errors->has('prm_familia_id'))
			<div class="invalid-feedback d-block">
					{{ $errors->first('prm_familia_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
			{{ Form::label('famDificultades', '3.9 ¿Cuáles?', ['class' => 'control-label col-form-label-sm']) }}
			<div id="famDificultades_div">
				{{ Form::select('famDificultades[]', $todoxxxx['dificult'], null, ['class' => $errors->first('famDificultades') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'famDificultades', 'multiple']) }}
			</div>
			@if($errors->has('famDificultades'))
				<div class="invalid-feedback d-block">
					{{ $errors->first('famDificultades') }}
				</div>
			@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('acciones', '3.10 ¿Qué acciones han realizado ante los casos de violencia?', ['class' => 'control-label col-form-label-sm']) }}
		<div id="acciones_div">
			{{ Form::select('acciones[]', $todoxxxx['acciones'], null, ['class' => $errors->first('acciones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'acciones', 'multiple']) }}
		</div>
		@if($errors->has('acciones'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('acciones') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_denuncia_id', '3.11 ¿Ha denunciado ante las autoridades competentes la violencia presentada?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_denuncia_id', $todoxxxx['sinoxxxxxx'], null, ['class' => $errors->first('prm_denuncia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc4(this.value)']) }}
		@if($errors->has('prm_denuncia_id'))
			<div class="invalid-feedback d-block">
					{{ $errors->first('prm_denuncia_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_denunante_id', '¿Ante cual autoridad competente?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_denunante_id', $todoxxxx['entidadx'], null, ['class' => $errors->first('prm_denunante_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_denunante_id'))
			<div class="invalid-feedback d-block">
					{{ $errors->first('prm_denunante_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		{{ Form::label('descripcion', '3.12 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción de relaciones familiares', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion">0/4000</p>
		@if($errors->has('descripcion'))
		<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_pareja_id', '3.13 ¿Tiene pareja?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_pareja_id', $todoxxxx['sinonaxx'], null, ['class' => $errors->first('prm_pareja_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
		@if($errors->has('prm_pareja_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_pareja_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_dificultad_id', '3.14 ¿Tiene dificultades con su pareja?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_dificultad_id', $todoxxxx['sinonaxx'], null, ['class' => $errors->first('prm_dificultad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)']) }}
		@if($errors->has('prm_dificultad_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_dificultad_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label(null, '3.15 ¿Hace cuánto se presentan estas dificultades?', ['class' => 'control-label col-form-label-sm']) }}
		<div class="row">
			<div class="col-md-4">
				{{ Form::label('dia', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('dia'))
					<div class="invalid-feedback d-block">
			        	{{ $errors->first('dia') }}
			      	</div>
			    @endif
			</div>
			<div class="col-md-4">
				{{ Form::label('mes', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('mes'))
					<div class="invalid-feedback d-block">
			        	{{ $errors->first('mes') }}
			      	</div>
			    @endif
			</div>
			<div class="col-md-4">
				{{ Form::label('ano', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('ano'))
					<div class="invalid-feedback d-block">
			        	{{ $errors->first('ano') }}
			      	</div>
			    @endif
			</div>
		</div>
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_responde_id', '3.16 ¿Cómo responden a las dificultades?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_responde_id', $todoxxxx['responde'], null, ['class' => $errors->first('prm_responde_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_responde_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_responde_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('descripcion1', '3.17 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion1', null, ['class' => $errors->first('descripcion1') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción de relaciones de pareja', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion1">0/4000</p>
		@if($errors->has('descripcion1'))
		<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion1') }}
			</div>
		@endif
	</div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
