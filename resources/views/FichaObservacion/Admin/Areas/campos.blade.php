<div class="form-group row{{ $errors->first('nombre') ? ' is-invalid' : '' }}">
    {{ Form::label('nombre', 'Nombre:', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        @if($accion == 'Ver')
            {{ Form::text('nombre', $dato->nombre, ['class' => 'form-control-plaintext']) }}
        @else
            {{ Form::text('nombre', null, ['class' => $errors->first('nombre') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'nombre de la área', 'maxlength' => '120', 'autofocus']) }}
        @endif
    </div>
    @if($errors->has('nombre'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombre') }}
        </div>
    @endif
</div>
<div class="row">
    @if($accion == 'Nuevo')
        @can('fosarea-crear')
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        @endcan
    @endif
    @if($accion == 'Editar')
        @can('fosarea-editar')
            {{ Form::submit('Modificar', ['class' => 'btn btn-primary']) }}
        @endcan
    @endif
    @if($accion == 'Ver')
        @can('fosarea-borrar')
            {!! Form::open(['route' => ['fosarea.ver', $dato->id], 'method' => 'DELETE']) !!}
                @if($dato->sis_esta_id == 1)
                <button class="btn btn-danger">INACTIVAR</button>
                @else
                  <button class="btn btn-success">ACTIVAR</button>
                @endif
            {!! Form::close() !!}
        @endcan
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('fosarea') }}">Regresar</a>
</div>