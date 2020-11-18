<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('s_upz', 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_upz', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        @if($errors->has('s_upz'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_upz') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_codigo', 'Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_codigo', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
        @if($errors->has('s_codigo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_codigo') }}
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
