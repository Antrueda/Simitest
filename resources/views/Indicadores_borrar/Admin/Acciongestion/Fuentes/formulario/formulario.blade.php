
<div class="form-group row">
  
  <div class="form-group col-md-12">
    {{ Form::label('sis_fsoporte_id', 'Fuente soporte', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_fsoporte_id', $todoxxxx["fsoporte"], null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div> 

</div>
