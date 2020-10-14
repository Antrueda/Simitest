<div class="row">
  <div class="col-md">
      {{ Form::label('prm_convive_id', 'Convivieron', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_convive_id', $todoxxxx["sinoxxxx"], null, ['class' => $errors->first('prm_convive_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_convive_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_convive_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('dia', 'Tiempo de convivencia', ['class' => 'control-label col-form-label-sm']) }}
      <div class="row">
          <div class="col-md-4">
              {{ Form::number('dia', null, ['class' => $errors->first('dia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Día(s)', 'min' => '0', 'max' => '99']) }}
              @if($errors->has('dia'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('dia') }}
                  </div>
              @endif
          </div>
          <div class="col-md-4">
              {{ Form::label('mes', 'Mes(es)', ['class' => 'control-label col-form-label-sm d-none']) }}
              {{ Form::number('mes', null, ['class' => $errors->first('mes') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Mes(es)', 'min' => '0', 'max' => '99']) }}
              @if($errors->has('mes'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('mes') }}
                  </div>
              @endif
          </div>
          <div class="col-md-4">
              {{ Form::label('ano', 'Año(s)', ['class' => 'control-label col-form-label-sm d-none']) }}
              {{ Form::number('ano', null, ['class' => $errors->first('ano') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Año(s)', 'min' => '0', 'max' => '99']) }}
              @if($errors->has('ano'))
                  <div class="invalid-feedback d-block">
                      {{ $errors->first('ano') }}
                  </div>
              @endif
          </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md">
      {{ Form::label('hijo', '# Hijos(as)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('hijo', 0, ['class' => $errors->first('hijo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Hijos', 'min' => '0', 'max' => '99']) }}
      @if($errors->has('hijo'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('hijo') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_separa_id', 'Motivo de separación', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_separa_id',  $todoxxxx["separaci"], null, ['class' => $errors->first('prm_separa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
      @if($errors->has('prm_separa_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_separa_id') }}
          </div>
      @endif
  </div>
</div>
<br>
<div>
  @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
</div>