<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('in_base_fuente_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('in_base_fuente_id', $todoxxxx["linebase"], null, ['class' => 'form-control form-control-sm', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-12">
    {{ Form::label('in_ligru_id', 'GRUPO:', ['class' => 'control-label col-form-label-sm']) }}
   
    {{ Form::select('in_ligru_id', $todoxxxx["maximoxx"], null, ['class' => 'form-control form-control-sm', $todoxxxx["readonly"]]) }}
    

  </div>
</div>
