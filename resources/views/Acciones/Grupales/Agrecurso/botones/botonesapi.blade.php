<a class="btn btn-sm btn-primary" href="{{ route('agrecurso.editar', $id) }}">EDITAR</a>
@if($sis_esta_id==1)
<a class="btn btn-sm btn-primary" href="{{ route('agrecurso.borrar', $id) }}">INACTIVAR</a>
@endif
@if($sis_esta_id==2)
<a class="btn btn-sm btn-primary" href="{{ route('agrecurso.activarx', $id) }}">ACTIVAR</a>
@endif
{{-- <a class="btn btn-sm btn-primary" href="{{ route('ag.recu.recurso.ver', $id) }}">Ver</a> --}}