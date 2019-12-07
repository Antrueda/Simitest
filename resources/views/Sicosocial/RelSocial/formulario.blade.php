@canany(['vsibienvenida-crear', 'vsibienvenida-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">6. Relaciones sociales</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.relsocial', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    {{ Form::hidden('sis_nnaj_id', $nnaj->id) }}
                    @include('Sicosocial.RelSocial.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.relsocial.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    {{ Form::hidden('sis_nnaj_id', $nnaj->id) }}
                    @include('Sicosocial.RelSocial.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany