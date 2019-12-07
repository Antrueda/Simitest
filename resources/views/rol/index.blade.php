@extends('layouts.index')
@section('content')
   @component('layouts.components.tabla.index', ['buscarxx'=>$buscarxx,'collection' => $regitabl,'cabeceras'=>$cabecera,'opciones'=>$opciones,'registro' => $registro])
      @slot('tableName')
      tablaRoles
      @endslot
      @slot('class')
      @endslot
    @endcomponent 
@endsection