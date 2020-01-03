<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} tipo de seguimiento</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'fossubtipo.nuevo', 'class' => 'form-horizontal']) !!}
                @include('FichaObservacion.Admin.SubTipoSeguimiento.campos')
            {!! Form::close() !!}
        @elseif($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['fossubtipo.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('FichaObservacion.Admin.SubTipoSeguimiento.campos')
            {!! Form::close() !!}
        @else
            @include('FichaObservacion.Admin.SubTipoSeguimiento.campos')
        @endif
    </div>
</div>