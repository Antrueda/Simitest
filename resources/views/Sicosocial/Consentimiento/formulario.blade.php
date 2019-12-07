@canany(['vsiconsentimiento-crear', 'vsiconsentimiento-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">21. Consentimiento informado</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.consentimiento', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.Consentimiento.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.consentimiento.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.Consentimiento.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany