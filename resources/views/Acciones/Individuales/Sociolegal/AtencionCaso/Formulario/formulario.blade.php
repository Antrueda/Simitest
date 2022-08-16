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
  <div class="col-md-3">
    {{ Form::label('num_sim', 'Numero SIM', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('num_sim',  null, ['class' => $errors->first('num_sim') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('num_sim'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('num_sim') }}
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

  

</div>

<hr>
<br>
<center>
{{ Form::label('cuestio', '2.COMPETENCIAS OCUPACIONALES', ['class' => 'control-label col-form-label-sm']) }}
</center>
<hr>
<br>
<div class="row">
  <input type="checkbox" id="checkbox1" checked/>  Editar Residencia  
  <div id="autoUpdate" class="autoUpdate">
    <div class="card">
      <div class="card-body">
      @include($todoxxxx['rutacarp'].'AtencionCaso.Formulario.residencia')
    </div>
  </div>
</div>
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





</div>


<div class="row">

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
    {{ Form::label('area_id', 'Area:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('area_id', $todoxxxx['intraxxx'],null, ['class' => $errors->first('area_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id'=>'area_id']) }}
    @if($errors->has('area_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('area_id') }}
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
