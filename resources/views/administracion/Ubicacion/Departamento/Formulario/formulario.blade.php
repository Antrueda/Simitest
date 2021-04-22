<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('sis_pai_id', 'País', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_pai_id', $todoxxxx["paisxxxx"], null, ['class' => 'form-control form-control-sm']) }}
        @if($errors->has('sis_pai_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_pai_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_departamento', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_departamento', null, ['class' => $errors->first('s_departamento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_departamento'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_departamento') }}
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
