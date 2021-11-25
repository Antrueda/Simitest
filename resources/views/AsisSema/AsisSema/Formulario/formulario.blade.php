
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('fechdili', '# de planilla:', ['class' => 'control-label']) !!}
        {!! Form::date('fechdili', null, ['class' => 'form-control form-control-sm', 'disabled']) !!}
        @if($errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('sis_servicio_id', 'TIPO DE SERVICIO:', ['class' => 'control-labl']) !!}
        {!! Form::select('sis_servicio_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_upz_id', 'GRUPO Y GRADO:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_barrio_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_actividad_id', 'CONVENIO /PROGRAMA:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_actividad_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_actividad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('objetivo', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::textarea('objetivo', null, ['class' => 'form-control form-control-sm ']) !!}
        @if($errors->has('objetivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('objetivo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_accion_id', 'GRUPO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_accion_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_accion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_accion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('desarrollo_actividad', 'Funcionario/Contratista que realiza el registro:', ['class' => 'control-label']) !!}
        {!! Form::select('desarrollo_actividad', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('desarrollo_actividad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('desarrollo_actividad') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('metodologia', 'Responsable de UPI:', ['class' => 'control-label']) !!}
        {!! Form::select('metodologia', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('metodologia'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('metodologia') }}
        </div>
        @endif
    </div>
    {{-- <div class="form-group col-md-6">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observaciones') }}
        </div>
        @endif
    </div> --}}
</div>
