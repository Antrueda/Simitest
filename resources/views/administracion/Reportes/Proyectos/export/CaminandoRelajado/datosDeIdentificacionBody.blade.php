{{-- id_nnja --}}
<td>{{ $sisNnaj->id ?? 'Sin dato' }}</td>
{{-- primer nombre --}}
<td>{{ $sisNnaj->fi_datos_basico->s_primer_nombre ?? 'Sin dato' }}</td>
{{-- segundo nombre --}}
<td>{{ $sisNnaj->fi_datos_basico->s_segundo_nombre ?? 'Sin dato' }}</td>
{{-- primer apellido --}}
<td>{{ $sisNnaj->fi_datos_basico->s_primer_apellido ?? 'Sin dato' }}</td>
{{-- segundo apellido --}}
<td>{{ $sisNnaj->fi_datos_basico->s_segundo_apellido ?? 'Sin dato' }}</td>
{{-- 1.11 Documento con el cual se identifica --}}
<td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->tipoDocumento->nombre ?? 'Sin dato' }}</td>
{{-- numero de documento --}}
<td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->s_documento ?? 'Sin dato' }}</td>
{{-- upi actual --}}
<td>{{ $sisNnaj->nnaj_depes->sis_depen->nombre ?? 'Sin dependencia' }}</td>
