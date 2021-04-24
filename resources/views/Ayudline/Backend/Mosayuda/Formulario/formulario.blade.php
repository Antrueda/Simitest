<div class="form-row">
    <div class="form-group col-md-12">
        <label for="titulo">Titulo <span class="text-danger">*</span></label>
        {{ Form::text('titulo', null, ['class' => $errors->first('titulo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;',
                  "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('titulo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('titulo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        <label for="cuerpo">Cuerpo o Descripción <span class="text-danger">*</span>
        </label>

        {{ Form::textarea('cuerpo', null, ['id' => 'cuerpo', 'rows' => 3, 'cols' => 54, 'class'=>"texteditor form-control",
    'placeholder'=>"Describa brevemente el contenido de la Ayuda.",
    "onkeyup" => "javascript:this.value=this.value.toUpperCase();"
    ]) }}
        <small id="tituloAyuda" class="form-text text-muted font-italic">Describa el contenido de la Ayuda.
            Requerido</small>
        @if($errors->has('cuerpo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('cuerpo') }}
        </div>
        @endif
    </div>
</div>
