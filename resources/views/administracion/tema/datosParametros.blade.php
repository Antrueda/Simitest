<h6 class="pt-3">Parámetros</h6>
@if(count($dato->parametros)>0)
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr class="text-center">
                @if($accion=='Editar')
                @canany(['tema-editar','tema-borrar'])
                <th>ACCIONES</th>
                @endcan
                @endif
                <th>ID</th>
                <th>NOMBRE</th>
                <th>MULTIVALOR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dato->parametros as $d)
            <tr>
                @canany(['tema-leer', 'tema-crear', 'tema-editar', 'tema-borrar'])
                @if($accion=='Editar')
                <td class='text-center' style="width: 25%; ">
                    {!! Form::open(['route' => ['tema.homolaga', $dato->id, $d->id], 'method' => 'GET']) !!}
                    <button class="btn btn-sm btn-warning" style="float: left; margin-right: 5px;">Homolagar Parámetro</button>
                    {!! Form::close() !!}
                    @can('tema-borrar')
                    {!! Form::open(['route' => ['tema.verParametro', $dato->id, $d->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-sm btn-danger" style="float: left;">Eliminar</button>
                    {!! Form::close() !!}
                    @endcan
                </td>
                <td>{{ $d->id }}</td>
                @endif
                <td>{{ $d->nombre }}</td>
                <td>{{ $d->pivot->simianti_id }}</td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<p>No hay datos</p>
@endif
