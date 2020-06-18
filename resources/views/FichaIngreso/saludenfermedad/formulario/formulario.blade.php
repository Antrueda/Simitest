  <a href="{{route('fi.salud.nuevo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary" role="button">Volver a Salud</a>

  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('fi_composicion_fami_id', 'Miembro Familia', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('fi_composicion_fami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm']) }}
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
      {{ Form::label('recimedi_id', '¿Recibe medicamentos de forma permanente?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('recimedi_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-8">
      {{ Form::label('s_medicamento', 'Cuál(es)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_medicamento', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-2">
      {{ Form::label('rectrata_id', '¿Ha recibido tratamiento?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('rectrata_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <a href="{{route('fi.salud.nuevo',$todoxxxx["nnajregi"])}}" class="btn btn-sm btn-primary" 
role="button">Volver a Salud</a>