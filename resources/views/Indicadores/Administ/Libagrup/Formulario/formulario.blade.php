<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('in_indiliba_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('in_indiliba_id', $todoxxxx['linebase'], null, ['class' => $errors->first('in_indiliba_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_indiliba_id']) }}
        @if($errors->has('in_indiliba_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_indiliba_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('in_libagrup_id', 'GRUPO:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('in_libagrup_id', $todoxxxx['maximoxx'], null, ['class' => $errors->first('in_libagrup_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_libagrup_id']) }}
        @if($errors->has('in_libagrup_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_libagrup_id') }}
        </div>
        @endif
    </div>
</div>
