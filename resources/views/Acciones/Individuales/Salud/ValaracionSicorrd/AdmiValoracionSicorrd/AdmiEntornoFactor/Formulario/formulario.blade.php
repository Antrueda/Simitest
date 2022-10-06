
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('vsrrd_entorno_id', 'Entorno:', ['class' => 'control-label']) !!}
        {!! Form::select('vsrrd_entorno_id', $todoxxxx['entornos'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('vsrrd_entorno_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('vsrrd_entorno_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('vsrrd_factor_id', 'Factor:', ['class' => 'control-label']) !!}
        {!! Form::select('vsrrd_factor_id', $todoxxxx['factores'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('vsrrd_factor_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('vsrrd_factor_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('estusuarios_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('estusuarios_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('estusuarios_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuarios_id') }}
        </div>
        @endif
    </div>
</div>
