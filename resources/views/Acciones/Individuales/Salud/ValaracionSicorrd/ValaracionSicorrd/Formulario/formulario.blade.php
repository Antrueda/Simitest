<style>
    table tbody th:first-child {
        background: #f9f9f9;
        color: inherit;
    }
    select:focus {
        outline: 3px solid red !important;
    }
    textarea:focus {
        outline: 3px solid red !important;
    }
</style>
<div class="card">
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('sis_origen_id', 'UPI DE ORIGEN DEL NNAJ: ', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_origen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_origen_id','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('sis_origen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_origen_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('sis_atenc_id', 'UPI DE ATENCIÓN: ', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_atenc_id',$todoxxxx['sis_atencion'], null, ['name' => 'sis_atenc_id','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('sis_atenc_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_atenc_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
            @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('sis_atenc_id', 'Pertenece a Convenio: ', ['class' => 'control-label text-uppercase']) !!}
            <div class="form-control form-control-sm">
                {{($todoxxxx['convenio'] != null ? "SI":"NO")}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('sis_atenc_id', 'CUAL: ', ['class' => 'control-label text-uppercase']) !!}
            <div class="form-control form-control-sm">
                {{($todoxxxx['convenio'] != null ? $todoxxxx['convenio']->nombre:"N/A")}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('sis_atenc_id', 'Tipo de valoración: ', ['class' => 'control-label text-uppercase']) !!}
            <div class="form-control form-control-sm">
                VALORACIÓN INICIAL
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('sis_atenc_id', 'Número de Sesión: ', ['class' => 'control-label text-uppercase']) !!}
            <div class="form-control form-control-sm">
                1
            </div>
        </div>
        <div class="col-md-12">
            {!! Form::label('prm_pre_mitigacion', 'Atenciones Previas Mitigación:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_pre_mitigacion',  $todoxxxx['si_no'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_pre_mitigacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_pre_mitigacion') }}
            </div>
            @endif
        </div> 
    </div>
    <br><center><strong><p class="col-form-label-sm">FASE DEL PROCESO DE ACOMPAÑAMIENTO</p></strong></center>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('prm_faseacomp', 'Fase de acompañamiento: ', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('prm_faseacomp',$todoxxxx['fases'], null, ['name' => 'prm_faseacomp','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_faseacomp'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_faseacomp') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('prm_tipoacomp', 'Tipo de acompañamiento: ', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('prm_tipoacomp',$todoxxxx['tipos'], null, ['name' => 'prm_tipoacomp','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_tipoacomp'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipoacomp') }}
            </div>
            @endif
        </div>
    </div>
    <center><strong><p class="col-form-label-sm">NECESIDAD DE ACOMPAÑAMIENTO</p></strong></center>
    <div class="form-row col-md-12">
        <div class="form-group col-md-12">
            {!! Form::label('prm_actiemocional', 'Activación Emocional: ', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('prm_actiemocional',$todoxxxx['emocional'], null, ['name' => 'prm_actiemocional','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_actiemocional'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_actiemocional') }}
            </div>
            @endif
        </div>
    </div>
    <div id="list_sintomas">
        <center><strong><p class="col-form-label-sm">SÍNTOMAS DE LOS ESTADOS DE ANSIEDAD PSÍQUICA Y SÓMATICA</p></strong></center>
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                <tr class="bg-secondary text-white">
                    <th scope="col">ITEM</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col" width="120">ESCALA</th>
                </tr>
                </thead>
                <tbody>             
                    @foreach ($todoxxxx['sintomas'] as $key => $sintoma)
                        <tr>
                            <td>
                                {!! Form::label('item'.($key+1),$sintoma->id.'. '.$sintoma->nombre, ['class' => 'fw-bold']) !!}
                            </td>
                            <td>{{$sintoma->descripcion}}</td>
                            <td >        
                                {!! Form::select('input_sintomas', [''=>'Seleccione',0,1,2,3,4],
                                                    old('sintomas.'.($sintoma->id),
                                                    isset($todoxxxx['actual_sintomas'][($sintoma->id)]) ? $todoxxxx['actual_sintomas'][($sintoma->id)] : ''), 
                                                ['name'=> 'sintomas['.($sintoma->id).']',
                                                'id'=>'item'.($key+1),
                                                'class' => 'form-control form-control-sm','required',
                                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12" id="alert_sintoma">
            </div>
            <div>
                
            </div>
            <div class="col-6 d-none field_resultado">
                <div class="card card-secondary">
                    <div class="card-header">
                        Nivel de ansiedad
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item" id="nivel_ansiedad"></li>
                    </ul>
                  </div>
            </div>
            <div class="col-6 d-none field_resultado">
                <div class="card card-secondary">
                    <div class="card-header ">
                        Resultado
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Total, Puntuación Ansiedad Psíquica: <span class="" id="t_siquica">0</span></li>
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Total, Puntuación Ansiedad Somática : <span class="" id="t_somatica">0</span></li>
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Puntuación Total: <span class="" id="t_total">0</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <center><strong><p class="col-form-label-sm">FACTORES DE RIESGO POR ENTORNO </p></strong></center>
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                <tr class="bg-secondary text-white">
                    <th scope="col">ENTORNO</th>
                    <th scope="col" width="450">FACTOR</th>
                    <th scope="col" width="180">ESCALA</th>
                </tr>
                </thead>
                <tbody>             
                    @foreach ($todoxxxx['entornos'] as $key => $entorno)
                        <tr>
                            @php
                            $escala = array();
                            $escala[''] ='SELECCIONE';
                            $totalF = count($entorno->factores);
                            for ($i=1; $i < $totalF; $i++) { 
                                $escala[$i] =$i;
                            }
                            @endphp
                            <td rowspan="{{$totalF+1}}">
                                {!! Form::label('entorno'.($key+1),$entorno->id.'. '.$entorno->nombre, ['class' => 'fw-bold']) !!}
                            </td>
                            @foreach ($entorno->factores as $factor)
                                <tr>

                                    <td>
                                        {{$factor->factor->nombre}}
                                    </td>
                                    <td >        
                                        {!! Form::select('input_entorno',$escala,
                                                            old('entorno_factores.'.($factor->id),
                                                            isset($todoxxxx['actual_rfactores'][($factor->id)]) ? $todoxxxx['actual_rfactores'][($factor->id)] : ''), 
                                                        ['name'=> 'entorno_factores['.($factor->id).']',
                                                        'id'=>'factor_'.($factor->factor->id),
                                                        'class' => 'form-control form-control-sm entorno_'.($key+1),
                                                        ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><br>
    <div>
        <center><strong><p class="col-form-label-sm">CONCEPTO DE LOS FACTORES DE RIESGO POR ENTORNO</p></strong></center>
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                <tr class="bg-secondary text-white">
                    <th scope="col">ENTORNO</th>
                    <th scope="col" width="120">EP*</th>
                </tr>
                </thead>
                <tbody>             
                    @foreach ($todoxxxx['entornos'] as $key => $entornoep)
                        <tr>
                            <td>
                                {!! Form::label('entorep'.($key+1),$entornoep->id.'. '.$entornoep->nombre, ['class' => 'fw-bold']) !!}
                            </td>
                            <td >        
                                {!! Form::select('input_entornoep',  [''=>'Seleccione',1=>1,2=>2,3=>3,4=>4,5=>5,6=>6],
                                                    old('entornoep.'.($entornoep->id),
                                                    isset($todoxxxx['actual_entornosep'][($entornoep->id)]) ? $todoxxxx['actual_entornosep'][($entornoep->id)] : ''), 
                                                ['name'=> 'entornoep['.($entornoep->id).']',
                                                'id'=>'entorep'.($entornoep->id),
                                                'class' => 'form-control form-control-sm','required','disabled',
                                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><br>
    <div class="col-md-12">
        {{ Form::label('observacion', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                            'placeholder' => 'observaciones',
                            'required', 
                            'maxlength' => '4000',
                            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','style' => 'text-transform:uppercase;',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_observacion">0/4000</p>
        @if($errors->has('observacion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('observacion') }}
        </div>
        @endif
    </div>
    <center><strong><p class="col-form-label-sm">CONCEPTO PSICOSOCIAL</p></strong></center>
    @if ($todoxxxx["impresion_diag_vsi"]->concepto != null)
        <div class="col-md-12">
            {{ Form::label('info_concepto', 'Trazabilidad Impresión Diagnóstica y Análisis Social :', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('info_concepto', $todoxxxx["impresion_diag_vsi"]->concepto, ['class' => 'form-control form-control-sm',
                                'placeholder' => '',
                                'required',
                                'maxlength' => '4000',
                                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','style' => 'text-transform:uppercase;',
                                'rows'=>'7','spellcheck'=>'true',
                                'disabled']) }}
        </div>
    @else
        <div class="alert alert-warning" role="alert">
            el NNAJ no cuenta con concepto de impresión diagnóstica y análisis social valoración sicosocial en el Sistema.
        </div>
    @endif
   
    <div class="col-md-12">
        {{ Form::label('concepto_rrd', 'Concepto equipo RRD:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('concepto_rrd', null,
                            ['class' => $errors->first('concepto_rrd') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                            'placeholder' => 'Anexar concepto',
                            'required', 
                            'maxlength' => '4000',
                            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','style' => 'text-transform:uppercase;',
                            'rows'=>'7',
                            'spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_concepto_rrd">0/4000</p>
        @if($errors->has('concepto_rrd'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('concepto_rrd') }}
        </div>
        @endif
    </div>
    <div class="form-row mx-1 my-1">
        <div class="col-md-6">
            {!! Form::label('prm_requi_certi', 'Requiere certificación PSICOSOCIAL:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_requi_certi',  $todoxxxx['si_no'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_requi_certi'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_requi_certi') }}
            </div>
            @endif
        </div> 
        <div class="col-md-6 d-flex justify-content-center align-items-end">
            <div class="d-none" id="requi_certi_caja">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                    Certificaciones
                </button>
                
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Certificaciones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12">
                                {{ Form::label('requi_certi_recomend', 'Recomendaciones:', ['class' => 'control-label col-form-label-sm']) }}
                                {{ Form::textarea('requi_certi_recomend', null,
                                                    ['class' => $errors->first('requi_certi_recomend') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                                    'placeholder' => 'Registre la información cuando se requiera una indicación, recomendaciones u observación respecto a proceso médico adelantado con el NNAJ. Tenga en cuenta que se podrá presentar en algunos casos la necesidad de generación de certificado, lo cual implica que será visible para personas externas, por lo tanto, la información aquí registrada deberá ser lo menos susceptible en el manejo realizado.',
                                                    'maxlength' => '4000',
                                                    'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','style' => 'text-transform:uppercase;',
                                                    'rows'=>'14',
                                                    'spellcheck'=>'true',
                                                    ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
                                <p id="contador_requi_certi_recomend">0/4000</p>
                                @if($errors->has('requi_certi_recomend'))
                                <div class="invalid-feedback d-block">
                                    {{ $errors->first('requi_certi_recomend') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
        @if($errors->has('requi_certi_recomend'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('requi_certi_recomend') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div><br>
    @if ($todoxxxx["fechcrea"] != '')
        <div class="form-row">
            @include('layouts.registro')
        </div> 
    @endif
   
</div>


