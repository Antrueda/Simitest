@canany(['csdgeningresos-crear', 'csdgeningresos-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">10. Generación de Ingresos</h3>
    </div>
    <div class="card-body">
        {!! Form::open(['route' => ['CSD.geningresos.aportante', $dato->id], 'class' => 'form-horizontal']) !!}
            {{ Form::hidden('csd_id', $dato->id) }}
            @include('Domicilio.GenIngresos.camposAportantes')
        {!! Form::close() !!}
        @include('Domicilio.GenIngresos.datosAportantes')
        @if(!$valor)
            {{ Form::open(['route' => ['CSD.geningresos', $dato->id], 'class' => 'form-horizontal']) }}
                {{ Form::hidden('csd_id', $dato->id) }}
                @include('Domicilio.GenIngresos.campos')
            {{ Form::close() }}
        @else
            {{ Form::model($valor, ['route' => ['CSD.geningresos.editar', $dato->id, $valor->id], 'method' => 'PUT']) }}
                {{ Form::hidden('csd_id', $valor->csd_id) }}
                @include('Domicilio.GenIngresos.campos')
            {{ Form::close() }}
        @endif
    </div>
</div>
@endcanany