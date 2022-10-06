<?php

use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorFactor;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdEntorno;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdFactore;
use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdSintoma;

class VsrrdSintomasFactoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sintomas de os estados de ansiedad
        VsrrdSintoma::create(['nombre' => 'Estado de ánimo ansioso', 'descripcion' => 'Preocupaciones, anticipación de lo peor, aprensión (anticipación temerosa), irritabilidad', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Tensión', 'descripcion' => 'Sensación de tensión, imposibilidad de relajarse, reacciones con sobresalto, llanto fácil, temblores, sensación de inquietud. ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Temores', 'descripcion' => 'A la oscuridad, a los desconocidos, a quedarse solo, a los animales grandes, al tráfico, a las multitudes.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Insomnio', 'descripcion' => 'Dificultad para dormirse, sueño interrumpido, sueño insatisfactorio y cansancio al despertar', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Intelectual (cognitivo)', 'descripcion' => 'Dificultad para concentrarse, mala memoria.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Estado de ánimo deprimido', 'descripcion' => 'Pérdida de interés, insatisfacción en las diversiones, depresión, despertar prematuro, cambios de humor durante el día. ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Somáticos generales (musculares)', 'descripcion' => 'Dolores y molestias musculares, rigidez muscular, contracciones musculares, sacudidas crónicas, crujir de dientes, voz temblorosa.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Somáticos generales (sensoriales)', 'descripcion' => 'Zumbidos de oídos, visión borrosa, sofocos y escalofríos, sensación de debilidad, sensación de hormigueo.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Cardiovasculares', 'descripcion' => 'Taquicardia, palpitaciones, dolor en el pecho, latidos vaculares, sensación de desmayo, extrasístole.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Respiratorios', 'descripcion' => 'Operación o constricción en el pecho, sensación de ahogo, suspiros, disnea.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Gastrointestinales', 'descripcion' => 'Dificultad para tragar, gases, dispepsia: dolor antes y despues de comer, sansación de ardor, sensación de estómago lleno, vómitos acuosos, vómitos, sensación de estómago vacío, digestión lenta, borborigmos (ruido intestinal), diarrea, pérdida de peso, estreñimiento.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Genitourinarios', 'descripcion' => 'Micción frecuente,micción urgente, amenorrea, menorragia, aparición de la frigidez, eyaculación precoz, ausencia de erección, impotencia. ', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Síntomas Autónomos', 'descripcion' => 'Boca seca, rubor, palidez, tendencia a sudar, vértigos, cefaleas de tensión piloerección (pelos de punta).', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdSintoma::create(['nombre' => 'Comportamiento en la entrevista (general y fisiológico)', 'descripcion' => 'Tenso, no relajado, agitación nerviosa: manos, dedos cogidos, apretados, tics, enrollar un pañuelo; inquietud; pasearse de un lado a otro, temblor de manos, ceño fruncido, cara tirante, aumento del tono muscular, suspiros, palidez facial. Tragar saliva, eructar, taquicardia de reposo, frecuencia respiratoria por encima de 20 res/min, sacudidas enérgicas de tendones, temblor, pupilas dilatadas, exoftalmos (proyección anormal del globo del ojo), sudor, tics en los párpados.', 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //ENTORNOS
        VsrrdEntorno::create(['nombre' => 'Hogar/Familiar', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorno::create(['nombre' => 'Educativo', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorno::create(['nombre' => 'Comunitario/Social', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorno::create(['nombre' => 'Virtual', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorno::create(['nombre' => 'Laboral', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorno::create(['nombre' => 'Institucional', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //FACTORES
        VsrrdFactore::create(['nombre' => 'Antecedentes de Habitabilidad de Calle', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Antecedentes Familiares de consumo de SPA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Dificultades en la dinámica familiar', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Relaciones de pareja asociadas a consumo de SPA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Violencia Intrafamiliar', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Ninguna de las anteriores', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Acoso o violencia escolar', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Consumo de SPA por influencia del contexto', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Deserción', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Repitencia y extraedad escolar ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Consumo de SPA por influencia del contexto Cultural', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Consumo de SPA   por influencia del contexto Barrial', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Consumo de SPA asociado con población que tiene conflicto con la ley', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Habitabilidad en calle', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Permanencia en calle', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Pobreza', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Diversidad de Información relacionada con las SPA no siempre verídica', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Influencia de consumo por parte de creadores de contenido', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Accesibilidad a cualquier tipo de SPA ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Acoso laboral', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Débil manejo de la administración del dinero', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Estrés o presión laboral', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Desempleo', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Desconocimiento de oferta interinstitucional ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Desconocimiento de rutas integrales de atención ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Falta de oportunidades y articulación de procesos', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Acción con daño dentro de las dinámicas institucionales de las UPIS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Procesos Institucionales (PARD)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Procesos Institucionales (SRPA)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdFactore::create(['nombre' => 'Procesos Institucionales (SPOA)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //ASOCIAR ENTORNOS FACTORES
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 1, 'vsrrd_factor_id' => 1, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 1, 'vsrrd_factor_id' => 2, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 1, 'vsrrd_factor_id' => 3, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 1, 'vsrrd_factor_id' => 4, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 1, 'vsrrd_factor_id' => 5, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 1, 'vsrrd_factor_id' => 6, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 2, 'vsrrd_factor_id' => 7, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 2, 'vsrrd_factor_id' => 8, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 2, 'vsrrd_factor_id' => 9, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 2, 'vsrrd_factor_id' => 10, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 2, 'vsrrd_factor_id' => 6, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 11, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 12, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 13, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 14, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 15, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 16, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 3, 'vsrrd_factor_id' => 6, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 4, 'vsrrd_factor_id' => 17, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 4, 'vsrrd_factor_id' => 18, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 4, 'vsrrd_factor_id' => 19, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 4, 'vsrrd_factor_id' => 6, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 5, 'vsrrd_factor_id' => 20, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 5, 'vsrrd_factor_id' => 21, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 5, 'vsrrd_factor_id' => 22, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 5, 'vsrrd_factor_id' => 23, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 5, 'vsrrd_factor_id' => 6, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 24, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 25, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 26, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 27, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 28, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 29, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 30, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VsrrdEntorFactor::create(['vsrrd_entorno_id' => 6, 'vsrrd_factor_id' => 6, 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
    }
}
