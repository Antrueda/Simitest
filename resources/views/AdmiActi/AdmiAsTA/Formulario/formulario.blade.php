
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('aa_tipo_actividad_id', 'tipo actividad:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('aa_tipo_actividad_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('aa_tipo_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('aa_tipo_actividad_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('aa_actividad_id', 'actividad:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('aa_actividad_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('aa_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('aa_actividad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'upi/dependencia:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('sis_depen_id', [], null, ['name' => 'sis_depen_id[]', 'class' => 'form-control form-control-sm select2', 'multiple']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
