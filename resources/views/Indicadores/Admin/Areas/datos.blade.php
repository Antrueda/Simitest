<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 class="card-title">
      Datos
      @can('area-crear')
      <a class="btn btn-sm btn-primary ml-2" title="Nuevo" href="{{ route('area.nuevo') }}">
        Nuevo
      </a>
      @endcan
    </h3>
  </div>
  <div class="card-body">
    @canany(['area-leer','area-crear','area-editar','area-borrar'])
    <form class="form-inline pb-3" action="{{ route('area') }}" method="get">
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
            @canany(['area-editar','area-borrar'])
            <th>Acciones</th>
            @endcan
            <th>Nombre</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datos as $d)
          <tr>
            @canany(['area-editar','area-borrar'])
            <td class='text-center'>
              @can('area-editar')
              <a class="btn btn-sm btn-primary" title="Editar" href="{{ route('area.editar', $d->id) }}">
                Editar
              </a>
              @endcan
              @can('area-leer')
              <a class="btn btn-sm btn-primary" title="Ver" href="{{ route('area.ver', $d->id) }}">
                Ver
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