<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('s_estado', 'Estado:', ['class' => 'control-label col-form-label-sm']) }}
        @if($todoxxxx['accionxx'] == 'Ver')
        {{ Form::text('s_estado', $todoxxxx['modeloxx']->s_estado, ['class' => 'form-control-plaintext','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @else
        {{ Form::text('s_estado', null, ['class' => $errors->first('s_estado') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Estado', 'maxlength' => '120', 'autofocus','style'=>'height: 28px']) }}
        @endif
        @if($errors->has('s_estado'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_estado') }}
        </div>
        @endif
    </div>
</div>