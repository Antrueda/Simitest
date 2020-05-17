
<div class="form-group row">
  
<div class="form-group col-md-4"> 
    {{ Form::label('in_accion_gestion_id', 'ACTIVIDAD:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('in_accion_gestion_id', $todoxxxx['activida'], $todoxxxx['modeloxx']->in_accion_gestion_id, ['class' => 'form-control-plaintext','id'=>'in_accion_gestion_id']) }}
    @else
    {{ Form::select('in_accion_gestion_id', $todoxxxx['activida'], null, ['class' => $errors->first('in_accion_gestion_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'in_accion_gestion_id']) }}
    @endif
    @if($errors->has('in_accion_gestion_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('in_accion_gestion_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-4">
    {{ Form::label('sis_fsoporte_id', 'FUENTE SOPORTE:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('sis_fsoporte_id', $todoxxxx['fsoporte'], $todoxxxx['modeloxx']->sis_fsoporte_id, ['class' => 'form-control-plaintext','id'=>'sis_fsoporte_id']) }}
    @else
    {{ Form::select('sis_fsoporte_id', $todoxxxx['fsoporte'], null, ['class' => $errors->first('sis_fsoporte_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'sis_fsoporte_id']) }}
    @endif
    @if($errors->has('sis_fsoporte_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_fsoporte_id') }}
    </div>
    @endif
  </div>

  <div class="form-group col-md-4">
    {{ Form::label('sis_esta_id', 'ESTADO:', ['class' => 'control-label col-form-label-sm']) }}
    @if($todoxxxx['accionxx'] == 'Ver')
    {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], $todoxxxx['modeloxx']->sis_esta_id, ['class' => 'form-control-plaintext','id'=>'sis_esta_id']) }}
    @else
    {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control is-invalid select2' : 'form-control select2','style'=>"width: 100%;",'id'=>'sis_esta_id']) }}
    @endif
    @if($errors->has('sis_esta_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_esta_id') }}
    </div>
    @endif
  </div> 

</div>
