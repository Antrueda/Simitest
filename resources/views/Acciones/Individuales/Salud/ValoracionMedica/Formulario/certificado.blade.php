

  <div class="row mt-3">
    <div class="col-md-12">
      <h5>Certificado</h5>
      <hr>
    </div>
  </div>
  <div class="row"> 

  <div class="col-md-12">
    {{ Form::label('recomenda', 'Recomendación', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('recomenda', null, ['class' => $errors->first('recomenda') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'recomenda', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        <p id="contadorrecomenda">0/4000</p>
        @if($errors->has('recomenda'))
      <div class="invalid-feedback d-block">
            {{ $errors->first('recomenda') }}
          </div>
      @endif
    </div>
</div>



<hr>


<br>
<hr>

