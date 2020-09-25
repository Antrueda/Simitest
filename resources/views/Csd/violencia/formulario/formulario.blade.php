@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
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