@canany(['vsidatobasico-crear', 'vsidatobasico-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">1. Datos básicos</h3>
        </div>
        <div class="card-body">
            {!! Form::model($nnaj, ['route' => ['VSI.basico.editar', $vsi->id, $nnaj->id], 'method' => 'PUT']) !!}
                {{ Form::hidden('sis_nnaj_id', $nnaj->id) }}
                @include('Sicosocial.Basico.campos')
            {!! Form::close() !!}
            @if($vsi->sis_esta_id == 1)
                {!! Form::open(['route' => ['VSI.basico.razon', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.Basico.camposrazon')
                {!! Form::close() !!}
            @endif
            @include('Sicosocial.Basico.datosrazon')
        </div>
    </div>
@endcanany