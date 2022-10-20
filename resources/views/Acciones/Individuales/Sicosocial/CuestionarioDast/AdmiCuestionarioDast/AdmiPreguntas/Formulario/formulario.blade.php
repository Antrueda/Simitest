<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('pregunta', 'Pregunta:', ['class' => 'control-label']) !!}
        {!! Form::text('pregunta', null, ['class' => 'form-control form-control-sm text-uppercase','maxlength' => '299']) !!}
        @if($errors->has('pregunta'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('pregunta') }}
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




