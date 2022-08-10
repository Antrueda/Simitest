<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if($queryxxx->idesta == null)
            @if ($queryxxx->sis_esta_id == 1)
                @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
                <div class="dropdown-item">
                    <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.nuevoxxx', $queryxxx->id) }}">GESTIÓN MATRÍCULA</a>
                </div>
                @endif
            @endif
            
        @else
            @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
                @if ($queryxxx->sis_esta_id == 1)
                    <div class="dropdown-item">
                        <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editarxx', $queryxxx->idesta) }}">EDITAR</a>
                    </div>
                @endif
                <div class="dropdown-item">
                    <a class="btn btn-sm btn-primary" href="{{route($requestx->routexxx[0].'.verxxxxx', [$queryxxx->idesta])}}" >VER</a>
                </div>
            @endif
        @endif
        @if ($queryxxx->sis_esta_id == 1)
            @if(auth()->user()->can( $requestx->routexxx[0].'-editarxx'))
            <div class="dropdown-item">
                <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.inactivar', $queryxxx->id) }}">INACTIVAR POR TRASLADO</a>
            </div>
            @endif
        @endif

        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route('imatriculannaj.editar', $queryxxx->id) }}">EDITAR MATRÍCULA NNAJ</a>
        </div>
    </div>
</div>

