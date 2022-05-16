<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can($requestx->routexxx[0] . '-editar'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->datobasi,$queryxxx->id]) }}">EDITAR</a>
        </div>
        @endif
        <div class="dropdown-item">
            <a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->datobasi,$queryxxx->id]) }}">VER</a>
        </div>
        @if(auth()->user()->can($requestx->routexxx[0] . '-borrar'))
            <div class="dropdown-item">
                @if($queryxxx->sis_esta_id==2)
                    <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->datobasi,$queryxxx->id]) }}">ACTIVAR</a>
                @else
                    <a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->datobasi,$queryxxx->id]) }}">INACTIVAR</a>
                @endif
            </div>
        @endif
    </div>
</div>


