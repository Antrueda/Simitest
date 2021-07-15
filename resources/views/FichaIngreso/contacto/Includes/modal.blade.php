@component('bootstrap::modal')
  @slot('id')
    addEntidad
  @endslot
  @slot('title')
    Agregar Entidad que Remite al NNAJ
  @endslot
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('entidadRemite', 'Entidad que remite', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('entidadRemite_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-md-6">
      {{ Form::label('fechaRemite', 'Fecha de remisión', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::date('fechaRemite', \Carbon\Carbon::now(), ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-6">
      {{ Form::label('motivoRemision', 'Motivo por el cual se remite?', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('motivoRemision_id', $todoxxxx["sexoxxxx"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
    </div>
  </div>
  @slot('footer')
  {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
  @endslot
@endcomponent