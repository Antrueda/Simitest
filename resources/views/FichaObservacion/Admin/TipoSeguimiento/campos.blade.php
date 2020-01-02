<div class="form-group row {{ $errors->first('nombre') ? ' is-invalid' : '' }}">
    {{ Form::label('nombre', 'Nombre:', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        @if($accion == 'Ver')
            {{ Form::text('nombre', $dato->nombre, ['class' => 'form-control-plaintext']) }}
        @else
            {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Nombre del tipo de seguimiento', 'maxlength' => '120', 'autofocus']) }}
        @endif
    </div>
    @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
    @endif
</div>
<div class="form-group row {{ $errors->first('area_id') ? ' is-invalid' : '' }}">
    {{ Form::label('area_id', 'Area:', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        @if($accion == 'Ver')
            {{ Form::select('area_id', $areas, $dato->area_id, ['class' => 'form-control-plaintext']) }}
        @else
            {{ Form::select('area_id', $areas, null, ['class' => 'form-control-plaintext']) }}
        @endif
    </div>
    @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('area_id') }}
        </div>
    @endif
</div>

<div class="row">
    @if($accion == 'Nuevo')
        @can('fostipo-crear')
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        @endcan
    @endif
    @if($accion == 'Editar')
        @can('fostipo-editar')
            {{ Form::submit('Modificar', ['class' => 'btn btn-primary']) }}
        @endcan
    @endif
    @if($accion == 'Ver')
        @can('fostipo-borrar')
            {!! Form::open(['route' => ['fostipo.ver', $dato->id], 'method' => 'DELETE']) !!}
                @if($dato->activo == 1)
                    <button class="btn btn-danger">Inactivar</button>
                @else
                    <button class="btn btn-success">Activar</button>
                @endif
            {!! Form::close() !!}
        @endcan
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('fostipo') }}">Regresar</a>
</div>