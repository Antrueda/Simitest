@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.TipoAtencion.header')

    <form method='post' action='{{ route($rutaxxxx . '.store') }}'>
        @csrf

        @include('administracion.intervenciones.botones')
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre del Tipo de Atención <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Ingrese el nombre del Tipo de Atención">
                    @error('nombre') <span class="text-danger ml-2">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="sis_esta_id">Estado <span class="text-danger">*</span></label>
                    <select name="sis_esta_id" id="sis_esta_id" class="form-control">
                        @foreach ($estadoxx as $estado)
                            <option value="{{ $estado->id }}">{{ $estado->s_estado }}</option>
                        @endforeach
                        @error('sis_esta_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </select>
                </div>
            </div>

        </div>

        @include('administracion.intervenciones.botones')
    </form>

    @include('administracion.intervenciones.footer')
@endsection
