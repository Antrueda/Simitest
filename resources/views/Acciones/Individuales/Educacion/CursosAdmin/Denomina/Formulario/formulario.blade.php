<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('s_denominas', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_denominas', null, ['class' => $errors->first('s_denominas') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Unidad de aprendizaje', 'maxlength' => '2000', 'autofocus','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
        @if($errors->has('s_denominas'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_denominas') }}
        </div>
        @endif
    </div>



    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('estusuario_id','Justificación Estado') }}
        {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
    </div>
</div>
