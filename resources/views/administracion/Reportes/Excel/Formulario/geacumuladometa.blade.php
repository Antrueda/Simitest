<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TIPO DOCUMENTO</th>
      <th scope="col">No. DOCUMENTO</th>
      <th scope="col">PRIMER APELLIDO</th>
      <th scope="col">SEGUNDO APELLIDO</th>
      <th scope="col">PRIMER NOMBRE</th>
      <th scope="col">SEGUNDO NOMBRE</th>
      <th scope="col">SEXO</th>
      <th scope="col">EDAD</th>
      <th scope="col">GRUPO ETARIO</th>
      <th scope="col">ETNIA</th>
      <th scope="col">UPI</th>
      <th scope="col">MODALIDAD</th>
      <th scope="col">META</th>
      <th scope="col">AÑO</th>
      <th scope="col">MES</th>



      

    </tr>
  </thead>
  <tbody>
    @foreach($todoxxxx as $metaxxxx)
    <tr>
      <th>{{$metaxxxx->id_nnaj}}</th>
      <th>{{$metaxxxx->tipo_documento}}</th>
      <th>{{$metaxxxx->numero_documento}}</th>
      <td>{{$metaxxxx->primer_apellido}}</td>
      <td>{{$metaxxxx->segundo_apellido}}</td>
      <td>{{$metaxxxx->primer_nombre}}</td>
      <td>{{$metaxxxx->segundo_nombre}}</td>
      <td>{{$metaxxxx->sexo}}</td>
      <td>{{$metaxxxx->edad}}</td>
      <td>{{$metaxxxx->grupo_etario}}</td>
      <td>{{$metaxxxx->etnia}}</td>
      <td>{{$metaxxxx->nombre}}</td>
      <td>{{$metaxxxx->modalidad}}</td>
      <td>{{$metaxxxx->meta_final}}</td>
      <th>{{$metaxxxx->ano}}</th>
      <td>{{$metaxxxx->mes_reporte}}</td>
  


    </tr>
    @endforeach
  </tbody>
</table>
