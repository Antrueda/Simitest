@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('valoinic.editar', $queryxxx->id) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('valoinic.ver', $queryxxx->id) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('accigest', $queryxxx->id) }}">ACTIVIDADES</a>
@endif