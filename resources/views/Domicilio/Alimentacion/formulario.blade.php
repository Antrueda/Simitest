@canany(['csdalimentacion-crear', 'csdalimentacion-editar'])
<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 class="card-title">9. Alimentación de la familia</h3>
  </div>
  <div class="card-body">
    @if(!$valor)
      {!! Form::open(['route' => ['CSD.alimentacion', $dato->id], 'class' => 'form-horizontal']) !!}
      {{ Form::hidden('csd_id', $dato->id) }}
      @include('Domicilio.Alimentacion.campos')
      {!! Form::close() !!}
    @else
      {!! Form::model($valor, ['route' => ['CSD.alimentacion.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
      {{ Form::hidden('csd_id', $valor->csd_id) }}
      @include('Domicilio.Alimentacion.campos')
      {!! Form::close() !!}
    @endif
  </div>
</div>
@endcanany