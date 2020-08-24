<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
       
            @canany(['alertas-leer', 'alertas-crear', 'alertas-editar', 'alertas-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='alertas') ?' active' : '' }}
        text-sm" href="{{ route('alertas') }}">ALERTAS</a></li>
            @endcanany


        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                @if(isset($alertas))
                {{ $alertas }}
                @endif

            </div>
        </div>
    </div>
</div>
