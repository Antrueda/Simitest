<div class="form-group row">
    <div class="form-group col-md-4">
        {{ Form::label('sis_depen_id', 'Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_servicio_id', 'Servicio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_servicio_id', $todoxxxx["servicio"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    @include('layouts.registro')
</div>
