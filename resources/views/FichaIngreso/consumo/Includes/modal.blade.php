@component('bootstrap::modal')
  @slot('id')
    addAgregar
  @endslot
  @slot('title')
    Agregar Consumo de SPA
  @endslot
  <div class="form-row align-items-end">
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_sustancia_id', 'Sustancia', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('i_prm_sustancia_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2', 'required' =>
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_edad_primera_vez_id', '11.2 Edad de Consumo por 1ra. vez', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_edad_primera_vez_id', $iniconsu, null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('i_prm_consumo_ultimo_ano_id', '11.3 ¿Ha consumido en el último mes?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_consumo_ultimo_ano_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2', 'required' => 'required']) }}
      </div>
  </div>
  @slot('footer')
  {{ Form::button('Agregar', ['class' => 'btn btn-primary btn-sm']) }}
  @endslot
@endcomponent