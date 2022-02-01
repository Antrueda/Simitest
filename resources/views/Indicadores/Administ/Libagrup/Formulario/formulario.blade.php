<div class="form-group row">
    <div class="form-group col-md-12">
        {{ Form::label('in_indicador_id', 'ÁREA:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['padrexxx']->inAreaindi->area->nombre }}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('in_indicador_id', 'INDICADOR:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['padrexxx']->inAreaindi->inIndicado->s_indicador }}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('in_indiliba_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('in_indiliba_id', $todoxxxx['linebase'], null, ['class' => $errors->first('in_indiliba_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_indiliba_id']) }}
        @if($errors->has('in_indiliba_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_indiliba_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('in_libagrup_id', 'GRUPO:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('in_libagrup_id', $todoxxxx['maximoxx'], null, ['class' => $errors->first('in_libagrup_id') ? 'form-control is-invalid select2' : 'form-control select2','id'=>'in_libagrup_id']) }}
        @if($errors->has('in_libagrup_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('in_libagrup_id') }}
        </div>
        @endif
    </div>
</div>
<div class="form-group row">
    @include('layouts.registro')
</div>