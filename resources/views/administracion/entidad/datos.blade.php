<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            DATOS
            @can('entidad-crear')
                <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('entidad.nuevo') }}">
                    NUEVO
                </a>
            @endcan
        </h3>
    </div>
    <div class="card-body">
        @canany(['entidad-leer','entidad-crear','entidad-editar','entidad-borrar'])
            <form class="form-inline pb-3" action="{{ route('entidad') }}" method="get">
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
                                @canany(['entidad-editar','entidad-borrar'])
                                    <th>ACCIONES</th>
                                @endcan
                                <th>NOMBRE</th> 
                                <th>ESTADO</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $d)
                                <tr>
                                    @canany(['entidad-editar','entidad-borrar'])
                                        <td class='text-center'>
                                            @can('entidad-editar')
                                                <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('entidad.editar', $d->id) }}">
                                                    EDITAR
                                                </a>
                                            @endcan
                                            @can('entidad-leer')
                                                <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('entidad.ver', $d->id) }}">
                                                    VER
                                                </a>
                                            @endcan
                                        </td>
                                        <td>{{ $d->nombre }}</td>
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