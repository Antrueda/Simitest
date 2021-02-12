<div class="form-row">
<div class="form-group col-md-6">
        {{ Form::label('prm_doc_fisico_id', 'Año', ['class' => 'control-label']) }}
        {{ Form::select('prm_doc_fisico_id', $todoxxxx['aniosxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_doc_fisico_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_doc_fisico_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prm_doc_fisico_id', 'Mes', ['class' => 'control-label']) }}
        {{ Form::select('prm_doc_fisico_id', $todoxxxx['mesesxxx'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_doc_fisico_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_doc_fisico_id') }}
        </div>
        @endif
    </div>

</div>
