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
            {{ Form::select('area_id', $areas, $dato->area_id, ['class' => $errors->first('area_id') ? 'form-control is-invalid' : 'form-control']) }}
        @else
            {{ Form::select('area_id', $areas, null, ['class' => $errors->first('area_id') ? 'form-control is-invalid' : 'form-control']) }}
        @endif
    </div>
    @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('area_id') }}
        </div>
    @endif
</div>
<div class="form-group row {{ $errors->first('seg_id') ? ' is-invalid' : '' }}">
    {{ Form::label('seg_id', 'Tipo de Seguimiento:', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        @if($accion == 'Ver')
            {{ Form::select('seg_id', $tipos, $dato->seg_id, ['class' => $errors->first('seg_id') ? 'form-control is-invalid' : 'form-control']) }}
        @else
            {{ Form::select('seg_id', $tipos, null, ['class' => $errors->first('seg_id') ? 'form-control is-invalid' : 'form-control']) }}
        @endif
    </div>
    @if($errors->has('seg_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('seg_id') }}
        </div>
    @endif
</div>
<div class="form-group row {{ $errors->first('descripcion') ? ' is-invalid' : '' }}">
    {{ Form::label('descripcion', 'Descripción:', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        @if ($accion == 'Ver')
            {{ Form::textarea('descripcion', $dato->descripcion, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba una descripción para el sub tipo de seguimiento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @else
            {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Escriba una descripción para el sub tipo de seguimiento', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @endif
    </div>
    @if($errors->has('descripcion'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('descripcion') }}
        </div>
    @endif
</div>

<div class="row">
    @if($accion == 'Nuevo')
        @can('fossubtipo-crear')
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
        @endcan
    @endif
    @if($accion == 'Editar')
        @can('fossubtipo-editar')
            {{ Form::submit('Modificar', ['class' => 'btn btn-primary']) }}
        @endcan
    @endif
    @if($accion == 'Ver')
        @can('fossubtipo-borrar')
            {!! Form::open(['route' => ['fossubtipo.ver', $dato->id], 'method' => 'DELETE']) !!}
                @if($dato->activo == 1)
                    <button class="btn btn-danger">Inactivar</button>
                @else
                    <button class="btn btn-success">Activar</button>
                @endif
            {!! Form::close() !!}
        @endcan
    @endif
    <a class="btn btn-primary ml-2" href="{{ route('fossubtipo') }}">Regresar</a>
</div>