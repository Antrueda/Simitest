@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>Actividades procesos</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.actividadproceso.datos')
@else
	@include('administracion.actividadproceso.formulario')
@endif
@endsection