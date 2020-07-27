<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('nombre', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_cvital_id', 'Ciclo Vital', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_cvital_id', $todoxxxx["i_prm_cvital_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_tdependen_id', 'Tipo de Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tdependen_id', $todoxxxx["i_prm_tdependen_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_dependencia_id', 'Dependencia padre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_dependencia_id', $todoxxxx["sis_dependencia_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_sexo_id', 'Sexo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sexo_id', $todoxxxx["i_prm_sexo_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_departamento_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_departamento_id', $todoxxxx["sis_departamento_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_municipio_id', 'Municipio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx["sis_municipio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_localidad_id', 'Localidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_localidad_id', $todoxxxx["sis_localidad_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_upz_id', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_upz_id', $todoxxxx["sis_upz_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_barrio_id', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_barrio_id', $todoxxxx["sis_barrio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_correo', 'Correo electrónico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_correo', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control col-form-label-sm">{{ $todoxxxx['estadoxx'] }}
        </div>
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

    <div class="form-group col-md-12">
        {{ Form::label('s_observacion','Observación del registro') }}
        {{ Form::textarea('s_observacion', null,['class'=>'form-control form-control-sm']) }}
    </div>
</div>

@if(isset($todoxxxx["actualiz"]))
@component('administracion.dependencia.Datatable.index', ['todoxxxx'=>$todoxxxx])
@slot('tableName')
sisservicios
@endslot
@slot('class')
@endslot
@endcomponent
@endif

</div>
