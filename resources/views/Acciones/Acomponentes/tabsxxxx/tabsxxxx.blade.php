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
            @canany(['aisalidamenores-leer', 'aisalidamenores-crear', 'aisalidamenores-editar', 'aisalidamenores-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='aisalidamenores') ?' active' : '' }}

        text-sm" href="{{ route('aisalidamenores',$todoxxxx['usuariox']->sis_nnaj_id) }}">IR A SALIDAS Y PERMISOS</a></li>
            @endcanany
            @endif
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2|| $todoxxxx['pestpadr']==3)
            @canany(['airetornosalida-leer', 'airetornosalida-crear', 'airetornosalida-editar', 'airetornosalida-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='airetornosalida') ?' active' : '' }}

        text-sm" href="{{ route('airetornosalida',$todoxxxx['usuariox']->sis_nnaj_id) }}">IR A RETORNO DE SALIDAS</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2|| $todoxxxx['pestpadr']==3)
            @canany(['aievasion-leer', 'aievasion-crear', 'aievasion-editar', 'aievasion-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='aievasion') ?' active' : '' }}

        text-sm" href="{{ route('aievasion',$todoxxxx['usuariox']->sis_nnaj_id) }}">IR A REPORTE DE EVASIÓN</a></li>
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
