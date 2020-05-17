
@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('bd.basedocumen.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('bd.basedocumen.ver', [$queryxxx->id]) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('inligru', [$queryxxx->id]) }}">ASIGNAR G-LB</a>
@endif