<div class="form-row align-items-end">
<div class="form-group col-md-4">
        {{ Form::label('s_pais', 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_pais', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        @if($errors->has('s_pais'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_pais') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_iso', 'ISO', ['class' => 'control-label']) }}
        {{ Form::text('s_iso', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        @if($errors->has('s_iso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_iso') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
