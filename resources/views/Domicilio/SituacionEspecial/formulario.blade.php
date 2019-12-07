@canany(['csdsituacionespecial-crear', 'csdsituacionespecial-editar'])
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">3. Situaciones especiales</h3>
    </div>
    <div class="card-body">
        {!! Form::model($dato, ['route' => ['CSD.situacionespecial', $dato->id], 'class' => 'form-horizontal']) !!}
            {{ Form::hidden('csd_id', $dato->id) }}
            @include('Domicilio.SituacionEspecial.campos')
        {!! Form::close() !!}
    </div>
</div>
@endcanany