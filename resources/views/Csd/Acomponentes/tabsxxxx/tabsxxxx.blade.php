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
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2|| $todoxxxx['pestpadr']==3)
            @canany(['csdxxxxx-leer', 'csdxxxxx-crear', 'csdxxxxx-editar', 'csdxxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdxxxxx') ?' active' : '' }}

        text-sm" href="{{ route('csdxxxxx',$todoxxxx['usuariox']->sis_nnaj_id) }}">CSDS</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==3)
            @canany(['csdatbas-leer', 'csdatbas-crear', 'csdatbas-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 1]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdatbas') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">1. Datos B&aacute;sicos
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
                </a>
            </li>
            @endcanany

            @canany(['csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 2]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdviolencia') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">2. Violencias y condición especial
            <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
                </a></li>
            @endcanany

            @canany(['csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 3]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdsituacionespecial') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">3. Situaciones especiales
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 4]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdjusticia') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">4. Justicia restaurativa
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 5]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdresidencia') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">5. Residencia
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 6]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csddinfamiliar') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">6. Dinámica familiar
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany


            @canany(['csdcomfamirobserva-leer', 'csdcomfamirobserva-crear', 'csdcomfamirobserva-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 7]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdcomfamirobserva') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">7. Composición Familiar
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 8]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdbienvenida') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">8. Motivos de vinculación y bienvenida
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 9]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdalimentacion') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">9. Alimentación de la familia
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 10]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdgeningresos') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">10. Generación de Ingresos
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 11]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdredesapoyo') ?' active' : '' }}
            text-sm" href="{{ route('csdredesapoyo', $todoxxxx['pestpara'][0]) }}">11. Redes Sociales de Apoyo
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany

            @canany(['csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar'])

            <?php $respuest = PCsd::getRDb(['padrexxx' => $todoxxxx['csdxxxxx'], 'pestania' => 12]); ?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdconclusiones') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">12. Conclusiones
                    <span class="{{$respuest['classxxx']}}" aria-hidden="true"></span>
               </a></li>
            @endcanany
            @endif

        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                {{ $crudxxxx }} <!-- nombre que se le data en pestanias de la carpeta Acrud -->
            </div>
        </div>
    </div>
</div>
