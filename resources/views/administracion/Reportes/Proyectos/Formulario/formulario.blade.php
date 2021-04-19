<div class="form-row">
<div class="form-group col-md-6">
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
        {!! Form::label('tablrela', 'Tablas Relacionadas', ['class' => 'control-label']) !!}
        {!! Form::select('tablrela', $todoxxxx['tablrela'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('tablrela'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tablrela') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('camposxx', 'Campos', ['class' => 'control-label']) !!}
        {!! Form::select('camposxx', $todoxxxx['camposxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('camposxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('camposxx') }}
        </div>
        @endif
    </div>
</div>
