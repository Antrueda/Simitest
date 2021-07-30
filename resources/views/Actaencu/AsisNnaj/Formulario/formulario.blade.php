<div class="form-row">
    <div class="form-group col-md-4">
        {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('s_primer_apellido', null, ['class' => $errors->first('s_primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_primer_apellido'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_primer_apellido') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_segundo_apellido', 'Apellido', ['class' => 'control-label']) }}
        {{ Form::text('s_segundo_apellido', null, ['class' => $errors->first('s_segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_segundo_apellido'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_segundo_apellido') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_primer_nombre', null, ['class' => $errors->first('s_primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_primer_nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_primer_nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
        {{ Form::text('s_segundo_nombre', null, ['class' => $errors->first('s_segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_segundo_nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_segundo_nombre') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_nombre_identitario'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_nombre_identitario') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tipodocu_id', 'Documento con el cual se identifica', ['class' => 'control-label']) }}
        {{ Form::select('prm_tipodocu_id', $todoxxxx['tipodocu'], null, ['class' => $errors->first('prm_tipodocu_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_tipodocu_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipodocu_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_doc_fisico_id', '¿Cuenta con el documento físico?', ['class' => 'control-label']) }}
        {{ Form::select('prm_doc_fisico_id', $todoxxxx['condicio'], null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_doc_fisico_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_doc_fisico_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_ayuda_id', '(Si necesita, no seleccione de las siguientes opciones)', ['class' => 'control-label']) }}
        {{ Form::select('prm_ayuda_id', $todoxxxx['neciayud'], null, ['class' => $errors->first('prm_ayuda_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_ayuda_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_ayuda_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'No. de Documento', ['class' => 'control-label']) }}
        {{ Form::number('s_documento', null, ['class' => $errors->first('s_documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);", $todoxxxx['readfisi'],'minlength' => '6', 'maxlength' => '11']) }}
        @if($errors->has('s_documento'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_documento') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
        {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','autocomplete'=>"off"]) }}
    </div>
    <div class="form-group col-md-4" id="edadxxxx">
        {{ Form::label('aniosxxx', 'Edad (Años)', ['class' => 'control-label']) }}
        {{ Form::number('aniosxxx', isset($todoxxxx['modeloxx'])?$todoxxxx['modeloxx']->nnaj_nacimi->Edad:null, ['class' => $errors->first('aniosxxx') ?
    'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '6', 'max' => '100','id'=>'aniosxxx']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('', 'AÑOS', ['class' => 'control-label']) }}
        <div class="form-control form-control-sm">AÑOS</div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_sexo_id', '¿Cuál es su sexo de nacimiento?', ['class' => 'control-label']) }}
        {{ Form::select('prm_sexo_id', $todoxxxx['sexoxxxx'], null, ['class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_sexo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_sexo_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_localidad_id', 'Localidad', ['class' => 'control-label']) }}
        {{ Form::select('sis_localidad_id', $todoxxxx['localida'], null, ['class' => $errors->first('sis_localidad_id') ? 'form-control sispaisx form-control-sm is-invalid select2' : 'form-control sispaisx form-control-sm','placeholder'=>'Selecione']) }}
        @if($errors->has('sis_localidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_localidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_upz_id', 'UPZ', ['class' => 'control-label']) }}
        {{ Form::select('sis_upz_id', $todoxxxx['upzxxxxx'], null, ['class' => $errors->first('sis_upz_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm select2']) }}
        @if($errors->has('sis_upz_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upz_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_upzbarri_id', 'Barrio', ['class' => 'control-label']) }}
        {{ Form::select('sis_upzbarri_id', $todoxxxx['barrioxx'], null, ['class' => $errors->first('sis_upzbarri_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','placeholder'=>'Selecione']) }}
        @if($errors->has('sis_upzbarri_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_upzbarri_id') }}
        </div>
        @endif
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
                {{ Form::number('s_nombre_via', $todoxxxx["aedirreg"]->s_nombre_via ?? null, ['class' => $errors->first('s_nombre_via') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'placeholder' => 'Número/Nombre Vía principal']) }}
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
                        {{ Form::number('i_via_generadora', $todoxxxx["aedirreg"]->i_via_generadora ?? null, ['class' => $errors->first('i_via_generadora') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Vía Generadora', 'min' => '0', 'max' => '250']) }}
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
                {{ Form::number('i_placa_vg', $todoxxxx["aedirreg"]->i_placa_vg ?? null, ['class' => $errors->first('i_placa_vgi_placa_vg') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Placa VG', 'min' => '1', 'max' => '250']) }}
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
    <div class="form-group col-md-4">
        {{ Form::label('s_telefono_uno', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_telefono_uno', null, ['class' => $errors->first('s_telefono_uno') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);", $todoxxxx['readchcx']]) }}
        @if($errors->has('s_telefono_uno'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_telefono_uno') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tipoblaci_id', 'Tipo de Población', ['class' => 'control-label']) }}
        {{ Form::select('prm_tipoblaci_id', $todoxxxx['tipoblac'], null, ['class' => $errors->first('prm_tipoblaci_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_tipoblaci_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipoblaci_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_pefil_id', 'Perfil', ['class' => 'control-label']) }}
        {{ Form::select('prm_pefil_id', $todoxxxx['prperfil'], null, ['class' => $errors->first('prm_pefil_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_pefil_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_pefil_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_lugar_focali_id', 'Lugar Focalización', ['class' => 'control-label']) }}
        {{ Form::select('prm_lugar_focali_id', $todoxxxx['lugafoca'], null, ['class' => $errors->first('prm_lugar_focali_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_lugar_focali_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_lugar_focali_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12 border p-1 rounded">
        <p>Autorizo al IDIPRON de manera libre, plena, expresa y voluntaria el tratamiento de mis datos personales recolectados en el presente formato y/o en la ficha de caracterización familiar, conforme a lo establecido en la Ley Estatutaria 1581 del n 2012 (Art. 8° y 9°) y el Decreto reglamentario 1377 del 2013.</p>
        {{ Form::label('prm_autorizo_id', 'Autorizo?', ['class' => 'control-label']) }}
        {{ Form::select('prm_autorizo_id', $todoxxxx['autorizo'], null, ['class' => $errors->first('prm_autorizo_id') ? 'form-control form-control-sm is-invalid col-md-4' : 'form-control form-control-sm select2 col-md-4']) }}
        @if($errors->has('prm_autorizo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_autorizo_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        {!! Form::textarea('observaciones', null, ['class' => 'form-control form-control-sm text-uppercase', 'onkeyup' => "countCharts('observaciones')",'spellcheck'=>"true"]) !!}
        <p id="observaciones_char_counter" class="text-right">0/4000</p>
        @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observaciones') }}
        </div>
        @endif
    </div>
    {{-- <div class="form-group col-md-4">
        {{ Form::label('diligenc', 'Fecha de Diligenciamiento (AAAA-MM-DD)', ['class' => 'control-label']) }}
        {{ Form::text('diligenc', null, ['class' => $errors->first('diligenc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','autocomplete'=>"off"]) }}
        @if($errors->has('diligenc'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('diligenc') }}
        </div>
        @endif
    </div>--}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_estrateg_id', 'Estrategia', ['class' => 'control-label']) }}
        {{ Form::select('prm_estrateg_id', $todoxxxx['estrateg'], null, ['class' => $errors->first('prm_estrateg_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_estrateg_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_estrateg_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_depen_id', 'UPI', ['class' => 'control-label']) }}
        {{ Form::select('sis_depen_id', $todoxxxx['dependen'], null, ['class' => $errors->first('sis_depen_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2','id'=>'sis_depen_id']) }}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_servicio_id', 'Servicio', ['class' => 'control-label']) }}
        {{ Form::select('sis_servicio_id', $todoxxxx['servicio'], null, ['class' => $errors->first('sis_servicio_id') ? 'form-control form-control-sm is-invalid ' : 'form-control form-control-sm select2','id'=>'sis_servicio_id']) }}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('s_apodo', '1.3 Apodo', ['class' => 'control-label']) }}
        {{ Form::text('s_apodo', null, ['class' => $errors->first('s_apodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);"])}}
        @if($errors->has('s_apodo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_apodo') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_pai_id', '1.6 País de Nacimiento', ['class' => 'control-label']) }}
        {{ Form::select('sis_pai_id', $todoxxxx['pais_idx'], null, ['class' => $errors->first('sis_pai_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm select2']) }}
        @if($errors->has('sis_pai_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_pai_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_departam_id', '1.6(a) Departamento de Nacimiento', ['class' => 'control-label']) }}
        {{ Form::select('sis_departam_id', $todoxxxx['departam'], null, ['class' => $errors->first('sis_departam_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm select2']) }}
        @if($errors->has('sis_departam_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_departam_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_municipio_id', '1.6(b) Ciudad/Municipio de Nacimiento', ['class' => 'control-label']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx['municipi'], null, ['class' => $errors->first('sis_municipio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_municipio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_municipio_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_identidad_genero_id', '1.8 ¿Cuál es su identidad de género?', ['class' => 'control-label']) }}
        {{ Form::select('prm_identidad_genero_id', $todoxxxx['generoxx'], null, ['class' => $errors->first('prm_identidad_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_identidad_genero_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_identidad_genero_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_orientacion_sexual_id', '1.9 ¿Cuál es su orientación sexual?', ['class' => 'control-label']) }}
        {{ Form::select('prm_orientacion_sexual_id', $todoxxxx['orientac'], null, ['class' => $errors->first('prm_orientacion_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_orientacion_sexual_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_orientacion_sexual_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_gsanguino_id', '1.10 Grupo Sanguíneo', ['class' => 'control-label']) }}
        {{ Form::select('prm_gsanguino_id', $todoxxxx['grupsang'], null, ['class' => $errors->first('prm_gsanguino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_gsanguino_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_gsanguino_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_factor_rh_id', 'RH', ['class' => 'control-label']) }}
        {{ Form::select('prm_factor_rh_id', $todoxxxx['factorrh'], null, ['class' => $errors->first('prm_factor_rh_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_factor_rh_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_factor_rh_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_paiexp_id', '1.14 País de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_paiexp_id', $todoxxxx['pais_idx'], null, ['class' => $errors->first('sis_paiexp_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm select2']) }}
        @if($errors->has('sis_paiexp_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_paiexp_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_departamexp_id', '1.14(a) Departamento de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_departamexp_id', $todoxxxx['deparexp'], null, ['class' => $errors->first('sis_departamexp_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm select2']) }}
        @if($errors->has('sis_departamexp_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_departamexp_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('sis_municipioexp_id', '1.14(b) Municipio de Expedición', ['class' => 'control-label']) }}
        {{ Form::select('sis_municipioexp_id', $todoxxxx['municexp'], null, ['class' => $errors->first('sis_municipioexp_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_municipioexp_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_municipioexp_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_situacion_militar_id', '1.15 ¿Tiene definida su situación militar?', ['class' => 'control-label']) }}
        {{ Form::select('prm_situacion_militar_id', $todoxxxx['situmili'], null, ['class' => $errors->first('prm_situacion_militar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_situacion_militar_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_situacion_militar_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_clase_libreta_id', ' 1.15(a) Si cuenta con libreta militar, indicar', ['class' => 'control-label']) }}
        {{ Form::select('prm_clase_libreta_id', $todoxxxx['tiplibre'], null, ['class' => $errors->first('prm_clase_libreta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_clase_libreta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_clase_libreta_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_estado_civil_id', '1.16 Estado Civil', ['class' => 'control-label']) }}
        {{ Form::select('prm_estado_civil_id', $todoxxxx['estacivi'], null, ['class' => $errors->first('prm_estado_civil_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_estado_civil_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_estado_civil_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_etnia_id', '1.17 ¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label']) }}
        {{ Form::select('prm_etnia_id', $todoxxxx['grupetni'], null, ['class' => $errors->first('prm_etnia_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm select2']) }}
        @if($errors->has('prm_etnia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_etnia_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_poblacion_etnia_id', '¿Población?', ['class' => 'control-label']) }}
        {{ Form::select('prm_poblacion_etnia_id', $todoxxxx['poblindi'], null, ['class' => $errors->first('prm_poblacion_etnia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_poblacion_etnia_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_poblacion_etnia_id') }}
        </div>
        @endif
    </div> --}}
    {{-- <div class="form-group col-md-4">
        {{ Form::label('prm_vestimenta_id', '1.18 Condiciones en que se encuentra la vestimenta', ['class' => 'control-label']) }}
        {{ Form::select('prm_vestimenta_id', $todoxxxx['vestimen'], null, ['class' => $errors->first('prm_vestimenta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_vestimenta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_vestimenta_id') }}
        </div>
        @endif
    </div> --}}
</div>

@section("scripts")
<script>
    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toString();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ"; //Se define todo el abecedario que se quiere que se muestre.
        especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

        tecla_especial = false
        for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }
        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
        }
    }
</script>
@endsection
