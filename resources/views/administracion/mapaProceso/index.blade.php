@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>Mapa de procesos</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.mapaProceso.datos')
@else
	@include('administracion.mapaProceso.formulario')
@endif
@endsection