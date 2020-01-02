@extends('layouts.index')

@section('content')
    <div class="content-header">
        <h1>Areas</h1>
        <hr>
    </div>
    @if(!isset($accion))
        @include('FichaObservacion.Admin.Areas.datos')
    @else
        @include('FichaObservacion.Admin.Areas.formulario')
    @endif
@endsection