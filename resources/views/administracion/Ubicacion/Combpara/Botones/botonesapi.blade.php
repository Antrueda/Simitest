<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(auth()->user()->can( $requestx->routexxx[0].'-editar'))
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$queryxxx->temacombo_id,$queryxxx->id]) }}">HOMOLOGAR</a>
        </div>
        @endif

        @if($queryxxx->sis_esta_id==1)
        @if(auth()->user()->can($requestx->routexxx[0] . '-borrar'))
        <div class="dropdown-item">
        <button class="btn btn-sm btn-danger activain" id="{{$queryxxx->id}}">INACTIVAR</button>
        </div>
        @endif

        @else
        @if(auth()->user()->can($requestx->routexxx[0] . '-activarx'))
        <div class="dropdown-item">
        <button class="btn btn-sm btn-warning activain" id="{{$queryxxx->id}}">ACTIVAR</button>
        </div>
        @endif
        @endif
    </div>
</div>
