<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if($queryxxx->idesta == null)
            @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.nuevoxxx', $queryxxx->id) }}">GESTIÓN MATRÍCULA</a>
            </div>
            @endif
        @else
            @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
                <div class="dropdown-item">
                    <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editarxx', $queryxxx->idesta) }}">EDITAR</a>
                </div>
                
                <div class="dropdown-item">
                    <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[0].'.verxxxxx', [$queryxxx->idesta])}}" >VER</a>
                </div>
            @endif
        @endif
    

    </div>
</div>
