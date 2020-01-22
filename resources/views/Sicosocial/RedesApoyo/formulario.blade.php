@canany(['vsiredesapoyo-crear', 'vsiredesapoyo-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">7. Redes sociales de apoyo</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {!! Form::open(['route' => ['VSI.redesapoyo', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                @include('Sicosocial.RedesApoyo.campos')
            {!! Form::close() !!}
        @else
            {!! Form::model($valor, ['route' => ['VSI.redesapoyo.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                @include('Sicosocial.RedesApoyo.campos')
            {!! Form::close() !!}
        @endif
        <hr>
        @if ($vsi->sis_esta_id == 1)
            {!! Form::open(['route' => ['VSI.redesapoyo.actual', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                @include('Sicosocial.RedesApoyo.camposRedesActuales')
            {!! Form::close() !!}
        @endif
        @include('Sicosocial.RedesApoyo.datosRedesActuales')
        <hr>
        @if ($vsi->sis_esta_id == 1)
            {!! Form::open(['route' => ['VSI.redesapoyo.pasado', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                @include('Sicosocial.RedesApoyo.camposred')
            {!! Form::close() !!}
        @endif
        @include('Sicosocial.RedesApoyo.datosred')
        
    </div>
</div>
@endcanany