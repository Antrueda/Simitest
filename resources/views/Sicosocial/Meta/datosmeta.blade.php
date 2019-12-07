<div class="table-responsive pt-2">
    <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                <th>Nº</th>
                @if ($vsi->activo == 1)
                    <th width="70">Acciones</th>
                @endif
                <th>18.2 Metas</th>
            </tr>
        </thead>
        <tbody>
        	@if($valorMeta->count()>0)
        		@foreach($valorMeta as $k => $d)
	                <tr>
                        <td>{{ $k+1 }}</td>
                        @if ($vsi->activo == 1)
    	                	<td>
    	                		{!! Form::open(['route' => ['VSI.meta.meta.borrar', $d->vsi_id, $d->id], 'method' => 'DELETE']) !!}
                					<button class="btn btn-sm btn-danger">Eliminar</button>
            					{!! Form::close() !!}
                            </td>
                        @endif
	                	<td>{{ $d->meta }}</td>
	                </tr>
	            @endforeach
        	@else
	        	<tr>
	        		<td colspan="3" class="text-center">No hay datos disponibles</td>
	        	</tr>
        	@endif
        </tbody>
    </table>
</div>