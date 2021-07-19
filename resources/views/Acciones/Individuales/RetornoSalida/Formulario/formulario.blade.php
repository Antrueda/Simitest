<div class="row mt-3">
  <div class="col-md-12">
    <h5>INFORMACIÓN BÁSICA DEL NNA</h5>
  </div>
</div>

<hr>
<div class="container-fluid">
  <div class="form-row align-items-end">
      <div class="form-group col-md-3">
        {{ Form::label('primnombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('primnombre',  $todoxxxx['usuariox']->s_primer_nombre, ['class' => $errors->first('primnombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('segunnombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('segunnombre',  $todoxxxx['usuariox']->s_segundo_nombre, ['class' => $errors->first('segunnombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('primapellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('primapellido',  $todoxxxx['usuariox']->s_primer_apellido, ['class' => $errors->first('primapellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('segunapellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('segunapellido',  $todoxxxx['usuariox']->s_segundo_apellido, ['class' => $errors->first('segunapellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>

      <div class="form-group col-md-3">
        {{ Form::label('nombreidentitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombreidentitario',  $todoxxxx['usuariox']->nnaj_sexo->s_nombre_identitario, ['class' => $errors->first('nombreidentitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>

      <div class="form-group col-md-3">
        {{ Form::label('tipodocumento', 'Tipo de Documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('tipodocumento',  $todoxxxx['usuariox']->nnaj_docu->tipoDocumento->nombre, ['class' => $errors->first('tipodocumento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>

      <div class="form-group col-md-3">
        {{ Form::label('nodocumento', 'No. De Documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nodocumento',  $todoxxxx['usuariox']->nnaj_docu->s_documento, ['class' => $errors->first('tipodocumento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
    </div>
</div>
<hr>



<div class="row mt-3">
  <div class="col-md-12">
    <h5>-</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_upi_id', 'UPI:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI', 'autofocus']) }}
    @if($errors->has('prm_upi_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_upi_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('fecha', 'Fecha del retorno', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('hora_retorno', 'Hora del retorno', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::time('hora_retorno', null, ['class' => $errors->first('hora_retorno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('hora_retorno'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hora_retorno') }}
          </div>
        @endif

  </div>
</div>
<hr>
<div class="row mt-3">
  <div class="col-md-12">
    <h5>DATOS DEL REGRESO DEL NNA</h5>
    <span>Condiciones de salud en las cuales regresa el niño, niña o adolescente.</span>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="row mt-2">
        <div class="col-md-6">
          {{ Form::label('prm_condicion_id', 'Condiciones Físicas Óptimas', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="col-md-6">
          {{ Form::select('prm_condicion_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_condicion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_condicion_id']) }}
          @if($errors->has('prm_condicion_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('prm_condicion_id') }}
            </div>
          @endif
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row mt-2">
          <div class="col-md-6">
            {{ Form::label('prm_orientado_id', 'Orientado en sus tres esferas (persona, tiempo, lugar)', ['class' => 'control-label col-form-label-sm']) }}
          </div>
          <div class="col-md-6">
            {{ Form::select('prm_orientado_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_orientado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_orientado_id']) }}
            @if($errors->has('prm_orientado_id'))
              <div class="invalid-feedback d-block">
                {{ $errors->first('prm_orientado_id') }}
              </div>
            @endif
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row mt-2">
            <div class="col-md-6">
              {{ Form::label('prm_enfermerd_id', 'Enfermedad general', ['class' => 'control-label col-form-label-sm']) }}
            </div>
            <div class="col-md-6">
              {{ Form::select('prm_enfermerd_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_enfermerd_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_enfermerd_id']) }}
              @if($errors->has('prm_enfermerd_id'))
                <div class="invalid-feedback d-block">
                  {{ $errors->first('prm_enfermerd_id') }}
                </div>
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row mt-2">
              <div class="col-md-6">
                {{ Form::label('prm_brotes_id', 'Brotes', ['class' => 'control-label col-form-label-sm']) }}
              </div>
              <div class="col-md-6">
                {{ Form::select('prm_brotes_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_brotes_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_brotes_id']) }}
                @if($errors->has('prm_brotes_id'))
                  <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_brotes_id') }}
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row mt-2">
                <div class="col-md-6">
                  {{ Form::label('prm_laceracio_id', 'Laceraciones y hematomas', ['class' => 'control-label col-form-label-sm']) }}
                </div>
                <div class="col-md-6">
                  {{ Form::select('prm_laceracio_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_laceracio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_laceracio_id']) }}
                  @if($errors->has('prm_laceracio_id'))
                    <div class="invalid-feedback d-block">
                      {{ $errors->first('prm_laceracio_id') }}
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
  <div class="col-md-12">
    {{ Form::label('descripcion', 'Descripción de la condición física y comportamentales en que regresa el/la NNA:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadordescripcion">0/4000</p>
    @if($errors->has('descripcion'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('descripcion') }}
      </div>
    @endif
  </div>

<div class="row">
  <div class="col-md-12">
    {{ Form::label('observaciones', 'Observaciones generales', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Objetos personales con los que llega el NNA, novedad del regreso u otro tipo de observación', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorobservaciones">0/4000</p>
    @if($errors->has('observaciones'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('observaciones') }}
      </div>
    @endif
  </div>
</div>
<hr>
<div class="row mt-3">
  <div class="col-md-12">
    <h5>FIRMA</h5>
  </div>
</div>
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
    {{ Form::select('prm_doc_id', $todoxxxx['document'], null, ['class' => $errors->first('prm_doc_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_doc_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_retorna', 'Nº de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('doc_retorna', null, ['class' => $errors->first('doc_retorna') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'min' => '0', 'max' => '100000000000',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('doc_retorna'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_retorna') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco_id', $todoxxxx['parentez'], null, ['class' => $errors->first('prm_parentezco_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
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
    {{ Form::select('responsable', $todoxxxx['respoupi'], null, ['class' => $errors->first('responsable') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('responsable'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('responsable') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('user_doc1_id', 'Funcionario(A)/Contratista quien entrega al NNA', ['class' => 'control-label col-form-label-sm']) }}
    <span> (psicosocial, tutor de vivienda, tutor de convivencia, enfermero y/o facilitador).</span>
    {{ Form::select('user_doc1_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc1_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc1_id') }}
      </div>
    @endif
  </div>
</div>


