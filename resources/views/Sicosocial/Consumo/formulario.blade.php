@canany(['vsiconsumo-crear', 'vsiconsumo-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">16. Consumo de sustancias psicoactivas</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.consumo', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.Consumo.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.consumo.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.Consumo.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div> 
@endcanany