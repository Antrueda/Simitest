<div class="form-row align-items-end">
    <div class="form-group col-md-6">
        {{ Form::label('item_nombre', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('item_nombre', null, ['class' => $errors->first('item_nombre') ? 'form-control form-control-sm is-invalid ' :
            'form-control form-control-sm', 'placeholder' => 'Nombre item a evaluar', 'maxlength' => '120',
            'autofocus']) }}
        @if($errors->has('item_nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('item_nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('desempenio_id', 'Componente de desempeño:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('desempenio_id', $todoxxxx['desempenios'], null, ['class' => $errors->first('desempenio_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('desempenio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('desempenio_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('categoria_id', 'Subtitulo categoría:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('categoria_id', $todoxxxx['categorias'], null, ['class' => $errors->first('categoria_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('categoria_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('categoria_id') }}
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
    <div class="form-group col-md-6">
        {{ Form::label('estusuario_id','Justificación Estado') }}
        {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
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

