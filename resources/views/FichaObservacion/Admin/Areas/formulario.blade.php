<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} area</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'fosarea.nuevo', 'class' => 'form-horizontal']) !!}
                @include('FichaObservacion.Admin.Areas.campos')
            {!! Form::close() !!}
        @elseif($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['fosarea.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('FichaObservacion.Admin.Areas.campos')
            {!! Form::close() !!}
        @else
            @include('FichaObservacion.Admin.Areas.campos')
        @endif
    </div>
</div>