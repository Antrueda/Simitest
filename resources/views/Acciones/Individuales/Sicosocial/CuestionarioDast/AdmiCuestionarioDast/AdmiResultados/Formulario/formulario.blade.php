
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('nombre', 'Puntaje:', ['class' => 'control-label']) !!}
        <div class="row">
            <div class="col-md-6">
                {!! Form::label('minimo', 'Minimo:', ['class' => 'control-label']) !!}
                {!! Form::number('minimo', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
                @if($errors->has('minimo'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('minimo') }}
                </div>
                @endif
            </div>
            <div class="col-md-6">
                {!! Form::label('superior', 'Superior:', ['class' => 'control-label']) !!}
                {!! Form::number('superior', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
                @if($errors->has('superior'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('superior') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('grado_problema', 'Grado de problema (por consumo de drogas):', ['class' => 'control-label']) !!}
        {!! Form::text('grado_problema', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('grado_problema'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('grado_problema') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('accion_id', 'Acción:', ['class' => 'control-label']) !!}
        {!! Form::select('accion_id', $todoxxxx['acciones'], null, ['name' => 'accion_id', 'class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione']) !!}
        @if($errors->has('accion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('accion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('estusuarios_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('estusuarios_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('estusuarios_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuarios_id') }}
        </div>
        @endif
    </div>
</div>
