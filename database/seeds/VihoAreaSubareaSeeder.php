<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihSubarea;

class VihoAreaSubareaSeeder extends Seeder
{
    public function run()
    {
        // areas
        VihArea::create(['nombre' => 'MOTORA','descripcion' => 'MOTORA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihArea::create(['nombre' => 'SENSORIAL','descripcion' => 'SENSORIAL', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihArea::create(['nombre' => 'COGNITIVA','descripcion' => 'COGNITIVA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihArea::create(['nombre' => 'HABILIDADES ESCOLARES BÁSICAS','descripcion' => 'HABILIDADES ESCOLARES BÁSICAS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihArea::create(['nombre' => 'EMOCIONAL ','descripcion' => 'EMOCIONAL ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

          //subareas
        VihSubarea::create(['nombre' => 'MOTOR GRUESO','descripcion' => 'MOTOR GRUESO', 'vih_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'MOTOR FINO','descripcion' => 'MOTOR FINO', 'vih_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'PROPIOCEPCIÓN','descripcion' => 'PROPIOCEPCIÓN', 'vih_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'VESTIBULAR','descripcion' => 'VESTIBULAR', 'vih_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VihSubarea::create(['nombre' => 'VISUAL','descripcion' => 'VISUAL', 'vih_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'GUSTO Y OLFATO','descripcion' => 'GUSTO Y OLFATO', 'vih_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'AUDITIVA','descripcion' => 'AUDITIVA', 'vih_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'COMUNICACIÓN Y DEL LENGUAJE','descripcion' => 'COMUNICACIÓN Y DEL LENGUAJE', 'vih_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VihSubarea::create(['nombre' => 'MEMORIA VISUAL','descripcion' => 'MEMORIA VISUAL', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'ATENCIÓN','descripcion' => 'ATENCIÓN', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'COMPRENSIÓN','descripcion' => 'COMPRENSIÓN', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'MEMORIA AUDITIVA','descripcion' => 'MEMORIA AUDITIVA', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'ANÁLISIS DE LA INFORMACIÓN','descripcion' => 'ANÁLISIS DE LA INFORMACIÓN', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'RESOLUCIÓN DE PROBLEMAS','descripcion' => 'RESOLUCIÓN DE PROBLEMAS', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'ORIENTACIÓN TEMPORO ESPACIAL','descripcion' => 'ORIENTACIÓN TEMPORO ESPACIAL', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'CONCENTRACIÓN','descripcion' => 'CONCENTRACIÓN', 'vih_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VihSubarea::create(['nombre' => 'ESCRITURA','descripcion' => 'ESCRITURA', 'vih_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'COMPRENSIÓN DE INFORMACIÓN','descripcion' => 'COMPRENSIÓN DE INFORMACIÓN', 'vih_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'RESOLUCIÓN DE OPERACIONES MATEMÁTICAS BÁSICAS','descripcion' => 'RESOLUCIÓN DE OPERACIONES MATEMÁTICAS BÁSICAS', 'vih_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'LECTURA','descripcion' => 'LECTURA', 'vih_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'HABILIDADES LÓGICO MATEMÁTICAS (SECUENCIACIÓN, CATEGORIZACIÓN, ETC)','descripcion' => 'HABILIDADES LÓGICO MATEMÁTICAS (SECUENCIACIÓN, CATEGORIZACIÓN, ETC)', 'vih_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VihSubarea::create(['nombre' => 'EXPRESIÓN DE SENTIMIENTOS Y EMOCIONES','descripcion' => 'EXPRESIÓN DE SENTIMIENTOS Y EMOCIONES', 'vih_area_id' =>5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'RELACIONES FIGURAS DE AUTORIDAD','descripcion' => 'RELACIONES FIGURAS DE AUTORIDAD', 'vih_area_id' =>5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'RESOLUCIÓN DE CONFLICTOS','descripcion' => 'RESOLUCIÓN DE CONFLICTOS', 'vih_area_id' =>5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'AUTOCONCEPTO','descripcion' => 'AUTOCONCEPTO', 'vih_area_id' =>5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VihSubarea::create(['nombre' => 'RELACIONES INTERPERSONALES (PARES)','descripcion' => 'RELACIONES INTERPERSONALES (PARES)', 'vih_area_id' =>5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

    }
}
