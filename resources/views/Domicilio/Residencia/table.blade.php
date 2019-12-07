@component('bootstrap::table')
  @slot('class')
    table-sm table-hover my-2
  @endslot
  <thead class="text-center">
    <th>Ítem</th>
    <th>Estado</th>
  </thead>
  <tbody>
    <tr>
      <th>Higiene y Aseo</th>
      <th>
        {{ Form::select('prm_higiene_id', $estado, null, ['class' => $errors->first('prm_higiene_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_higiene_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_higiene_id') }}
          </div>
        @endif
      </th>
    </tr>
    <tr>
      <th>Ventilación</th>
      <th>
        {{ Form::select('prm_ventilacion_id', $estado, null, ['class' => $errors->first('prm_ventilacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_ventilacion_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('prm_ventilacion_id') }}
        </div>
        @endif
      </th>
    </tr>
    <tr>
      <th>Iluminación</th>
      <th>
        {{ Form::select('prm_iluminacion_id', $estado, null, ['class' => $errors->first('prm_iluminacion_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_iluminacion_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_iluminacion_id') }}
          </div>
        @endif
      </th>
    </tr>
    <tr>
      <th>Orden</th>
      <th>
        {{ Form::select('prm_orden_id', $estado, null, ['class' => $errors->first('prm_orden_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_orden_id'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('prm_orden_id') }}
        </div>
        @endif
      </th>
    </tr>
  </tbody>
@endcomponent