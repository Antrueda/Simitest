<div class="form-group row{{ $errors->first('sis_entidad_id') ? ' is-invalid' : '' }}">
	{{ Form::label('sis_entidad_id', 'Entidad:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('sis_entidad_id', $dato->sisEntidad->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::select('sis_entidad_id', $SisEntidad, null, ['class' => 'form-control select2', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('sis_entidad_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('sis_entidad_id') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('version') ? ' is-invalid' : '' }}">
	{{ Form::label('version', 'Versión:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-2">
		@if($accion == 'Ver')
			{{ Form::text('version', $dato->version, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::number('version', null, ['class' => $errors->first('version') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Versión', 'min' => '0']) }}
		@endif
		@if($errors->has('version'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('version') }}
	      	</div>
	    @endif
	</div>
	{{ Form::label('vigencia', 'Vigencia:', ['class' => 'col-sm-1 col-form-label']) }}
	<div class="col-sm-3">
		@if($accion == 'Ver')
			{{ Form::text('vigencia', $dato->vigencia, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::date('vigencia', null, ['class' => $errors->first('vigencia') ? 'form-control is-invalid' : 'form-control']) }}
		@endif
		@if($errors->has('vigencia'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('vigencia') }}
	      	</div>
	    @endif
	</div>
	{{ Form::label('cierre', 'Cierre:', ['class' => 'col-sm-1 col-form-label']) }}
	<div class="col-sm-3">
		@if($accion == 'Ver')
			{{ Form::text('cierre', $dato->cierre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::date('cierre', null, ['class' => $errors->first('cierre') ? 'form-control is-invalid' : 'form-control']) }}
		@endif
		@if($errors->has('cierre'))
			<div class="invalid-feedback d-block">
	        	{{ $errors->first('cierre') }}
	      	</div>
	    @endif
	</div>
</div>
<div class="row">
	@if($accion == 'Nuevo')
		@can('permiso-crear')
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary', 'style '=> "text-transform:uppercase;"]) }}
		@endcan
	@endif
	@if($accion == 'Editar')
		@can('permiso-editar')
			{{ Form::submit('Modificar', ['class' => 'btn btn-primary', 'style '=> "text-transform:uppercase;"]) }}
		@endcan
	@endif
	@if($accion == 'Ver')
		@can('permiso-borrar')
			{!! Form::open(['route' => ['mapaProceso.ver', $dato->id], 'method' => 'DELETE']) !!}
            	@if($dato->sis_esta_id == 1)
				<button class="btn btn-danger">INACTIVAR</button>
				@else
				  <button class="btn btn-success">ACTIVAR</button>
            	@endif
        	{!! Form::close() !!}
		@endcan
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('mapaProceso') }}">REGRESAR</a>
</div>