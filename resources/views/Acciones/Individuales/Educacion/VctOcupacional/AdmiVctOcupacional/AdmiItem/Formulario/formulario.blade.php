
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('nombre', 'Nombre Item:', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control form-control-sm text-uppercase', 'maxlength' => '100',]) !!}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('vcto_subarea_id', 'Tipo Sub-área:', ['class' => 'control-label']) !!}
        {!! Form::select('vcto_subarea_id', $todoxxxx['subareas'], null, ['name' => 'vcto_subarea_id', 'class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione']) !!}
        @if($errors->has('vcto_subarea_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('vcto_subarea_id') }}
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
