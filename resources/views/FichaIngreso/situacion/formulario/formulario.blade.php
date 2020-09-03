@if ($todoxxxx['usuariox']->prm_tipoblaci_id==650)
    @include('FichaIngreso.situacion.formulario.habitante')
@else
    @include('FichaIngreso.situacion.formulario.riesgo')
@endif
