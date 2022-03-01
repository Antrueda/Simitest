<hr style="border:3px;">

<div class="row mt-3">
  <div class="col-md-12">
    <h5>-</h5>
  </div>
</div>
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
   <div class="col-md-4">
    {{ Form::label('cursos_id', 'Curso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('cursos_id', $todoxxxx['cursosxx'],null, ['class' => $errors->first('cursos_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('cursos_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('cursos_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-1">
    {{ Form::label('unidades', 'Curso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('unidades', null, ['class' => $errors->first('unidades') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
        @if($errors->has('unidades'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('unidades') }}
          </div>
       @endif
  </div>

</div>
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>UNIDADES DE APRENDIZAJE</h5>
  </div>
</div>
<hr style="border:3px;">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<hr>
<hr style="border:3px;">


<div class="row">
  <div class="col-md">
    {{ Form::label('user_id', 'Funcionario(A)/Contratista quien entrega al NNA', ['class' => 'control-label col-form-label-sm']) }}
    <span> (psicosocial, tutor de vivienda, tutor de convivencia, enfermero y/o facilitador).</span>
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
