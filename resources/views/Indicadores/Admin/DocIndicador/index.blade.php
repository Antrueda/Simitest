@extends('layouts.index')

@section('content')
	 @component('Indicadores.Admin.DocIndicador.datatable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
      tabla
      @endslot
      @slot('class')
      @endslot
      
    @endcomponent 
@endsection