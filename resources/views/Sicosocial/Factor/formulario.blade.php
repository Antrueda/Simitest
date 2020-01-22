@canany(['vsifactor-crear', 'vsifactor-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">17. Factores</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    @if ($vsi->sis_esta_id == 1)
                        {!! Form::open(['route' => ['VSI.factor.protector', $vsi->id], 'class' => 'form-horizontal']) !!}
                            {{ Form::hidden('vsi_id', $vsi->id) }}
                            @include('Sicosocial.Factor.camposprotector')
                        {!! Form::close() !!}
                    @endif
                    @include('Sicosocial.Factor.datosprotector')
                </div>
                <div class="col-md-6">
                    @if ($vsi->sis_esta_id == 1)
                        {!! Form::open(['route' => ['VSI.factor.riesgo', $vsi->id], 'class' => 'form-horizontal']) !!}
                            {{ Form::hidden('vsi_id', $vsi->id) }}
                            @include('Sicosocial.Factor.camposriesgo')
                        {!! Form::close() !!}
                    @endif
                    @include('Sicosocial.Factor.datosriesgo')
                </div>
            </div>
        </div>
    </div>
@endcanany