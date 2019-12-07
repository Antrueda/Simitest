@canany(['vsiestemocional-crear', 'vsiestemocional-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">12. Estado Emocional</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {{ Form::open(['route' => ['VSI.estemocional', $vsi->id], 'class' => 'form-horizontal']) }}
            {{ Form::hidden('vsi_id', $vsi->id) }}
        @include('Sicosocial.EstEmocional.campos')
            {{ Form::close() }}
        @else
            {{ Form::model($valor, ['route' => ['VSI.estemocional.editar', $vsi->id, $valor->id], 'method' => 'PUT']) }}
            {{ Form::hidden('vsi_id', $valor->vsi_id) }}
        @include('Sicosocial.EstEmocional.campos')
            {{ Form::close() }}
        @endif
    </div>
</div>
@endcanany