
<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_pregunta', 'Pregunta', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_pregunta', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'pregunta del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>
