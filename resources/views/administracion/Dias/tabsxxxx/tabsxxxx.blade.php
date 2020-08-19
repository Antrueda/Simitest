<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @canany(['diafesti-leer', 'diafesti-crear', 'diafesti-editar', 'diafesti-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='diafesti') ?' active' : '' }}
        text-sm" href="{{ route('diafesti') }}">DIAS FESTIVOS</a></li>
            @endcanany
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                @if(isset($diafesti))
                {{ $diafesti }}
                @endif
            </div>
        </div>
    </div>
</div>
