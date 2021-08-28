<div class="form-row">
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-2">
            {!! Form::label('planilla', 'PLANILLA N°:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->id}}
            </div>
        </div>
        <div class="form-group col-md-10">
            {!! Form::label('prm_actividad_id', 'Actividad:', ['class' => 'control-label']) !!}
            <div id="prm_actividad_id" class="form-control form-control-sm">
                {{$todoxxxx['actaencu']->prmActividad->nombre}}
            </div>
        </div>
    @else
        <div class="form-group col-md-12">
            {!! Form::label('prm_actividad_id', 'Actividad:', ['class' => 'control-label']) !!}
            <div id="prm_actividad_id" class="form-control form-control-sm">
                {{$todoxxxx['actaencu']->prmActividad->nombre}}
            </div>
        </div>
    @endisset
    <div class="form-group col-md-6">
        {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
        <div id="fechdili" class="form-control form-control-sm">
            {{$todoxxxx['actaencu']->fechdili}}
        </div>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        <div id="sis_localidad_id" class="form-control form-control-sm">
            {{$todoxxxx['actaencu']->sisLocalidad->s_localidad}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        <div id="sis_upz_id" class="form-control form-control-sm">
            {{$todoxxxx['actaencu']->sisUpz->s_upz}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        <div id="sis_barrio_id" class="form-control form-control-sm">
            {{$todoxxxx['actaencu']->sisBarrio->s_barrio}}
        </div>
    </div>
    <fieldset>
        <legend>Dirección</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_tipo_via_id', 'Tipo vía principal (VP)', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_tipo_via_id', $todoxxxx["tpviapal"] , $todoxxxx["aedirreg"]->i_prm_tipo_via_id ?? null, ['class' => $errors->first('i_prm_tipo_via_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_tipo_via_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_tipo_via_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('s_complemento', 'Nombre VP', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::text('s_complemento', $todoxxxx["aedirreg"]->s_complemento ?? null, ['class' => $errors->first('s_complemento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) }}
                @if($errors->has('s_complemento'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('s_complemento') }}
                </div>
                @endif
            </div>

            <div class="form-group col-md-6">
                {{ Form::label('s_nombre_via', 'Número/Nombre Vía principal', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('s_nombre_via', $todoxxxx["aedirreg"]->s_nombre_via ?? null, ['class' => $errors->first('s_nombre_via') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'placeholder' => 'Número/Nombre Vía principal', "onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('s_nombre_via'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('s_nombre_via') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_alfabeto_via_id', 'Alfabeto Vía Principal', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_alfabeto_via_id', $todoxxxx["alfabeto"], $todoxxxx["aedirreg"]->i_prm_alfabeto_via_id ?? null, ['class' => $errors->first('i_prm_alfabeto_via_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('i_prm_alfabeto_via_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_alfabeto_via_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_tiene_bis_id', 'Bis', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_tiene_bis_id', $todoxxxx["dircondi"], $todoxxxx["aedirreg"]->i_prm_tiene_bis_id ?? null, ['class' => $errors->first('i_prm_tiene_bis_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_tiene_bis_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_tiene_bis_id') }}
                </div>
                @endif
            </div>


            <div class="form-group col-md-6">
                {{ Form::label('i_prm_bis_alfabeto_id', 'Letra Bis', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_bis_alfabeto_id', $todoxxxx["alfabeto"], $todoxxxx["aedirreg"]->i_prm_bis_alfabeto_id ?? null, ['class' => $errors->first('i_prm_bis_alfabeto_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('i_prm_bis_alfabeto_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_bis_alfabeto_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('i_prm_cuadrante_vp_id', 'Cuadrante VP', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_cuadrante_vp_id', $todoxxxx["cuadrant"], $todoxxxx["aedirreg"]->i_prm_cuadrante_vp_id ?? null, ['class' => $errors->first('i_prm_cuadrante_vp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
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
                        {{ Form::number('i_via_generadora', $todoxxxx["aedirreg"]->i_via_generadora ?? null, ['class' => $errors->first('i_via_generadora') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Vía Generadora', 'min' => '0', 'max' => '250', "onkeypress" => "return soloNumeros(event);"]) }}
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
                {{ Form::select('i_prm_alfabetico_vg_id', $todoxxxx["alfabeto"], $todoxxxx["aedirreg"]->i_prm_alfabetico_vg_id ?? null, ['class' => $errors->first('i_prm_alfabetico_vg_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
                @if($errors->has('i_prm_alfabetico_vg_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_alfabetico_vg_id') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_placa_vg', 'Placa VG', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::number('i_placa_vg', $todoxxxx["aedirreg"]->i_placa_vg ?? null, ['class' => $errors->first('i_placa_vgi_placa_vg') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Placa VG', 'min' => '1', 'max' => '250', "onkeypress" => "return soloNumeros(event);"]) }}
                @if($errors->has('i_placa_vg'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_placa_vg') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('i_prm_cuadrante_vg_id', 'Cuadrante VG', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('i_prm_cuadrante_vg_id', $todoxxxx["cuadrant"], $todoxxxx["aedirreg"]->i_prm_cuadrante_vg_id ?? null, ['class' => $errors->first('i_prm_cuadrante_vg_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
                @if($errors->has('i_prm_cuadrante_vg_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('i_prm_cuadrante_vg_id') }}
                </div>
                @endif
            </div>
        </div>
    </fieldset>
    <div class="form-group col-md-6">
        {!! Form::label('user_funcontr_id', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('user_funcontr_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('user_funcontr_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_funcontr_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('respoupi_id', 'VISTO BUENO RESPONSABLE / ENCARGADO:', ['class' => 'control-label']) !!}
        {!! Form::select('respoupi_id', $todoxxxx['responsa'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('respoupi_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('respoupi_id') }}
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
