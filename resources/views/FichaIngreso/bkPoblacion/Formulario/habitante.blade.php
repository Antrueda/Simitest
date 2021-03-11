<div class="form-row align-items-end">
    <div class="form-group col-md-4">
        {{ Form::label('prm_situacion_vulnera_id', '12.1 Situaciones de vulneraciones', ['class' => 'control-label']) }}
        {{ Form::select('prm_situacion_vulnera_id[]', $todoxxxx['situavul'], null, ['class' => $errors->first('prm_situacion_vulnera_id') ?
    'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm','multiple',
    'data-placeholder' => 'Seleccione las actividades que realiza']) }}
        @if($errors->has('prm_situacion_vulnera_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_situacion_vulnera_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tipo_id', 'Tipo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tipo_id', $todoxxxx["tipoescn"], null, ['class' => 'form-control form-control-sm',
    'style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_victima_escnna_id', '12.2 ó 12.3 Víctima o riesgo ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
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
    <div class="form-group col-md-4">
        {{ Form::label('i_tiempo', '12.4 ¿Hace cuánto tiempo duerme en la calle?', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-group col-md-6" style="float: left">

            {{ Form::number('i_tiempo', null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px']) }}
        </div>
        <div class="form-group col-md-6" style="float: left">
            {{ Form::select('i_prm_ttiempo_id', $todoxxxx["ttiempox"], null, ['class' => 'form-control form-control-sm', 'style'=>'height:38px']) }}
        </div>
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('i_prm_iniciado_id', '12.5¿Cuáles fueron las razones para haber INICIADO la habitanza en calle?', ['class' => 'control-label col-form-label-sm']) }}
        <select id="i_prm_iniciado_id" name="i_prm_iniciado_id[]" class="form-control form-control-sm select2" multiple="multiple">
            @foreach ($todoxxxx["iniciado"] as $valuexxx => $optionxx)
            <?php $victimas = '' ?>
            @if (old('i_prm_iniciado_id')!=null)
            @foreach (old('i_prm_iniciado_id') as $situacx)
            @if($situacx==$valuexxx)
            <?php $victimas = 'selected' ?>
            @endif
            @endforeach
            @else
            @foreach ($todoxxxx["situacio"]['iniciado'] as $situacx)

            @if($situacx->i_prm_iniciado_id==$valuexxx)
            <?php $victimas = 'selected' ?>
            @endif
            @endforeach
            @endif
            <option value="{{ $valuexxx }} " {{ $victimas }}>{{ $optionxx }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_continua_id', '12.6¿Razones por las cuales CONTINUA la habitanza en calle', ['class' => 'control-label col-form-label-sm']) }}
        <select id="i_prm_continua_id" name="i_prm_continua_id[]" class="form-control form-control-sm select2" multiple="multiple">
            @foreach ($todoxxxx["continua"] as $valuexxx => $optionxx)
            <?php $victimas = '' ?>
            @if (old('i_prm_continua_id')!=null)
            @foreach (old('i_prm_continua_id') as $situacx)
            @if($situacx==$valuexxx)
            <?php $victimas = 'selected' ?>
            @endif
            @endforeach
            @else
            @foreach ($todoxxxx["situacio"]['continua'] as $situacx)
            @if($situacx->i_prm_continua_id==$valuexxx)
            <?php $victimas = 'selected' ?>
            @endif
            @endforeach
            @endif
            <option value="{{ $valuexxx }} " {{ $victimas }}>{{ $optionxx }}</option>
            @endforeach
        </select>
    </div>

</div>
