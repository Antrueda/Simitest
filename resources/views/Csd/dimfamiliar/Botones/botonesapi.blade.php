@if($requestx->pueditar && Tr::getPuedeCargar(['nnajxxxx'=>$queryxxx->id,'redirect'=>false]))
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->datobasi,$queryxxx->id]) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->datobasi,$queryxxx->id]) }}">VER</a>
@endif
@if($requestx->puedinac && Tr::getPuedeCargar(['nnajxxxx'=>$queryxxx->id,'redirect'=>false]))
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->datobasi,$queryxxx->id]) }}">INACTIVAR</a>
@endif
