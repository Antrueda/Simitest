<div class="form-group row">
  <div class="form-group col-md-4">
    {{ Form::label('nombre', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_cvital_id', 'Ciclo Vital', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_cvital_id', $todoxxxx["i_prm_cvital_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_tdependen_id', 'Tipo de Dependencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tdependen_id', $todoxxxx["i_prm_tdependen_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_dependen_id', 'Dependencia padre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_dependen_id', $todoxxxx["sis_dependen_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('i_prm_sexo_id', 'Sexo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_sexo_id', $todoxxxx["i_prm_sexo_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_departamento_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_departamento_id', $todoxxxx["sis_departamento_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_municipio_id', 'Municipio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_municipio_id', $todoxxxx["sis_municipio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_localidad_id', 'Localidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_localidad_id', $todoxxxx["sis_localidad_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_upz_id', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_upz_id', $todoxxxx["sis_upz_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('sis_barrio_id', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sis_barrio_id', $todoxxxx["sis_barrio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('s_correo', 'Correo electrónico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_correo', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col-md-3" >
    {{ Form::label('vinculac','Tiempo de actualización') }}
    <div id="vinculac" class="form-group">
      <div  style="float: left;" class="form-group">
        {{Form::date('d_carga', null,['class'=>'form-control form-control-sm','id'=>'d_carga',$todoxxxx['readonly']])}}
      </div>
      <div  style="float: left; width:70px" class="form-group">
        {{ Form::number('i_tiempo', null,['class'=>'form-control form-control-sm','id'=>'i_tiempo','readonly']) }}
      </div>
    </div>
  </div>
  <div class="form-group col-md-4" style="height: ">
    {{ Form::label('', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
    <div>{{ $todoxxxx['estadoxx'] }}
    </div>
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
