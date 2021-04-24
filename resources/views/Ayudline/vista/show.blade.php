@extends('layouts.index')

@section('content')
    <div class="container mx-3">
        <div class="row">
            @if ($total_resultado > 0)
                <div class="col cuerpo">
                    <h1 class="display-5">{{ $cuerpo_data->titulo }}</h1>
                    <hr>
                    {!! $cuerpo_data->cuerpo !!}                    
                    <div class="col d-flex justify-content-center my-4">
                        <a href="{{ route('ayuda.vista.index') }}" class="btn btn-success">Ir al Inicio de Ayuda</a>
                        
                    </div>
                </div>
            @else
                <div class="col">
                    Sin Resultado
                </div>
            @endif
        </div>
    </div>
@endsection
