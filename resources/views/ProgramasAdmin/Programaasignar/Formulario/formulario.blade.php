<div class="form-group row">
    <div class="form-group col-md-3">
        {{ Form::label('conve_id', 'Convenio:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('conve_id', $todoxxxx['sis_depens'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('conve_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('conve_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('sede_id', 'Sede/Centro:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sede_id', $todoxxxx['sis_servicios'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('sede_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sede_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('progra_id', 'Programa:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('progra_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control','id'=>'progra_id']) }}
        @if($errors->has('progra_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('progra_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('tipop_id', 'Tipo de Programa:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('tipop_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control','id'=>'tipop_id']) }}
        @if($errors->has('tipop_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipop_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('modal_id', 'Modalidad:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('modal_id', $todoxxxx['gradoxxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control','id'=>'modal_id']) }}
        @if($errors->has('modal_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('modal_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
        'form-control is-invalid' : 'form-control','data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
