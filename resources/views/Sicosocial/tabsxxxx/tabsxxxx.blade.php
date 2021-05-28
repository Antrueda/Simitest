<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">

            @canany(['aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='aiindex') ?' active' : '' }}
        text-sm" href="{{ route('ai.ver',$todoxxxx['usuariox']->sis_nnaj_id) }}">INDIVIDUALES</a></li>
            @endcanany
            @if($todoxxxx['pestpadr']==2)
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
            text-sm" href="{{ route('vsixxxxx',$todoxxxx['usuariox']->sis_nnaj_id) }}">VALORACIÓN SICOSOCIAL</a></li>
            @endcanany
            @endif
            @if($todoxxxx['pestpadr']==3)
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
        text-sm" href="{{ route('vsixxxxx',$todoxxxx['usuariox']->sis_nnaj_id) }}">VALORACIÓN SICOSOCIAL</a></li>
            @endcanany



            <?php
            $checkxxx = $todoxxxx['vsixxxxx']->VsiDatosVinculaUno;
            ?>
            @canany(['vsidabas-editar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsidabas') ?' active' : '' }}
        text-sm" href="{{ route('vsidabas.editar',$todoxxxx['parametr']) }}">DATOS BÁSICOS
                    @if(isset($checkxxx->id))
                    <span class="fas fa-check text-success" aria-hidden="true"></span>
                    @else
                    <span class="fas fa-times text-danger" aria-hidden="true"></span>
                    @endif
                </a>


            </li>
            @endcanany





            <?php
            $pestania = '2. MOTIVOS DE VINCULACIÓN Y BIENVENIDA';
            $permisox = 'vsibienv';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiBienvenida;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '3. RELACIONES FAMILIARES';
            $permisox = 'vsirefam';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiRelFamiliar;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '4. VIOLENCIAS Y CONDICIÓN ESPECIAL';
            $permisox = 'vsiviole';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiViolencia;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '5. DINÁMICA FAMILIAR';
            $permisox = 'vsidinam';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiDinFamiliar;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')
            <?php
            $pestania = '6. RELACIONES SOCIALES';
            $permisox = 'vsirelac';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiRelSociale;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '7. REDES SOCIALES DE APOYO';
            $permisox = 'vsiredes';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiRedSocial;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '8. ANTECEDENTES';
            $permisox = 'vsiantec';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiAntecedente;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '9. GENERACIÓN DE INGRESOS';
            $permisox = 'vsigener';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiGenIngreso;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '10. EDUCACIÓN';
            $permisox = 'vsieduca';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiEducacion;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '11. ANTECEDENTES DE SALUD';
            $permisox = 'vsisalud';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiSalud;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '12. ESTADO EMOCIONAL';
            $permisox = 'vsiemoci';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiEstEmocional;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '13. ACTIVACIÓN EMOCIONAL';
            $permisox = 'vsiactiv';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiActEmocional;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '14. PRESUNTO ABUSO SEXUAL';
            $permisox = 'vsiabuso';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiAbuSexual;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '15. SITUACIÓN ESPECIAL Y ESCNNA';
            $permisox = 'vsisitua';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiSitEspecial;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '16. CONSUMO DE SUSTANCIAS PSICOACTIVAS';
            $permisox = 'vsiconsu';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiConsumo;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')
            <?php
            $checkxx1 = $todoxxxx['vsixxxxx']->VsiFacProtectorUno;
            $checkxx2 = $todoxxxx['vsixxxxx']->VsiFacRiesgoUno;
            ?>
            @canany(['vsifacto-factorxx'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsifacto') ?' active' : '' }}
        text-sm" href="{{ route('vsifacto.factorxx',$todoxxxx['parametr']) }}">17. FACTORES
                    @if(isset($checkxx1->id) && isset($checkxx2->id))
                    <span class="fas fa-check text-success" aria-hidden="true"></span>
                    @else
                    <span class="fas fa-times text-danger" aria-hidden="true"></span>
                    @endif
                </a>


            </li>
            @endcanany
            <?php
            $checkxx1 = $todoxxxx['vsixxxxx']->VsiMetaUno;
            $checkxx2 = $todoxxxx['vsixxxxx']->VsiPotencialidadUno;
            ?>
            @canany(['vsimetas-metaxxxx'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsimetas') ?' active' : '' }}
        text-sm" href="{{ route('vsimetas.metaxxxx',$todoxxxx['parametr']) }}">18. POTENCIALIDADES Y METAS
                    @if(isset($checkxx1->id) && isset($checkxx2->id))
                    <span class="fas fa-check text-success" aria-hidden="true"></span>
                    @else
                    <span class="fas fa-times text-danger" aria-hidden="true"></span>
                    @endif
                </a></li>
            @endcanany


            <?php
            $pestania = '19. ÁREAS DE AJUSTE SICOSOCIAL';
            $permisox = 'vsiareas';
            $checkxxx = $todoxxxx['vsixxxxx']->Areajuste;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheckarea')

            <?php

            $pestania = '20. IMPRESIÓN DIAGNÓSTICA Y ANÁLISIS SOCIAL';
            $permisox = 'vsisocia';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiConcepto;
            ?>
            @include('Sicosocial.tabsxxxx.pestaniascheck')

            <?php
            $pestania = '21. CONSENTIMIENTO INFORMADO';
            $permisox = 'vsiconse';
            $checkxxx = $todoxxxx['vsixxxxx']->VsiConsentimiento;
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
