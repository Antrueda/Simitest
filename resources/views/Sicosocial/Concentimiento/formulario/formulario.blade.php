<h6 class="mt-3">22. FIRMAS</h6>
<hr>
{{ Form::label(null, 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
<div class="row">
	<div class="col-md">
		{{ Form::label('user_doc1_id', '22.1 Número de Documento - Nombres y apellidos - Cargo', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc1_id', $todoxxxx['usuarios'], null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
		@if($errors->has('user_doc1_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc1_id') }}
			</div>
		@endif
	</div>
</div>
{{ Form::label(null, 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
<div class="row">
	<div class="col-md">
		{{ Form::label('user_doc2_id', '22.2 Número de Documento - Nombres y apellidos - Cargo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('user_doc2_id', $todoxxxx['usuarios'], null, ['class' => $errors->first('user_doc2_id') ? 'form-control select2 form-control-sm is-invalid' :
            'form-control select2 form-control-sm']) }}
		@if($errors->has('user_doc2_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc2_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row mt-2">
	<div class="col-md">
		<label class="control-label col-form-label-sm">22.3 FIRMA NIÑO, NIÑA, ADOLESCENTE Y/O JOVEN</label><br>
		<span>ORIGINAL FIRMADO</span>
	</div>
	<div class="col-md">
		<label class="control-label col-form-label-sm">22.4 FIRMA DEL REPRESENTANTE LEGAL O DEFENSOR DE FAMILIA</label><br>
		<span>ORIGINAL FIRMADO</span>
	</div>
</div>



<div class="form-group row">
    @include('layouts.registro')
</div>
