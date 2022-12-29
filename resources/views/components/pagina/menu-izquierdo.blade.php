<div>
    <?php
    $puedexxx = ['17496705', '111111111111'];
    function getLi($permisox, $routexxx, $classxxx, $tituloxx)
    {
    ?>
        @canany($permisox)
        <li class="nav-item">
            <a href="{{ route($routexxx)}}" class="nav-link">
                <i class="{{$classxxx}}"></i>
                <p>{{$tituloxx}}</p>
            </a>
        </li>
        @endcanany
    <?php
    }
    ?>
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
                <?php getLi('fidatbas-leer', 'fidatbas', "nav-icon fas fa-user-plus", 'Ficha de Ingreso') ?>
                <?php getLi('cargdocu-modulo', 'cargdocu', "fas fa-chess-pawn nav-icon", 'Documentación del beneficiario') ?>
                <?php getLi('actamodu-moduloxx', 'actaencu', "fas fa-address-card nav-icon", 'Acta de Encuentro') ?>
                <?php getLi('direccionmodulo-modulo', 'direccionmodulo', "fas fa-building nav-icon", 'Direccionamiento y Referenciación') ?>
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
                <?php getLi('accindiv-modulo', 'ai', "fas fa-child nav-icon", 'Individuales') ?>
                @canany(['accigrup-modulo'])
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Grupales
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php getLi('taccform-modulo', 'taccform', "fas fa-check nav-icon", 'Talleres y/o Acciones Formativas') ?>
                        <?php getLi('fosfichaobservacion-leer', 'fosfichaobservacion', "fas fa-home nav-icon", 'Ficha de Observación y/o seguimiento') ?>
                        <?php getLi('aisalidamayores-leer', 'aisalidamayores', "fas fa-home nav-icon", 'Registro De Permisos De Adolescentes Y/O Jóvenes') ?>
                        <?php getLi('imatricula-leer', 'imatricula', "fas fa-home nav-icon", 'Inscripción Y Entrega De Matricula') ?>
                        <?php getLi('traslado-leer', 'traslado', "fas fa-home nav-icon", 'Traslados Entre UPIS/Egreso O Reasignación De Talleres') ?>
                        @can('planasis-moduloxx')
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="fas fa-tasks nav-icon"></i>
                                <p>Planilla de Asistencias</p> <!-- <--ASISTENCIA DIARIA MODULO CON RUTA   -->
                            </a>
                            <ul class="nav nav-treeview">
                                <?php getLi('assemodu-moduloxx', 'asissema', "fas fa-tasks nav-icon", 'Asistencia Semanal a Formación, Práctica o Convenios') ?>
                                <?php getLi('diarmodu-moduloxx', 'diariaxx', "fas fa-tasks nav-icon", 'Asistencia Diaria') ?>
                            </ul>
                        </li>
                        @endcan
                        <?php getLi('gemamodu-moduloxx', 'gestmaca', "fas fa-home nav-icon", 'Gestión de matrícula academia') ?>
                    </ul>
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
                        <?php getLi('fosadmin-modulo', 'fosadmin', "fas fa-compass nav-icon", 'Administración Tipo y Subtipo de Seguimiento') ?>
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
                @include('layouts.menus.talleres')
                @endcanany
                @canany(['actenadm-moduloxx'])
                @include('layouts.menus.actaencuentro')
                @endcanany
                @canany(['sistemax-modulo'])
                @include('layouts.menus.sistema')
                @endcanany
                @canany(['ayuda-modulo'])
                @include('layouts.menus.admayuda')
                @endcanany
                @canany(['tipoatencion-modulo'])
                @include('layouts.menus.intervencion')
                @endcanany
                {{-- @endcanany --}}
                @canany(['motivoadmin-modulo'])
                @include('layouts.menus.motivos')
                @endcanany
                @canany(['planasds-admimodu'])
                @include('layouts.menus.adminplanasds')
                @endcanany
                @canany(['direcadmin-modulo'])
                @include('layouts.menus.direccionamiento')
                @endcanany
                <!-- @canany(['matriculaadmin-modulo'])
            @include('layouts.menus.matricula')
        @endcanany -->
                @canany(['cuestionarioadmin-moduloxx'])
                @include('layouts.menus.admincuestionario')
                @endcanany
                @canany(['saludmodulo-modulo'])
                @include('layouts.menus.salud')
                @endcanany
                @include('layouts.menus.educacion')
                @include('layouts.menus.sicosocial')
            </ul>
        </li>

        @endcanany
        <!-- FIN ADMINISTRACION -->

        <!-- INDICADORES -->
        @canany(['indicadores-modulo'])
        @include('layouts.menus.indicadores')
        @endcanany

        <!-- FIN INDICADORES -->
        <!-- REPORTES -->
        @canany(['reportes-modulo'])
        @include('layouts.menus.reportes')
        @endcanany
        <!-- FIN REPORTES -->
    </ul>
</div>