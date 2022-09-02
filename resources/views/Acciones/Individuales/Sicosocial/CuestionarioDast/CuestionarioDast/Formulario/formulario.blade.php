<div class="card p-1">
    <div class="card-header">
        <h3 class="card-title">
            <strong>TAMIZAJE INICIAL</strong>
        </h3>
    </div><br>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha']) !!}
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
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'UPI/AREA/CONTEXTO:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_depen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_depen_id', 'class' => 'form-control form-control-sm select2']) !!}
            @if($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
            @endif
        </div>
        {{-- <div class="form-group col-md-6">
            {!! Form::label('prm_remitir', 'Tipo de seguimiento:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('prm_remitir',['Seleccione','Seguimiento RRD','Seguimiento RRD'], null, ['name' => 'prm_remitir','required','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('prm_remitir'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_remitir') }}
            </div>
            @endif
        </div> --}}
    </div>
    <div class="p-2">
        <div>
            <center><strong><p class="col-form-label-sm">CUESTIONARIO</p></strong></center>
        </div>
        <div>
            <strong><p class="col-form-label-sm">ESTAS PREGUNTAS ESTÁN REFERIDAS A LOS ÚLTIMOS DOCE MESES</p></strong>
        </div>
        <div>
            @foreach ($todoxxxx['preguntas'] as $pregunta)
                <div class="form-row">
                    <div class="form-group col-md-9 mb-0">
                        {!! Form::label('pregunta_'.($pregunta->id),$pregunta->pregunta, ['class' => 'font-weight-normal']) !!}
                    </div>
                    <div class="forn-group col-md-2 mb-0">
                        {!! Form::select('pregunta', ['NO','SI'],null,
                    ['name'=> 'compdesempenio',
                    'class' => 'form-control','required',
                    ]) !!}
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div><br>
    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('prm_remitir', 'Requiere aplicación del VESPA:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_remitir',['Seleccione','SI','NO'], null, ['name' => 'prm_remitir','required','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('prm_remitir'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_remitir') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('fecha_vespa', 'Fecha de aplicación del VESPA:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha_vespa', null, ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
            @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha_vespa') }}
            </div>
            @endif
        </div>
        <div class="col-md-12">
            {{ Form::label('observaciones', 'Tipo de acción a desarrollar:', ['class' => 'control-label']) }}
            {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Relacione el componente que realizará el seguimiento y/o las acciones que se requieren según el resultado obtenido en el cuestionario DAST.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_observaciones">0/4000</p>
            @if($errors->has('observaciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('senias') }}
            </div>
            @endif
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_remitir', 'Patrón de consumo:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_remitir',['Seleccione','Seguimiento RRD','Seguimiento RRD'], null, ['name' => 'prm_remitir','required','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('prm_remitir'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_remitir') }}
            </div>
            @endif
        </div>
        <div class="col-md-12">
            {{ Form::label('observaciones', 'Patrón de consumo:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa el patrón de consumo de SPA de acuerdo con los criterios descritos en el instructivo.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_observaciones">0/4000</p>
            @if($errors->has('observaciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('senias') }}
            </div>
            @endif
        </div>
        <div class="col-md-12">
            {{ Form::label('observaciones', 'Acción a realizar por curso de vida (De acuerdo con la resolución 089 de 2019):', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa las acciones que se requieren según el curso de vida (Infancia, adolescencia y juventud).', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_observaciones">0/4000</p>
            @if($errors->has('observaciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('senias') }}
            </div>
            @endif
        </div>
        <div class="col-md-12">
            {{ Form::label('observaciones', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos relevantes durante la aplicación del cuestionario, así mismo indicar resultados de cursos técnicos afines o con mismo puntaje.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_observaciones">0/4000</p>
            @if($errors->has('observaciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('senias') }}
            </div>
            @endif
        </div>
        {{-- <div class="col-md-12">
            {{ Form::label('observaciones', 'Observación por tipo de seguimiento:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Relacione de manera cualitativa lo evidenciado según el tipo de seguimiento (En el caso de ser un seguimiento por la Secretaría Distrital de Salud transcriba el concepto emitido por esta entidad). Ingrese las acciones que desde el perfil profesional se adelantará con el/la NNAJ en la unidad.', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
            <p id="contador_observaciones">0/4000</p>
            @if($errors->has('observaciones'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('senias') }}
            </div>
            @endif
        </div> --}}
        <div class="form-group col-md-12">
            {!! Form::label('prm_remitir', 'Diligenciamiento del Cuestionario DAST-10 en:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_remitir',['Seleccione','Fisico','Virtual'], null, ['name' => 'prm_remitir','required','class' => 'form-control form-control-sm']) !!}
            @if($errors->has('prm_remitir'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_remitir') }}
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



