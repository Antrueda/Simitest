<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">

            @canany(['estausua-leer', 'estausua-crear', 'estausua-editar', 'estausua-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='estausua') ?' active' : '' }}
        text-sm" href="{{ route('estausua') }}">MOTIVOS (ESTADO)</a></li>

@endcanany





        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">

                @if(isset($estausua))
                {{ $estausua }}
                @endif

            </div>
        </div>
    </div>
</div>
