@if($requestx->pueditar)
<a class="btn btn-sm btn-warning " href="{{ route('valorcomp.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route('valorcomp.ver', [$queryxxx->id]) }}">VER</a>
@endif
@if($requestx->puedinac)
<a class="btn btn-sm btn-danger " href="{{ route('valorcomp.borrar', [$queryxxx->id]) }}">INACTIVAR</a>
@endif
