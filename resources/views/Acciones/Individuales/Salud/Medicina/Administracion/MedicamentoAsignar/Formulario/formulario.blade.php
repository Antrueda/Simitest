<div class="form-row">
    
    <div class="form-group col-md-12">
        {!! Form::label('compuesto_id', 'Compuesto:', ['class' => 'control-label']) !!}
        {!! Form::select('compuesto_id', $todoxxxx['compuest'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('compuesto_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('compuesto_id') }}
        </div>
        @endif
    </div> 

    <div class="form-group col-md-6">
        {!! Form::label('presentacion_id', 'Presentación:', ['class' => 'control-label']) !!}
        {!! Form::select('presentacion_id', $todoxxxx['presenta'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('presentacion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('presentacion_id') }}
        </div>
        @endif
    </div> 

    <div class="form-group col-md-6">
        {!! Form::label('concentracion_id', 'Concentración:', ['class' => 'control-label']) !!}
        {!! Form::select('concentracion_id', $todoxxxx['concentr'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('concentracion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('concentracion_id') }}
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

