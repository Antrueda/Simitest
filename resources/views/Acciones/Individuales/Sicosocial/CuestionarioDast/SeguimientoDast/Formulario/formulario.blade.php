<div class="card p-1">
    <div class="card-header">
        <h3 class="card-title">
            <strong>SEGUIMIENTO</strong>
        </h3>
    </div><br>
    <div class="form-row col-md-12">
        
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'UPI/AREA/CONTEXTO:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_depen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_depen_id', 'class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
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
        <div class="form-group col-md-12">
            {!! Form::label('prm_tipo_seguimiento', 'Tipo de seguimiento:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_tipo_seguimiento',$todoxxxx['list_tipos_seguimientos'], null, ['name' => 'prm_tipo_seguimiento','required','class' => 'form-control form-control-sm',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_tipo_seguimiento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipo_seguimiento') }}
            </div>
            @endif
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12">
            {{ Form::label('obs_seguimiento', 'Observación por tipo de seguimiento:', ['class' => 'control-label ']) }}
            {{ Form::textarea('obs_seguimiento', null, ['class' => $errors->first('obs_seguimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Relacione de manera cualitativa lo evidenciado según el tipo de seguimiento (En el caso de ser un seguimiento por la Secretaría Distrital de Salud transcriba el concepto emitido por esta entidad). Ingrese las acciones que desde el perfil profesional se adelantará con el/la NNAJ en la unidad.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_obs_seguimiento">0/4000</p>
            @if($errors->has('obs_seguimiento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_seguimiento') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_diligencia', 'Diligenciamiento del Cuestionario DAST-10 en:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_diligencia',$todoxxxx['list_diligenciamiento'], null, ['name' => 'prm_diligencia','required','class' => 'form-control form-control-sm',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_diligencia'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_diligencia') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
            {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
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
</div>



