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
                DIRECCIÓN: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->direccion : '' }}
            </div>
            <div class="col-md">
                TELÉFONO: {{ count($dato->FiResidencia)>0 ? $dato->FiResidencia->where('sis_esta_id', 1)->sortByDesc('id')->first()->telefonos : '' }}
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
</div>