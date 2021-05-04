<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">CEDULA</th>
      <th scope="col">PRIMER NOMBRE</th>
      <th scope="col">SEGUNDO NOMBRE</th>
      <th scope="col">PRIMER APELLIDO</th>
      <th scope="col">SEGUNDO APELLIDO</th>
      <th scope="col">UPIS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($todoxxxx as $usuario)
    <tr>
      <th>{{$usuario->id}}</th>
      <th>{{$usuario->s_documento}}</th>
      <td>{{$usuario->s_primer_nombre}}</td>
      <td>{{$usuario->s_segundo_nombre}}</td>
      <td>{{$usuario->s_primer_apellido}}</td>
      <td>{{$usuario->s_segundo_apellido}}</td>
      <td>

        <?php

        $dependen = '';
        foreach ($usuario->sis_depens as $key => $value) {
          $dependen .= $value->nombre . ', ';
        }
        echo  $dependen;

        ?>



      </td>
    </tr>
    @endforeach
  </tbody>
</table>