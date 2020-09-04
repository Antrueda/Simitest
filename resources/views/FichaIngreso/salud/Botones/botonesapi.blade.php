@if($requestx->pueditar)
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->datobasi,$queryxxx->id]) }}">Editar</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->datobasi,$queryxxx->id]) }}">Ver</a>
@endif
@if($requestx->puedinac)
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->datobasi,$queryxxx->id]) }}">Inactivar</a>
@endif
