@canany(['csdjusticia-crear', 'csdjusticia-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">4. Justicia restaurativa</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {!! Form::open(['route' => ['CSD.justicia', $dato->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('csd_id', $dato->id) }}
                @include('Domicilio.Justicia.campos')
            {!! Form::close() !!}
        @else
            {!! Form::model($valor, ['route' => ['CSD.justicia.editar', $dato->id, $valor->id], 'method' => 'PUT']) !!}
                {{ Form::hidden('csd_id', $valor->csd_id) }}
                @include('Domicilio.Justicia.campos')
            {!! Form::close() !!}
        @endif
    </div>
</div>
@endcanany