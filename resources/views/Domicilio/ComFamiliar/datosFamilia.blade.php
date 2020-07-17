<div class="table-responsive pt-2">
  <table id="tabla" class="table table-bordered table-striped table-hover table-sm">
    <thead>
      <tr class="text-center">
        <th>Nº</th>
        <th rowspan="2">Acciones</th>
        <th>7.1 Primer Apellido</th>
        <th>7.2 Segundo Apellido</th>
        <th>7.3 Primero Nombre</th>
        <th>7.4 Segundo Nombre</th>
        <th>7.5 Segundo Identitario</th>
        <th>7.6 Tipo de Documento</th>
        <th>7.7 Número del Documento</th>
        <th>7.8 Edad</th>
        <th>7.9</th>
        <th>7.10</th>
        <th>7.11</th>
        <th>7.12</th>
        <th colspan="2">7.13</th>
        <th>7.14</th>
        <th>7.15</th>
        <th>7.16</th>
        <th>7.17</th>
        <th>7.18</th>
        <th>7.19</th>
        <th >7.20</th>
        <th>Tiene Sisben</th>
        <th>7.21</th>
        <th>7.22</th>
        <th>7.23</th>
        <th>7.24</th>
        <th>7.25</th>
        <th>7.26</th>
        <th>7.27</th>
        <th>7.28</th>
        <th>7.29</th>
        <th>7.30</th>
        <th>7.31</th>
      </tr>
    </thead>
    <tbody>
      @if($valord)
        @foreach($valord as $k => $d)
        <tr>
          <td>{{ $k+1 }}</td>
          <td>
            {!! Form::open(['route' => ['CSD.comfamiliar.familiar.borrar', $d->csd_id, $d->id], 'method' =>'DELETE']) !!}
              <button class="btn btn-sm btn-danger">Eliminar</button>
            {!! Form::close() !!}
          </td>
          <td>{{ $d->primer_apellido }}</td>
          <td>{{ $d->segundo_apellido }}</td>
          <td>{{ $d->primer_nombre }}</td>
          <td>{{ $d->segundo_nombre }}</td>
          <td>{{ $d->identitario }}</td>
          <td>{{ $d->documentos->nombre }}</td>
          <td>{{ $d->documento }}</td>
          <td>{{ $d->edad }} AÑOS</td>
          <td>{{ $d->sexo->nombre }}</td>
          <td>{{ $d->estadoCivil->nombre }}</td>
          @if (!empty($d->genero->nombre))
            <td>{{ $d->genero->nombre }}</td>
          @else
            <td></td>
          @endif
          @if (!empty($d->sexual->nombre))
            <td>{{ $d->sexual->nombre }}</td>
          @else
            <td></td>
          @endif
          <td>{{ $d->grupoEtnico->nombre }}</td>
          @if (!empty($d->cualGrupo->nombre))
            <td>{{ $d->cualGrupo->nombre }}</td>
          @else
            <td></td>
          @endif
          <td>{{ $d->ocupacion->nombre }}</td>
          <td>{{ $d->parentezco->nombre }}</td>
          <td>{{ $d->convive->nombre }}</td>
          <td>{{ $d->visitado->nombre }}</td>
          <td>{{ $d->vinculacionActual->nombre }}</td>
          <td>{{ $d->vinculacionPasado->nombre }}</td>
          <td>{{ $d->regimen->nombre }}</td>
          @if (!empty($d->sexual->nombre))
            <td>{{ $d->eps->nombre }}</td>
          @else
            <td></td>
          @endif
          <td>{{ $d->sisben }}</td>
          <td>{{ $d->discapacidad->nombre }}</td>
          @if (!empty($d->cualDiscapacidad->nombre))
            <td>{{ $d->cualDiscapacidad->nombre }}</td>
          @else
            <td></td>
          @endif
          <td>{{ $d->pesoUno->nombre}}</td>
          <td>{{ $d->pesoDos->nombre }}</td>
          <td>{{ $d->sabeLeer->nombre }}</td>
          <td>{{ $d->sabeEscribir->nombre }}</td>
          <td>{{ $d->sabeOperaciones->nombre }}</td>
          <td>{{ $d->ultAprobado->nombre }}</td>
          <td>{{ $d->nivelEducacion->nombre }}</td>
          <td>{{ $d->estudiaActual->nombre }}</td>
        </tr>
        @endforeach
      @else
      <tr class="text-center">
        <td colspan="36">No hay datos disponibles</td>
      </tr>
      @endif
    </tbody>
  </table>
</div>
