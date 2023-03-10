<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2)
            @canany(['servicio-leer', 'servicio-crear', 'servicio-editar', 'servicio-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='servicio') ?' active' : '' }}
        text-sm" href="{{ route('servicio') }}">SERVICIOS</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==2)
            @canany(['servicio-leer', 'servicio-crear', 'servicio-editar', 'servicio-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='servicio') ?' active' : '' }}
        text-sm" href="{{ route('servicio.editar',$todoxxxx['parametr']) }}">SERVICIO</a></li>
            @endcanany
            @endif

        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                {{ $crudxxxx }}  <!-- nombre que se le data en pestanias de la carpeta Acrud -->
            </div>
        </div>
    </div>
</div>
