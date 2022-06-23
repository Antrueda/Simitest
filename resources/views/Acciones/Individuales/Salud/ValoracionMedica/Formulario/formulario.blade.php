<hr style="border:3px;">
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
  <div class="col-md-4">
    {{ Form::label('upi_id', 'UPI De atención', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upiorigen_id', 'UPI de origen', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upiorigen_id', $todoxxxx['depenori'],null, ['class' => $errors->first('upiorigen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upiorigen_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upiorigen_id') }}
          </div>
       @endif
  </div>
   <div class="col-md-4">
    {{ Form::label('consul_id', 'Tipo de Consulta', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('consul_id', $todoxxxx['consulta'],null, ['class' => $errors->first('consul_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('consul_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('consul_id') }}
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
<div class="row">
<hr style="border:3px;">
  <div class="col-md-4">
    {{ Form::label('afili_id', 'Estado de Afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('afili_id', $todoxxxx['estafili'],$todoxxxx['usuariox']->sis_nnaj->fi_saluds->prm_regisalu_id, ['class' => $errors->first('afili_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('afili_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('afili_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('entidad_id', 'Entidad/Regimen', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('entidad_id', $todoxxxx['entid_id'],$todoxxxx['usuariox']->sis_nnaj->fi_saluds->sis_entidad_salud_id, ['class' => $errors->first('entidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('entidad_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('entidad_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('poblaci_id', 'Población Especial', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('poblaci_id', $todoxxxx['poblacio'],null, ['class' => $errors->first('poblaci_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('poblaci_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('poblaci_id') }}
          </div>
       @endif
  </div>
</div>


<div class="row">
  <div class="col-md-12">
    {{ Form::label('motivoval', 'Motivo de la Valoración', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('motivoval', null, ['class' => $errors->first('motivoval') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="contadormotivoval">0/4000</p>
        @if($errors->has('motivoval'))
      <div class="invalid-feedback d-block">
            {{ $errors->first('motivoval') }}
          </div>
      @endif
    </div>
</div>

<hr>
<hr style="border:3px;">
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>Diagnosticos</h5>
    <hr>
  </div>
</div>
@if(isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>Remisión Interinstitucionales</h5>
  </div>
</div>
<hr style="border:3px;">
<div class="row">
  <div class="col-md-4">
    {{ Form::label('remico_id', 'Remisión interinstitucional', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('remico_id', $todoxxxx['remiinte'],null, ['class' => $errors->first('remico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc(this.value)','id'=>'remico_id']) }}
        @if($errors->has('remico_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('remico_id') }}
          </div>
       @endif
  </div>  
</div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('remigen_id', 'Remisión Enfermedad General', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('remigen_id', $todoxxxx['tiporemi'],null, ['class' => $errors->first('remigen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('remigen_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('remigen_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('remisal_id', 'Remisión Salud Mental', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('remisal_id', $todoxxxx['tiporemi'],null, ['class' => $errors->first('remisal_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('remisal_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('remisal_id') }}
          </div>
       @endif
  </div>
  <br>
</div>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>Remisión Intrainstitucional</h5>
  </div>
</div>


<div class="row">
  <div class="col-md-4">
    {{ Form::label('remiint_id', 'Remisión Intrainstitucional', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('remiint_id', $todoxxxx['remision'],null, ['class' => $errors->first('remiint_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('remiint_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('remiint_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('remiesp_id', 'Remisión Especial', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('remiesp_id', $todoxxxx['remiespe'],null, ['class' => $errors->first('remiesp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('remiesp_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('remiesp_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('certifi_id', 'Certificado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('certifi_id', $todoxxxx['condicio'],null, ['class' => $errors->first('certifi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc2(this.value)']) }}
        @if($errors->has('certifi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('certifi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('recomenda', 'Recomendación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('recomenda', null, ['class' => $errors->first('recomenda') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="contadorrecomenda">0/4000</p>
        @if($errors->has('recomenda'))
      <div class="invalid-feedback d-block">
            {{ $errors->first('recomenda') }}
          </div>
      @endif
    </div>
</div>






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
