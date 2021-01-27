<div class="form-group row">
<div class="col-md-4">
    {{ Form::label('titulo', 'Título:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('titulo', null, ['class' => $errors->first('titulo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Título', 'maxlength' => '120', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('titulo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('titulo') }}
          </div>
    @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('descripcion', 'Descripción', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toCase();", 'style' => 'text-transform:uppercase;']) }}
        <p id="contadordescripcion">0/4000</p>
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id','Estado') }}
        {{ Form::select('sis_esta_id',$todoxxxx['estadoxx'], null,['class'=> $errors->first('sis_esta_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
      </div>
      
      <div class="form-group col-md-6">
        {{ Form::label('estusuario_id','Justificación Estado') }}
        {{ Form::select('estusuario_id',$todoxxxx['motivoxx'], null,['class'=> $errors->first('estusuario_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('estusuario_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuario_id') }}
        </div>
        @endif
      </div>

</div>
<div class="form-group row">
     @include('layouts.registro')
  </div>
