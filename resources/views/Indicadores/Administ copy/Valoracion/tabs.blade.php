@extends('layouts.index')
@section('content')
  @component('layouts.components.perfilNNAJ.index',['todoxxxx'=>$todoxxxx])
    @slot($todoxxxx['slotxxxx'])
     dfafsd
    @endslot


  @endcomponent

  @section('codigo')
    @include('Indicadores.Admin.'.$todoxxxx["carpetax"].'.formulario.js')

  @endsection

