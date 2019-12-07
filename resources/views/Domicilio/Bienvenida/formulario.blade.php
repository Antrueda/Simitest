@canany(['csdbienvenida-crear', 'csdbienvenida-editar'])
<div class="card card-outline card-secondary">
  <div class="card-header">
    <h3 class="card-title">8. Motivos de vinculación y bienvenida</h3>
  </div>
  <div class="card-body">
    @if(!$valor)
    {!! Form::open(['route' => ['CSD.bienvenida', $dato->id], 'class' => 'form-horizontal']) !!}
    {{ Form::hidden('csd_id', $dato->id) }}
    @include('Domicilio.Bienvenida.campos')
    {!! Form::close() !!}
    @else
    {!! Form::model($valor, ['route' => ['CSD.bienvenida.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
    {{ Form::hidden('csd_id', $valor->csd_id) }}
    @include('Domicilio.Bienvenida.campos')
    {!! Form::close() !!}
    @endif
  </div>
</div>
@endcanany