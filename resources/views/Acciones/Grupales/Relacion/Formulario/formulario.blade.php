<div class="form-group row">
    <div class="form-group col-md-6" style="height: ">
        {{ Form::label('i_prm_trecurso_id', 'Tipo de Recurso', ['class' => 'control-label col-form-label-sm ']) }}
        {{ Form::select('i_prm_trecurso_id', $todoxxxx["tiporecu"], null, ['class' => 'form-control form-control-sm recursos select2','style'=>'height:38px', 'style' => 'text-transform:uppercase;']) }}
    </div>
    <div class="form-group col-md-6" style="height: ">
        {{ Form::label('ag_recurso_id', 'Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('ag_recurso_id', $todoxxxx["trecurso"], null, ['class' => 'form-control form-control-sm recursos select2','style'=>'height:38px', 'style' => 'text-transform:uppercase;']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('unidmedi', 'Unidad de Medida', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control col-form-label-sm" id="unidmedi">
            {{$todoxxxx['unidmedi']}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_cantidad', null, ['class' =>'form-control col-form-label-sm','placeholder' => 'Cantidad de recurso', 'maxlength' => '120', 'autofocus', 'style' => 'text-transform:uppercase;']) }}
    </div>

</div>
