<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">{{ $accion }} documento fuente</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'documentoFuente.nuevo', 'class' => 'form-horizontal']) !!}
                @include('administracion.documentoFuente.campos')
            {!! Form::close() !!}
        @elseif ($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['documentoFuente.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('administracion.documentoFuente.campos')
            {!! Form::close() !!}
        @else
             @include('administracion.documentoFuente.campos')
        @endif
    </div>
</div>