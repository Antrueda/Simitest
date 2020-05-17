@if($requestx->puededit)
<a class="btn btn-sm btn-primary" href="{{ route('pregresp.editar', [$queryxxx->id]) }}">EDITAR</a>
@endif
<a class="btn btn-sm btn-primary" href="{{ route('pregresp.ver', [$queryxxx->id]) }}">VER</a>