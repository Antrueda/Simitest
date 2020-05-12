
<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_indicador', 'Nombre Indicador', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_indicador', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('area_id', 'Área', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx["areasxxx"], null, ['class' => 'form-control form-control-sm', $todoxxxx["readonly"]]) }}
  </div>
</div>
