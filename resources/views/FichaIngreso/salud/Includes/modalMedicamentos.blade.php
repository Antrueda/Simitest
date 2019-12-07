@component('bootstrap::modal')
@slot('id')
addMedicamento
@endslot
@slot('title')
  Adicione el medicamento que consume
@endslot
  <div class="form-row align-items-end">
    <div class="form-group col-md-12">
      {{ Form::label('medicamentoConsume', 'Seleccione el medicamento', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('medicamentoConsume_id', $sexoxxxx, null, ['class' => 'form-control form-control-sm', 'required' => 'required']) }}
    </div>
  </div>
@slot('footer')
  {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
@endslot
@endcomponent