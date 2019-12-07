<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} actividad</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'actividad.nuevo', 'class' => 'form-horizontal']) !!}
                @include('administracion.actividad.campos')
            {!! Form::close() !!}
        @elseif ($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['actividad.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('administracion.actividad.campos')
            {!! Form::close() !!}
        @else
             @include('administracion.actividad.campos')
        @endif
    </div>
</div>