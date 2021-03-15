<div class="form-row">
    <div class="form-group col-md-12">
        {{ Form::label('s_municipio', 'Municipio', ['class' => 'control-label']) }}
        {{ Form::text('s_municipio', null, ['class' => $errors->first('s_municipio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_municipio'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_municipio') }}
        </div>
        @endif
    </div>
</div>
