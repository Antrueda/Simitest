<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('in_indicador_id', 'ÁREA:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inAreaindi->area->nombre }}
        </div>

    </div>
    <div class="form-group col-md-12">
        {{ Form::label('in_indicador_id', 'INDICADOR:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inAreaindi->inIndicado->s_indicador }}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('in_linea_base_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inLineaBase->s_linea_base }}
        </div>
    </div>
</div>
<div class="form-group row">
    @include('layouts.registro')
</div>