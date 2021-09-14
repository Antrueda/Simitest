<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('prm_trecurso_id', 'Tipo de Recurso', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->ae_recuadmi->prm_trecurso->nombre }}
        </div>
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('ae_recuadmi_id', 'Recurso', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->ae_recuadmi->s_recurso }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('unidmedi', 'Unidad de Medida', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control col-form-label-sm" id="unidmedi" style="height: 33px;">
            {{$todoxxxx['unidmedi']}}
        </div>
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->cantidad }}
        </div>

    </div>
    <div class="form-group col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->sis_esta->s_estado }}
        </div>
    </div>
</div>
