
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('nombre', 'Nombre área de interés:', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-12">
        {!! Form::label('descripcion', 'Descripción:', ['class' => 'control-label']) !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('descripcion')"]) !!}
        <p id="descripcion_char_counter" class="text-right">0/4000</p>
        @if($errors->has('descripcion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('descripcion') }}
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
        {!! Form::label('estusuario_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('estusuario_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
    </div>
</div>
