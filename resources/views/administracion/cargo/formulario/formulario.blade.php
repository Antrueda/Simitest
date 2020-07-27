<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('s_cargo', 'Cargo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_cargo', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'Cargo nuevo', 'maxlength' => '120', 'autofocus']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('dtiestan', 'Fecha Tiempo Standard', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('dtiestan', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'id'=>'dtiestan','readonly' ,'placeholder' => 'Fecha Tiempo Standard', 'maxlength' => '120', 'autofocus']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('itiestan', 'Tiempo Standard', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('itiestan', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"],'id'=>'itiestan','readonly' ,'placeholder' => 'Tiempo Standard', 'maxlength' => '120', 'autofocus']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('dtiegabe', 'Fecha Tiempo Gabela', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('dtiegabe', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'id'=>'dtiegabe','readonly','placeholder' => 'Tiempo Gabela', 'maxlength' => '120', 'autofocus']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('itiegabe', 'Tiempo Gabela', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('itiegabe', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"],'id'=>'itiegabe' ,'readonly','placeholder' => 'Tiempo Gabela', 'maxlength' => '120', 'autofocus']) }}
    </div>
</div>
