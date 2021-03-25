@if( $requestx->actuanti)
@if($requestx->pueditar )
<a class="btn btn-sm btn-warning " title="{{$queryxxx->id}}" href="{{ route($requestx->routexxx[0].'.editar', $queryxxx->id) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " title="{{$queryxxx->id}}" href="{{ route($requestx->routexxx[0].'.ver', $queryxxx->id) }}">VER</a>
@endif
@if($requestx->puedinac )
<a class="btn btn-sm btn-danger " title="{{$queryxxx->id}}" href="{{ route($requestx->routexxx[0].'.borrar', $queryxxx->id) }}">INACTIVAR</a>
@endif
@else
<button class="btn btn-sm btn-primary " title="{{$queryxxx->id}}" type="button" >SELECCIONE</button>
@endif
