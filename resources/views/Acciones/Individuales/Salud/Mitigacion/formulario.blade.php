<div class="card card-outline card-secondary">
    <div class="card-header">
        <div class="row">
            <div class="col-md">
                NOMBRE: {{ $nnaj->nombre_completo }}
            </div>
            <div class="col-md">
                TIPO DOCUMENTO: {{ $nnaj->tipoDocumento->nombre }}
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
                DIRECCIÓN:
                {{$dato->FiResidencia!=null ? $dato->FiResidencia->direccion : '' }}
            </div>
            <div class="col-md">
                TELÉFONO:
                {{$dato->FiResidencia!=null ? $dato->FiResidencia->telefonos : '' }}
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
        <ul class="nav nav-tabs">
            @canany(['vspa-leer', 'vspa-crear', 'vspa-editar', 'vspa-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Vspa') ?' active' : '' }}" href="{{ route('mitigacion.vspa', $dato->id) }}">Valoración del Riesgo por Consumir SPA</a>
                </li>
            @endcanany
            @canany(['vma-leer', 'vma-crear', 'vma-editar', 'vma-borrar'])
                <li class="nav-item text-sm">
                    <a class="nav-link{{ ($accion=='Vma') ?' active' : '' }}" href="{{ route('mitigacion.vma', $dato->id) }}">Valoración Medicina Alternativa</a>
                </li>
            @endcanany
        </ul>
    </div>
    @if($accion=='Vspa')
        @include('Salud.Mitigacion.Vspa.index')
    @elseif($accion=='Vma')
        @include('Salud.Mitigacion.Vma.index')
    @endif
</div>
