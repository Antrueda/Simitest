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
        {{ Form::label('descripcion', 'Descripción?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toCase();", 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
    </div>


</div>
<div class="form-group row">
     @include('layouts.registro')
  </div>
