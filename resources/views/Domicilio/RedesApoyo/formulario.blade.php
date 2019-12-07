@canany(['csdredesapoyo-crear', 'csdredesapoyo-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">11. Redes Sociales de Apoyo</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <h6>11.1 Antecedentes Institucionales</h6>
            </div>
        </div>
        {!! Form::open(['route' => ['CSD.redesapoyo.pasado', $dato->id], 'class' => 'form-horizontal']) !!}
            {{ Form::hidden('csd_id', $dato->id) }}
            @include('Domicilio.RedesApoyo.camposred')
        {!! Form::close() !!}
        @include('Domicilio.RedesApoyo.datosred')
        <hr>
        <div class="row">
            <div class="col-md">
                <h6>11.2 Redes de Apoyo Actuales</h6>
            </div>
        </div>
        {!! Form::open(['route' => ['CSD.redesapoyo.actual', $dato->id], 'class' => 'form-horizontal']) !!}
            {{ Form::hidden('csd_id', $dato->id) }}
            @include('Domicilio.RedesApoyo.camposRedesActuales')
        {!! Form::close() !!}
        @include('Domicilio.RedesApoyo.datosRedesActuales')

        <div class="row mt-3">
            <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
        </div>
    </div>
</div>
@endcanany