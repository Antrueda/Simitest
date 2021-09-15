<div class="form-row">

    <div class="form-group col-md-6">
        {!! Form::label('sis_depen_id', 'UPI/Dependencia:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->sisDepen->nombre}}
        </div>
    </div>
    <div class="forn-group col-md-6">
        {!! Form::label('sis_servicio_id', 'Servicio:', ['class' => 'control-labl']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->sisServicio->s_servicio}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('fechdili', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->fechdili}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_localidad_id', 'Localidad:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->sisLocalidad->s_localidad}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_upz_id', 'UPZ:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->sisUpz->s_upz}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('sis_barrio_id', 'Barrio:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->sisBarrio->s_barrio}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_accion_id', 'Acción:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->prmAccion->nombre}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('prm_actividad_id', 'Actividad:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->prmActividad->nombre}}
        </div>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('objetivo', 'Objetivo:', ['class' => 'control-label']) !!}
        <div id="objetivo" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->objetivo}}
        </div>
        <p class="text-right">{{strlen($todoxxxx['modeloxx']->objetivo)}}/4000</p>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('desarrollo_actividad', 'Desarrollo de la actividad:', ['class' => 'control-label']) !!}
        <div id="desarrollo_actividad" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->desarrollo_actividad}}
        </div>
        <p class="text-right">{{strlen($todoxxxx['modeloxx']->desarrollo_actividad)}}/4000</p>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('metodologia', 'Metodología:', ['class' => 'control-label']) !!}
        <div id="metodologia" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->metodologia}}
        </div>
        <p class="text-right">{{strlen($todoxxxx['modeloxx']->metodologia)}}/4000</p>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('observaciones', 'Observaciones:', ['class' => 'control-label']) !!}
        <div id="observaciones" class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->observaciones}}
        </div>
        <p class="text-right">{{strlen($todoxxxx['modeloxx']->observaciones)}}/4000</p>
    </div>
    <div class="form-group col-md-12">
        @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('user_contdili_id', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">

            {{$todoxxxx['modeloxx']->user_contdili->s_documento}}-{{$todoxxxx['modeloxx']->user_contdili->name}}
        </div>
    </div>
    <div class="form-group col-md-6">

        {!! Form::label('user_funcontr_id', 'FUNCIONARIO (A)/ CONTRATISTA QUIEN DILIGENCIA:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
        <?php
            $document = '';
            $nombrexx = '';
            $usercont = $todoxxxx['modeloxx']->user_contdili;
            if (!is_null($usercont)) {
                $document = $usercont->s_documento;
                $nombrexx = $usercont->name;
            }

            ?>
        {{ $document}}-{{$nombrexx}}
        </div>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('respoupi_id', 'VISTO BUENO RESPONSABLE / ENCARGADO:', ['class' => 'control-label']) !!}
        <div class="form-control form-control-sm">
            {{$todoxxxx['modeloxx']->respoupi->s_documento}}-{{$todoxxxx['modeloxx']->respoupi->name}}
        </div>
    </div>
    @include('layouts.registro')
</div>
