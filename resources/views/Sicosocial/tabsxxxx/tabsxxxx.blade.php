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
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='3. Relaciones familiares';
            $permisox='vsirefam';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='4. Violencias y condición especial';
            $permisox='vsiviole';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='5. Dinámica familiar';
            $permisox='vsidinam';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')
            <?php
            $pestania='6. Relaciones sociales';
            $permisox='vsirelac';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='7. Redes sociales de apoyo';
            $permisox='vsiredes';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='8. Antecedentes';
            $permisox='vsiantec';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='9. Generación de ingresos';
            $permisox='vsigener';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='10. Educación';
            $permisox='vsieduca';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='11. Antecedentes de salud';
            $permisox='vsisalud';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='12. Estado emocional';
            $permisox='vsiemoci';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='13. Activación emocional';
            $permisox='vsiactiv';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='14. Presunto abuso sexual';
            $permisox='vsiabuso';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='15. Situación especial y ESCNNA';
            $permisox='vsisitua';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='16. Consumo de sustancias psicoactivas';
            $permisox='vsiconsu';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='17. Factores';
            $permisox='vsifacto';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='18. Potencialidades y metas';
            $permisox='vsimetas';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='19. Áreas de ajuste sicosocial';
            $permisox='vsiareas';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='20. Impresicón diagnóstica y análisis social';
            $permisox='vsisocia';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania='21. Consentimiento informado';
            $permisox='vsiconse';
            $checkxxx=$todoxxxx['vsixxxxx']->VsiDatosVincula->where('sis_esta_id', 1)->count();
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
                @if(isset($roleusua))
                {{ $roleusua }}
                @endif
                @if(isset($contrase))
                {{ $contrase }}
                @endif
            </div>
        </div>
    </div>
</div>
