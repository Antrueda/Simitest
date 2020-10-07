<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('sis_entidad_id', 'Entidad', ['class' => 'control-label']) }}
    {{ Form::select('sis_entidad_id', $todoxxxx["endidadx"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_servicio', 'Servicios o beneficios recibidos', ['class' => 'control-label']) }}
    {{ Form::text('s_servicio', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase()"]) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_tiempo_id', '¿Durante cuánto tiempo?', ['class' => 'control-label']) }}
    <div class="input-group">
      {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm']) }}
      {{ Form::select('i_prm_tiempo_id', $todoxxxx["tipotiem"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_anio_prestacion_id', 'Año de prestación del servicio', ['class' => 'control-label']) }}
    {{ Form::select('i_prm_anio_prestacion_id', $todoxxxx["anioserv"], null, ['class' => 'form-control form-control-sm']) }}
  </div>
</div>

@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
