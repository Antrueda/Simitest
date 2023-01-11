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
            <strong>VALORACIÓN INICIAL</strong>
        </h3>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'UPI DE ATENCIÓN:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_depen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_depen_id', 'class' => 'form-control form-control-sm select2','disabled']) !!}
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fechdili', null, ['class' => 'form-control form-control-sm ','placeholder'=>'DD/MM/AAAA','disabled']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
        </div>
    </div>
    @if ($todoxxxx['usuariox']->nnaj_sexo->prm_sexo_id == 21)
        <div class="form-row mx-1">
            <div class="form-group col-md-6">
                {!! Form::label('prm_estado_gesta', '¿SE ENCUENTRA EN ESTADO DE GESTACIÓN?:', ['class' => 'control-label']) !!}
                {!! Form::select('prm_estado_gesta',$todoxxxx['si_no'], null, ['name' => 'prm_estado_gesta','disabled','class' => 'form-control form-control-sm']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('edad_gesta', 'Edad gestacional:', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::number('edad_gesta', null, ['id'=> 'ver','name' => 'edad_gesta','required','class' => 'form-control form-control-sm','disabled']) !!}
                    <div class="input-group-append">
                        <span class="input-group-text px-4 py-0">SEM</span>
                    </div>
                </div>
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
                {!! Form::number('peso', null, ['name' => 'peso','disabled','class' => 'form-control form-control-sm','data-cifras'=>'2','data-decimal'=>'2','oninput'=>"enforceNumberValidation(this)"]) !!}
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
                {!! Form::number('talla', null, ['name' => 'talla','disabled','class' => 'form-control form-control-sm','data-cifras'=>'3','data-decimal'=>'2','oninput'=>"enforceNumberValidation(this)"]) !!}
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
                {!! Form::number('cintura_cc', null, ['name' => 'cintura_cc','disabled','class' => 'form-control form-control-sm','data-cifras'=>'2','data-decimal'=>'1','oninput'=>"enforceNumberValidation(this)"]) !!}
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
                {!! Form::select('prm_cod_imcedad',$todoxxxx['imc_edad'], null, ['name' => 'prm_cod_imcedad','disabled','class' => 'form-control form-control-sm']) !!}
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
                {!! Form::select('prm_cod_te',$todoxxxx['talla_edad'], null, ['name' => 'prm_cod_te','disabled','class' => 'form-control form-control-sm']) !!}
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
                        @foreach ($todoxxxx['datadinamica']['resenfermedades'] as $key => $item)
                            <tr>
                                <th>{{$item['enfermedad']['nombre']}}</th>
                                <th>
                                    <div class="form-control form-control-sm">
                                        {{$item['diagnostico']['nombre']}}
                                    </div>
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
                {!! Form::select('prm_acti_fisica',$todoxxxx['actividad_fisica'], null, ['name' => 'prm_acti_fisica','disabled','class' => 'form-control form-control-sm']) !!}
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
                {!! Form::select('prm_apetito',$todoxxxx['apetito'], null, ['name' => 'prm_apetito','disabled','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('prm_apetito'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_apetito') }}
            </div>
            @endif
        </div>
    </div><hr>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('n_comidas', ' N.º COMIDAS CONSUMIDAS/DÍA ANTES DE INGRESAR A IDIPRON:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('n_comidas',[0,1,2,3,4,5], null, ['name' => 'n_comidas','disabled','class' => 'form-control form-control-sm']) !!}
            </div>
            @if($errors->has('n_comidas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('n_comidas') }}
            </div>
            @endif
        </div>
    </div>
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
                                        ['name' => 'resp_alimentos['.($key).']','disabled','class' => 'form-control form-control-sm']) !!}
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
                    {!! Form::radio('prm_accion_aume',$key,null, ['id' => 'aumentar_'.($key),'disabled','class' => 'custom-control-input']) !!}
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
                {!! Form::radio('prm_accion_dism',$key,null, ['id' => 'disminuir_'.($key),'disabled','class' => 'custom-control-input']) !!}
                <label class="custom-control-label font-weight-normal" for="disminuir_{{$key}}">{{$item}}</label>
            </div>
            @endforeach
        </div>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('prm_seg_consumo', 'SEGUIMIENTO DE CONSUMO DE ALIMENTOS EN LA UNIDAD:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_seg_consumo',$todoxxxx['list_consumo'], null, ['name' => 'prm_seg_consumo','disabled','class' => 'form-control form-control-sm']) !!}
            </div>
        </div>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('intrainstitucional', 'REMISIÓN INTRAINSTITUCIONAL:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('intrainstitucional',$todoxxxx['list_intra'], null, ['name' => 'intrainstitucional[]','disabled','multiple','class' => 'form-control form-control-sm select2']) !!}
            </div>
        </div>
    </div><br>
    <div class="form-row mx-1">
        <div class="form-group col-md-12">
            {!! Form::label('prm_diagnostico', 'DIAGNÓSTICO NUTRICIONAL:', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::select('prm_diagnostico',$todoxxxx['lis_dianutricional'], null, ['name' => 'prm_diagnostico','disabled','class' => 'form-control form-control-sm']) !!}
            </div>
        </div>
    </div>
    <hr>
    <div class="form-row mx-1">
        <div class="col-md-12">
            {{ Form::label('observacion', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos relevantes durante la aplicación del cuestionario, así mismo indicar resultados de cursos técnicos afines o con mismo puntaje.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true','disabled']) }}
            <p id="contador_observacion">0/4000</p>
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_requi_certi', '¿Requiere certificado Nutricional?:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_requi_certi',$todoxxxx['si_no'], null, ['name' => 'prm_requi_certi','disabled','class' => 'form-control form-control-sm']) !!}
        </div>
        @if ($todoxxxx['modeloxx']->prm_certi_recomen != null)
        <div class="form-group col-md-12 " >
            {!! Form::label('id_ver', 'Recomendaciones:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_certi_recomen',$todoxxxx['lis_recomendaciones'], null, ['name' => 'prm_certi_recomen','id'=>'id_ver','required','disabled','class' => 'form-control form-control-sm']) !!}
        </div>
        @endif
        @if ($todoxxxx['modeloxx']->plan_alimentacion != null)
            <div class="col-md-12" >
                {{ Form::label('plan_alimentacion', 'Plan de alimentación:', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::textarea('plan_alimentacion', null, ['class' =>  'form-control form-control-sm','required','id'=>'id_ver','disabled', 'placeholder' => 'Plan de alimentación.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
                <p id="contador_observacion">0/4000</p>
            </div>
        @endif
        @if ($todoxxxx['modeloxx']->suplemen_nutri != null)
            <div class="form-group col-md-12 ">
                {!! Form::label('suplemen_nutri', 'Suplemento y/o complemento nutricional:', ['class' => 'control-label']) !!}
                {!! Form::select('suplemen_nutri',$todoxxxx['suplementos'], null, ['name' => 'suplemen_nutri','id'=>'id_ver','disabled','class' => 'form-control form-control-sm']) !!}
            </div>
        @endif
    </div>
    <div class="form-row">
        <div class="col-md-12">
            {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
            {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        </div>
    </div><br>
    <div class="form-row">
        @include('layouts.registro')
    </div>
    {{-- informacion de resultados tabla y grafica --}}
</div>



