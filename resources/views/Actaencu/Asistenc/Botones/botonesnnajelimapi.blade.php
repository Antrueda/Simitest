<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        SELECCIONE
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="dropdown-item">
            @if ($queryxxx->prm_escomfam_id == 2686)
                <a class="btn btn-sm btn-primary " target="_blank"
                    href="{{ route($requestx->routexxx[1] . '.editcont', $queryxxx->datbasid) }}">CREAR
                    FI</a>
            @else
                <a class="btn btn-sm btn-primary " target="_blank"
                    href="{{ route($requestx->routexxx[1] . '.editar', $queryxxx->datbasid) }}">COMPLETAR FI</a>
            @endif
        </div>
        <div class="dropdown-item">
            @if (auth()->user()->can($requestx->routexxx[0] . '-borrarxx'))
                <a class="btn btn-sm btn-danger "
                    href="{{ route($requestx->routexxx[0] . '.elimcont', [$queryxxx->ae_asistencia_id, $queryxxx->id]) }}">ELIMINAR</a>
            @endif
        </div>
    </div>
</div>
