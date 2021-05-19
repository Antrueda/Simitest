<table>
    <thead>
        <tr>
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

            <th>3.1 ¿Tiene lugar de residencia en dónde dormir?</th>
            <th>3.2 Tipo de residencia o lugar donde duerme</th>
            <th>3.3 La residencia es:</th>
            <th>3.5 Estrato socioeconómico</th>
            <th>3.6 Espacio donde parcha</th>
            <th>3.6A Nombre del espacio</th>
            <th>3.8 Localidad</th>
            <th>3.11 Barrio</th>
            {{-- <th>3.16 Condiciones del ambiente y riesgo cerca de la vivienda / lugar de focalización (Para CHC)</th> --}}

            <th>4.1 ¿Sabe leer?</th>
            <th>4.2 ¿Sabe escribir?</th>
            <th>4.3 ¿Sabe operaciones básicas matemáticas?</th>
            <th>4.4 ¿Actualmente estudia?</th>
            <th>4.5 ¿En qué jornada estudia?</th>
            <th>4.8 ¿Cuánto tiempo lleva sin estudiar?</th>
            <th>4.9 ¿Cuál es su último nivel de estudio?</th>
            <th>4.10 Último grado, modulo o semestre aprobado</th>
            <th>4.11 ¿Tiene certificado del último nivel de estudio alcanzado?</th>
            {{-- <th>4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON?</th> --}}

            <th>6.1 Estado de afiliación en Salud</th>
            <th>6.3 Puntaje Sisben</th>
            <th>6.4 ¿Tiene algún tipo de discapacidad?</th>
            <th>6.4 a) Indicar tipo</th>
            {{-- <th>6.4b</th> --}}
            {{-- <th>6.4c</th> --}}
            <th>6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas?</th>
            <th>6.9 ¿Presenta algún problema de salud?</th>
            <th>6.11 ¿Tiene hijos?</th>
            {{-- <th>6.12 Mencione los eventos médicos importantes</th> --}}
            <th>6.13 ¿Tiene conocimiento sobre métodos anticonceptivos?</th>
            <th>6.14 ¿Usa métodos anticonceptivos?</th>
            <th>6.15 ¿Cuál método?</th>
            <th>6.16 ¿Lo usa voluntariamente?</th>
            {{-- <th>6.17</th> --}}
            <th>6.18 ¿Cuántas comidas en promedio consume al día?</th>
            <th>6.19 ¿Por qué no consumió las 5 comidas diarias?</th>

            <th>8.1 ¿Cuánto tiempo al día permanece en la calle?</th>
            <th>8.2 ¿Cuántos días a la semana?</th>
            <th>8.3 ¿Qué actividades realiza en su tiempo libre?</th>
            <th>8.4 ¿Pertecene a algún grupo, parche u organización?</th>
            {{-- <th>8.4a</th> --}}
            <th>8.5 ¿Tiene acceso a recreación?</th>
            <th>8.6 ¿Tiene prácticas religiosas?</th>
            <th>8.7 ¿Cuál religión practica?</th>
            <th>8.8 Indique sacramentos hechos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sisNnajs as $sisNnaj)
            <tr>
                {{-- ** INFORMACIÓN BASICA ** --}}
                {{-- 1.5 Edad --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->edad }}</td>
                {{-- 1.6 Pais de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->sis_municipio->sis_departam->sis_pai->s_pais }}</td>
                {{-- 1.6a Departamento de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->sis_municipio->sis_departam->s_departamento }}</td>
                {{-- 1.6b Municipio de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_nacimi->sis_municipio->s_municipio }}</td>
                {{-- 1.7 Sexo de Nacimiento --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sexo->prmSexo->nombre }}</td>
                {{-- 1.8 Identidad de Genero --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sexo->prmIdeGenero->nombre }}</td>
                {{-- 1.9 Orientacion Sexual --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sexo->prmOriSexual->nombre }}</td>
                {{-- 1.11 Documento con el cual se identifica --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->tipoDocumento->nombre }}</td>
                {{-- 1.12 ¿Cuenta con el documento físico? --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_docu->docFisico->nombre }}</td>
                {{-- 1.15 ¿Tiene definida su situación militar? --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_sit_mil->prm_situacion_militar->nombre }}</td>
                {{-- 1.16 Estado Civil --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_fi_csd->prmEstadoCivil->nombre }}</td>
                {{-- 1.17 ¿Con cuál grupo étnico se reconoce? --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_fi_csd->prmEtnia->nombre }}</td>
                {{-- 1.19 Lugar de Focalización --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->s_lugar_focalizacion }}</td>
                {{-- 1.19(a) Nombre Focalización --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->s_nombre_focalizacion }}</td>
                {{-- 1.19(b) Localidad --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->sis_upzbarri->sis_localupz->sis_localidad->s_localidad }}</td>
                {{-- 1.19(c) Barrio --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->sis_upzbarri->sis_barrio->s_barrio }}</td>
                {{-- 1.19(d) UPZ --}}
                <td>{{ $sisNnaj->fi_datos_basico->nnaj_focali->sis_upzbarri->sis_localupz->sis_upz->s_upz }}</td>

                {{-- ** RESIDENCIA ** --}}
                @empty ($sisNnaj->FiResidencia)
                    {{-- 3.1 ¿Tiene lugar de residencia en dónde dormir? --}}
                    <td>{{ $sisNnaj->FiResidencia->i_prm_tiene_dormir->nombre  }}</td>
                    {{-- 3.2 Tipo de residencia o lugar donde duerme --}}
                    <td>{{ $sisNnaj->FiResidencia->i_prm_tipo_duerme->nombre }}</td>
                    {{-- 3.3 La residencia es: --}}
                    <td>{{ $sisNnaj->FiResidencia->i_prm_tipo_tenencia->nombre }}</td>
                    {{-- 3.5 Estrato socioeconómico --}}
                    <td>{{ $sisNnaj->FiResidencia->i_prm_estrato->nombre }}</td>
                    {{-- 3.6 Espacio donde parcha --}}
                    <td>{{ $sisNnaj->FiResidencia->i_prm_espacio_parcha->nombre }}</td>
                    {{-- 3.6A Nombre del espacio --}}
                    <td>{{ $sisNnaj->FiResidencia->s_nombre_espacio_parcha }}</td>
                    {{-- 3.8 Localidad --}}
                    <td>{{ $sisNnaj->FiResidencia->sis_barrio->sis_localupz->sis_localidad->s_localidad }}</td>
                    {{-- 3.11 Barrio --}}
                    <td>{{ $sisNnaj->FiResidencia->sis_barrio->sis_barrio->s_barrio }}</td>
                    {{-- 3.16 Condiciones del ambiente y riesgo cerca de la vivienda / lugar de focalización (Para CHC) --}}
                    <td>
                        @foreach ($sisNnaj->FiResidencia->fi_condicion_ambientes as $fi_condicion_ambiente)
                        {{ "{$fi_condicion_ambiente->i_prm_condicion_amb->nombre}, " }}
                        @endforeach
                    </td>
                @else
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif

                {{-- ** ESCUELA ** --}}
                @if(!is_null($sisNnaj->fi_formacions))
                    {{-- 4.1 ¿Sabe leer? --}}
                    <td>{{ $sisNnaj->fi_formacions->i_prm_lee->nombre }}</td>
                    {{-- 4.2 ¿Sabe escribir? --}}
                    <td>{{ $sisNnaj->fi_formacions->i_prm_escribe->nombre }}</td>
                    {{-- 4.3 ¿Sabe operaciones básicas matemáticas? --}}
                    <td>{{ $sisNnaj->fi_formacions->prm_operacio->nombre }}</td>
                    {{-- 4.4 ¿Actualmente estudia? --}}
                    <td>{{ $sisNnaj->fi_formacions->i_prm_estudia->nombre }}</td>
                    {{-- 4.5 ¿En qué jornada estudia? --}}
                    <td>{{ $sisNnaj->fi_formacions->prm_jornestu->nombre }}</td>
                    {{-- 4.8 ¿Cuánto tiempo lleva sin estudiar? --}}
                    <td>{{ "{$sisNnaj->fi_formacions->anosines} Año(s) - {$sisNnaj->fi_formacions->mesinest} Mes(es) - {$sisNnaj->fi_formacions->diasines} Dia(s)." }}</td>
                    {{-- 4.9 ¿Cuál es su último nivel de estudio? --}}
                    <td>{{ $sisNnaj->fi_formacions->prm_ultniest->nombre }}</td>
                    {{-- 4.10 Último grado, modulo o semestre aprobado --}}
                    <td>{{ $sisNnaj->fi_formacions->prm_ultgrapr->nombre }}</td>
                    {{-- 4.11 ¿Tiene certificado del último nivel de estudio alcanzado? --}}
                    <td>{{ $sisNnaj->fi_formacions->prm_cerulniv->nombre }}</td>
                    {{-- 4.12 ¿Cuáles son los motivos por los cuales desea vincularse al IDIPRON? --}}
                    <td>
                        @foreach ($sisNnaj->fi_formacions->fi_motivo_vinculacions as $fi_motivo_vinculacion)
                            {{ "{$fi_motivo_vinculacion->prm_motivinc->nombre}, " }}
                        @endforeach
                    </td>
                @else
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif

                {{-- ** SALUD ** --}}
                @if (!is_null($sisNnaj->fi_saluds))
                    {{-- 6.1 Estado de afiliación en Salud --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_regisalu->nombre }}</td>
                    {{-- 6.3 Puntaje Sisben --}}
                    <td>{{ $sisNnaj->fi_saluds->d_puntaje_sisben }}</td>
                    {{-- 6.4 ¿Tiene algún tipo de discapacidad? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_tiendisc->nombre }}</td>
                    {{-- 6.4 a) Indicar tipo --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_tipodisca->nombre }}</td>
                    {{-- 6.4.b) ¿La discapacidad fue producida en la comisión de algún acto ilegal? --}}
                    <td>
                        @foreach ($sisNnaj->fi_saluds->fi_discausas as $fi_discausa)
                            {{ "{$fi_discausa->prm_discausa->nombre}, " }}
                        @endforeach
                    </td>
                    {{-- 6.4 c) ¿Ha sido víctima de ataques con: --}}
                    <td>
                        @foreach ($sisNnaj->fi_saluds->fi_victataqs as $fi_victataq)
                            {{ "{$fi_victataq->prm_victataq->nombre}, " }}
                        @endforeach
                    </td>
                    {{-- 6.6 ¿Su nivel de discapacidad le permite independencia en la ejecución de sus actividades cotidianas? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_dispeind->nombre }}</td>
                    {{-- 6.9 ¿Presenta algún problema de salud? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_probsalu->nombre }}</td>
                    {{-- 6.11 ¿Tiene hijos? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_tienhijo->nombre }}</td>
                    {{-- 6.12 Mencione los eventos médicos importantes --}}
                    <td>
                        @foreach ($sisNnaj->fi_saluds->fi_eventos_medicos as $fi_eventos_medico)
                            {{ "{$fi_eventos_medico->prm_evenmedi->nombre}, " }}
                        @endforeach
                    </td>
                    {{-- 6.13 ¿Tiene conocimiento sobre métodos anticonceptivos? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_conometo->nombre }}</td>
                    {{-- 6.14 ¿Usa métodos anticonceptivos? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_usametod->nombre }}</td>
                    {{-- 6.15 ¿Cuál método? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_cualmeto->nombre }}</td>
                    {{-- 6.16 ¿Lo usa voluntariamente? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_usovolun->nombre }}</td>
                    {{--  --}}
                    {{-- 6.18 ¿Cuántas comidas en promedio consume al día? --}}
                    <td>{{ $sisNnaj->fi_saluds->i_comidas_diarias }}</td>
                    {{-- 6.19 ¿Por qué no consumió las 5 comidas diarias? --}}
                    <td>{{ $sisNnaj->fi_saluds->prm_razcicom->nombre }}</td>
                @else
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif

                {{-- ** GENERACIÓN DE INGRESOS ** --}}
                @if (!is_null($sisNnaj->fi_generacion_ingresos))
                    {{-- 7.1 ¿Que actividad realiza para generar ingresos? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_actgeing->nombre }}</td>
                    {{-- A.1 Mencione en qué trabaja --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->s_trabajo_formal }}</td>
                    {{-- B.1 (Si Indicó B. TRABAJO INFORMAL): --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_trabinfo->nombre }}</td>
                    {{-- C.1 (Si Indicó C. OTRAS ACTIVIDADES): --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_otractiv->nombre }}</td>
                    {{-- D.1 ¿Por qué no genera ingresos? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_razgeing->nombre }}</td>
                    {{-- 7.2 ¿En qué jornada genera los ingresos? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_jorgeing->nombre }}</td>
                    {{-- 7.3 ¿En qué días? --}}
                    <td>
                        @foreach ($sisNnaj->fi_generacion_ingresos->fi_dias_genera_ingresos as $fi_dias_genera_ingreso)
                            {{ "{$fi_dias_genera_ingreso->prm_diagener->nombre}, " }}
                        @endforeach
                    </td>
                    {{-- 7.4 ¿Con qué frecuencia recibe el ingreso por la actividad? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_frecingr->nombre }}</td>
                    {{-- 7.5 ¿Tipo de relación laboral? --}}
                    <td>{{ $sisNnaj->fi_generacion_ingresos->prm_tiprelab->nombre }}</td>
                @else
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                    <td>Sin evaluar</td>
                @endif
                    {{-- ** ACTIVIDADES DE TIEMPO LIBRE ** --}}
                    @if (!is_null($sisNnaj->fi_actividadestls))
                        {{-- 8.1 ¿Cuánto tiempo al día permanece en la calle? --}}
                        <td>{{ $sisNnaj->fi_actividadestls->i_horas_permanencia_calle }}</td>
                        {{-- 8.2 ¿Cuántos días a la semana? --}}
                        <td>{{ $sisNnaj->fi_actividadestls->i_dias_permanencia_calle }}</td>
                        {{-- 8.3 ¿Qué actividades realiza en su tiempo libre? --}}
                        <td>
                            @foreach ($sisNnaj->fi_actividadestls->fi_actividad_tiempo_libres as $fi_actividad_tiempo_libre)
                                {{ "{$fi_actividad_tiempo_libre->i_prm_actividad_tl->nombre}, " }}
                            @endforeach
                        </td>
                        {{-- 8.4 ¿Pertecene a algún grupo, parche u organización? --}}
                        <td>{{ $sisNnaj->fi_actividadestls->i_prm_pertenece_parche->nombre }}</td>
                        {{-- 8.4 A ¿Por las acciones en las cuales presuntamente está en conflicto con la ley ha actuado en: --}}
                        <td>
                            @foreach ($sisNnaj->fi_actividadestls->fi_acciones as $fi_accione)
                                {{ "{$fi_accione->prm_accione->nombre}, " }}
                            @endforeach
                        </td>
                        {{-- 8.5 ¿Tiene acceso a recreación? --}}
                        <td>{{ $sisNnaj->fi_actividadestls->i_prm_acceso_recreacion->nombre }}</td>
                        {{-- 8.6 ¿Tiene prácticas religiosas? --}}
                        <td>{{ $sisNnaj->fi_actividadestls->i_prm_practica_religiosa->nombre }}</td>
                        {{-- 8.7 ¿Cuál religión practica? --}}
                        <td>{{ $sisNnaj->fi_actividadestls->i_prm_religion_practica->nombre }}</td>
                        {{-- 8.8 Indique sacramentos hechos --}}
                        <td>
                            @foreach ($sisNnaj->fi_actividadestls->fi_sacramentos as $fi_sacramento)
                                {{ "{$fi_sacramento->prm_sacrhec->nombre}, " }}
                            @endforeach
                        </td>
                    @else
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                        <td>Sin evaluar</td>
                    @endif
            </tr>
        @endforeach
    </tbody>
</table>
