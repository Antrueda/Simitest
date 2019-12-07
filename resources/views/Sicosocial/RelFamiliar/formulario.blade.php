@canany(['vsirelfamiliar-crear', 'vsirelfamiliar-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">3. Relaciones familiares</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.relfamiliar', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.RelFamiliar.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.relfamiliar.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.RelFamiliar.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany