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
        <a class="nav-link {{$todoxxxx['pestania']['valoraci'][0]}}
                {{ $todoxxxx['pestania']['valoraci'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['valoraci'][2] }}">
          SEGUIMIENTO
          <span class="fas fa-check text-success" aria-hidden="true"></span>
        </a>
      </li>
      @endcanany
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
        @if(isset($valoraci))
        {{ $valoraci }}
        @endif
      </div>
    </div>
  </div>
</div>