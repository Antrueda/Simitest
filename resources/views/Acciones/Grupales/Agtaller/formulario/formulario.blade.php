
<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_taller', 'Nombre taller', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_taller', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_descripcion', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'descripcion del taller', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>
