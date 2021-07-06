
<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_linea_base', 'Nombre Linea Base', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_linea_base', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6" style="height: ">
    {{ Form::label('area_id', 'Área', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["areasxxx"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('in_indicador_id', 'Indicador', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('in_indicador_id', $todoxxxx["indicado"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_prm_categoria_id', 'Categoria', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_categoria_id', $todoxxxx["categori"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
