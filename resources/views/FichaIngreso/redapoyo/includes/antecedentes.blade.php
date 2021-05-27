@component('bootstrap::modal')
@slot('id')
addAntecedente
@endslot
@slot('title')
Agregar Red de Apoyo Antecedente
@endslot
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('sis_entidad_id', 'Entidad', ['class' => 'control-label']) }}
    {{ Form::select('sis_entidad_id', $todoxxxx["endidadx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sis_servicio_id', 'Servicios o beneficios recibidos', ['class' => 'control-label']) }}
    {{ Form::select('sis_servicio_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_tiempo_id', '¿Durante cuánto tiempo?', ['class' => 'control-label']) }}
    <div class="input-group">
      {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);",'min' => '0']) }}
      {{ Form::select('i_prm_tiempo_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_anio_prestacion_id', 'Año de prestación del servicio', ['class' => 'control-label']) }}
    {{ Form::select('i_prm_anio_prestacion_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
  </div>
</div>
@slot('footer')
{{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
@endslot
@endcomponent
