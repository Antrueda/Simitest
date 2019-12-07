@canany(['vsiconcepto-crear', 'vsiconcepto-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">20. Impresión diagnóstica y análisis social</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.concepto', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.Concepto.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.concepto.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.Concepto.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany