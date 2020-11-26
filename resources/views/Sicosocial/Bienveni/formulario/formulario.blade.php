<div class="row">
	<div class="col-md">
		{{ Form::label('motivos', '2.1 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::select('motivos[]', $todoxxxx['motivosx'], null, ['class' => $errors->first('motivos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione', 'id' => 'motivos', 'multiple', 'autofocus']) }}
		@if($errors->has('motivos'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('motivos') }}
			</div>
		@endif
	</div>
	<div class="col-md">
		{{ Form::label('descripcion', '2.2 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', "onkeyup" => "javascript:this.value=this.value.toUpperCase();", 'style' => 'text-transform:uppercase;']) }}
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
