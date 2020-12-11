
<div class="row">
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_upi_id', 'UPI / Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
    
</div>
<br>
    <hr>
<div class="form-row align-items-end">
    <div id="text" class="form-inline">
      <div class="input-group" style="display: inline-block;text-align: justify">
        <span class="input-group-addon" style="width:auto;">Yo, </span>
        <strong>  {{ $todoxxxx['usuariox']->s_primer_nombre }}
        {{ $todoxxxx['usuariox']->s_segundo_nombre }}
         {{ $todoxxxx['usuariox']->s_primer_apellido }}
          {{ $todoxxxx['usuariox']->s_segundo_apellido }}</strong>
        <span class="input-group-addon" style="width:auto;">, identificado con c.c.</span>
        <strong>{{ $todoxxxx['usuariox']->nnaj_docu->s_documento }} </strong>
        <span class="input-group-addon" style="width:auto;">de</span>
        <strong>{{ $todoxxxx['usuariox']->nnaj_docu->sis_municipio->s_municipio }} </strong>
        <span class="input-group-addon">, manifiesto voluntariamente mi deseo de salir de la Unidad en un horario diferente al establecido, por las siguientes razones:</span>
        
        <div class="col-md-4">
            
            {{ Form::select('razones[]', $todoxxxx['condixxx'], null, ['class' => $errors->first('razones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'razones', 'multiple']) }}
            @if($errors->has('razones'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('razones') }}
                </div>
            @endif
        </div>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-10">
		{{ Form::label('descripcion', 'Descripción / Razón', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
    </div>
</div>
<br>

<h6 class="mt-3">Firma</h6>

{{ Form::label(null, 'Funcionario(a)/Contratista', ['class' => 'control-label col-form-label-sm']) }}
<div class="row">
	<div class="col-md-10">
		{{ Form::label('user_doc1_id', 'Número de Documento - Nombres y apellidos - Cargo', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc1_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
		@if($errors->has('user_doc1_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc1_id') }}
			</div>
		@endif
	</div>
</div>

