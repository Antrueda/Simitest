
<div class="form-row">

<div class="forn-group col-md-6">
        {!! Form::label('prm_lugactiv_id', 'Espacio donde se realiza la actividad:', ['class' => 'control-labl']) !!}
        {!! Form::select('prm_lugactiv_id', $todoxxxx['lugarxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('prm_lugactiv_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_lugactiv_id') }}
            </div>
        @endif
    </div>

<div class="form-group col-md-6">
        {!! Form::label('item', 'Item General:', ['class' => 'control-label']) !!}
        {!! Form::text('item', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('item'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('item') }}
        </div>
        @endif
    </div>


    <div class="form-group col-md-12">
        {!! Form::label('nombre', 'Nombre de tipo actividad:', ['class' => 'control-label']) !!}
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
        {!! Form::label('estusuarios_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('estusuarios_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('estusuarios_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuarios_id') }}
        </div>
        @endif
    </div>
</div>
