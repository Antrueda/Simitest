<table>
    <thead>
        <tr>
            @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionHead')
            <th>1.5 Edad</th>
            <th>1.6 Pais de Nacimiento</th>
            <th>1.6a Departamento de Nacimiento</th>
            <th>1.6b Municipio de Nacimiento</th>
            <th>1.7 Sexo de Nacimiento</th>
            <th>1.8 Identidad de Genero</th>
            <th>1.9 Orientacion Sexual</th>
            <th>1.11 Documento con el cual se identifica</th>
            <th>1.12 ¿Cuenta con el documento físico?</th>
            <th>1.15 ¿Tiene definida su situación militar?</th>
            <th>1.16 Estado Civil</th>
            <th>1.17 ¿Con cuál grupo étnico se reconoce?</th>
            <th>1.19 Lugar de Focalización</th>
            <th>1.19(a) Nombre Focalización</th>
            <th>1.19(b) Localidad</th>
            <th>1.19(c) Barrio</th>
            <th>1.19(d) UPZ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                @include('administracion.Reportes.Proyectos.export.CaminandoRelajado.datosDeIdentificacionBody')
                {{-- ** INFORMACIÓN BASICA ** --}}
                {{-- 1.5 Edad --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->edad ?? 'Sin dato' }}</td>
                {{-- 1.6 Pais de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->sis_municipio->sis_departam->sis_pai->s_pais ?? 'Sin dato' }}</td>
                {{-- 1.6a Departamento de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->sis_municipio->sis_departam->s_departamento ?? 'Sin dato' }}</td>
                {{-- 1.6b Municipio de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->sis_municipio->s_municipio ?? 'Sin dato' }}</td>
                {{-- 1.7 Sexo de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sexo->prmSexo->nombre ?? 'Sin dato' }}</td>
                {{-- 1.8 Identidad de Genero --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sexo->prmIdeGenero->nombre ?? 'Sin dato' }}</td>
                {{-- 1.9 Orientacion Sexual --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sexo->prmOriSexual->nombre ?? 'Sin dato' }}</td>
                {{-- 1.11 Documento con el cual se identifica --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->tipoDocumento->nombre ?? 'Sin dato' }}</td>
                {{-- 1.12 ¿Cuenta con el documento físico? --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->docFisico->nombre ?? 'Sin dato' }}</td>
                {{-- 1.15 ¿Tiene definida su situación militar? --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sit_mil->prm_situacion_militar->nombre ?? 'Sin dato' }}</td>
                {{-- 1.16 Estado Civil --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_fi_csd->prmEstadoCivil->nombre ?? 'Sin dato' }}</td>
                {{-- 1.17 ¿Con cuál grupo étnico se reconoce? --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_fi_csd->prmEtnia->nombre ?? 'Sin dato' }}</td>
                {{-- 1.19 Lugar de Focalización --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->s_lugar_focalizacion ?? 'Sin dato' }}</td>
                {{-- 1.19(a) Nombre Focalización --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->s_nombre_focalizacion ?? 'Sin dato' }}</td>
                {{-- 1.19(b) Localidad --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->sis_upzbarri->sis_localupz->sis_localidad->s_localidad ?? 'Sin dato' }}</td>
                {{-- 1.19(c) Barrio --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->sis_upzbarri->sis_barrio->s_barrio ?? 'Sin dato' }}</td>
                {{-- 1.19(d) UPZ --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->sis_upzbarri->sis_localupz->sis_upz->s_upz ?? 'Sin dato' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
