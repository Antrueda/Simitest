<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FECHA</th>
      <th scope="col">TIPO DE TRASLADO</th>
      <th scope="col">TOTAL DE TRASLADOS</th>
      <th scope="col">UPI QUE ENVIA</th>
      <th scope="col">UPI QUE RECIBE</th>
      <th scope="col">SERVICIO</th>
      <th scope="col">USUARIO QUE CARGA</th>
      <th scope="col">USUARIO QUE RECIBE</th>


    </tr>
  </thead>
  <tbody>
    @foreach($todoxxxx as $traslado)
    <tr>
      <th>{{$traslado->id}}</th>
      <th>{{$traslado->fecha}}</th>
      <th>{{$traslado->trasladototal}}</th>
      <td>{{$traslado->tipotras->nombre}}</td>
      <td>{{$traslado->upi->nombre}}</td>
      <td>{{$traslado->trasupi->nombre}}</td>
      <td>{{$traslado->prm_serv->s_servicio}}</td>
      <td>{{$traslado->usuariocarga->name}}</td>
      <td>{{$traslado->responr->name}}</td>

     


      
    </tr>
    @endforeach
  </tbody>
</table>
