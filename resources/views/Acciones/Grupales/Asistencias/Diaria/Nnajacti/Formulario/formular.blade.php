<?php $datobasi= $todoxxxx['nnajacti']->fi_datos_basico?>


<div class="form-group col-md-4">
    {!! Form::label('s_documento', 'Documento:', ['class' => 'control-label']) !!}
    <div id="s_documento" class="form-control form-control-sm">
        {{ $datobasi->nnaj_docu->s_documento }}
    </div>
</div>
<div class="form-group col-md-4">
    {!! Form::label('s_primer_nombre', 'Primer Nombre:', ['class' => 'control-label']) !!}
    <div id="s_primer_nombre" class="form-control form-control-sm">
        {{ $datobasi->s_primer_nombre }}
    </div>
</div>
<div class="form-group col-md-4">
    {!! Form::label('s_segundo_nombre', 'Segundo Nombre:', ['class' => 'control-label']) !!}
    <div id="s_segundo_nombre" class="form-control form-control-sm">
        {{ $datobasi->s_segundo_nombre }}
    </div>
</div>
<div class="form-group col-md-4">
    {!! Form::label('s_primer_apellido', 'Primer Nombre:', ['class' => 'control-label']) !!}
    <div id="s_primer_apellido" class="form-control form-control-sm">
        {{ $datobasi->s_primer_apellido }}
    </div>
</div>
<div class="form-group col-md-4">
    {!! Form::label('s_segundo_apellido', 'Primer Nombre:', ['class' => 'control-label']) !!}
    <div id="s_segundo_apellido" class="form-control form-control-sm">
        {{ $datobasi->s_segundo_apellido }}
    </div>
    




      <!-- <div class="form-group col-md-4 {{$errors->first('tipoacti_id') ? 'has-error' : ''}}">
        {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('tipoacti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipoacti_id') }}
        </div>
        @endif
    </div>
    
    <div class="form-group col-md-4 {{$errors->first('actividade_id') ? 'has-error' : ''}}">
        {!! Form::label('actividade_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('actividade_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('actividade_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('actividade_id') }}
        </div>
        @endif
    </div> -->

<!-- 
   <div class="form-group col-md-4">
        {!! Form::label('prm_novedadx_id', 'Novedad u Observación:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_novedadx_id', $todoxxxx['novedadx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('prm_novedadx_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_novedadx_id') }}
            </div>
        @endif
    </div> -->

</div>