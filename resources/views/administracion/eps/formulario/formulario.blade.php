<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('s_nombre_entidad', 'Nombre entidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_nombre_entidad', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_tentidad_id', 'Tipo de entidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tentidad_id', $todoxxxx["i_prm_teps_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
