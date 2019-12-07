@canany(['vsiantecedente-crear', 'vsiantecedente-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">8. Antecedentes</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.antecedente', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.Antecedente.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.antecedente.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.Antecedente.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany