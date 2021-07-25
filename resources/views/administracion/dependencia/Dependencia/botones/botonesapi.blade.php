@if($queryxxx->nuevanti)
<a class="btn btn-sm btn-warning" href="{{ route($requestx->routexxx[0].'.editmigr', $queryxxx->id) }}">EDITAR</a>
@else
<a class="btn btn-sm btn-primary" href="{{ route($requestx->routexxx[0].'.editar', $queryxxx->id) }}">EDITAR</a>
<a class="btn btn-sm btn-primary" href="{{ route('dependencia.ver', $queryxxx->id) }}">VER</a>
@endif
