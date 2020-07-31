@if($requestx->pueditar)
<a class="btn btn-sm btn-warning" href="{{ route('servdepe.editar', $queryxxx->id) }}">Editar</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary" href="{{ route('servdepe.ver', $queryxxx->id) }}">Ver</a>
@endif
@if($requestx->puedinac)
<button class="btn btn-sm btn-danger dttservicios" id="{{$queryxxx->id}}">Inactivar</button>
<!-- <a  href="{{ route('servdepe.borrar', $queryxxx->id) }}"></a> -->
@endif
