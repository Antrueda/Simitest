@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('in.indicador.editar', [$queryxxx->id]) }}">Editar</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('in.indicador.ver', [$queryxxx->id]) }}">Ver</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('lbf.basefuente', [$queryxxx->id]) }}">Asignar LB</a>
@endif