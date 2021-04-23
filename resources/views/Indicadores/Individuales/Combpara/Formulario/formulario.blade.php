<div class="form-row">
    <div class="form-group col-md-12 tooltipx" tabindex="0" data-toggle="tooltip" title="Código de la tabla sis_multivalores
    ">
        {{ Form::label('simianti_id', 'Código Antiguo', ['class' => 'control-label']) }}
        {{ Form::text('simianti_id', null, ['class' => $errors->first('simianti_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('simianti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('simianti_id') }}
        </div>
        @endif
    </div>
</div>

