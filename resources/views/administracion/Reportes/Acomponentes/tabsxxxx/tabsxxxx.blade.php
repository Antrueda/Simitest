<div class="card card-outline card-secondary">
    <div class="card-header">
        {{$todoxxxx['tituhead']}}
    </div>
    <div class="card-header p-2">
        <ul class="nav nav-tabs">

            @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='excel') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">PROYECTO 7720</a></li>
            @endcanany
            @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
            <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">PROYECTO 7722</a></li>
            @endcanany


        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                <div class="card-header p-2">
                    <ul class="nav nav-tabs">

                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='excel') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">META 1</a></li>
                        @endcanany
                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">META2</a></li>
                        @endcanany
                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">META3</a></li>
                        @endcanany
                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">META4</a></li>
                        @endcanany
                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">META5</a></li>
                        @endcanany
                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">NUEVOS</a></li>
                        @endcanany
                        @canany(['fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='fidatbas') ?' active' : '' }}
        text-sm" href="{{ route('fidatbas') }}">RETORNOS</a></li>
                        @endcanany
                        @canany(['repcamre-leer'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='vrepcamr') ?' active' : '' }}
        text-sm" href="{{ route('excel.vrepcamr') }}">Reporte Caminado Relajado</a></li>
                        @endcanany
                        @canany(['repcamre-leer'])
                        <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='traslado') ?' active' : '' }}
        text-sm" href="{{ route('excel.traslado') }}">Reporte Traslado</a></li>
                        @endcanany
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                            {{ $crudxxxx }} <!-- nombre que se le data en pestanias de la carpeta Acrud -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
