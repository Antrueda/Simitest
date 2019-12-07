<div class="form-group row{{ $errors->first('nombre') ? ' is-invalid' : '' }}">
	{{ Form::label('nombre', 'Nombre:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('nombre', $dato->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'nombre de la actividad', 'maxlength' => '120', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('nombre'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('nombre') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('sis_documento_fuente_id') ? ' is-invalid' : '' }}">
	{{ Form::label('sis_documento_fuente_id', 'Documento fuente:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('sis_documento_fuente_id', $dato->sisDocumentoFuente->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::select('sis_documento_fuente_id', $docsFuente, null, ['class' => 'form-control']) }}
		@endif
	</div>
	@if($errors->has('sis_documento_fuente_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('sis_documento_fuente_id') }}
      	</div>
    @endif
</div>
<div class="row">
	@if($accion == 'Nuevo')
		@can('permiso-crear')
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcan
	@endif
	@if($accion == 'Editar')
		@can('permiso-editar')
			{{ Form::submit('Modificar', ['class' => 'btn btn-primary']) }}
		@endcan
	@endif
	@if($accion == 'Ver')
		@can('permiso-borrar')
			{!! Form::open(['route' => ['actividad.ver', $dato->id], 'method' => 'DELETE']) !!}
            	@if($dato->activo == 1)
            		<button class="btn btn-danger">Inactivar</button>
            	@else
            		<button class="btn btn-success">Activar</button>
            	@endif
        	{!! Form::close() !!}
		@endcan
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('actividad') }}">Regresar</a>
</div>