<style>
    select:focus {
        outline: 3px solid red !important;
    }
    textarea:focus {
        outline: 3px solid red !important;
    }
</style>
<div class="card p-1">
    <div class="card-header">
        <h3 class="card-title">
            <strong>SEGUIMIENTO</strong>
        </h3>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'UPI DE ATENCIÓN:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_depen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_depen_id', 'class' => 'form-control form-control-sm select2','required']) !!}
            @if($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fechdili', null, ['class' => 'form-control form-control-sm ','placeholder'=>'DD/MM/AAAA','required']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
            @if($errors->has('fechdili'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fechdili') }}
            </div>
            @endif
        </div>
    </div>
    @if ($todoxxxx['usuariox']->nnaj_sexo->prm_sexo_id == 21)
        <div class="form-row mx-1">
            <div class="form-group col-md-6">
                {!! Form::label('prm_estado_gesta', '¿SE ENCUENTRA EN ESTADO DE GESTACIÓN?:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_estado_gesta',$todoxxxx['si_no'], null, ['name' => 'prm_estado_gesta','required','class' => 'form-control form-control-sm']) !!}
                @if($errors->has('prm_estado_gesta'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_estado_gesta') }}
                </div>
                @endif
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('edad_gesta', 'Edad gestacional:', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::number('edad_gesta', null, ['name' => 'edad_gesta','required','class' => 'form-control form-control-sm','disabled']) !!}
                    <div class="input-group-append">
                        <span class="input-group-text px-4 py-0">SEM</span>
                    </div>
                </div>
                @if($errors->has('edad_gesta'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('edad_gesta') }}
                </div>
                @endif
            </div>
        </div>
    @endif
   
    <div>
        <center><strong><p class="col-form-label-sm">VALORACIÓN ANTROPOMÉTRICA</p></strong></center>
    </div>
    <div class="form-row mx-1">
        <div class="form-group col-md-3">
            {!! Form::label('peso', 'PESO (Kg):', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::number('peso', null, ['name' => 'peso','required','class' => 'form-control form-control-sm','data-cifras'=>'2','data-decimal'=>'2','oninput'=>"enforceNumberValidation(this)"]) !!}
                <div class="input-group-append">
                    <span class="input-group-text px-2 py-0">Kg</span>
                </div>
            </div>
            @if($errors->has('peso'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('peso') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('talla', 'TALLA (cm):', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::number('talla', null, ['name' => 'talla','required','class' => 'form-control form-control-sm','data-cifras'=>'3','data-decimal'=>'2','oninput'=>"enforceNumberValidation(this)"]) !!}
                <div class="input-group-append">
                    <span class="input-group-text px-2 py-0">Cm</span>
                </div>
            </div>
            @if($errors->has('talla'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('talla') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('talla', '*I.M.C.:', ['class' => 'control-label']) !!}
            <div class="input-group" >
                <div class="form-control form-control-sm bg-light" >
                    <strong id="mostrar_imc"></strong>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text px-2 py-0">kg/m2</span>
                </div>
            </div>
            <div id="resultado_imc">
                
            </div>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('cintura_cc', '**C.C.:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::number('cintura_cc', null, ['name' => 'cintura_cc','required','class' => 'form-control form-control-sm','data-cifras'=>'2','data-decimal'=>'1','oninput'=>"enforceNumberValidation(this)"]) !!}
                <div class="input-group-append">
                    <span class="input-group-text px-2 py-0">Cm</span>
                </div>
            </div>
            <div id="resultado_cc">
                
            </div>
            @if($errors->has('cintura_cc'))
            <div class="invalid-feedback d-block">
                <div>
                    {{ $errors->first('cintura_cc') }}
                </div>
            </div>
            @endif
        </div>
        <div class="col-12 mb-2">
            <small class="form-text text-muted">*I.M.C:  Índice de Masa Corporal.</small>
            <small class="form-text text-muted">** C.C.: Circunferencia de cintura.</small>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('prm_cod_imcedad', 'CODIFICACIÓN IMC/EDAD:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_cod_imcedad',$todoxxxx['imc_edad'], null, ['name' => 'prm_cod_imcedad','required','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_cod_imcedad'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_cod_imcedad') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('prm_cod_te', 'CODIFICACIÓN TALLA/EDAD:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_cod_te',$todoxxxx['talla_edad'], null, ['name' => 'prm_cod_te','required','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_cod_te'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_cod_te') }}
            </div>
            @endif
        </div>
    </div>
    <div>
        <center><strong><p class="col-form-label-sm">ANTECEDENTES MÉDICOS Y DE ALIMENTACIÓN</p></strong></center>
    </div>
    <div class="col-12 mb-2">
        <small class="form-text text-info">Seleccione si el NNAJ presenta alguna enfermedad de lo contrario continuar.</small>
    </div>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            <div class="card p-1">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr class="bg-secondary text-white">
                            <th scope="col">ENFERMEDADES</th>
                            <th scope="col">DIAGNOSTICOS</th>
                        </tr>
                        </thead>
                       <tbody>    
                        @foreach ($todoxxxx['enferdiags'] as $key => $item)
                            <tr>
                                @php
                                    $diagosticos = array();
                                    $diagosticos[''] ='SELECCIONE';
                                    foreach ($item['enfermedades_asignadas'] as $key => $diag) {
                                        $diagosticos[$diag['id']] =$diag['diagnostico']['codigo'].' '.$diag['diagnostico']['nombre'];
                                    }
                                @endphp
                                <th>{{$item['nombre']}}</th>
                                <th>
                                    {!! Form::select('enfermedades',$diagosticos,
                                    old('resp_enfermedades.'.($item['id']),isset($todoxxxx['actual_resp_enfermedades'][($item['id'])]) ? $todoxxxx['actual_resp_enfermedades'][($item['id'])] : ''),
                                    ['name' => 'resp_enfermedades['.($item['id']).']','class' => 'form-control form-control-sm']) !!}
                                </th>
                            </tr>
                        @endforeach          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('prm_acti_fisica', 'ACTIVIDAD FÍSICA:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_acti_fisica',$todoxxxx['actividad_fisica'], null, ['name' => 'prm_acti_fisica','required','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_acti_fisica'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_acti_fisica') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_apetito', 'APETITO:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_apetito',$todoxxxx['apetito'], null, ['name' => 'prm_apetito','required','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_apetito'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_apetito') }}
            </div>
            @endif
        </div>
    </div><hr>
    <div>
        <center><strong><p class="col-form-label-sm">FRECUENCIA DE CONSUMO DE ALIMENTOS ANTES DE INGRESAR AL IDIPRON </p></strong></center>
    </div>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            <div class="card p-1">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr class="bg-secondary text-white">
                            <th scope="col">ALIMENTO</th>
                            <th scope="col">FRECUENCIA </th>
                        </tr>
                        </thead>
                        <tbody>    
                            @foreach ($todoxxxx['alimentos'] as $key => $item)
                                <tr>
                                    <th>{{$item}}</th>
                                    <th>
                                        {!! Form::select('alimentos',$todoxxxx['frecuencia'],
                                        old('resp_alimentos.'.($key),isset($todoxxxx['actual_alimentos'][($key)]) ? $todoxxxx['actual_alimentos'][($key)] : ''),
                                        ['name' => 'resp_alimentos['.($key).']','class' => 'form-control form-control-sm']) !!}
                                    </th>
                                </tr>
                            @endforeach          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><hr>
    <div>
        <center><strong><p class="col-form-label-sm">ACCIONES A INCLUIR DEL PLAN ALIMENTARIO Y NUTRICIONAL</p></strong></center>
    </div>
    <div class="form-row mx-1">
        <div class="col-md-12">
            {!! Form::label('', 'AUMENTAR:', ['class' => 'control-label']) !!}
        </div>
        <div class="col-12 mb-3">
            @foreach ($todoxxxx['list_aumentar'] as $key => $item)
                <div class="custom-control custom-radio custom-control-inline">
                    {!! Form::radio('prm_accion_aume',$key,null, ['id' => 'aumentar_'.($key),'required','class' => 'custom-control-input']) !!}
                    <label class="custom-control-label font-weight-normal" for="aumentar_{{$key}}">{{$item}}</label>
                </div>
            @endforeach
        </div>
        <div class="col-md-12">
            {!! Form::label('prm_cod_imcedad', 'DISMINUIR:', ['class' => 'control-label']) !!}
        </div>
        <div class="col-12 mb-3">
            @foreach ($todoxxxx['list_disminuir'] as $key => $item)
            <div class="custom-control custom-radio custom-control-inline">
                {!! Form::radio('prm_accion_dism',$key,null, ['id' => 'disminuir_'.($key),'required','class' => 'custom-control-input']) !!}
                <label class="custom-control-label font-weight-normal" for="disminuir_{{$key}}">{{$item}}</label>
            </div>
            @endforeach
        </div>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('prm_seg_consumo', 'SEGUIMIENTO DE CONSUMO DE ALIMENTOS EN LA UNIDAD:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_seg_consumo',$todoxxxx['list_consumo'], null, ['name' => 'prm_seg_consumo','required','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_seg_consumo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_seg_consumo') }}
            </div>
            @endif
        </div>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('intrainstitucional', 'REMISIÓN INTRAINSTITUCIONAL:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('intrainstitucional',$todoxxxx['list_intra'], null, ['name' => 'intrainstitucional[]','required','multiple','class' => 'form-control form-control-sm select2']) !!}
            </div>
            @if($errors->has('intrainstitucional'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('intrainstitucional') }}
            </div>
            @endif
        </div>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('prm_diagnostico', 'DIAGNÓSTICO NUTRICIONAL:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_diagnostico',$todoxxxx['lis_dianutricional'], null, ['name' => 'prm_diagnostico','required','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_diagnostico'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_diagnostico') }}
            </div>
            @endif
        </div>
    </div>
    <hr>
    <div class="form-row mx-1">
        <div class="col-md-12">
            {{ Form::label('observacion', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos relevantes durante la aplicación del cuestionario, así mismo indicar resultados de cursos técnicos afines o con mismo puntaje.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_observacion">0/4000</p>
            @if($errors->has('observacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_requi_certi', '¿Requiere certificado Nutricional?:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_requi_certi',$todoxxxx['si_no'], null, ['name' => 'prm_requi_certi','required','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('prm_requi_certi'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_requi_certi') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-12 d-none" id="prm_certi_recomen_box">
            {!! Form::label('prm_certi_recomen', 'Recomendaciones:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_certi_recomen',$todoxxxx['lis_recomendaciones'], null, ['name' => 'prm_certi_recomen','required','disabled','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('prm_certi_recomen'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_certi_recomen') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 d-none" id="plan_alimentacion_box">
            {{ Form::label('plan_alimentacion', 'Plan de alimentación:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('plan_alimentacion', null, ['class' => $errors->first('plan_alimentacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required', 'placeholder' => 'Plan de alimentación.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_plan_alimentacion">0/4000</p>
            @if($errors->has('plan_alimentacion'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('plan_alimentacion') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-12 d-none" id="suplemen_nutri_box">
            {!! Form::label('suplemen_nutri', 'Suplemento y/o complemento nutricional:', ['class' => 'control-label']) !!}
            {!! Form::select('suplemen_nutri',$todoxxxx['suplementos'], null, ['name' => 'suplemen_nutri','required','disabled','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('suplemen_nutri'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('suplemen_nutri') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
            {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
            @if($errors->has('user_fun_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('user_fun_id') }}
            </div>
            @endif
        </div>
    </div><br>
    <div class="form-row">
        @include('layouts.registro')
    </div>
    {{-- informacion de resultados tabla y grafica --}}
</div>



