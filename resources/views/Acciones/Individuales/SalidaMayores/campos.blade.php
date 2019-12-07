<div class="row">
    <div class="col-md-2">
        {{ Form::label('fecha', 'Fecha', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-5">
        {{ Form::label('prm_upi_id', 'UPI / Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $upis, null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-5">
        {{ Form::label('razones', 'Razones de la salida:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('razones[]', $razones, null, ['class' => $errors->first('razones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'razones', 'multiple']) }}
        @if($errors->has('razones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('razones') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
		{{ Form::label('descripcion', 'Descripción / Razón', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
    </div>
</div>
<h6 class="mt-3">Firma</h6>
<hr>
{{ Form::label(null, 'Funcionario(a)/Contratista', ['class' => 'control-label col-form-label-sm']) }}
<div class="row">
	<div class="col-md">
		{{ Form::label('user_doc1_id', 'Número de Documento - Nombres y apellidos - Cargo', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc1_id', $usuarios, null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
		@if($errors->has('user_doc1_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc1_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row mt-3">
    @canany(['aisalidamayores-crear', 'aisalidamayores-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('ai.salidamayores', $dato->id) }}">Regresar</a>
</div>