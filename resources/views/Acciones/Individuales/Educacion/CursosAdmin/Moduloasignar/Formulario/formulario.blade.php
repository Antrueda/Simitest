<div>
<div class="form-group row">
    <div class="form-group col-md-3">
        {{ Form::label('motivoe_id', 'Motivo Primario:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('motivoe_id', $todoxxxx['seguixxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('motivoe_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('motivoe_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('motivoese_id', 'Motivo Secundario:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('motivoese_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'subtipo']) }}
        @if($errors->has('motivoese_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('motivoese_id') }}
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
