
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sustancia_id', 'Sustancia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sustancia_id', $todoxxxx["sustanci"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_sustancia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_sustancia_id') }}
        </div>
        @endif
    </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_edad_uso', 'Edad uso por primera vez', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_edad_uso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Edad uso por primera vez', 'min' => '1', 'max' => '28']) }}
        @if($errors->has('i_edad_uso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_edad_uso') }}
        </div>
        @endif
    </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_consume_id', 'Ha consumido el último mes?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_consume_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('i_prm_consume_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_consume_id') }}
        </div>
        @endif
    </div>
  </div>
  @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
