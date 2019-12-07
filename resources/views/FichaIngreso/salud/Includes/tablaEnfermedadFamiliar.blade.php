@component('bootstrap::table')
  @slot('class')
    table-sm table-hover my-2
  @endslot
  <thead>
    <th>Familiar</th>
    <th>¿Qué enfermedad?</th>
    <th>¿Recibe medicamentos de forma permanente?</th>
    <th>¿Cuál medicamento?</th>
    <th>¿Ha Recibido Tratamiento?</th>
  </thead>
  <tbody>
    <tr>
      <td>Abuela</td>
      <td>HTA</td>
      <td>SI</td>
      <td>Difenhidramina 50 mg cápsula</td>
      <td>NO</td>
    </tr>
  <tbody>
@endcomponent