<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} actividad proceso</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'actividadproceso.nuevo', 'class' => 'form-horizontal']) !!}
                @include('administracion.actividadproceso.campos')
            {!! Form::close() !!}
        @elseif ($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['actividadproceso.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('administracion.actividadproceso.campos')
            {!! Form::close() !!}
        @else
             @include('administracion.actividadproceso.campos')
        @endif
    </div>
</div>