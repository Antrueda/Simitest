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
  <div class="form-group col-md-3">
    {{ Form::label('i_prm_ha_estado_pard_id', '¿Cuenta con PARD?', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['usuariox']->prm_tipoblaci_id==650||$todoxxxx['usuariox']->prm_tipoblaci_id==651)
    {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx['juridica'],null, ['class' => $errors->first('i_prm_ha_estado_pard_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }} 
  @else
  {{ Form::select('i_prm_ha_estado_pard_id', $todoxxxx['condicio'], $todoxxxx['juridica']->i_prm_ha_estado_pard_id, ['class' => $errors->first('i_prm_ha_estado_pard_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc(this.value)']) }}
  @endif
    @if($errors->has('i_prm_ha_estado_pard_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_ha_estado_pard_id') }}
    </div>
    @endif
</div>
  <div class="col-md-3" id='pard_id'>
    {{ Form::label('num_sim', 'Número SIM', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('num_sim',  null, ['class' => $errors->first('num_sim') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
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






<hr>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>Datos Del Caso Jurídico</h5>
  </div>
</div>

<hr style="border:3px;">
<div class="row">
  <div class="col-md-3">
    {{ Form::label('tipoc_id', 'Tipo de Caso Jurídico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('tipoc_id', $todoxxxx['tipocaso'], $todoxxxx['padrexxx']->tipoc_id, ['class' => $errors->first('tipoc_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    @if($errors->has('tipoc_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('tipoc_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('temac_id', 'Tema de Caso Jurídico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('temac_id', $todoxxxx['temacaso'], $todoxxxx['padrexxx']->temac_id, ['class' => $errors->first('temac_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
    @if($errors->has('temac_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('temac_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segui_id', 'Tipo de Seguimiento Realizado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('segui_id', $todoxxxx['seguimie'], null, ['class' => $errors->first('segui_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('segui_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segui_id') }}
    </div>
    @endif
  </div>


  <div class="col-md-3">
    {{ Form::label('prm_sujeto', 'Tipo de Sujeto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_sujeto', $todoxxxx['sujetoxx'], $todoxxxx['padrexxx']->prm_sujeto, ['class' => $errors->first('prm_sujeto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'readonly']) }}
    @if($errors->has('prm_sujeto'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_sujeto') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('estadocaso', 'Estado del caso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('estadocaso', $todoxxxx['estadcas'], null, ['class' => $errors->first('estadocaso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'estadocaso']) }}
    @if($errors->has('estadocaso'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('estadocaso') }}
    </div>
    @endif
  </div>

</div>

<div class="row">
<div class="col-md-12">
  {{ Form::label('descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'cols'=>'30','rows'=>'3', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
  <span id="chars"></span>
  @if($errors->has('descripcion'))
  <div class="invalid-feedback d-block">
    {{ $errors->first('descripcion') }}
  </div>
  @endif
</div>
</div>



<hr>
<div class="row">


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
