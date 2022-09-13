<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('nombre', 'Nombre del Compuesto:', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('estusuarios_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('estusuarios_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('estusuarios_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuarios_id') }}
        </div>
        @endif
    </div>  


    
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'Fecha y hora de registro:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->created_at }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'Fecha y hora de actualización:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->updated_at }}
            </div>
        </div>
        
        <div class="form-group col-md-6">
            {!! Form::label('user_crea_id', 'Usuario que registró:', ['class' => 'control-label']) !!}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->creador->name }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_edita_id', 'Usuario que actualizó:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->editor->name }}
            </div>
        </div>
    @endisset
    </div>

