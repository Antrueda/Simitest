<div class="card">
  <div class="card-header">
    <h1>
      {{ $todoxxxx['cardheap']}}
    </h1>

  </div>
  <div class="card-header p-2">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['areaxxxx'][0]}}
        {{ $todoxxxx['pestania']['areaxxxx'][3]}} text-sm" href="
        {{ $todoxxxx['pestania']['areaxxxx'][2] }}">
          DIAGNÓSTICO
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['nnajxxxx'][0]}}
        {{ $todoxxxx['pestania']['nnajxxxx'][3]}} text-sm" href="
        {{ $todoxxxx['pestania']['nnajxxxx'][2] }}">
          VALORACIÓN INICIAL
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['accigest'][0]}}
        {{ $todoxxxx['pestania']['accigest'][3]}} text-sm" href="
        {{ $todoxxxx['pestania']['accigest'][2] }}">
          ACCIONES GESTIÓN
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{$todoxxxx['pestania']['valosegu'][0]}}
        {{ $todoxxxx['pestania']['valosegu'][3]}} text-sm" href="
        {{ $todoxxxx['pestania']['valosegu'][2] }}">
          VALORACIÓN
        </a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">
      @if($todoxxxx['pestania']['areaxxxx'][5])
      @include('Indicadores.Admin.tabsxxxx.diagnost')
      @endif
      @if($todoxxxx['pestania']['nnajxxxx'][5])
      @include('Indicadores.Admin.tabsxxxx.valoinic')
      @endif
      @if($todoxxxx['pestania']['accigest'][5])
      @include('Indicadores.Admin.tabsxxxx.accigest')
      @endif
      @if($todoxxxx['pestania']['valosegu'][5])
      @include('Indicadores.Admin.tabsxxxx.valoraci')
      @endif
    </div>
  </div>
</div>
