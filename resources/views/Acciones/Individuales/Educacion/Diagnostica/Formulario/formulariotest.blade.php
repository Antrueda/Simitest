<div class="row mt-3">
  <div class="col-md-12">
    <h5>INFORMACIÓN BÁSICA DEL NNA</h5>
  </div>
</div>
<hr>
<hr style="border:3px;">
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
<hr>

<hr style="border:3px;">

<div class="row mt-3">
  <div class="col-md-12">
    <h5>-</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-4">

    {{ Form::label('prm_upi_id', 'UPI', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI', 'autofocus']) }}
    @if($errors->has('prm_upi_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_upi_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('fecha', 'Fecha de salida', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('hora_salida', 'Hora de salida', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::time('hora_salida', null, ['class' => $errors->first('hora_salida') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('hora_salida'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hora_salida') }}
          </div>
       @endif
  </div>
</div>
<div class="row">
  <div class="col-md-9">
    {{ Form::label('objetivo', 'Objetivo de la salida:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('objetivo[]', $todoxxxx['objetivo'], null, ['class' => $errors->first('objetivo') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'objetivo', 'multiple']) }}
    @if($errors->has('objetivo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('objetivo') }}
    </div>
    @endif
  </div>
</div>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>INFORMACIÓN BÁSICA DEL REPRESENTANTE LEGAL</h5>
  </div>
</div>
<hr style="border:3px;">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="row">
  <div class="col-md-3">
    {{ Form::label('primer_apellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_apellido', null, ['class' => $errors->first('primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('primer_apellido'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('primer_apellido') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segundo_apellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_apellido', null, ['class' => $errors->first('segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_apellido'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segundo_apellido') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('primer_nombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_nombre', null, ['class' => $errors->first('primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('primer_nombre'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('primer_nombre') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segundo_nombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_nombre', null, ['class' => $errors->first('segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_nombre'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segundo_nombre') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_doc_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc_id', $todoxxxx['tipodocu'], null, ['class' => $errors->first('prm_doc_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_doc_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('documento', 'No. de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('documento', null, ['class' => $errors->first('documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'minlength' => '6', 'maxlength' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('documento'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('documento') }}
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
  <div class="col-md-3">
    {{ Form::label('prm_autorizado_id', '¿Cuenta con autorización del defensor de familia?', ['class' => 'control-label col-form-label-sm']) }}
    <span>(Aplica para NNA con PARD o SRPA)</span>
    {{ Form::select('prm_autorizado_id', $todoxxxx['condicix'], null, ['class' => $errors->first('prm_autorizado_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_autorizado_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_autorizado_id') }}
      </div>
    @endif
  </div>
</div>
<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>PERSONA AUTORIZADA POR EL REPRESENTANTE LEGAL QUE RECOJA AL NNA</h5>
    <span>(Solo aplica para casos que no salga con el representante legal)</span>
  </div>
</div>
<hr style="border:3px;">
<div class="row">
  <div class="col-md-3">
    {{ Form::label('ape1_autorizado', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('ape1_autorizado', null, ['class' => $errors->first('ape1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('ape1_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('ape1_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('ape2_autorizado', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('ape2_autorizado', null, ['class' => $errors->first('ape2_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('ape2_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('ape2_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('nom1_autorizado', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nom1_autorizado', null, ['class' => $errors->first('nom1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nom1_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nom1_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('nom2_autorizado', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nom2_autorizado', null, ['class' => $errors->first('nom2_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nom2_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nom2_autorizado') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_doc2_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc2_id', $todoxxxx['tipodocu'], null, ['class' => $errors->first('prm_doc2_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_doc2_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_autorizado', 'No. de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('doc_autorizado', null, ['class' => $errors->first('doc_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'minlength' => '6', 'maxlength' => '10',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('doc_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco2_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco2_id', $todoxxxx['parentez'], null, ['class' => $errors->first('prm_parentezco2_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_parentezco2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_parentezco2_id') }}
      </div>
    @endif
  </div>
</div>
<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <span>EN CASO DE QUE SALGA CON UNA PERSONA AUTORIZADA POR EL REPRESENTANTE LEGAL</span>
  </div>
</div>
<hr style="border:3px;">
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_carta_id', 'Carta de autorización firmada', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_carta_id', $todoxxxx['condicix'], null, ['class' => $errors->first('prm_carta_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_carta_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_carta_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_copiaDoc_id', 'Copia de documento del Representante Legal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_copiaDoc_id', $todoxxxx['condicix'], null, ['class' => $errors->first('prm_copiaDoc_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_copiaDoc_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_copiaDoc_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_copiaDoc2_id', 'Fotocopia de documento de la persona autorizada por el representante legal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_copiaDoc2_id', $todoxxxx['condicix'], null, ['class' => $errors->first('prm_copiaDoc2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_copiaDoc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_copiaDoc2_id') }}
      </div>
    @endif
  </div>
</div>
<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>DATOS DE SALIDA DEL NNA</h5>
    <span>Condiciones de salud en las cuales sale el Niño, Niña o Adolescente.</span>
  </div>
</div>
<hr style="border:3px;">
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

  <div class="col-md-12">
    {{ Form::label('descripcion', 'Descripcion de la condición física y comportamentales en que sale el/la NNA:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadordescripcion">0/4000</p>
    @if($errors->has('descripcion'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('descripcion') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('objetos', 'Objetos con los cuales sale del IDIPRON:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('objetos', null, ['class' => $errors->first('objetos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los objetos que lleva el NNA', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadordescripcion1">0/4000</p>
    @if($errors->has('objetos'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('objetos') }}
      </div>
    @endif
  </div>
</div>
<hr>
<div class="row mt-3">
  <div class="col-md-12">
    <h5>INFORMACIÓN DE LA SALIDA</h5>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_upi2_id', 'UPI/AREA/DEPENDENCIA', ['class' => 'control-label col-form-label-sm']) }}
    <br><span>Lugar de donde se realiza la salida</span>
    {{ Form::select('prm_upi2_id', $todoxxxx['dependez'], null, ['class' => $errors->first('prm_upi2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
    @if($errors->has('prm_upi2_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_upi2_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('tiempo', 'Tiempo (Días)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('tiempo', null, ['class' => $errors->first('tiempo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días', 'min' => '0', 'max' => '365',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('tiempo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('tiempo') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('novedad', 'Novedad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('novedad', null, ['class' => $errors->first('novedad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Novedad', 'maxlength' => '2000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('novedad'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('novedad') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('dir_salida', 'Dirección donde se llevará a cabo la salida', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('dir_salida', null, ['class' => $errors->first('dir_salida') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Dirección', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('dir_salida'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('dir_salida') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
    <div class="col-md-3">
      {{ Form::label('tel_contacto', 'Teléfono de contacto', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('tel_contacto', null, ['class' => $errors->first('tel_contacto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'minlength' => '6', 'maxlength' => '10' ,"onkeypress" => "return soloNumeros(event);"]) }}
      @if($errors->has('tel_contacto'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('tel_contacto') }}
      </div>
      @endif
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('causa', 'En caso de existir una justa causa para que el NNA no regrese a la UPI en la fecha establecida, indique el motivo:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('causa', null, ['class' => $errors->first('causa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa la justa causa', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadordescripcion2">0/4000</p>
    @if($errors->has('causa'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('causa') }}
      </div>
    @endif
  </div>
</div>
<hr>
<div class="row mt-3">
  <div class="col-md-12">
    <h5>INFORMACIÓN DE QUIEN APRUEBA LA SALIDA</h5>
  </div>
</div>
<hr style="border:3px;">
<span>Representante legal o persona que recoge al NNA</span>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('nombres_recoge', 'Nombre y Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombres_recoge', null, ['class' => $errors->first('nombres_recoge') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre y Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nombres_recoge'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nombres_recoge') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_recoge', 'Nº de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('doc_recoge', null, ['class' => $errors->first('doc_recoge') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'minlength' => '6', 'maxlength' => '10',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('doc_recoge'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_recoge') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('responsable', 'Responsable de la UPI', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('responsable', $todoxxxx['respoupi'], null, ['class' => $errors->first('responsable') ? 'form-control  select2 form-control-sm is-invalid' : 'form-control  form-control-sm', 'data-placeholder' => 'Digite el número de documento','id'=>'responsable']) }}
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
