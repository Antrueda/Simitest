<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('prm_trecurso_id', 'Tipo de Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_trecurso_id', $todoxxxx["trecurso"], null, ['class' => $errors->first('prm_trecurso_id') ? 'form-control form-control-sm is-invalid recursos' : 'form-control form-control-sm select2 recursos']) }}
        @if($errors->has('prm_trecurso_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_trecurso_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('ae_recuadmi_id', 'Recurso', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('ae_recuadmi_id', $todoxxxx["recuadmi"], null, ['class' => $errors->first('ae_recuadmi_id') ? 'form-control form-control-sm is-invalid recursos' : 'form-control form-control-sm select2 recursos']) }}
        @if($errors->has('ae_recuadmi_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('ae_recuadmi_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('unidmedi', 'Unidad de Medida', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control col-form-label-sm" id="unidmedi" style="height: 33px;">
            {{$todoxxxx['unidmedi']}}
        </div>
    </div>

    <div class="form-group col-md-6" >
        {{ Form::label('cantidad', 'Cantidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::number('cantidad',  null,
            ['class' => $errors->first('cantidad') ?
            'form-control col-form-label-sm is-invalid' :
                'form-control col-form-label-sm',
                'placeholder' => 'Cantidad de recurso',
                'maxlength' => '120', 'autofocus',
                'style'=>"height: 33px;",
               "onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('cantidad'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('cantidad') }}
        </div>
        @endif

    </div>
    <div class="form-group col-md-12">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>
