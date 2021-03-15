<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('s_pais', 'País', ['class' => 'control-label']) }}
        {{ Form::text('s_pais', null, ['class' => $errors->first('s_pais') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_pais'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_pais') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('s_iso', 'ISO', ['class' => 'control-label']) }}
        {{ Form::text('s_iso', null, ['class' => $errors->first('s_iso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_iso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_iso') }}
        </div>
        @endif
    </div>
</div>
