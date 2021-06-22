@php
if (array_key_exists('modeloxx', $todoxxxx)) {
    $fecha = $todoxxxx['modeloxx']->fecha; 
} else {
    $fecha = null; 
}
@endphp 
<div class="row">
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha',  $fecha, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_upi_id', 'UPI/DEPENDENCIA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
</div>

<h6 class="mt-3">BENEFICIARIOS ASOCIADOS</h6>
 @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

<h6 class="mt-3">DATOS FUNCIONARIO Y/O CONTRATISTA</h6>

<div class="row">
	<div class="col-md-12">
		{{ Form::label('user_doc1_id', 'Responsable registro en SIMI', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc1_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc1_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('user_doc1_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc1_id') }}
			</div>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12" style="pointer-events:none;">
		{{ Form::label('user_doc2_id', 'Responsable de UPI', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc2_id', $todoxxxx['usuariox'], null, ['class' => $errors->first('user_doc2_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id'=>'responsable','placeholder'=>'Seleccione la UPI/Dependencia para cargar el responsable']) }}
		@if($errors->has('user_doc2_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc2_id') }}
			</div>
		@endif
	</div>
    
</div>
<br>





