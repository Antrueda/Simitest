<div class="form-row">
   
    <div class="form-group col-md-4">
        {!! Form::label('tipos_actividad_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('tipos_actividad_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('tipos_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipos_actividad_id') }}
        </div>
        @endif
    </div> 
    
    <div class="form-group col-md-4">
        {!! Form::label('asd_actividad_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('asd_actividad_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('asd_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('asd_actividad_id') }}
        </div>
        @endif
    </div>


   <div class="form-group col-md-4">
        {!! Form::label('prm_novedadx_id', 'Novedad u Observación:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_novedadx_id', $todoxxxx['novedadx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if ($errors->has('prm_novedadx_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_novedadx_id') }}
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
                {{ $todoxxxx['modeloxx']->userCrea->name }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_edita_id', 'Usuario que  actualizó:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->userEdita->name }}
            </div>
        </div>
    @endisset
</div>

