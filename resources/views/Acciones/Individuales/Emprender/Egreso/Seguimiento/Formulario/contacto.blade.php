<hr style="border:3px;">
{{-- <button type="button" class="btn btn-primary" id="add_btn">DIAGNOSTICOS <i class="fas fa-plus"></i></button> --}}

<div class="row" id="test">
  
    <div class="col-sm-3">
      {{ Form::label('fechareg', 'Fecha de llamada', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::date('fechareg', null, ['class' => $errors->first('fechareg') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder'=>'Seleccione','max' => $todoxxxx['hoyxxxxx']]) }}
      @if($errors->has('fechareg'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('fechareg') }}
      </div>
      @endif
    </div>
    <div class="col-sm-3">
      {{ Form::label('tipollama_id', 'Tipo de Llamada', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('tipollama_id', $todoxxxx['condicio'],null, ['class' => $errors->first('tipollama_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'tipollama_id',]) }}
          @if($errors->has('tipollama_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('tipollama_id') }}
            </div>
         @endif
    </div>
    <div class="col-sm-12">
      {{ Form::label('obserllamad', 'Observaciones', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::textarea('obserllamad', null, ['class' => $errors->first('obserllamad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','cols'=>'30','rows'=>'4',]) }}
      <span id="telef"></span>
          @if($errors->has('obserllamad'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('obserllamad') }}
            </div>
         @endif
    </div>
     <div class="col-sm-3">
      {{ Form::label('motivollama_id', 'Motivo por el cual no fue efectiva ', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('motivollama_id', $todoxxxx['motivoll'],null, ['class' => $errors->first('motivollama_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',]) }}
          @if($errors->has('motivollama_id'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('motivollama_id') }}
            </div>
         @endif
    </div>


  </div>

  <br>
  <div>
    <button type="button" class="btn btn-primary" id="agregar" type="submit">AGREGAR LLAMADA</button>
  </div>




