@if($requestx->pueditar)
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$queryxxx->id]) }}">VER</a>
@endif
@if($requestx->puedinac)
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$queryxxx->id]) }}">ELIMINAR</a>
@endif
@if($requestx->puedecer)
@if($queryxxx->certifi_id==227)
<a class="btn btn-sm btn-info btncertifica" href="{{ route($requestx->routexxx[0].'.certifica', [$queryxxx->id]) }}">CERTIFICADO</a>
@endif
@endif




