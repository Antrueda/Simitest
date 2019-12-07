@extends('layouts.index')
@section('content')
   @component('layouts.components.tabla.index', ['buscarxx'=>$buscarxx,
   'collection' => $regitabl,'cabeceras'=>$cabecera,'opciones'=>$opciones,'registro' => $registro])
      @slot('tableName')
      tablaPermisos
      @endslot
      @slot('class')
      @endslot
    @endcomponent 
@endsection