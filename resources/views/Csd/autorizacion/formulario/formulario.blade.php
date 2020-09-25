@if ($todoxxxx['edadxxxx']>=18)
  @include('FichaIngreso.Autorizacion.Formulario.mayor')
@else
  @include('FichaIngreso.Autorizacion.Formulario.menor')
@endif
