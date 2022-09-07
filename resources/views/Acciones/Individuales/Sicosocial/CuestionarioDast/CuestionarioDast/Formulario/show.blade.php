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
            <strong>TAMIZAJE INICIAL</strong>
        </h3>
    </div><br>
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm ','disabled']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('sis_depen_id', 'UPI/AREA/CONTEXTO:', ['class' => 'control-label text-uppercase']) !!}
            {!! Form::select('sis_depen_id',$todoxxxx['sis_depens'], null, ['name' => 'sis_depen_id', 'class' => 'form-control form-control-sm select2','disabled']) !!}
        </div>
    </div>
    <div class="p-2">
        <div>
            <center><strong><p class="col-form-label-sm">CUESTIONARIO</p></strong></center>
        </div>
        <div>
            <strong><p class="col-form-label-sm">ESTAS PREGUNTAS FUERON REFERIDAS DURANTE LA APLICACION DEL CUESTIONARIO</p></strong>
        </div>
        <div>
            @foreach ($todoxxxx['actual_respuestas']['respuestas_privot'] as $pregunta)
                <div class="form-row preguntas">
                    <div class="form-group col-md-9 mb-0">
                        {!! Form::label('pregunta',$pregunta['pregunta'], ['class' => 'font-weight-normal']) !!}
                    </div>
                    <div class="forn-group col-md-2 mb-0">
                        {!! Form::select('pregunta', [''=>'SELECCIONE',1=>'SI',0=>'NO'],$pregunta['pivot']['respuesta'], 
                        [
                        'class' => 'form-control',
                        'disabled'
                        ]) !!}
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    <div class="p-2">
        <div>
            <center><strong><p class="col-form-label-sm">RESULTADOS (interpretación)</p></strong></center>
        </div>
        <div class="alert alert-warning" role="alert">
            Se otorga un puntaje de 1(uno) cuando la respuesta es SI (excepto por la pregunta 3, en la que se la da un puntaje de 1 a la respuesta "NO) y un puntaje de 0 (cero) cuando la respuesta es "NO".
        </div>
        <div>
            <p><strong>PUNTAJE :{{$todoxxxx['actual_respuestas']['resultado']['resultado']}}</strong></p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Puntaje</th>
                    <th scope="col">Grado de problema (por consumo de drogas)</th>
                    <th scope="col">Acción</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$todoxxxx['actual_respuestas']['resultado']['valores']}}</td>
                    <td>{{$todoxxxx['actual_respuestas']['resultado']['grado_problema']}}</td>
                    <td>{{$todoxxxx['actual_respuestas']['resultado']['accion']}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><br>
    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('prm_requiere_vespa', 'Requiere aplicación del VESPA:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_requiere_vespa',$todoxxxx['si_no'], null, ['disabled','class' => 'form-control form-control-sm']) !!}
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('fecha_vespa', 'Fecha de aplicación del VESPA:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha_vespa', null, ['class' => 'form-control form-control-sm ','disabled']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
        </div>
        <div class="col-md-12">
            {{ Form::label('accion_desarrolla', 'Tipo de acción a desarrollar:', ['class' => 'control-label']) }}
            {{ Form::textarea('accion_desarrolla', null, ['class' => 'form-control form-control-sm', 'disabled', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_patron_con', 'Patrón de consumo:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_patron_con',$todoxxxx['list_patron_consumo'], null, ['disabled','class' => 'form-control form-control-sm']) !!}
        </div>
        <div class="col-md-12">
            {{ Form::label('obs_patron_con', 'Patrón de consumo:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('obs_patron_con', null, ['class' => 'form-control form-control-sm', 'disabled','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
        </div>
        <div class="col-md-12">
            {{ Form::label('accion_curso', 'Acción a realizar por curso de vida (De acuerdo con la resolución 089 de 2019):', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('accion_curso', null, ['class' => 'form-control form-control-sm', 'disabled', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
        </div>
        <div class="col-md-12">
            {{ Form::label('observacion', 'OBSERVACIONES:', ['class' => 'control-label col-form-label-sm']) }}
            {{ Form::textarea('observacion', null, ['class' =>'form-control form-control-sm', 'disabled', 'maxlength' => '4000','onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','rows'=>'5','spellcheck'=>'true']) }}
        </div>
        <div class="form-group col-md-12">
            {!! Form::label('prm_diligencia', 'Diligenciamiento del Cuestionario DAST-10 en:', ['class' => 'control-label']) !!}
            {!! Form::select('prm_diligencia',$todoxxxx['list_diligenciamiento'], null, ['disabled','class' => 'form-control form-control-sm']) !!}
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
            {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','disabled']) !!}
        </div>
    </div><br>
    <div class="form-row">
        @include('layouts.registro')
    </div>
    {{-- informacion de resultados tabla y grafica --}}
</div>



