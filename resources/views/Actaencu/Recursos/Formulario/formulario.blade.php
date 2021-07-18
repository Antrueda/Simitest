<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('ag_recurso_id', 'Recursos', ['class' => 'control-label']) !!}

          {{ Form::select('ag_recurso_id[]',  $todoxxxx['recursos'], null, ['class' => $errors->first('razones') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'ag_recurso_id', 'multiple']) }}


        @if($errors->has('ag_recurso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ag_recurso_id') }}
        </div>
        @endif
    </div>
</div>
