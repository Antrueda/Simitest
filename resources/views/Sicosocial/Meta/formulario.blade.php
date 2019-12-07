@canany(['vsimeta-crear', 'vsimeta-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">18. Potencialidades y metas</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    @if ($vsi->activo == 1)
                        {!! Form::open(['route' => ['VSI.meta.potencialidad', $vsi->id], 'class' => 'form-horizontal']) !!}
                            {{ Form::hidden('vsi_id', $vsi->id) }}
                            @include('Sicosocial.Meta.campospotencialidad')
                        {!! Form::close() !!}
                    @endif
                    @include('Sicosocial.Meta.datospotencialidad')
                </div>
                <div class="col-md-6">
                    @if ($vsi->activo == 1)
                        {!! Form::open(['route' => ['VSI.meta.meta', $vsi->id], 'class' => 'form-horizontal']) !!}
                            {{ Form::hidden('vsi_id', $vsi->id) }}
                            @include('Sicosocial.Meta.camposmeta')
                        {!! Form::close() !!}
                    @endif
                    @include('Sicosocial.Meta.datosmeta')
                </div>
            </div>
        </div>
    </div>
@endcanany