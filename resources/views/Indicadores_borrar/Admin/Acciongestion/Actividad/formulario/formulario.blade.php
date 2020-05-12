
<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('sis_documento_fuente_id', 'Documento fuente', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_documento_fuente_id', $todoxxxx["docufuen"], null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_actividad_id', 'Actividad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_actividad_id', $todoxxxx["activida"], null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('i_porcentaje', 'Porcentaje', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('i_porcentaje', null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px', 
    'data-toggle'=>"popover", 'data-placement'=>"top",'title'=>"",
    $todoxxxx["readonly"],'data-mask'=>"#0.00"]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_tiempo', 'Tiempo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('i_prm_ttiempo_id', 'Tiempo medido en:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_ttiempo_id', $todoxxxx["ttiempox"], null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
