<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>1. Datos Básicos</h5>
  </div>
</div>
<hr>
<div class="row">
  
  <div class="col-md-4">
    {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('upi_id', 'UPI/ Área/ Dependencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('upi_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('upi_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('upiorigen_id', 'UPI de Origen', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upiorigen_id', $todoxxxx['depenori'], null, ['class' => $errors->first('upiorigen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('upiorigen_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('upiorigen_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_ha_estado_pard_id', '¿Cuenta con PARD?', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['usuariox']->prm_tipoblaci_id==650)
      {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx['juridica'],null, ['class' => $errors->first('i_prm_ha_estado_pard_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }} 
    @else
    {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx['condicio'], $todoxxxx['juridica']->i_prm_ha_estado_srpa_id, ['class' => $errors->first('i_prm_ha_estado_pard_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc(this.value)']) }}
    @endif
    @if($errors->has('i_prm_ha_estado_pard_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_ha_estado_pard_id') }}
    </div>
    @endif
</div>
  <div class="col-md-3" id='pard_id'>
    {{ Form::label('num_sim', 'Número SIM', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('num_sim',  null, ['class' => $errors->first('num_sim') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('num_sim'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('num_sim') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-3" id='zonal_id'>
    {{ Form::label('centro_id', 'Centro Zonal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('centro_id', $todoxxxx['centrozo'], null, ['class' => $errors->first('centro_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc1(this.value)']) }}
    @if($errors->has('centro_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('centro_id') }}
    </div>
    @endif
</div>
<div class="form-group col-md-3" id='bogota_id'>
  {{ Form::label('censec_id', 'Centro Zonal Secundario', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('censec_id', $todoxxxx['centrose'], null, ['class' => $errors->first('censec_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
  @if($errors->has('censec_id'))
  <div class="invalid-feedback d-block">
    {{ $errors->first('censec_id') }}
  </div>
  @endif
</div>
</div>
<hr>

<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>2. Datos de residencia y de notificación</h5>
    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Dirección:</b>
        <a class="float">{{$todoxxxx['residenc']->getDireccionAttribute()}} </a>
      </li>
      <li class="list-group-item">
        <b>Teléfono:</b>
        <a class="float">{{$todoxxxx['residenc']->getTelefonosAttribute()}} </a>
      </li>
    </ul>
  </div>
</div>
<hr>
<hr style="border:3px;">
<div class="row">
  <input type="checkbox" name='checkbox1' id="checkbox1" checked/>  Editar Residencia 
  {{ Form::hidden('checki', null, ['class' => $errors->first('ape1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'checki', 'style' => 'text-transform:uppercase;']) }} 
  <div id="autoUpdate" class="autoUpdate">
    <div class="card">
      <div class="card-body">
      @include($todoxxxx['rutacarp'].'AtencionCaso.Formulario.residencia')
    </div>
  </div>
</div>
</div>

@if($todoxxxx['usuariox']->nnaj_nacimi->Edad<18)
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>3. Datos de Contacto Representante Legal</h5>
  </div>
</div>

<hr style="border:3px;">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
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
    {{ Form::label('prm_doc_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc_id', $todoxxxx['tipodocu'], null, ['class' => $errors->first('prm_doc_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_doc_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_autorizado', 'No. de doc_autorizado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('doc_autorizado', null, ['class' => $errors->first('doc_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'minlength' => '6', 'maxlength' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('doc_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco_id', $todoxxxx['parentes'], null, ['class' => $errors->first('prm_parentezco_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_parentezco_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_parentezco_id') }}
    </div>
    @endif
  </div>
<div class="col-md-3">
    {{ Form::label('telefonoaco', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('telefonoaco', null, ['class' => $errors->first('telefonoaco') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'minlength' => '6', 'maxlength' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('telefonoaco'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('telefonoaco') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('direccionaco', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('direccionaco', null, ['class' => $errors->first('direccionaco') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Dirección', 'minlength' => '200', 'maxlength' => '500','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
    @if($errors->has('direccionaco'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('direccionaco') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('sis_municipio_id', 'Municipio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_municipio_id', $todoxxxx['municipi'], null, ['class' => $errors->first('sis_municipio_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2','placeholder'=>'Seleccione']) }}
    @if($errors->has('sis_municipio_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('sis_municipio_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('localidad_id', 'Localidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('localidad_id',$todoxxxx["localida"], null, ['class' => $errors->first('localidad_id') ? 'form-control upzxxx form-control-sm is-invalid' : 'form-control upzxxx form-control-sm select2']) }}
    @if($errors->has('localidad_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('localidad_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('upz_id', 'UPZ', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upz_id', $todoxxxx["upzxxxxx"], null, ['class' => $errors->first('upz_id') ? 'form-control barrio form-control-sm is-invalid' : 'form-control barrio form-control-sm select2']) }}
    @if($errors->has('upz_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('upz_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('sis_upzbarrio_id', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
   {{ Form::select('sis_upzbarrio_id', $todoxxxx["barrioxx"] , null, ['class' => $errors->first('sis_upzbarrio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
    @if($errors->has('sis_upzbarrio_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('sis_upzbarrio_id') }}
      </div>
    @endif
  </div>

</div>
@endif
<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>4. Información Del Caso</h5>
  </div>
</div>

<hr style="border:3px;">
<div class="row">
  <div class="col-md-3">
    {{ Form::label('tipoc_id', 'Tipo de Caso Jurídico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('tipoc_id', $todoxxxx['tipocaso'], null, ['class' => $errors->first('tipoc_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2form-control-sm']) }}
    @if($errors->has('tipoc_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('tipoc_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('temac_id', 'Tema de Caso Jurídico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('temac_id', $todoxxxx['temacaso'], null, ['class' => $errors->first('temac_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
    @if($errors->has('temac_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('temac_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_solicita_id', 'Persona que solicita la asesoría', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_solicita_id', $todoxxxx['solicita'], null, ['class' => $errors->first('prm_solicita_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc2(this.value)','id'=>'prm_solicita_id']) }}
    @if($errors->has('prm_solicita_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_solicita_id') }}
    </div>
    @endif
  </div>
  <div id="paren_div" class="col-md-3">
    {{ Form::label('prm_parensoli_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parensoli_id', $todoxxxx['parentez'], null, ['class' => $errors->first('prm_parensoli_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','id'=>'prm_parensoli_id']) }}
    @if($errors->has('prm_parensoli_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_parensoli_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_rama_id', '¿El caso registra en rama Judicial?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_rama_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_rama_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc3(this.value)']) }}
    @if($errors->has('prm_rama_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_rama_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('num_proceso', 'Número Proceso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('num_proceso', null, ['class' => $errors->first('num_proceso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',  'minlength' => '200', 'maxlength' => '500','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
    @if($errors->has('num_proceso'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('num_proceso') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_juzgado', 'Juzgado que atiende el proceso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_juzgado', $todoxxxx['juzgadox'], null, ['class' => $errors->first('prm_juzgado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','id'=>'prm_juzgado']) }}
    @if($errors->has('prm_juzgado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_juzgado') }}
    </div>
    @endif
  </div>
    <div class="col-md-12">
    {{ Form::label('apoderado', 'Apoderado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('apoderado', null, ['class' => $errors->first('apoderado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'apoderado', 
    'cols'=>'30','rows'=>'2', 'maxlength' => '500', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <span id="apoder"></span>
    @if($errors->has('apoderado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('apoderado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('telfapo', 'Número Telefónico 1', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('telfapo', null, ['class' => $errors->first('telfapo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'minlength' => '10', 'maxlength' => '15',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('telfapo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('telfapo') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('telfapo2', 'Número Telefónico 2', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('telfapo2', null, ['class' => $errors->first('telfapo2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'minlength' => '10', 'maxlength' => '15',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('telfapo2'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('telfapo2') }}
    </div>
    @endif
  </div>

  <div class="col-md-3">
    {{ Form::label('prm_sujeto', 'Tipo de Sujeto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sujeto', $todoxxxx['sujetoxx'], null, ['class' => $errors->first('prm_sujeto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_sujeto'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_sujeto') }}
    </div>
    @endif
  </div>


</div>

<div class="row">
<div class="col-md-12">
  {{ Form::label('correoapo', 'Correo electrónico del apoderado', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('correoapo', null, ['class' => $errors->first('correoapo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'cols'=>'30','rows'=>'3', 'minlength' => '100', 'maxlength' => '500','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
  @if($errors->has('correoapo'))
  <div class="invalid-feedback d-block">
    {{ $errors->first('correoapo') }}
  </div>
  @endif
</div>
</div>


<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>5. Consulta Caso</h5>
  </div>
</div>
<hr style="border:3px;">
<div class="row">
    <div class="col-md-12">
        
        {{ Form::textarea('consultaca', null, ['class' => $errors->first('consultaca') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'consultaca', 'cols'=>'30','rows'=>'3',
          'maxlength' => '4000', 'onkeyup' => 'jFavascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <span id="chars"></span>
        @if($errors->has('consultaca'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('consultaca') }}
        </div>
        @endif
      </div>
</div>
<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>6. Asesoría Del Caso</h5>
  </div>
</div>
<hr style="border:3px;">
<div class="row">
  <div class="col-md-12">
      
      {{ Form::textarea('asesoriaca', null, ['class' => $errors->first('asesoriaca') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'asesoriaca', 'cols'=>'30','rows'=>'3',
      'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <span id="asesor"></span>
      @if($errors->has('asesoriaca'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('asesoriaca') }}
      </div>
      @endif
    </div>
    
</div>


<div class="row">
  <div class="col-md-3">
    {{ Form::label('estacaso', 'Estado del caso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('estacaso', $todoxxxx['estadcas'],null, ['class' => $errors->first('estacaso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'estacaso']) }}
    @if($errors->has('estacaso'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('estacaso') }}
    </div>
    @endif
  </div>

</div>
<br>
<hr>


<div class="row">
  <div class="col-md">
    {{ Form::label('user_id', 'Funcionario y/o Contratista quien diligencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_id') }}
      </div>
    @endif
  </div>
</div>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrousuario')
  @include('layouts.registrofecha')
</div>
