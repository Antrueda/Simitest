<div class="row">
	<div class="col-md">
		<div class="row">
			<div class="col-md">
				{{ Form::label('prm_siente_id', '12.1 ¿Cómo se siente la mayor parte del tiempo?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_siente_id', $todoxxxx['sentimie'], null, ['class' => $errors->first('prm_siente_id') ?
                    'form-control select2 form-control-sm is-invalid' : 'form-control form-control-sm',
                    'autofocus']) }}
				@if($errors->has('prm_siente_id'))
				<div class="invalid-feedback d-block">
					{{ $errors->first('prm_siente_id') }}
				</div>
				@endif
			</div>
			<div class="col-md">
				{{ Form::label('contexto', '12.2 ¿En qué contextos predominan estos estado de ánimo?', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::select('contexto[]', $todoxxxx['contexto'], null, ['class' => $errors->first('contexto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','data-placeholder' => 'Seleccione...','id' => 'contexto', 'multiple']) }}
				@if($errors->has('contexto'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('contexto') }}
					</div>
				@endif
			</div>
		</div>
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_siente', '12.3 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_siente', null, ['class' => $errors->first('descripcion_siente') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion0">0/4000</p>
		@if($errors->has('descripcion_siente'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_siente') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_reacciona_id', '12.4 ¿Cómo reacciona ante eventos o situaciones que le generen un cambio emocional?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_reacciona_id', $todoxxxx['reaccion'], null, ['class' => $errors->first('prm_reacciona_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
		@if($errors->has('prm_reacciona_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('prm_reacciona_id') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_reacciona', '12.5 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_reacciona', null, ['class' => $errors->first('descripcion_reacciona') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion1">0/4000</p>
		@if($errors->has('descripcion_reacciona'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_reacciona') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('adecuados', '12.6 ¿Cuáles sentimientos y/o emociones logra expresar adecuadamente?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('adecuados[]', $todoxxxx['emocione'], null, ['class' => $errors->first('adecuados') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'adecuados', 'multiple']) }}
		@if($errors->has('adecuados'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('adecuados') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_adecuado', '12.7 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_adecuado', null, ['class' => $errors->first('descripcion_adecuado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion2">0/4000</p>
		@if($errors->has('descripcion_adecuado'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_adecuado') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('dificultades', '12.8 ¿Cuáles sentimientos y/o emociones se le dificulta expresar adecuadamente?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('dificultades[]', $todoxxxx['dificult'], null, ['class' => $errors->first('dificultades') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'dificultades', 'multiple']) }}
		@if($errors->has('dificultades'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('dificultades') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_dificulta', '12.9 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_dificulta', null, ['class' => $errors->first('descripcion_dificulta') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion3">0/4000</p>
		@if($errors->has('descripcion_dificulta'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_dificulta') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_estresante_id', '12.10 ¿Ha ocurrido en su vida algún acontecimiento estresante o traumático que le haya generado afectaciones emocionales?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_estresante_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_estresante_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc(this.value)']) }}
		@if($errors->has('prm_estresante_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('prm_estresante_id') }}
			</div>
		@endif
		{{ Form::label('estresantes', 'Indicar el tipo de acontecimiento y/o situación', ['class' => 'control-label col-form-label-sm']) }}
		<div id="estresantes_div">
			{{ Form::select('estresantes[]', $todoxxxx['estresan'], null, ['class' => $errors->first('estresantes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'estresantes', 'multiple']) }}
		</div>
		@if($errors->has('estresantes'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('estresantes') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_estresante', '12.11 Descríbalo', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_estresante', null, ['class' => $errors->first('descripcion_estresante') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion4">0/4000</p>
		@if($errors->has('descripcion_estresante'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_estresante') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_morir_id', '12.12 ¿Ha tenido pensamientos relacionados con morirse?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_morir_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_morir_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc1(this.value)']) }}
		@if($errors->has('prm_morir_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('prm_morir_id') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label(null, '12.13 ¿Desde hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
		<div class="row">
			<div class="col-md-4">
				{{ Form::label('dia_morir', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('dia_morir', null, ['class' => $errors->first('dia_morir') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('dia_morir'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('dia_morir') }}
					</div>
				@endif
			</div>
			<div class="col-md-4">
				{{ Form::label('mes_morir', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('mes_morir', null, ['class' => $errors->first('mes_morir') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('mes_morir'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('mes_morir') }}
					</div>
				@endif
			</div>
			<div class="col-md-4">
				{{ Form::label('ano_morir', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('ano_morir', null, ['class' => $errors->first('ano_morir') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('ano_morir'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('ano_morir') }}
					</div>
				@endif
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_pensamiento_id', '12.14 ¿Alguna vez ha tenido pensamientos relacionados con quitarse la vida?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_pensamiento_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_pensamiento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc3(this.value)']) }}
		@if($errors->has('prm_pensamiento_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('prm_pensamiento_id') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('prm_amenaza_id', '12.15 ¿Alguna vez ha tenido amenazas relacionados con quitarse la vida?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_amenaza_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_amenaza_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc4(this.value)']) }}
		@if($errors->has('prm_amenaza_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('prm_amenaza_id') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('prm_intento_id', '12.16 ¿Alguna vez ha tenido intentos relacionados con quitarse la vida?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_intento_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_intento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc5(this.value)']) }}
		@if($errors->has('prm_intento_id'))
		<div class="invalid-feedback d-block">
			{{ $errors->first('prm_intento_id') }}
		</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('prm_17', '12.17 indique el número de veces', ['class' => 'control-label col-form-label-sm']) }}
		<div class="row">
			<div class="col-md-4">
				{{ Form::label('ideacion', '1. Por ideación', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::number('ideacion', null, ['class' => $errors->first('ideacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('ideacion'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('ideacion') }}
					</div>
				@endif
			</div>
			<div class="col-md-4">
				{{ Form::label('amenaza', '2. Por amenaza', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::number('amenaza', null, ['class' => $errors->first('amenaza') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('amenaza'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('amenaza') }}
					</div>
				@endif
			</div>
			<div class="col-md-4">
				{{ Form::label('intento', '3. Por intento', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::number('intento', null, ['class' => $errors->first('intento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('intento'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('intento') }}
					</div>
				@endif
			</div>
		</div>
	</div>
	<div class="col-md">
		{{ Form::label(null, '12.18 ¿Hace cuánto fué el último intento de quitarse la vida?', ['class' => 'control-label col-form-label-sm']) }}
		<div class="row">
			<div class="col-md-4">
				{{ Form::label('dia_ultimo', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('dia_ultimo', null, ['class' => $errors->first('dia_ultimo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('dia_ultimo'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('dia_ultimo') }}
					</div>
				@endif
			</div>
			<div class="col-md-4">
				{{ Form::label('mes_ultimo', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('mes_ultimo', null, ['class' => $errors->first('mes_ultimo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('mes_ultimo'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('mes_ultimo') }}
					</div>
				@endif
			</div>
			<div class="col-md-4">
				{{ Form::label('ano_ultimo', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
				{{ Form::number('ano_ultimo', null, ['class' => $errors->first('ano_ultimo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
				@if($errors->has('ano_ultimo'))
					<div class="invalid-feedback d-block">
						{{ $errors->first('ano_ultimo') }}
					</div>
				@endif
			</div>
		</div>
	</div>
	<div class="col-md">
		{{ Form::label('prm_riesgo_id', '12.19 Nivel de riesgo', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_riesgo_id', $todoxxxx['riesgosx'], null, ['class' => $errors->first('prm_riesgo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control- select2']) }}
		@if($errors->has('prm_riesgo_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('prm_riesgo_id') }}
			</div>
		@endif
	</div>

</div>
<div class="row">
	<div class="col-md">
		{{ Form::label('motivos', '12.20 Indique los motivos o situaciones por el cual se ha tenido pensamientos, amenazas e intentos de quitarse la vida', ['class' => 'control-label col-form-label-sm']) }}
		<div id="motivos_div">
			{{ Form::select('motivos[]', $todoxxxx['aconteci'], null, ['class' => $errors->first('motivos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...', 'id' => 'motivos', 'multiple']) }}
		</div>
		@if($errors->has('motivos'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('motivos') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_motivo', '12.21 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_motivo', null, ['class' => $errors->first('descripcion_motivo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion5">0/4000</p>
		@if($errors->has('descripcion_motivo'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_motivo') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		<div class="row">
			<div class="col-md">
				{{ Form::label('prm_lesiva_id', '12.22 ¿Ha presentado conductas auto lesivas?', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::select('prm_lesiva_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_lesiva_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc2(this.value)']) }}
				@if($errors->has('prm_lesiva_id'))
				<div class="invalid-feedback d-block">
					{{ $errors->first('prm_lesiva_id') }}
				</div>
				@endif
			</div>
			<div class="col-md">
				{{ Form::label('lesivas', '12.23 ¿Qué tipo de conductas auto lesivas?', ['class' => 'control-label col-form-label-sm']) }}
				<div id="lesivas_div">
					{{ Form::select('lesivas[]', $todoxxxx['conducta'], null, ['class' => $errors->first('lesivas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'data-placeholder' => 'Seleccione...','id' => 'lesivas', 'multiple']) }}
				</div>
				@if($errors->has('lesivas'))
				<div class="invalid-feedback d-block">
					{{ $errors->first('lesivas') }}
				</div>
				@endif
			</div>
		</div>
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_lesiva', '12.24 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_lesiva', null, ['class' => $errors->first('descripcion_lesiva') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion6">0/4000</p>
		@if($errors->has('descripcion_lesiva'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_lesiva') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		<div class="row">
			<div class="col-md">
				{{ Form::label('prm_sueno_id', '12.25 ¿En este momento presenta dificultades para conciliar el sueño?', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::select('prm_sueno_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_sueno_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc6(this.value)']) }}
				@if($errors->has('prm_sueno_id'))
				<div class="invalid-feedback d-block">
					{{ $errors->first('prm_sueno_id') }}
				</div>
				@endif
			</div>
			<div class="col-md">
				{{ Form::label(null, '12.26 ¿Desde hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
				<div class="row">
					<div class="col-md-4">
						{{ Form::label('dia_sueno', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
						{{ Form::number('dia_sueno', null, ['class' => $errors->first('dia_sueno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
						@if($errors->has('dia_sueno'))
						<div class="invalid-feedback d-block">
							{{ $errors->first('dia_sueno') }}
						</div>
						@endif
					</div>
					<div class="col-md-4">
						{{ Form::label('mes_sueno', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
						{{ Form::number('mes_sueno', null, ['class' => $errors->first('mes_sueno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
						@if($errors->has('mes_sueno'))
						<div class="invalid-feedback d-block">
							{{ $errors->first('mes_sueno') }}
						</div>
						@endif
					</div>
					<div class="col-md-4">
						{{ Form::label('ano_sueno', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
						{{ Form::number('ano_sueno', null, ['class' => $errors->first('ano_sueno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
						@if($errors->has('ano_sueno'))
						<div class="invalid-feedback d-block">
							{{ $errors->first('ano_sueno') }}
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_sueno', '12.27 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_sueno', null, ['class' => $errors->first('descripcion_sueno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion7">0/4000</p>
		@if($errors->has('descripcion_sueno'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_sueno') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md">
		<div class="row">
			<div class="col-md">
				{{ Form::label('prm_alimenticio_id', '12.28 ¿Ha tenido variación en sus hábitos alimenticios?', ['class' => 'control-label col-form-label-sm']) }}
				{{ Form::select('prm_alimenticio_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_alimenticio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc7(this.value)']) }}
				@if($errors->has('prm_alimenticio_id'))
				<div class="invalid-feedback d-block">
					{{ $errors->first('prm_alimenticio_id') }}
				</div>
				@endif
			</div>
			<div class="col-md">
				{{ Form::label(null, '12.29 ¿Desde hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
				<div class="row">
					<div class="col-md-4">
						{{ Form::label('dia_alimenticio', 'Día(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
						{{ Form::number('dia_alimenticio', null, ['class' => $errors->first('dia_alimenticio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
						@if($errors->has('dia_alimenticio'))
						<div class="invalid-feedback d-block">
							{{ $errors->first('dia_alimenticio') }}
						</div>
						@endif
					</div>
					<div class="col-md-4">
						{{ Form::label('mes_alimenticio', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
						{{ Form::number('mes_alimenticio', null, ['class' => $errors->first('mes_alimenticio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
						@if($errors->has('mes_alimenticio'))
							<div class="invalid-feedback d-block">
								{{ $errors->first('mes_alimenticio') }}
							</div>
						@endif
					</div>
					<div class="col-md-4">
						{{ Form::label('ano_alimenticio', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
						{{ Form::number('ano_alimenticio', null, ['class' => $errors->first('ano_alimenticio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
						@if($errors->has('ano_alimenticio'))
							<div class="invalid-feedback d-block">
								{{ $errors->first('ano_alimenticio') }}
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md">
		{{ Form::label('descripcion_alimenticio', '12.30 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion_alimenticio', null, ['class' => $errors->first('descripcion_alimenticio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion8">0/4000</p>
		@if($errors->has('descripcion_alimenticio'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('descripcion_alimenticio') }}
			</div>
		@endif
	</div>
</div>
<div class="row">


</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
