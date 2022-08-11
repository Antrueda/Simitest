<div class="form-row">

    <div class="form-group col-md-4">
        {!! Form::label('consecut', 'Planilla N°:', ['class' => 'control-label']) !!}
        <div id="consecut" class="form-control form-control-sm">
            {{ $todoxxxx['consecut'] }}
        </div>
    </div>
    
 
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['dependen'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
        @endif
    </div>
    <div class="forn-group col-md-4" {{ $errors->first('sis_servicio_id') ? 'has-error' : '' }}">
        {!! Form::label('sis_servicio_id', 'Tipo de servicio:', ['class' => 'control-labl']) !!}
        {!! Form::select('sis_servicio_id', $todoxxxx['servicio'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if ($errors->has('sis_servicio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_servicio_id') }}
            </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('prm_lugactiv_id', 'Espacio donde se realiza la actividad:', ['class' => 'control-labl']) !!}
        {!! Form::select('prm_lugactiv_id', $todoxxxx['lugarxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('prm_lugactiv_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_lugactiv_id') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', $todoxxxx['localida'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('sis_localidad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_localidad_id') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', $todoxxxx['upzxxxxx'], null, ['class' => 'form-control form-control-sm select2', 'id' => 'sis_upz_id']) !!}
        @if ($errors->has('sis_upz_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_upz_id') }}
            </div>
        @endif
    </div>


    <div class="form-group col-md-4">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', $todoxxxx['barrioxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('sis_barrio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_barrio_id') }}
            </div>
        @endif
    </div>


    <div class="form-group col-md-4">
        {!! Form::label('sis_departam_id', 'Departamento:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_departam_id', $todoxxxx['departam'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('sis_departam_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_departam_id') }}
            </div>
        @endif
    </div>


    <div class="form-group col-md-4">
        {!! Form::label('sis_municipio_id', 'Municipio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_municipio_id', $todoxxxx['municipi'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('sis_municipio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_municipio_id') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('prm_actividad_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_actividad_id', $todoxxxx['programa'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('prm_actividad_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_actividad_id') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('prm_grupo_id', 'Grupo:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_grupo_id', $todoxxxx['grupoxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('prm_grupo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_grupo_id') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('numepagi', 'N° páginas:', ['class' => 'control-label']) !!}
        {!! Form::Text('numepagi', null, ['class' => 'form-control form-control-sm', 'required','autocomplete' => 'off', $todoxxxx['readonly'], 'onkeypress' => 'return validation(event)']) !!}
        @if (isset($errors) && $errors->has('numepagi'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('numepagi') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
        {!! Form::date('fechdili',  null, ['class' => 'form-control form-control-sm', 'required']) !!}
        @if ($errors->has('fechdili'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fechdili') }}
            </div>
        @endif
    </div>

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


    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-4">
            {!! Form::label('created_at', 'Fecha y hora de registro:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->created_at }}
            </div>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('updated_at', 'Fecha y hora de actualización:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->updated_at }}
            </div>
        </div>

        <div class="form-group col-md-4">
            {!! Form::label('user_crea_id', 'Usuario que registró:', ['class' => 'control-label']) !!}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->userCrea->name }}
            </div>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('user_edita_id', 'Usuario que actualizó:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->userEdita->name }}
            </div>
        </div>
  

    @endisset
</div>
