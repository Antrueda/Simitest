
@if($botodata[0])
<a class="btn btn-sm btn-primary" href="{{ route('bd.basedocumen.editar', [$dataxxxx->in_fuente_id,$dataxxxx->id]) }}">EDITAR</a>
@endif
@if($botodata[1])
<a class="btn btn-sm btn-primary" href="{{ route('bd.basedocumen.ver', [$dataxxxx->in_fuente_id,$dataxxxx->id]) }}">VER</a>
@endif
@if($botodata[2])
<a class="btn btn-sm btn-danger" href="{{ route('bd.basedocumen.borrar', [$dataxxxx->in_fuente_id,$dataxxxx->id]) }}">INACTIVAR</a>
@endif