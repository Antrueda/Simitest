@extends('layouts.index')
@section('content')
	 @component($todoxxxx['rutacarp'].'datatable.index', ['todoxxxx'=>$todoxxxx])
      @slot('tableName')
      usuarios
      @endslot
      @slot('class')
      @endslot
    @endcomponent 
@endsection