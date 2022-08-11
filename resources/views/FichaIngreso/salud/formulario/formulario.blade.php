<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('prm_regisalu_id', '6.1 Estado de afiliación en Salud', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_regisalu_id', $todoxxxx["estafili"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_entidad_salud_id', '6.2 Entidad / Régimen', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_entidad_salud_id', $todoxxxx["entid_id"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('puntajesisben', '6.3 Puntaje Sisbén', ['class' => 'control-label col-form-label-sm']) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('d_puntaje_sisben', 'Puntaje SISBEN', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::text('d_puntaje_sisben', null, ['class' => 'form-control form-control-sm', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'maxlength'=>3]) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('prm_tiensisb_id', 'Tiene SISBEN', ['class' => 'control-label col-form-label-sm d-none']) }}
                {{ Form::select('prm_tiensisb_id', $todoxxxx["apsisben"], null, ['class' => 'form-control form-control-sm select2']) }}
            </div>
        </div>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tiendisc_id', '6.4 ¿Tiene algún tipo de discapacidad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tiendisc_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tipodisca_id', '6.4 a) Indicar tipo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipodisca_id', $todoxxxx["tipodisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tiecedis_id', '6.5 ¿Cuenta con certificado?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tiecedis_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_dispeind_id', '6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_dispeind_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    @if($todoxxxx['usuariox']->nnaj_sexo->prm_sexo_id!=20)
    @include('FichaIngreso.Salud.Formulario.mujer')
    @endif
    <div class="form-group col-md-4">
        {{ Form::label('prm_tieprsal_id', '6.9 ¿Presenta algún problema de salud?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tieprsal_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_probsalu_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_probsalu_id', $todoxxxx["probsalu"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_consmedi_id', '6.10 ¿Consume medicamentos de manera permanente?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_consmedi_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_cual_medicamento', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_cual_medicamento', null, ['class' => 'form-control form-control-sm', $todoxxxx['cualmedi'], "onkeyup" => "javascript:this.value=this.value.toUpperCase();"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tienhijo_id', '6.11 ¿Tiene hijos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tienhijo_id', $todoxxxx["condicio"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_numero_hijos', 'No. Hijos(as)', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('i_numero_hijos', null, ['class' => 'form-control form-control-sm', $todoxxxx['readhijo'], "onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_evenmedi_id', '6.12 Mencione los eventos médicos importantes', ['class' => 'control-label']) }}
        {{ Form::select('prm_evenmedi_id[]', $todoxxxx['evmedico'], null, ['class' => $errors->first('prm_evenmedi_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione los eventos médicos importantes']) }}
        @if($errors->has('prm_evenmedi_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_evenmedi_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_conometo_id', '6.13 ¿Tiene conocimiento sobre métodos anticonceptivos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_conometo_id', $todoxxxx["condnoap"], null, ['class' => 'form-control select2 form-control-sm usameanti']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_usametod_id', '6.14 ¿Usa métodos anticonceptivos?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_usametod_id', $todoxxxx["usameant"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_cualmeto_id', '6.15 ¿Cuál método?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_cualmeto_id', $todoxxxx["metantic"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_usovolun_id', '6.16 ¿Lo usa voluntariamente?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_usovolun_id', $todoxxxx["noapdisc"], null, ['class' => 'form-control form-control-sm select2']) }}
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
        {{ Form::number('i_comidas_diarias', null, ['class' => 'form-control form-control-sm', "maxlength" => 1, "onkeypress" => "return soloNumeros(event); return numeros(event);",'min'=>'0','max'=>'5']) }}

    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_razcicom_id', '6.19 ¿Por qué no consumió las 5 comidas diarias?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_razcicom_id', $todoxxxx["motcomdi"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
</div>
