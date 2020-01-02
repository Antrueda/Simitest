<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} tipo de seguimiento</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'fostipo.nuevo', 'class' => 'form-horizontal']) !!}
                @include('FichaObservacion.Admin.TipoSeguimiento.campos')
            {!! Form::close() !!}
        @elseif($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['fostipo.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('FichaObservacion.Admin.TipoSeguimiento.campos')
            {!! Form::close() !!}
        @else
            @include('FichaObservacion.Admin.TipoSeguimiento.campos')
        @endif
    </div>
</div>