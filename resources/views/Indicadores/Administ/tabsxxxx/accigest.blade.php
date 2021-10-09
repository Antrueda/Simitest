<div class="card">
  <div class="card-header">
    <h1>
      {{ $todoxxxx['cardhead']}}
    </h1>
  </div>
  <div class="card-header p-2">
    <ul class="nav nav-tabs">
      @canany(['area-leer', 'area-crear', 'area-editar', 'area-borrar'])
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['activida'][0]}}
                {{ $todoxxxx['pestania']['activida'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['activida'][2] }}">
          ACTIVIDAD
          <span class="fas fa-check text-success" aria-hidden="true"></span>
        </a>
      </li>
      @endcanany
      @canany(['area-leer', 'area-crear', 'area-editar', 'area-borrar'])
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['actifuen'][0]}}
                {{ $todoxxxx['pestania']['actifuen'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['actifuen'][2] }}">
          FUENTE SOPORTE DE ACTIVIDADES
          <span class="fas fa-check text-success" aria-hidden="true"></span>
        </a>
      </li>
      @endcanany
     
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
        @if(isset($activida))
        {{ $activida }}
        @endif
        @if(isset($actifuen))
        {{ $actifuen }}
        @endif        
      </div>
    </div>
  </div>
</div>