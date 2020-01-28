<div class="form-group row">
    <div class="form-group col-md-12" style="height: ">
      {{ Form::label('ag_taller_id', 'Taller', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('ag_taller_id', $todoxxxx["tallerxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
  </div>
