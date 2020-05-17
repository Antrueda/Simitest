
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
              <a class="nav-link {{$todoxxxx['pestania']['areaxxxx'][0]}}
                {{ $todoxxxx['pestania']['areaxxxx'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['areaxxxx'][2] }}">
                ÁREAS
                <span class="fas fa-check text-{{$todoxxxx['pestania']['areaxxxx'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['indicador-leer', 'indicador-crear', 'indicador-editar', 'indicador-borrar'])
            <li class="nav-item">
              <a class="nav-link {{$todoxxxx['pestania']['indicado'][0]}}
                {{ $todoxxxx['pestania']['indicado'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['indicado'][2] }}">
                INDICADORES
                <span class="fas fa-check text-{{$todoxxxx['pestania']['indicado'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['inbasefuente-leer', 'inbasefuente-crear', 'inbasefuente-editar', 'inbasefuente-borrar'])
            <li class="nav-item">

              <a class="nav-link {{$todoxxxx['pestania']['basefuen'][0]}}
                {{ $todoxxxx['pestania']['basefuen'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['basefuen'][2] }}">
                LÍNEA BASE
                <span class="fas fa-check text-{{$todoxxxx['pestania']['basefuen'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['inbasedocumen-leer', 'inbasedocumen-crear', 'inbasedocumen-editar', 'inbasedocumen-borrar'])
            <li class="nav-item">
              <a class="nav-link {{$todoxxxx['pestania']['basedocu'][0]}}
                {{ $todoxxxx['pestania']['basedocu'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['basedocu'][2] }}">
                DOCUMENTO FUENTE
                <span class="fas fa-check text-{{$todoxxxx['pestania']['basedocu'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['indicador-leer', 'indicador-crear', 'indicador-editar', 'indicador-borrar'])
            <li class="nav-item">
              <a class="nav-link {{$todoxxxx['pestania']['linegrup'][0]}}
                {{ $todoxxxx['pestania']['linegrup'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['linegrup'][2] }}">
                GRUPO-LÍNEA BASE
                <span class="fas fa-check text-{{$todoxxxx['pestania']['linegrup'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['documentoFuente-leer', 'documentoFuente-crear', 'documentoFuente-editar', 'documentoFuente-borrar'])
            <li class="nav-item">
              <a class="nav-link {{$todoxxxx['pestania']['pregunta'][0]}}
                {{ $todoxxxx['pestania']['pregunta'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['pregunta'][2] }}">
                PREGUNTAS
                <span class="fas fa-check text-{{$todoxxxx['pestania']['pregunta'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['inrespuesta-leer', 'inrespuesta-crear', 'inrespuesta-editar', 'inrespuesta-borrar'])
            <li class="nav-item ">
              <a class="nav-link {{$todoxxxx['pestania']['respuest'][0]}}
                {{ $todoxxxx['pestania']['respuest'][3]}} text-sm" href="
                {{ $todoxxxx['pestania']['respuest'][2] }}">
                RESPUESTAS
                <span class="fas fa-check text-{{$todoxxxx['pestania']['respuest'][4]}}" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
           
            @if(isset($areaxxxx))
              {{ $areaxxxx }}
              @endif
              @if(isset($indicado))
              {{ $indicado }}
              @endif
              @if(isset($basefuen))
              {{ $basefuen }}
              @endif
              @if(isset($basedocu))
              {{ $basedocu }}
              @endif
              @if(isset($linegrup))
              {{ $linegrup }}
              @endif
              @if(isset($pregunta))
              {{ $pregunta }}
              @endif
              @if(isset($respuest))
              {{ $respuest }}
              @endif
              @if(isset($valoinic))
              {{ $valoinic }}
              @endif

            </div>
          </div>
        </div>
      </div>