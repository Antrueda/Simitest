@canany(['csdresidencia-crear', 'csdresidencia-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">5. Residencia</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {{ Form::open(['route' => ['CSD.residencia', $dato->id], 'name' => 'forma', 'class' => 'form-horizontal']) }}
                {{ Form::hidden('csd_id', $dato->id) }}
                @include('Domicilio.Residencia.campos')
            {{ Form::close() }}
        @else
            {{ Form::model($valor, ['route' => ['CSD.residencia.editar', $dato->id, $valor->id], 'name' => 'forma', 'method' => 'PUT']) }}
                {{ Form::hidden('csd_id', $valor->csd_id) }}
                @include('Domicilio.Residencia.campos')
            {{ Form::close() }}
        @endif
    </div>
</div>
@endcanany