<div class="card">
  <div class="card-header p-2">
    <ul class="nav nav-tabs">
      
      @canany(['inindividual-leer', 'inindividual-crear', 'inindividual-editar', 'inindividual-borrar'])
      <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='graficos') ?' active' : '' }} 
      text-sm" href="{{ route('ind.individual.ver', $todoxxxx['datobasi']->id) }}">Grafico</a></li>
      @endcanany
      @canany(['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'])
      <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='diagnostico') ?' active' : '' }} 
      text-sm" href="{{ route('ind.individual.diag', $todoxxxx['datobasi']->id) }}">Diagnóstico</a></li>
      @endcanany
      
      @canany(['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'])
      <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='gestion') ?' active' : '' }} 
      text-sm" href="{{ route('ind.individual.gest', $todoxxxx['datobasi']->id) }}">Acciones de gestión</a></li>
      @endcanany
      @canany(['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'])
      <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='seguimiento') ?' active' : '' }} 
      text-sm" href="{{ route('ind.individual.segu', $todoxxxx['datobasi']->id) }}">Valoración Seguimiento</a></li>
      @endcanany
      @canany(['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'])
      <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='evolucion') ?' active' : '' }} 
      text-sm" href="{{ route('ind.individual.evol', $todoxxxx['datobasi']->id) }}">Valoración Evolución</a></li>
      @endcanany
      {{-- @canany(['fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar'])
      <li class="nav-item"><a class="nav-link{{ ($todoxxxx['slotxxxx']=='afirmante') ?' active' : '' }} 
      text-sm" href="{{ route('ind.individual.afir', $todoxxxx['datobasi']->id) }}">Acciones Afirmantes</a></li>
      @endcanany --}}
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
      @if(isset($graficos))
      {{ $graficos }}
      @endif
      @if(isset($diagnostico))
      {{ $diagnostico }}
      @endif
       @if(isset($inicial))
      {{ $inicial }}
      @endif
     
       @if(isset($gestion))
      {{ $gestion }}
      @endif 

       @if(isset($seguimiento))
      {{ $seguimiento }}
      @endif 
      @if(isset($evolucion))
      {{ $evolucion }}
      @endif 
      {{-- @if(isset($afirmante))
      {{ $afirmante }}
      @endif --}}
      
      </div>
    </div>
  </div>
</div>