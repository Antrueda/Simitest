<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('nombres_apellidos', 'Nombre y apellidos:', ['class' => 'control-label']) !!}
        {!! Form::text('nombres_apellidos', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_entidad_id', 'Entidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_entidad_id', $todoxxxx['entidades'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('cargo', 'Cargo:', ['class' => 'control-label']) !!}
        {!! Form::text('cargo', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('phone', 'Teléfono', ['class' => 'control-label']) !!}
        {!! Form::number('phone', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('email', 'Correo electronico:', ['class' => 'control-label']) !!}
        {!! Form::email('email', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
</div>
