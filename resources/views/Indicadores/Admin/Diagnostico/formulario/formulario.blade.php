
<div class="form-group row">
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('area_id', 'Categoría', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["categori"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>

