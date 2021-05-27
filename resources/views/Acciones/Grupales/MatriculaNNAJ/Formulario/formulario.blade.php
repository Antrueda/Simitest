
  
@if(!isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif
<div style="display: none">
    {{ Form::label('sis_nnaj_id', '1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('sis_nnaj_id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        {{ Form::label('sis_nnaj_id', '1er. asfasfas', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}

</div>
  <div class="form-row align-items-end">
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
      <div class="form-group col-md-4">
        {{ Form::label('tipodocu', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('tipodocu', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-4">
      {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
      {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
     
</div>

<div class="form-row align-items-end">
    <div class="col-md-4">
        {{ Form::label('prm_grado', 'Grado A Matricular', ['class' => 'control-label col-form-label-sm']) }}
       {{ Form::select('prm_grado',  $todoxxxx['condixxx'], null, ['class' => $errors->first('prm_grado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
       @if($errors->has('prm_grado'))
           <div class="invalid-feedback d-block">
               {{ $errors->first('prm_grado') }}
           </div>
       @endif
      </div>
<div class="col-md-4">
  {{ Form::label('prm_grupo', 'Grupo', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('prm_grupo',  $todoxxxx['condixxx'], null, ['class' => $errors->first('prm_grupo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'prm_grupo']) }}
 @if($errors->has('prm_grupo'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('prm_grupo') }}
     </div>
 @endif
</div>


<div class="col-md-4">
  {{ Form::label('prm_estra', 'Estrategia', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('prm_estra', $todoxxxx['condixxx'], null, ['class' => $errors->first('prm_estra') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'prm_estra', 'multiple']) }}
 @if($errors->has('prm_estra'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('prm_estra') }}
     </div>
 @endif
</div>

<div class="col-md-4">
  {{ Form::label('prm_serv_id', 'Tipo De Servicio', ['class' => 'control-label col-form-label-sm']) }}
 {{ Form::select('prm_serv_id', $todoxxxx['condixxx'], null, ['class' => $errors->first('prm_serv_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',  'id' => 'prm_serv_id']) }}
 @if($errors->has('prm_serv_id'))
     <div class="invalid-feedback d-block">
         {{ $errors->first('prm_serv_id') }}
     </div>
 @endif
</div>

</div>
<br>
<hr>
<div class="row mt-3">
    <div class="col-md-12">
      <h5>VERIFICACIÓN DE DOCUMENTOS A ENTREGAR</h5>
    </div>
  </div>
  <div class="form-row align-items">
        <div class="form-group col-md-6">
            {{ Form::label('','Copia del documento') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_copdoc" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_copdoc == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_copdoc') ? ' is-invalid' : ''}}"
                    name="prm_copdoc" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_copdoc == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_copdoc'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_copdoc') }}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('','Certificados académicos') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_certif" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_certif == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_certif') ? ' is-invalid' : ''}}"
                    name="prm_certif" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_certif == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_certif'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_certif') }}
            </div>
            @endif
        </div>


        <div class="form-group col-md-6">
            {{ Form::label('','Certificados académicos') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_recupe" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_recupe == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_recupe') ? ' is-invalid' : ''}}"
                    name="prm_recupe" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_recupe == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_recupe'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_recupe') }}
            </div>
            @endif
        </div>


        <div class="form-group col-md-6">
            {{ Form::label('','Certificados académicos') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_matric" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_matric == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_matric') ? ' is-invalid' : ''}}"
                    name="prm_matric" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_matric == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_matric'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_matric') }}
            </div>
            @endif
        </div>
    </div>

<br>
<hr>
<div class="row">
  <div class="col-md-12">
  {{ Form::label('observacion', 'Observación', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('observacion', null, ['class' => $errors->first('observacion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '500', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorobservacion">0/500</p>
      @if($errors->has('observacion'))
    <div class="invalid-feedback d-block">
          {{ $errors->first('observacion') }}
        </div>
    @endif
  </div>
</div>





