<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('in_indiliba_id', 'LÍNEA BASE:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->inIndiliba->inLineaBase->s_linea_base }}
        </div>
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('in_libagrup_id', 'GRUPO:', ['class' => 'control-label col-form-label-sm']) }}
        <div class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->id }}
        </div>
    </div>
    <div class="form-group col-md-12">
        {{ Form::label('sis_esta_id','Estado') }}
        {{ Form::select('sis_esta_id',$todoxxxx['estadoxx'], null,['class'=> $errors->first('sis_esta_id') ? 'form-control is-invalid' :'form-control form-control-sm select2','autofocus']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
