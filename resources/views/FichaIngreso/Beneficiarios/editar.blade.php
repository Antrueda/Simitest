@extends('layouts.index')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        FICHA DE INGRESO
                    </div>
                    <div class="card-header p-2">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link text-sm" href="{{ route('fidatbas') }}">NNAJ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-sm" href="{{ route('benefici') }}">BENEFICIARIOS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="fidatbas">
                                <div class="card text-left">
                                    <div class="card-header">
                                        <h1 style="text-align: center">
                                            <strong>Agregar Familiar como Beneficiario</strong>
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <form method='post'
                                            action='{{ route('fi.familiar.update', ['id' => $familiar->id]) }}'>
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group card-footer text-muted text-center">
                                                <input class="btn btn-sm btn-primary" type="submit" value="GUARDAR">
                                            </div>
                                            <div class="form-row">

                                                <div class="form-group col-md-4">
                                                    {{ Form::label('diligenc', 'Fecha de Diligenciamiento (AAAA-MM-DD)', ['class' => 'control-label']) }}
                                                    {{ Form::date('diligenc', null, ['class' => $errors->first('diligenc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autocomplete' => 'off']) }}
                                                    @if ($errors->has('diligenc'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('diligenc') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_tipoblaci_id', 'Tipo de Población', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_tipoblaci_id', $tipoblac, null, ['class' => $errors->first('prm_tipoblaci_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_tipoblaci_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_tipoblaci_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $estrateg,  -->
                                                    {{ Form::label('prm_estrateg_id', 'Estrategia', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_estrateg_id', ['' => 'seleccione'], null, ['class' => $errors->first('prm_estrateg_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_estrateg_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_estrateg_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('sis_depen_id', 'UPI', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_depen_id', $dependen, null, ['class' => $errors->first('sis_depen_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'id' => 'sis_depen_id']) }}
                                                    @if ($errors->has('sis_depen_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_depen_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $$servicio,  -->
                                                    {{ Form::label('sis_servicio_id', 'Servicio', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_servicio_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_servicio_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_servicio_id']) }}
                                                    @if ($errors->has('sis_servicio_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_servicio_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_primer_apellido', '1.1 1er. Apellido', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_primer_apellido', $familiar->s_primer_apellido, ['class' => $errors->first('s_primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_primer_apellido'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_primer_apellido') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_segundo_apellido', $familiar->s_segundo_apellido, ['class' => $errors->first('s_segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_segundo_apellido'))']']']
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_segundo_apellido') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_primer_nombre', $familiar->s_primer_nombre, ['class' => $errors->first('s_primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_primer_nombre'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_primer_nombre') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_segundo_nombre', $familiar->s_segundo_nombre, ['class' => $errors->first('s_segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_segundo_nombre'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_segundo_nombre') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_nombre_identitario', '1.2 Nombre Identitario', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_nombre_identitario', $familiar->s_apodo, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_nombre_identitario'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_nombre_identitario') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_apodo', '1.3 Apodo', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_apodo', $familiar->s_apodo, ['class' => $errors->first('s_apodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_apodo'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_apodo') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('d_nacimiento', '1.4 Fecha de Nacimiento', ['class' => 'control-label']) }}
                                                    {{ Form::text('d_nacimiento', $familiar->nnaj_nacimi->d_nacimiento, ['class' => 'form-control form-control-sm', 'readonly', 'autocomplete' => 'off']) }}
                                                </div>
                                                <div class="form-group col-md-4" id="edadxxxx">
                                                    {{ Form::label('aniosxxx', '1.5 Edad (Años)', ['class' => 'control-label']) }}
                                                    {{ Form::text('aniosxxx', $familiar->nnaj_nacimi->edad, ['class' => $errors->first('aniosxxx') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'readonly', 'id' => 'aniosxxx']) }}
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('', 'AÑOS', ['class' => 'control-label']) }}
                                                    <div class="form-control form-control-sm">AÑOS</div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('sis_pai_id', '1.6 País de Nacimiento', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_pai_id', $pais_idx, null, ['class' => $errors->first('sis_pai_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm']) }}
                                                    @if ($errors->has('sis_pai_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_pai_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $departam,  -->
                                                    {{ Form::label('sis_departam_id', '1.6(a) Departamento de Nacimiento', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_departam_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_departam_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_departam_id']) }}

                                                    @if ($errors->has('sis_departam_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_departam_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $municipi,  -->
                                                    {{ Form::label('sis_municipio_id', '1.6(b) Ciudad/Municipio de Nacimiento', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_municipio_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_municipio_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_municipio_id']) }}

                                                    @if ($errors->has('sis_municipio_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_municipio_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_sexo_id', '1.7 ¿Cuál es su sexo de nacimiento?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_sexo_id', $sexoxxxx, null, ['class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_sexo_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_sexo_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_identidad_genero_id', '1.8 ¿Cuál es su identidad de género?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_identidad_genero_id', $generoxx, null, ['class' => $errors->first('prm_identidad_genero_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_identidad_genero_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_identidad_genero_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_orientacion_sexual_id', '1.9 ¿Cuál es su orientación sexual?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_orientacion_sexual_id', $orientac, null, ['class' => $errors->first('prm_orientacion_sexual_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_orientacion_sexual_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_orientacion_sexual_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_gsanguino_id', '1.10 Grupo Sanguíneo', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_gsanguino_id', $grupsang, null, ['class' => $errors->first('prm_gsanguino_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_gsanguino_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_gsanguino_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_factor_rh_id', 'RH', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_factor_rh_id', $factorrh, null, ['class' => $errors->first('prm_factor_rh_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_factor_rh_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_factor_rh_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_tipodocu_id', '1.11 Documento con el cual se identifica', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_tipodocu_id', $tipodocu, null, ['class' => $errors->first('prm_tipodocu_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_tipodocu_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_tipodocu_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_doc_fisico_id', '1.12 ¿Cuenta con el documento físico?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_doc_fisico_id', $condicio, null, ['class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_doc_fisico_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_doc_fisico_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $neciayud,  -->
                                                    {{ Form::label('prm_ayuda_id', '1.12b (Si necesita, no seleccione de las siguientes opciones)', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_ayuda_id', ['' => 'seleccione'], null, ['class' => $errors->first('prm_ayuda_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'prm_ayuda_id']) }}

                                                    @if ($errors->has('prm_ayuda_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_ayuda_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('s_documento', '1.13 No. de Documento', ['class' => 'control-label']) }}
                                                    {{ Form::number('s_documento', $familiar->nnaj_docu->s_documento, ['class' => $errors->first('s_documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onkeypress' => 'return soloNumeros(event);', 'minlength' => '6', 'maxlength' => '11']) }}
                                                    @if ($errors->has('s_documento'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_documento') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('sis_paiexp_id', '1.14 País de Expedición', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_paiexp_id', $pais_idx, null, ['class' => $errors->first('sis_paiexp_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm']) }}
                                                    @if ($errors->has('sis_paiexp_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_paiexp_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $deparexp,  -->
                                                    {{ Form::label('sis_departamexp_id', '1.14(a) Departamento de Expedición', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_departamexp_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_departamexp_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_departamexp_id']) }}
                                                    @if ($errors->has('sis_departamexp_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_departamexp_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $municexp,  -->
                                                    {{ Form::label('sis_municipioexp_id', '1.14(b) Municipio de Expedición', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_municipioexp_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_municipioexp_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_municipioexp_id']) }}

                                                    @if ($errors->has('sis_municipioexp_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_municipioexp_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_situacion_militar_id', '1.15 ¿Tiene definida su situación militar?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_situacion_militar_id', $situmili, null, ['class' => $errors->first('prm_situacion_militar_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_situacion_militar_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_situacion_militar_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_clase_libreta_id', ' 1.15(a) Si cuenta con libreta militar, indicar', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_clase_libreta_id', $tiplibre, null, ['class' => $errors->first('prm_clase_libreta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_clase_libreta_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_clase_libreta_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_estado_civil_id', '1.16 Estado Civil', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_estado_civil_id', $estacivi, null, ['class' => $errors->first('prm_estado_civil_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_estado_civil_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_estado_civil_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_etnia_id', '1.17 ¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_etnia_id', $grupetni, null, ['class' => $errors->first('prm_etnia_id') ? 'form-control departam form-control-sm is-invalid' : 'form-control departam form-control-sm']) }}
                                                    @if ($errors->has('prm_etnia_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_etnia_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_poblacion_etnia_id', '¿Población?', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_poblacion_etnia_id', ['' => 'seleccione'], null, ['class' => $errors->first('prm_poblacion_etnia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_poblacion_etnia_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_poblacion_etnia_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('prm_vestimenta_id', '1.18 Condiciones en que se encuentra la vestimenta', ['class' => 'control-label']) }}
                                                    {{ Form::select('prm_vestimenta_id', $vestimen, null, ['class' => $errors->first('prm_vestimenta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
                                                    @if ($errors->has('prm_vestimenta_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('prm_vestimenta_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    {{ Form::label('s_lugar_focalizacion', '1.19 Lugar de Focalización', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_lugar_focalizacion', null, ['class' => $errors->first('s_lugar_focalizacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
                                                    @if ($errors->has('s_lugar_focalizacion'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_lugar_focalizacion') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    {{ Form::label('s_nombre_focalizacion', '1.19(a) Nombre Focalización', ['class' => 'control-label']) }}
                                                    {{ Form::text('s_nombre_focalizacion', null, ['class' => $errors->first('s_nombre_focalizacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'style' => 'text-transform:uppercase;', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'onkeypress' => 'return soloLetras(event);']) }}
                                                    @if ($errors->has('s_nombre_focalizacion'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('s_nombre_focalizacion') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {{ Form::label('sis_localidad_id', '1.19(b) Localidad', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_localidad_id', $localida, null, ['class' => $errors->first('sis_localidad_id') ? 'form-control sispaisx form-control-sm is-invalid' : 'form-control sispaisx form-control-sm', 'placeholder' => 'Selecione']) }}
                                                    @if ($errors->has('sis_localidad_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_localidad_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $upixxxxxxxxxxxxxxxx,  -->
                                                    {{ Form::label('sis_upz_id', '1.19(d) UPZ', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_upz_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_upz_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_upz_id']) }}
                                                    @if ($errors->has('sis_upz_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_upz_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <!-- $barrioxx,  -->
                                                    {{ Form::label('sis_upzbarri_id', '1.19(c) Barrio', ['class' => 'control-label']) }}
                                                    {{ Form::select('sis_upzbarri_id', ['' => 'seleccione'], null, ['class' => $errors->first('sis_upzbarri_id') ? 'form-control form-control is-invalid' : 'form-control form-control-sm', 'id' => 'sis_upzbarri_id']) }}

                                                    @if ($errors->has('sis_upzbarri_id'))
                                                        <div class="invalid-feedback d-block">
                                                            {{ $errors->first('sis_upzbarri_id') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        @section('scripts')
                                            <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
                                            <script>
                                                function soloLetras(e) {
                                                    key = e.keyCode || e.which;
                                                    tecla = String.fromCharCode(key).toString();
                                                    letras =
                                                        " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ"; //Se define todo el abecedario que se quiere que se muestre.
                                                    especiales = [8, 37, 39, 46,
                                                        6
                                                    ]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

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
                                                $("#d_nacimiento").datepicker({
                                                    dateFormat: "yy-mm-dd",
                                                    changeMonth: true,
                                                    changeYear: true,
                                                    minDate: "-29y +0m +1d",
                                                    maxDate: "-6y +0m +1d",
                                                    yearRange: "-28:-6",
                                                });
                                                $("#d_nacimiento").on('change', function() {
                                                    var fechaNacimiento = $(this).val();
                                                    const edad = moment(fechaNacimiento).format("YYYY-MM-DD");
                                                    const hoy = moment();
                                                    const edadCalcular = hoy.diff(edad, 'year', false);
                                                    if (edadCalcular < 6 || edadCalcular > 28) {
                                                        alert('Para ser beneficiario, la edad debe ser mayor 6 años y menor a 28 años.')
                                                    } else {
                                                        document.getElementById('aniosxxx').value = edadCalcular;
                                                    }
                                                });
                                                $('select[name="prm_tipoblaci_id"]').on('change', function() {
                                                    var estrategiaId = $(this).val();
                                                    if (estrategiaId) {
                                                        $.ajax({

                                                            url: "<?=route('benefici.estrateg',[])?>",
                                                            type: "GET",
                                                            data:{'estrateg':estrategiaId},
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="prm_estrateg_id"]').empty();
                                                                $('select[name="prm_estrateg_id"]').append(
                                                                    '<option value="">Seleccione</option>');
                                                                var prm_tipoblaci_id = {!! json_encode($familiar->prm_tipoblaci_id) !!};
                                                                $.each(data, function(key, value) {
                                                                    $('select[id="prm_estrateg_id"]').append(
                                                                        '<option value="' + key +
                                                                        ' ">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="prm_estrateg_id"]').empty();
                                                        $('select[name="prm_estrateg_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_depen_id"]').on('change', function() {
                                                    var dependenciaID = $(this).val();
                                                    if (dependenciaID) {
                                                        $.ajax({
                                                            data:{dependen:dependenciaID},
                                                            url:  "<?=route('benefici.servicio',[])?>",
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_servicio_id"]').empty();
                                                                $('select[name="sis_servicio_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_servicio_id"]').append(
                                                                        '<option value="' + key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_servicio_id"]').empty();
                                                        $('select[name="sis_servicio_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_pai_id"]').on('change', function() {
                                                    var paisId = $(this).val();
                                                    if (paisId) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.departam',[])?>",
                                                            data:{departam:paisId},
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_departam_id"]').empty();
                                                                $('select[name="sis_departam_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_departam_id"]').append(
                                                                        '<option value="' + key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_departam_id"]').empty();
                                                        $('select[name="sis_departam_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_departam_id"]').on('change', function() {
                                                    var departamId = $(this).val();
                                                    if (departamId) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.municipi',[])?>",
                                                            data:{municipi:departamId},
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_municipio_id"]').empty();
                                                                $('select[name="sis_municipio_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_municipio_id"]').append(
                                                                        '<option value="' + key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_municipio_id"]').empty();
                                                        $('select[name="sis_municipio_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="prm_doc_fisico_id"]').on('change', function() {
                                                    var docfisicoId = $(this).val();
                                                    if (docfisicoId) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.neciayud',[])?>",
                                                            data:{neciayud:docfisicoId},
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="prm_ayuda_id"]').empty();
                                                                $('select[name="prm_ayuda_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="prm_ayuda_id"]').append(
                                                                        '<option value="' + key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="prm_ayuda_id"]').empty();
                                                        $('select[name="prm_ayuda_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_paiexp_id"]').on('change', function() {
                                                    var paiexpId = $(this).val();
                                                    if (paiexpId) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.departam',[])?>",
                                                            data:{departam:paiexpId},

                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_departamexp_id"]').empty();
                                                                $('select[name="sis_municipioexp_id"]').append(
                                                                    '<option value="">Seleccione</option>');
                                                                $('select[name="sis_departamexp_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_departamexp_id"]').append(
                                                                        '<option value="' +
                                                                        key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_departamexp_id"]').empty();
                                                        $('select[name="sis_departamexp_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_departamexp_id"]').on('change', function() {
                                                    var departamexpId = $(this).val();
                                                    if (departamexpId) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.municipi',[])?>",
                                                            data:{municipi:departamexpId},
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_municipioexp_id"]').empty();
                                                                $('select[name="sis_municipioexp_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_municipioexp_id"]').append(
                                                                        '<option value="' +
                                                                        key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_municipioexp_id"]').empty();
                                                        $('select[name="sis_municipioexp_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_localidad_id"]').on('change', function() {
                                                    var localidadID = $(this).val();
                                                    if (localidadID) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.upzxxxxx',[])?>",
                                                            data:{localida:localidadID},
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_upz_id"]').empty();
                                                                $('select[name="sis_upz_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_upz_id"]').append('<option value="' +
                                                                        key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_upz_id"]').empty();
                                                        $('select[name="sis_upz_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="sis_upz_id"]').on('change', function() {
                                                    var upzId = $(this).val();
                                                    if (upzId) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.barrioxx',[])?>",
                                                            data:{upzxxxxx:upzId},

                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="sis_upzbarri_id"]').empty();
                                                                $('select[name="sis_upzbarri_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="sis_upzbarri_id"]').append(
                                                                        '<option value="' + key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="sis_upzbarri_id"]').empty();
                                                        $('select[name="sis_upzbarri_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                                $('select[name="prm_etnia_id"]').on('change', function() {
                                                    var etnia = $(this).val();
                                                    if (etnia) {
                                                        $.ajax({
                                                            url:  "<?=route('benefici.etniaxxx',[])?>",
                                                            data:{etniaxxx:etnia},
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function(data) {
                                                                $('select[name="prm_poblacion_etnia_id"]').empty();
                                                                $('select[name="prm_poblacion_etnia_id"]').append(
                                                                    '<option value="">Seleccione</option>');

                                                                $.each(data, function(key, value) {
                                                                    $('select[id="prm_poblacion_etnia_id"]').append(
                                                                        '<option value="' + key +
                                                                        '">' + value + '</option>');
                                                                });
                                                            },
                                                        });
                                                    } else {
                                                        $('select[name="prm_poblacion_etnia_id"]').empty();
                                                        $('select[name="prm_poblacion_etnia_id"]').append('<option value="">Seleccione</option>');

                                                    }
                                                });
                                            </script>
                                        @endsection


                                        <div class="form-group card-footer text-muted text-center">
                                            <input class="btn btn-sm btn-primary" type="submit" value="GUARDAR">
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- nombre que se le data en pestanias de la carpeta Acrud -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
