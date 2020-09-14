<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_regimen_salud_id', '6.1 Estado de afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_regimen_salud_id', $todoxxxx["estafili"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_entidad_salud_id', '6.2 Entidad / Régimen', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_entidad_salud_id', $todoxxxx["entid_id"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('puntajesisben', '6.3 Puntaje Sisben', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('d_puntaje_sisben', 'Puntaje SISBEN', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('d_puntaje_sisben', null, ['class' => 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('i_prm_tiene_sisben_id', 'Tiene SISBEN', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::select('i_prm_tiene_sisben_id', $todoxxxx["apsisben"], null, ['class' => 'form-control form-control-sm select2']) }}
            </div>
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tiene_discapacidad_id', '6.4 ¿Tiene algún tipo de discapacidad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tiene_discapacidad_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tipo_discapacidad_id', '6.4 a) Indicar tipo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tipo_discapacidad_id', $todoxxxx["tipodisc"], null, ['class' => 'form-control form-control-sm select2']) }}

    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_discausa_id', '6.4.b) ¿La discapacidad fue producida en la comisión de algún acto ilegal?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_discausa_id[]', $todoxxxx["discausa"], null, ['class' => 'form-control form-control-sm select2','id'=>'prm_discausa_id','multiple']) }}
        @if($errors->has('prm_discausa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_discausa_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_victataq_id', '6.4 c) ¿Ha sido víctima de  ataques con:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_victataq_id[]', $todoxxxx["victataq"], null, ['class' => 'form-control form-control-sm select2','id'=>'prm_victataq_id','multiple']) }}
        @if($errors->has('prm_victataq_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_victataq_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tiene_cert_discapacidad_id', '6.5 ¿Cuenta con certificado?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tiene_cert_discapacidad_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_disc_perm_independencia_id', '6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_disc_perm_independencia_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_esta_gestando_id', '6.7 ¿Se encuentra en estado de gestación?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_esta_gestando_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_numero_semanas', 'Número de semanas', ['class' => 'control-label col-form-label-sm']) }}
        {{-- {{ Form::text('i_numero_semanas', null, ['class' => 'form-control form-control-sm', $todoxxxx['readgest'], "onkeypress" => "return soloNumeros(event);"]) }} --}}
        {{ Form::number('i_numero_semanas', null, ['class' => $errors->first('i_numero_semanas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $todoxxxx['readgest'], 'placeholder' => 'Edad', 'min' => '1', 'max' => '42']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_esta_lactando_id', '6.8 ¿Se encuentra lactando?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_esta_lactando_id', $todoxxxx["condnoap"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_numero_meses', 'Número de meses', ['class' => 'control-label col-form-label-sm']) }}
        {{-- {{ Form::text('i_numero_meses', null, ['class' => 'form-control form-control-sm', $todoxxxx['readlact'], "onkeypress" => "return soloNumeros(event);"]) }} --}}
        {{ Form::number('i_numero_meses', null, ['class' => $errors->first('i_numero_meses') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', $todoxxxx['readlact'], 'placeholder' => 'Edad', 'min' => '1', 'max' => '60']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tiene_problema_salud_id', '6.9 ¿Presenta algún problema de salud?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tiene_problema_salud_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_problema_salud_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_problema_salud_id', $todoxxxx["probsalu"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_consume_medicamentos_id', '6.10 ¿Consume medicamentos de manera permanente?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_consume_medicamentos_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_cual_medicamento', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_cual_medicamento', null, ['class' => 'form-control form-control-sm', $todoxxxx['cualmedi'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tiene_hijos_id', '6.11 ¿Tiene hijos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tiene_hijos_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_numero_hijos', 'No. Hijos(as)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('i_numero_hijos', null, ['class' => 'form-control form-control-sm', $todoxxxx['readhijo'], "onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_evento_medico_id', '6.12 Mencione los eventos médicos importantes', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_evento_medico_id[]', $todoxxxx['evmedico'], null, ['class' => $errors->first('i_prm_evento_medico_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione los eventos médicos importantes']) }}
        @if($errors->has('i_prm_evento_medico_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_evento_medico_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_conoce_metodos_id', '6.13 ¿Tiene conocimiento sobre métodos anticonceptivos?', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_conoce_metodos_id', $todoxxxx['condnoap'], null, ['class' => $errors->first('i_prm_conoce_metodos_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => 'Seleccione los eventos médicos importantes']) }}
        @if($errors->has('i_prm_conoce_metodos_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_conoce_metodos_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_usa_metodos_id', '6.14 ¿Usa métodos anticonceptivos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_usa_metodos_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_cual_metodo_id', '6.15 ¿Cuál método?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_cual_metodo_id', $todoxxxx["metantic"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_uso_voluntario_id', '6.16 ¿Lo usa voluntariamente?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_uso_voluntario_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>

    @if(isset($todoxxxx['puedexxx']))
    {{-- Enfermedades de miembros de la familia --}}
    <div class="form-group col-md-12">
        <div class="card card-outline card-secondary" style="{{ $todoxxxx['tablread'] }}">
            <div class="card-header">
                <h3 class="card-title">
                    {{ Form::label('qMetAntVol', '6.17 ¿Qué persona de su familia ha sido diagnosticada con alguna enfermedad?', ['class' => 'control-label col-form-label-sm']) }}
                    @can('fisaludenfermedad-crear')

                    @endcan
                </h3>
            </div>
            <div class="card-body">
                @foreach ($todoxxxx['tablasxx'] as $tablasxx)
                @component('layouts.components.tablajquery.rowspancolspan', ['todoxxxx'=>$tablasxx])
                @slot('tableName')
                {{$tablasxx['tablaxxx'] }}
                @endslot
                @slot('class')
                @endslot
                @endcomponent
                @endforeach
            </div>
        </div>
    </div>
    {{--@section('codigo')
    @include('FichaIngreso.salud.datatable.js')
    @endsection --}}
    @endif

    <div class="form-group col-md-4">
        {{ Form::label('i_comidas_diarias', '6.18 ¿Cuántas comidas en promedio consume al día?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('i_comidas_diarias', null, ['class' => 'form-control form-control-sm', "maxlength" => 1, "onkeypress" => "return soloNumeros(event); return numeros(event);"]) }}

    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_razon_no_cinco_comidas_id', '6.19 ¿Por qué no consumió las 5 comidas diarias?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_razon_no_cinco_comidas_id', $todoxxxx["motcomdi"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
</div>
