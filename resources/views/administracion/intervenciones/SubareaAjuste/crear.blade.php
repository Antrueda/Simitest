@extends('layouts.index')

@section('content')
    @include('administracion.intervenciones.SubareaAjuste.header')

    <form method='post'
        action='{{ route($rutaxxxx . '.store', ['atencion' => Route::current()->parameters['atencion'], 'area' => Route::current()->parameters['area']]) }}'>
        @csrf

        @include('administracion.intervenciones.SubareaAjuste.botones')
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">

                    <label for="nombre" class="ml-1">Área de Ajuste <span class="text-danger">*</span>
                        <input type="checkbox" class="ml-2" name="habilitar" id="habilitar" value="{{ old('habilitar', '') }}"> Agregar Nuevo
                    </label>
                    <div class="form-select-shower">
                        <select name="parametro_id" id="parametro_id" class="form-control form-control-sm select2" value="{{ old('parametro_id', '') }}">
                            @foreach ($subareas as $parametro)
                                <option value="{{ $parametro->id }}">{{ $parametro->nombre }}</option>
                            @endforeach
                            @error('parametro_id') <span class="text-red-500">{{ $message }}</span> @enderror
                        </select>
                    </div>
                    <div class="form-input-shower" style="display: none;">
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" aria-describedby="nombre"
                            placeholder="Ingrese el nombre del Subárea de Ajuste" value="{{ old('nombre', '') }}">
                            @error('nombre') <span class="text-danger ml-2">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="sis_esta_id" class="ml-1">Estado <span class="text-danger">*</span></label>
                    <select name="sis_esta_id" id="sis_esta_id" class="form-control form-control-sm "  value="{{ old('sis_esta_id', '') }}">
                        @foreach ($estadoxx as $estado)
                            <option value="{{ $estado->id }}">{{ $estado->s_estado }}</option>
                        @endforeach
                        @error('sis_esta_id') <span class="text-red-500">{{ $message }}</span> @enderror
                    </select>
                </div>
            </div>

        </div>

        @include('administracion.intervenciones.SubareaAjuste.botones')
    </form>

    @include('administracion.intervenciones.footer')
@endsection
