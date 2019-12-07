@extends('layouts.index')

@section('content')
	 @component('Indicadores.Admin.Acciongestion.Indextable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
      tabla
      @endslot
      @slot('class')
      @endslot
      
    @endcomponent 
@endsection