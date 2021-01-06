<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title" style = "text-transform:uppercase;">{{ $accion }} ENTIDAD</h3>
    </div>
    <div class="card-body">
        @if($accion == 'Nuevo')
            {!! Form::open(['route' => 'entidad.nuevo', 'class' => 'form-horizontal','style '=> "text-transform:uppercase;"]) !!}
                @include('administracion.entidad.campos')
            {!! Form::close() !!}
        @elseif ($accion == 'Editar')
            {!! Form::model($dato, ['route' => ['entidad.editar', $dato->id], 'method' => 'PUT']) !!}
                @include('administracion.entidad.campos')
            {!! Form::close() !!}
        @else
             @include('administracion.entidad.campos')
        @endif
    </div>
</div>