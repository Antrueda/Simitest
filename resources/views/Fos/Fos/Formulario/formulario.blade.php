<div class="form-row align-items-end">
    <div class="form-group col-md-6">
        {{ Form::label('sis_depen_id', 'UPI / Dependencia:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id', $todoxxxx['dependen'], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('d_fecha_diligencia', 'Fecha Diligenciamiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('d_fecha_diligencia', null, ['class' => $errors->first('d_fecha_diligencia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'max' => $todoxxxx['hoyxxxxx'],'style'=>'width: 100%;']) }}

    </div>
</div>


<div class="form-row align-items-end">
    <div class="form-group col-md-6">
        {{ Form::label('area_id', 'Área / Contexto Pedagógico:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('area_id', $todoxxxx["areacont"], null, ['class' => $errors->first('area_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','data-toggle'=>'tooltip','data-placement'=>'top', 'title'=>'Hooray']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('fos_tse_id', 'Tipo de Seguimiento:', ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="fos_tse_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('fos_tse_id', $todoxxxx["seguixxx"], null, ['class' => $errors->first('fos_tse_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('fos_stse_id', 'Sub-Tipo de Seguimiento:', ['class' => 'control-label col-form-label-sm']) }}
        <a href="#" propiedad="fos_stse_id" class="mouseover" title=""><i class="far fa-question-circle"></i></a>
        {{ Form::select('fos_stse_id', $todoxxxx["tipsegui"], null, ['class' => $errors->first('fos_stse_id') ? 'form-control select2 form-control-sm is-invalid mouseover1' : 'form-control select2 form-control-sm mouseover1']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_entidad_id', 'Entidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_entidad_id', $todoxxxx["entidadx"], null, ['class' => $errors->first('sis_entidad_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('s_observacion', 'Observación y/o Seguimiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('s_observacion', null, ['class' => $errors->first('s_observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'rows' => 4, 'cols' => 80, 'style' => 'resize:none', 'id' => 's_observacion', 'maxlength' => '4000',"onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase' ]) }}
        <p id="contadorobservacion">0/4000</p>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('fi_compfami_id', 'Acudiente:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('fi_compfami_id', $todoxxxx["compfami"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('i_responsable', 'Funcionario(a) y/o contratista que realiza el seguimiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_responsable', $todoxxxx['usuarios'], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
</div>
<div class="form-row align-items-end">
    @include('layouts.registro')
</div>
