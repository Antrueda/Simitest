<div class="card card-success card-outline">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-responsive" src="{{ asset($todoxxxx['datobasi']->sis_nnaj->FotoNnaj) }} " alt="User profile picture">
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

    <p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_docu->tipoDocumento->nombre }} : {{ $todoxxxx['datobasi']->nnaj_docu->s_documento }}</p>
    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>TIPO DE POBLACIÓN</b>
        <a class="float-right"><p class="text-muted text-center">{{ $todoxxxx['datobasi']->prmTipoPobla->nombre }}</p></a>
      </li>
      <li class="list-group-item">
        <b>ESTADO CIVIL</b>
        <a class="float-right">{{ $todoxxxx['datobasi']->nnaj_fi_csd->prmEstadoCivil->nombre }}</a>
      </li>
      <li class="list-group-item">
        <b>EDAD</b>
        <a class="float-right"><a class="float-right"><p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_nacimi->Edad }} Años</p></a></a>
      </li>
      <li class="list-group-item">
        <b>SEXO</b>
        <a class="float-right"><a class="float-right"><p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_sexo->prmSexo->nombre }}</p></a></a>
      </li>
      <li class="list-group-item">
        <b>UPI</b>
        @foreach ($todoxxxx['datobasi']->sis_depen_id as $upixxxxx)
        <a class="float-right"><a class="float-right"><p class="text-muted text-center">{{ $upixxxxx->nombre }}</p></a></a>
        @endforeach

      </li>
        <li class="list-group-item">
          <b>DIRECCIÓN</b>
          <a class="float-right">{{ $todoxxxx['datobasi']->SisNnaj->FiResidencia!=null ? $todoxxxx['datobasi']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->first()->direccion : '' }}</a>
        </li>
        <li class="list-group-item">
          <b>TELÉFONO</b>
          <a class="float-right">{{ $todoxxxx['datobasi']->SisNnaj->FiResidencia!=null ? $todoxxxx['datobasi']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->first()->telefonos : '' }}</a>
        </li>
        <li class="list-group-item">
          <b>UPI</b>
          <a class="float-right">{{ $todoxxxx['datobasi']->sis_nnaj->UpiPrincipal->nombre }}</a>
        </li>
        <li class="list-group-item">
          <b>SERVICIO</b>
          <a class="float-right">{{ $todoxxxx['datobasi']->sis_nnaj->ServicioPrincipal }}</a>
        </li><s></s>
      </li>
    </ul>
  </div>
</div>
