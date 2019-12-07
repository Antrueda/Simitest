
<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('s_contexto', 'Nombre contexto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_contexto', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_descripcion', 'Nombre contexto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textArea('s_descripcion', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del taller', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>
