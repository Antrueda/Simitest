@component('bootstrap::modal')
@slot('id')
  addFamiliar
@endslot
@slot('title')
Agregar familiar 
@endslot
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('nombreFamiliar', 'Nombre del familiar', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('nombreFamiliar_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-9">
      {{ Form::label('procesoFamiliar', 'Proceso', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('procesoFamiliar_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-3">
      {{ Form::label('vigenteFamiliar', 'Vigente', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('vigenteFamiliar_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-2">
      {{ Form::label('vecesFamiliar', 'Nº de veces', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('vecesFamiliar', null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('motivoFamiliar', 'Motivo ', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('motivoFamiliar_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('tiemproceso', '¿Hace cuánto?', ['class' => 'control-label col-form-label-sm']) }}
      <div class="input-group">
        {{ Form::number('tiemproceso', null, ['class' => 'form-control form-control-sm']) }}
        {{ Form::select('durProceso_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm']) }}
      </div>
    </div>
  </div>
  
@slot('footer')
  {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
@endslot
@endcomponent