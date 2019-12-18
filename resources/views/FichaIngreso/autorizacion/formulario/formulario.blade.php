@if ($todoxxxx['edadxxxx']>=18)
  @include('FichaIngreso.autorizacion.formulario.mayor')
@else
  @include('FichaIngreso.autorizacion.formulario.menor')  
@endif