<div class="form-row">
    @include('Acciones.Grupales.Asistencias.Diaria.Nnajasdi.Formulario.formular')



    

    <div class="form-group col-md-4">
        {!! Form::label('user_edita_id', 'Novedad u Observación:', ['class' => 'control-label']) !!}
        <div id="prm_novedadx_id" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->prmNovedadx->nombre }}
        </div>

        <div class="form-group col-md-4">
        {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
       
    </div>
    
    <div class="form-group col-md-4">
        {!! Form::label('actividade_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('actividade_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
       
        </div>    
</div>