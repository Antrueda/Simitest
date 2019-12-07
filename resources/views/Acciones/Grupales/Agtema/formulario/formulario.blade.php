
<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_tema', 'Nombre Tema', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_tema', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6" style="height: ">
    {{ Form::label('area_id', 'Área', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["areasxxx"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  
</div>
