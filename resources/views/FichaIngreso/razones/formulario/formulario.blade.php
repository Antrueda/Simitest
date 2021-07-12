<div class="form-row align-items-end">
  <div class="form-group col-md-12">
    @if($todoxxxx['usuariox']->prm_tipoblaci_id == 651||$todoxxxx['usuariox']->prm_tipoblaci_id == 2323)
    {{ Form::label('qRazones', '17. Razones para ingresar al idipron', ['class' => 'control-label col-form-label-sm']) }}
    @else
    {{ Form::label('qRazones', '16. Razones para ingresar al idipron', ['class' => 'control-label col-form-label-sm']) }}
    @endif
    {{ Form::textarea('s_porque_ingresar', null, ['rows' => 4, 'cols' => 40, 'style' => 'resize:none', 'id' => 's_porque_ingresar', 'class' => 'md-textarea form-control', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    <p id="contadorporqueingresar">0/4000</p>
  </div>
</div>
<div class="form-row align-items-end">
  <div class="form-group col-md-6">
    @if($todoxxxx['usuariox']->prm_tipoblaci_id == 651||$todoxxxx['usuariox']->prm_tipoblaci_id == 2323)
    {{ Form::label('userd_id', '17.1 Persona que diligencia', ['class' => 'control-label ']) }}
    @else
    {{ Form::label('userd_id', '16.1 Persona que diligencia', ['class' => 'control-label ']) }}
    @endif
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
    {{ Form::label('s_cargo_diligencia', 'Cargo / No. de contrato', ['class' => 'control-label col-form-label-sm']) }}
    <div id="s_cargo_diligencia" class="form-control form-control-sm">
      {{$todoxxxx['cargodil']}}
    </div>
  </div>
  <div class="form-group col-md-3">
    {{ Form::label('sis_depend_id', 'Área o equipo', ['class' => 'control-label']) }}
    {{ Form::select('sis_depend_id', $todoxxxx['depedile'], null, ['class' => $errors->first('sis_depend_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => 'Digite el Area']) }}
    @if($errors->has('sis_depend_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('sis_depend_id') }}
    </div>
    @endif
  </div>
</div>
<div class="form-row align-items-end">

  <div class="form-group col-md-6">
    @if($todoxxxx['usuariox']->prm_tipoblaci_id == 651||$todoxxxx['usuariox']->prm_tipoblaci_id == 2323)
    {{ Form::label('userr_id', '17.2 Persona Responsable / Encargado', ['class' => 'control-label']) }}
    @else
    {{ Form::label('userr_id', '16.2 Persona Responsable / Encargado', ['class' => 'control-label']) }}
    @endif
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
    {{ Form::label('s_cargo_responsable', 'Cargo / No. de contrato', ['class' => 'control-label col-form-label-sm']) }}
    <div id="s_cargo_responsable" class="form-control form-control-sm"> {{$todoxxxx['cargores']}}</div>
  </div>

  <div class="form-group col-md-3">
    {{ Form::label('sis_depenr_id', 'Área o equipo', ['class' => 'control-label']) }}
    {{ Form::select('sis_depenr_id', $todoxxxx['deperesp'], null, ['class' => $errors->first('sis_depenr_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => 'Digite el Área']) }}
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
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      @if($todoxxxx['usuariox']->prm_tipoblaci_id == 651||$todoxxxx['usuariox']->prm_tipoblaci_id == 2323)
      {{ Form::label('observaciones', '18. Observaciones', ['class' => 'control-label col-form-label-sm']) }}
      @else
      {{ Form::label('observaciones', '17. Observaciones', ['class' => 'control-label col-form-label-sm']) }}
      @endif
      {{ Form::textarea('observaciones', null, ['rows' => 4, 'cols' => 40, 'style' => 'resize:none', 'id' => 'observaciones', 'class' => 'md-textarea form-control', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
      <p id="contadorobservaciones">0/4000</p>
    </div>
  </div>


