<div class="form-group row">
  <div class="form-group col-md-6">
    {{ Form::label('in_lineabase_nnaj_id', 'L&Iacute;NEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('in_lineabase_nnaj_id', $todoxxxx['lineabas'], $todoxxxx['modeloxx']->in_lineabase_nnaj_id, ['class' => 'form-control-plaintext','id'=>'in_lineabase_nnaj_id']) }}
    @else
    {{ Form::select('in_lineabase_nnaj_id', $todoxxxx['lineabas'], null, ['class' => $errors->first('in_lineabase_nnaj_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'in_lineabase_nnaj_id']) }}
    @endif
    @if($errors->has('in_lineabase_nnaj_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('in_lineabase_nnaj_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sis_documento_fuente_id', 'Documento fuente:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('sis_documento_fuente_id', $todoxxxx['docufuen'], $todoxxxx['modeloxx']->sis_documento_fuente_id, ['class' => 'form-control-plaintext','id'=>'sis_documento_fuente_id']) }}
    @else
    {{ Form::select('sis_documento_fuente_id', $todoxxxx['docufuen'], null, ['class' => $errors->first('sis_documento_fuente_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'sis_documento_fuente_id']) }}
    @endif
    @if($errors->has('sis_documento_fuente_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_documento_fuente_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sis_actividad_id', 'Actividad:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('sis_actividad_id', $todoxxxx['activida'], $todoxxxx['modeloxx']->sis_actividad_id, ['class' => 'form-control-plaintext','id'=>'sis_actividad_id']) }}
    @else
    {{ Form::select('sis_actividad_id', $todoxxxx['activida'], null, ['class' => $errors->first('sis_actividad_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'sis_actividad_id']) }}
    @endif
    @if($errors->has('sis_actividad_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_actividad_id') }}
    </div>
    @endif
  </div>

  <div class="form-group col-md-6">
    {{ Form::label('i_porcentaje', 'Porcentaje:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::text('i_porcentaje', $todoxxxx['modeloxx']->i_porcentaje, ['class' => 'form-control-plaintext', 'style'=>"height: 28px"]) }}
    @else
    {{ Form::text('i_porcentaje', null, ['class' => $errors->first('i_porcentaje') ? 
          'form-control  is-invalid' : 'form-control', 'placeholder' => 'Porcentaje', 'data-mask'=>"#0.00" 
          ,'data-toggle'=>"popover", 'data-placement'=>"top",'title'=>"",'autofocus','style'=>"height: 28px"]) }}
    @endif
    @if($errors->has('i_porcentaje'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_porcentaje') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('i_tiempo', 'Tiempo:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::text('i_tiempo', $todoxxxx['modeloxx']->i_tiempo, ['class' => 'form-control-plaintext','style'=>"height: 28px"]) }}
    @else
    {{ Form::number('i_tiempo', null, ['class' => $errors->first('i_tiempo') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Tiempo', 'autofocus','style'=>"height: 28px"]) }}
    @endif
    @if($errors->has('i_tiempo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_tiempo') }}
    </div>
    @endif
  </div>

  <div class="form-group col-md-6">
    {{ Form::label('i_prm_ttiempo_id', 'Tipo Tiempo:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('i_prm_ttiempo_id', $todoxxxx['ttiempox'], $todoxxxx['modeloxx']->i_prm_ttiempo_id, ['class' => 'form-control-plaintext','id'=>'i_prm_ttiempo_id']) }}
    @else
    {{ Form::select('i_prm_ttiempo_id', $todoxxxx['ttiempox'], null, ['class' => $errors->first('i_prm_ttiempo_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'i_prm_ttiempo_id']) }}
    @endif
    @if($errors->has('i_prm_ttiempo_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_ttiempo_id') }}
    </div>
    @endif
  </div>
</div>