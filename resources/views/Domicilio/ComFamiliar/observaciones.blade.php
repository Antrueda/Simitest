<div class="row">
    <div class="col-md-12">
      {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba las observaciones', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      @if($errors->has('observaciones'))
        <div class="invalid-feedback d-block">
          {{ $errors->first('observaciones') }}
        </div>
      @endif
    </div>
  </div>
  <div class="row mt-3">
    @canany(['csdcomfamiliar-crear', 'csdcomfamiliar-editar'])
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
    @endcanany
    <a class="btn btn-primary ml-2" href="{{ route('csd.ver', $dato->id) }}">Regresar</a>
  </div>
</div>