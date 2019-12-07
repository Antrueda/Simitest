@if ($todoxxxx['datobasi']->prm_poblacion_id == 650)
    @include('FichaIngreso.actividades.formulario.formulariochc')
@else
    @include('FichaIngreso.actividades.formulario.formulariorhc')
@endif