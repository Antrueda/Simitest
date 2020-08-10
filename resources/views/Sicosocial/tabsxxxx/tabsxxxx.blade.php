<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @if($todoxxxx['pestpadr']==1)
            @canany(['vsinnajs-leer', 'vsinnajs-crear', 'vsinnajs-editar', 'vsinnajs-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsinnajs') ?' active' : '' }}
        text-sm" href="{{ route('vsinnajs') }}">NNAJS</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==2)
            @canany(['vsinnajs-leer', 'vsinnajs-crear', 'vsinnajs-editar', 'vsinnajs-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsinnajs') ?' active' : '' }}
        text-sm" href="{{ route('vsinnajs') }}">NNAJ</a></li>
            @endcanany
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
        text-sm" href="{{ route('vsixxxxx',$todoxxxx['parametr']) }}">VSIS</a></li>
            @endcanany
            @endif
            @if($todoxxxx['pestpadr']==3)
            @canany(['vsinnajs-leer', 'vsinnajs-crear', 'vsinnajs-editar', 'vsinnajs-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsinnajs') ?' active' : '' }}
        text-sm" href="{{ route('vsinnajs') }}">NNAJ</a></li>
            @endcanany
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
        text-sm" href="{{ route('vsixxxxx',$todoxxxx['parametr']) }}">VSIS</a></li>
            @endcanany
            <?php
            $pestania='1. Datos básicos';
            $permisox='vsidabas';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();

            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheckbasico')

            <?php
            $pestania='2. Motivos de vinculación y bienvenida';
            $permisox='vsibienv';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiBienvenida->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='3. Relaciones familiares';
            $permisox='vsirefam';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiRelFamiliar->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='4. Violencias y condición especial';
            $permisox='vsiviole';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiViolencia->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='5. Dinámica familiar';
            $permisox='vsidinam';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDinFamiliar->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')
            <?php
            $pestania='6. Relaciones sociales';
            $permisox='vsirelac';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiRelSociale->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='7. Redes sociales de apoyo';
            $permisox='vsiredes';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiRedSocial->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='8. Antecedentes';
            $permisox='vsiantec';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiAntecedente->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='9. Generación de ingresos';
            $permisox='vsigener';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiGenIngreso->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='10. Educación';
            $permisox='vsieduca';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiEducacion->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='11. Antecedentes de salud';
            $permisox='vsisalud';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiSalud->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='12. Estado emocional';
            $permisox='vsiemoci';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiEstEmocional->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='13. Activación emocional';
            $permisox='vsiactiv';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiActEmocional->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='14. Presunto abuso sexual';
            $permisox='vsiabuso';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiAbuSexual->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='15. Situación especial y ESCNNA';
            $permisox='vsisitua';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiSitEspecial->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='16. Consumo de sustancias psicoactivas';
            $permisox='vsiconsu';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiConsumo->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            @canany(['vsifacto-factorxx'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsifacto') ?' active' : '' }}
        text-sm" href="{{ route('vsifacto.factorxx',$todoxxxx['parametr']) }}">17. Factores</a></li>
            @endcanany

            @canany(['vsimetas-metaxxxx'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsimetas') ?' active' : '' }}
        text-sm" href="{{ route('vsimetas.metaxxxx',$todoxxxx['parametr']) }}">18. Potencialidades y metas</a></li>
            @endcanany


            <?php
            $pestania='19. Áreas de ajuste sicosocial';
            $permisox='vsiareas';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='20. Impresicón diagnóstica y análisis social';
            $permisox='vsisocia';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiConcepto->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='21. Consentimiento informado';
            $permisox='vsiconse';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiConsentimiento->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            @endif
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">

                @if(isset($vsinnajs))
                {{ $vsinnajs }}
                @endif
                @if(isset($vsixxxxx))
                {{ $vsixxxxx }}
                @endif
                @if(isset($vsidabas))
                {{ $vsidabas }}
                @endif
                @if(isset($vsibienv))
                {{ $vsibienv }}
                @endif
                @if(isset($vsirefam))
                {{ $vsirefam }}
                @endif
                @if(isset($vsiviole))
                {{ $vsiviole }}
                @endif
                @if(isset($vsidinam))
                {{ $vsidinam }}
                @endif

                @if(isset($vsirelac))
                {{ $vsirelac }}
                @endif
                @if(isset($vsiredes))
                {{ $vsiredes }}
                @endif
                @if(isset($vsiantec))
                {{ $vsiantec }}
                @endif
                @if(isset($vsigener))
                {{ $vsigener }}
                @endif
                @if(isset($vsieduca))
                {{ $vsieduca }}
                @endif
                @if(isset($vsisalud))
                {{ $vsisalud }}
                @endif
                @if(isset($vsiemoci))
                {{ $vsiemoci }}
                @endif
                @if(isset($vsiactiv))
                {{ $vsiactiv }}
                @endif
                @if(isset($vsiabuso))
                {{ $vsiabuso }}
                @endif
                @if(isset($vsisitua))
                {{ $vsisitua }}
                @endif
                @if(isset($vsiconsu))
                {{ $vsiconsu }}
                @endif
                @if(isset($vsifacto))
                {{ $vsifacto }}
                @endif
                @if(isset($vsimetas))
                {{ $vsimetas }}
                @endif
                @if(isset($vsiareas))
                {{ $vsiareas }}
                @endif
                @if(isset($vsisocia))
                {{ $vsisocia }}
                @endif
                @if(isset($vsiconse))
                {{ $vsiconse }}
                @endif
            </div>
        </div>
    </div>
</div>
