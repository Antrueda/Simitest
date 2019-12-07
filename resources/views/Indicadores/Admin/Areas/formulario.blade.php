<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 class="card-title">{{ $accion }} area</h3>
  </div>
  <div class="card-body">
    @if($accion == 'Nuevo')
      {!! Form::open(['route' => 'area.nuevo', 'class' => 'form-horizontal']) !!}
        @include('Indicadores.Admin.Areas.campos')
      {!! Form::close() !!}
    @elseif ($accion == 'Editar')
      {!! Form::model($dato, ['route' => ['area.editar', $dato->id], 'method' => 'PUT']) !!}
        @include('Indicadores.Admin.Areas.campos')
      {!! Form::close() !!}
    @else
      @include('Indicadores.Admin.Areas.campos')
    @endif
  </div>
</div>