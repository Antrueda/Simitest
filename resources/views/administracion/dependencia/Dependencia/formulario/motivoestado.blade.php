<div class="form-group col-md-4">
    {{ Form::label('sis_esta_id','Estado') }}
    {{ Form::select('sis_esta_id',$todoxxxx['estadoxx'], null,['id'=>'sis_esta_id','class'=> $errors->first('sis_esta_id') ? 'form-control is-invalid select2' :'form-control form-control-sm select2','autofocus']) }}
    @if($errors->has('sis_esta_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('sis_esta_id') }}
    </div>
    @endif
</div>

<div class="form-group col-md-{{isset($anchoxxx)?$anchoxxx:4}}">
    {{ Form::label('estusuario_id','Justificación Estado') }}
    {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
    @if($errors->has('estusuario_id'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('estusuario_id') }}
    </div>
    @endif
</div>
