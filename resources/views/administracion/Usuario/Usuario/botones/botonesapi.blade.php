<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can( $requestx->routexxx[0].'-editar'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', $queryxxx->id) }}">EDITAR</a>
        </div>
        @endif
        @if(!$queryxxx->nuevanti)
        @if(auth()->user()->can( $requestx->routexxx[0].'-leer'))
        <div class="dropdown-item">
        <a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', $queryxxx->id) }}">VER</a>
        </div>
        @endif
        @if(auth()->user()->can( $requestx->routexxx[0].'-borrar'))
        <div class="dropdown-item">
        <a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', $queryxxx->id) }}">INACTIVAR</a>
        </div>
        @endif
        @if(auth()->user()->can( $requestx->routexxx[0].'-editar'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.restartx', $queryxxx->id) }}">RESTABLECER CONTRASEÑA</a>
        </div>
        @endif
        @endif
    </div>
</div>
