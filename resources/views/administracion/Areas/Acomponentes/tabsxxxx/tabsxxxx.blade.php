<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2)
            @canany(['areaxxxx-leer', 'areaxxxx-crear', 'areaxxxx-editar', 'areaxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='areaxxxx') ?' active' : '' }}
        text-sm" href="{{ route('areaxxxx') }}">&Aacute;REAS</a></li>
            @endcanany
            @endif

            @if($todoxxxx['pestpadr']==2)
            @canany(['areaxxxx-leer', 'areaxxxx-crear', 'areaxxxx-editar', 'areaxxxx-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='areaxxxx') ?' active' : '' }}
        text-sm" href="{{ route('areaxxxx.editar',$todoxxxx['pestpara'][0]) }}">&Aacute;REA</a></li>
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
