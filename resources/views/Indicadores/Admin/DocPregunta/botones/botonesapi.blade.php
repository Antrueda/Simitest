

@if($botodata[0])
<a class="btn btn-sm btn-primary" href="{{ route('di.docindicador.editar', [$dataxxxx->area_id,$dataxxxx->in_ligru_id,$dataxxxx->id]) }}">EDITAR</a>
@endif
@if($botodata[1])
<a class="btn btn-sm btn-primary" href="{{ route('di.docindicador.ver', [$dataxxxx->area_id,$dataxxxx->in_ligru_id,$dataxxxx->id]) }}">VER</a>
@endif
@if($botodata[2])
<a class="btn btn-sm btn-danger" href="{{ route('di.docindicador.borrar', [$dataxxxx->area_id,$dataxxxx->in_ligru_id,$dataxxxx->id]) }}">INACTIVAR</a>
@endif
