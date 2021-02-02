
<div class="form-row">
  <div class="form-group col-md-6">
    {{ Form::label('s_servicio', 'Servicio', ['class' => 'control-label']) }}
    {{ Form::text('s_servicio', null, ['class' => $errors->first('s_servicio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])
    }}
    @if($errors->has('s_servicio'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('s_servicio') }}
      </div>
    @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
    {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('sis_esta_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('sis_esta_id') }}
      </div>
    @endif
  </div>
</div>
<div class="form-group col-md-6">
  {{ Form::label('estusuario_id','Justificación Estado') }}
  {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2']) }}
  @if($errors->has('estusuario_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('estusuario_id') }}
  </div>
  @endif
</div>
