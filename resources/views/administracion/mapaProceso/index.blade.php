@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>MAPA DE PROCESOS</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.mapaProceso.datos')
@else
	@include('administracion.mapaProceso.formulario')
@endif
@endsection