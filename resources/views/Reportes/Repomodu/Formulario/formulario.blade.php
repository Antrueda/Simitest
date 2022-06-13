<div class="form-group row">
    
    <div class="form-group col-md-6">
        {!! Form::label('archivo', 'Archivo:', ['class' => 'control-label']) !!}
        {!! Form::file('archivo', null, ['class' => 'form-control form-control-sm' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('archivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('archivo') }}
        </div>
        @endif
    </div>
</div>
