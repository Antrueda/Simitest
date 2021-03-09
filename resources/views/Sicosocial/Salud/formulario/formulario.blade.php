<div class="row">
	<div class="col-md-12">
		<h6>11.1. SALUD MENTAL</h6>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_atencion_id', '11.1.1 ¿Ha recibido atención psicológica y/o psiquiatría?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_atencion_id', $todoxxxx['sinoxxxx'], null,
            ['class' => $errors->first('prm_atencion_id') ? 'form-control form-control-sm is-invalid' :
                'form-control form-control-sm', 'onchange' => 'doc(this.value)', 'autofocus']) }}
		@if($errors->has('prm_atencion_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_atencion_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_condicion_id', '11.1.2 ¿Por cuál condición?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_condicion_id', $todoxxxx['motivosx'], null, ['class' => $errors->first('prm_condicion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_condicion_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_condicion_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('prm_medicamento_id', '11.1.3 ¿En algún momento de su vida le han ordenado medicamentos psiquiátricos?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_medicamento_id', $todoxxxx['sinoxxxxx'], null, ['class' => $errors->first('prm_medicamento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
		@if($errors->has('prm_medicamento_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_medicamento_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('medicamento', '11.1.4 ¿Cuál medicamento?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::text('medicamento', null, ['class' => $errors->first('medicamento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Cuál medicamento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('medicamento'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('medicamento') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_prescripcion_id', '11.1.5 ¿Dichos medicamentos han sido tomados bajo prescripción médica?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_prescripcion_id', $todoxxxx['sinoxxxxxx'], null, ['class' => $errors->first('prm_prescripcion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_prescripcion_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_prescripcion_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-9">
		{{ Form::label('descripcion', '11.1.6 Descripción', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		<p id="contadordescripcion">0/4000</p>
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row pt-3">
	<div class="col-md-12">
		<h6>11.2. SALUD SEXUAL Y REPRODUCTIVA</h6>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		{{ Form::label('prm_sexual_id', '11.2.1 ¿Ha iniciado su vida sexual?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_sexual_id', $todoxxxx['sinoxxxxxxx'], null, ['class' => $errors->first('prm_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc3(this.value)']) }}
		@if($errors->has('prm_sexual_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_sexual_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-4">
		{{ Form::label('edad', '11.2.2 ¿A qué edad inició su vida sexual? (años)', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::number('edad', null, ['class' => $errors->first('edad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Edad', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
		@if($errors->has('edad'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('edad') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-4">
		{{ Form::label('prm_activa_id', '11.2.3 ¿Tiene vida sexual activa?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_activa_id', $todoxxxx['sinoxxxxxxxx'], null, ['class' => $errors->first('prm_activa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
		@if($errors->has('prm_activa_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_activa_id') }}
			</div>
		@endif
	</div>
</div>
<div class="row">
	<div class="col-md-2">
		{{ Form::label('prm_embarazo_id', '11.2.4 ¿Ha tenido embarazos?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_embarazo_id', $todoxxxx['sinoxxxxxxxxx'], null, ['class' => $errors->first('prm_embarazo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc4(this.value)']) }}
		@if($errors->has('prm_embarazo_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_embarazo_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-2">
		{{ Form::label('embarazo', '11.2.5 ¿Cuántos?:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::number('embarazo', null, ['class' => $errors->first('embarazo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Cuántos', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
		@if($errors->has('embarazo'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('embarazo') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-2">
		{{ Form::label('prm_hijo_id', '11.2.6 ¿Tiene hijos?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_hijo_id', $todoxxxx['sinoxxxxxxxxxx'], null, ['class' => $errors->first('prm_hijo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc5(this.value)']) }}
		@if($errors->has('prm_hijo_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_hijo_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-2">
		{{ Form::label('hijo', '11.2.7 N° Hijos(as)', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::number('hijo', null, ['class' => $errors->first('hijo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Hijos(as)', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
		@if($errors->has('hijo'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('hijo') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-2">
		{{ Form::label('prm_interrupcion_id', '11.2.8 ¿Ha presentado interrupción del embarazo?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('prm_interrupcion_id', $todoxxxx['sinoxxxxxxxxxxx'], null, ['class' => $errors->first('prm_interrupcion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc6(this.value)']) }}
		@if($errors->has('prm_interrupcion_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_interrupcion_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-2">
		{{ Form::label('interrupcion', '11.2.9 ¿Cuántos?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::number('interrupcion', null, ['class' => $errors->first('interrupcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Cuántos', 'min' => '0', 'max' => '99',"onkeypress" => "return soloNumeros(event);"]) }}
		@if($errors->has('interrupcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('interrupcion') }}
	      	</div>
	    @endif
	</div>
</div>



<div class="form-group row">
    @include('layouts.registro')
</div>
