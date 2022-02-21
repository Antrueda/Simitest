<div class="form-row">


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
        {!! Form::label('sis_depen_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['dependen'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>

    <div class="forn-group col-md-4">
        {!! Form::label('prm_luga_acti_id', 'Espacio donde se realiza la actividad:', ['class' => 'control-labl']) !!}
        {!! Form::select('prm_luga_acti_id', $todoxxxx['lugarxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_luga_acti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_luga_acti_id') }}
        </div>
        @endif
    </div>


    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', $todoxxxx['localida'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>



    <div class="form-group col-md-4">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', $todoxxxx['upzxxxxx'] , null, ['class' => 'form-control form-control-sm select2','id' => 'sis_upz_id']) !!}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', $todoxxxx['barrioxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_departam_id', 'Departamento:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_departam_id', $todoxxxx['departam'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_departam_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_departam_id') }}
        </div>
        @endif
    </div>


    <div class="form-group col-md-4">
        {!! Form::label('sis_municipio_id', 'Municipio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_municipio_id', $todoxxxx['municipi'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_municipio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_municipio_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('num_pag', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('num_pag', $todoxxxx['lugarxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('num_pag'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('num_pag') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('num_pag', 'Grupo:', ['class' => 'control-label']) !!}
        {!! Form::select('num_pag', $todoxxxx['lugarxxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('num_pag'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('num_pag') }}
        </div>
        @endif
    </div>


    <div class="form-group col-md-4">
        <label for="num_pag" class="control-label col-form-label-sm">N° páginas:</label>
        <input class="form-control form-control-sm " name="num_pag" type="number" id="num_pag">
    </div>
    

    <div class="form-group col-md-4">
        {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
        {!! Form::text('fechdili', null, ['class' => 'form-control form-control-sm','autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
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