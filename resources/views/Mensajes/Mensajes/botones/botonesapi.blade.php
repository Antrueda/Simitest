@if($requestx->pueditar)
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', $queryxxx->id) }}">EDITAR</a>
@endif
@if($requestx->puedever)
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', $queryxxx->id) }}">VER</a>
@endif

@if($queryxxx->sis_esta_id==1)
@if(auth()->user()->can($requestx->routexxx[0] . '-borrar'))
<div class="dropdown-item">
    <a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$queryxxx->id]) }}">INACTIVAR</a>
</div>
@endif

@else
@if(auth()->user()->can($requestx->routexxx[0] . '-activarx'))
<div class="dropdown-item">
    <a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.activarx', [$queryxxx->id]) }}">ACTIVAR</a>
</div>
@endif
@endif
