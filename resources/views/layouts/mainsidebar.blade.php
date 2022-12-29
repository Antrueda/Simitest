<?php
$puedexxx = ['17496705', '111111111111'];

?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('/') }}" class="brand-link">
        <img src="{{ asset('img/favicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIMI</span>
    </a>
    <!-- Brand Logo -->

    <!-- Sidebar -->
    @auth
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
        <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">



        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->


            <!-- TERRITORIO -->
            @canany(['territorio-modulo'])
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-globe-americas"></i>
                    <p>
                        Territorio
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @canany(['fidatbas-leer'])

                    <li class="nav-item">
                        <a href="{{ route('fidatbas')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Ficha de Ingreso</p>
                        </a>
                    </li>

                    @endcanany
                    @can('cargdocu-modulo')
                    <li class="nav-item">
                        <a href="{{ route('cargdocu') }}" class="nav-link">
                            <i class="fas fa-chess-pawn nav-icon"></i>
                            <p>Documentación del beneficiario</p>
                        </a>
                    </li>
                    @endcan

                    @can('actamodu-moduloxx')
                    <li class="nav-item">
                        <a href="{{ route('actaencu') }}" class="nav-link">
                            <i class="fas fa-address-card nav-icon"></i>
                            <p>Acta de Encuentro</p>
                        </a>
                    </li>
                    @endcan
                    @can('direccionmodulo-modulo')
                    <li class="nav-item">
                        <a href="{{ route('direccionmodulo') }}" class="nav-link">
                            <i class="fas fa-building nav-icon"></i>
                            <p>Direccionamiento y Referenciación</p>
                        </a>
                    </li>
                    @endcan

                </ul>
            </li>
            @endcanany
            <!-- FIN TERRITORIO -->
            <!-- ACCIONES -->
            @canany(['acciones-modulo'])
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-clipboard-check"></i>
                    <p>
                        Acciones
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @canany(['accindiv-modulo'])
                    <li class="nav-item">
                        <a href="{{ route('ai') }}" class="nav-link">
                            <i class="fas fa-child nav-icon"></i>
                            <p>Individuales</p>
                        </a>
                    </li>
                    @endcanany
                    @canany(['accigrup-modulo'])
                    <li class="nav-item">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Grupales
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            @can('taccform-modulo')
                            <li class="nav-item">
                                <a href="{{ route('taccform') }}" class="nav-link">
                                    <i class="fas fa-check nav-icon"></i>
                                    <p>Talleres y/o Acciones Formativas</p>
                                </a>
                            </li>
                            @endcan
                            @can('fosfichaobservacion-leer')
                            <li class="nav-item">
                                <a href="{{ route('fosfichaobservacion')}}" class="nav-link">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Ficha de Observación y/o seguimiento</p>
                                </a>
                            </li>
                            @endcan
                            @can('aisalidamayores-leer')
                            <li class="nav-item">
                                <a href="{{ route('aisalidamayores')}}" class="nav-link">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Registro De Permisos De Adolescentes Y/O Jóvenes</p>
                                </a>
                            </li>
                            @endcan




                            {{-- @if(in_array(Auth::user()->s_documento,['17496705','1090412429']))--}}
                            @can('imatricula-leer')
                            <li class="nav-item">
                                <a href="{{ route('imatricula')}}" class="nav-link">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Inscripción Y Entrega De Matricula</p>
                                </a>
                            </li>
                            @endcan
                            {{-- @endif --}}

                            {{-- @if(in_array(Auth::user()->s_documento,['17496705','1090412429'])) --}}

                            @can('traslado-leer')
                            <li class="nav-item">
                                <a href="{{ route('traslado')}}" class="nav-link">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Traslados Entre UPIS/Egreso O Reasignación De Talleres</p>
                                </a>
                            </li>

                            @endcan
                            {{-- @endif --}}








                            @can('planasis-moduloxx')
                            <li class="nav-item has-treeview">
                                <a href="" class="nav-link">
                                    <i class="fas fa-tasks nav-icon"></i>
                                    <p>Planilla de Asistencias</p> <!-- <--ASISTENCIA DIARIA MODULO CON RUTA   -->

                                </a>
                                <ul class="nav nav-treeview">
                                    @can('assemodu-moduloxx')
                                    <li class="nav-item">
                                        <a href="{{ route('asissema') }}" class="nav-link">
                                            <i class="fas fa-tasks nav-icon"></i>
                                            <p>Asistencia Semanal a Formación, Práctica o Convenios</p>
                                        </a>
                                    </li>
                                    @endcan
                                    @can('diarmodu-moduloxx')
                                    <li class="nav-item">
                                        <a href="{{ route('diariaxx') }}" class="nav-link">
                                            <i class="fas fa-tasks nav-icon"></i>
                                            <p>Asistencia Diaria</p>
                                        </a>
                                    </li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan
                            @can('gemamodu-moduloxx')
                            <li class="nav-item">
                                <a href="{{ route('gestmaca')}}" class="nav-link">
                                    <i class="fas fa-home nav-icon"></i>
                                    <p>Gestión de matrícula academia</p>
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </li>
            </li>
            @endcanany
        </ul>
        </li>

        @endcanany


        @canany(['administracion-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tools"></i>
                <p>
                    Administración
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
                @canany(['fosadmin-modulo'])
                @can('fos-admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Ficha de Observación y/o seguimiento
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('fosadmin-modulo')
                        <li class="nav-item">
                            <a href="{{ route('fosadmin') }}" class="nav-link">
                                <i class="fas fa-compass nav-icon"></i>
                                <p>Administración Tipo y Subtipo de Seguimiento</p>
                            </a>
                        </li>
                        @endcan
                        {{--@can('fos-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fostipo') }}" class="nav-link">
                        <i class="fas fa-compass nav-icon"></i>
                        <p>Tipo de Seguimiento</p>
                        </a>
                </li>
                @endcan
                @can('fos-sub-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fossubtipo') }}" class="nav-link">
                        <i class="far fa-compass nav-icon"></i>
                        <p>Sub Tipo de Seguimiento</p>
                    </a>
                </li>
                @endcan --}}
            </ul>
        </li>
        @endcan
        @endcanany
        @canany(['indiadmi-modulo'])

        @if(in_array(Auth::user()->s_documento,$puedexxx))
        @can('indimodu-moduloxx')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Indicadores
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                {{-- @can('inpreguntas-leer')
         <li class="nav-item">
             <a href="{{ route('pr') }}" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Peguntas</p>
                </a>
        </li>
        @endcan
        @can('inlineabase-leer')
        <li class="nav-item">
            <a href="{{ route('li') }}" class="nav-link">
                <i class="fas fa-check nav-icon"></i>
                <p>Líneas Base</p>
            </a>
        </li>
        @endcan
        @can('fsoporte-leer')
        <li class="nav-item">
            <a href="{{ route('fsoporte') }}" class="nav-link">
                <i class="fas fa-chess-pawn nav-icon"></i>
                <p>Funtes Soporte</p>
            </a>
        </li>
        @endcan --}}

        <li class="nav-item">
            <a href="{{ route('indimodu') }}" class="nav-link">
                <i class="fas fa-sitemap nav-icon"></i>
                <p>Indicadores</p>
            </a>
        </li>


        </ul>
        </li>
        @endcan
        @endif
        @endcanany
        @canany(['motaller-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tools"></i>
                <p>
                    Talleres
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
                @can('siseslug-leer')
                <li class="nav-item">
                    <a href="{{ route('siseslug') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Espacio/Lugar</p>
                    </a>
                </li>
                @endcan
                @can('agtema-leer')
                <li class="nav-item">
                    <a href="{{ route('ag.tema') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Tema</p>
                    </a>
                </li>
                @endcan
                @can('depeluga-leer')
                <li class="nav-item">
                    <a href="{{ route('depeluga') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Dependencia E/L</p>
                    </a>
                </li>
                @endcan
                @can('agtaller-leer')
                <li class="nav-item">
                    <a href="{{ route('agrtaller.temas') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Taller</p>
                    </a>
                </li>
                @endcan
                @can('agsubtema-leer')
                <li class="nav-item">
                    <a href="{{ route('agsubt.talleres') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Subtema Taller</p>
                    </a>
                </li>
                @endcan
                @can('agdependencia-leer')
                <li class="nav-item">
                    <a href="{{ route('ag.depe') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Dependencia</p>
                    </a>
                </li>
                @endcan
                @can('agcontexto-leer')
                <li class="nav-item">
                    <a href="{{ route('agcontexto') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Contexto Pedagógico</p>
                    </a>
                </li>
                @endcan
                @can('agrecurso-leer')
                <li class="nav-item">
                    <a href="{{ route('agrecurso') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Recurso</p>
                    </a>
                </li>
                @endcan
                @can('agconvenio-leer')
                <li class="nav-item">
                    <a href="{{ route('ag.conv') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Convenio</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcanany
        @canany(['actenadm-moduloxx'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tools"></i>
                <p>
                    Acta de encuentro
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('actenadm') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Administración Acta de encuentro</p>
                    </a>
                </li>

            </ul>
        </li>

        @endcanany
        @canany(['sistemax-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tools"></i>
                <p>
                    Sistema
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
                @can('areaxxxx-leer')
                <li class="nav-item">
                    <a href="{{ route('areaxxxx') }}" class="nav-link">
                        <i class="fas fa-door-open nav-icon"></i>
                        <p>&Aacute;reas</p>
                    </a>
                </li>
                @endcan
                @can('servicio-leer')
                <li class="nav-item">
                    <a href="{{ route('servicio') }}" class="nav-link">
                        <i class="fas fa-door-open nav-icon"></i>
                        <p>Servicios</p>
                    </a>
                </li>
                @endcan
                @can('dependencia-leer')
                <li class="nav-item">
                    <a href="{{ route('dependencia') }}" class="nav-link">
                        <i class="fas fa-door-open nav-icon"></i>
                        <p>Dependencia</p>
                    </a>
                </li>
                @endcan
                @can('estausua-leer')
                <li class="nav-item">
                    <a href="{{ route('estausua') }}" class="nav-link">
                        <i class="fas fa-door-open nav-icon"></i>
                        <p>Justificaciones (Estado)</p>
                    </a>
                </li>
                @endcan
                @can('actividadproceso-leer')
                <li class="nav-item">
                    <a href="{{ route('actividadproceso')}}" class="nav-link">
                        <i class="fas fa-microchip nav-icon"></i>
                        <p>Actividad Proceso</p>
                    </a>
                </li>
                @endcan
                @can('usuario-leer')
                <li class="nav-item">
                    <a href="{{ route('usuario')}}" class="nav-link">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                @endcan
                @can('rolesxxx-leer')
                <li class="nav-item">
                    <a href="{{ route('rolesxxx')}}" class="nav-link">
                        <i class="fas fa-user-lock nav-icon"></i>
                        <p>Roles</p>
                    </a>
                </li>
                @endcan
                @if(in_array(Auth::user()->s_documento,['17496705','111111111111','1090412429', '1032443628']))
                @can('permiso-leer')
                <li class="nav-item">
                    <a href="{{ route('permiso')}}" class="nav-link">
                        <i class="far fa-user-circle nav-icon"></i>
                        <p>Permisos</p>
                    </a>
                </li>
                @endcan
                @endif
                @can('actividad-leer')
                <li class="nav-item">
                    <a href="{{ route('actividad') }}" class="nav-link">
                        <i class="fas fa-angle-double-right nav-icon"></i>
                        <p>Actividades</p>
                    </a>
                </li>
                @endcan
                @can('proceso-leer')
                <li class="nav-item">
                    <a href="{{ route('proceso') }}" class="nav-link">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p>Procesos</p>
                    </a>
                </li>
                @endcan
                @can('mapaProceso-leer')
                <li class="nav-item">
                    <a href="{{ route('mapaProceso') }}" class="nav-link">
                        <i class="fas fa-project-diagram nav-icon"></i>
                        <p>Mapa de procesos</p>
                    </a>
                </li>
                @endcan
                @can('entidad-leer')
                <li class="nav-item">
                    <a href="{{ route('entidad') }}" class="nav-link">
                        <i class="far fa-building nav-icon"></i>
                        <p>Entidades</p>
                    </a>
                </li>
                @endcan
                <!-- @can('tema-leer')
         <li class="nav-item">
             <a href="{{ route('tema') }}" class="nav-link">
                 <i class="far fa-object-group nav-icon"></i>
                 <p>Tema</p>
             </a>
         </li>
         @endcan -->

                @can('temamodu-modulo')
                <li class="nav-item">
                    <a href="{{ route('temamodu') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Temas</p>
                    </a>
                </li>
                @endcan

                <!-- @canany(['parametro-leer'])
         <li class="nav-item">
             <a href="{{ route('parametro') }}" class="nav-link">
                 <i class="fas fa-chess-pawn nav-icon"></i>
                 <p>Par&aacute;metro</p>
             </a>
         </li>
         @endcanany -->

                @can('siscargo-leer')
                <li class="nav-item">
                    <a href="{{ route('sis.cargo') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Cargo</p>
                    </a>
                </li>
                @endcan
                @can('alertas-leer')
                <li class="nav-item">
                    <a href="{{ route('alertas') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Alertas</p>
                    </a>
                </li>
                @endcan
                @can('alertas-leer')
                <li class="nav-item">
                    <a href="{{ route('mensajes') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Mensaje</p>
                    </a>
                </li>
                @endcan
                @can('eps-leer')
                <li class="nav-item">
                    <a href="{{ route('eps') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Eps</p>
                    </a>
                </li>
                @endcan
                @can('diafesti-leer')
                <li class="nav-item">
                    <a href="{{ route('diafesti') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>D&iacute;as Festivos</p>
                    </a>
                </li>
                @endcan
                {{-- @if(Auth::user()->id == 1) --}}
                @can('ubicacio-modulo')
                <li class="nav-item">
                    <a href="{{ route('ubicacio') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Ubicación</p>
                    </a>
                </li>
                @endcan
                {{-- @endif --}}

                @can('textosadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('textosadmin') }}" class="nav-link">
                        <i class="fas fa-chess-pawn nav-icon"></i>
                        <p>Textos</p>
                    </a>
                </li>
                @endcan

            </ul>
        </li>

        @endcanany
        @canany(['ayuda-modulo'])
        <li class="nav-item has-treeview">
            <a href="{{ route('ayuda.index') }}" class="nav-link">
                <i class="nav-icon fas fa-question"></i>
                <p>
                    Ayuda
                </p>
            </a>
        </li>

        @endcanany
        @canany(['tipoatencion-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-clipboard-list nav-icon"></i>
                <p>
                    Administración Intervenciones
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('tipoatencion-modulo')
                <li class="nav-item">
                    <a href="{{ route('tipoatencion.index') }}" class="nav-link">
                        <i class="fas fa-list-ul nav-icon"></i>
                        <p>Tipo Atención</p>
                    </a>
                </li>
                @endcan
            </ul>
            {{-- @endcan --}}
            {{-- @can('fos-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fostipo') }}" class="nav-link">
            <i class="fas fa-compass nav-icon"></i>
            <p>Tipo de Seguimiento</p>
            </a>
        </li>
        @endcan
        @can('fos-sub-tipo-admin')
        <li class="nav-item">
            <a href="{{ route('fossubtipo') }}" class="nav-link">
                <i class="far fa-compass nav-icon"></i>
                <p>Sub Tipo de Seguimiento</p>
            </a>
        </li>
        @endcan --}}
        </li>
        @endcanany
        {{-- @endcanany --}}
        @canany(['motivoadmin-modulo'])
        @can('fos-admin')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Administracion de Traslado/Egreso
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('motivoadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('motivoadmin') }}" class="nav-link">
                        <i class="fas fa-compass nav-icon"></i>
                        <p>Administración Motivos de Egreso</p>
                    </a>
                </li>
                @endcan
                {{--@can('fos-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fostipo') }}" class="nav-link">
                <i class="fas fa-compass nav-icon"></i>
                <p>Tipo de Seguimiento</p>
                </a>
        </li>
        @endcan
        @can('fos-sub-tipo-admin')
        <li class="nav-item">
            <a href="{{ route('fossubtipo') }}" class="nav-link">
                <i class="far fa-compass nav-icon"></i>
                <p>Sub Tipo de Seguimiento</p>
            </a>
        </li>
        @endcan --}}
        </ul>
        </li>
        @endcan
        @endcanany
        @canany(['planasds-admimodu'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                    Administración Planillas
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('planasds-admimodu')
                <li class="nav-item">
                    <a href="{{ route('aasdtiac') }}" class="nav-link">
                        <i class="fas fa-tools nav-icon"></i>
                        <p>Actividades Diarias</p>
                    </a>
                </li>
                @endcan
                @can('planasds-admimodu')
                <li class="nav-item">
                    <a href="{{ route('admitiac') }}" class="nav-link">
                        <i class="fas fa-tools nav-icon"></i>
                        <p>Actividades Semanal</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcanany
        @canany(['direcadmin-modulo'])
        @can('direcadmin-modulo')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-caret-square-down nav-icon"></i>
                <p>
                    Administración Direccionamiento y Referenciación
                    <i class="fas fa-caret-square-down"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('direcadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('direcadmin') }}" class="nav-link">
                        <i class="fas fa-angle-double-right nav-icon"></i>
                        <p>Administración Entidad y Programa</p>
                    </a>
                </li>
                @endcan
                {{--@can('fos-tipo-admin')
                <li class="nav-item">
                    <a href="{{ route('fostipo') }}" class="nav-link">
                <i class="fas fa-compass nav-icon"></i>
                <p>Tipo de Seguimiento</p>
                </a>
        </li>
        @endcan
        @can('fos-sub-tipo-admin')
        <li class="nav-item">
            <a href="{{ route('fossubtipo') }}" class="nav-link">
                <i class="far fa-compass nav-icon"></i>
                <p>Sub Tipo de Seguimiento</p>
            </a>
        </li>
        @endcan --}}
        </ul>
        </li>
        @endcan
        @endcanany
        <!-- @canany(['matriculaadmin-modulo'])
            @include('layouts.menus.matricula')
        @endcanany -->
        @canany(['cuestionarioadmin-moduloxx'])
        @can('fos-admin')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Administracion de Cuestionario
                    <i class="fas fa-school-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('cuestionarioadmin-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('cgimodu') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Cuestionario</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @endcanany
        @canany(['saludmodulo-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-first-aid nav-icon"></i>

                <p> Administracion de Salud</p>
            </a>
            <ul class="nav nav-treeview">
                @can('saludmodulo-modulo')
                <li class="nav-item">
                    <a href="{{ route('saludmodulo') }}" class="nav-link">
                        <i class="fas fa-ambulance nav-icon"></i>
                        <p>Administración Salud</p>
                    </a>
                </li>
                @endcan
            </ul>

        </li>
        @endcanany
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Administracion de Educación
                    <i class="fas fa-school-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('edaprudi-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('edaprudi') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Prueba Diagnóstica</p>
                    </a>
                </li>
                @endcan
            </ul>

            <ul class="nav nav-treeview">
                @can('edaprudi-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('cgimodu-modulo') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Gustos,Intereses</p>
                    </a>
                </li>
                @endcan
            </ul>

            <ul class="nav nav-treeview">
                @can('edaprudi-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('perfilocupacionalcomponentes') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Perfil Ocupacional</p>
                    </a>
                </li>
                @endcan
            </ul>
            <ul class="nav nav-treeview">
                @can('apvfmodu-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('apvfarea') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Perfil Vocacional</p>
                    </a>
                </li>
                @endcan
            </ul>
            <ul class="nav nav-treeview">
                @can('matriculaadmin-modulo')
                <li class="nav-item">
                    <a href="{{ route('matriculaadmin') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Matrícula</p>
                    </a>
                </li>
                @endcan
            </ul>

            <ul class="nav nav-treeview">
                @can('cursosmodulosm-modulo')
                <li class="nav-item">
                    <a href="{{ route('cursosmodulosm') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Matrícula Cursos Talleres</p>
                    </a>
                </li>
                @endcan
            </ul>
            <ul class="nav nav-treeview">
                @can('avctmodu-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('avctarea') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Valoración y caracterización T.O</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Administracion de Sicosocial
                    <i class="fas fa-school-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('adastmod-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('adastmod') }}" class="nav-link">
                        <i class="fas fa-school nav-icon"></i>
                        <p>Administración Cuestionario DAST</p>
                    </a>
                </li>
                @endcan
            </ul>

        </li>
        @endcanany
        <!-- FIN ADMINISTRACION -->

        <!-- INDICADORES -->
        @canany(['indicadores-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Indicadores
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('ingrupal-leer')
                <li class="nav-item">
                    <a href="{{ route('gru') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Grupales</p>
                    </a>
                </li>
                @endcan
                @can('inindividual-leer')
                <li class="nav-item">
                    <a href="{{ route('ind') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Individuales</p>
                    </a>
                </li>
                @endcan



                @can('indimodu-moduloxx')
                <li class="nav-item">
                    <a href="{{ route('indimodu') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Individuales Verónica</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcanany

        <!-- FIN INDICADORES -->
        <!-- REPORTES -->
        @canany(['reportes-modulo'])
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Reportes
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @can('excel-leer')
                <li class="nav-item">
                    <a href="{{ route('excel') }}" class="nav-link">
                        <i class="fas fa-check nav-icon"></i>
                        <p>Reportes</p>
                    </a>
                </li>
                @endcan
            </ul>
        </li>

        @endcanany
        <!-- FIN REPORTES -->
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    @endauth
    <!-- /.sidebar -->
</aside>