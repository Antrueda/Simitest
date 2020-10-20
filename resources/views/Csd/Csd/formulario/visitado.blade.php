@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('sis_nnaj_id', 'NNAJ Visitado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_nnaj_id', $todoxxxx["nnajidxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => 'form-control form-control-sm']) }}
    </div>
</div>
