<div class="row">
    <div class="col-md-6">
        {{ Form::label('eda_grado_id', 'Grado', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->eduPruediag->edaGrado->s_grado }}
        </div>
    </div>
    <div class="col-md-6">
        {{ Form::label('eda_asignatu_id', 'Asignatura', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->edaAsignatu->s_asignatura }}
        </div>
    </div>
    <div class="col-md-6">
        {{ Form::label('eda_presaber_id', 'Presaber', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->edaPresaber->s_presaber }}
        </div>
    </div>
    <div class="col-6">
        {{ Form::label('persdili_id', 'PERSONA QUIEN DILIGENCIA', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->userCrea->name }}
        </div>
    </div>
</div>
<div class="row">
    @include('layouts.registro')
</div>
