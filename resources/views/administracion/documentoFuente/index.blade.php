@extends('layouts.index')

@section('content')
<div class="content-header">
	<h1>DOCUMENTOS FUENTES</h1>
	<hr>
</div>
@if(!isset($accion))
  	@include('administracion.documentoFuente.datos')
@else
	@include('administracion.documentoFuente.formulario')
@endif
@endsection