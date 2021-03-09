<div class="form-group col-md-6">
  {{ Form::label('entidadAtiende', 'Entidad', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('entidadAtiendeActual_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
</div>
<div class="form-group col-md-6">
  {{ Form::label('tiempoBeneficio', '¿Durante cuánto tiempo?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="input-group">
    {{ Form::number('tiempoBeneficio', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
    {{ Form::select('durTiempoBen_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
  </div>
</div>
<div class="form-group col-auto">
  {{ Form::label('anioPrestServicio', 'Año de prestación del servicio', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('anioPrestServicio_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
</div>