<div class="form-row align-items-end">
  <div class="col-md-12">
    {{ Form::button('Antecedente', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addAntecedente', 'data-toggle' => "modal"]) }}
    @component('bootstrap::table')
      @slot('class')
        table-sm table-hover my-2
      @endslot
      <thead>
        <th>Entidad</th>
        <th>Servicios o beneficios recibidos</th>
        <th>¿Durante cuánto tiempo?</th>
        <th>Año de prestación del servicio</th>
      </thead>
      <tbody>
        <tr>
          <td>Content</td>
          <td>Content</td>
          <td>Content</td>
          <td>Content</td>
        </tr>
      </tbody>
    @endcomponent
    {{-- Modal para antecedentes red de apoyo --}}
    @include('FichaIngreso.redapoyo.includes.antecedentes')
  </div>
  <div class="col-md-12 my-2">
    {{ Form::button('Actual', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addActual', 'data-toggle' => "modal"]) }}
    @component('bootstrap::table')
      @slot('class')
        table-sm table-hover my-2
      @endslot
      <thead>
        <th>Tipo de Red</th>
        <th>Nombre Persona / Institución</th>
        <th>Servicios o Beneficios</th>
        <th>Teléfono</th>
        <th>Dirección</th>
      </thead>
      <tbody>
        <tr>
          <td>Content</td>
          <td>Content</td>
          <td>Content</td>
          <td>Content</td>
          <td>Content</td>
        </tr>
      </tbody>
    @endcomponent
    {{-- Modal para red de apoyo actual --}}
    @include('FichaIngreso.redapoyo.includes.actual')
  </div>
</div>