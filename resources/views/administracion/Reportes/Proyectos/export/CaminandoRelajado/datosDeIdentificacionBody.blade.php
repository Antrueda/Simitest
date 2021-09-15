{{-- id_nnja --}}
<td>{{ $fiDatosBasico->sis_nnaj->id ?? 'Sin dato' }}</td>
{{-- fecha de diligenciamiento --}}
<td>{{ isset($fiDatosBasico->fi_diligenc->diligenc)? date("Y-m-d", $fiDatosBasico->fi_diligenc->diligenc): 'Sin dato' }}</td>
{{-- primer nombre --}}
<td>{{ $fiDatosBasico->s_primer_nombre ?? 'Sin dato' }}</td>
{{-- segundo nombre --}}
<td>{{ $fiDatosBasico->s_segundo_nombre ?? 'Sin dato' }}</td>
{{-- primer apellido --}}
<td>{{ $fiDatosBasico->s_primer_apellido ?? 'Sin dato' }}</td>
{{-- segundo apellido --}}
<td>{{ $fiDatosBasico->s_segundo_apellido ?? 'Sin dato' }}</td>
{{-- 1.11 Documento con el cual se identifica --}}
<td>{{ $fiDatosBasico->nnaj_docu->tipoDocumento->nombre ?? 'Sin dato' }}</td>
{{-- numero de documento --}}
<td>{{ $fiDatosBasico->nnaj_docu->s_documento ?? 'Sin dato' }}</td>
{{-- upi actual --}}
<td>{{ $fiDatosBasico->sis_nnaj->nnaj_depes->sis_depen->nombre ?? 'Sin dependencia' }}</td>
