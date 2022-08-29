<?php

use Illuminate\Database\Seeder;

use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihHabilidad;

class CategoriasCgihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // administraccion categoria cuestionario de gustos y intereses

         CgihCategoria::create(['id' => 1, 'nombre' => 'ITEM 1','descripcion' => 'CREACION DE ITEM', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        CgihCategoria::create(['id' => 2, 'nombre' => 'ITEM 2','descripcion' => 'CREACION DE ITEM', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        CgihCategoria::create(['id' => 3, 'nombre' => 'ITEM 3','descripcion' => 'CREACION DE ITEM', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        CgihCategoria::create(['id' => 4, 'nombre' => 'ITEM 4','descripcion' => 'CREACION DE ITEM', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        CgihCategoria::create(['id' => 5, 'nombre' => 'ITEM 5','descripcion' => 'CREACION DE ITEM', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        CgihCategoria::create(['id' => 6, 'nombre' => 'ITEM 6','descripcion' => 'CREACION DE ITEM', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);   
      
        //Item 1
        CgihHabilidad::create([ 'id' => 1,'categorias_id' =>1,'cursos_id' =>1,'prm_letras_id' => 146,'nombre' => 'Tengo buen pulso y habilidades para hacer dibujos, cortes o alguna otra actividad manual.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 2,'categorias_id' =>1,'cursos_id' =>2,'prm_letras_id' => 147,'nombre' => 'No tengo dificultades con el esfuerzo físico durante el aprendizaje de un oficio o una labor.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 3,'categorias_id' =>1,'cursos_id' =>3,'prm_letras_id' => 294,'nombre' => 'Aunque solo este comenzando a hacer un dibujo, imagino los colores que podría tener y disfruto diseñando.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 4,'categorias_id' =>1,'cursos_id' =>4,'prm_letras_id' => 85,'nombre' => 'Me gusta leer sobre el funcionamiento de una máquina y/o como repararla.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 5,'categorias_id' =>1,'cursos_id' =>5,'prm_letras_id' => 743,'nombre' => 'Creo que puedo manejar herramientas y/o equipos de panadería si alguien me enseña.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 6,'categorias_id' =>1,'cursos_id' =>6,'prm_letras_id' => 744,'nombre' => 'Se me facilita hablar y mantener buenas relaciones con las personas, converso y escucho con mucha facilidad.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 7,'categorias_id' =>1,'cursos_id' =>7,'prm_letras_id' => 745,'nombre' => 'Se me facilita hacer operaciones y cálculos matemáticos y seguir instrucciones.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 8,'categorias_id' =>1,'cursos_id' =>8,'prm_letras_id' => 746,'nombre' => 'Cuando una persona me consulta sobre un problema se me facilita orientarla en una posible solución.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 9,'categorias_id' =>1,'cursos_id' =>9,'prm_letras_id' =>  89,'nombre' => 'Me gusta diseñar o crear objetos utilizando diversos metales y/o piedras.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 10,'categorias_id' =>1,'cursos_id' =>10,'prm_letras_id' => 747,'nombre' => 'Me gustan las actividades físicas, el entrenamiento del cuerpo y los retos físicos. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 11,'categorias_id' =>1,'cursos_id' =>11,'prm_letras_id' => 748,'nombre' => 'Me gusta conocer cómo funcionan los computadores.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 12,'categorias_id' =>1,'cursos_id' =>12,'prm_letras_id' => 701,'nombre' => 'Considero que soy una persona organizada y que se preocupa por que sus espacios estén ordenados.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 13,'categorias_id' =>1,'cursos_id' =>13,'prm_letras_id' => 93,'nombre' => 'Me gusta o me gustaría conocer como es el funcionamiento de un vehículo. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 14,'categorias_id' =>1,'cursos_id' =>14,'prm_letras_id' => 749,'nombre' => 'Me gusta preparar alimentos y conocer de técnicas de preparación de alimentos','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 15,'categorias_id' =>1,'cursos_id' =>15,'prm_letras_id' => 149,'nombre' => 'Siempre me han llamado la atención temas como la electricidad y la electrónica.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 16,'categorias_id' =>1,'cursos_id' =>16,'prm_letras_id' => 751,'nombre' => 'Entender cómo funciona un computador, cómo se ensambla y cómo arreglarlo, son temas de mucho interés para mí.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 17,'categorias_id' =>1,'cursos_id' =>17,'prm_letras_id' => 752,'nombre' => 'Si pudiera abrir un negocio elegiría el de elaboración y venta de piezas en cuero zapatos, bolsos, cinturones, etc.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 18,'categorias_id' =>1,'cursos_id' =>18,'prm_letras_id' => 753,'nombre' => 'Me gustan mucho los temas relacionados con la tecnología y el dibujo.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 19,'categorias_id' =>1,'cursos_id' =>19,'prm_letras_id' => 138,'nombre' => 'Tengo habilidades para reproducir canciones o melodías a través de diferentes instrumentos.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  

        //Item 2

        CgihHabilidad::create([ 'id' => 20,'categorias_id' =>2,'cursos_id' =>1,'prm_letras_id' => 146,'nombre' => 'Cuando hago algún trabajo manual me gusta ser preciso/a en las medidas que tengo que realizar.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 21,'categorias_id' =>2,'cursos_id' =>2,'prm_letras_id' => 147,'nombre' => 'El trabajo con elementos como el hierro, el cobre, el aluminio son de mi agrado.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 22,'categorias_id' =>2,'cursos_id' =>3,'prm_letras_id' => 294,'nombre' => 'Siempre he estado interesado en temas como la publicidad y el diseño de avisos, pancartas, pasacalles o camisetas estampadas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 23,'categorias_id' =>2,'cursos_id' =>4,'prm_letras_id' => 85,'nombre' => 'Disfruto armando y desarmando diferentes máquinas para arreglarlas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 24,'categorias_id' =>2,'cursos_id' =>5,'prm_letras_id' => 743,'nombre' => 'Me gusta trabajar con alimentos y preparar recetas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 25,'categorias_id' =>2,'cursos_id' =>6,'prm_letras_id' => 744,'nombre' => 'Me gustan los temas relacionados con la buena presentación personal y esto importante para mí.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 26,'categorias_id' =>2,'cursos_id' =>7,'prm_letras_id' => 745,'nombre' => 'Disfruto dibujando prendas de vestir y en redes sociales sigo revistas y publicaciones que me enseñen a confeccionar.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 27,'categorias_id' =>2,'cursos_id' =>8,'prm_letras_id' => 746,'nombre' => 'Siempre estoy informado sobre los servicios que hay en las entidades para compartir a mis amigos, familiares y vecinos','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 28,'categorias_id' =>2,'cursos_id' =>9,'prm_letras_id' => 89,'nombre' => 'Se me facilita el uso y el manejo de diferentes herramientas de precisión para trabajos manuales.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 29,'categorias_id' =>2,'cursos_id' =>10,'prm_letras_id' => 747,'nombre' => 'Tengo habilidades para liderar y guiar a un grupo de personas y no importa su edad.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 30,'categorias_id' =>2,'cursos_id' =>11,'prm_letras_id' => 748,'nombre' => 'Me gusta investigar temas relacionados con tecnología, nuevos desarrollos tecnológicos y redes.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 31,'categorias_id' =>2,'cursos_id' =>12,'prm_letras_id' => 701,'nombre' => 'Me gustaría realizar alguna actividad en una oficina, como elaborar cartas, ordenar el archivo, organizar una agenda, llevar cuentas, etc.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 32,'categorias_id' =>2,'cursos_id' =>13,'prm_letras_id' => 93,'nombre' => 'Se me facilita o me gusta hacer reparaciones mecánicas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 33,'categorias_id' =>2,'cursos_id' =>14,'prm_letras_id' => 749,'nombre' => 'Disfruto conociendo nuevas recetas o formas de preparar de alimentos.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 34,'categorias_id' =>2,'cursos_id' =>15,'prm_letras_id' => 149,'nombre' => 'Me gusta conocer, cacharrear y operar aparatos eléctricos y electrónicos.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 35,'categorias_id' =>2,'cursos_id' =>16,'prm_letras_id' => 751,'nombre' => 'En la posibilidad de escoger un trabajo me gustaría aprender sobre software','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 36,'categorias_id' =>2,'cursos_id' =>17,'prm_letras_id' => 752,'nombre' => 'En un ambiente laboral prefiero que me asignen tareas de corte, modelado, costura de piezas y armado.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 37,'categorias_id' =>2,'cursos_id' =>18,'prm_letras_id' => 753,'nombre' => 'Tengo habilidades relacionadas con la creatividad, la comunicación con otros y para comprender lo que otros intentan decir.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 38,'categorias_id' =>2,'cursos_id' =>19,'prm_letras_id' => 138,'nombre' => 'Presto atención a lo que dicen otras personas, tomándome el tiempo necesario para entender los argumentos expuestos, hacer preguntas según sea apropiado y no interrumpir.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  

        //Item 3

        CgihHabilidad::create([ 'id' => 39,'categorias_id' =>3,'cursos_id' =>1,'prm_letras_id' => 146,'nombre' => 'El trabajo con materiales como la madera o la talla de madera son de mi agrado.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 40,'categorias_id' =>3,'cursos_id' =>2,'prm_letras_id' => 147,'nombre' => 'Aprender a diseñar piezas artísticas con el metal siempre me ha interesado.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 41,'categorias_id' =>3,'cursos_id' =>3,'prm_letras_id' => 294,'nombre' => 'Tengo conocimiento de lo que son las artes gráficas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 42,'categorias_id' =>3,'cursos_id' =>4,'prm_letras_id' => 85,'nombre' => 'Tengo habilidades para comprender el funcionamiento de un motor, de identificar sus fallas y arreglarlo.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 43,'categorias_id' =>3,'cursos_id' =>5,'prm_letras_id' => 743,'nombre' => 'Cuando tengo la oportunidad, disfruto alistar ingredientes, preparar recetas y mostrarlas en un plato.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 44,'categorias_id' =>3,'cursos_id' =>6,'prm_letras_id' => 744,'nombre' => 'Me gustaría realizar un curso de belleza o ser estilista profesional.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 45,'categorias_id' =>3,'cursos_id' =>7,'prm_letras_id' => 745,'nombre' => 'Conozco de materiales como telas, materiales para la confección y máquinas de coser','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 46,'categorias_id' =>3,'cursos_id' =>8,'prm_letras_id' => 746,'nombre' => 'Me comunico fácilmente con las personas que se encuentran a mi alrededor.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 47,'categorias_id' =>3,'cursos_id' =>9,'prm_letras_id' => 89,'nombre' => 'Me gustaría diseñar mis propias joyas, transformando materiales. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 48,'categorias_id' =>3,'cursos_id' =>10,'prm_letras_id' => 747,'nombre' => 'Es importante para mí la práctica de cualquier deporte y el conocimiento de su reglamentación.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 49,'categorias_id' =>3,'cursos_id' =>11,'prm_letras_id' => 748,'nombre' => 'Me gustaría aprender los pasos requeridos para armar partes de un computador, su mantenimiento y redes.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 50,'categorias_id' =>3,'cursos_id' =>12,'prm_letras_id' => 701,'nombre' => 'Se me facilita realizar actividades que me impliquen organizar horarios, planear actividades y las comunicaciones telefónicas.  ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 51,'categorias_id' =>3,'cursos_id' =>13,'prm_letras_id' => 93,'nombre' => 'Conozco de herramientas que se utilizan en la mecánica automotriz.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 52,'categorias_id' =>3,'cursos_id' =>14,'prm_letras_id' => 749,'nombre' => 'Me gusta o me gustaría ser creativo al momento de servir un plato de comida.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 53,'categorias_id' =>3,'cursos_id' =>15,'prm_letras_id' => 149,'nombre' => 'Considero que una buena alternativa de trabajo es saber hacer instalación, mantenimiento y reparación de redes eléctricas ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 54,'categorias_id' =>3,'cursos_id' =>16,'prm_letras_id' => 751,'nombre' => 'Siempre prefiero conocer temas relacionados con tecnologías de la información, computación, bases de datos y sistemas','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 55,'categorias_id' =>3,'cursos_id' =>17,'prm_letras_id' => 752,'nombre' => 'Siempre me han llamado la atención el diseño de prendas de vestir, accesorios, moda y trabajo con fibras naturales de origen animal o vegetal.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 56,'categorias_id' =>3,'cursos_id' =>18,'prm_letras_id' => 753,'nombre' => 'Creo que una imagen dice mucho más que mil palabras. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 57,'categorias_id' =>3,'cursos_id' =>19,'prm_letras_id' => 138,'nombre' => 'Se me facilita entender oraciones y párrafos escritos en documentos relacionados con el trabajo.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  


        //Item 4


        CgihHabilidad::create([ 'id' => 58,'categorias_id' =>4,'cursos_id' =>1,'prm_letras_id' => 146,'nombre' => 'Tengo habilidades para la matemática, el diseño o copiar patrones de dibujo.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 59,'categorias_id' =>4,'cursos_id' =>2,'prm_letras_id' => 147,'nombre' => 'Creo que, con los estudios necesarios en metalistería, puedo tener mi propio taller.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 60,'categorias_id' =>4,'cursos_id' =>3,'prm_letras_id' => 294,'nombre' => 'Me aburre hacer mediciones, prefiero dibujar o pintar, crear.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 61,'categorias_id' =>4,'cursos_id' =>4,'prm_letras_id' => 85,'nombre' => 'Siempre me han llamado la atención las motos, su reparación y mantenimiento.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 62,'categorias_id' =>4,'cursos_id' =>5,'prm_letras_id' => 743,'nombre' => 'Me gusta la chocolatería, la repostería, la elaboración de galletas y demás productos dulces.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 63,'categorias_id' =>4,'cursos_id' =>6,'prm_letras_id' => 744,'nombre' => 'Disfruto aconsejando a una persona sobre su aspecto personal, su imagen y hacerla sentir bien.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 64,'categorias_id' =>4,'cursos_id' =>7,'prm_letras_id' => 745,'nombre' => 'Tengo habilidades manuales para cortar y coser.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 65,'categorias_id' =>4,'cursos_id' =>8,'prm_letras_id' => 746,'nombre' => 'Disfruto colaborando y ayudando a otros.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 66,'categorias_id' =>4,'cursos_id' =>9,'prm_letras_id' => 89,'nombre' => 'Logro mantenerme concentrado por un período largo de tiempo cuando realizo una actividad de mi agrado.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 67,'categorias_id' =>4,'cursos_id' =>10,'prm_letras_id' => 747,'nombre' => 'Me gustan las actividades deportivas y podría ayudar a otros a que practiquen algún deporte.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 68,'categorias_id' =>4,'cursos_id' =>11,'prm_letras_id' => 748,'nombre' => 'Me gusta buscar información para solucionar un problema.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 69,'categorias_id' =>4,'cursos_id' =>12,'prm_letras_id' => 701,'nombre' => 'Considero indispensable llevar una agenda o control para el cumplimiento de las acciones importantes diariamente.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 70,'categorias_id' =>4,'cursos_id' =>13,'prm_letras_id' => 93,'nombre' => 'Me gustaría conocer los mecanismos de acción de motores mecánicos, eléctricos y electrónicos. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 71,'categorias_id' =>4,'cursos_id' =>14,'prm_letras_id' => 749,'nombre' => 'Me gusta mantener el área de trabajo limpia y organizada y no tengo problema con seguir instrucciones al pie de la letra','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 72,'categorias_id' =>4,'cursos_id' =>15,'prm_letras_id' => 149,'nombre' => 'Es importante para mí, el trabajo en equipo. Me considero paciente y dedicado para terminar una tarea que me asignen.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 73,'categorias_id' =>4,'cursos_id' =>16,'prm_letras_id' => 751,'nombre' => 'A elegir una lectura de mi interés elijo temas relacionados con sistemas, computación y video juegos.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 74,'categorias_id' =>4,'cursos_id' =>17,'prm_letras_id' => 752,'nombre' => 'Como alternativa de formación elegiría aprender a elaborar artículos en cuero - piel y materias primas naturales.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 75,'categorias_id' =>4,'cursos_id' =>18,'prm_letras_id' => 753,'nombre' => 'Elijo lecturas en temas como el diseño, la publicidad y el dibujo.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 76,'categorias_id' =>4,'cursos_id' =>19,'prm_letras_id' => 138,'nombre' => 'Me gusta trabajar en equipo para alcanzar metas comunes.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  



        //item 5
        CgihHabilidad::create([ 'id' => 77,'categorias_id' =>5,'cursos_id' =>1,'prm_letras_id' => 146,'nombre' => 'Me gustaría aprender a elaborar muebles, mesas, sillas y mobiliario en madera.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 78,'categorias_id' =>5,'cursos_id' =>2,'prm_letras_id' => 147,'nombre' => 'Me gusta crear con diversos materiales, así estos no sean tan fáciles de manipular.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 79,'categorias_id' =>5,'cursos_id' =>3,'prm_letras_id' => 294,'nombre' => 'Me gustaría aprender técnicas de estampado y/o serigrafía.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 80,'categorias_id' =>5,'cursos_id' =>4,'prm_letras_id' => 85,'nombre' => 'Me gustaría aprender a reparar bicicletas, motos y motores en general.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 81,'categorias_id' =>5,'cursos_id' =>5,'prm_letras_id' => 743,'nombre' => 'Puedo mantenerme en una misma actividad varias horas seguidas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 82,'categorias_id' =>5,'cursos_id' =>6,'prm_letras_id' => 744,'nombre' => 'Me llama la atención la utilización de productos naturales para la piel, el cabello y las uñas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 83,'categorias_id' =>5,'cursos_id' =>7,'prm_letras_id' => 745,'nombre' => 'Disfruto realizar actividades en las que pueda crear, diseñar y/o confeccionar cosas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 84,'categorias_id' =>5,'cursos_id' =>8,'prm_letras_id' => 746,'nombre' => 'Me considero una persona a la que le llaman la atención los temas de derechos, deberes y participación.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 85,'categorias_id' =>5,'cursos_id' =>9,'prm_letras_id' => 89,'nombre' => 'Tengo habilidades para diseñar elementos decorativos a partir de metales, piedras preciosas, cuero, arcilla, plásticos u otros materiales.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 86,'categorias_id' =>5,'cursos_id' =>10,'prm_letras_id' => 747,'nombre' => 'He tenido experiencias organizando, controlando, supervisando y calificando encuentros deportivos respetando el reglamento.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 87,'categorias_id' =>5,'cursos_id' =>11,'prm_letras_id' => 748,'nombre' => 'Me gustaría aprender a instalar programas de computación y sistemas operativos.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 88,'categorias_id' =>5,'cursos_id' =>12,'prm_letras_id' => 701,'nombre' => 'Considero que tengo habilidades para resolver problemas, pienso con rapidez en soluciones.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 89,'categorias_id' =>5,'cursos_id' =>13,'prm_letras_id' => 93,'nombre' => 'He tenido alguna experiencia en el arreglo de motores de carros y en mecánica automotriz en general. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 90,'categorias_id' =>5,'cursos_id' =>14,'prm_letras_id' => 749,'nombre' => 'Se me facilita manejar instrumentos y utensilios de cocina.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 91,'categorias_id' =>5,'cursos_id' =>15,'prm_letras_id' => 149,'nombre' => 'Leer un plano eléctrico, interpretar sus diagramas y comprender sus convenciones es algo que me apasiona.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 92,'categorias_id' =>5,'cursos_id' =>16,'prm_letras_id' => 751,'nombre' => 'Elegiría estudiar gestión de software y sistemas y no confección, gastronomía o administración','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 93,'categorias_id' =>5,'cursos_id' =>17,'prm_letras_id' => 752,'nombre' => 'Si me asignan una responsabilidad en un taller prefiero hacer corte de piezas en diferentes materiales de forma manual y mecánica de acuerdo con las especificaciones del producto.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 94,'categorias_id' =>5,'cursos_id' =>18,'prm_letras_id' => 753,'nombre' => 'Preferiría trabajar como diseñador gráfico o publicista y no como confeccionista de ropa.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 95,'categorias_id' =>5,'cursos_id' =>19,'prm_letras_id' => 138,'nombre' => 'Tengo facilidad para crear nuevas ideas o conceptos, nuevas asociaciones entre ideas y conceptos conocidos, especialmente musicales','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  


        //item 6
        CgihHabilidad::create([ 'id' => 96,'categorias_id' =>6,'cursos_id' =>1,'prm_letras_id' => 146,'nombre' => 'Tengo habilidades creativas para la elaboración de artículos con madera o sus derivados.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 97,'categorias_id' =>6,'cursos_id' =>2,'prm_letras_id' => 147,'nombre' => 'Los temas como metales, sus propiedades y reacciones químicas y la aleación son de mi interés.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 98,'categorias_id' =>6,'cursos_id' =>3,'prm_letras_id' => 294,'nombre' => 'Me gustaría aprender el manejo de máquinas de estampación y serigrafía.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 99,'categorias_id' =>6,'cursos_id' =>4,'prm_letras_id' => 85,'nombre' => 'Me concentro y realizo bien una actividad trabajando tanto en grupo como individual.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 100,'categorias_id' =>6,'cursos_id' =>5,'prm_letras_id' => 743,'nombre' => 'Me gustaría aprender sobre preparación de productos de panadería y ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 101,'categorias_id' =>6,'cursos_id' =>6,'prm_letras_id' => 744,'nombre' => 'Tengo habilidades para cortar el cabello, hacer peinados, arreglar las uñas o maquillar.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 102,'categorias_id' =>6,'cursos_id' =>7,'prm_letras_id' => 745,'nombre' => 'Se me facilita ser creativo/a en cuanto a mejorar la presentación personal mía o de otras personas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 103,'categorias_id' =>6,'cursos_id' =>8,'prm_letras_id' => 746,'nombre' => 'Quisiera aprender sobre el servicio social y la ayuda a comunidades.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 104,'categorias_id' =>6,'cursos_id' =>9,'prm_letras_id' => 89,'nombre' => 'Quiero aprender el fundido de metales para luego transformarlos en piezas únicas.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 105,'categorias_id' =>6,'cursos_id' =>10,'prm_letras_id' => 747,'nombre' => 'Creo en el valor y la importancia de practicar algún deporte.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 106,'categorias_id' =>6,'cursos_id' =>11,'prm_letras_id' => 748,'nombre' => 'Me gustaría conocer los temas relacionados con la atención al cliente y satisfacción del usuario después ofrecer un servicio. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 107,'categorias_id' =>6,'cursos_id' =>12,'prm_letras_id' => 701,'nombre' => 'Se me facilita seguir órdenes e instrucciones y trabajar bajo presión.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 108,'categorias_id' =>6,'cursos_id' =>13,'prm_letras_id' => 93,'nombre' => 'Considero que es muy importante que, para aprender de mecánica automotriz conozca de repuestos y costos, trabajo en equipo, atención al cliente y organización de espacios de trabajo.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 109,'categorias_id' =>6,'cursos_id' =>14,'prm_letras_id' => 749,'nombre' => 'Disfruto elaborando y aprendiendo a preparar platos típicos y de otros países.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 110,'categorias_id' =>6,'cursos_id' =>15,'prm_letras_id' => 149,'nombre' => 'Me gustaría aprender a hacer instalaciones eléctricas domiciliarias','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 111,'categorias_id' =>6,'cursos_id' =>16,'prm_letras_id' => 751,'nombre' => 'Entre ocupaciones prefiero las que tienen que ver con sistemas, software, computadoras y demás.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 112,'categorias_id' =>6,'cursos_id' =>17,'prm_letras_id' => 752,'nombre' => 'Yo elegiría ser un artista en marroquinería, en la transformación del cuero como una pieza artesanal o industrial.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 113,'categorias_id' =>6,'cursos_id' =>18,'prm_letras_id' => 753,'nombre' => 'Al tener la oportunidad de estudiar elegiría temas como: diseño gráfico, publicidad y dibujo. ','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  
        CgihHabilidad::create([ 'id' => 114,'categorias_id' =>6,'cursos_id' =>19,'prm_letras_id' => 138,'nombre' => 'Me gustaría aprender a ejecutar instrumentos musicales.','descripcion' => 'pruebas','estusuarios_id' => 75,'sis_esta_id' => 1,'user_crea_id' => 1, 'user_edita_id' => 1]);  

    
    
    }
}
