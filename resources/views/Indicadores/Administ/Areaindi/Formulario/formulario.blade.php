<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('area_id','Area') }}
        {{ Form::select('area_id',$todoxxxx['areaxxxx'], null,
    ['class'=> $errors->first('area_id') ?
    'form-control is-invalid form-control-sm select2' :
        'form-control form-control-sm select2','autofocus','id'=>'area_id']) }}
        @if($errors->has('area_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('area_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_indicador', 'Indicador:', ['class' => 'control-label']) !!}
        {!! Form::text('s_indicador', null, ['class' => 'form-control form-control-sm' ,'autocomplete'=>"off"]) !!}
        @if(isset($errors) && $errors->has('s_indicador'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('s_indicador') }}
        </div>
        @endif
    </div>
</div>
