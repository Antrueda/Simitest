<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('s_primer_apellido', 'PRIMER APELLIDO:', ['class' => 'control-label']) !!}
        {!! Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('s_primer_apellido'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_primer_apellido') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_segundo_apellido', 'SEGUNDO APELLIDO:', ['class' => 'control-label']) !!}
        {!! Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('s_segundo_apellido'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_segundo_apellido') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_primer_nombre', 'PRIMER NOMBRE:', ['class' => 'control-label']) !!}
        {!! Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('s_primer_nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_primer_nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_segundo_nombre', 'SEGUNDO NOMBRE:', ['class' => 'control-label']) !!}
        {!! Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('s_segundo_nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_segundo_nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_nombre_identitario', 'NOMBRE IDENTARIO:', ['class' => 'control-label']) !!}
        {!! Form::text('s_nombre_identitario', null, ['class' => 'form-control form-control-sm text-uppercase']) !!}
        @if($errors->has('s_nombre_identitario'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_nombre_identitario') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_tipodocu_id', 'TIPO DE DOCUMENTO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_tipodocu_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_tipodocu_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipodocu_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_documento', 'NOMBRE IDENTARIO:', ['class' => 'control-label']) !!}
        {!! Form::number('s_documento', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('s_documento'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_documento') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_doc_fisico_id', '¿CUENTA CON EL DOCUMENTO EN FÍSICO?:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_doc_fisico_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_doc_fisico_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_doc_fisico_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_ayuda_id', 'MOTIVO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_ayuda_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_ayuda_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_ayuda_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('d_nacimiento', 'FECHA DE NACIMIENTO:', ['class' => 'control-label']) !!}
        {!! Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm hasDatepicker']) !!}
        @if($errors->has('d_nacimiento'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('d_nacimiento') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('aniosxxx', 'EDAD (AÑOS):', ['class' => 'control-label']) !!}
        {!! Form::text('aniosxxx', null, ['class' => 'form-control form-control-sm hasDatepicker']) !!}
        @if($errors->has('aniosxxx'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('aniosxxx') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_sexo_id', 'SEXO DE NACIMIENTO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_sexo_id', [], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_sexo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_sexo_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_localidad_id', 'LOCALIDAD:', ['class' => 'control-label']) !!}
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
        {!! Form::label('sis_barrio_id', 'BARRIO:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_barrio_id', $todoxxxx['sis_barrios'] , null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_barrio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_barrio_id') }}
        </div>
        @endif
    </div>
    <fieldset>
        <legend>Dirección</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_tipo_via_id', 'Tipo vía principal (VP)', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_tipo_via_id', $todoxxxx["tpviapal"] , null, ['class' => $errors->first('i_prm_tipo_via_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_tipo_via_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_tipo_via_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('s_complemento', 'Nombre VP', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('s_complemento', null, ['class' => $errors->first('s_complemento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('s_complemento'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('s_complemento') }}
                </div>
                @endif
            </div>

            <div class="form-group col-md-6">
                {{ Form::label('s_nombre_via', 'Número/Nombre Vía principal', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('s_nombre_via', null, ['class' => $errors->first('s_nombre_via') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'placeholder' => 'Número/Nombre Vía principal']) }}
                @if($errors->has('s_nombre_via'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('s_nombre_via') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_alfabeto_via_id', 'Alfabeto Vía Principal', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_alfabeto_via_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('i_prm_alfabeto_via_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('i_prm_alfabeto_via_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_alfabeto_via_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_tiene_bis_id', 'Bis', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_tiene_bis_id', $todoxxxx["dircondi"], null, ['class' => $errors->first('i_prm_tiene_bis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_tiene_bis_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_tiene_bis_id') }}
                </div>
                @endif
            </div>


            <div class="form-group col-md-6">
                {{ Form::label('i_prm_bis_alfabeto_id', 'Letra Bis', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_bis_alfabeto_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('i_prm_bis_alfabeto_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('i_prm_bis_alfabeto_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_bis_alfabeto_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_cuadrante_vp_id', 'Cuadrante VP', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_cuadrante_vp_id', $todoxxxx["cuadrant"], null, ['class' => $errors->first('i_prm_cuadrante_vp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_cuadrante_vp_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_cuadrante_vp_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_via_generadora', 'No. Vía Generadora (VG)', ['class' => 'control-label col-form-label-sm']) }}
                <div class="form-row">
                    <div class="form-group col-md-1" style="text-align: right;">#</div>
                    <div class="form-group col-md-11">
                        {{ Form::number('i_via_generadora', null, ['class' => $errors->first('i_via_generadora') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Vía Generadora', 'min' => '0', 'max' => '250']) }}
                    </div>
                </div>
                @if($errors->has('i_via_generadora'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_via_generadora') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_alfabetico_vg_id', 'Alfabético VG', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_alfabetico_vg_id', $todoxxxx["alfabeto"], null, ['class' => $errors->first('i_prm_alfabetico_vg_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('i_prm_alfabetico_vg_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_alfabetico_vg_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_placa_vg', 'Placa VG', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('i_placa_vg', null, ['class' => $errors->first('i_placa_vgi_placa_vg') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Placa VG', 'min' => '1', 'max' => '250']) }}
                @if($errors->has('i_placa_vg'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_placa_vg') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_cuadrante_vg_id', 'Cuadrante VG', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_cuadrante_vg_id', $todoxxxx["cuadrant"], null, ['class' => $errors->first('i_prm_cuadrante_vg_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_cuadrante_vg_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_cuadrante_vg_id') }}
                </div>
                @endif
            </div>
        </div>
    </fieldset>
    <div class="form-group col-md-6">
        {!! Form::label('s_telefono_uno', 'TELÉFONO:', ['class' => 'control-label']) !!}
        {!! Form::text('s_telefono_uno', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('s_telefono_uno'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_telefono_uno') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_perfil_id', 'PERFIL:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_perfil_id', [] , null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_perfil_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_perfil_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_lugfocali_id', 'LUGAR DE FOCALIZACIÓN:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_lugfocali_id', [] , null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_lugfocali_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_lugfocali_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        <p>Autorizo al IDIPRON de manera libre, plena, expresa y voluntaria el tratamiento de mis datos personales recolectados en el presente formato y/o en la ficha de caracterización familiar, conforme a lo establecido en la Ley Estatutaria 1581 del n 2012 (Art. 8° y 9°) y el Decreto reglamentario 1377 del 2013.</p>
        {!! Form::label('prm_autorizacion_id', '¿AUTORIZA?:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_autorizacion_id', [] , null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_autorizacion_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_autorizacion_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('observación', 'OBSERVACION:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observación', null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('observación'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observación') }}
        </div>
        @endif
    </div>
</div>
