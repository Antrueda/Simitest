<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('area_id','Area:') }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->area->nombre}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('s_indicador', 'Indicador:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inIndicado-> s_indicador}}
        </div>
    
    </div>
</div>
<div class="form-group row">
    @include('layouts.registro')
</div>
