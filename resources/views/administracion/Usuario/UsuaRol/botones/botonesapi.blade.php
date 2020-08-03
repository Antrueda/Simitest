@if($requestx->pueditar)
<a class="btn btn-sm btn-warning" href="{{ route($requestx->routexxx.'.editar', $queryxxx->id) }}">Editar</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary" href="{{ route($requestx->routexxx.'.ver', $queryxxx->id) }}">Ver</a>
@endif
@if($requestx->puedinac)
<button class="btn btn-sm btn-danger dttservicios" id="{{$queryxxx->id}}">Inactivar</button>
@endif
