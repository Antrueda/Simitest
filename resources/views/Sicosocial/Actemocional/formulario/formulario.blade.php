<div class="row">
	<div class="col-md-3">
		{{ Form::label('prm_activa_id', '13.1 Activación fisiológica. ¿Existe alguna situación, lugar, objeto, persona o actividad en particular que le genere malestar intenso caracterizado por activación fisiológica?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_activa_id', $todoxxxx['sinoxxxx'], null,
            ['class' => $errors->first('prm_activa_id') ? 'form-control form-control-sm is-invalid' :
                'form-control form-control-sm', 'onchange' => 'doc(this.value)',
                'autofocus']) }}
		@if($errors->has('prm_activa_id'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('prm_activa_id') }}
			</div>
		@endif
	</div>
	<div class="col-md-3">
		{{ Form::label('fisiologicas', '13.2 ¿Qué activaciones fisiológicas le genera?', ['class' => 'control-label col-form-label-sm']) }}
		<div id="fisiologicas_div">
		{{ Form::select('fisiologicas[]', $todoxxxx['motivosx'], null, ['class' => $errors->first('fisiologicas') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'fisiologicas', 'multiple']) }}
		</div>
		@if($errors->has('fisiologicas'))
			<div class="invalid-feedback d-block">
			    {{ $errors->first('fisiologicas') }}
			</div>
		@endif
	</div>
	<div class="col-md-6">
		{{ Form::label('descripcion', '13.3 Descripción:', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('descripcion'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('descripcion') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		{{ Form::label('conductual', '13.4 Activación conductual, ¿Qué conductas realiza cuando siente malestar intenso al estar en dicha situación, lugar, objeto, persona o actividad?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('conductual', null, ['class' => $errors->first('conductual') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Activación conductual', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('conductual'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('conductual') }}
	      	</div>
	    @endif
	</div>
	<div class="col-md-6">
		{{ Form::label('cognitiva', '13.5 Activación cognitiva. ¿Qué pensamientos le genera dicha situación, lugar, objeto, persona o actividad?', ['class' => 'control-label col-form-label-sm']) }}
		{{ Form::textarea('cognitiva', null, ['class' => $errors->first('cognitiva') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Activación cognitiva', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
		@if($errors->has('cognitiva'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('cognitiva') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">

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
