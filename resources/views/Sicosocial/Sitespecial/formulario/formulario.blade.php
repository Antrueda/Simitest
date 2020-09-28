<div class="row">
  <div class="col-md-6">
    {{ Form::label('victimas', '15.1 Víctima ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('victimas[]', $todoxxxx['victimax'], null, ['class' => $errors->first('victimas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...','id' => 'victimas', 'multiple', 'onchange' => 'doc(this.value)', 'autofocus']) }}
    @if($errors->has('victimas'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('victimas') }}
      </div>
    @endif
  </div>
  <div class="col-md-6">
    {{ Form::label('riesgos', '15.2 En riesgo de ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    <div id="riesgos_div">
      {{ Form::select('riesgos[]', $todoxxxx['riesgosx'], null, ['class' => $errors->first('riesgos') ?
        'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
        'data-placeholder' => 'Seleccione...','id' => 'riesgos', 'multiple',
        'onchange' => 'doc1(this.value)']) }}
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
    {{ Form::select('prm_victima_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_victima_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onchange' => 'doc1(this.value)']) }}
    @if($errors->has('prm_victima_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('prm_victima_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">

   <div class="col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
