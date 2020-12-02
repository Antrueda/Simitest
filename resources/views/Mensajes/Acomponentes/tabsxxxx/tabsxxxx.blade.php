<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">
            @if($todoxxxx['pestpadr']==1 || $todoxxxx['pestpadr']==2)
            @canany(['mensajes-leer', 'mensajes-crear', 'mensajes-editar', 'mensajes-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='mensajes') ?' active' : '' }}
        text-sm" href="{{ route('mensajes.index') }}">MENSAJES</a></li>
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
