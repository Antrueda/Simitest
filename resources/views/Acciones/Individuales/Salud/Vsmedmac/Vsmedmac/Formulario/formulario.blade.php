<div class="form-row">

    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'UPI DE ORIGEN DEL NNAJ:', ['class' => 'control-label']) !!}
        {!! Form::text('sis_depen_id', $todoxxxx['usuariox']->sis_nnaj->UpiPrincipal->sisDepen->nombre , ['class' => 'form-control form-control-sm select2','readonly' => 'true']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_servicio_id', 'UPI ATENCIÓN:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_servicio_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
        {!! Form::text('fechdili', null, ['class' => 'form-control form-control-sm' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('tipo_val_cam_id', 'Tipo de valoración:', ['class' => 'control-label']) !!}
        {!! Form::select('tipo_val_cam_id', $todoxxxx['sis_servicios'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', '# sesión :', ['class' => 'control-label']) !!}
        {!! Form::text('sis_localidad_id', 0,['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('observaciones')",'spellcheck'=>"true", 'cols'=>'30','rows'=>'4']) !!}
        <p id="observaciones_char_counter" class="text-right">0/4000</p>
        @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observaciones') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('user_contdili_id', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('user_contdili_id', $todoxxxx['primresp'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('user_contdili_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_contdili_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('user_funcontr_id', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('user_funcontr_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('user_funcontr_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_funcontr_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('respoupi_id', 'VISTO BUENO RESPONSABLE / ENCARGADO:', ['class' => 'control-label']) !!}
        {!! Form::select('respoupi_id', $todoxxxx['responsa'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('respoupi_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('respoupi_id') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
