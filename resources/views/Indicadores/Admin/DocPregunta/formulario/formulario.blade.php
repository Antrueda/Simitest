<div class="form-group row">  
  <div class="form-group col-md-12">
    <h1 style="text-align: center">{{ $todoxxxx["grupoxxx"]->in_base_fuente->sis_docufuen->nombre }}</h1> 
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('in_ligru_id', 'GRUPO:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('in_ligru_id', $todoxxxx["grupoidx"], null, ['class' => 'form-control form-control-sm select2',
     $todoxxxx["readonly"],'id'=>'in_ligru_id']) }}
  </div>
  <div class="form-group col-md-6">
  {{ Form::label('sis_tcampo_id', 'PREGUNTA:', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
      {{ Form::select('sis_tcampo_id', $todoxxxx['pregunta'], $todoxxxx['modeloxx']->sis_tcampo_id, ['class' => 'form-control-plaintext select2','id'=>'sis_tcampo_id']) }}
      @else
      {{ Form::select('sis_tcampo_id', $todoxxxx['pregunta'], null, ['class' => $errors->first('sis_tcampo_id') ? 'form-control is-invalid test select2' : 'form-control test select2','id'=>'sis_tcampo_id',
      ]) }}
      @endif
      @if($errors->has('sis_tcampo_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('sis_tcampo_id') }}
      </div>
      @endif
  </div>
</div>