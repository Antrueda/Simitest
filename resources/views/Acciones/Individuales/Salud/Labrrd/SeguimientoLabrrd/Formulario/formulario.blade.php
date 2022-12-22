<style>
    select:focus {
        outline: 3px solid red !important;
    }
    textarea:focus {
        outline: 3px solid red !important;
    }

    .bg-personeles{
        background-color: #D6EAF8;
    }

    .bg-proceso{
        background-color: #D5F5E3;
    }
</style>
<div class="card p-1">
    <div class="card-header">
        <h3 class="card-title">
            <strong>SEGUIMIENTO</strong>
        </h3>
    </div><br>
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
            {!! Form::label('lugar_externo', 'LUGARES/ESPACIOS EXTERNOS: ', ['class' => 'control-label']) !!}
            {!! Form::text('lugar_externo', null, ['class' => 'form-control form-control-sm ','required','onkeyup'=>"javascript:this.value=this.value.toUpperCase()",'maxlength' => '120','disabled']) !!}
            @if($errors->has('lugar_externo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('lugar_externo') }}
            </div>
            @endif
        </div>
        
        <div class="form-group col-md-6">
            {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fechdili', null, ['class' => 'form-control form-control-sm ','placeholder'=>'DD/MM/AAAA','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
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
        @if (isset($todoxxxx['modeloxx']->num_sesion))
            <div class="form-group col-md-6">
                {!! Form::label('sis_atenc_id', 'Número de Sesión: ', ['class' => 'control-label text-uppercase']) !!}
                <div class="form-control form-control-sm">
                    {{$todoxxxx['modeloxx']->num_sesion}}
                </div>
            </div>
        @endif
    </div>
    <br><center><strong><p class="col-form-label-lg">FASE DEL PROCESO DE ACOMPAÑAMIENTO</p></strong></center>
    <div class="form-row">
        <div class="form-row col-md-12">
            <div class="form-group col-md-12">
                {!! Form::label('prm_faseacomp', 'Fase de acompañamiento: ', ['class' => 'control-label text-uppercase']) !!}
                {!! Form::select('prm_faseacomp',$todoxxxx['fases'], null, ['name' => 'prm_faseacomp','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
                @if($errors->has('prm_faseacomp'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('prm_faseacomp') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <br><center><strong><p class="col-form-label-lg">5. SEGUIMIENTO</p></strong></center>
    <div class="form-row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="form-row">
                <div class="col-4 d-flex align-items-center border border-light rounded-lg bg-personeles">
                    <p class="font-weight-bold text-center px-2">5.1 COMPONENTES PERSONALES</p>
                </div>
                <div class="col-8">
                    @foreach ($todoxxxx['personales'] as $item)
                        <div class="form-row">
                            <div class="col-7 border border-light rounded-lg d-flex align-items-center justify-content-center bg-personeles">
                                <p class="p-0 m-0">{{$item->nombre}}</p>
                            </div>
                            <div class="col-5 border border-light rounded-lg d-flex align-items-center justify-content-cente">
                                {!! Form::select('prm_dinsust', [''=>'Seleccione','1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10],
                                old('resultados.'.($item->componente_id),
                                                        isset($todoxxxx['resultados'][($item->componente_id)]) ? $todoxxxx['resultados'][($item->componente_id)] : ''), 
                                ['name'=> 'resultados['.($item->componente_id).']',
                                'class' => 'form-control form-control-sm my-2','required',
                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )
                                ]) !!}
                            </div>
                        </div>
                    @endforeach      
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div><br>
    <div class="form-row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="form-row">
                <div class="col-4 d-flex align-items-center border border-light rounded-lg bg-proceso">
                    <p class="font-weight-bold text-center px-2">5.2 COMPONENTES DEL PROCESO</p>
                </div>
                <div class="col-8">
                    @foreach ($todoxxxx['proceso'] as $item)
                        <div class="form-row">
                            <div class="col-7 border border-light rounded-lg d-flex align-items-center justify-content-center bg-proceso">
                                <p class="p-0 m-0">{{$item->nombre}}</p>
                            </div>
                            <div class="col-5 border border-light rounded-lg d-flex align-items-center justify-content-cente">
                                {!! Form::select('prm_dinsust', [''=>'Seleccione','1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10],
                                  old('resultados.'.($item->componente_id),
                                                        isset($todoxxxx['resultados'][($item->componente_id)]) ? $todoxxxx['resultados'][($item->componente_id)] : ''), 
                                ['name'=> 'resultados['.($item->componente_id).']',
                                'class' => 'form-control form-control-sm my-2','required',
                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )
                                ]) !!}
                            </div>
                        </div>
                    @endforeach      
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <br><center><strong><p class="col-form-label-lg">PLAN DE TRABAJO REDUCCIÓN DEL RIESGO Y DAÑO</p></strong></center>
    <div class="form-row">
        <div class="form-group col-md-12">
            {!! Form::label('habilidades', 'Habilidades a Trabajar:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('habilidades',$todoxxxx['habilidades'], null, ['name' => 'habilidades[]','required','multiple','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('habilidades'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('habilidades') }}
            </div>
            @endif
        </div>
    </div>
    <br><center><strong><p class="col-form-label-lg">SEGUIMIENTO AL PROCESO DE ACOMPAÑAMIENTO</p></strong></center>
    <div class="form-row">
        <div class="col-md-12">
            {{ Form::label('observacion_pro', 'Observaciones sobre el proceso:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observacion_pro', null, ['class' => $errors->first('observacion_pro') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'required','placeholder' => 'OBSERVACIONES', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_observacion_pro">0/4000</p>
            @if($errors->has('observacion_pro'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion_pro') }}
            </div>
            @endif
        </div>
    </div><br>
    <div class="form-row">
        <div class="col-md-4">
            <p><center><strong>Categoria</strong></center></p>
        </div>
        <div class="col-md-8">
            <p><center><strong>Observaciones</strong></center></p>
        </div>
    </div>
    <div class="form-row">
        <div class="col-1 d-flex justify-content-center align-items-start" >
            <input type="checkbox" {{old('observacion_afront',isset($todoxxxx['modeloxx']->observacion_afront)) != "" ? 'checked':''}}  id="check_observacion_afront" style="width: 18px;height: 18px; margin-top: 7px;">
        </div>
        <div class="col-md-4">
            {{ Form::label('observacion_afront', 'Capacidad de Afrontamiento:', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="col-md-7">
            {{ Form::textarea('observacion_afront', null, ['class' => $errors->first('observacion_afront') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required','placeholder' => 'OBSERVACIONES', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'3','spellcheck'=>'true','disabled',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_observacion_afront">0/4000</p>
            @if($errors->has('observacion_afront'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion_afront') }}
            </div>
            @endif
        </div>
    </div><hr>
    <div class="form-row">
        <div class="col-1 d-flex justify-content-center align-items-start" >
            <input type="checkbox" {{old('observacion_impu',isset($todoxxxx['modeloxx']->observacion_impu)) != "" ? 'checked':''}}  id="check_observacion_impu" style="width: 18px;height: 18px; margin-top: 7px;">
        </div>
        <div class="col-md-4">
            {{ Form::label('observacion_impu', ' Sensación Impunidad:', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="col-md-7">
            {{ Form::textarea('observacion_impu', null, ['class' => $errors->first('observacion_impu') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required', 'placeholder' => 'OBSERVACIONES', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'3','spellcheck'=>'true',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_observacion_impu">0/4000</p>
            @if($errors->has('observacion_impu'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion_impu') }}
            </div>
            @endif
        </div>
    </div><hr>
    <div class="form-row">
        <div class="col-1 d-flex justify-content-center align-items-start" >
            <input type="checkbox" {{old('observacion_violen',isset($todoxxxx['modeloxx']->observacion_violen)) != "" ? 'checked':''}}  id="check_observacion_violen" style="width: 18px;height: 18px; margin-top: 7px;">
        </div>
        <div class="col-md-4">
            {{ Form::label('observacion_violen', 'Concepción y práctica de relaciones violentas:', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="col-md-7">
            {{ Form::textarea('observacion_violen', null, ['class' => $errors->first('observacion_violen') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required', 'placeholder' => 'OBSERVACIONES', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'3','spellcheck'=>'true',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_observacion_violen">0/4000</p>
            @if($errors->has('observacion_violen'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion_violen') }}
            </div>
            @endif
        </div>
    </div><hr>
    <div class="form-row">
          <div class="col-1 d-flex justify-content-center align-items-start" >
            <input type="checkbox" {{old('observacion_auto',isset($todoxxxx['modeloxx']->observacion_auto)) != "" ? 'checked':''}}  id="check_observacion_auto" style="width: 18px;height: 18px; margin-top: 7px;">
        </div>
        <div class="col-md-4">
            {{ Form::label('observacion_auto', 'Estigma y Autoestigma:', ['class' => 'control-label col-form-label-sm']) }}
        </div>
        <div class="col-md-7">
            {{ Form::textarea('observacion_auto', null, ['class' => $errors->first('observacion_auto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','required', 'placeholder' => 'OBSERVACIONES', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'3','spellcheck'=>'true',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_observacion_auto">0/4000</p>
            @if($errors->has('observacion_auto'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('observacion_auto') }}
            </div>
            @endif
        </div>
    </div><hr>
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



