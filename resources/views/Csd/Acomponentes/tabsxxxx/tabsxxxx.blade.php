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
        text-sm" href="{{ $respuest['rutaxxxx'] }}">Datos B&aacute;sicos</a></li>
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
