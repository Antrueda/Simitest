@extends('layouts.index')
@section('content')
    <div class="content-header">
        <h1>
            Consulta Social en Domicilio
            @if(@isset($accion))
                <a class="btn btn-sm btn-primary ml-2" title="Regresar" href="{{ route('csd') }}">
                    Regresar
                </a>
            @endif
        </h1>
        <hr>
    </div>
    @if(!isset($accion))
        @include('Domicilio.datos')
    @else
        @if($accion=='Nnaj' || $accion=='Nueva' || $accion=='Editar')
            @include('Domicilio.datosNnaj')
        @else
            @include('Domicilio.formulario')
        @endif
    @endif
@endsection

@section('codigo')
@if(!isset($accion))
    @include('Domicilio/js')
@else
    @if($accion=='Basico')
        @include('Domicilio/Basico/js')
    @elseif($accion=='Violencia')
        @include('Domicilio/Violencia/js')
    @elseif($accion=='Justicia')
        @include('Domicilio/Justicia/js')
    @elseif($accion=='Alimentacion')
        @include('Domicilio/Alimentacion/js')
    @elseif($accion=='ComFamiliar')
        @include('Domicilio/ComFamiliar/js')
    @elseif($accion=='DinFamiliar')
        @include('Domicilio/DinFamiliar/js')
    @elseif($accion=='GenIngresos')
        @include('Domicilio/GenIngresos/js')
    @elseif($accion=='Residencia')
        @include('Domicilio/Residencia/js')
    @elseif($accion=='Bienvenida')
        @include('Domicilio/Bienvenida/js')
    @elseif($accion=='RedesApoyo')
        @include('Domicilio/RedesApoyo/js')
    @elseif($accion=='Conclusiones')
        @include('Domicilio/Conclusiones/js')
    @elseif($accion=='SituacionEspecial')
        @include('Domicilio/SituacionEspecial/js')
    @elseif($accion=='Agregar')
        @include('Domicilio/agregar')
    @endif
@endif
@endsection