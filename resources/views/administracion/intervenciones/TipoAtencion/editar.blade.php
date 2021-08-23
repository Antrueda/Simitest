@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.TipoAtencion.header')
    <form method='post' action='{{ route($rutaxxxx . '.update', [$parametro->id]) }}'>
        @csrf
        @method('PUT')   
        @include('administracion.intervenciones.botones')

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre del Tipo de Atención <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Ingrese el nombre del Tipo de Atención" value="{{ $parametro->nombre }}">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="sis_esta_id">Estado <span class="text-danger">*</span></label>
                    <select name="sis_esta_id" id="sis_esta_id" class="form-control"
                        value="{{ $parametro->sis_esta->id }}">
                        @foreach ($estadoxx as $estado)
                            <option value="{{ $estado->id }}">{{ $estado->s_estado }}</option>
                        @endforeach
                        @error('sis_esta_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="creador">Creado por: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Ingrese el nombre del Tipo de Atención" value="{{ $parametro->creador->name }}"
                        disabled>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="sis_esta_id">Actualizado por: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Ingrese el nombre del Tipo de Atención" value="{{ $parametro->editor->name }}"
                        disabled>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="nombre">Creado el <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Ingrese el nombre del Tipo de Atención" value="{{ $parametro->created_at }}"
                        disabled>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="sis_esta_id">Actualizado el: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Ingrese el nombre del Tipo de Atención" value="{{ $parametro->updated_at }}"
                        disabled>
                </div>
            </div>

        </div>
        @include('administracion.intervenciones.botones')
    </form>

    @include('administracion.intervenciones.footer')
@endsection
