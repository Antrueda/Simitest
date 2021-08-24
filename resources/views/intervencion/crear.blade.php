@extends('layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                {{-- Info Basica --}}
                @include('intervencion.perfil.infoBase')
            </div>
            <div class="col-md-9">
                <div class="card text-left">
                    @include('intervencion.tabsxxxx')
                    @include('intervencion.formulario.titulocav')
                    <div class="tab-content">
                        <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
                            {!! Form::open(['route' => [$todoxxxx['routxxxx'] . '.crear', $todoxxxx['nnajregi']]]) !!}
                            @method('POST')
                            @include('intervencion.formulario.botones')
                            @include($todoxxxx["carpetax"].'.formulario.formulario')
                            @include('intervencion.formulario.botones')
                            {!! Form::close() !!}
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
@section('codigo')
    @include('intervencion.formulario.js')
@endsection
