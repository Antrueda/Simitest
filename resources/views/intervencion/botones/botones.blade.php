<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="dropdown-item">
            <a class="btn btn-sm btn-primary" href="{{ route('is.intervencion.ver', [$queryxxx->sis_nnaj_id,$queryxxx->id]) }}">VER</a>
        </div>
        @if(auth()->user()->can( $requestx->routexxx[0].'-editar'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning" href="{{ route('is.intervencion.editar', [$queryxxx->sis_nnaj_id,$queryxxx->id]) }}">EDITAR</a>
        </div>
        @endif

        @if($queryxxx->sis_esta_id==1)
        @if(auth()->user()->can($requestx->routexxx[0] . '-borrar'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-danger" href="{{ route('is.intervencion.borrar', [$queryxxx->id]) }}">INACTIVAR</a>
        </div>
        @endif

        @else
        @if(auth()->user()->can($requestx->routexxx[0] . '-activarx'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route('is.intervencion.activarx', [$queryxxx->id]) }}">ACTIVAR</a>
        </div>
        @endif
        @endif
    </div>
</div>
