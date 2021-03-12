@if($requestx->pueditar )
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->padrexxx,$queryxxx->id]) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->padrexxx,$queryxxx->id]) }}">VER</a>
@endif

@if($requestx->puedinac )
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->padrexxx,$queryxxx->id]) }}">INACTIVAR</a>
@endif

