@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="form-row align-items-end">
    


    <div class="form-group col-md-6">
      {{ Form::label('prm_parentezco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_parentezco_id', $todoxxxx["parentez"], null, ['class' => 'form-control form-control-sm']) }}
      @if($errors->has('prm_parentezco_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('prm_parentezco_id') }}
      </div>
      @endif
  </div>
  <div class="form-group col-md-6">
      {{ Form::label('primer_apellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('primer_apellido', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('primer_apellido'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('primer_apellido') }}
      </div>
      @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('segundo_apellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_apellido', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_apellido'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('segundo_apellido') }}
    </div>
    @endif
</div>
<div class="form-group col-md-6">
    {{ Form::label('primer_nombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_nombre', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('primer_nombre'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('primer_nombre') }}
    </div>
    @endif
</div>
<div class="form-group col-md-6">
    {{ Form::label('segundo_nombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_nombre', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_nombre'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('segundo_nombre') }}
    </div>
    @endif
</div>
<div class="form-group col-md-6">
    {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('s_telefono', null, ['class' => 'form-control form-control-sm','maxlength' => '120',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('s_telefono'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('s_telefono') }}
    </div>
    @endif
</div>
<div class="form-group col-md-6">
    {{ Form::label('direccion_familiar', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('direccion_familiar', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('direccion_familiar'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('direccion_familiar') }}
    </div>
    @endif
</div>
</div>



