<div class="form-row align-items-end">


    <div class="form-group col-md-6">
        {{ Form::label('prm_situacion_vulnera_id', '13.1 Situaciones de vulneraciones', ['class' => 'control-label']) }}
        {{ Form::select('prm_situacion_vulnera_id[]', $todoxxxx['situavul'], null, ['class' => $errors->first('prm_situacion_vulnera_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple','id'=>'prm_situacion_vulnera_id',
    'data-placeholder' => 'Seleccione las actividades que realiza']) }}
        @if($errors->has('prm_situacion_vulnera_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_situacion_vulnera_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_tipo_id', 'Tipo ESCNNA', ['class' => 'control-label']) }}
        {{ Form::select('i_prm_tipo_id', $todoxxxx['tipoescn'], null, ['class' => $errors->first('i_prm_tipo_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => 'Tipo ESCNNA']) }}
        @if($errors->has('i_prm_tipo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('i_prm_tipo_id') }}
        </div>
        @endif
    </div>




    <div class="form-group col-md-6">
        {{ Form::label('i_prm_victima_escnna_id', '13.2 ó 13.3 Víctima o riesgo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
        <select id="i_prm_victima_escnna_id" name="i_prm_victima_escnna_id[]" class="form-control form-control-sm select2" multiple="multiple" data-placeholder="Víctima o riesgo ESCNNA" >
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

    <div class="form-group col-md-6">
        {{ Form::label('prm_presconf_id', '13.4 ¿Es usted Joven en presunto conflicto con la ley?', ['class' => 'control-label']) }}
        {{ Form::select('prm_presconf_id', $todoxxxx['presconf'], null, ['class' => $errors->first('prm_presconf_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm',
    'data-placeholder' => '¿Es usted Joven en presunto conflicto con la ley?']) }}
        @if($errors->has('prm_presconf_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_presconf_id') }}
        </div>
        @endif
    </div>
</div>
