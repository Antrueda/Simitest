<div class="row">
	<div class="col-md-12">
		{{ Form::label('descripcion', '8.1 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
    </div>
    <div class="col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>


<div class="form-group row">
    @include('layouts.registro')
</div>
