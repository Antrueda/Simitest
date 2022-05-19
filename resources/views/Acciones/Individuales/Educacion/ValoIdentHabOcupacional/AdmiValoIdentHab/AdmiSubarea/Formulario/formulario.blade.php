<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('nombre', 'Nombre Sub-área:', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('vih_area_id', 'Área:', ['class' => 'control-label']) !!}
            {!! Form::select('vih_area_id', $todoxxxx['areas'], null, ['name' => 'vih_area_id', 'class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione']) !!}
            @if($errors->has('vih_area_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('vih_area_id') }}
            </div>
            @endif
        </div>
    @endisset   
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
    </div>
    @endif
</div>




