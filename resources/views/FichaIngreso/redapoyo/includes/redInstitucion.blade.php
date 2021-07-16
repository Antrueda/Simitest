<div class="form-group col-md-6">
  {{ Form::label('entidadAtiende', 'Entidad', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('entidadAtiendeActual_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
</div>
<div class="form-group col-md-6">
  {{ Form::label('tiempoBeneficio', '¿Durante cuánto tissempo?', ['class' => 'control-label col-form-label-sm']) }}
  <div class="input-group">
    {{ Form::number('tiempoBeneficio', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);",'min' => '0']) }}
    {{ Form::select('durTiempoBen_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
  </div>
</div>
<div class="form-group col-auto">
  {{ Form::label('anioPrestServicio', 'Año de prestación del servicio', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('anioPrestServicio_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
</div>
