<div class="form-group col-md-6">
    {{ Form::label('dtiestan', 'Fecha Tiempo Standard', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('dtiestan', null, ['class' =>'form-control col-form-label-sm' ,'id'=>'dtiestan','placeholder' => 'Fecha Tiempo Standard', 'maxlength' => '120', 'autofocus']) }}
</div>
<div class="form-group col-md-6">
    {{ Form::label('itiestan', 'Tiempo Standard', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('itiestan', null, ['class' =>'form-control col-form-label-sm','id'=>'itiestan','placeholder' => 'Tiempo Standard', 'maxlength' => '120', 'autofocus']) }}
</div>
<div class="form-group col-md-6">
    {{ Form::label('dtiegabe', 'Fecha Tiempo Gabela', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('dtiegabe', null, ['class' =>'form-control col-form-label-sm' ,'id'=>'dtiegabe','placeholder' => 'Fecha Tiempo Gabela', 'maxlength' => '120', 'autofocus']) }}
</div>
<div class="form-group col-md-6">
    {{ Form::label('itiegabe', 'Tiempo Gabela', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('itiegabe', null, ['class' =>'form-control col-form-label-sm','id'=>'itiegabe' ,'placeholder' => 'Tiempo Gabela', 'maxlength' => '120', 'autofocus']) }}
</div>
<div class="form-group col-md-6">
    {{ Form::label('dtigafin', 'Fecha Tiempo Gabela Fin de Mes', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('dtigafin', null, ['class' =>'form-control col-form-label-sm' ,'id'=>'dtigafin','placeholder' => 'Fecha Tiempo Gabela Fin de Mes', 'maxlength' => '120', 'autofocus']) }}
</div>
<div class="form-group col-md-6">
    {{ Form::label('itigafin', 'Tiempo Gabela Fin de Mes', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('itigafin', null, ['class' =>'form-control col-form-label-sm','id'=>'itigafin' ,'placeholder' => 'Tiempo Gabela Fin de Mes', 'maxlength' => '120', 'autofocus']) }}
</div>
<div class="form-group col-md-6">
    {{ Form::label('itigatra', 'Tiempo Traslados', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('itigatra', null, ['class' =>'form-control col-form-label-sm','id'=>'itigatra' ,'placeholder' => 'Tiempo Traslados', 'autofocus']) }}
</div>
