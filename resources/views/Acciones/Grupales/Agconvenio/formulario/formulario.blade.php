
<div class="form-group row">
  <div class="form-group col">
    {{ Form::label('s_convenio', 'Nombre Convenio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('s_convenio', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
  </div>
  <div class="form-group col" style="height: ">
    {{ Form::label('i_prm_tconvenio_id', 'Tipo de convenio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_tconvenio_id', $todoxxxx["umedidax"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col" style="height: ">
    {{ Form::label('i_prm_entidad_id', 'Entidad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('i_prm_entidad_id', $todoxxxx["tconbenio"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
<div class="form-group row">
  <div class="form-group col" style="height: ">
    {{ Form::label('i_nconvenio', 'N° Convenio', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('i_nconvenio', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col" style="height: ">
    {{ Form::label('d_subscrip', 'Fecha de subscripción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('d_subscrip', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
  <div class="form-group col" style="height: ">
    {{ Form::label('d_terminac', 'Fecha de terminación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('d_terminac', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
  </div>
</div>
<div class="form-group col">
    {{ Form::label('s_descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('s_descripcion', null, ['class' =>'form-control col-form-label-sm',$todoxxxx["readonly"] ,'placeholder' => 'nombre del indicador', 'maxlength' => '120', 'autofocus']) }}
  </div>