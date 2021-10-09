@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('area.editar', $queryxxx->id) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('area.ver', $queryxxx->id) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('in.indicador', $queryxxx->id) }}">Asignar Indi</a>
@endif