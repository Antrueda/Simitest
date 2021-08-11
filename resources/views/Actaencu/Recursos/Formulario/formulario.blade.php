<div class="form-group row">
    <div class="form-group col-md-6" style="height:32px ">
        {{ Form::label('prm_trecurso_id', 'Tipo de Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_trecurso_id', $todoxxxx["trecurso"], null, ['class' => $errors->first('prm_trecurso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_trecurso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_trecurso_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6" style="height: ">
        {{ Form::label('ag_recurso_id', 'Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('ag_recurso_id', $todoxxxx["trecurso"], null, ['class' => $errors->first('ag_recurso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_trecurso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_trecurso_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('unidmedi', 'Unidad de Medida', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control col-form-label-sm" id="unidmedi">
            {{$todoxxxx['unidmedi']}}
        </div>
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('i_cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('i_cantidad', null, ['class' =>'form-control col-form-label-sm','placeholder' => 'Cantidad de recurso', 'maxlength' => '120', 'autofocus']) }}
    </div>
</div>
