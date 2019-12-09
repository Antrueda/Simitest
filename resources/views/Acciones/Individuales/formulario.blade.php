<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md">
                NOMBRE:
                {{ $nnaj->nombre_completo }}
            </div>
            <div class="col-md">
                TIPO DE DOCUMENTO: {{ $nnaj->tipoDocumento->nombre }}
            </div>
            <div class="col-md">
                DOCUMENTO: {{ $nnaj->s_documento }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                FECHA DE NACIMIENTO: {{ $nnaj->d_nacimiento }}
            </div>
            <div class="col-md">
                EDAD: {{ $nnaj->edad }} años
            </div>
            <div class="col-md">
                SEXO NACIMIENTO: {{ $nnaj->sexo->nombre }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                DIRECCIÓN: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('activo', 1)->sortByDesc('id')->first()->direccion : '' }}
            </div>
            <div class="col-md">
                TELÉFONO: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('activo', 1)->sortByDesc('id')->first()->telefonos : '' }}
            </div>
            <div class="col-md">
                NOMBRE IDENTITARIO: {{ $nnaj->s_nombre_identitario }}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                TIPO POBLACIÓN: {{ $nnaj->poblacion->nombre }}
            </div>
        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'SalidaMayores' || $accion == 'Evasion' || $accion == 'SalidaMenores' || $accion == 'RetornoSalida') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Salidas y permisos</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'SalidaMayores') ?' active' : '' }}" href="{{ route('ai.salidamayores', $dato->id) }}">Salida de Jóvenes Mayores de Edad</a>
                    <a class="dropdown-item{{ ($accion == 'Evasion') ?' active' : '' }}" href="{{ route('ai.evasion', $dato->id) }}">Reporte de Evasión</a>
                    <a class="dropdown-item{{ ($accion == 'SalidaMenores') ?' active' : '' }}" href="{{ route('ai.salidamenores', $dato->id) }}">Salidas y permisos con acompañamiento y/o representante legal</a>
                    <a class="dropdown-item{{ ($accion == 'RetornoSalida') ?' active' : '' }}" href="{{ route('ai.retornosalida', $dato->id) }}">Retorno de salidas y permisos con acudiente y/o representante legal</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ ($accion == 'Vspa' || $accion == 'Vma') ?' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mitigación</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item{{ ($accion == 'Vspa') ?' active' : '' }}" href="{{ route('mitigacion.vspa', $dato->id) }}">Valoración del Riesgo por Consumo de SPA</a>
                    <a class="dropdown-item{{ ($accion == 'Vma') ?' active' : '' }}" href="{{ route('mitigacion.vma', $dato->id) }}">Valoración Medicina Alternativa</a>
                </div>
            </li>
        </ul>
    </div>
</div>
@if($accion == 'SalidaMayores')
    @include('Acciones.Individuales.SalidaMayores.index')
@elseif($accion == 'Evasion')
    @include('Acciones.Individuales.Evasion.index')
@elseif($accion == 'SalidaMenores')
    @include('Acciones.Individuales.SalidaMenores.index')
@elseif($accion == 'RetornoSalida')
    @include('Acciones.Individuales.RetornoSalida.index')
@elseif($accion == 'Vspa')
    @include('Acciones.Individuales.Salud.Mitigacion.Vspa.index')
@elseif($accion == 'Vma')
    @include('Acciones.Individuales.Salud.Mitigacion.Vma.index')
@endif