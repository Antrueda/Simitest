<div class="form-row">
    @include('Acciones.Grupales.Asistencias.Diaria.Nnajasdi.Formulario.formular')
    <div class="form-group col-md-4">
        {!! Form::label('user_edita_id', 'Novedad u Observación:', ['class' => 'control-label']) !!}
        <div id="prm_novedadx_id" class="form-control form-control-sm">
            {{ $todoxxxx['modeloxx']->prmNovedadx->nombre }}
        </div>
    </div>
</div>