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

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdatbas', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdatbas') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">1. Datos B&aacute;sicos</a></li>
            @endcanany

            @canany(['csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdviolencia', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdviolencia') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">2. Violencias y condición especial</a></li>
            @endcanany

            @canany(['csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdsituacionespecial', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdsituacionespecial') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">3. Situaciones especiales</a></li>
            @endcanany

            @canany(['csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdjusticia', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdjusticia') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">4. Justicia restaurativa</a></li>
            @endcanany

            @canany(['csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdresidencia', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdresidencia') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">5. Residencia</a></li>
            @endcanany

            @canany(['csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csddinfamiliar', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csddinfamiliar') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">6. Dinámica familiar</a></li>
            @endcanany

            @canany(['csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdbienvenida', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdbienvenida') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">8. Motivos de vinculación y bienvenida</a></li>
            @endcanany

            @canany(['csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdalimentacion', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdalimentacion') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">9. Alimentación de la familia</a></li>
            @endcanany

            @canany(['csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdgeningresos', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdgeningresos') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">10. Generación de Ingresos</a></li>
            @endcanany

            @canany(['csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar'])

            <?php $respuest=PCsd::getRDb(['permisox' => 'csdconclusiones', 'sisnnajx' => $todoxxxx['csdxxxxx']]);?>
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='csdconclusiones') ?' active' : '' }}
            text-sm" href="{{ $respuest['rutaxxxx'] }}">12. Conclusiones</a></li>
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
