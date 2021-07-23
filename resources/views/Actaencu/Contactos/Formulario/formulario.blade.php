<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('nombres_apellidos', 'Nombre y apellidos:', ['class' => 'control-label']) !!}
        {!! Form::text('nombres_apellidos', null, ['class' => 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) !!}
        @if($errors->has('nombres_apellidos'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('nombres_apellidos') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_entidad_id', 'Entidad:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_entidad_id', $todoxxxx['entidades'], null, ['class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione una']) !!}
        @if($errors->has('sis_entidad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_entidad_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('cargo', 'Cargo:', ['class' => 'control-label']) !!}
        {!! Form::text('cargo', null, ['class' => 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) !!}

        @if($errors->has('cargo'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('cargo') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('phone', 'Teléfono', ['class' => 'control-label']) !!}
        {!! Form::number('phone', null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('phone'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('email', 'Correo electronico:', ['class' => 'control-label']) !!}
        {!! Form::email('email', null, ['class' => 'form-control form-control-sm', 'style' => 'text-transform:uppercase;']) !!}
        @if($errors->has('email'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
</div>
