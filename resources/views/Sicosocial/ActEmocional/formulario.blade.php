@canany(['vsiactemocional-crear', 'vsiactemocional-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">13. Activación emocional</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.actemocional', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.ActEmocional.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.actemocional.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.ActEmocional.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany