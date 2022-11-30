
<div class="form-row">
    <div class="form-group col-md-12">
        <div class="row">
            <div class="col-md-6">
                {!! Form::label('tipo_valoracion', 'TIPO DE VALORACIÓN:', ['class' => 'control-label']) !!}
                {!! Form::select('tipo_valoracion', ['INICIAL'=>'INICIAL','SEGUIMIENTO'=>'SEGUIMIENTO'], null, ['name' => 'tipo_valoracion', 'class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione']) !!}
                @if($errors->has('tipo_valoracion'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipo_valoracion') }}
                </div>
                @endif
            </div>
            <div class="col-md-6">
                {!! Form::label('tipo_componente', 'TIPO DE COMPONENTE:', ['class' => 'control-label']) !!}
                {!! Form::select('tipo_componente',['PERSONALES'=>'COMPONENTES PERSONALES','PROCESO'=>'COMPONENTES DEL PROCESO'], null, ['name' => 'tipo_componente', 'class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione']) !!}
                @if($errors->has('tipo_componente'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipo_componente') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group col-md-12">
        {!! Form::label('componente_id', 'COMPONENTE:', ['class' => 'control-label']) !!}
        {!! Form::select('componente_id', $todoxxxx['componentes'], null, ['name' => 'componente_id', 'class' => 'form-control form-control-sm select2', 'placeholder' => 'Seleccione']) !!}
        @if($errors->has('componente_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('componente_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('estusuarios_id', 'Justificación Estado:', ['class' => 'control-label']) !!}
        {!! Form::select('estusuarios_id', $todoxxxx['motivoxx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('estusuarios_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('estusuarios_id') }}
        </div>
        @endif
    </div>
</div>
