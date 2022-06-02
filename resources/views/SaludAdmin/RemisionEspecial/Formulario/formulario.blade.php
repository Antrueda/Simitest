<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre de Remisión Especial', 'maxlength' => '120', 'autofocus','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
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
