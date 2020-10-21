<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md">
                NOMBRE:
                {{ $nnaj->nombre_completo }}
            </div>
            <div class="col-md">
                TIPO DE DOCUMENTO: {{ $nnaj->nnaj_docu->tipoDocumento->nombre }}
            </div>
            <div class="col-md">
                DOCUMENTO: {{ $nnaj->s_documento }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                FECHA DE NACIMIENTO: {{ $nnaj->nnaj_nacimi->d_nacimiento }}
            </div>
            <div class="col-md">
                EDAD: {{ $nnaj->nnaj_nacimi->Edad }} años
            </div>
            <div class="col-md">
                SEXO NACIMIENTO: {{ $nnaj->nnaj_sexo->prmSexo->nombre }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                DIRECCIÓN: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->direccion : '' }}
            </div>
            <div class="col-md">
                TELÉFONO: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->telefonos : '' }}
            </div>
            <div class="col-md">
                NOMBRE IDENTITARIO: {{ $nnaj->nnaj_sexo->s_nombre_identitario }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                TIPO POBLACIÓN: {{ $nnaj->prmTipoPobla->nombre }}
            </div>
        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sicosocial</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'vsi') ?' active' : '' }}" href="{{ route('vsixxxxx', $nnaj->sis_nnaj_id) }}">Valoración Sicosocial</a>
                    <a class="dropdown-item{{ ($accion == 'csd') ?' active' : '' }}" href="{{ route('csdxxxxx', $nnaj->sis_nnaj_id) }}">Consulta Social en Domicilio</a>
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('is.ver', $nnaj->sis_nnaj_id) }}">Intervencion</a>
                    <a class="dropdown-item{{ ($accion == 'SalidaMayores') ?' active' : '' }}" href="{{ route('ai.salidamayores', $nnaj->sis_nnaj_id) }}">Salida de Jóvenes Mayores de Edad</a>
                    <a class="dropdown-item{{ ($accion == 'Evasion') ?' active' : '' }}" href="{{ route('ai.evasion', $nnaj->sis_nnaj_id) }}">Reporte de Evasión</a>
                    <a class="dropdown-item{{ ($accion == 'SalidaMenores') ?' active' : '' }}" href="{{ route('ai.salidamenores', $nnaj->sis_nnaj_id) }}">Salidas y permisos con acompañamiento y/o representante legal</a>
                    <a class="dropdown-item{{ ($accion == 'RetornoSalida') ?' active' : '' }}" href="{{ route('ai.retornosalida', $nnaj->sis_nnaj_id) }}">Retorno de salidas y permisos con acudiente y/o representante legal</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Salud</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'Vspa') ?' active' : '' }}" href="{{ route('mitigacion.vspa', $dato->id) }}">Valoración del Riesgo por Consumo de SPA</a>
                    <a class="dropdown-item{{ ($accion == 'Vma') ?' active' : '' }}" href="{{ route('mitigacion.vma', $dato->id) }}">Valoración Medicina Alternativa</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Socio Legal</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Espiritualidad</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Educacion</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Emprender</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Transversales</a>
        </li>
        </ul>
    </div>
</div>
@if($accion == 'SalidaMayores')
    @include('Acciones.Individuales.SalidaMayores.index')
@elseif($accion == 'Evasion')
    @include('Acciones.Individuales.Evasion.index')
@elseif($accion == 'SalidaMenores')
    @include('Acciones.Individuales.SalidaMenores.index')
@elseif($accion == 'RetornoSalida')
    @include('Acciones.Individuales.RetornoSalida.index')
@elseif($accion == 'Vspa')
    @include('Acciones.Individuales.Salud.Mitigacion.Vspa.index')
@elseif($accion == 'Vma')
    @include('Acciones.Individuales.Salud.Mitigacion.Vma.index')
@endif
