<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            Datos
            @can('fossubtipo-crear')
            <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('fossubtipo.nuevo') }}">
                Nuevo
            </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        @canany(['fossubtipo-leer','fossubtipo-crear','fossubtipo-editar','fossubtipo-borrar'])
            <form class="form-inline pb-3" action="{{ route('fossubtipo') }}" method="GET">
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
                                @canany(['fossubtipo-editar','fossubtipo-borrar'])
                                    <th>Acciones</th>
                                @endcan
                                <th>Area</th>
                                <th>Tipo de Seguimiento</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $d)
                                <tr>
                                    @canany(['fossubtipo-editar','fossubtipo-borrar'])
                                        <td class='text-center'>
                                            @can('fossubtipo-editar')
                                                <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('fossubtipo.editar', $d->id) }}">
                                                    Editar
                                                </a>
                                            @endcan
                                            @can('fossubtipo-leer')
                                                <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('fossubtipo.ver', $d->id) }}">
                                                    Ver
                                                </a>
                                            @endcan
                                        </td>
                                        <td class="text-center"> {{ $d->area->nombre }} </td>
                                        <td class="text-center">{{ $d->seguimiento->nombre }}</td>
                                        <td>{{ $d->nombre }}</td>
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