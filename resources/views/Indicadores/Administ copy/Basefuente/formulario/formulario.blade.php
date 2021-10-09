<div class="form-group row">
<div class="form-group col-md-6">
    {{ Form::label('in_fuente_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
        @if($todoxxxx['accionxx'] == 'Ver')
        {{ Form::select('in_fuente_id', $todoxxxx['linebase'], $todoxxxx['modeloxx']->in_fuente_id, ['class' => 'form-control-plaintext','id'=>'in_fuente_id']) }}
        @else
        {{ Form::select('in_fuente_id', $todoxxxx['linebase'], null, ['class' => $errors->first('in_fuente_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_fuente_id']) }}
        @endif
        @if($errors->has('in_fuente_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_fuente_id') }}
        </div>
        @endif
  </div>
  <div class="form-group col-md-6">
  {{ Form::label('sis_docfuen_id', 'DOCUMENTO FUENTE:', ['class' => 'control-label col-form-label-sm']) }}
        @if($todoxxxx['accionxx'] == 'Ver')
        {{ Form::select('sis_docfuen_id', $todoxxxx['document'], $todoxxxx['modeloxx']->sis_docfuen_id, ['class' => 'form-control-plaintext','id'=>'sis_docfuen_id']) }}
        @else
        {{ Form::select('sis_docfuen_id', $todoxxxx['document'], null, ['class' => $errors->first('sis_docfuen_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'sis_docfuen_id']) }}
        @endif
        @if($errors->has('sis_docfuen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_docfuen_id') }}
        </div>
        @endif
  </div>

</div>
