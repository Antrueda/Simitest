<div class="form-group row">
    <div class="form-group col-md-6">
        {!! Form::label('s_grado', 'Grado:', ['class' => 'control-label']) !!}
        {!! Form::text('s_grado', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('s_grado'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_grado') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('numero', 'Numero:', ['class' => 'control-label']) !!}
        {!! Form::number('numero', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('numero'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('numero') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
