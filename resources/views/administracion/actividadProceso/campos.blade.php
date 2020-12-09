<div class="form-group row{{ $errors->first('sis_actividad_id') ? ' is-invalid' : '' }}">
	{{ Form::label('sis_actividad_id', 'Actividad:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('sis_actividad_id', $dato->sisActividad->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::select('sis_actividad_id', $SisActividad, null, ['class' => 'form-control', 'autofocus']) }}
		@endif
	</div>
	@if($errors->has('sis_actividad_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('sis_actividad_id') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('sis_proceso_id') ? ' is-invalid' : '' }}">
	{{ Form::label('sis_proceso_id', 'Proceso:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('sis_proceso_id', $dato->sisProceso->nombre, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::select('sis_proceso_id', $SisProceso, null, ['class' => 'form-control']) }}
		@endif
	</div>
	@if($errors->has('sis_proceso_id'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('sis_proceso_id') }}
      	</div>
    @endif
</div>
<div class="form-group row{{ $errors->first('tiempo') ? ' is-invalid' : '' }}">
	{{ Form::label('tiempo', 'Tiempo:', ['class' => 'col-sm-2 col-form-label']) }}
	<div class="col-sm-10">
		@if($accion == 'Ver')
			{{ Form::text('tiempo', $dato->tiempo, ['class' => 'form-control-plaintext']) }}
		@else
			{{ Form::number('tiempo', null, ['class' => $errors->first('tiempo') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Tiempo de actualización', 'min' => '1']) }}
		@endif
	</div>
	@if($errors->has('tiempo'))
		<div class="invalid-feedback d-block">
        	{{ $errors->first('tiempo') }}
      	</div>
    @endif
</div>
<div class="row">
	@if($accion == 'Nuevo')
		@can('actividadProceso-crear')
			{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
		@endcan
	@endif
	@if($accion == 'Editar')
		@can('actividadProceso-editar')
			{{ Form::submit('Modificar', ['class' => 'btn btn-primary']) }}
		@endcan
	@endif
	@if($accion == 'Ver')
		@can('actividadProceso-borrar')
			{!! Form::open(['route' => ['actividadproceso.ver', $dato->id], 'method' => 'DELETE']) !!}
            	@if($dato->sis_esta_id == 1)
				<button class="btn btn-danger">INACTIVAR</button>
				@else
				  <button class="btn btn-success">ACTIVAR</button>
            	@endif
        	{!! Form::close() !!}
		@endcan
	@endif
    <a class="btn btn-primary ml-2" href="{{ route('actividadproceso') }}">REGRESAR</a>
</div>