<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link text-sm" href="{{ route('area') }}">
      ÁREAS<span class="fas fa-check text-success" aria-hidden="true"></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-sm" href="{{ route('in.indicador', ['areaxxxx'=>$area->id]) }}">
      INDICADORES<span class="fas fa-check text-success" aria-hidden="true"></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-sm" href="{{ route('lbf.basefuente', ['padrexxx'=>$indicador_id]) }}">
      LÍNEA BASE<span class="fas fa-check text-success" aria-hidden="true"></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-sm" href="{{ route('bd.basedocumen', ['padrexxx'=>$linea_base_id]) }}">
      DOCUMENTO FUENTE<span class="fas fa-check text-success" aria-hidden="true"></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-sm" href="{{ route('inligru', ['padrexxx'=>$documento_id]) }}">
      GRUPO-LÍNEA BASE<span class="fas fa-check text-success" aria-hidden="true"></span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-sm" href="{{ route('grupregu', ['padrexxx'=>$ligru_id]) }}">
      PREGUNTAS<span class="fas fa-check text-success" aria-hidden="true"></span>
    </a>
  </li>
  <li class="nav-item ">
    <a class="nav-link disabled text-sm" href="">
      RESPUESTAS<span class="fas fa-check text-danger" aria-hidden="true"></span>
    </a>
  </li>
</ul>