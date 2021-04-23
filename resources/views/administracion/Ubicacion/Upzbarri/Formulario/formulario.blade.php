<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('sis_localupz_id', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_localupz_id', $todoxxxx["localida"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_localupz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localupz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_barrio_id', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_barrio_id', $todoxxxx["upzsxxxx"], null, ['class' => 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('simianti_id', 'Código Antiguo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('simianti_id', null, ['class' => $errors->first('simianti_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('simianti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('simianti_id') }}
        </div>
        @endif
    </div>
</div>
