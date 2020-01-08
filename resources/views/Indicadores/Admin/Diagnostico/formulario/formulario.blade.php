
<div class="form-group row">
  <div class="form-group col-md-6" >
    {{ Form::label('i_prm_categoria_id', 'Categoría', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_categoria_id', $todoxxxx["categori"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6 ">
    {{ Form::label('nivelxxx', 'Nivel', ['class' => 'control-label col-form-label-sm']) }}
    <div id="nivelxxx" class="form-control form-control-sm" style="height: 38px">
{{$todoxxxx["nivelxxx"] }}
    </div>
  </div>
</div>

