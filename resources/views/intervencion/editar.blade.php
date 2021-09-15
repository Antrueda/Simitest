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
                </div>
                <div class="card text-left">
                    @include('intervencion.formulario.titulocav')
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {!! Form::model($todoxxxx['modeloxx'], ['route' => [$todoxxxx['rutaxxxx'] . '.editar', $todoxxxx['nnajregi'], $todoxxxx['modeloxx']->id], 'method' => 'PUT']) !!}
                        @include('intervencion.formulario.botones')
                        @include('intervencion.formulario.formulario')
                        @include('intervencion.formulario.botones')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('codigo')
    @include('intervencion.formulario.js')
@endsection
