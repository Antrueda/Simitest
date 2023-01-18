<div class="card card-outline card-secondary">
  <div class="card-body box-profile">
    <div class="text-left">
      <img class="profile-user-img img-fluid img-responsive" src="{{ asset($todoxxxx['usuariox']->sis_nnaj->FotoNnaj) }} " alt="User profile picture">
    </div>
    <h3 class="profile-username text-left">
      {{ $todoxxxx['usuariox']->s_primer_nombre }}
      {{ $todoxxxx['usuariox']->s_segundo_nombre }}
      {{ $todoxxxx['usuariox']->s_primer_apellido }}
      {{ $todoxxxx['usuariox']->s_segundo_apellido }}</h3>
          <div class="col-md">
              TIPO DE DOCUMENTO:        <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_docu->tipoDocumento->nombre }}</a>
          </div>
          <div class="col-md">
              DOCUMENTO:         <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_docu->s_documento }}</a>
          </div>
      </div>
      <div class="row">
          <div class="col-md">
              FECHA DE NACIMIENTO:     <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_nacimi->d_nacimiento }}</a>
          </div>
          <div class="col-md">
              EDAD:     <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_nacimi->Edad }} años</a>
          </div>
          <div class="col-md">
              SEXO NACIMIENTO:      <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_sexo->prmSexo->nombre }}</a>
          </div>
      </div>
      <div class="row">
          <div class="col-md" style="text-transform:uppercase;">
              DIRECCIÓN:     <a class="float-right">{{ $todoxxxx['usuariox']->SisNnaj->FiResidencia!=null ? $todoxxxx['usuariox']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->first()->direccion : '' }}</a>
          </div>
          <div class="col-md">
              TELÉFONO:<a class="float-right">{{ $todoxxxx['usuariox']->SisNnaj->FiResidencia!=null ? $todoxxxx['usuariox']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->first()->telefonos : '' }}</a>
          </div>
          <div class="col-md" style="text-transform:uppercase;">
              NOMBRE IDENTITARIO:         <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_sexo->s_nombre_identitario }}</a>
          </div>
      </div>
      <div class="row">
          <div class="col-md" style="text-transform:uppercase;">
              TIPO POBLACIÓN:         <a class="float-right">{{ $todoxxxx['usuariox']->prmTipoPobla->nombre }}</a>
          </div>
          <div class="col-md" style="text-transform:uppercase;">
            UPI:         <a class="float-right">{{ $todoxxxx['usuariox']->sis_nnaj->UpiPrincipal->sis_depen->nombre }}</a>
          </div>
          <div class="col-md" style="text-transform:uppercase;">

          </div>

      </div>


  </div>
</div>
