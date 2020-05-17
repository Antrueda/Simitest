@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('accigest.editar', $queryxxx->id) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('accigest.editar', $queryxxx->id) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('actifuen', $queryxxx->id) }}">FUENTES</a>
@endif