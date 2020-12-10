<div class="form-row align-items-end">


    <div class="form-group col-md-4">
        {{ Form::label('i_prm_situacion_vulnera_id', '13.1 Situaciones de vulneraciones', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_situacion_vulnera_id[]', $todoxxxx['situavul'], null, ['class' => $errors->first('i_prm_situacion_vulnera_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'i_prm_situacion_vulnera_id',
    'data-placeholder' => 'Seleccione las actividades que realiza']) }}
        @if($errors->has('i_prm_situacion_vulnera_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_situacion_vulnera_id') }}
        </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tipo_id', 'Tipo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tipo_id', $todoxxxx["tipoescn"], null, ['class' => 'form-control form-control-sm',
    'style'=>'height:38px']) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('i_prm_victima_escnna_id', '13.2 ó 13.3 Víctima o riesgo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
        <select id="i_prm_victima_escnna_id" name="i_prm_victima_escnna_id[]" class="form-control form-control-sm select2" multiple="multiple">
            @foreach ($todoxxxx["viescnna"] as $valuexxx => $optionxx)
            <?php $victimas = '' ?>
            @foreach ($todoxxxx["situacio"]['escnnaxx'] as $situacx)
            <?php
            $valorxxx = '';
            if ($todoxxxx["modeloxx"]->i_prm_tipo_id == 563) {
                $valorxxx = $situacx->i_prm_riesgo_escnna_id;
            } else {
                $valorxxx = $situacx->i_prm_victima_escnna_id;
            }
            ?>
            @if($valorxxx==$valuexxx)
            <?php $victimas = 'selected' ?>
            @endif
            @endforeach
            <option value="{{ $valuexxx }} " {{ $victimas }}>{{ $optionxx }}</option>
            @endforeach
        </select>
    </div>


</div>
