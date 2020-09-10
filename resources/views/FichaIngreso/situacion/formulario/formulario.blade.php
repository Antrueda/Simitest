@if ($todoxxxx['usuariox']->prm_tipoblaci_id==650)
    @include('FichaIngreso.Situacion.formulario.habitante')
@else
    @include('FichaIngreso.Situacion.formulario.riesgo')
@endif
