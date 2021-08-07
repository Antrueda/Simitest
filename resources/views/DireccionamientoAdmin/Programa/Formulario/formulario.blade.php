<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('s_servicio', 'Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_servicio', null, ['class' => $errors->first('s_servicio') ? 'form-control  is-invalid' : 'form-control', 'placeholder' => 'Nombre de Servicio', 'maxlength' => '120', 'autofocus','style'=>'height: 28px','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
        @if($errors->has('s_servicio'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_servicio') }}
        </div>
        @endif
    </div>
    
    <div class="form-group col-md-6">
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
