@extends('layouts.index')

@section('content')
<div class="content-header">
  <h1>
    Acciones Individuales
    @if(@isset($accion))
      <a class="btn btn-sm btn-primary ml-2" title="Regresar" href="{{ route('ai') }}">
        Regresar
      </a>
    @endif
  </h1>
  <hr>
  @if(!isset($accion))
    @include('Acciones.Individuales.datos')
  @else
    @include('Acciones.Individuales.formulario')
  @endif
@endsection

@section('codigo')
  @if(!isset($accion))
    @include('Acciones.Individuales.js')
  @elseif($accion =='SalidaMayores')
    @include('Acciones.Individuales.SalidaMayores.js')
  @elseif($accion =='Evasion')
    @include('Acciones.Individuales.Evasion.js')
  @elseif($accion =='SalidaMenores')
    @include('Acciones.Individuales.SalidaMenores.js')
  @elseif($accion =='RetornoSalida')
    @include('Acciones.Individuales.RetornoSalida.js')
  @endif
@endsection
