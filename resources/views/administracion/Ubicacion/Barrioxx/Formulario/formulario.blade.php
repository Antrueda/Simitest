<div class="form-row">
    <div class="form-group col-md-12">
        {{ Form::label('s_barrio', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_barrio', null, ['class' => $errors->first('s_barrio') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_barrio'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_barrio') }}
        </div>
        @endif
    </div>
</div>

