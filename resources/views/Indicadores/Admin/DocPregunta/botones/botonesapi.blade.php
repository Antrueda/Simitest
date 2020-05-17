@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('grupregu.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('grupregu.ver', [$queryxxx->id]) }}">VER</a>
@if($requestx->puedasig)
<a class="btn btn-sm btn-primary" href="{{ route('pregresp', [$queryxxx->id]) }}">ASIGNAR R</a>
@endif