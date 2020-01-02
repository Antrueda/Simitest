<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Datos
            @can('fostipo-crear')
            <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fostipo.nuevo') }}">
                Nuevo
            </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        @canany(['fostipo-leer','fostipo-crear','fostipo-editar','fostipo-borrar'])
            <form class="form-inline pb-3" action="{{ route('fostipo') }}" method="GET">
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
                                @canany(['fostipo-editar','fostipo-borrar'])
                                    <th>Acciones</th>
                                @endcan
                                <th>Nombre</th>
                                <th>Area</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $d)
                                <tr>
                                    @canany(['fostipo-editar','fostipo-borrar'])
                                        <td class='text-center'>
                                            @can('fostipo-editar')
                                                <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('fostipo.editar', $d->id) }}">
                                                    Editar
                                                </a>
                                            @endcan
                                            @can('fostipo-leer')
                                                <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('fostipo.ver', $d->id) }}">
                                                    Ver
                                                </a>
                                            @endcan
                                        </td>
                                        <td>{{ $d->nombre }}</td>
                                        <td> {{ $d->area->nombre }} </td>
                                        <td class="text-center">
                                            @if($d->activo == 1)
                                                <span class="fas fa-check text-success" aria-hidden="true"></span>
                                            @else
                                                <span class="fas fa-times text-danger" aria-hidden="true"></span>
                                            @endif
                                        </td>
                                    @endcanany
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