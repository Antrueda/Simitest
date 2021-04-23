<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('s_upz', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_upz', null, ['class' => $errors->first('s_upz') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_upz'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_upz') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_codigo', 'Código', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_codigo', null, ['class' => $errors->first('s_codigo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_codigo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_codigo') }}
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

