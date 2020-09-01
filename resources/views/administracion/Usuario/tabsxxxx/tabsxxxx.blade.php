<div class="card">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @if($todoxxxx['pestpadr'])
            @canany(['usuario-leer', 'usuario-crear', 'usuario-editar', 'usuario-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='usuario') ?' active' : '' }}
        text-sm" href="{{ route('usuario') }}">USUARIOS</a></li>
            @endcanany
            @else
            @canany(['usuario-leer', 'usuario-crear', 'usuario-editar', 'usuario-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='usuario') ?' active' : '' }}
        text-sm" href="{{ route('usuario') }}">DATOS B&Aacute;SICOS</a></li>
            @endcanany
            @canany(['areausua-leer', 'areausua-crear', 'areausua-editar', 'areausua-borrar'])
            <li class="nav-item" readonly><a class="nav-link{{ ($todoxxxx['slotxxxx']=='areausua') ?' active' : '' }}
        text-sm" href="{{ route('areausua', $todoxxxx['parametr']) }}">&Aacute;REAS</a></li>
            @endcanany
            @canany(['usuadepen-leer', 'usudepen-crear', 'usudepen-editar', 'usudepen-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='usudepen') ?' active' : '' }}
        text-sm" href="{{ route('usudepen', $todoxxxx['parametr']) }}">DEPENDENCIAS</a></li>
            @endcanany
            @canany(['roleusua-leer', 'roleusua-crear', 'roleusua-editar', 'roleusua-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='roleusua') ?' active' : '' }}
        text-sm" href="{{ route('roleusua', $todoxxxx['parametr']) }}">ROLES</a></li>
            @endcanany
            @canany(['contrase-editar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='contrase') ?' active' : '' }}
        text-sm" href="{{ route('contrase.cambiar', $todoxxxx['parametr']) }}">CAMBIO DE CONTRASE&Nacute;A</a></li>
            @endcanany


            @endif
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">

                @if(isset($usuario))
                {{ $usuario }}
                @endif
                @if(isset($areausua))
                {{ $areausua }}
                @endif
                @if(isset($usudepen))
                {{ $usudepen }}
                @endif
                @if(isset($roleusua))
                {{ $roleusua }}
                @endif
                @if(isset($contrase))
                {{ $contrase }}
                @endif
            </div>
        </div>
    </div>
</div>
