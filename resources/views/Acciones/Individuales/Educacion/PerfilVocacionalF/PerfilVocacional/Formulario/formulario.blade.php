<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

input[type="checkbox"]:checked {
    box-shadow: 0 0 2px #0069d9, 0 0 10px #0069d9, 0 0 15px #0069d9;
}

input[type="checkbox"]:hover {
    box-shadow: 0 0 2px #A9A9A9, 0 0 10px #A9A9A9, 0 0 15px #A9A9A9;
}
.perfilvocacional .lista{
    height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}
</style>
<div class="card p-1 perfilvocacional">
    {{-- informacion previa de matricula academia y talleres --}}
    @include($todoxxxx['rutacarp'].''.'PerfilVocacional.Formulario.infomatriculasnnaj')

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
    </div>
    
    <div class="form-row border-bottom border-secondary bg-secondary text-white rounded-top">
        <div class="form-group col-md-1 mb-0 border-right">
            <p class=""><strong>No.</strong></p>
        </div>
        <div class="form-group col-md-9 mb-0 border-right">
            <p class=""><strong>Actividad</strong></p>
        </div>
        <div class="forn-group col-md-2 mb-0">
            <p class=""><strong>Me gusta</strong></p>
        </div>
    </div>
    <div class="lista">
        @foreach ($todoxxxx['actividades'] as $key => $actividad)
            <div class="form-row border-bottom border-secondary ">
                <div class="form-group col-md-1 mb-0 border-right">
                    <p class=""><center>{{$key+1}}</center></p>
                </div>
                <div class="form-group col-md-9 mb-0 border-right">
                    {!! Form::label('item'.($key+1),$actividad->nombre, ['class' => 'font-weight-normal']) !!}
                </div>
                <div class="forn-group col-md-2 mb-0">
                    <center>           
                        <input class="form-check-input check_actividades" type="checkbox" name="actividades[]" value="{{$actividad->id}}" id="item{{$key+1}}"
                            {{ (is_array(old('actividades',(isset($todoxxxx['modeloxx']->actividades)?$todoxxxx['modeloxx']->actividades:null))) && in_array($actividad->id, old('actividades',(isset($todoxxxx['modeloxx']->actividades)?$todoxxxx['modeloxx']->actividades:null)))) ? ' checked' : '' }}
                        />
                    </center>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card-footer text-muted p-1">
        <strong><span class="text-primary n-seleccionados"></span></strong> actividades seleccionadas de <strong>{{$todoxxxx['actividades']->count()}}</strong>
    </div>
    <div class="col-md-12">
        {{ Form::label('observaciones', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos relevantes durante la aplicación del cuestionario, así mismo indicar resultados de cursos técnicos afines o con mismo puntaje.', 'maxlength' => '4000','rows'=>'5','spellcheck'=>'true']) }}
        <p id="contador_observaciones">0/4000</p>
        @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('senias') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('concepto', 'CONCEPTO PERFIL VOCACIONAL:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('concepto', null, ['class' => $errors->first('concepto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escribir datos generales del adolescente y/o joven y los resultados del test de intereses, así como los cursos técnicos a los cuales presenta mayor aptitud e interés. Tenga en cuenta que los resultados corresponden al área con mayor puntuación.','required', 'maxlength' => '4000','rows'=>'5','spellcheck'=>'true']) }}
        <p id="contador_concepto">0/4000</p>
        @if($errors->has('concepto'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('senias') }}
        </div>
        @endif
    </div>
    <div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div>

    {{-- informacion de resultados tabla y grafica --}}
    @include($todoxxxx['rutacarp'].''.'PerfilVocacional.Formulario.infotablegrafica')
</div>


