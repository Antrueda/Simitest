<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Seleccione una opacion
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if($requestx->pueditar)
        <div class="dropdown-item">
            <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx.'.editar', $queryxxx->id) }}">Editar</a>
        </div>
        @endif
        @if($requestx->puedever)
        <div class="dropdown-item">
        <a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx.'.ver', $queryxxx->id) }}">Ver</a>
        </div>
        @endif
        @if($requestx->puedinac)
        <div class="dropdown-item">
        <button class="btn btn-sm btn-danger dttservicios" id="{{$queryxxx->id}}">Inactivar</button>
        </div>
        @endif
        @if($requestx->puedcamb)
        <div class="dropdown-item">
        <a class="btn btn-sm btn-warning" href="{{ route($requestx->routexxy.'.cambiar', $queryxxx->id) }}">Cambiar Contraseña</a>
        </div>
        @endif
    </div>
</div>
