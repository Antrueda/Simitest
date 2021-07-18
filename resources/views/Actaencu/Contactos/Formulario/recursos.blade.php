<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('recursos', 'Recursos', ['class' => 'control-label']) !!}
        {!! Form::select('recursos', $todoxxxx['recursos'], $todoxxxx['recusele'] ?? null, ['id' => 'recursos', 'class' => 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('recursos'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('recursos') }}
        </div>
        @endif
    </div>
</div>
