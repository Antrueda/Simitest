<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('ag_recurso_id', 'Recursos', ['class' => 'control-label']) !!}
        {!! Form::select('ag_recurso_id', $todoxxxx['recursos'], $todoxxxx['recusele'] ?? null, ['class' => 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('ag_recurso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ag_recurso_id') }}
        </div>
        @endif
    </div>
</div>
