<div>
<div class="form-group row">
    <div class="form-group col-md-3">
        {{ Form::label('area_id', 'Área:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('area_id', $todoxxxx['fosareas'], null, ['class' => 'form-control select2 form-control-sm','placeholder'=>'Seleccione']) }}
        @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('area_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-3">
        {{ Form::label('fos_tse_id', 'Tipo de Segimiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('fos_tse_id', $todoxxxx['seguixxx'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2']) }}
        @if($errors->has('fos_tse_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fos_tse_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('fos_stses_id', 'Sub Tipo de Segimiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('fos_stses_id', $todoxxxx['tipsegui'], null, ['class' => $errors->first('nombre') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'subtipo']) }}
        @if($errors->has('fos_stses_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('fos_stses_id') }}
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
