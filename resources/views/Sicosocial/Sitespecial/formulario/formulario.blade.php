<div class="row">
  <div class="col-md-6">
    {{ Form::label('victimas', '15.1 Víctima ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('victimas[]', $todoxxxx['victimax'], null, ['class' => $errors->first('victimas') ? 'form-control form-control-sm is-invalid' : 
    'form-control form-control-sm', 'data-placeholder' => 'Seleccione...','id' => 'victimas', 'multiple', 'autofocus']) }}
    @if($errors->has('victimas'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('victimas') }}
      </div>
    @endif
  </div>
  <div id="riesgos_div" class="col-md-6" style="display: {{$todoxxxx['riesgosz'] }} ">
    
    {{ Form::label('riesgos', '15.2 En riesgo de ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('riesgos[]', $todoxxxx['riesgosx'], null, ['class' => $errors->first('riesgos') ?
        'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
        'data-placeholder' => 'Seleccione...','id' => 'riesgos', 'multiple',
       ]) }}
    
    @if($errors->has('riesgos'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('riesgos') }}
      </div>
    @endif
  </div>
<div id="victima_div" class="col-md-6" style="display: {{$todoxxxx['victimaz'] }}">
    {{ Form::label('prm_victima_id', '15.3 ¿Existe reconocimiento por parte del NNA como víctima de ESCNNA?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_victima_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_victima_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_victima_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('prm_victima_id') }}
      </div>
    @endif
  </div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
