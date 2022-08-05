<?php $datobasi= $todoxxxx['nnajxxxx']->fi_datos_basico?>

{{-- ESTE FORMULARIO ES CUANDO LE DOY VER  --}}
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
    




</div>