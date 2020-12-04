<div class="form-row align-items-end">
    
  <div class="form-group col-md-6">
      {{ Form::label('prm_vestuario_id', 'Prenda', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_vestuario_id', $todoxxxx["prendaxx"], null, ['class' => 'form-control form-control-sm']) }}
      @if($errors->has('prm_vestuario_id'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('prm_vestuario_id') }}
      </div>
      @endif
  </div>
  <div class="form-group col-md-6">
      {{ Form::label('material', 'Material', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('material', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('material'))
      <div class="invalid-feedback d-block">
          {{ $errors->first('material') }}
      </div>
      @endif
  </div>
  <div class="form-group col-md-6">
    {{ Form::label('color', 'Color', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('color', null, ['class' => 'form-control form-control-sm','maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('color'))
    <div class="invalid-feedback d-block">
        {{ $errors->first('color') }}
    </div>
    @endif
</div>
</div>



