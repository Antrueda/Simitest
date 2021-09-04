<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('nombres_apellidos', 'Nombre y apellidos:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->nombres_apellidos }}
        </div>

    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_entidad_id', 'Entidad:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->sisEntidad->nombre }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('cargo', 'Cargo:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->cargo }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('phone', 'Teléfono', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->phone }}
        </div>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('email', 'Correo electronico:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->email }}
        </div>
    </div>
</div>
