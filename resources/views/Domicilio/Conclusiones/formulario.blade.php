@canany(['csdconclusiones-crear', 'csdconclusiones-editar'])
<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 class="card-title">12. Conclusiones<h3>
  </div>
  <div class="card-body">
    @if(!$valor)
      {!! Form::open(['route' => ['CSD.conclusiones', $dato->id], 'class' => 'form-horizontal']) !!}
      {{ Form::hidden('csd_id', $dato->id) }}
      @include('Domicilio.Conclusiones.campos')
      {!! Form::close() !!}
    @else
      {!! Form::model($valor, ['route' => ['CSD.conclusiones.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
      {{ Form::hidden('csd_id', $valor->csd_id) }}
      @include('Domicilio.Conclusiones.campos')
      {!! Form::close() !!}
    @endif
  </div>
</div>
@endcanany