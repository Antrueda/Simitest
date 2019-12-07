<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Datos
            @can('mapaProceso-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('mapaProceso.nuevo') }}">
                    Nuevo
                </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        @canany(['mapaProceso-leer','mapaProceso-crear','mapaProceso-editar','mapaProceso-borrar'])
            <form class="form-inline pb-3" action="{{ route('mapaProceso') }}" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="buscar" value="{{ $buscar }}" placeholder="Texto a buscar">
                </div>
                <button type="submit" class="btn btn-primary ml-2" title="Buscar">Buscar</button>
            </form>
            @if(count($datos)>0)
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-sm">
                        <thead>
                            <tr class="text-center">
                                @canany(['mapaProceso-editar','mapaProceso-borrar'])
                                    <th>Acciones</th>
                                @endcan
                                <th>Versión</th> 
                                <th>Entidad</th> 
                                <th>Vigencia</th> 
                                <th>Cierre</th> 
                                <th>Estado</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $d)
                                <tr>
                                    @canany(['mapaProceso-editar','mapaProceso-borrar'])
                                        <td class='text-center'>
                                            @can('mapaProceso-editar')
                                                <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('mapaProceso.editar', $d->id) }}">
                                                    Editar
                                                </a>
                                            @endcan
                                            @can('mapaProceso-leer')
                                                <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('mapaProceso.ver', $d->id) }}">
                                                    Ver
                                                </a>
                                            @endcan
                                        </td>
                                        <td>{{ $d->version }}</td>
                                        <td>{{ $d->sisEntidad->nombre }}</td>
                                        <td>{{ $d->vigencia }}</td>
                                        <td>{{ $d->cierre }}</td>
                                        <td class="text-center">
                                            @if($d->activo == 1)
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