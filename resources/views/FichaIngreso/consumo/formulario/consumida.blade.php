
<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sustancia_id', 'Sustancia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sustancia_id', $todoxxxx["sustanci"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_edad_uso', 'Edad uso por primera vez', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_edad_uso', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Edad uso por primera vez', 'min' => '1', 'max' => '28']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_consume_id', 'Ha consumido el último mes?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_consume_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
  </div>
  @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')