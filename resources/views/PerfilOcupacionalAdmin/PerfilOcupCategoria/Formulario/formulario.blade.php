<div class="form-row align-items-end">
    <div class="form-group col-md-12">
        {{ Form::label('nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control form-control-sm is-invalid ' :
            'form-control form-control-sm', 'placeholder' => 'Nombre categoría de desempeño', 'maxlength' => '86',
            'autofocus',"onkeyup" => "javascript:this.value=this.value.toUpperCase()", 'style' => 'text-transform:uppercase']) }}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>

    
    @if(!empty($todoxxxx['evento']))
        <div class="form-group col-md-6">
            {{ Form::label('created_at', 'FECHA Y HORA DE REGISTRO', ['class' => 'control-label col-form-label-sm']) }}
            <div id="created_at" class="form-control form-control-sm">
                {{$todoxxxx["modeloxx"]->created_at}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('created_at', 'FECHA Y HORA DE ACTUALIZACI&Oacute;N', ['class' => 'control-label col-form-label-sm']) }}
            <div id="updated_at" class="form-control form-control-sm">
                {{$todoxxxx["modeloxx"]->updated_at}}
            </div>
        </div> 
        <div class="form-group col-md-6">
            {{ Form::label('created_at', 'USUARIO QUE REGISTR&Oacute;', ['class' => 'control-label col-form-label-sm']) }}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{$todoxxxx["modeloxx"]->creador->name}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('created_at', 'USUARIO QUE ACTUALIZ&Oacute;', ['class' => 'control-label col-form-label-sm']) }}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{$todoxxxx["modeloxx"]->editor->name}}
            </div>
        </div>
    @endif
</div>

