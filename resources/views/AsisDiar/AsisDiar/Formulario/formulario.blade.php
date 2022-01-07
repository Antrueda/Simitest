
<div class="form-row">
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-2">
            {!! Form::label('consecut', 'PLANILLA N°:', ['class' => 'control-label']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->consecut}}
            </div>
        </div>
    @endisset
    <div class="form-group col-md-4">
        {!! Form::label('fechdili', 'fecha de diligeciamiento:', ['class' => 'control-label']) !!}
        {!! Form::date('fechdili', null, ['class' => 'form-control form-control-sm', 'disabled']) !!}
        @if($errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('prm_luga_acti_id', 'Espacio donde se realiza la actividad:', ['class' => 'control-labl']) !!}
        {!! Form::select('prm_luga_acti_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_luga_acti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_luga_acti_id') }}
        </div>
        @endif
    </div>
    {{-- <div class="forn-group col-md-4">
        {!! Form::label('sis_servicio_id', 'Servicio:', ['class' => 'control-labl']) !!}
        {!! Form::select('sis_servicio_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div> --}}
    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_departam_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_departam_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_departam_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_departam_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_municipio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_municipio_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_municipio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_municipio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('prm_actividad_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_actividad_id', $todoxxxx['prm_acti'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_actividad_id') }}
        </div>
        @endif
    </div>
    <div id="grupo_id_field" class="form-group col-md-6">
        {!! Form::label('prm_grupo_id', 'GRUPO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_grupo_id', $todoxxxx['gruposxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('prm_grupo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_grupo_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('num_pag', 'N° páginas:', ['class' => 'control-label']) !!}
        {!! Form::select('num_pag', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('num_pag'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('num_pag') }}
        </div>
        @endif
    </div>
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRO:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->created_at}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'FECHA Y HORA DE ACTUALIZACIÓN:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->updated_at}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_crea_id', 'USUARIO QUE REGISTRÓ:', ['class' => 'control-label']) !!}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->userCrea->name}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_edita_id', 'USUARIO QUE ACTUALIZÓ:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->userEdita->name}}
            </div>
        </div>
        @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    @endisset
</div>
