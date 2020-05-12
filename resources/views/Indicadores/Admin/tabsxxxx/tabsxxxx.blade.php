<div class="card">
  <div class="card-header">
    <h1>
      {{ $todoxxxx['cardheap']}}
    </h1>

  </div>
  <div class="card-header p-2">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link{{ ($todoxxxx['slotxxxy']=='diagnost') ?' active' : '' }} text-sm" href="{{ route('area.editar', $todoxxxx['parametr']) }}">
          DIAGNÓSTICO
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ ($todoxxxx['slotxxxy']=='area') ?' active' : '' }} text-sm" href="{{ route('area', $todoxxxx['parametr']) }}">
          ACCIONES GESTIÓN
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ ($todoxxxx['slotxxxy']=='area') ?' active' : '' }} text-sm" href="{{ route('area', $todoxxxx['parametr']) }}">
          VALORACIÓN SEGUIMIENTO
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ ($todoxxxx['slotxxxy']=='area') ?' active' : '' }} text-sm" href="{{ route('area', $todoxxxx['parametr']) }}">
          VALORACIÓN/EVOLUCIÓN
        </a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="tab-content">


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
              <a class="nav-link{{ ($todoxxxx['slotxxxx']=='area') ?' active' : '' }} text-sm" href="{{ route('area.editar', $todoxxxx['parametr']) }}">
                ÁREAS
              <span class="fas fa-check text-success" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['indicador-leer', 'indicador-crear', 'indicador-editar', 'indicador-borrar'])
            <li class="nav-item"><a class="nav-link {{$todoxxxx['pestania']['indicado'][0]}} {{ ($todoxxxx['slotxxxx']=='indicador') ?' active' : '' }} text-sm" href="{{$todoxxxx['pestania']['indicado'][1]==true? route('in.indicador', $todoxxxx['parametr']) :''}}">
                INDICADORES
                <span class="fas fa-times text-danger" aria-hidden="true"></span>
              </a>
              
            </li>
            @endcanany
            @canany(['inbasefuente-leer', 'inbasefuente-crear', 'inbasefuente-editar', 'inbasefuente-borrar'])
            <li class="nav-item"><a class="nav-link {{$todoxxxx['pestania']['linebase'][0]}}{{ ($todoxxxx['slotxxxx']=='inbasefuente') ?' active' : '' }} text-sm" href="{{ $todoxxxx['pestania']['linebase'][1]==true?route('lbf.basefuente', $todoxxxx['parametr']):'' }}">
                LÍNEA BASE
                <span class="fas fa-times text-danger" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany

            @canany(['inbasedocumen-leer', 'inbasedocumen-crear', 'inbasedocumen-editar', 'inbasedocumen-borrar'])
            <li class="nav-item"><a class="nav-link {{$todoxxxx['pestania']['docufuen'][0]}}{{ ($todoxxxx['slotxxxx']=='inbasedocumen') ?' active' : '' }} text-sm" href="{{ $todoxxxx['pestania']['docufuen'][1]==true?route('bd.basedocumen', $todoxxxx['parametr']):'' }}">
                DOCUMENTO FUENTE
                <span class="fas fa-times text-danger" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['indicador-leer', 'indicador-crear', 'indicador-editar', 'indicador-borrar'])
            <li class="nav-item"><a class="nav-link {{$todoxxxx['pestania']['grupoxxx'][0]}}{{ ($todoxxxx['slotxxxx']=='inligru') ?' active' : '' }} text-sm" href="{{ $todoxxxx['pestania']['grupoxxx'][1]==true?route('inligru', $todoxxxx['parametr']):'' }}">
                GRUPO-LÍNEA BASE
                <span class="fas fa-times text-danger" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['documentoFuente-leer', 'documentoFuente-crear', 'documentoFuente-editar', 'documentoFuente-borrar'])
            <li class="nav-item"><a class="nav-link {{$todoxxxx['pestania']['pregunta'][0]}}{{ ($todoxxxx['slotxxxx']=='pregunta') ?' active' : '' }} text-sm" href="{{ $todoxxxx['pestania']['pregunta'][1]==true?route('di.docindicador', $todoxxxx['parametr']):'' }}">
                PREGUNTAS
                <span class="fas fa-times text-danger" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
            @canany(['inrespuesta-leer', 'inrespuesta-crear', 'inrespuesta-editar', 'inrespuesta-borrar'])
            <li class="nav-item "><a class="nav-link {{$todoxxxx['pestania']['respuest'][0]}}  {{ ($todoxxxx['slotxxxx']=='respuest') ?' active' : '' }} text-sm" href="{{ $todoxxxx['pestania']['respuest'][1]==true?route('re.respuesta.pregresp', $todoxxxx['parametr']):'' }}">
                RESPUESTAS
                <span class="fas fa-times text-danger" aria-hidden="true"></span>
              </a>
            </li>
            @endcanany
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="{{ $todoxxxx['slotxxxx'] }}">
              @if(isset($area))
              {{ $area }}
              @endif
              @if(isset($indicador))
              {{ $indicador }}
              @endif
              @if(isset($inbasefuente))
              {{ $inbasefuente }}
              @endif
              @if(isset($inbasedocumen))
              {{ $inbasedocumen }}
              @endif
              @if(isset($inligru))
              {{ $inligru }}
              @endif
              @if(isset($pregunta))
              {{ $pregunta }}
              @endif
              @if(isset($respuest))
              {{ $respuest }}
              @endif

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>