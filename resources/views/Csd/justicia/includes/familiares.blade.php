{{ Form::button('Nuevo Proceso Familiar', ['class' => 'btn btn-primary btn-sm', 'data-target' => '#addFamiliar', 'data-toggle' => "modal"]) }}
@include('FichaIngreso.justicia.includes.addfamiliar')
<div class="form-row align-items-end">
  <div class="col-auto">
    @component('bootstrap::table')
    @slot('class')
    table-sm table-hover
    @endslot
    <thead>
      <th>Nº</th>
      <th>Proceso</th>
      <th>Vigente</th>
      <th>Nº de Veces</th>
      <th>Motivo</th>
      <th>Hace Cuánto</th>
    </thead>
    <tbody>
      <tr>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
      </tr>
      <tr>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
        <td>Content</td>
      </tr>
    <tbody>
      @endcomponent
  </div>
</div>