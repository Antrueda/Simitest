<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
            <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editarxx', [$queryxxx->id]) }}">EDITAR</a>
            </div>
        @endif
        @if(auth()->user()->can( $requestx->routexxx[0].'-leerxxxx'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.leerxxxx', [$queryxxx->id]) }}">VER</a>
            </div>
        @endif
        @if($queryxxx->sis_esta_id==1)
            @if(auth()->user()->can( $requestx->routexxx[0].'-borrarxx'))
                <div class="dropdown-item">
                    <a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrarxx', [$queryxxx->id]) }}">INACTIVAR</a>
                </div>
            @endif
        @else
            @if(auth()->user()->can( $requestx->routexxx[0].'-activarx'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.activarx', [$queryxxx->id]) }}">ACTIVAR</a>
            </div>
            @endif
        @endif
        @if(auth()->user()->can( $requestx->routexxx[1].'-leerxxxx'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-warning" href="{{ route($requestx->routexxx[1], $queryxxx->id) }}">RESPUESTAS</a>
            </div>
        @endif
    </div>
</div>
