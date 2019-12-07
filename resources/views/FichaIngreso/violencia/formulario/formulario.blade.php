<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_presenta_violencia_id', '12.1 ¿Presenta algún tipo de violencia?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_presenta_violencia_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    {{ Form::label('tablaViolencia', 'Indicar el contexto en el cual se manifiesta la violencia', ['class' => 'control-label col-form-label-sm']) }}
    <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('nombre_ambito', 'Ambito', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::label('pregunta121a', 'Física', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::label('pregunta121b', 'Psicológica', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::label('pregunta121c', 'Sexual', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::label('pregunta121d', 'Económica', ['class' => 'control-label col-form-label-sm']) }}
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('amb_familiar', 'Familiar', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_familiar_fisica_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_familiar_fisica_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_familiar_psico_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_familiar_psico_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_familiar_sexual_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_familiar_sexual_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_familiar_econo_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_familiar_econo_id']) }}
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('amb_amistades', 'Amistades / Colegio', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_amistad_fisica_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_amistad_fisica_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_amistad_psico_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_amistad_psico_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_amistad_sexual_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_amistad_sexual_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_amistad_econo_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_amistad_econo_id']) }}
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('amb_pareja', 'Pareja', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_pareja_fisica_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_pareja_fisica_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_pareja_psico_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_pareja_psico_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_pareja_sexual_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_pareja_sexual_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_pareja_econo_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_pareja_econo_id']) }}
        </div>
      </div>
      <div class="form-row align-items-end">
        <div class="form-group col-md-4">
          {{ Form::label('amb_comunidad', 'Comunitario / Parches', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_comunidad_fisica_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_comunidad_fisica_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_comunidad_psico_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_comunidad_psico_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_comunidad_sexual_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_comunidad_sexual_id']) }}
        </div>
        <div class="form-group col-md-2">
          {{ Form::select('i_prm_comunidad_econo_id', $todoxxxx["conditab"], null, ['class' => 'form-control form-control-sm', 'id' => 'i_prm_comunidad_econo_id']) }}
        </div>
      </div>
 
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    {{ Form::label('i_prm_violencia_genero_id', '12.2 ¿El tipo de violencia referenciado corresponde a violencia basada en género/identidad de género u orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_violencia_genero_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_condicion_presenta_id', '12.3 ¿Qué condición especial presenta?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_condicion_presenta_id', $todoxxxx["condespe"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_depto_condicion_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_depto_condicion_id', $todoxxxx["departam"], null, ['class' => 'form-control form-control-sm departam']) }}
  </div>
  <div class="form-group col-md-4">
    
    {{ Form::label('i_prm_municipio_condicion_id', 'Ciudad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_municipio_condicion_id', $todoxxxx["municipi"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tiene_certificado_id', '12.4 ¿Cuenta con certificado?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_tiene_certificado_id', $todoxxxx["condiesp"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_depto_certifica_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_depto_certifica_id', $todoxxxx["deparexp"], null, ['class' => 'form-control form-control-sm departam']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_municipio_certifica_id', 'Ciudad', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_municipio_certifica_id', $todoxxxx["municexp"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>