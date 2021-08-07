
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('fecha', 'Fecha de diligeciamiento:', ['class' => 'control-label']) !!}
        {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm']) !!}
        @if(isset($errors) && $errors->has('fecha'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fecha') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('upi_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-6">
        {!! Form::label('tipo_id', 'Se remite como:', ['class' => 'control-labl']) !!}
        {!! Form::select('tipo_id', $todoxxxx['sis_servicios'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('tipo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipo_id') }}
        </div>
        @endif
    </div>
 </div>
    <hr>
    <h6>DATOS BASICOS</h6>
    <div class="form-group col-md-6">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', $todoxxxx['sis_localidads'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', $todoxxxx['sis_upzs'] , null, ['class' => 'form-control form-control-sm select2','id' => 'sis_upz_id']) !!}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', $todoxxxx['sis_barrios'] , null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_accion_id', 'Acción:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_accion_id', $todoxxxx['prm_accion_id'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_accion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_accion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_actividad_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_actividad_id', $todoxxxx['actividad'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_actividad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('objetivo', 'Objetivo:', ['class' => 'control-label']) !!}
        {!! Form::textarea('objetivo', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('objetivo')",'spellcheck'=>"true"]) !!}
        <p id="objetivo_char_counter" class="text-right">0/4000</p>
        @if($errors->has('objetivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('objetivo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('desarrollo_actividad', 'Desarrollo de la actividad:', ['class' => 'control-label']) !!}
        {!! Form::textarea('desarrollo_actividad', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('desarrollo_actividad')",'spellcheck'=>"true"]) !!}
        <p id="desarrollo_actividad_char_counter" class="text-right">0/4000</p>
        @if($errors->has('desarrollo_actividad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('desarrollo_actividad') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('metodologia', 'Metodología:', ['class' => 'control-label']) !!}
        {!! Form::textarea('metodologia', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('metodologia')",'spellcheck'=>"true"]) !!}
        <p id="metodologia_char_counter" class="text-right">0/4000</p>
        @if($errors->has('metodologia'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('metodologia') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('observaciones')",'spellcheck'=>"true"]) !!}
        <p id="observaciones_char_counter" class="text-right">0/4000</p>
        @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observaciones') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('userd_doc', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('userd_doc', $todoxxxx['primresp'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('userd_doc'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('userd_doc') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('userr_doc', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('userr_doc', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('userr_doc'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('userr_doc') }}
        </div>
        @endif
    </div>
</div>
