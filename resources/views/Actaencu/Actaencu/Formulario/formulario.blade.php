
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('fechdili', 'fecha de diligeciamiento:', ['class' => 'control-label']) !!}
        {!! Form::date('fechdili', $todoxxxx['fechdili'], ['class' => 'form-control form-control-sm', 'disabled']) !!}
        @if($errors->has('fechdili'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fechdili') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'UPI:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('sis_servicio_id', 'Servicio:', ['class' => 'control-labl']) !!}
        {!! Form::select('sis_servicio_id', $todoxxxx['sis_servicios'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_localidad_id', $todoxxxx['sis_localidads'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_upz_id', [], null, ['class' => 'form-control form-control-sm select2', 'disabled', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', [], null, ['class' => 'form-control form-control-sm select2', 'disabled', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_accion_id', 'Acción:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_accion_id', $todoxxxx['prm_accion_id'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('prm_accion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_accion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_actividad_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_actividad_id', [], null, ['class' => 'form-control form-control-sm select2', 'disabled', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('prm_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_actividad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('objetivo', 'Objetivo:', ['class' => 'control-label']) !!}
        {!! Form::textarea('objetivo', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('objetivo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('objetivo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('desarrollo_actividad', 'Desarrollo de la actividad:', ['class' => 'control-label']) !!}
        {!! Form::textarea('desarrollo_actividad', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('desarrollo_actividad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('desarrollo_actividad') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('metodologia', 'Metodologia:', ['class' => 'control-label']) !!}
        {!! Form::textarea('metodologia', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('metodologia'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('metodologia') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observaciones') }}
        </div>
        @endif
    </div>
    @if (isset($modeloxx))
        {!! Form::hidden('', $modeloxx->id, ['id' => 'acta_encuentro_id']) !!}
        <div class="form-group col-md-6">
            {!! Form::label('recursos', 'Recursos', ['class' => 'control-label']) !!}
            {!! Form::select('', [], null, ['id' => 'recursos', 'class' => 'form-control form-control-sm select2', 'multiple']) !!}
            <button class="btn btn-sm btn-primary" onclick="saveRecursos()">
                <i class="fas fa-save"></i> Guardar
            </button>
        </div>
        <div>
            {!! Form::label('contacto', 'Contacto Intrainstitucional e Interinstitucional:', ['class' => 'control-label']) !!}
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombres y Apellidos</th>
                        <th>Entidad</th>
                        <th>Cargo</th>
                        <th>Teléfonos</th>
                        <th>Email</th>
                        <th>
                            <button type="button" class="btn btn-sm btn-primary" onclick="saveContacto()">
                                <i class="fas fa-save"></i> Guardar
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_0', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_0', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_0', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_0', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_0', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_1', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_1', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_1', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_1', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_1', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_2', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_2', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_2', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_2', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_2', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_3', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_3', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_3', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_3', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_3', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_4', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_4', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_4', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_4', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_4', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_5', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_5', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_5', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_5', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_5', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_6', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_6', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_6', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_6', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_6', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_7', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_7', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_7', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_7', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_7', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_8', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_8', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_8', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_8', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_8', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::text('', null, ['id' => 'c_nombres_9', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::select('', $todoxxxx['entidades'], null, ['id' => 'c_entidad_9', 'class' => 'form-control form-control-sm col-md-2 select2', 'placeholder' => 'Seleccione una']) !!}</td>
                        <td>{!! Form::text('', null, ['id' => 'c_cargo_9', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td>{!! Form::number('', null, ['id' => 'c_telefono_9', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                        <td colspan="2">{!! Form::email('', null, ['id' => 'c_email_9', 'class' => 'form-control form-control-sm col-md-2']) !!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
