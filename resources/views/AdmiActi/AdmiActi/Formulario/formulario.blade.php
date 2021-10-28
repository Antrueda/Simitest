
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('nombre', 'nombre actividad:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_depen_id', 'upi/dependencia:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('sis_depen_id', [], null, ['name' => 'sis_depen_id[]', 'class' => 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('descripcion', 'Descripción:', ['class' => 'control-label']) !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('descripcion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('descripcion') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_esta_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
