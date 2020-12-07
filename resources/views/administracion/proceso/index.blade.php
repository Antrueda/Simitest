@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>PROCESOS</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.proceso.datos')
@else
	@include('administracion.proceso.formulario')
@endif
@endsection