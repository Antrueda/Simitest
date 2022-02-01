<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can( $requestx->routexxx[1].'-leerxxxx'))
            <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[1], [$queryxxx->id]) }}">ACCIONES DE GESTION</a>
            </div>
        @endif
       

    </div>
</div>
