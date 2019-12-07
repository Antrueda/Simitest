@canany(['vsiareaajuste-crear', 'vsiareaajuste-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">19. Áreas de ajuste sicosocial</h3>
        </div>
        <div class="card-body">
            {!! Form::model($vsi, ['route' => ['VSI.areaajuste', $vsi->id], 'class' => 'form-horizontal']) !!}
                {{ Form::hidden('vsi_id', $vsi->id) }}
                @include('Sicosocial.AreaAjuste.campos')
            {!! Form::close() !!}
        </div>
    </div>
@endcanany