@extends('layouts.index')
@section('content')
  @component('layouts.components.perfilNNAJ.index',['todoxxxx'=>$todoxxxx])
    @slot($todoxxxx['slotxxxx'])
     @if(isset($todoxxxx["esindexx"]))
     @include('layouts.components.botones.botones')
        @include('FichaIngreso.'.$todoxxxx["carpetax"].'.index')
        @include('layouts.components.botones.botones')
      @else
        @if($todoxxxx['modeloxx']=='')
          @if(isset($todoxxxx['archivox']))
            {!!Form::open(['route'=>[$todoxxxx['routxxxx'].'.crear',$todoxxxx['nnajregi'],$todoxxxx['razonesx']],'files'=>true])!!}
          @else
            {!!Form::open(['route'=>['fi.'.$todoxxxx['carpetax'].'.crear',$todoxxxx['nnajregi']]])!!}
          @endif
          
        @else
          @if(isset($todoxxxx['archivox']))
            {!! Form::model($todoxxxx['modeloxx'],['route'=>[$todoxxxx['routxxxx'].'.editar',
            $todoxxxx['nnajregi'],$todoxxxx['razonesx'],$todoxxxx['modeloxx']->id],'method'=>'PUT','files'=>true]) !!}
          @else
            {!! Form::model($todoxxxx['modeloxx'],['route'=>['fi.'.$todoxxxx['carpetax'].'.editar',
            $todoxxxx['nnajregi'],$todoxxxx['modeloxx']->id],'method'=>'PUT']) !!}
          @endif
          
        @endif
        <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $todoxxxx['nnajregi'] }}">
        @include('layouts.components.botones.botones')
        @include('FichaIngreso.'.$todoxxxx["carpetax"].'.formulario.formulario')
        @include('layouts.components.botones.botones')
        {!! Form::close() !!}
      @endif

    @endslot


  @endcomponent

  @section('codigo')
    @include('FichaIngreso.'.$todoxxxx["carpetax"].'.formulario.js')

  @endsection

