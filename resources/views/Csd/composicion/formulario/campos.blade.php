<hr>
<div class="row">
  <div class="col-md-12">
    <h6>Datos Básicos</h6>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('primer_apellido', '7.1 1er. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_apellido', null, ['class' => $errors->first('primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;', 'autofocus']) }}
    @if($errors->has('primer_apellido'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('primer_apellido') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segundo_apellido', '7.2 2do. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_apellido', null, ['class' => $errors->first('segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_apellido'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segundo_apellido') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('primer_nombre', '7.3 1er. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_nombre', null, ['class' => $errors->first('primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('primer_nombre'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('primer_nombre') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segundo_nombre', '7.4 2do. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_nombre', null, ['class' => $errors->first('segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_nombre'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segundo_nombre') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('identitario', '7.5 Nombre Identitario:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('identitario', null, ['class' => $errors->first('identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre Identitario', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('identitario'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('identitario') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_documento_id', '7.6 Tipo de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_documento_id', $documentos, null, ['class' => $errors->first('prm_documento_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_documento_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_documento_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('documento', '7.7 Número del documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('documento', null, ['class' => $errors->first('documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'No. de documento', 'maxlength' => '120']) }}
    @if($errors->has('documento'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('documento') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('nacimiento', '1.7 Fecha de nacimiento:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('nacimiento', null, ['class' => $errors->first('nacimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'calcularEdad(this.value)']) }}
    @if($errors->has('nacimiento'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('nacimiento') }}
      </div>
    @endif
  </div>
  <div class="col-md">
    {{ Form::label('edad', 'Edad(Años)', ['class' => 'control-label col-form-label-sm']) }}
    <div id="edad"></div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_sexo_id', '7.9 ¿Cuál es su sexo de nacimiento?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sexo_id', $sexo, null, ['class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_sexo_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_sexo_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_estadoivil_id', '7.10 ¿Cuál es su estado civil?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_estadoivil_id', $estadoCivil, null, ['class' => $errors->first('prm_estadoivil_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_estadoivil_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_estadoivil_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_genero_id', '7.11 ¿Cuál es su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_genero_id', $genero, null, ['class' => $errors->first('prm_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_genero_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_genero_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_sexual_id', '7.12 Cuál es su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sexual_id', $sexual, null, ['class' => $errors->first('prm_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_sexual_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_sexual_id') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_grupo_etnico_id', '7.13 ¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_grupo_etnico_id', $grupoEtnico, null, ['class' => $errors->first('prm_grupo_etnico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
    @if($errors->has('prm_grupo_etnico_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_grupo_etnico_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_cualGrupo_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_cualGrupo_id', $grupoIndigena, null, ['class' => $errors->first('prm_cualGrupo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_cualGrupo_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_cualGrupo_id') }}
      </div>
    @endif
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <h6>Generación de Ingresos</h6>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('prm_ocupacion_id', '7.14 Posición ocupacional', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_ocupacion_id', $ocupacion, null, ['class' => $errors->first('prm_ocupacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_ocupacion_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_ocupacion_id') }}
    </div>
    @endif
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <h6>Composición Familiar</h6>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_parentezco_id', '7.15 Parentezco con el NNAJ principal de referencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco_id', $familiares, null, ['class' => $errors->first('prm_parentezco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_parentezco_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_parentezco_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_convive_id', '7.16 ¿Convive con el NNAJ?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_convive_id', $sino, null, ['class' => $errors->first('prm_convive_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_convive_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_convive_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_visitado_id', '7.17 NNAJ Visitado(s) (as)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_visitado_id', $sino, null, ['class' => $errors->first('prm_visitado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_visitado_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_visitado_id') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    {{ Form::label('prm_vin_actual_id', '7.18 ¿Vinculado(a) actualmente con el IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_vin_actual_id', $vinculado, null, ['class' => $errors->first('prm_vin_actual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_vin_actual_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_vin_actual_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-6">
    {{ Form::label('prm_vin_pasado_id', '7.19 ¿Estuvo vinculado(a) con el IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_vin_pasado_id', $vinculado, null, ['class' => $errors->first('prm_vin_pasado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_vin_pasado_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_vin_pasado_id') }}
    </div>
    @endif
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <h6>Salud</h6>
  </div>
</div>
<div class="row align-items-end">
  <div class="col-md-4">
    {{ Form::label('prm_regimen_id', '7.20 Régimen en salud', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_regimen_id', $regimen, null, ['class' => $errors->first('prm_regimen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc2(this.value)']) }}
    @if($errors->has('prm_regimen_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_regimen_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_cualeps_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_cualeps_id', $eps0, null, ['class' => $errors->first('prm_cualeps_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_cualeps_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_cualeps_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    <div class="row align-items-end">
      <div class="col-md-6">
        {{ Form::label('sisben', '7.21 Puntaje de SISBEN', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('sisben', null, ['class' => $errors->first('sisben') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Puntaje', 'min' => '0', 'max' => '99']) }}
        @if($errors->has('sisben'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('sisben') }}
        </div>
        @endif
      </div>
      <div class="col-md-6">
        {{ Form::select('prm_sisben_id', $nsnr, null, ['class' => $errors->first('prm_sisben_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_sisben_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('prm_sisben_id') }}
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_discapacidad_id', '7.22 ¿Tiene algún tipo de discapacidad?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_discapacidad_id', $sino, null, ['class' => $errors->first('prm_discapacidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
    @if($errors->has('prm_discapacidad_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_discapacidad_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_cual_id', '7.23 Presenta alguna discapacidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_cual_id', $discapacidad, null, ['class' => $errors->first('prm_cual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_cual_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_cual_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_peso_id', '7.24 ¿Existe(n) algun(os) integrante(s) de la familia que presente(n) problemas de peso?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_peso_id', $sino, null, ['class' => $errors->first('prm_peso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_peso_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_peso_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_peso_dos_id', '7.25 ¿Existe(n) algun(os) integrante(s) de la familia que presente(n) problemas de peso?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_peso_dos_id', $sino, null, ['class' => $errors->first('prm_peso_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_peso_dos_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_peso_dos_id') }}
    </div>
    @endif
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-12">
    <h6>Educación</h6>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_leer_id', '7.26 ¿Sabe leer?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_leer_id', $sino, null, ['class' => $errors->first('prm_leer_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_leer_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_leer_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_escribir_id', '7.27 ¿Sabe escribir?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_escribir_id', $sino, null, ['class' => $errors->first('prm_escribir_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_escribir_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_escribir_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_operaciones_id', '7.28 ¿Sabe operaciones matemáticas básicas?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_operaciones_id', $sino, null, ['class' => $errors->first('prm_operaciones_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_operaciones_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_operaciones_id') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('prm_aprobado_id', '7.29 Último grado, módulo o semestre aprobado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_aprobado_id', $aprobado, null, ['class' => $errors->first('prm_aprobado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_aprobado_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_aprobado_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_educacion_id', '7.30 ¿Cuál es el último nivel Educativo alcanzado?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_educacion_id', $educacion, null, ['class' => $errors->first('prm_educacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_educacion_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_educacion_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_estudia_id', '7.31 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_estudia_id', $sino, null, ['class' => $errors->first('prm_estudia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_estudia_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_estudia_id') }}
    </div>
    @endif
  </div>
</div>

