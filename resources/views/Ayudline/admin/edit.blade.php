@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Actualizar Ayuda: {{ $ayudaadm->titulo }}</h1>
                </div>
            </div>
        </div>
        <form method='post' action='{{ route('ayuda.update', ['ayuda'=>$ayudaadm->id]) }}'>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="titulo">Titulo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo"
                            placeholder="Ingrese un titulo" value="{{ $ayudaadm->titulo }}">
                        <small id="tituloAyuda" class="form-text text-muted font-italic">Ingrese un Titulo.
                            Requerido</small>
                        @error('titulo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="cuerpo">Cuerpo o Descripción <span class="text-danger">*</span>
                        </label>
                        <textarea class="texteditor form-control" id="cuerpo" name="cuerpo" rows="3"
                            placeholder="Describa brevemente el contenido de la Ayuda.">{{ $ayudaadm->cuerpo }}</textarea>
                        <small id="tituloAyuda" class="form-text text-muted font-italic">Describa el contenido de la Ayuda.
                            Requerido</small>
                        @error('titulo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mt-2">
                        <span class="pt-5 mr-3 font-weight-bold">Visibilidad:</span>
                        <label class="switch">
                            <input type="checkbox" name="status" @if ($ayudaadm->cuerpo) checked @endif>
                            <span class="slider round"></span>
                        </label>
                        @error('status') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end col-12 mt-2 mb-5">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href='{{ route('ayuda.index') }}' class="btn btn-primary text-white ml-2">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
