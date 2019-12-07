@if ($todoxxxx['datobasi']->prm_poblacion_id==650)
    @include('FichaIngreso.situacion.formulario.habitante')
@else
    @include('FichaIngreso.situacion.formulario.riesgo')
@endif