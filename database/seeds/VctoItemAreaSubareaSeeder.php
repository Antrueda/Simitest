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
        VctoArea::create(['nombre' => 'MOTORA','descripcion' => 'MOTORA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['nombre' => 'SENSORIAL','descripcion' => 'SENSORIAL', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['nombre' => 'COGNITIVA','descripcion' => 'COGNITIVA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['nombre' => 'HABILIDADES ESCOLARES BÁSICAS','descripcion' => 'HABILIDADES ESCOLARES BÁSICAS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoArea::create(['nombre' => 'EMOCIONAL ','descripcion' => 'EMOCIONAL ', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //subareas
        VctoSubarea::create(['nombre' => 'MOTOR GRUESO','descripcion' => 'MOTOR GRUESO', 'vcto_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'PROPIOCEPTIVO Y VESTIBULAR ','descripcion' => 'PROPIOCEPTIVO Y VESTIBULAR ', 'vcto_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'MOTRICIDAD FINA','descripcion' => 'MOTRICIDAD FINA', 'vcto_area_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'SUB ÁREA VISUAL','descripcion' => 'SUB ÁREA VISUAL', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'SUB ÁREA AUDITIVA','descripcion' => 'SUB ÁREA AUDITIVA', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'SUB ÁREA LENGUAJE Y COMUNICACIÓN','descripcion' => 'SUB ÁREA LENGUAJE Y COMUNICACIÓN', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'SUB ÁREA TÁCTIL','descripcion' => 'SUB ÁREA TÁCTIL', 'vcto_area_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'SUB ÁREA COGNITIVA','descripcion' => 'SUB ÁREA COGNITIVA', 'vcto_area_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create(['nombre' => 'SUB ÁREA ESCOLAR ','descripcion' => 'SUB ÁREA ESCOLAR ', 'vcto_area_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoSubarea::create([ 'nombre' => 'SUB ÁREA EMOCIONAL','descripcion' => 'SUB ÁREA EMOCIONAL', 'vcto_area_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        //items a evaluar
        VctoItem::create(['nombre' => 'Logra posición Bípeda','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra posición Sedente','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra posición cuadrúpeda','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra posición Rodillas','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra pararse en un pie','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra saltar en un pie','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra saltar en dos pies','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra Marcha Tándem','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra correr','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra lanzar un balón','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra atrapar un balón con ambas manos','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra atrapar una pelota con una mano','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra Arcos de movilidad de miembros superiores','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra Arcos de movilidad de miembros inferiores','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create([ 'nombre' => 'Logra Movimientos coordinados de brazos y piernas (de forma alterna y simultánea)','vcto_subarea_id' => 1,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['nombre' => 'Realiza actividades con demanda de Equilibrio Dinámico','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza actividades con demanda de Equilibrio Estático','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra realizar cambios de posición y/o imitar posiciones','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Presenta caídas o tropiezos frecuentemente','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Escribe acostado sobre el pupitre','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Se levanta y se mueve permanentemente de la silla','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza actividades motoras organizadas (planea, ejecuta y finaliza la actividad sin dificultad)','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Adopta postura sedente adecuada (espalda recta, pies juntos tocando el piso).','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Se cansa con facilidad ante actividades que no requieren esfuerzo físico','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra modular la fuerza con la que manipula diferentes objetos','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra coordinarlos movimientos para realizar una actividad','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza ajustes posturales automáticos','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Presenta temor a las alturas o actividades inestables','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Disfruta actividades juegos de alto impacto, movimiento y parece no cansarse o marearse','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Se observa adecuado tono muscular para realizar actividades','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Tolera estímulos táctiles (permite el contacto con compañeros y con diferentes texturas)','vcto_subarea_id' => 2,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['nombre' => 'Realiza todos los agarres de forma funcional','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza pinzas de forma funcional','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza oposición, tocando secuencialmente pulgar con otros dedos, iniciando con meñique de manera bilateral.','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza actividades de coordinación bimanual','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza actividades de enhebrado','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza agarre del lápiz utilizando los dedos índice, pulgar, medio sin evidenciar dificultad en los trazos.','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza movimientos manuales con la agilidad y el tiempo requerido para trabajar en actividades escolares.','vcto_subarea_id' => 3,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
       
        VctoItem::create(['nombre' => 'Realiza seguimiento visual en todos los planos.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Fija la mirada en algún elemento sin parpadear de manera constante.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Mira sin forzar o fruncir el entre cejo.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Se observa parpadeo constante de los ojos','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza lecturas sin evidenciar cansancio en cortos períodos de tiempo','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Acerca su cara al tablero, cuadernos o libros al leer y/o mirar.','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Refiere ver borroso y/o inclina su cabeza al mirar','vcto_subarea_id' => 4,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        
        VctoItem::create(['nombre' => 'Ubica estímulos auditivos','vcto_subarea_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Tiene un tono de voz alto permanentemente','vcto_subarea_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Refiere dolor en oídos u órganos conexos','vcto_subarea_id' => 5,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
       
        VctoItem::create(['nombre' => 'Realiza adecuada articulación al hablar','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Presenta lenguaje a nivel verbal o escrito sin sustituciones, omisiones o inversiones','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza proceso de lecto escritura','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Reconoce y nómina de forma adecuada objetos del entorno','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Crea, describe, o relata situaciones o historias simples','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Recuerda hechos de una historia contada','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Mantiene contacto visual con el interlocutor de forma permanente al recibir una instrucción','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra seguir órdenes que implican de 3 a 5 acciones','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Se observa intención comunicativa para informar, expresar e interactuar','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Asume de forma adecuada los turnos conversacionales (rol hablante-oyente)','vcto_subarea_id' => 6,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        
        VctoItem::create(['nombre' => 'Rechaza el contacto con personas, objetos, ropa y/o diferentes materiales de trabajo','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Responde con rechazo y/o fastidio al ser tocado de forma inesperada','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'No le gusta lavarse el cabello, la cara o los dientes','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Tiende a rechazar el contacto de la mano con la hoja o cuaderno al escribir','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'No tolera algún tipo de texturas, incluido algunas prendas de vestir','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Identifica mediante el tacto objetos sin ayuda de la visión','vcto_subarea_id' => 7,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        
        VctoItem::create(['nombre' => 'Logra mantener la atención durante el desarrollo de una actividad','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra mantenerse concentrado durante el desarrollo de una actividad','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra comprender indicaciones e instrucciones','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra seguimiento de indicaciones (sigue instrucciones de dos o más pasos)','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra almacenar información de manera visual','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra almacenar información de manera auditiva','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Almacena y retiene información a corto, mediano y largo plazo.','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Inicia y termina actividades','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Planea, organiza y ejecuta tareas','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra resolución de problemas','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Se encuentra orientado en tiempo, espacio y persona.','vcto_subarea_id' => 8,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['nombre' => 'Logra realizar secuenciación numérica','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Logra realizar Categorización','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Resuelve operaciones básicas matemáticas','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Resuelve problemas sencillos presentados oralmente que incluyen sustracción','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Identifica partes incompletas de un dibujo','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Reconoce errores y absurdos en dibujos','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Ordena en secuencia historias correctas','vcto_subarea_id' => 9,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);

        VctoItem::create(['nombre' => 'Logra expresar emociones y sentimientos con facilidad','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Reconoce y respeta figuras de autoridad y compañeros','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Respeta turnos, se muestra calmado','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Participa de situaciones y/o actividades nuevas','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Realiza y comparte actividades con compañeros','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Presenta una comunicación verbal, gestual y corporal de acuerdo con su atención comunicativa','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Expresa y solicita ayuda cuando lo necesita','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        VctoItem::create(['nombre' => 'Ante situaciones que presenten dificultad se molesta con facilidad.','vcto_subarea_id' => 10,'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
    }
}
