<div class=" card-outline card-secondary">
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @canany(['aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar'])
                <li class="nav-item">
                    <a class="nav-link{{ $todoxxxx['slotxxxx'] == 'aiindex' ? ' active' : '' }}
            text-sm" href="{{ route('ai.ver', $todoxxxx['datobasi']->id) }}">INDIVIDUALES</a>
                </li>
            @endcanany
            @canany(['vsixxxxx-leer', 'vsixxxxx-crear', 'vsixxxxx-editar', 'vsixxxxx-borrar'])
                <li class="nav-item">
                    <a class="nav-link{{ $todoxxxx['slotxxxx'] == 'vsixxxxx' ? ' active' : '' }}
            text-sm" href="{{ route('vsixxxxx', $todoxxxx['datobasi']->id) }}">VALORACIÓN SICOSOCIAL</a>
                </li>
            @endcanany
            @canany(['csdxxxxx-leer', 'csdxxxxx-crear', 'csdxxxxx-editar', 'csdxxxxx-borrar'])
                <li class="nav-item">
                    <a class="nav-link{{ $todoxxxx['slotxxxx'] == 'csdxxxxx' ? ' active' : '' }}
            text-sm" href="{{ route('csdxxxxx', $todoxxxx['datobasi']->id) }}">CSD</a>
                </li>
            @endcanany
            @canany(['isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar'])
                <li class="nav-item">
                    <a class="nav-link{{ $todoxxxx['slotxxxx'] == 'isintervencion' ? ' active' : '' }}
            text-sm" href="{{ route('is.ver', $todoxxxx['datobasi']->id) }}">INTERVENCIONES</a>
                </li>
            @endcanany 
        </ul>
    </div>

</div>