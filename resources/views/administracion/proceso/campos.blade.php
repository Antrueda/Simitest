<div class="form-group row{{ $errors->first('nombre') ? ' is-invalid' : '' }}">
	{{ Form::label('nombre', 'Nombre:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('nombre', $dato->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'nombre del proceso', 'maxlength' => '120', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('nombre'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('nombre') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('sis_proceso_id') ? ' is-invalid' : '' }}">
	{{ Form::label('sis_proceso_id', 'Proceso:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			@if($dato->sisProceso)
				{{ Form::text('sis_proceso_id', $dato->sisProceso->nombre, ['class' => 'form-control-plaintext']) }}
			@endif
		@else
			{{ Form::select('sis_proceso_id', $SisProceso, null, ['class' => 'form-control', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('sis_proceso_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('sis_proceso_id') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('sis_mapa_proc_id') ? ' is-invalid' : '' }}">
	{{ Form::label('sis_mapa_proc_id', 'Mapa de proceso:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('sis_mapa_proc_id', $dato->sisMapaProc->sisEntidad->nombre.' - '.$dato->sisMapaProc->version, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::select('sis_mapa_proc_id', $SisEntidad, null, ['class' => 'form-control', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('sis_mapa_proc_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('sis_mapa_proc_id') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('prm_proceso_id') ? ' is-invalid' : '' }}">
	{{ Form::label('prm_proceso_id', 'Tipo de proceso:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('prm_proceso_id', $dato->tipoProceso->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::select('prm_proceso_id', $PrmProceso, null, ['class' => 'form-control', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('prm_proceso_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('prm_proceso_id') }}
      	</div>
    @endif
</div>
<div class="row">
	@if($accion == 'Nuevo')
		@can('proceso-crear')
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcan
	@endif
	@if($accion == 'Editar')
		@can('proceso-editar')
			{{ Form::submit('Modificar', ['class' => 'btn btn-primary']) }}
		@endcan
	@endif
	@if($accion == 'Ver')
		@can('proceso-borrar')
			{!! Form::open(['route' => ['proceso.ver', $dato->id], 'method' => 'DELETE']) !!}
            	@if($dato->sis_esta_id == 1)
            		<button class="btn btn-danger">Inactivar</button>
            	@else
            		<button class="btn btn-success">Activar</button>
            	@endif
        	{!! Form::close() !!}
		@endcan
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('proceso') }}">Regresar</a>
</div>