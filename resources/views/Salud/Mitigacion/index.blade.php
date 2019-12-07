@extends('layouts.index')
@section('content')
    <div class="content-header">
        <h1>
            Mitigación
            @if(@isset($accion))
                <a class="btn btn-sm btn-primary ml-2" title="Regresar" href="{{ route('mitigacion') }}">
                    Regresar
                </a>
            @endif
        </h1>
    </div>
    <hr>
    @if(!isset($accion))
        @include('Salud.Mitigacion.datos')
    @else
        @include('Salud.Mitigacion.formulario')
    @endif
@endsection
@section('codigo')
    @if(!isset($accion))
        @include('Salud.Mitigacion.js')
    @elseif($accion =='Vma')
        @include('Salud.Mitigacion.Vma.js')
    @endif
@endsection