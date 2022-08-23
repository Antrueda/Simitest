<div class="form-row">
   
     <div class="form-group col-md-4 {{$errors->first('tipoacti_id') ? 'has-error' : ''}}">
        {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('tipoacti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipoacti_id') }}
        </div>
        @endif
    </div> 
    
    <div class="form-group col-md-4 {{$errors->first('asd_actividads_id') ? 'has-error' : ''}}">
        {!! Form::label('asd_actividads_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('asd_actividads_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('asd_actividads_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('asd_actividads_id') }}
        </div>
        @endif
    </div>


   <div class="form-group col-md-4">
        {!! Form::label('prm_novedadx_id', 'Novedad u Observación:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_novedadx_id', $todoxxxx['novedadx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if ($errors->has('prm_novedadx_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_novedadx_id') }}
            </div>
        @endif
    </div>
    @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')

</div>

