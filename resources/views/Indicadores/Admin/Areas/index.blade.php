@extends('layouts.index')

@section('content')
	<div class="content-header">
		<h1>Areas</h1>
		<hr>
	</div>
	@if(!isset($accion))
		@include('Indicadores.Admin.Areas.datos')
	@else
		@include('Indicadores.Admin.Areas.formulario')
@endif
@endsection