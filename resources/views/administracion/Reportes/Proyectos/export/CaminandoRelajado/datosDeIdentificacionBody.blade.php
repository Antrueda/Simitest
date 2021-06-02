{{-- id_nnja --}}
<td>{{ $sisNnaj->id }}</td>
{{-- primer nombre --}}
<td>{{ $sisNnaj->fi_datos_basico->s_primer_nombre }}</td>
{{-- segundo nombre --}}
<td>{{ $sisNnaj->fi_datos_basico->s_segundo_nombre }}</td>
{{-- primer apellido --}}
<td>{{ $sisNnaj->fi_datos_basico->s_primer_apellido }}</td>
{{-- segundo apellido --}}
<td>{{ $sisNnaj->fi_datos_basico->s_segundo_apellido }}</td>
{{-- 1.11 Documento con el cual se identifica --}}
<td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->tipoDocumento->nombre }}</td>
{{-- numero de documento --}}
<td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->s_documento }}</td>
{{-- upi actual --}}
<td>{{ $sisNnaj->nnaj_depes->sis_depen->nombre }}</td>
