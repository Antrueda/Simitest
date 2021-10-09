@extends('layouts.index')

@section('content')
	 @component('Indicadores.Admin.Validacion.Datatable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
      tabla
      @endslot
      @slot('class')
      @endslot
      
    @endcomponent 
@endsection