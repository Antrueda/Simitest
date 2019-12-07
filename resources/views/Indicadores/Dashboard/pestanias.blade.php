@extends('layouts.index')
@section('content')
  @if($todoxxxx["esindexx"]) 
    @include($todoxxxx["dashboar"].'.datatable')
  @else   
    @component($todoxxxx['dashboar'].'.index',['todoxxxx'=>$todoxxxx])
      @slot($todoxxxx['slotxxxx'])
        @include($todoxxxx["dashboar"].'.'.$todoxxxx["slotxxxx"])
      @endslot
    @endcomponent
  @endif

@section('codigo')
  @if($todoxxxx["esindexx"]) 
    @include($todoxxxx["dashboar"].'.datatable.js')
  @endif
  @include($todoxxxx["dashboar"].'.js.js')
@endsection
