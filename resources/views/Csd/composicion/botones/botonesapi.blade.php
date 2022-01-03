<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can( $requestx->routexxx[0].'-editar') && $queryxxx->sis_esta_id==1)
            @if($requestx->puedexxx['tienperm'])
                @if($requestx->sesionxx)
                        <div class="dropdown-item">
                        <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->padrexxx,$queryxxx->id]) }}">EDITAR</a>
                        </div>
                    @endif
                @endif
            @endif
        @if(auth()->user()->can( $requestx->routexxx[0].'-leer'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->padrexxx,$queryxxx->id]) }}">VER</a>
            </div>
        @endif
        @if($queryxxx->sis_esta_id==1)
            @if(auth()->user()->can( $requestx->routexxx[0].'-borrar'))
                <div class="dropdown-item">
                    <a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->padrexxx,$queryxxx->id]) }}">INACTIVAR</a>
                </div>
            @endif
        @else
            @if(auth()->user()->can( $requestx->routexxx[0].'-activarx'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.activarx', [$requestx->padrexxx,$queryxxx->id]) }}">ACTIVAR</a>
            </div>
            @endif
        @endif

    </div>
</div>

