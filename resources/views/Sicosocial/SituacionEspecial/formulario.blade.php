@canany(['vsisituacionespecial-crear', 'vsisituacionespecial-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">15. Situación especial y ESCNNA</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.situacionespecial', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.SituacionEspecial.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.situacionespecial.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.SituacionEspecial.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany