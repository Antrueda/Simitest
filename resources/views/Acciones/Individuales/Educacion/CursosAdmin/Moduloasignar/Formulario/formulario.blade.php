<div>
<div class="form-group row">
    <div class="form-group col-md-3">
        {{ Form::label('cursos_id', 'Cursos:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('cursos_id', $todoxxxx['seguixxx'], null, ['class' => $errors->first('cursos_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('cursos_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('cursos_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('modulo_id', 'Modulos:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('modulo_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('cursos_id') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('modulo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('modulo_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>

</div>
