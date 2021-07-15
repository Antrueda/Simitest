<div class="form-row align-items-end">
    
    <div class="form-group col-md-6">
        {{ Form::label('prm_espacio_id', 'Espacio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_espacio_id', $todoxxxx["espaciox"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_espacio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_espacio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('prm_otrafamilia_id', '¿Comparte?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_otrafamilia_id',  $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_otrafamilia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_otrafamilia_id') }}
        </div>
        @endif
    </div>
 </div>
