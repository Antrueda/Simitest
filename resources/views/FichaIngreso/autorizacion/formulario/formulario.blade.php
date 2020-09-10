@if ($todoxxxx['edadxxxx']>=18)
  @include('FichaIngreso.Autorizacion.formulario.mayor')
@else
  @include('FichaIngreso.Autorizacion.formulario.menor')  
@endif