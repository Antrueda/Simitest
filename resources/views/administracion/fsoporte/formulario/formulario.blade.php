<div class="form-group row">
    <div class="form-group col-md-4" style="height: ">
      {{ Form::label('sis_docufuen_id', 'Documento Fuente', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('sis_docufuen_id', $todoxxxx["docufuen"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_actividad_id', 'Actividad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_actividad_id', $todoxxxx["sis_actividad_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('nombre', 'Nombre Soporte', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
