@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('inligru.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('inligru.ver', [$queryxxx->id]) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('grupregu', [$queryxxx->id]) }}">ASIGNAR P</a>
@endif