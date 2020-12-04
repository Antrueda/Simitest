<div class="row">
  <div class="col-md-12">
    {{ Form::label('conclusiones', 'Conclusiones:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('conclusiones', null, ['class' => $errors->first('conclusiones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Conclusiones de la visita social en domicilio', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    <p id="contadorconclusiones">0/4000</p>
    @if($errors->has('conclusiones'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('conclusiones') }}
      </div>
    @endif
  </div>
</div>

<h6 class="mt-3">13. Firmas</h6>
<hr>
<div class="row">
  <div class="col-md">
    {{ Form::label('persona_nombre', 'PERSONA QUE BRINDA LA INFORMACIÓN', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('persona_nombre', $todoxxxx['nombrexx'], ['class' => $errors->first('persona_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Persona que brinda la información', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;','readonly']) }}
    @if($errors->has('persona_nombre'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('persona_nombre') }}
      </div>
    @endif
  </div>
  <div class="col-md">
    {{ Form::label('persona_doc', 'Número de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('persona_doc', $todoxxxx['document'], ['class' => $errors->first('persona_doc') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de documento', 'min' => '0', 'maxlength' => '10','readonly']) }}
    @if($errors->has('persona_doc'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('persona_doc') }}
      </div>
    @endif
  </div>
  <div class="col-md">
    {{ Form::label('persona_parent_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('persona_parent_id', $todoxxxx["familiax"] , null, ['class' => $errors->first('persona_parent_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('persona_parent_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('persona_parent_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('user_doc1_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_doc1_id', $todoxxxx["usuarios"], null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
    @if($errors->has('user_doc1_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc1_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('user_doc2_id', 'FUNCIONARIO(A)/CONTRATISTA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_doc2_id', $todoxxxx["usuarioz"] , null, ['class' => $errors->first('user_doc2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm']) }}
    @if($errors->has('user_doc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc2_id') }}
      </div>
    @endif
  </div>
</div>

</div>
