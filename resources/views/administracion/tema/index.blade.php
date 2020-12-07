@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>TEMAS</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.tema.datos')
@else
	@include('administracion.tema.formulario')
@endif
@endsection