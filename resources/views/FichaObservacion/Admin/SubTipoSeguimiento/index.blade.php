@extends('layouts.index')

@section('content')
    <div class="content-header">
        <h1>Sub Tipos de Seguimientos</h1>
        <hr>
    </div>
    @if (!isset($accion))
        @include('FichaObservacion.Admin.SubTipoSeguimiento.datos')
    @else
        @include('FichaObservacion.Admin.SubTipoSeguimiento.formulario')
    @endif
@endsection

@section('codigo')
    @include('FichaObservacion.Admin.SubTipoSeguimiento.js')
@endsection