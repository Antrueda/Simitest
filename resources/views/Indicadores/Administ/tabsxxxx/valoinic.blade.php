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
        <a class="nav-link {{$todoxxxx['pestania']['nnajxxxx'][0]}}
                {{ $todoxxxx['pestania']['nnajxxxx'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['nnajxxxx'][2] }}">
          NNAJ
          <span class="fas fa-check text-success" aria-hidden="true"></span>
        </a>
      </li>
      @endcanany
      @canany(['area-leer', 'area-crear', 'area-editar', 'area-borrar'])
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['linebase'][0]}}
                {{ $todoxxxx['pestania']['linebase'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['linebase'][2] }}">
         LINEAS BASE
          <span class="fas fa-check text-success" aria-hidden="true"></span>
        </a>
      </li>
      @endcanany
      @canany(['area-leer', 'area-crear', 'area-editar', 'area-borrar'])
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['valoinic'][0]}}
                {{ $todoxxxx['pestania']['valoinic'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['valoinic'][2] }}">
         VALORACI&Oacute;N INICIAL
          <span class="fas fa-check text-success" aria-hidden="true"></span>
        </a>
      </li>
      @endcanany
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
        @if(isset($nnajxxxx))
        {{ $nnajxxxx }}
        @endif
        @if(isset($linebase))
        {{ $linebase }}
        @endif
        @if(isset($valoinic))
        {{ $valoinic }}
        @endif

      </div>
    </div>
  </div>
</div>
