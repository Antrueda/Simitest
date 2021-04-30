<div class="form-row">
<div class="form-group col-md-6" id="export-form">
        {{ Form::label('yearxxxx', 'Año', ['class' => 'control-label']) }}
        {{ Form::select('yearxxxx', $todoxxxx['aniosxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('yearxxxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('yearxxxx') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('monthxxx', 'Mes', ['class' => 'control-label']) }}
        {{ Form::select('monthxxx', $todoxxxx['mesesxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('monthxxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('monthxxx') }}
        </div>
        @endif
    </div>
    <div class="form-group col-12 col-md-9">
        {!! Form::label('tablesxx', 'Tablas', ['class' => 'control-label']) !!}
        {!! Form::select('tablesxx', $todoxxxx['tablesxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple', 'name' => 'tablesxx[]']) !!}
        @if($errors->has('tablesxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tablesxx') }}
        </div>
        @endif
    </div>
    <div class="col-12 col-sm-3 d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-sm btn-primary mx-2" onclick="buildTables()">Seleccionar</button>
        <button type="button" class="btn btn-sm btn-primary mx-2" onclick="destroyTables()">Limpiar</button>
    </div>
    <div id="tables" class="row col-sm-12">
    </div>
    <div class="col-md-6 p-2">
        {!! Form::label('', 'Campos Seleccionados', ['class' => 'control-label']) !!}
        <div class="border rounded p-2" id="fieldsSelected"></div>
    </div>
</div>
