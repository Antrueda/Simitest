@if($requestx->pueditar)
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$queryxxx->id]) }}">Editar</a>
@endif

@if($requestx->puedinac)
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$queryxxx->id]) }}">Inactivar</a>
@endif
@if(auth()->user()->can('fiarchiv-descarga'))
<a class="btn btn-sm btn-success " href="{{asset($queryxxx->s_ruta)}}" target="_blank" >Ver Adjunto</a>
@endif
