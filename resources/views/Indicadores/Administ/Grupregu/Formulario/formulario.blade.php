<?php
$p = $todoxxxx['padrexxx'];
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
            {{ $p->inIndiliba->inAreaindi->inIndicador->s_indicador }}
        </div>
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('in_libagrup_id', 'Línea base:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $p->inIndiliba->inLineaBase->s_linea_base }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('in_libagrup_id', 'Grupo:', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::select('in_libagrup_id', [$p->id=>$p->id], null, ['class' => $errors->first('in_libagrup_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_libagrup_id']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('temacombo_id', 'Pregunta: ', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::select('temacombo_id', [$todoxxxx['modeloxx']->temacombo_id=>$todoxxxx['modeloxx']->temacombo->nombre], null, ['class' => $errors->first('temacombo_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'temacombo_id']) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('prm_disparar_id', 'Tipo de pregunta:', ['class' => 'control-label col-form-label-sm']) }}

        {{ Form::select('prm_disparar_id', [$p->id=>$p->id], null, ['class' => $errors->first('prm_disparar_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'prm_disparar_id']) }}

        @if($errors->has('prm_disparar_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_disparar_id') }}
        </div>
        @endif
    </div>
</div>
