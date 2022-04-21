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
    <div class="card">
        <div class="card-header">
            <strong>Matrícula academia</strong>
        </div>
        <div class="card-body">
            @if ($todoxxxx['matricula_academica'])
                <p class="card-text">
                    <span class="form-control"><strong>Numero Matrícula: </strong>{{$todoxxxx['matricula_academica']->numeromatricula}} </span>
                    <span class="form-control"><strong>Grado: </strong>{{$todoxxxx['matricula_academica']->s_grado}}</span>
                    <span class="form-control"><strong>Grupo: </strong>{{$todoxxxx['matricula_academica']->s_grupo}} </span>
                    <span class="form-control"><strong>Período: </strong>{{$todoxxxx['matricula_academica']->periodo}} </span>
                    <span class="form-control"><strong>Estrategia: </strong>{{$todoxxxx['matricula_academica']->estrategia}} </span>
                </p>
            @else
                <center><p class="card-text">NNAJ no tiene Matrícula academia</p></center>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <strong>Matrícula Talleres </strong>
        </div>
        <div class="card-body">
            @if ($todoxxxx['matricula_talleres'])
                <p class="card-text">
                    <span class="form-control"><strong>Tipo de curso: </strong>{{$todoxxxx['matricula_talleres']->tipocurso}}</span>
                    <span class="form-control"><strong>Curso: </strong>{{$todoxxxx['matricula_talleres']->s_cursos}} </span>
                    <span class="form-control"><strong>Grupo: </strong>{{$todoxxxx['matricula_talleres']->s_grupo}} </span>
                </p>
            @else
                <center><p class="card-text">NNAJ no tiene Matrícula tallares</p></center>
            @endif
        </div>
    </div>
    {{-- {{dd($todoxxxx['matricula_academica'])}} --}}
    <div class="form-row col-md-12">
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            {!! Form::date('fecha',isset($todoxxxx['modeloxx']->fecha) ? $todoxxxx['modeloxx']->fecha : null, ['class' => 'form-control form-control-sm','required']) !!}
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
        @if (old('actividades'))
            hola
        @endif
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
                            {{ (is_array(old('actividades',$todoxxxx['modeloxx']->actividades)) && in_array($actividad->id, old('actividades',$todoxxxx['modeloxx']->actividades))) ? ' checked' : '' }}
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

    <!-- PIE CHART -->
    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Pie Chart</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        <!-- /.card-body -->
      </div>
</div>


