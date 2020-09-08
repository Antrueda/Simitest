@extends('layouts.index')
@section('content')
  @component('layouts.components.perfilNNAJ.index',['todoxxxx'=>$todoxxxx])
    @slot($todoxxxx['slotxxxx'])
    {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['rutaxxxx'].'.editar',$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
      @include('layouts.components.botones.botones')  
      @include('fichaIngreso.'.$todoxxxx["carpetax"].'.formulario.formulario')
      @include('layouts.components.botones.botones')
    {!! Form::close() !!}
    @endslot
  @endcomponent

