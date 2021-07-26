
		@if($todoxxxx['edadxxxx']>=17)
		<p style="text-align: justify;"><span lang="ES" style="font-size: 10pt; font-family: 'Times New Roman', serif;">
		Yo, obrando en calidad de representante(s) legal(es) del (la) NNA {!!$todoxxxx['represen']->sis_nnaj->fi_datos_basico->NombreCompleto  ." ".  $todoxxxx['textoxxx']->texto!!}</span></p>
		<p style="text-align: justify;"><span lang="ES" style="font-size: 10pt; font-family: 'Times New Roman', serif;">Una vez leído y comprendido el proceso que se seguirá, se firma el presente consentimiento informado el día {{$todoxxxx['fechfirm'][2]}} de {{$todoxxxx['fechfirm'][1]}} del año {{$todoxxxx['fechfirm'][0]}}, en la ciudad de Bogotá, D.C. </span></p>
		@else
		{!!$todoxxxx['textoxxx']->texto!!}<p style="text-align: justify;"><span lang="ES" style="font-size: 10pt; font-family: 'Times New Roman', serif;">Una vez leído y comprendido el proceso que se seguirá, se firma el presente consentimiento informado el día {{$todoxxxx['fechfirm'][2]}} de {{$todoxxxx['fechfirm'][1]}} del año {{$todoxxxx['fechfirm'][0]}}, en la ciudad de Bogotá, D.C. </span></p>
		@endif																																																								
		<h6 class="mt-3"></h6>
		<hr>




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
        {{ Form::select('user_doc2_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc2_id') ? 'form-control select2 form-control-sm is-invalid' :
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
