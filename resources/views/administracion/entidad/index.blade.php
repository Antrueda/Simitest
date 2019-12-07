@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>Entidades</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.entidad.datos')
@else
	@include('administracion.entidad.formulario')
@endif
@endsection