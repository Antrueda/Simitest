<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} proceso</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'proceso.nuevo', 'class' => 'form-horizontal']) !!}
                @include('administracion.proceso.campos')
            {!! Form::close() !!}
        @elseif ($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['proceso.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('administracion.proceso.campos')
            {!! Form::close() !!}
        @else
             @include('administracion.proceso.campos')
        @endif
    </div>
</div>