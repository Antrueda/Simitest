<div class="card card-outline card-secondary">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-responsive" src="{{ asset($todoxxxx['usuariox']->sis_nnaj->FotoNnaj) }} " alt="User profile picture">
        </div>
        <h3 class="profile-username text-center">
            {{ $todoxxxx['usuariox']->s_primer_nombre }}
            {{ $todoxxxx['usuariox']->s_segundo_nombre }}
            {{ $todoxxxx['usuariox']->s_primer_apellido }}
            {{ $todoxxxx['usuariox']->s_segundo_apellido }}
        </h3>

        <ul class="list-group list-group-unbordered mb-4">
            <li class="list-group-item">
                <b>TIPO DOCUMENTO</b>
                <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_docu->tipoDocumento->nombre }}</a>
            </li>
            <li class="list-group-item">
                <b>DOCUMENTO</b>
                <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_docu->s_documento }}</a>
            </li>
            <li class="list-group-item">
                <b>FECHA DE NACIMIENTO</b>
                <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_nacimi->d_nacimiento }}</a>
            </li>
            <li class="list-group-item">
                <b>EDAD</b>
                <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_nacimi->Edad }} años</a>
            </li>
            <?php if (!is_null($todoxxxx['usuariox']->nnaj_sexo)) { ?>
                <li class="list-group-item">
                    <b>SEXO DE NACIMIENTO</b>
                    <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_sexo->prmSexo->nombre }}</a>
                </li>
                <li class="list-group-item">
                    <b>NOMBRE IDENTITARIO</b>
                    <a class="float-right">{{ $todoxxxx['usuariox']->nnaj_sexo->s_nombre_identitario }}</a>
                </li>
            <?php } ?>
            <li class="list-group-item">
                <b>DIRECCIÓN</b>
                <a class="float-right">{{ !is_null($todoxxxx['usuariox']->SisNnaj->FiResidencia) ? $todoxxxx['usuariox']->SisNnaj->FiResidencia->direccion : '' }}</a>
                <!-- <a class="float-right">{{ $todoxxxx['usuariox']->SisNnaj->FiResidencia!=null ? $todoxxxx['usuariox']->SisNnaj->FiResidencia->direccion : '' }}</a> -->
            </li>
            <li class="list-group-item">
                <b>TELÉFONO</b>
                <a class="float-right">{{ !is_null($todoxxxx['usuariox']->SisNnaj->FiResidencia) ? $todoxxxx['usuariox']->SisNnaj->FiResidencia->telefonos : '' }}</a>
                <!-- <a class="float-right">{{ $todoxxxx['usuariox']->SisNnaj->FiResidencia!=null ? $todoxxxx['usuariox']->SisNnaj->FiResidencia->where('sis_esta_id', 1)->first()->telefonos : '' }}</a> -->
            </li>

            <li class="list-group-item">
                <b>TIPO DE POBLACIÓN</b>
                <a class="float-right">{{ $todoxxxx['usuariox']->prmTipoPobla->nombre }}</a>
            </li>
            <li class="list-group-item">
                <b>ESTADO CIVIL</b>
                <a class="float-right">
                    {{ isset($todoxxxx['usuariox']->nnaj_fi_csd->prmEstadoCivil) ? $todoxxxx['usuariox']->nnaj_fi_csd->prmEstadoCivil->nombre : '' }}</a>
            </li>
            <li class="list-group-item">
                <b>UPI</b>
                <?php
                $dependen = '';
                $upixxxxx = $todoxxxx['usuariox']->sis_nnaj->UpiPrincipal;
                $servicio = '';
                if ($upixxxxx != null) {
                    $dependen = $upixxxxx->nombre;
                    $servicio = $todoxxxx['usuariox']->sis_nnaj->ServicioPrincipal;
                }
                ?>
                <a class="float-right">{{ $dependen }}</a>
            </li>
            <li class="list-group-item">
                <b>SERVICIO</b>
                <a class="float-right">{{ $servicio }}</a>
            </li>
        </ul>
    </div>
</div>
