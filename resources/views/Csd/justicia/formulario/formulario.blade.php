{{-- Proceso Administrativo de Restablecimiento de Derechos para Niños, Niñas y Adolescentes (DE 8 A 17 AÑOS) --}}
<div class="row">
  <div class="col-md">
      {{ Form::label('prm_vinculado_id', '4.1 ¿Se encuentra vinculado a la delincuencia o a la violencia?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_vinculado_id',  $todoxxxx["condicio"], null, ['class' => $errors->first('prm_vinculado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc(this.value)', 'autofocus']) }}
      @if($errors->has('prm_vinculado_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_vinculado_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_vin_causa_id', 'Indicar la causa?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_vin_causa_id',  $todoxxxx["causasxx"], null, ['class' => $errors->first('prm_vin_causa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_vin_causa_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_vin_causa_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_riesgo_id', '4.2 ¿Se encuentra en riesgo de participar en actos delictivos?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_riesgo_id',  $todoxxxx["condicio"], null, ['class' => $errors->first('prm_riesgo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc1(this.value)']) }}
      @if($errors->has('prm_riesgo_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_riesgo_id') }}
          </div>
      @endif
  </div>
  <div class="col-md">
      {{ Form::label('prm_rie_causa_id', 'Indicar la causa?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_rie_causa_id',  $todoxxxx["causasxx"], null, ['class' => $errors->first('prm_rie_causa_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
      @if($errors->has('prm_rie_causa_id'))
          <div class="invalid-feedback d-block">
              {{ $errors->first('prm_rie_causa_id') }}
          </div>
      @endif
  </div>
</div>


