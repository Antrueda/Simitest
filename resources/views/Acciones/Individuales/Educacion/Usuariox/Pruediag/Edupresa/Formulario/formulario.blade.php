<div class="row">
    <div class="col-md-6">
        {{ Form::label('eda_grado_id', 'Grado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('eda_grado_id',$todoxxxx['gradoxxx'], null, ['class' => $errors->first('eda_grado_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('eda_grado_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('eda_grado_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('eda_asignatu_id', 'Asignatura', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('eda_asignatu_id',$todoxxxx['asignatu'], null, ['class' => $errors->first('eda_asignatu_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('eda_asignatu_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('eda_asignatu_id') }}
        </div>
        @endif
    </div>
    <div class="col-md-6">
        {{ Form::label('eda_presaber_id', 'Presaber', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('eda_presaber_id',$todoxxxx['presaber'], null, ['class' => $errors->first('eda_presaber_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('eda_presaber_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('eda_presaber_id') }}
        </div>
        @endif
    </div>
    <div class="col-6">
        {{ Form::label('persdili_id', 'PERSONA QUIEN DILIGENCIA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('persdili_id', $todoxxxx['respoupi'], null, ['class' => $errors->first('persdili_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    </div>
</div>
<div class="row">
    @include('layouts.registro')
</div>
