<div class="form-group row">  
  <div class="form-group col-md-12">
    <h1 style="text-align: center">DOCUMENTO FUENTE: {{ $todoxxxx["grupoxxx"]->in_base_fuente->sis_documento_fuente->nombre }}</h1> 
  </div>
  
  <div class="form-group col-md-6">
  {{ Form::label('in_doc_pregunta_id', 'PREGUNTA:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
      {{ Form::select('in_doc_pregunta_id', $todoxxxx['pregunta'], $todoxxxx['modeloxx']->in_doc_pregunta_id, ['class' => 'form-control-plaintext select2','id'=>'in_doc_pregunta_id']) }}
      @else
      {{ Form::select('in_doc_pregunta_id', $todoxxxx['pregunta'], null, ['class' => $errors->first('in_doc_pregunta_id') ? 'form-control is-invalid test select2' : 'form-control test select2','id'=>'in_doc_pregunta_id',
      ]) }}
      @endif
      @if($errors->has('in_doc_pregunta_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('in_doc_pregunta_id') }}
      </div>
      @endif
  </div>
  <div class="form-group col-md-6">
  {{ Form::label('prm_respuesta_id', 'RESPUESTA:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
      {{ Form::select('prm_respuesta_id', $todoxxxx['respuest'], $todoxxxx['modeloxx']->prm_respuesta_id, ['class' => 'form-control-plaintext select2','id'=>'prm_respuesta_id']) }}
      @else
      {{ Form::select('prm_respuesta_id', $todoxxxx['respuest'], null, ['class' => $errors->first('prm_respuesta_id') ? 'form-control is-invalid test select2' : 'form-control test select2','id'=>'prm_respuesta_id',
      ]) }}
      @endif
      @if($errors->has('prm_respuesta_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('prm_respuesta_id') }}
      </div>
      @endif
  </div>
</div>