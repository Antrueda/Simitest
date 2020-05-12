
<div class="form-group row"> 
  <div class="form-group col-md-6">
  {{ Form::label('in_indicador_id', 'INDICADOR:', ['class' => 'control-label col-form-label-sm']) }}
        @if($todoxxxx['accionxx'] == 'Ver')
        {{ Form::select('in_indicador_id', $todoxxxx['indicado'], $todoxxxx['modeloxx']->in_indicador_id, ['class' => 'form-control-plaintext','id'=>'in_indicador_id']) }}
        @else
        {{ Form::select('in_indicador_id', $todoxxxx['indicado'], null, ['class' => $errors->first('in_indicador_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_indicador_id']) }}
        @endif
        @if($errors->has('in_indicador_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_indicador_id') }}
        </div>
        @endif
  </div> 
  <div class="form-group col-md-6">
    {{ Form::label('in_linea_base_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
        @if($todoxxxx['accionxx'] == 'Ver')
        {{ Form::select('in_linea_base_id', $todoxxxx['linebase'], $todoxxxx['modeloxx']->in_linea_base_id, ['class' => 'form-control-plaintext','id'=>'in_linea_base_id']) }}
        @else
        {{ Form::select('in_linea_base_id', $todoxxxx['linebase'], null, ['class' => $errors->first('in_linea_base_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_linea_base_id']) }}
        @endif
        @if($errors->has('in_linea_base_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_linea_base_id') }}
        </div>
        @endif
  </div> 
</div>
