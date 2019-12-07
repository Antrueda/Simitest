@canany(['csdviolencia-crear', 'csdviolencia-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">2. Violencias y condición especial</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {{ Form::open(['route' => ['CSD.violencia', $dato->id], 'name' => 'forma', 'class' => 'form-horizontal']) }}
                {{ Form::hidden('csd_id', $dato->id) }}
                @include('Domicilio.Violencia.campos')
            {{ Form::close() }}
        @else
            {{ Form::model($valor, ['route' => ['CSD.violencia.editar', $dato->id, $valor->id], 'name' => 'forma', 'method' => 'PUT']) }}
                {{ Form::hidden('csd_id', $valor->csd_id) }}
                @include('Domicilio.Violencia.campos')
            {{ Form::close() }}
        @endif
    </div>
</div>
@endcanany