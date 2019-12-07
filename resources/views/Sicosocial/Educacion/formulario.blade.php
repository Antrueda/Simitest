@canany(['vsibienvenida-crear', 'vsibienvenida-editar'])
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h3 class="card-title">10. Educación</h3>
        </div>
        <div class="card-body">
            @if(!$valor)
                {!! Form::open(['route' => ['VSI.educacion', $vsi->id], 'class' => 'form-horizontal']) !!}
                    {{ Form::hidden('vsi_id', $vsi->id) }}
                    @include('Sicosocial.Educacion.campos')
                {!! Form::close() !!}
            @else
                {!! Form::model($valor, ['route' => ['VSI.educacion.editar', $vsi->id, $valor->id], 'method' => 'PUT']) !!}
                    {{ Form::hidden('vsi_id', $valor->vsi_id) }}
                    @include('Sicosocial.Educacion.campos')
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endcanany