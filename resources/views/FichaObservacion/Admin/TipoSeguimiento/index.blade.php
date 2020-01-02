@extends('layouts.index')

@section('content')
    <div class="content-header">
        <h1>Tipo de Seguimientos</h1>
        <hr>
    </div>
    @if(!isset($accion))
        @include('FichaObservacion.Admin.TipoSeguimiento.datos')
    @else
        @include('FichaObservacion.Admin.TipoSeguimiento.formulario')
    @endif
@endsection