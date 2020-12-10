<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    {{ Form::label('qRazones', '17.1 Razones para ingresar al idipron/observaciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_porque_ingresar', null, ['rows' => 4, 'cols' => 40, 'style' => 'resize:none', 'id' => 's_porque_ingresar', 'class' => 'md-textarea form-control', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    <p id="contadorporqueingresar">0/4000</p>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    {{ Form::label('userd_id', '17.3 Persona que diligencia', ['class' => 'control-label ']) }}
    {{ Form::select('userd_id', $todoxxxx['usuarios'], null, ['class' => $errors->first('userd_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Digite la persona que diligencia','id'=>'userd_id']) }}
    @if($errors->has('userd_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('userd_id') }}
    </div>
    @endif
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('s_cargo_contrato', 'Cargo / No. de contrato', ['class' => 'control-label col-form-label-sm']) }}
    <div id="s_cargo_diligencia" class="form-control form-control-sm">
      {{$todoxxxx['cargodil']}}
    </div>
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('sis_depend_id', 'Àrea o equipo', ['class' => 'control-label']) }}
    {{ Form::select('sis_depend_id', $todoxxxx['depedile'], null, ['class' => $errors->first('sis_depend_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => 'Digite el responsable']) }}
    @if($errors->has('sis_depend_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_depend_id') }}
    </div>
    @endif
  </div>
</div>
<div class="form-row align-items-end">




  <div class="form-group col-md-6">
    {{ Form::label('userr_id', '17.4 Persona Resposable / Encargado', ['class' => 'control-label']) }}
    {{ Form::select('userr_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('userr_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Digite el responsable']) }}
    @if($errors->has('userr_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('userr_id') }}
    </div>
    @endif
  </div>



  <div class="form-group col-md-3">
    {{ Form::label('s_cargo_contrato_reponsable', 'Cargo / No. de contrato', ['class' => 'control-label col-form-label-sm']) }}
    <div id="s_cargo_responsable" class="form-control form-control-sm"> {{$todoxxxx['cargores']}}</div>
  </div>

  <div class="form-group col-md-3">
    {{ Form::label('sis_depenr_id', 'Àrea o equipo', ['class' => 'control-label']) }}
    {{ Form::select('sis_depenr_id', $todoxxxx['deperesp'], null, ['class' => $errors->first('sis_depenr_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => 'Digite el responsable']) }}
    @if($errors->has('sis_depenr_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_depenr_id') }}
    </div>
    @endif
  </div>




  <div class="form-group col-md-3">
    {{ Form::label('i_prm_estado_ingreso_id', 'Estado de ingreso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_estado_ingreso_id', $todoxxxx["estaingr"], null, ['class' => 'form-control form-control-sm']) }}
  </div>

</div>
