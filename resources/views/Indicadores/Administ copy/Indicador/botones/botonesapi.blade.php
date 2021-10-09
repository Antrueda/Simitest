@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('in.indicador.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('in.indicador.ver', [$queryxxx->id]) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('lbf.basefuente', [$queryxxx->id]) }}">ASIGNAR LB</a>
@endif