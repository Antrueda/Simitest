
<div class="form-group row">
  <div class="form-group col-md-6" style="height: ">
    {{ Form::label('i_prm_trecurso_id', 'Tipo Recurso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_trecurso_id', $todoxxxx["trecurso"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('s_recurso', 'Nombre Recurso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_recurso', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>
  <div class="form-group col-md-6" style="height: ">
    {{ Form::label('i_prm_umedida_id', 'Unidad de medida', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_umedida_id', $todoxxxx["umedidax"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
