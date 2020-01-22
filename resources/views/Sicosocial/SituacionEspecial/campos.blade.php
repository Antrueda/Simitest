<div class="row">
  <div class="col-md-6">
    {{ Form::label('victimas', '15.1 Víctima ESCCNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('victimas[]', $victima, null, ['class' => $errors->first('victimas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...','id' => 'victimas', 'multiple', 'onchange' => 'doc(this.value)', 'autofocus', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
    @if($errors->has('victimas'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('victimas') }}
      </div>
    @endif
  </div>
  <div class="col-md-6">
    {{ Form::label('riesgos', '15.2 En riesgo de ESCCNA', ['class' => 'control-label col-form-label-sm']) }}
    <div id="riesgos_div">
      {{ Form::select('riesgos[]', $riesgo, null, ['class' => $errors->first('riesgos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...','id' => 'riesgos', 'multiple', 'onchange' => 'doc1(this.value)', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
    </div>
    @if($errors->has('riesgos'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('riesgos') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    {{ Form::label('prm_victima_id', '15.3 ¿Existe reconocimiento por parte del NNA como víctima de ESCNNA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_victima_id', $sino, null, ['class' => $errors->first('prm_victima_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)', $vsi->sis_esta_id == 0 ? 'disabled' : '']) }}
    @if($errors->has('prm_victima_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('prm_victima_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
    @if ($vsi->sis_esta_id == 1)
      @canany(['vsisalud-crear', 'vsisalud-editar'])
        {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
      @endcanany
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('VSI.ver', $dato->id) }}">Regresar</a>
</div>