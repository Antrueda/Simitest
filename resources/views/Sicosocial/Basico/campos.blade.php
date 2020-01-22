<div class="row">
	<div class="col-md-3">
		{{ Form::label('s_primer_apellido', '1.1 1er. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_primer_apellido', null, ['class' => $errors->first('s_primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer apellido', 'maxlength' => '120', 'autofocus', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_primer_apellido'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_primer_apellido') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('s_segundo_apellido', '2do. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_segundo_apellido', null, ['class' => $errors->first('s_segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo apellido', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_segundo_apellido'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_segundo_apellido') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('s_primer_nombre', '1er. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_primer_nombre', null, ['class' => $errors->first('s_primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer nombre', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_primer_nombre'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_primer_nombre') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('s_segundo_nombre', '2do. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_segundo_nombre', null, ['class' => $errors->first('s_segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo nombre', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_segundo_nombre'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_segundo_nombre') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('s_nombre_identitario', '1.2 Nombre Identitario:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre Identitario', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_nombre_identitario'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_nombre_identitario') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('s_apodo', '1.3 Apodo:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_apodo', null, ['class' => $errors->first('s_apodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Apodo', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_apodo'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_apodo') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_documento_id', '1.4 Documento con el cual se identifica', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_documento_id', $documentos, null, ['class' => $errors->first('prm_documento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_documento_id'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('prm_documento_id') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_doc_fisico_id', '1.5 Cuenta con el documento físico?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_doc_fisico_id', $sino, null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_doc_fisico_id'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('prm_doc_fisico_id') }}
	      	</div>
	    @endif
	    {{ Form::label('i_prm_ayuda_id', 'Motivo:', ['class' => 'control-label col-form-label-sm']) }}
	    {{ Form::select('i_prm_ayuda_id', $sindocumento, null, ['class' => $errors->first('i_prm_ayuda_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('i_prm_ayuda_id'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('i_prm_ayuda_id') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('s_documento', '1.6 No. de documento:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('s_documento', null, ['class' => $errors->first('s_documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'No. de documento', 'maxlength' => '120', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('s_documento'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('s_documento') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('d_nacimiento', '1.7 Fecha de nacimiento:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::date('d_nacimiento', null, ['class' => $errors->first('d_nacimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm hasDatepicker', 'min' => $edad, 'max' => $hoy, 'onchange' => 'calcularEdad(this.value)', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('d_nacimiento'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('d_nacimiento') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('edad', 'Edad(años):', ['class' => 'control-label col-form-label-sm']) }}
		<div id="edad"></div>
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_sexo_id', '1.8 Cuál es su sexo de nacimiento?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_sexo_id', $sexo, null, ['class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_sexo_id'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('prm_sexo_id') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_identidad_genero_id', '1.9 Cuál es su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_identidad_genero_id', $genero, null, ['class' => $errors->first('prm_identidad_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_identidad_genero_id'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('prm_identidad_genero_id') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_orientacion_sexual_id', '1.10 Cuál es su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_orientacion_sexual_id', $sexual, null, ['class' => $errors->first('prm_orientacion_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
		@if($errors->has('prm_orientacion_sexual_id'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('prm_orientacion_sexual_id') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row mt-3">
	@if($vsi->sis_esta_id == 1)
		@canany(['vsidatobasico-crear', 'vsidatobasico-editar'])
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcanany
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>