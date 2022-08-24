<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioItem;


class FpoDesempenioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FpoDesempenioItem::create([ 'id'=>1, 'item_nombre'=>'Postura Bípeda','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>2, 'item_nombre'=>'Postura Sedente','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>3, 'item_nombre'=>'Posición de rodillas','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>4, 'item_nombre'=>'Posición de Cuclillas','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>5, 'item_nombre'=>'Caminar','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>6, 'item_nombre'=>'Subir (escaleras, rampas)','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>7, 'item_nombre'=>'Bajar (escaleras, rampas)','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>8, 'item_nombre'=>'Levantar pesos','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>9, 'item_nombre'=>'Transportar pesos','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>10, 'item_nombre'=>'Agacharse','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>11, 'item_nombre'=>'Inclinarse','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>12, 'item_nombre'=>'Alcanzar','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>13, 'item_nombre'=>'Halar','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>14, 'item_nombre'=>'Empujar','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>15, 'item_nombre'=>'Rapidez Motríz','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>16, 'item_nombre'=>'Equilibrio Estático','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>17, 'item_nombre'=>'Equilibrio Dinámico','categoria_id'=>null,'desempenio_id'=>1,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);


        FpoDesempenioItem::create([ 'id'=>18, 'item_nombre'=>'Enganche','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>19, 'item_nombre'=>'Agarres','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>20, 'item_nombre'=>'Pinzas','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>21, 'item_nombre'=>'Pinza Fina','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>22, 'item_nombre'=>'Uso de Ambas Manos','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>23, 'item_nombre'=>'Coordinación Ojo - Mano','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>24, 'item_nombre'=>'Coordinación Bimanual','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>25, 'item_nombre'=>'Coordinación Mano - Pie','categoria_id'=>null,'desempenio_id'=>2,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);


        FpoDesempenioItem::create([ 'id'=>26, 'item_nombre'=>'Percepción del Color','categoria_id'=>1,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>27, 'item_nombre'=>'Percepción de Formas','categoria_id'=>1,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>28, 'item_nombre'=>'Percepción de Tamaño','categoria_id'=>1,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>29, 'item_nombre'=>'Relaciones Espaciales','categoria_id'=>1,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>30, 'item_nombre'=>'Seguimiento visual en todos los planos','categoria_id'=>1,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>31, 'item_nombre'=>'Ubicación de Fuentes Sonoras','categoria_id'=>2,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>32, 'item_nombre'=>'Discriminación Auditiva','categoria_id'=>2,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>33, 'item_nombre'=>'Estereognosia','categoria_id'=>3,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>34, 'item_nombre'=>'Barognosia','categoria_id'=>3,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>35, 'item_nombre'=>'Tacto Superficial','categoria_id'=>3,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>36, 'item_nombre'=>'Percepción de Temperatura','categoria_id'=>3,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>37, 'item_nombre'=>'Percepción de olores o sabores','categoria_id'=>4,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>38, 'item_nombre'=>'Discriminación de olores o sabores','categoria_id'=>4,'desempenio_id'=>3,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);

        FpoDesempenioItem::create([ 'id'=>39, 'item_nombre'=>'Atención','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>40, 'item_nombre'=>'Concentración','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>41, 'item_nombre'=>'Comprensión','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>42, 'item_nombre'=>'Asociación de la información','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>43, 'item_nombre'=>'Memoria Visual','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>44, 'item_nombre'=>'Memoria Auditiva','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>45, 'item_nombre'=>'Análisis de la información','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>46, 'item_nombre'=>'Creatividad/iniciativa','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>47, 'item_nombre'=>'Agilidad mental','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>48, 'item_nombre'=>'Resolución de problemas','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>49, 'item_nombre'=>'Seguimiento de instrucciones','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>50, 'item_nombre'=>'Secuenciación','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>51, 'item_nombre'=>'Categorización','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>52, 'item_nombre'=>'Razonamiento Abstracto','categoria_id'=>null,'desempenio_id'=>4,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);

        FpoDesempenioItem::create([ 'id'=>53, 'item_nombre'=>'Lectura','categoria_id'=>null,'desempenio_id'=>5,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>54, 'item_nombre'=>'Comprensión Lectora','categoria_id'=>null,'desempenio_id'=>5,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>55, 'item_nombre'=>'Escritura','categoria_id'=>null,'desempenio_id'=>5,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>56, 'item_nombre'=>'Habilidades Lógico Matemáticas','categoria_id'=>null,'desempenio_id'=>5,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>57, 'item_nombre'=>'Cálculo Numérico','categoria_id'=>null,'desempenio_id'=>5,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);


        FpoDesempenioItem::create([ 'id'=>58, 'item_nombre'=>'Manejo del tiempo Libre','categoria_id'=>null,'desempenio_id'=>6,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>59, 'item_nombre'=>'Tolerancia a los tiempos en las actividades.','categoria_id'=>null,'desempenio_id'=>6,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>60, 'item_nombre'=>'Aceptación de pautas/recomendaciones','categoria_id'=>null,'desempenio_id'=>6,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>61, 'item_nombre'=>'Aceptación de Normas y Reglas','categoria_id'=>null,'desempenio_id'=>6,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>62, 'item_nombre'=>'Respeto por figuras de Autoridad','categoria_id'=>null,'desempenio_id'=>6,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>63, 'item_nombre'=>'Adaptación al trabajo en equipo','categoria_id'=>null,'desempenio_id'=>6,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);

        FpoDesempenioItem::create([ 'id'=>64, 'item_nombre'=>'Autonomía','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>65, 'item_nombre'=>'Confianza en sí mismo','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>66, 'item_nombre'=>'Liderazgo','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>67, 'item_nombre'=>'Cooperación','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>68, 'item_nombre'=>'Confiabilidad','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>69, 'item_nombre'=>'Puntualidad','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>70, 'item_nombre'=>'Compromiso','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>71, 'item_nombre'=>'Autocontrol /Manejo del conflicto','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>72, 'item_nombre'=>'Responsabilidad','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>73, 'item_nombre'=>'Rendimiento','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>74, 'item_nombre'=>'Eficiencia','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>75, 'item_nombre'=>'Organización y Métodos de Trabajo','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>76, 'item_nombre'=>'Calidad de Trabajo','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>77, 'item_nombre'=>'Interacción con otros y/o Compañeros ','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>78, 'item_nombre'=>'Cuidado con los elementos, herramientas y equipos de Trabajo','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>79, 'item_nombre'=>'Expresión verbal y manejo del vocabulario','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>80, 'item_nombre'=>'Organización y limpieza área de trabajo','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>81, 'item_nombre'=>'Higiene personal','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioItem::create([ 'id'=>82, 'item_nombre'=>'Presentación Personal','categoria_id'=>null,'desempenio_id'=>7,'estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);

    }
}
