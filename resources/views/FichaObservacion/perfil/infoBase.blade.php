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
    <p class="text-muted text-center">{{ $todoxxxx['datobasi']->prmTipoPobla->nombre }}</p>
    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Sexo</b>
        <a class="float-right">{{ $todoxxxx['datobasi']->nnaj_sexo->prmSexo->nombre }}</a>
      </li>
      <li class="list-group-item">
        <b>Identidad de género</b>
        <a class="float-right">{{ $todoxxxx['datobasi']->nnaj_sexo->prmIdeGenero->nombre }}</a>
      </li>
      <li class="list-group-item">
        <b>Tipo de documento</b>
        <a class="float-right">{{ $todoxxxx['datobasi']->nnaj_docu->tipoDocumento->nombre }}</a>
      </li>
      <li class="list-group-item">
        <b>Documento</b>
        <a class="float-right">{{ $todoxxxx['datobasi']->nnaj_docu->s_documento }}</a>
      </li>
    </ul>
  </div>
</div>
