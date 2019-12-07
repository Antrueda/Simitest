@canany(['vsipresabusosexual-crear', 'vsipresabusosexual-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">14. Presunto abuso sexual</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.presabusosexual', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.PresAbusoSexual.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.presabusosexual.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.PresAbusoSexual.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany