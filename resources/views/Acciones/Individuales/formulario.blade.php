<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md" style="text-transform:uppercase;">
                NOMBRE:
                {{ $nnaj->nombre_completo }}
            </div>
            <div class="col-md">
                TIPO DE DOCUMENTO: {{ $nnaj->nnaj_docu->tipoDocumento->nombre }}
            </div>
            <div class="col-md">
                DOCUMENTO: {{ $nnaj->nnaj_docu->s_documento }}
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
            <div class="col-md" style="text-transform:uppercase;">
                DIRECCIÓN: {{ $dato->FiResidencia!= null ?$dato->FiResidencia->where('sis_esta_id', 1)->first()->direccion : '' }}
            </div>
            <div class="col-md">
                TELÉFONO: {{ $dato->FiResidencia!= null ?$dato->FiResidencia->where('sis_esta_id', 1)->first()->telefonos : '' }}
            </div>
            <div class="col-md" style="text-transform:uppercase;">
                NOMBRE IDENTITARIO: {{ $nnaj->nnaj_sexo->s_nombre_identitario }}
            </div>
        </div>
        <div class="row">
            <div class="col-md" style="text-transform:uppercase;">
                TIPO POBLACIÓN: {{ $nnaj->prmTipoPobla->nombre }}
            </div>
            <div class="col-md" style="text-transform:uppercase;">
                ESTADO CIVIL: {{ $nnaj->nnaj_fi_csd->prmEstadoCivil->nombre }}
            </div>
            <div class="col-md" style="text-transform:uppercase;">

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
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('is.ver', $nnaj->sis_nnaj_id) }}">Intervención</a>

                    {{-- @if($nnaj->nnaj_nacimi->Edad>=18)
                    <a class="dropdown-item{{ ($accion == 'SalidaMayores') ?' active' : '' }}" href="{{ route('aisalidamayores', $nnaj->sis_nnaj_id) }}">Salida ddddde Jóvenes Mayores de Edad</a>
<<<<<<< HEAD
                    @endif  --}}
                    @if($nnaj->nnaj_nacimi->Edad<18) <a class="dropdown-item{{ ($accion == 'Evasion') ?' active' : '' }}" href="{{ route('aievasion', $nnaj->sis_nnaj_id) }}">Reporte de Evasión</a>
                        @endif
=======
                    @endif -->
                    @if($reportex) 
                        <a class="dropdown-item{{ ($accion == 'Evasion') ?' active' : '' }}" 
                        href="{{ route('aievasion', $nnaj->sis_nnaj_id) }}">Reporte de Evasión</a>
                    @endif
>>>>>>> master
                        @if($nnaj->Salida)
                        <a class="dropdown-item{{ ($accion == 'SalidaMenores') ?' active' : '' }}" href="{{ route('aisalidamenores', $nnaj->sis_nnaj_id) }}">Salidas y permisos con acompañamiento y/o representante legal</a>
                        @endif
                        @if($nnaj->nnaj_nacimi->Edad<18) <a class="dropdown-item{{ ($accion == 'RetornoSalida') ?' active' : '' }}" href="{{ route('airetornosalida', $nnaj->sis_nnaj_id) }}">Retorno de salidas y permisos con acudiente y/o representante legal</a>
                            @endif
                    <a class="dropdown-item{{ ($accion == 'cuesdast') ?' active' : '' }}" href="{{ route('cuesdast', $nnaj->sis_nnaj_id) }}">Cuestionario DAST (TEST DAST-10)</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Salud</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'Vspa') ?' active' : '' }}" href="{{ route('mitigacion.vspa', $dato->id) }}">Valoración del Riesgo por Consumo de SPA</a>
                    <a class="dropdown-item{{ ($accion == 'Vma') ?' active' : '' }}" href="{{ route('mitigacion.vma', $dato->id) }}">Valoración Medicina Alternativa</a>
                    <a class="dropdown-item{{ ($accion == 'vsmedicina') ?' active' : '' }}" href="{{ route('vsmedicina', $nnaj->sis_nnaj_id) }}">Valoración Medicina General</a>
                    <a class="dropdown-item{{ ($accion == 'vodontologia') ?' active' : '' }}" href="{{ route('vodontologia', $nnaj->sis_nnaj_id) }}">Valoración Odontología</a>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Socio Legal</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'Vspa') ?' active' : '' }}" href="{{ route('acasojur', $nnaj->sis_nnaj_id) }}">Atención Caso Jurídico</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Espiritualidad</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Educaci&oacute;n</a>
                <div class="dropdown-menu">
                    @if($nnaj->sis_nnaj->iMatriculaNnajs->count()>0)
                    @canany(['pruediag-leerxxxx', 'pruediag-crearxxx', 'pruediag-editarxx', 'pruediag-borrarxx', 'pruediag-activarx'])
                    <a class="dropdown-item{{ ($accion == 'Prueba') ?' active' : '' }}" href="{{ route('pruediag', $nnaj->sis_nnaj_id) }}">Prueba Diagnostica</a>
                    @endcanany
                    @endif
                    @if($nnaj->sis_nnaj->iMatriculaNnajs->count()>0||$nnaj->sis_nnaj->fi_formacions)
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('matricurso', $nnaj->sis_nnaj_id) }}">Matrícula Cursos Informales Formación Técnica Talleres</a>
                    @endif
                    @if($nnaj->sis_nnaj->MatriculaCursos->count()>0) 
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('formatov', $nnaj->sis_nnaj_id) }}">Formato Valoracion De Competencias </a>
                    @endif
                    @if($nnaj->nnaj_nacimi->Edad >= 14 && $nnaj->nnaj_nacimi->Edad < 29)
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('cgicuest', $nnaj->sis_nnaj_id) }}">Cuestionario de Gustos e Intereses</a>
                    @endif
                    @if($nnaj->nnaj_nacimi->Edad >= 14 && $nnaj->nnaj_nacimi->Edad < 29)
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('pvocacif', $nnaj->sis_nnaj_id) }}">Perfil vocacional formación técnica</a>
                    @endif
                    @if($nnaj->nnaj_nacimi->Edad >= 18 && $nnaj->nnaj_nacimi->Edad < 29)
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('ventrevista', $nnaj->sis_nnaj_id) }}">Valoración Terapia Ocupacional Entrevista Semiestructurada</a>
                    @endif
                    
                    @if($nnaj->nnaj_nacimi->Edad>= 18 && $nnaj->nnaj_nacimi->Edad < 29)
                    <a class="dropdown-item{{ ($accion == 'Vspa') ?' active' : '' }}" href="{{ route('fpoaplicacion-leer', $dato->id) }}">Formato Perfil d Ocupacional</a>
                    @endif


                    @if($nnaj->nnaj_nacimi->Edad >= 6 && $nnaj->nnaj_nacimi->Edad < 14)
                    <a class="dropdown-item{{ ($accion == 'is') ?' active' : '' }}" href="{{ route('vctocupa', $nnaj->sis_nnaj_id) }}">valoración y caracterización de NNA terapia ocupacional</a>
                    @endif
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Emprender</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'Vspa') ?' active' : '' }}" href="{{ route('egresosdb', $nnaj->sis_nnaj_id) }}">Seguimiento a Egreso</a>
                </div>
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
