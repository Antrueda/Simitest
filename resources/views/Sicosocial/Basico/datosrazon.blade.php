<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th>Nº</th>
                @if ($vsi->sis_esta_id == 1)
                    <th width="70">Acciones</th>
                @endif
                <th>1.11 Razones o problemas por las que el NNAJ se vincula al IDIPRON</th>
                <th>1.12 ¿Qué persona(s) parecen producir o empeorar estas dificultades?</th>
                <th colspan="3">1.13 ¿Hace cuánto tiempo se presenta esta situación?</th>
                <th>1.14 ¿Qué situaciones, condiciones o actividades parecen producir o empeorar estas dificultades?</th>
                <th>1.15 ¿Qué emociones le generan estas dificultades?</th>
            </tr>
        </thead>
        <tbody>
        	@if($vsi->VsiDatosVincula && $vsi->VsiDatosVincula->where('sis_esta_id', 1)->count()>0)
        		@foreach($vsi->VsiDatosVincula->where('sis_esta_id', 1) as $k => $d)
	                <tr>
                        <td>{{ $k+1 }}</td>
                        @if ($vsi->sis_esta_id == 1)
                            <td>
                                {!! Form::open(['route' => ['VSI.basico.razon.borrar', $d->vsi_id, $d->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                {!! Form::close() !!}
                            </td>
                        @endif
	                	<td>{{ $d->razon->nombre }}</td>
	                	<td>{{ $d->persona->nombre }}</td>
	                	<td>{{ $d->dia }}</td>
	                	<td>{{ $d->mes }}</td>
	                	<td>{{ $d->ano }}</td>
	                	<td>
	                		@foreach($d->situaciones as $e)
                                <span class="badge">{{ $e->nombre }}</span>
                            @endforeach
	                	</td>
	                	<td>
	                		@foreach($d->emociones as $e)
                                <span class="badge">{{ $e->nombre }}</span>
                            @endforeach
	                	</td>
	                </tr>
	            @endforeach
        	@else
	        	<tr>
	        		<td colspan="9">No hay datos disponibles</td>
	        	</tr>
        	@endif
        </tbody>
    </table>
</div>