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
    <div class="form-group col-md-6">
        {!! Form::label('tablesxx', 'Tablas Principal', ['class' => 'control-label']) !!}
        {!! Form::select('tablesxx', $todoxxxx['tablesxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('tablesxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tablesxx') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('columnsx', 'Tablas Principal', ['class' => 'control-label']) !!}
        {!! Form::select('columnsx', [], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('columnsx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('columnsx') }}
        </div>
        @endif
    </div>
</div>
