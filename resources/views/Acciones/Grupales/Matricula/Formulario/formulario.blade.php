
<div class="row">
    <div class="col-md-4">
        {{ Form::label('prm_upi_id', 'UPI/DEPENDENCIA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_upi_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_upi_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_serv_id', 'Servicio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_serv_id', $todoxxxx['sis_servicios'], null, ['class' => $errors->first('prm_serv_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la serivcio', 'id'=>'prm_serv_id']) }}
        @if($errors->has('prm_serv_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_serv_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_estra', 'Estrategia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_estra', $todoxxxx['estrateg'], null, ['class' => $errors->first('prm_estra') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la serivcio', 'id'=>'prm_estra']) }}
        @if($errors->has('prm_estra'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_estra') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        {{ Form::label('prm_grado', 'Grado a Matricular', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_grado',$todoxxxx['gradoxxx'], null, ['class' => $errors->first('prm_grado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
        @if($errors->has('prm_grado'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_grado') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('prm_grupo', 'Grupo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_grupo', $todoxxxx['grupoxxx'], null, ['class' => $errors->first('prm_grupo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
        @if($errors->has('prm_grupo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_grupo') }}
            </div>
        @endif
    </div>
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
        {{ Form::label('prm_periodo', 'Periodo Académico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_periodo', $todoxxxx['periodox'], null, ['class' => $errors->first('prm_periodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione la serivcio', 'id'=>'prm_periodo']) }}
        @if($errors->has('prm_periodo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_periodo') }}
            </div>
        @endif
    </div>
</div>


<h6 class="mt-3">BENEFICIARIOS ASOCIADOS</h6>
 @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

<h6 class="mt-3">DATOS FUNCIONARIO Y/O CONTRATISTA</h6>

<div class="row">
	<div class="col-md-12">
		{{ Form::label('user_doc1', 'Persona quien entrega la inscripción de matrículas', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc1', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc1') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm']) }}
		@if($errors->has('user_doc1'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc1') }}
			</div>
		@endif
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		{{ Form::label('user_doc2', 'Persona quien revisa la inscripción a matrícula', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('user_doc2', $todoxxxx['educacio'], null, ['class' => $errors->first('user_doc2') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm']) }}
		@if($errors->has('user_doc2'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('user_doc2') }}
			</div>
		@endif
	</div>
</div>


<div class="row">
	<div class="col-md-12" style="pointer-events:none;">
		{{ Form::label('responsable_id', 'Responsable de UPI', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('responsable_id', $todoxxxx['usuariox'], null, ['class' => $errors->first('responsable_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','id'=>'responsable','placeholder'=>'Seleccione la UPI/Dependencia para cargar el responsable']) }}
		@if($errors->has('responsable_id'))
			<div class="invalid-feedback d-block">
				{{ $errors->first('responsable_id') }}
			</div>
		@endif
	</div>
    
</div>
<br>

@if(isset($todoxxxx["modeloxx"]->id))
<hr>
<div class="row">
  <div class="col-md-12">
  {{ Form::label('observacion', 'Observación', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describir cualquier novedad general en el proceso de matrícula, aclaración o nota importante', 'maxlength' => '500', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorobservacion">0/500</p>
      @if($errors->has('observacion'))
    <div class="invalid-feedback d-block">
          {{ $errors->first('observacion') }}
        </div>
    @endif
  </div>
</div>
@endif



