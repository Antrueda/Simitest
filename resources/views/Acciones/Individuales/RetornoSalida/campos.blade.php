<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_upi_id', 'UPI:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_upi_id', $upis, null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI', 'autofocus']) }}
    @if($errors->has('prm_upi_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_upi_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('fecha', 'Fecha del retorno', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('hora_retorno', 'Hora del retorno', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
      <div class="col-md-6">
        {{ Form::time('hora_retorno', null, ['class' => $errors->first('hora_retorno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '00:00', 'max' => '12:59']) }}
        @if($errors->has('hora_retorno'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hora_retorno') }}
          </div>
        @endif
      </div>
      <div class="col-md-6">
        {{ Form::select('prm_hor_ret_id', $ampm, null, ['class' => $errors->first('prm_hor_ret_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
        @if($errors->has('prm_hor_ret_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_hor_ret_id') }}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Datos del regreso del NNA</h6>
    <span>Condiciones de salud en las cuales regresa el niño, niña o adolescente.</span>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-6">
    @foreach ($condiciones as $condicion)
      <div class="row mt-2">
        <div class="col-md-6">
          <label for="{{ $condicion }}">{{ $condicion }}</label>
        </div>
        <div class="col-md-6">
          {{ Form::select('', $sino, null, ['class' => $errors->first('') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
          @if($errors->has(''))
            <div class="invalid-feedback d-block">
              {{ $errors->first('') }}
            </div>
          @endif
        </div>
      </div>
    @endforeach
  </div>
  <div class="col-md-6">
    {{ Form::label('descripcion', 'Descripcion de la condición física y comportamentales en que regresa el/la NNA:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('descripcion'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('descripcion') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('observaciones', 'Observaciones generales', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Objetos personales con los que llega el NNA, novedad del regreso u otro tipo de observación', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('observaciones'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('observaciones') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Firma</h6>
  </div>
</div>
<hr>
<span><strong>Representante legal o persona autorizada con quien retorna el NNA</strong></span>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('nombres_retorna', 'Nombre y Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombres_retorna', null, ['class' => $errors->first('nombres_retorna') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre y Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nombres_retorna'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nombres_retorna') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_doc_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc_id', $documento, null, ['class' => $errors->first('prm_doc_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
    @if($errors->has('prm_doc_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_doc_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_retorna', 'Nº de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('doc_retorna', null, ['class' => $errors->first('doc_retorna') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'min' => '0', 'maxlength' => '10']) }}
    @if($errors->has('doc_retorna'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_retorna') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco_id', 'Parentezco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco_id', $parentezco, null, ['class' => $errors->first('prm_parentezco_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm']) }}
    @if($errors->has('prm_parentezco_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_parentezco_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('responsable', 'Responsable de la UPI', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('responsable', $usuarios, null, ['class' => $errors->first('responsable') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('responsable'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('responsable') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('user_doc1_id', 'Persona quien recibe al NNA', ['class' => 'control-label col-form-label-sm']) }}
    <span> (psicosocial, tutor de vivienda, tutor de convivencia, enfermero y/o facilitador).</span>
    {{ Form::select('user_doc1_id', $usuarios, null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc1_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc1_id') }}
      </div>
    @endif
  </div>
</div>


<div class="row mt-3">
  @canany(['airetornosalida-crear', 'airetornosalida-editar'])
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
  @endcanany
  <a class="btn btn-primary ml-2" href="{{ route('ai.ver', $dato->id) }}">Regresar</a>
</div>