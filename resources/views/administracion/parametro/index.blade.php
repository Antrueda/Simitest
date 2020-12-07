@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>PARÁMETROS</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.parametro.datos')
@else
	@include('administracion.parametro.formulario')
@endif
@endsection