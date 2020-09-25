@canany(['csdxxxxx-crear', 'csdxxxxx-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">1. Datos básicos</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {!! Form::open(['route' => ['CSD.basico', $dato->id], 'class' => 'form-horizontal', 'name' => 'forma']) !!}
                {{ Form::hidden('csd_id', $dato->id) }}
                @include('Domicilio.Basico.campos')
            {!! Form::close() !!}
        @else
            {!! Form::model($valor, ['route' => ['CSD.basico.editar', $dato->id, $valor->id], 'method' => 'PUT', 'name' => 'forma']) !!}
                {{ Form::hidden('csd_id', $valor->csd_id) }}
                @include('Domicilio.Basico.campos')
            {!! Form::close() !!}
        @endif
    </div>
</div>
@endcanany