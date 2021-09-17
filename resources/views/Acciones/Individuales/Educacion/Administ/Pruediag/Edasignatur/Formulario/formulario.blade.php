<div class="form-group row">
    <div class="form-group col-md-12">
        {!! Form::label('s_asignatura', 'Asignatura:', ['class' => 'control-label']) !!}
        {!! Form::text('s_asignatura', null, ['class' => 'form-control form-control-sm text-uppercase' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('s_asignatura'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_asignatura') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
