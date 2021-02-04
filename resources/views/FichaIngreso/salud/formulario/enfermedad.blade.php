
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('fi_compfami_id', 'Miembro Familia', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('fi_compfami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('s_tipo_enfermedad', '¿Qué tipo de enfermedad?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_tipo_enfermedad', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-2">
      {{ Form::label('prm_recimedi_id', '¿Recibe medicamentos de forma permanente?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_recimedi_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-8">
      {{ Form::label('s_medicamento', 'Cuál(es)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_medicamento', null, ['class' => 'form-control form-control-sm',$todoxxxx['disabled'],
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-2">
      {{ Form::label('prm_rectrata_id', '¿Ha recibido tratamiento?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_rectrata_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
