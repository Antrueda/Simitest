<div>
<div class="form-group row">
    <div class="form-group col-md-3">
        {{ Form::label('sis_entidad_id', 'ENTIDAD:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_entidad_id', $todoxxxx['seguixxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('sis_entidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_entidad_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('sis_servicio_id', 'Programa/Servicio:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_servicio_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'subtipo']) }}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
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
</div>

</div>
