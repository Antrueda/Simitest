<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('created_at', 'fecha de diligeciamiento:', ['class' => 'control-label']) !!}
        {!! Form::date('created_at', null, ['class' => 'form-control form-control-sm', 'disabled']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'UPI:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('sis_servicio_id', 'Servicio:', ['class' => 'control-labl']) !!}
        {!! Form::select('sis_servicio_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('accion_parametro_id', 'Acción:', ['class' => 'control-label']) !!}
        {!! Form::select('accion_parametro_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('actividad_parametro_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('actividad_parametro_id', [], null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('objetivo', 'Objetivo:', ['class' => 'control-label']) !!}
        {!! Form::textarea('objetivo', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('desarrollo_actividad', 'Desarrollo de la actividad:', ['class' => 'control-label']) !!}
        {!! Form::textarea('desarrollo_actividad', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('metodologia', 'Metodologia:', ['class' => 'control-label']) !!}
        {!! Form::textarea('metodologia', null, ['class' => 'form-control form-control-sm']) !!}
    </div> 
    <div class="form-group col-md-4">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
</div>
