@extends('layouts.index')
@section('content')
   @component('FichaObservacion.datatable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
         tabla
      @endslot
      @slot('class')
      @endslot
   @endcomponent
@endsection