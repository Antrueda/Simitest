
<div class="form-group row">
  <div class="form-group col-md-12">
    {{ Form::label('s_cargo', 'Cargo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_cargo', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Cargo nuevo', 'maxlength' => '120', 'autofocus']) }}
  </div>
</div>
