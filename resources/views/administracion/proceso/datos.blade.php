<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            DATOS
            @can('proceso-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('proceso.nuevo') }}">
                    NUEVO
                </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        @canany(['proceso-leer','proceso-crear','proceso-editar','proceso-borrar'])
            <form class="form-inline pb-3" action="{{ route('proceso') }}" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="buscar" value="{{ $buscar }}" placeholder="Texto a buscar">
                </div>
                <button type="submit" class="btn btn-primary ml-2" title="Buscar">BUSCAR</button>
            </form>
            @if(count($datos)>0)
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr class="text-center">
                                @canany(['proceso-editar','proceso-borrar'])
                                    <th>ACCIONES</th>
                                @endcan
                                <th>NOMBRE</th> 
                                <th>Proceso</th> 
                                <th>Mapa de proceso</th> 
                                <th>Tipo de proceso</th> 
                                <th>Estado</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $d)
                                <tr>
                                    @canany(['proceso-editar','proceso-borrar'])
                                        <td class='text-center'>
                                            @can('proceso-editar')
                                                <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('proceso.editar', $d->id) }}">
                                                    EDITAR
                                                </a>
                                            @endcan
                                            @can('proceso-leer')
                                                <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('proceso.ver', $d->id) }}">
                                                    VER
                                                </a>
                                            @endcan
                                        </td>
                                        <td>{{ $d->nombre }}</td>
                                        <td>@if($d->sisProceso){{ $d->sisProceso->nombre }}@endif</td>
                                        <td>{{ $d->sisMapaProc->sisEntidad->nombre }} - {{ $d->sisMapaProc->version }}</td>
                                        <td>{{ $d->tipoProceso->nombre }}</td>
                                        <td class="text-center">
                                            @if($d->sis_esta_id == 1)
                                                <span class="fas fa-check text-success" aria-hidden="true"></span>
                                            @else
                                                <span class="fas fa-times text-danger" aria-hidden="true"></span>
                                            @endif
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $datos->appends(['buscar' => $buscar])->links() }}
            @else
                <p>No hay datos</p>
            @endif
        @endcanany
    </div>
</div>