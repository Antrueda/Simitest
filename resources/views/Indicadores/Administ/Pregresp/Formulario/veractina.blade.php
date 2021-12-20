<?php
$p = $todoxxxx['padrexxx']->inLibagrup;
?>
<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('in_libagrup_id', 'Área:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $p->inIndiliba->inAreaindi->area->nombre }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('in_libagrup_id', 'Indicador:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $p->inIndiliba->inAreaindi->inIndicado->s_indicador }}
        </div>
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('in_libagrup_id', 'Línea base:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $p->inIndiliba->inLineaBase->s_linea_base }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('id', 'Grupo:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->id }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('temacombo_id', 'Pregunta: ', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inGrupregu->temacombo->nombre }}
        </div>
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('prm_disparar_id', $todoxxxx['tipopreg']['pregunta'], ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inGrupregu->prmDisparar->nombre }}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('prm_disparar_id', 'Respuesta', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->prmRespuest->nombre }}
        </div>
    </div>
</div>
