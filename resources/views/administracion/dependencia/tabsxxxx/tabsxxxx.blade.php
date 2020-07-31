<div class="card">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @if($todoxxxx['pestpadr'])
            @canany(['dependencia-leer', 'dependencia-crear', 'dependencia-editar', 'dependencia-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='dependen') ?' active' : '' }}
        text-sm" href="{{ route('dependencia') }}">Dependencia</a></li>
            @endcanany
            @else
            @canany(['dependencia-leer', 'dependencia-crear', 'dependencia-editar', 'dependencia-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='dependen') ?' active' : '' }}
        text-sm" href="{{ route('dependencia') }}">Dependencia</a></li>
            @endcanany
            @canany(['servdepe-leer', 'servdepe-crear', 'servdepe-editar', 'servdepe-borrar'])
            <li class="nav-item" readonly><a class="nav-link{{ ($todoxxxx['slotxxxx']=='servdepe') ?' active' : '' }}
        text-sm" href="{{ route('servdepe', $todoxxxx['parametr']) }}">Servicios</a></li>
            @endcanany
            @canany(['usuadepe-leer', 'usuadepe-crear', 'usuadepe-editar', 'usuadepe-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='usuadepe') ?' active' : '' }}
        text-sm" href="{{ route('usuadepe', $todoxxxx['parametr']) }}">Personal</a></li>
            @endcanany
            @endif
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">

                @if(isset($dependen))
                {{ $dependen }}
                @endif

                @if(isset($servdepe))
                {{ $servdepe }}
                @endif
                @if(isset($usuadepe))
                {{ $usuadepe }}
                @endif
            </div>
        </div>
    </div>
</div>
