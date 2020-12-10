  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('fi_compfami_id', 'Nombre del familiar', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('fi_compfami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-9">
      {{ Form::label('s_proceso', 'Proceso', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_proceso', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('i_prm_vigente_id', 'Vigente', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_vigente_id', $todoxxxx["vigentex"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-2">
      {{ Form::label('i_veces', 'Nº de veces', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('i_veces', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('i_prm_motivo_id', 'Motivo ', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_motivo_id', $todoxxxx["motivoxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('i_prm_tiempo_id', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="input-group">
        {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm']) }}
        {{ Form::select('i_prm_tiempo_id', $todoxxxx["tiempoxx"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
    </div>
  </div>
