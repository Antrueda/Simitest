<div class="form-group col-md-3">
  {{ Form::label('tipoRedPersona', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::select('tipoRedPersona_id', $todoxxxx["endidadx"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
</div>
<div class="form-group col-md-9">
  {{ Form::label('s_nombre_persona', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('s_nombre_persona', null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
</div>