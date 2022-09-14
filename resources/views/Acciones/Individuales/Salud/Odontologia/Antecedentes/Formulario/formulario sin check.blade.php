<hr style="border:3px;">
<div class="row">
 <div class="col-md-3">
    {{ Form::label('trata_id', '¿Esta usted bajo tratamiento médico?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('trata_id', $todoxxxx['condicio'],null, ['class' => $errors->first('trata_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('trata_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('trata_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('upiorigen_id', '¿Alérgico a algún medicamento? ¿Cual?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upiorigen_id', $todoxxxx['condicio'],null, ['class' => $errors->first('upiorigen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('upiorigen_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upiorigen_id') }}
          </div>
       @endif
       {{ Form::text('cualtxt', null, ['class' => $errors->first('cualtxt') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
       @if($errors->has('cualtxt'))
       <div class="invalid-feedback d-block">
         {{ $errors->first('cualtxt') }}
       </div>
    @endif
  </div>
   <div class="col-md-3">
    {{ Form::label('sangra_id', '¿Sangra excesivamente al cortarse?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('sangra_id', $todoxxxx['condicio'],null, ['class' => $errors->first('sangra_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('sangra_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('sangra_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('anemia_id', 'Padece de anemia, leucemia. Hemofilia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('anemia_id', $todoxxxx['condicio'],null, ['class' => $errors->first('anemia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('anemia_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('anemia_id') }}
          </div>
       @endif
  </div>


  <div class="col-md-3">
    {{ Form::label('gestia_id', '¿Se encuentra en estado de gestación?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('gestia_id', $todoxxxx['condicio'],null, ['class' => $errors->first('gestia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('gestia_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('gestia_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('fuma_id', '¿Fuma?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('fuma_id', $todoxxxx['condicio'],null, ['class' => $errors->first('fuma_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fuma_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('fuma_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('cardio_id', '¿Tiene problemas Cardiacos?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('cardio_id', $todoxxxx['condicio'],null, ['class' => $errors->first('cardio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('cardio_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('cardio_id') }}
          </div>
       @endif
  </div>




  <div class="col-md-3">
    {{ Form::label('herpes_id', '¿Sufre de herpes o aftas recurrentes?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('herpes_id', $todoxxxx['condicio'],null, ['class' => $errors->first('herpes_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
     @if($errors->has('herpes_id'))
      <div class="invalid-feedback d-block">
            {{ $errors->first('herpes_id') }}
          </div>
      @endif
    </div>



  <div class="col-md-3">
    {{ Form::label('encia_id', 'Sangrado de encías', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('encia_id', $todoxxxx['condicio'],null, ['class' => $errors->first('encia_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc(this.value)','id'=>'encia_id']) }}
        @if($errors->has('encia_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('encia_id') }}
          </div>
       @endif
  </div>  


  <div class="col-md-3">
    {{ Form::label('muerde_id', '¿Se muerde uñas o labios?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('muerde_id', $todoxxxx['condicio'],null, ['class' => $errors->first('muerde_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('muerde_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('muerde_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('enfactu_id', 'Enfermerdad actual: cual?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('enfactu_id', $todoxxxx['condicio'],null, ['class' => $errors->first('enfactu_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('enfactu_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('enfactu_id') }}
          </div>
       @endif
  </div>






  <div class="col-md-3">
    {{ Form::label('hepati_id', 'Hepatitis', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('hepati_id', $todoxxxx['condicio'],null, ['class' => $errors->first('hepati_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc3(this.value)']) }}
        @if($errors->has('hepati_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hepati_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('tens_id', 'Tensión arterial alta', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('tens_id', $todoxxxx['condicio'],null, ['class' => $errors->first('tens_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('tens_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('tens_id') }}
          </div>
       @endif
  </div>

 
  <div class="col-md-3">
    {{ Form::label('vih_id', 'VIH', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('vih_id', $todoxxxx['condicio'],null, ['class' => $errors->first('vih_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','onchange' => 'doc2(this.value)']) }}
        @if($errors->has('vih_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('vih_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('fieb_id', 'Fiebre reumatica', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('fieb_id', $todoxxxx['condicio'],null, ['class' => $errors->first('fieb_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'id' => 'fieb_id', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        
        @if($errors->has('fieb_id'))
      <div class="invalid-feedback d-block">
            {{ $errors->first('fieb_id') }}
          </div>
      @endif
    </div>
</div>



<hr>


<div class="row">
  <div class="col-md">
    {{ Form::label('user_id', 'Funcionario y/o Contratista quien diligencia', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('user_id', $todoxxxx['condicio'], null, ['class' => $errors->first('user_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
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
