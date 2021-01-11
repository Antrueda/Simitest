<div class="form-group row">

  <div class="form-group col-md-6">
    {{ Form::label('user_id', Tr::getTitulo(13,1).':', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_id', $todoxxxx['responsa'], null, ['class' => $errors->first('user_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'user_id']) }}
    @if($errors->has('user_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('user_id') }}
    </div>
    @endif
  </div>



  <div class="form-group col-md-6">
    {{ Form::label('i_prm_responsable_id', Tr::getTitulo(14,1).':', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_responsable_id', $todoxxxx['condicio'], null, ['class' => $errors->first('i_prm_responsable_id') ? 'form-control is-invalid ' : 'form-control ','id'=>'i_prm_responsable_id']) }}
    @if($errors->has('i_prm_responsable_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('i_prm_responsable_id') }}
    </div>
    @endif
  </div>
</div>
