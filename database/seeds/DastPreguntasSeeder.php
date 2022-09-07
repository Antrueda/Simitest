<?php

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastAccione;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPregunta;
use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\DastPuntaje;
use Illuminate\Database\Seeder;

class DastPreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DastPregunta::create(['pregunta' => '¿Alguna vez ha utilizado drogas o medicamentos por razones que no sean médicas?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Ha abusado de más de una droga o medicamento a la vez?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Es usted capaz de dejar de utilizar drogas cuando así lo desea?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Ha tenido "pérdidas de conocimiento", "lagunas mentales", desmayos, "ausencias" o "flashbacks" como resultado del uso de drogas?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Alguna vez se siente mal o culpable por utilizar o abusar de las drogas?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Alguna vez su pareja, padres, amigos o profesores se han quejado de su uso de drogas?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Alguna vez el uso o el abuso de drogas le ha creado problemas con su familia, pareja, amigos o profesores?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Se ha implicado en actividades ilegales con el fin de obtener drogas?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Alguna vez ha experimentado síntomas de abstinencia (sentirse enfermo) cuando dejó de usar drogas?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPregunta::create(['pregunta' => '¿Ha tenido problemas médicos como resultado de su uso de drogas (pérdida de la memoria, hepatitis, convulsiones, hemorragias, etc.)?', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

        DastAccione::create(['nombre' => 'Nada en este momento', 'descripcion' => 'Nada en este momento', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastAccione::create(['nombre' => 'Consejería', 'descripcion' => 'Consejería', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastAccione::create(['nombre' => 'Indagar más de consumo (VESPA)', 'descripcion' => 'Indagar más de consumo (VESPA)', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastAccione::create(['nombre' => 'Evaluación y diagnóstico', 'descripcion' => 'Evaluación y diagnóstico', 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

        DastPuntaje::create(['minimo' => 0, 'superior' => 0, 'grado_problema' => 'No reporta problemas', 'accion_id' => 1, 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPuntaje::create(['minimo' => 1, 'superior' => 2, 'grado_problema' => 'Nivel Bajo', 'accion_id' => 2, 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPuntaje::create(['minimo' => 3, 'superior' => 5, 'grado_problema' => 'Nivel moderado', 'accion_id' => 3, 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPuntaje::create(['minimo' => 6, 'superior' => 8, 'grado_problema' => 'Nivel sustancial', 'accion_id' => 4, 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        DastPuntaje::create(['minimo' => 9, 'superior' => 10, 'grado_problema' => 'Nivel severo', 'accion_id' => 4, 'estusuarios_id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    }
}
