<style>
.vihabilidades .lista{
    height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}

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
<div class="card vihabilidades">
    {{-- /matriculas nnaj --}}
    @include($todoxxxx['rutacarp'].''.'ValoIdentHabOcupacional.Formulario.infomatriculasnnaj')

    <div class="form-row col-md-12">
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
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_depen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_depen_id','required','class' => 'form-control form-control-sm select2',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
            @endif
        </div>
    </div>
    <div>
        <center><strong><p class="col-form-label-sm">COMPETENCIAS OCUPACIONALES</p></strong></center>
    </div>
    <div class="col-md-12">
        {{ Form::label('antecede_clin', 'ANTECEDENTES CLÍNICOS:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('antecede_clin', null, ['class' => $errors->first('antecede_clin') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                            'placeholder' => 'Realice una breve descripción de antecedentes clínicos de importancia.',
                            'required', 
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_antecede_clin">0/4000</p>
        @if($errors->has('antecede_clin'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('antecede_clin') }}
        </div>
        @endif
    </div>
    <div class="card pt-2">
        <div class="col-md-12">
            {!! Form::label('prm_dinconsumo', 'DINÁMICAS DE CONSUMO DE SUSTANCIAS PSICOACTIVAS:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_dinconsumo',  $todoxxxx['dinsustancias'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_dinconsumo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_dinconsumo') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 pl-4">
            {{ Form::label('obs_sustanpsico', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('obs_sustanpsico', null, ['class' => $errors->first('obs_sustanpsico') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                'placeholder' => 'Colocar el o los tipos de sustancias psicoactivas que ha consumido y/o está consumiendo el joven; así como su frecuencia y tiempo de uso.',
                                'required', 
                                'maxlength' => '4000',
                                'rows'=>'7','spellcheck'=>'true',
                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_obs_sustanpsico">0/4000</p>
            @if($errors->has('obs_sustanpsico'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_sustanpsico') }}
            </div>
            @endif
        </div>
    </div>
    <div class="card pt-2">
        <div class="col-md-12 mb-2">
            {!! Form::label('prm_autocuidado', 'AUTOCUIDADO:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_autocuidado',  $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_autocuidado'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_autocuidado') }}
            </div>
            @endif
        </div>
        <div class="col-md-12 mb-2">
            {!! Form::label('prm_rutinas', 'HÁBITOS Y RUTINAS:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_rutinas',  $todoxxxx['dinamica'], null, ['class' => 'form-control form-control-sm','required',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
            @if($errors->has('prm_rutinas'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_rutinas') }}
            </div>
            @endif
        </div>

        <div class="col-md-12 pl-4">
            {{ Form::label('obs_habitos', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('obs_habitos', null,
                                ['class' => $errors->first('obs_habitos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                'placeholder' => 'En el cuadro de observaciones se debe registrar si el AJ logra llevar a cabo todas las actividades de Autocuidado y Hábitos y Rutinas; anotar aquellas actividades que aún no logra ejecutar y/o en las que presenta dificultad y su razón.',
                                'required', 
                                'maxlength' => '4000',
                                'rows'=>'7',
                                'spellcheck'=>'true',
                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_obs_habitos">0/4000</p>
            @if($errors->has('obs_habitos'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('obs_habitos') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        {{ Form::label('antece_ocupa', 'ANTECEDENTES OCUPACIONALES:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('antece_ocupa', null, ['class' => $errors->first('antece_ocupa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
                            'placeholder' => 'Escolaridad: Registrar el ultimo grado aprobado, si ha perdido cursos, si actualmente está escolarizado y en qué grado. Experiencia Laboral: Registrar edad de inicio de actividad laboral informal y/o formal si ya cuenta con ella, actividades realizadas, funciones, duración en el empleo, motivo de retiro. Registrar desde la experiencia laboral más antigua hasta la más reciente o actual.',
                            'required',
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_antece_ocupa">0/4000</p>
        @if($errors->has('antece_ocupa'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('antece_ocupa') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('antece_tiempo', 'ANTECEDENTES TIEMPO LIBRE (Intereses / Motivaciones):', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('antece_tiempo', null, ['class' => $errors->first('antece_tiempo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
                            'placeholder' => 'Registrar todas aquellas actividades que el AJ realiza en su día a día, que actividades le interesan y/o que actividades lo motivan y /o desea aprender.',
                            'required',
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_antece_tiempo">0/4000</p>
        @if($errors->has('antece_tiempo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('antece_tiempo') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('prospeccion', 'PROSPECCIÓN (Proyecto de Vida):', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('prospeccion', null, ['class' => $errors->first('prospeccion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
                            'placeholder' => 'Registrar las metas que refiere el AJ, dando la siguiente indicación: Metas a Corto plazo (las que pueden llevar a cabo en menos de un año), Metas a mediano plazo (las que pueden llevar a cabo entre un año y 5 años) y Metas a Largo Plazo (las que pueden llevar a cabo a partir de 5 años en adelante). Indagar sobre como lo puede llevar a cabo y que necesitaría para lograrlo en ese tiempo.',
                            'required',
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_prospeccion">0/4000</p>
        @if($errors->has('prospeccion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prospeccion') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('familia_nucleo', 'FAMILIA:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('familia_nucleo', null, ['class' => $errors->first('familia_nucleo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
                            'placeholder' => 'Registrar cómo está conformado el núcleo familiar del joven, es importante registrar el tipo de relación que manejan con cada uno de sus integrantes (buena, mala, regular) y por qué. Si ya no tiene contacto con ellos indagar el motivo; así mismo la edad en la que salió de su hogar. y en general a aquellos datos relevantes que permitan identificar si la red familiar es o no una red significativa de apoyo.',
                            'required',
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_familia_nucleo">0/4000</p>
        @if($errors->has('familia_nucleo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('familia_nucleo') }}
        </div>
        @endif
    </div>
    <div>
        <center><strong><p class="col-form-label-sm">COMPONENTES DEL DESEMPEÑO</p></strong></center>
    </div>
    <div class="lista">
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                <tr class="bg-secondary text-white">
                    <th scope="col">ÁREA</th>
                    <th scope="col">SUB ÁREAS</th>
                    <th scope="col">EVALUACIÓN</th>
                </tr>
                </thead>
                <tbody>              
                    @foreach ($todoxxxx['areasubs'] as $key => $area)
                        <tr>
                            <th scope="row" ROWSPAN="{{(count($area->subareas) + 1)}}"><center>{{$area->nombre}}</center></th>
                        </tr>
                        
                        @foreach ($area->subareas as $key => $subarea)
                            <tr>
                                <td>{{$subarea->nombre}}</td>
                                <td>        
                                    {!! Form::select('desempeno', $todoxxxx['valoracion_componente'],
                                                     old('compdesempenio.'.($subarea->id),
                                                     isset($todoxxxx['actual_compdesempenio'][($subarea->id)]) ? $todoxxxx['actual_compdesempenio'][($subarea->id)] : ''), 
                                                    ['name'=> 'compdesempenio['.($subarea->id).']',
                                                    'class' => 'form-control form-control-sm','required',
                                                    ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <th COLSPAN="3">
                                <div class="col-md-12">
                                    {{ Form::label( 'descripcion'.$area->id, 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
                                    {{ Form::textarea( 'descripcion'.$area->id,  
                                                old('obsarea.'.($area->id),
                                                    isset($todoxxxx['actual_obsarea'][($area->id)]) ? $todoxxxx['actual_obsarea'][($area->id)] : ''), 
                                                ['name'=> 'obsarea['.$area->id.']',
                                                'class' => 'form-control form-control-sm', 
                                                'placeholder' => 'ESCRIBIR OBSERVACION ÁREA '.$area->nombre, 
                                                'maxlength' => '4000',
                                                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',
                                                'rows'=>'3','spellcheck'=>'true',
                                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )],) }}
                                    <p id="contador_descripcion{{$area->id}}">0/4000</p>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><hr>
    <br>
    <center>
        {{ Form::label('cuestio', '4.RESULTADOS CUESTIONARIO  IDENTIFICACIÓN HABILIDADES, COMPETENCIAS E INTERESES OCUPACIONALES', ['class' => 'control-label col-form-label-sm']) }}
    </center>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="control-label col-form-label-sm">LETRA</th>
            <th class="control-label col-form-label-sm">CURSO</th>
            <th class="control-label col-form-label-sm">TOTAL</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($todoxxxx['conthabi'] as $key => $item)
                <tr>
                    <th class="control-label col-form-label-sm">
                        {{$key}}
                    </th>
                    <th class="control-label col-form-label-sm">
                        {{$item[1]}}
                    </th>
                    <th class="control-label col-form-label-sm">
                        {{$item[0]}}
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr><br>
    <div class="col-md-12">
        {{ Form::label('conc_ocupa', 'CONCEPTO OCUPACIONAL:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('conc_ocupa', null, ['class' => $errors->first('conc_ocupa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',
                            'placeholder' => 'Aquí se registran de forma sucinta los resultados obtenidos en cada uno de los componentes o áreas evaluadas, se emiten conceptos sobre el nivel de desempeño por componentes y general; se hacen las observaciones sobre hallazgos más relevantes o determinantes para el desempeño y se hacen las sugerencias de intervención a nivel intra e interinstitucional. Se deben señalar las áreas de interés como resultado del cuestionario de intereses y habilidades',
                            'required',
                            'maxlength' => '4000',
                            'rows'=>'7','spellcheck'=>'true',
                            ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
        <p id="contador_conc_ocupa">0/4000</p>
        @if($errors->has('conc_ocupa'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('conc_ocupa') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('fortalecer', 'ÁREAS A FORTALECER:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('fortalecer',$todoxxxx['areas_for'], null, ['name' => 'fortalecer[]', 'class' => 'form-control form-control-sm select2','required', 'multiple',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
        @if($errors->has('fortalecer'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fortalecer') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('prm_remitir', 'Remitir:', ['class' => 'control-label text-uppercase']) !!}
        {!! Form::select('prm_remitir',$todoxxxx['si_no'], null, ['name' => 'prm_remitir','required','class' => 'form-control form-control-sm',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
        @if($errors->has('prm_remitir'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_remitir') }}
        </div>
        @endif
    </div>
    <div class="d-none form-group col-md-12 " id="prm_intrainstitucional_field">
        {!! Form::label('intrainstitucional', 'Intrainstitucional:', ['class' => 'control-label text-uppercase ']) !!}
        {!! Form::select('intrainstitucional',$todoxxxx['tema_intra'], null, ['name' => 'intrainstitucional[]', 'class' => 'form-control form-control-sm select2','required','multiple',($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) !!}
        @if($errors->has('intrainstitucional'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('intrainstitucional') }}
        </div>
        @endif
    </div>

    <div id="prm_interinstitu_field" class="d-none form-group col-md-12">
        <div class="col-md-12">
            {{ Form::label('interinstitu', 'Interinstitucional:', ['class' => 'control-label text-uppercase col-form-label-sm']) }}
            {{ Form::textarea('interinstitu', null, ['class' => $errors->first('interinstitu') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
                                'placeholder' => 'Interinstitucional', 
                                'maxlength' => '120',
                                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;',
                                'rows'=>'3','spellcheck'=>'true',
                                ($todoxxxx["accionxx"] == "verxxxxx" ? 'disabled':'' )]) }}
            <p id="contador_obs_interinstitu">0/120</p>
            @if($errors->has('interinstitu'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('interinstitu') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
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


