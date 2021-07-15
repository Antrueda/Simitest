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
        {{ Form::label('espaciocant', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('espaciocant', null, ['class' => 'form-control form-control-sm','max'=>'20', 'min'=>'0',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('espaciocant'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('espaciocant') }}
        </div>
        @endif
    </div>
 </div>
