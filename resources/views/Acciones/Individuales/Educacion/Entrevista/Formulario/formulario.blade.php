<hr style="border:3px;">
<div class="row">
  
  <div class="col-md-4">
    {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('upi_id', 'Upi', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'], null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('upi_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('upi_id') }}
    </div>
    @endif
  </div>

  @if($todoxxxx['usuariox']->sis_nnaj->iMatriculaNnajs->count()>0)   
  <div class="col-md-2">
    {{ Form::label('grado', 'Grado de escolaridad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('grado', $todoxxxx['usuariox']->sis_nnaj->Matricula, ['class' => $errors->first('grado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);",'readonly']) }}
        @if($errors->has('grado'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('grado') }}
          </div>
       @endif
  </div>
  <div class="col-md-2">
    {{ Form::label('upimatricula', 'Upi Matricula Academia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('upimatricula', $todoxxxx['matricul']->iMatricula->upi->nombre, ['class' => $errors->first('upimatricula') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event); ",'readonly']) }}
        @if($errors->has('upimatricula'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upimatricula') }}
          </div>
       @endif
   </div>
  @endif
  @if($todoxxxx['usuariox']->sis_nnaj->fi_formacions != null)   
     <div class="col-md-2">
    {{ Form::label('cursado', 'Último grado cursado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('cursado', $todoxxxx['usuariox']->sis_nnaj->fi_formacions->prm_ultgrapr->nombre, ['class' => $errors->first('cursado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event); ",'readonly']) }}
        @if($errors->has('cursado'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('cursado') }}
          </div>
       @endif
  </div>
  @endif
  
  @if($todoxxxx['usuariox']->sis_nnaj->MatriculaCursos->count()>0)   
  <div class="col-md-2">
 {{ Form::label('taller', 'Taller', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::text('taller', $todoxxxx['matrtall']->curso->s_cursos, ['class' => $errors->first('taller') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event); ",'readonly']) }}
     @if($errors->has('taller'))
       <div class="invalid-feedback d-block">
         {{ $errors->first('taller') }}
       </div>
    @endif
</div>
<div class="col-md-2">
  {{ Form::label('taller', 'UPI Taller', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::text('taller', $todoxxxx['matrtall']->upi->nombre, ['class' => $errors->first('taller') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event); ",'readonly']) }}
      @if($errors->has('taller'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('taller') }}
        </div>
     @endif
 </div>
@endif

</div>

<hr>
<br>
<center>
{{ Form::label('cuestio', '2.COMPETENCIAS OCUPACIONALES', ['class' => 'control-label col-form-label-sm']) }}
</center>
<hr>
<br>
<div class="row">

  <div class="col-md-12">
    {{ Form::label('anteclinicos', '2.1 Antecedentes Clínicos', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('anteclinicos', null, ['class' => $errors->first('anteclinicos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'anteclinicos', 
    'placeholder' => 'Realice una breve descripción de antecedentes clínicos de importancia, cirugías, toma de medicamentos, enfermedades', 
    'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'cols'=>'30','rows'=>'4','style' => 'text-transform:uppercase;']) }}
    <p id="contadoranteclinicos">0/4000</p>
    @if($errors->has('anteclinicos'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('anteclinicos') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_consumo', '2.2 Dinámicas de consumo de sustancias psicoactivas ', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_consumo', $todoxxxx['estadoxx'], null, ['class' => $errors->first('prm_consumo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_consumo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_consumo') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('observacion', '2.3 Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'observacion', 
    'placeholder' => 'Colocar el o los tipos de sustancias psicoactivas que ha consumido y/o está consumiendo el joven; así como su frecuencia y tiempo de uso','cols'=>'30','rows'=>'4', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorobservacion">0/4000</p>
    @if($errors->has('observacion'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('observacion') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_autocui', '2.4 Autocuidado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_autocui', $todoxxxx['dinamica'],null, ['class' => $errors->first('prm_autocui') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_autocui'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_autocui') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_habitos', '2.5 Hábitos y rutinas', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_habitos', $todoxxxx['dinamica'],null, ['class' => $errors->first('prm_habitos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_habitos'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_habitos') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_instrum', '2.6 Actividades instrumentales', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_instrum', $todoxxxx['dinamica'],null, ['class' => $errors->first('prm_instrum') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_instrum'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_instrum') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_patrone', '2.7 Patrones de sueño', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_patrone', $todoxxxx['dinamica'],null, ['class' => $errors->first('prm_patrone') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('prm_patrone'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_patrone') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('observacio2', '2.8 Observaciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observacio2', null, ['class' => $errors->first('observacio2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'observacio2', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'En el cuadro de observaciones se debe registrar si el J logra llevar a cabo todas las actividades de autocuidado, hábitos y rutinas, actividades instrumentales y patrones del sueño; anotar aquellas actividades que aún no logra ejecutar y/o las que se le dificulta y el porqué. En las actividades instrumentales es importante indagar sobre manejo del dinero, organización de hábitos y rutinas, uso de transporte público etc. y en patrones del sueño si hace uso de algún medicamento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorobservacio2">0/4000</p>
    @if($errors->has('observacio2'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('observacio2') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('anteocupaci', '2.9 Antecedentes Ocupacionales (Escolaridad/Trabajo): ', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('anteocupaci', null, ['class' => $errors->first('anteocupaci') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'anteocupaci', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'Registrar el último grado aprobado, si ha perdido cursos, si actualmente está escolarizado y en qué grado, preguntar motivo de retiro escolar si aplica. Registrar edad de inicio de actividad laboral informal y/o formal, si ya cuenta con ella, actividades realizadas, funciones, duración en el empleo, motivo de retiro, anotar desde la experiencia laboral más antigua hasta la más reciente. Indagar sobre cual trabajo ha sido de su agrado o disfrute', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadoranteocupaci">0/4000</p>
    @if($errors->has('anteocupaci'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('anteocupaci') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('anteotiempo', '2.10 Antecedentes Tiempo Libre (Motivación):', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('anteotiempo', null, ['class' => $errors->first('anteotiempo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'anteotiempo', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'Registrar todas aquellas actividades que el joven realiza en su día a día, que actividades le interesan y/o que actividades lo motivan y /o desea aprender', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadoranteotiempo">0/4000</p>
    @if($errors->has('anteotiempo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('anteotiempo') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('prospeccion', '2.11 Prospección (Proyecto de Vida):', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('prospeccion', null, ['class' => $errors->first('prospeccion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'prospeccion', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'Registrar las metas que refiere el AJ, dando la siguiente indicación: Metas a Corto plazo (las que pueden llevar a cabo en menos de un año), Metas a mediano plazo (las que pueden llevar a cabo entre un año y 5 años) y Metas a Largo Plazo (las que pueden llevar a cabo a partir de 5 años en adelante). Indagar sobre como lo puede llevar a cabo y que necesitaría para lograrlo en ese tiempo', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorprospeccion">0/4000</p>
    @if($errors->has('prospeccion'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prospeccion') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('obsefamilia', '2.12 Familia:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('obsefamilia', null, ['class' => $errors->first('obsefamilia') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'obsefamilia', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'Registrar cómo está conformado el núcleo familiar del joven, es importante registrar el tipo de relación que manejan con cada uno de sus integrantes (buena, mala, regular) y por qué. Si ya no tiene contacto con ellos indagar el motivo; así mismo la edad en la que salió de su hogar. y en general a aquellos datos relevantes que permitan identificar si la red familiar es o no una red significativa de apoyo.', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorobsefamilia">0/4000</p>
    @if($errors->has('obsefamilia'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('obsefamilia') }}
    </div>
    @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('osexualidad', '2.13 Sexualidad Y relaciones de pareja', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('osexualidad', null, ['class' => $errors->first('osexualidad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'osexualidad', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'Registrar aquellos aspectos relevantes, que puedan indicar algún tipo de alerta y/o disfuncionalidad', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorosexualidad">0/4000</p>
    @if($errors->has('osexualidad'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('osexualidad') }}
    </div>
    @endif
  </div>
</div>
<hr>
<br>
<center>
{{ Form::label('cuestio', '3.RESULTADOS CUESTIONARIO  IDENTIFICACIÓN HABILIDADES, COMPETENCIAS E INTERESES OCUPACIONALES', ['class' => 'control-label col-form-label-sm']) }}
</center>
<hr>
<br>
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
<hr>
<br>
{{ Form::label('Concepto', 'Concepto Perfil Vocacional', ['class' => 'control-label col-form-label-sm']) }}
@if($todoxxxx['perfilxz']!=null)
<div class="row">
  <div class="col-md">
    {{ Form::textarea('perfil', $todoxxxx['perfilxz']->concepto, ['class' => $errors->first('perfil') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','cols'=>'30','rows'=>'5', 'readonly','style' => 'text-transform:uppercase;']) }}
    @if($errors->has('perfil'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('perfil') }}
      </div>
    @endif
  </div>
</div>
@endif
<hr>
<br>

<div class="row">
  <div class="col-md-12">
    {{ Form::label('conceptoocu', '4. Concepto Ocupacional', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('conceptoocu', null, ['class' => $errors->first('conceptoocu') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'conceptoocu', 'cols'=>'30','rows'=>'4',
    'placeholder' => 'Aquí se registran de forma sucinta los resultados obtenidos en cada uno de los componentes o áreas evaluadas, se emiten conceptos sobre el nivel de desempeño por componentes y general; se hacen las observaciones sobre hallazgos más relevantes o determinantes para el desempeño y se hacen las sugerencias de intervención a nivel intra e interinstitucional. Se deben señalar las áreas de interés como resultado del cuestionario de intereses y habilidades', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorconceptoocu">0/4000</p>
    @if($errors->has('conceptoocu'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('conceptoocu') }}
    </div>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    {{ Form::label('areas', '5. Áreas A Fortalecer', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('areas[]', $todoxxxx['mejoraxx'], null, ['class' => $errors->first('areas') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'id' => 'areas', 'multiple']) }}
    @if($errors->has('areas'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('areas') }}
    </div>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_remite', '6. Remitir a:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_remite', $todoxxxx['atencion'],null, ['class' => $errors->first('prm_remite') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'prm_remite','onchange' => 'doc(this.value)']) }}
    @if($errors->has('prm_remite'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_remite') }}
    </div>
    @endif
  </div>

  <div class="col-md-3">
    {{ Form::label('intra', 'Area:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('intra[]', $todoxxxx['intraxxx'], null, ['class' => $errors->first('intra') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'id' => 'intra', 'multiple']) }}
    @if($errors->has('intra'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('intra') }}
    </div>
    @endif
  </div>

  <div class="col-md-3">
    {{ Form::label('intertext', 'Interinstitucional:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('intertext', null, ['class' => $errors->first('intertext') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'intertext',  'maxlength' => '200', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('intertext'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('intertext') }}
    </div>
    @endif
  </div>
</div>
<br>
<hr>


<div class="row">
  <div class="col-md">
    {{ Form::label('user_id', 'Funcionario y/o Contratista quien diligencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_id') }}
      </div>
    @endif
  </div>
</div>
<br>
<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>
