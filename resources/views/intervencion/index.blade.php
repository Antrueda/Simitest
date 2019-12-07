@extends('layouts.index')
@section('content')
   @component('intervencion.datatable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
      tabla
      @endslot
      @slot('class')
      @endslot
      
    @endcomponent 
@endsection