
<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_linea_base', 'Nombre Linea Base', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_linea_base', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>
