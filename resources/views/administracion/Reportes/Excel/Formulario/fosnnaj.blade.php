

<table width="100%" border="1" class="table table-striped table-bordered">

  <thead>    <thead>
    <tr>
     
        <th> FICHAS DE OBSERVACIONES DE {{$padrexxx}}</th>
    </tr>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">AREA</th>
      <th scope="col">TIPO DE SEGUMIENTO</th>
      <th scope="col">SUB-TIPO DE SEGUIMIENTO</th>
      <th scope="col">UPI</th>
      <th scope="col">FECHA</th>
      <th scope="col">OBSERVACION</th>
      <th scope="col">USUARIO QUE CARGA</th>
      


    </tr>
  </thead>
  <tbody>
    @foreach($todoxxxx as $fosxxxxx)
    <tr>
      <th>{{$fosxxxxx->id}}</th>
      <th>{{$fosxxxxx->areas}}</th>
      <th>{{$fosxxxxx->seguimiento}}</th>
      <td>{{$fosxxxxx->subseguimiento}}</td>
      <td>{{$fosxxxxx->upi}}</td>
      <td>{{$fosxxxxx->d_fecha_diligencia}}</td>
      <td>{{$fosxxxxx->s_observacion}}</td>
      <td>{{$fosxxxxx->responsable}}</td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>
