@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('lbf.basefuente.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('lbf.basefuente.ver', [$queryxxx->id]) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('bd.basedocumen', [$queryxxx->id]) }}">ASIGNAR DF</a>
@endif