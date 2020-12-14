
<div class="form-group row">
  <div class="form-group col-md-6" style="height: ">
    {{ Form::label('ag_recurso_id', 'Recurso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('ag_recurso_id', $todoxxxx["trecurso"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('i_cantidad', null, ['class' =>'form-control col-form-label-sm','placeholder' => 'Cantidad de recurso', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>
