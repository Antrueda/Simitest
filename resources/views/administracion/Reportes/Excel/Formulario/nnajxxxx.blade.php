<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DOCUMENTO</th>
      <th scope="col">PRIMER NOMBRE</th>
      <th scope="col">SEGUNDO NOMBRE</th>
      <th scope="col">PRIMER APELLIDO</th>
      <th scope="col">SEGUNDO APELLIDO</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">SEXO</th>
      <th scope="col">UPIS</th>
      <th scope="col">SERVICIOS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($todoxxxx as $usuario)
    <tr>
      <th>{{$usuario->id}}</th>
      <th>{{$usuario->fi_datos_basico->nnaj_docu->s_documento}}</th>
      <td>{{$usuario->fi_datos_basico->s_primer_nombre}}</td>
      <td>{{$usuario->fi_datos_basico->s_segundo_nombre}}</td>
      <td>{{$usuario->fi_datos_basico->s_primer_apellido}}</td>
      <td>{{$usuario->fi_datos_basico->s_segundo_apellido}}</td>
      <td>{{explode(' ',$usuario->fi_datos_basico->nnaj_nacimi->d_nacimiento)[0]}}</td>
      <td>
        {{$usuario->fi_datos_basico->nnaj_sexo->prmSexo->nombre}}
      </td>
      <td>
        <?php
        $dependen = '';
        $servicio = '';
        foreach ($usuario->nnaj_upis as $key => $value) {
          $dependen .= $value->sis_depen->nombre . ', ';
          foreach ($value->nnaj_deses as $key => $servicix) {
            $servicio .= $servicix->sis_servicio->s_servicio . ', ';
          }
          // $servicio
        }
        echo  $dependen;

        ?>



      </td>
      <td>
        {{$servicio}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>