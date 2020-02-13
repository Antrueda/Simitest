<div class="form-group row">  
  <div class="form-group col-md-6" >
    {{ Form::label('user_id', Tr::getTitulo(14,1).':', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::select('user_id', $todoxxxx['responsa'], $todoxxxx['modeloxx']->user_id, ['class' => 'form-control-plaintext','id'=>'user_id']) }}
      @else
          {{ Form::select('user_id', $todoxxxx['responsa'], null, ['class' => $errors->first('user_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'user_id']) }}
      @endif
      @if($errors->has('user_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('user_id') }}
        </div>
      @endif
  </div>



  <div class="form-group col-md-6" >
    {{ Form::label('i_prm_responsable_id', Tr::getTitulo(14,1).':', ['class' => 'control-label col-form-label-sm']) }}
      @if($todoxxxx['accionxx'] == 'Ver')
          {{ Form::select('i_prm_responsable_id', $todoxxxx['condicio'], $todoxxxx['modeloxx']->i_prm_responsable_id, ['class' => 'form-control-plaintext','id'=>'i_prm_responsable_id']) }}
      @else
          {{ Form::select('i_prm_responsable_id', $todoxxxx['condicio'], null, ['class' => $errors->first('i_prm_responsable_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'i_prm_responsable_id']) }}
      @endif
      @if($errors->has('i_prm_responsable_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('i_prm_responsable_id') }}
        </div>
      @endif
  </div>
  
</div>
