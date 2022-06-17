

@if($requestx->pueditar&&$requestx->padrexxx->id==$queryxxx->vmg_id)
<a class="btn btn-sm btn-warning " href="{{ route('vdiagnosti.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route('vdiagnosti.ver', [$queryxxx->id]) }}">VER</a>
@endif
@if($requestx->puedinac&&$requestx->padrexxx->id==$queryxxx->vmg_id)
<a class="btn btn-sm btn-danger " href="{{ route('vdiagnosti.borrar', [$queryxxx->id]) }}">INACTIVAR</a>
@endif
