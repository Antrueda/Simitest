
<div class="form-group row">
 <div class="form-group col-md-6" style="height: ">
    {{ Form::label('i_prm_avance_id', 'Avance', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_avance_id', $todoxxxx["avancexx"],null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_nivel_id', 'Nivel', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_nivel_id', $todoxxxx["nivelxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_categoria_id', 'Categoría', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_categoria_id', $todoxxxx["categori"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_cactual_id', 'Categoría Actual', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_cactual_id', $todoxxxx["cateactu"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_valoracion', 'Valoracion', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textArea('s_valoracion', null, ['class' => 'form-control form-control-sm', $todoxxxx["readonly"]]) }}
  </div>
</div>
