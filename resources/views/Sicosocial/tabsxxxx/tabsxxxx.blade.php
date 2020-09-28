<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">

            @if($todoxxxx['pestpadr']==2)
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
            text-sm" href="{{ route('vsixxxxx',$todoxxxx['usuariox']) }}">Valoracion Sicosocial</a></li>
            @endcanany
            @endif
            @if($todoxxxx['pestpadr']==3)
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
        text-sm" href="{{ route('vsixxxxx',$todoxxxx['usuariox']) }}">Valoracion Sicosocial</a></li>
            @endcanany
            @canany(['vsidabas-editar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsidabas') ?' active' : '' }}
        text-sm" href="{{ route('vsidabas.editar',$todoxxxx['parametr']) }}">Datos Basicos</a></li>
            @endcanany
 
            <?php
            $pestania='2. Motivos de vinculación y bienvenida';
            $permisox='vsibienv';
           $checkxxx=$todoxxxx['vsixxxxx']->VsiBienvenida;
            ?>
                 @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='3. Relaciones familiares';
            $permisox='vsirefam';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiRelFamiliar;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='4. Violencias y condición especial';
            $permisox='vsiviole';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiViolencia;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='5. Dinámica familiar';
            $permisox='vsidinam';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDinFamiliar;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')
            <?php
            $pestania='6. Relaciones sociales';
            $permisox='vsirelac';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiRelSociale;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='7. Redes sociales de apoyo';
            $permisox='vsiredes';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiRedSocial;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='8. Antecedentes';
            $permisox='vsiantec';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiAntecedente;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='9. Generación de ingresos';
            $permisox='vsigener';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiGenIngreso;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='10. Educación';
            $permisox='vsieduca';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiEducacion;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='11. Antecedentes de salud';
            $permisox='vsisalud';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiSalud;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='12. Estado emocional';
            $permisox='vsiemoci';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiEstEmocional;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='13. Activación emocional';
            $permisox='vsiactiv';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiActEmocional;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='14. Presunto abuso sexual';
            $permisox='vsiabuso';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiAbuSexual;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='15. Situación especial y ESCNNA';
            $permisox='vsisitua';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiSitEspecial;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='16. Consumo de sustancias psicoactivas';
            $permisox='vsiconsu';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiConsumo;
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
            $checkxxx=$todoxxxx['vsixxxxx']->Areajuste;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheckarea')

            <?php
         
            $pestania='20. Impresicón diagnóstica y análisis social';
            $permisox='vsisocia';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiConcepto;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='21. Consentimiento informado';
            $permisox='vsiconse';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiConsentimiento;
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
