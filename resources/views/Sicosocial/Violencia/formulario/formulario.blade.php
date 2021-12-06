<?php

$tablaxxx = 'principa';
if (isset($todoxxxx['rowscols'])) {
    $tablaxxx = $todoxxxx['rowscols'];
}

?>
<div class="row">

    <div class="col-md-3">
        {{ Form::label('prm_tip_vio_id', '4.1 ¿Presenta algún tipo de violencia?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tip_vio_id', $todoxxxx['sinoxxxz'], null, ['class' => $errors->first('prm_tip_vio_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2','data-placeholder' => 'Seleccione...', 'onchange' => 'doc(this.value)']) }}
    </div>
</div>
<div class="row">
    <br>
</div>
<div class="row">
    <div class="col-md-12">
        @foreach ($todoxxxx['tablasxx'] as $key=> $tablasxx)
        <div class="row">
                            <div class="col-md-12">
                                <h6>{{$tablasxx['relacion']}}</h6>
                            </div>
                        </div>
        @component('layouts.components.tablajquery.'.$tablaxxx, ['todoxxxx'=>$tablasxx])
        @slot('tableName')
        {{$tablasxx['tablaxxx'] }}
        @endslot
        @slot('class')
        @endslot
        @endcomponent
        @endforeach
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('prm_dis_gen_id', '4.2 ¿Se ha sentido discriminado/a por su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_dis_gen_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_dis_gen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc1(this.value)']) }}
            </div>
            <div class="col-md-6">
                {{ Form::label('prm_dis_ori_id', '4.3 ¿Se ha sentido discriminado/a por su orientacion sexual?', ['class' => 'control-label col-form-label-sm']) }}
                {{ Form::select('prm_dis_ori_id', $todoxxxx['sinoxxxx'], null, ['class' => $errors->first('prm_dis_ori_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'onchange' => 'doc2(this.value)']) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('contextos', '4.4 ¿En qué contexto se ha sentido discriminado/a?', ['class' => 'control-label col-form-label-sm']) }}
                <div id="contextos_div">
                    {{ Form::select('contextos[]', $todoxxxx['contexto'], null, ['class' => $errors->first('contextos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'contextos', 'multiple']) }}
                </div>
            </div>
            <div class="col-md-6">
                {{ Form::label('tipos', '4.5 ¿Qué tipo de violencia ha presentado cuándo ha sido discriminado/a?', ['class' => 'control-label col-form-label-sm']) }}
                <div id="tipos_div">
                    {{ Form::select('tipos[]', $todoxxxx['violenci'], null, ['class' => $errors->first('tipos') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'tipos', 'multiple']) }}
                </div>
            </div>
              </div>
    </div>
</div>

<div class="form-group row">
    @include('layouts.registro')
</div>
