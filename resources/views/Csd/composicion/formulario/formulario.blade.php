@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('s_primer_apellido', '1.1 1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_parentesco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_parentesco_id', $todoxxxx["parentes"], null, ['class' => 'form-control form-control-sm']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('d_nacimiento', '1.4 Fecha de Nacimiento', ['class' => 'control-label']) }}
        {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('aniosxxx', 'Edad (Años)', ['class' => 'control-label']) }}
        <div id="aniosxxx" class="form-control form-control-sm">{{ $todoxxxx['aniosxxx'] }}</div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('prm_documento_id', 'Tipo de Identificación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_documento_id', $todoxxxx["tipodocu"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'Número de Documento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_pai_id', 'País de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_pai_id', $todoxxxx['pais_idx'], null, ['class' => $errors->first('sis_pai_id') ? 'form-control sispaisx form-control-sm is-invalid listarxx' : 'form-control sispaisx form-control-sm listarxx']) }}
        @if($errors->has('sis_pai_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_pai_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_departamento_id', 'Departamento de Expedición', ['class' => 'control-label ']) }}
        {{ Form::select('sis_departamento_id', $todoxxxx['departam'], null, ['class' => $errors->first('sis_departamento_id') ? 'form-control departam form-control-sm is-invalid listarxx' : 'form-control departam form-control-sm listarxx']) }}
        @if($errors->has('sis_departamento_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_departamento_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_municipio_id', 'Ciudad/Municipio de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx['municipi'], null, ['class' => $errors->first('sis_municipio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('sis_municipio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_municipio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_ocupacion_id', 'Ocupación', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_ocupacion_id', $todoxxxx["ocupacio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_telefono', 'Número de Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_convive_nnaj_id', '¿Convive con el NNAJ?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_convive_nnaj_id', $todoxxxx["convivex"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_vinculado_idipron_id', '¿Estuvo vinculado(a) al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_vinculado_idipron_id', $todoxxxx["convivex"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  
  <div class="form-group col-md-4">
    {{ Form::label('prm_sexo_id', '7.9 ¿Cuál es su sexo de nacimiento?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sexo_id', $todoxxxx["sexoxxxx"], null, ['class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_sexo_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_sexo_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_estadoivil_id', '7.10 ¿Cuál es su estado civil?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_estadoivil_id', $todoxxxx["estadciv"], null, ['class' => $errors->first('prm_estadoivil_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_estadoivil_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_estadoivil_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_genero_id', '7.11 ¿Cuál es su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_genero_id', $todoxxxx["generoxx"], null, ['class' => $errors->first('prm_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_genero_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_genero_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_sexual_id', '7.12 Cuál es su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sexual_id',$todoxxxx["orexualx"], null, ['class' => $errors->first('prm_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_sexual_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_sexual_id') }}
    </div>
    @endif
  </div>
 </div>
  <div class="row">
  <div class="form-group col-md-4">
    {{ Form::label('prm_grupo_etnico_id', '7.13 ¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_grupo_etnico_id', $todoxxxx["grupoetn"], null, ['class' => $errors->first('prm_grupo_etnico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
    @if($errors->has('prm_grupo_etnico_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_grupo_etnico_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_cualGrupo_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_cualGrupo_id', $todoxxxx["poblindi"], null, ['class' => $errors->first('prm_cualGrupo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
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
    {{ Form::select('prm_ocupacion_id', $todoxxxx["ocupacio"], null, ['class' => $errors->first('prm_ocupacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
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
    <h6>Salud</h6>
  </div>
</div>
<div class="row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('prm_regimen_id', '7.20 Régimen en salud', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_regimen_id', $todoxxxx["estafili"], null, ['class' => $errors->first('prm_regimen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc2(this.value)']) }}
    @if($errors->has('prm_regimen_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_regimen_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_cualeps_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_cualeps_id', $todoxxxx["entid_id"], null, ['class' => $errors->first('prm_cualeps_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_cualeps_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_cualeps_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
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
        {{ Form::select('prm_sisben_id', $todoxxxx["nsnoresp"], null, ['class' => $errors->first('prm_sisben_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
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
    {{ Form::select('prm_discapacidad_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_discapacidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc(this.value)']) }}
    @if($errors->has('prm_discapacidad_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_discapacidad_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_cual_id', '7.23 Presenta alguna discapacidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_cual_id', $todoxxxx["discapac"], null, ['class' => $errors->first('prm_cual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_cual_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_cual_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_peso_id', '7.24 ¿Existe(n) algun(os) integrante(s) de la familia que presente(n) problemas de peso?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_peso_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_peso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_peso_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_peso_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_peso_dos_id', '7.25 ¿Existe(n) algun(os) integrante(s) de la familia que presente(n) problemas de peso?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_peso_dos_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_peso_dos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
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
  <div class="form-group col-md-4">
    {{ Form::label('prm_leer_id', '7.26 ¿Sabe leer?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_leer_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_leer_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_leer_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_leer_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_escribir_id', '7.27 ¿Sabe escribir?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_escribir_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_escribir_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_escribir_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_escribir_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_operaciones_id', '7.28 ¿Sabe operaciones matemáticas básicas?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_operaciones_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_operaciones_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_operaciones_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_operaciones_id') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="form-group col-md-4">
    {{ Form::label('prm_aprobado_id', '7.29 Último grado, módulo o semestre aprobado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_aprobado_id', $todoxxxx["aprobado"], null, ['class' => $errors->first('prm_aprobado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_aprobado_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_aprobado_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_educacion_id', '7.30 ¿Cuál es el último nivel Educativo alcanzado?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_educacion_id', $todoxxxx["educacio"], null, ['class' => $errors->first('prm_educacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_educacion_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_educacion_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('prm_estudia_id', '7.31 ¿Actualmente estudia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_estudia_id', $todoxxxx["condicix"], null, ['class' => $errors->first('prm_estudia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_estudia_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_estudia_id') }}
    </div>
    @endif
  </div>
</div>
