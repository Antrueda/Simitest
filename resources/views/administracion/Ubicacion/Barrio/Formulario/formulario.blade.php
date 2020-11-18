<div class="form-row align-items-end">
<div class="form-group col-md-6">
        {{ Form::label('s_barrio', 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_barrio', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        @if($errors->has('s_barrio'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_barrio') }}
        </div>
        @endif
    </div>


    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
