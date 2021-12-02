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

            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vsixxxxx') ?' active' : '' }}
            text-sm" href="{{ route('vsixxxxx',$todoxxxx['usuariox']->sis_nnaj_id) }}">VALORACIÓN SICOSOCIAL</a></li>
            @endcanany
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
            {{ $crudxxxx }}
            </div>
        </div>
    </div>
</div>
