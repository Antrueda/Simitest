@component('bootstrap::modal')
@slot('id')
addEnfermedadFamiliar
@endslot
@slot('title')
  Diligencie enfermedad del familiar
@endslot
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('i_prm_miembro_familia_id', 'Miembro Familia', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('i_prm_miembro_familia_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
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
      {{ Form::select('recimedi_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
    <div class="form-group col-md-8">
      {{ Form::label('s_medicamento', 'Cuál(es)', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('s_medicamento', null, ['class' => 'form-control form-control-sm',
     "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"]) }}
    </div>
    <div class="form-group col-md-2">
      {{ Form::label('rectrata_id', '¿Ha recibido tratamiento?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('rectrata_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
  </div>
@slot('footer')
  {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
@endslot
@endcomponent