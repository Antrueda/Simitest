@extends('layouts.index')
@section('content')
    @if ($todoxxxx["indecrea"])
        @if ($todoxxxx["esindexx"])
            @include('Administracion.Acomponents.pestanias.index')
        @else
            @include('Administracion.Acomponents.pestanias.crear')
        @endif
        @endsection
        @section('codigo')
            @if ($todoxxxx["esindexx"])
                @include('Administracion.Acomponents.tablajquery.multiplejs')
                @include($todoxxxx["rutacarp"].$todoxxxx["carpetax"].'.js.tabla')
            @else
                @include($todoxxxx["rutacarp"].$todoxxxx["carpetax"].'.js.js')
            @endif
        @endsection
    @else
        @component($todoxxxx["rutacarp"].'tabsxxxx.index',['todoxxxx'=>$todoxxxx])
            @slot($todoxxxx['slotxxxx'])
                @switch($todoxxxx['accionxx'])
                    @case('index')
                        @include('Administracion.Acomponents.pestanias.index')
                    @break
                    @case('Crear')
                        @include('Administracion.Acomponents.pestanias.crear')
                    @break
                    @case('Editar')
                        @include('Administracion.Acomponents.pestanias.editar')
                    @break
                    @case('Ver')
                        @include('Administracion.Acomponents.pestanias.ver')
                    @break
                    @case('Destroy')
                        @include('Administracion.Acomponents.pestanias.destroy')
                    @break
                    @case('Sin')
                        @include('Administracion.Acomponents.pestanias.sinform')
                    @break
                @endswitch
            @endslot
        @endcomponent
        @section('codigo')

            @if ($todoxxxx['accionxx']=='index')
            @include($todoxxxx["rutacarp"].$todoxxxx["carpetax"].'.js.tabla')
            @else
                @include($todoxxxx["rutacarp"].$todoxxxx["carpetax"].'.js.js')
            @endif
        @endsection
    @endif
