@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="form-row align-items-end">
  <div class="form-group col-md-12">
      {{ Form::label('observaciones', '7.31 Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'observaciones de la visita social en domicilio', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}       
      </div>
    </div>
</div>
