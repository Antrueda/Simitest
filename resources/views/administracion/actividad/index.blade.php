@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>ACTIVIDADES</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.actividad.datos')
@else
	@include('administracion.actividad.formulario')
@endif
@endsection