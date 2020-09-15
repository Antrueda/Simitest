<div class="card card-success card-outline">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle" src="{{ asset('adminlte/dist/img/avatar2.png') }} "
        alt="User profile picture">
    </div>
    <h3 class="profile-username text-center">
      {{ $todoxxxx['datobasi']->s_primer_nombre }}
      {{ $todoxxxx['datobasi']->s_segundo_nombre }}
      {{ $todoxxxx['datobasi']->s_primer_apellido }}
      {{ $todoxxxx['datobasi']->s_segundo_apellido }}
      </h3>
      <h3 class="profile-username text-center">
        {{ $todoxxxx['datobasi']->nnaj_sexo->s_nombre_identitario }}
      </h3>
    <p class="text-muted text-center">{{ $todoxxxx['datobasi']->prmTipoPobla->nombre }}</p>
    <p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_docu->tipoDocumento->nombre }} : {{ $todoxxxx['datobasi']->nnaj_docu->s_documento }}</p>
    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Tipo de Poblacion</b>
        <a class="float-right"><p class="text-muted text-center">{{ $todoxxxx['datobasi']->prmTipoPobla->nombre }}</p></a>
      </li>
      <li class="list-group-item">
        <b>EDAD</b>
        <a class="float-right"><a class="float-right"><p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_nacimi->Edad }} Años</p></a></a>
      </li>
      <li class="list-group-item">
        <b>UPI</b>
       
      </li>
      <li class="list-group-item">
        <b>ESTADO CIVIL</b>
        <a class="float-right"><p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_fi_csd->prmEstadoCivil->nombre}}</p></a>
        <li class="list-group-item">
          <b>DIRECCION</b>
          <a class="float-right">{{ count($todoxxxx['datobasi']->SisNnaj->FiResidencia)>0 ? $todoxxxx['datobasi']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->direccion : '' }}</a>
        </li>
        <li class="list-group-item">
          <b>TELEFONO</b>
          <a class="float-right">{{ count($todoxxxx['datobasi']->SisNnaj->FiResidencia)>0 ? $todoxxxx['datobasi']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->telefonos : '' }}</a>
        </li>
      </li>
    </ul>
  </div>
</div>
