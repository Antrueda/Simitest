@canany(['vsigeningresos-crear', 'vsigeningresos-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">9. Generación de ingresos</h3>
    </div>
    <div class="card-body">
        @if(!$valor)
            {{ Form::open(['route' => ['VSI.genIngresos', $vsi->id], 'class' => 'form-horizontal']) }}
            {{ Form::hidden('vsi_id', $vsi->id) }}
        @include('Sicosocial.GenIngresos.campos')
            {{ Form::close() }}
        @else
            {{ Form::model($valor, ['route' => ['VSI.genIngresos.editar', $vsi->id, $valor->id], 'method' => 'PUT']) }}
            {{ Form::hidden('vsi_id', $valor->vsi_id) }}
        @include('Sicosocial.GenIngresos.campos')
            {{ Form::close() }}
        @endif
    </div>
</div>
@endcanany