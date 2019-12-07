<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} mapa de proceso</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'mapaProceso.nuevo', 'class' => 'form-horizontal']) !!}
                @include('administracion.mapaProceso.campos')
            {!! Form::close() !!}
        @elseif ($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['mapaProceso.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('administracion.mapaProceso.campos')
            {!! Form::close() !!}
        @else
             @include('administracion.mapaProceso.campos')
        @endif
    </div>
</div>