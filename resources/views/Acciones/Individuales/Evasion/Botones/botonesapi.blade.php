@if(auth()->user()->can($requestx->routexxx[0] . '-editar') && $puedexxx['tienperm'])
<a class="btn btn-sm btn-warning " href="{{ route($requestx->routexxx[0].'.editar', [$requestx->padrexxx,$queryxxx->id]) }}">EDITAR</a>
@endif
@if(auth()->user()->can($requestx->routexxx[0] . '-leer'))
<a class="btn btn-sm btn-primary " href="{{ route($requestx->routexxx[0].'.ver', [$requestx->padrexxx,$queryxxx->id]) }}">VER</a>
@endif
@if(auth()->user()->can($requestx->routexxx[0] . '-borrar') && $puedexxx['tienperm'])
<a class="btn btn-sm btn-danger " href="{{ route($requestx->routexxx[0].'.borrar', [$requestx->padrexxx,$queryxxx->id]) }}">INACTIVAR</a>
@endif
<?php



