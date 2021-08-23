<div class="row mt-3">
  <div class="col-md-12">
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h6>LUGAR Y FECHA DE DILIGENCIAMIENTO </h6>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('departamento_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('departamento_id', $todoxxxx['departam'], null, ['class' => $errors->first('departamento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('departamento_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('departamento_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('municipio_id', 'Ciudad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('municipio_id', $todoxxxx['municipi'],null, ['class' => $errors->first('municipio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('municipio_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('municipio_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('fecha_diligenciamiento', 'Fecha de diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha_diligenciamiento', null, ['class' => $errors->first('fecha_diligenciamiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha_diligenciamiento'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha_diligenciamiento') }}
    </div>
    @endif
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <h6>ANTECEDENTES INSTITUCIONALES</h6>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_upi_id', 'UPI/Área/Dependencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_upi_id',$todoxxxx['dependen'], null, ['class' => $errors->first('prm_upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_upi_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_upi_id') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('direccion',  $todoxxxx['depended'], ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('telefono',  $todoxxxx['dependet'], ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('lugar_evasion', ' UPI/Lugar/Espacio de donde se evadió el NNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('lugar_evasion', null, ['class' => $errors->first('lugar_evasion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Dirección', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('lugar_evasion'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('lugar_evasion') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('fecha_evasion', 'Fecha de evasión', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha_evasion', null, ['class' => $errors->first('fecha_evasion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha_evasion'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha_evasion') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('hora_evasion', 'Hora de evasión', ['class' => 'control-label col-form-label-sm']) }}
     {{ Form::time('hora_evasion', null, ['class' => $errors->first('hora_evasion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('hora_evasion'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hora_evasion') }}
          </div>
        @endif
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <b><h6>CARACTERÍSTICAS FÍSICAS</h6></b>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('nnaj_talla', 'Talla (Cms)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('nnaj_talla', null, ['class' => $errors->first('nnaj_talla') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Talla', 'min' => '0', 'max' => '300',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('nnaj_talla'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('nnaj_talla') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('nnaj_peso', 'Peso (Kg)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('nnaj_peso', null, ['class' => $errors->first('nnaj_peso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Peso', 'min' => '0', 'max' => '500',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('nnaj_peso'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('nnaj_peso') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_contextura_id', 'Contextura', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_contextura_id', $todoxxxx['contextu'], null, ['class' => $errors->first('prm_contextura_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_contextura_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_contextura_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_rostro_id', 'Tipo de Rostro', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_rostro_id',$todoxxxx['rostroxx'], null, ['class' => $errors->first('prm_rostro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_rostro_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_rostro_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_piel_id', 'Color de piel', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_piel_id', $todoxxxx['pielxxxx'], null, ['class' => $errors->first('prm_piel_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_piel_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_piel_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_colcabello_id', 'Color de cabello', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_colcabello_id', $todoxxxx['cabellox'], null, ['class' => $errors->first('prm_colcabello_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_colcabello_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_colcabello_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    <div class="row">
      <div class="col-md-6">
        {{ Form::label('prm_tinturado_id', 'Tintura', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tinturado_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_tinturado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc(this.value)']) }}
        @if($errors->has('prm_tinturado_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tinturado_id') }}
          </div>
        @endif
      </div>
      <div class="col-md-6">
        {{ Form::label('tintura', 'Color', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('tintura', null, ['class' => $errors->first('tintura') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Tintura del Cabello', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('tintura'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('tintura') }}
          </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_tipcabello_id', 'Tipo de cabello', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_tipcabello_id', $todoxxxx['cabelloz'], null, ['class' => $errors->first('prm_tipcabello_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc1(this.value)']) }}
    @if($errors->has('prm_tipcabello_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_tipcabello_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_corcabello_id', 'Corte de cabello', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_corcabello_id', $todoxxxx['cabelloy'], null, ['class' => $errors->first('prm_corcabello_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_corcabello_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_corcabello_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_ojos_id', 'Color de ojos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_ojos_id', $todoxxxx['ojosxxxx'], null, ['class' => $errors->first('prm_ojos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_ojos_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_ojos_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_nariz_id', 'Nariz', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_nariz_id', $todoxxxx['narizxxx'], null, ['class' => $errors->first('prm_nariz_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_nariz_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_nariz_id') }}
    </div>
    @endif
  </div>
</div>
<div class="row"> 
  <div class="col-md-4">
    {{ Form::label('prm_tienelunar_id', 'Lunar', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_tienelunar_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_tienelunar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc2(this.value)']) }}
    @if($errors->has('prm_tienelunar_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_tienelunar_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('cuantos', '¿Cuántos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('cuantos', null, ['class' => $errors->first('cuantos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => '¿Cuántos?', 'min' => '0', 'max' => '100',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('cuantos'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('cuantos') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_tamlunar_id', '¿Tamaño del lunar?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_tamlunar_id', $todoxxxx['tamanoxx'], null, ['class' => $errors->first('prm_tamlunar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('prm_tamlunar_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_tamlunar_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('senias', 'Señas particulares:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('senias', null, ['class' => $errors->first('senias') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Cicatrices, manchas, características físicas evidentes (amputación de una parte del cuerpo, uso de tatuajes, etc.)', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorsenias">0/4000</p>
    @if($errors->has('senias'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('senias') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('circunstancias', 'Circunstancias en las que se presenta la evasión (Relato detallado):', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('circunstancias', null, ['class' => $errors->first('circunstancias') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Lugar, actividad que estaba realizando, personas que estaban en la actividad, si estaba acompañado(a).', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorcircunstancias">0/4000</p>
    @if($errors->has('circunstancias'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('circunstancias') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-12">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
</div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('observaciones_fam', 'Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observaciones_fam', null, ['class' => $errors->first('observaciones_fam') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre de persona y parentesco a quién se informó, representante legal, Defensor de Familia, datos del agente que recibió la llamada', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorobservaciones">0/4000</p>
    @if($errors->has('observaciones_fam'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('observaciones_fam') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_reporta_id', 'Se realiza llamada a línea de atención', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
      <div class="col-md-6">
        {{ Form::select('prm_reporta_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_reporta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc3(this.value)']) }}
        @if($errors->has('prm_reporta_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_reporta_id') }}
          </div>
        @endif
      </div>
      <div class="col-md-6">
        {{ Form::select('prm_llamada_id', $todoxxxx['atencion'], null, ['class' => $errors->first('prm_llamada_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'prm_llamada_id']) }}
        @if($errors->has('prm_llamada_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_llamada_id') }}
          </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-md-4">
    {{ Form::label('radicado', 'Nº de Radicado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('radicado', null, ['class' => $errors->first('radicado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Radicado', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('radicado'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('radicado') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('recibe_denuncia', 'Nombre de quien recibe la denuncia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('recibe_denuncia', null, ['class' => $errors->first('recibe_denuncia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre de quien recibe la denuncia', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('recibe_denuncia'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('recibe_denuncia') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Denunciante</h6>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md">
    <span><strong>Firma obligatoria para radicar la denuncia</strong></span><br>
    {{ Form::label('user_doc1_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
    <span>PERSONA QUE EVIDENCIO LA EVASIÓN (Tutor de vivienda, convivencia, Facilitador, Docente o tallerista, enfermero(a) etc.)</span>
    {{ Form::select('user_doc1_id',$todoxxxx['usuarioz'], null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm select2', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc1_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc1_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    <span><strong>Firma secundaria, obligatoria para el cargue en SIMI</strong></span><br>
    {{ Form::label('user_doc2_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
    <span>Profesional del equipo psicosocial</span>
    {{ Form::select('user_doc2_id', $todoxxxx['usuarios'], null, ['class' => $errors->first('user_doc2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc2_id') }}
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
<div class="row mt-3">
  <div class="col-md-12">
    <h6>INFORMACIÓN DE QUIÉN RECIBE LA DENUNCIA</h6>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('institucion', 'Institución que recibe la denuncia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('institucion', null, ['class' => $errors->first('institución') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Institución que recibe la denuncia', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('institución'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('institución') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('nombre_recibe', 'Nombres y apellidos de quien recibe la denuncia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombre_recibe', null, ['class' => $errors->first('nombre_recibe') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombres y apellidos de quien recibe la denuncia', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nombre_recibe'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('nombre_recibe') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('cargo_recibe', 'Cargo de quien recibe la denuncia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('cargo_recibe', null, ['class' => $errors->first('cargo_recibe') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Cargo de quien recibe la denuncia', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('cargo_recibe'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('cargo_recibe') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('placa_recibe', 'Placa de quien recibe la denuncia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('placa_recibe', null, ['class' => $errors->first('placa_recibe') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Placa de quien recibe la denuncia', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('placa_recibe'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('placa_recibe') }}
      </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('fecha_denuncia', 'Fecha de la denuncia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha_denuncia', null, ['class' => $errors->first('fecha_denuncia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha_denuncia'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha_denuncia') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('hora_denuncia', 'Hora de la denuncia', ['class' => 'control-label col-form-label-sm']) }}
          {{ Form::time('hora_denuncia', null, ['class' => $errors->first('hora_denuncia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '00:00', 'id' => 'hora_denuncia']) }}
        @if($errors->has('hora_denuncia'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hora_denuncia') }}
          </div>
        @endif
     
  </div>
</div>
<?php

use Illuminate\Support\Facades\Storage;

$tablaxxx = 'principa';
if (isset($todoxxxx['rowscols'])) {
    $tablaxxx = $todoxxxx['rowscols'];
}

?>
<div class="form-row align-items-end form-group col-md-12" style="margin-bottom: 40px">
    {{ Form::label('s_doc_adjunto_ar', 'Cargar Documento', ['class' => 'control-label col-form-label-sm']) }}
    @component('layouts.components.archivos.upload')
    @slot('dataxxxx',['classdiv'=>'custom-file mb-3','campoxxx'=>'s_doc_adjunto_ar','descripc'=>'Seleccione un archivo','idlabelx'=>'s_doc_adjunto_ar_label',
    'claslabe'=>'custom-file-label','acceptxx'=>'image/jpeg,application/pdf','clasinpu'=>'custom-file-input','tipoarch'=>Tr::getTitulo(28,1)])
    @endcomponent

</div>
@if($todoxxxx['archivox']!='')
<div class="row">
    <div class="col-md-12">
    <a href="{{asset($todoxxxx['modeloxx']->s_doc_adjunto)}}" target="_blank" >{{$todoxxxx['archivox']}}</a>
    </div>
</div>
@endif



