<div class="form-group row">
  @switch($todoxxxx['iformula'])
  @case(1)
  <div class="form-group col-md-4">
    {{ Form::label('user_id', Tr::getTitulo(13,1).':', ['class' => 'control-label col-form-label-sm']) }}
    @if(ucwords($todoxxxx['accionxx']) == 'Ver')
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



  <div class="form-group col-md-4">
    {{ Form::label('i_prm_responsable_id', Tr::getTitulo(14,1).':', ['class' => 'control-label col-form-label-sm']) }}
    @if(ucwords($todoxxxx['accionxx']) == 'Ver')
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
  <div class="form-group col-md-4">
    {{ Form::label('sis_obse_id', Tr::getTitulo(35,1).':', ['class' => 'control-label col-form-label-sm']) }}
    @if(ucwords($todoxxxx['accionxx']) == 'Ver')
    {{ Form::select('sis_obse_id', $todoxxxx['observac'], $todoxxxx['modeloxx']->sis_obse_id, 
    ['class' => 'form-control-plaintext','id'=>'sis_obse_id']) }}
    @else
    {{ Form::select('sis_obse_id', $todoxxxx['observac'], null, ['class' => $errors->first('sis_obse_id') ? 
    'form-control is-invalid select2' : 'form-control select2','id'=>'sis_obse_id']) }}
    @endif
    @if($errors->has('sis_obse_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_obse_id') }}
    </div>
    @endif
  </div>
  @break
  @case(2)
  <div class="form-group col-md-4">
    {{ Form::label('sis_obse_id', Tr::getTitulo(35,1).':', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_obse_id', $todoxxxx['observac'], null, ['class' => $errors->first('sis_obse_id') ? 
    'form-control is-invalid select2' : 'form-control select2','id'=>'sis_obse_id']) }}
    @if($errors->has('sis_obse_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_obse_id') }}
    </div>
    @endif
  </div>
  @break
  @default

  @endswitch
</div>