@if($requestx->pueditar)
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->datobasi,$queryxxx->id]) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->datobasi,$queryxxx->id]) }}">VER</a>
@endif
@if($requestx->puedinac)
@if($queryxxx->sis_esta_id==2)
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->datobasi,$queryxxx->id]) }}">ACTIVAR</a>
@else
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->datobasi,$queryxxx->id]) }}">INACTIVAR</a>
@endif

@endif
