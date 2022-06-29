<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoArea;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoItem;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoSubarea;

class VctoItemAreaSubareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //areas
        VctoArea::create(['id' => 1, 'nombre' => 'MOTORA','descripcion' => 'MOTORA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['id' => 2, 'nombre' => 'SENSORIAL','descripcion' => 'SENSORIAL', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['id' => 3, 'nombre' => 'COGNITIVA','descripcion' => 'COGNITIVA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['id' => 4, 'nombre' => 'HABILIDADES ESCOLARES BÁSICAS','descripcion' => 'HABILIDADES ESCOLARES BÁSICAS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['id' => 5, 'nombre' => 'EMOCIONAL ','descripcion' => 'EMOCIONAL ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //subareas
        VctoSubarea::create(['id' => 1, 'nombre' => 'MOTOR GRUESO','descripcion' => 'MOTOR GRUESO', 'vcto_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 2, 'nombre' => 'PROPIOCEPTIVO Y VESTIBULAR ','descripcion' => 'PROPIOCEPTIVO Y VESTIBULAR ', 'vcto_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 3, 'nombre' => 'MOTRICIDAD FINA','descripcion' => 'MOTRICIDAD FINA', 'vcto_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 4, 'nombre' => 'SUB ÁREA VISUAL','descripcion' => 'SUB ÁREA VISUAL', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 5, 'nombre' => 'SUB ÁREA AUDITIVA','descripcion' => 'SUB ÁREA AUDITIVA', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 6, 'nombre' => 'SUB ÁREA LENGUAJE Y COMUNICACIÓN','descripcion' => 'SUB ÁREA LENGUAJE Y COMUNICACIÓN', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 7, 'nombre' => 'SUB ÁREA TÁCTIL','descripcion' => 'SUB ÁREA TÁCTIL', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 8, 'nombre' => 'SUB ÁREA COGNITIVA','descripcion' => 'SUB ÁREA COGNITIVA', 'vcto_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 9, 'nombre' => 'SUB ÁREA ESCOLAR ','descripcion' => 'SUB ÁREA ESCOLAR ', 'vcto_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['id' => 10, 'nombre' => 'SUB ÁREA EMOCIONAL','descripcion' => 'SUB ÁREA EMOCIONAL', 'vcto_area_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //items a evaluar
        VctoItem::create(['id' => 1, 'nombre' => 'Logra posición Sedente','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 2, 'nombre' => 'Logra posición Bípeda','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 3, 'nombre' => 'Logra posición cuadrúpeda','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 4, 'nombre' => 'Logra posición Rodillas','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 5, 'nombre' => 'Logra pararse en un pie','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 6, 'nombre' => 'Logra saltar en un pie','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 7, 'nombre' => 'Logra saltar en dos pies','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 8, 'nombre' => 'Logra Marcha Tándem','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 9, 'nombre' => 'Logra correr','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 10, 'nombre' => 'Logra lanzar un balón','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 11, 'nombre' => 'Logra atrapar un balón con ambas manos','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 12, 'nombre' => 'Logra atrapar una pelota con una mano','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 13, 'nombre' => 'Logra Arcos de movilidad de miembros superiores','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 14, 'nombre' => 'Logra Arcos de movilidad de miembros inferiores','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 15, 'nombre' => 'Logra Movimientos coordinados de brazos y piernas (de forma alterna y simultánea)','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['id' => 16, 'nombre' => 'Realiza actividades con demanda de Equilibrio Dinámico','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 17, 'nombre' => 'Realiza actividades con demanda de Equilibrio Estático','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 18, 'nombre' => 'Logra realizar cambios de posición y/o imitar posiciones','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 19, 'nombre' => 'Presenta caídas o tropiezos frecuentemente','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 20, 'nombre' => 'Escribe acostado sobre el pupitre','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 21, 'nombre' => 'Se levanta y se mueve permanentemente de la silla','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 22, 'nombre' => 'Realiza actividades motoras organizadas (planea, ejecuta y finaliza la actividad sin dificultad)','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 23, 'nombre' => 'Adopta postura sedente adecuada (espalda recta, pies juntos tocando el piso).','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 24, 'nombre' => 'Se cansa con facilidad ante actividades que no requieren esfuerzo físico','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 25, 'nombre' => 'Logra modular la fuerza con la que manipula diferentes objetos','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 26, 'nombre' => 'Logra coordinarlos movimientos para realizar una actividad','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 27, 'nombre' => 'Realiza ajustes posturales automáticos','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 28, 'nombre' => 'Presenta temor a las alturas o actividades inestables','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 29, 'nombre' => 'Disfruta actividades juegos de alto impacto, movimiento y parece no cansarse o marearse','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 30, 'nombre' => 'Se observa adecuado tono muscular para realizar actividades','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 31, 'nombre' => 'Tolera estímulos táctiles (permite el contacto con compañeros y con diferentes texturas)','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['id' => 32, 'nombre' => 'Realiza todos los agarres de forma funcional','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 33, 'nombre' => 'Realiza pinzas de forma funcional','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 34, 'nombre' => 'Realiza oposición, tocando secuencialmente pulgar con otros dedos, iniciando con meñique de manera bilateral.','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 35, 'nombre' => 'Realiza actividades de coordinación bimanual','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 36, 'nombre' => 'Realiza actividades de enhebrado','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 37, 'nombre' => 'Realiza agarre del lápiz utilizando los dedos índice, pulgar, medio sin evidenciar dificultad en los trazos.','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 38, 'nombre' => 'Realiza movimientos manuales con la agilidad y el tiempo requerido para trabajar en actividades escolares.','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
       
        VctoItem::create(['id' => 39, 'nombre' => 'Realiza seguimiento visual en todos los planos.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 40, 'nombre' => 'Fija la mirada en algún elemento sin parpadear de manera constante.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 41, 'nombre' => 'Mira sin forzar o fruncir el entre cejo.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 42, 'nombre' => 'Se observa parpadeo constante de los ojos','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 43, 'nombre' => 'Realiza lecturas sin evidenciar cansancio en cortos períodos de tiempo','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 44, 'nombre' => 'Acerca su cara al tablero, cuadernos o libros al leer y/o mirar.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 45, 'nombre' => 'Refiere ver borroso y/o inclina su cabeza al mirar','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        
        VctoItem::create(['id' => 46, 'nombre' => 'Ubica estímulos auditivos','vcto_subarea_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 47, 'nombre' => 'Tiene un tono de voz alto permanentemente','vcto_subarea_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 48, 'nombre' => 'Refiere dolor en oídos u órganos conexos','vcto_subarea_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
       
        VctoItem::create(['id' => 49, 'nombre' => 'Realiza adecuada articulación al hablar','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 50, 'nombre' => 'Presenta lenguaje a nivel verbal o escrito sin sustituciones, omisiones o inversiones','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 51, 'nombre' => 'Realiza proceso de lecto escritura','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 52, 'nombre' => 'Reconoce y nómina de forma adecuada objetos del entorno','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 53, 'nombre' => 'Crea, describe, o relata situaciones o historias simples','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 54, 'nombre' => 'Recuerda hechos de una historia contada','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 55, 'nombre' => 'Mantiene contacto visual con el interlocutor de forma permanente al recibir una instrucción','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 56, 'nombre' => 'Logra seguir órdenes que implican de 3 a 5 acciones','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 57, 'nombre' => 'Se observa intención comunicativa para informar, expresar e interactuar','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 58, 'nombre' => 'Asume de forma adecuada los turnos conversacionales (rol hablante-oyente)','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        
        VctoItem::create(['id' => 59, 'nombre' => 'Rechaza el contacto con personas, objetos, ropa y/o diferentes materiales de trabajo','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 60, 'nombre' => 'Responde con rechazo y/o fastidio al ser tocado de forma inesperada','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 61, 'nombre' => 'No le gusta lavarse el cabello, la cara o los dientes','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 62, 'nombre' => 'Tiende a rechazar el contacto de la mano con la hoja o cuaderno al escribir','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 63, 'nombre' => 'No tolera algún tipo de texturas, incluido algunas prendas de vestir','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 64, 'nombre' => 'Identifica mediante el tacto objetos sin ayuda de la visión','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        
        VctoItem::create(['id' => 65, 'nombre' => 'Logra mantener la atención durante el desarrollo de una actividad','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 66, 'nombre' => 'Logra mantenerse concentrado durante el desarrollo de una actividad','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 67, 'nombre' => 'Logra comprender indicaciones e instrucciones','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 68, 'nombre' => 'Logra seguimiento de indicaciones (sigue instrucciones de dos o más pasos)','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 69, 'nombre' => 'Logra almacenar información de manera visual','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 70, 'nombre' => 'Logra almacenar información de manera auditiva','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 71, 'nombre' => 'Almacena y retiene información a corto, mediano y largo plazo.','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 72, 'nombre' => 'Inicia y termina actividades','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 73, 'nombre' => 'Planea, organiza y ejecuta tareas','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 74, 'nombre' => 'Logra resolución de problemas','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 75, 'nombre' => 'Se encuentra orientado en tiempo, espacio y persona.','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['id' => 76, 'nombre' => 'Logra realizar secuenciación numérica','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 77, 'nombre' => 'Logra realizar Categorización','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 78, 'nombre' => 'Resuelve operaciones básicas matemáticas','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 79, 'nombre' => 'TResuelve problemas sencillos presentados oralmente que incluyen sustracción','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 80, 'nombre' => 'Identifica partes incompletas de un dibujo','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 81, 'nombre' => 'Reconoce errores y absurdos en dibujos','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 82, 'nombre' => 'Ordena en secuencia historias correctas','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['id' => 83, 'nombre' => 'Logra expresar emociones y sentimientos con facilidad','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 84, 'nombre' => 'Reconoce y respeta figuras de autoridad y compañeros','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 85, 'nombre' => 'Respeta turnos, se muestra calmado','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 86, 'nombre' => 'Participa de situaciones y/o actividades nuevas','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 87, 'nombre' => 'Realiza y comparte actividades con compañeros','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 88, 'nombre' => 'Presenta una comunicación verbal, gestual y corporal de acuerdo con su atención comunicativa','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 89, 'nombre' => 'Expresa y solicita ayuda cuando lo necesita','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['id' => 90, 'nombre' => 'Ante situaciones que presenten dificultad se molesta con facilidad.','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
    }
}
