<?php

use App\Models\sistema\SisTitulo;
use Illuminate\Database\Seeder;

class SisTitulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisTitulo::create(['id'=>1,'s_titulo' => 'FECHA REGISTRO ACTIVIDAD', 's_tooltip' => 'FECHA REGISTRO ACTIVIDAD']);
        SisTitulo::create(['id'=>2,'s_titulo' => 'AREA', 's_tooltip' => 'AREA']);
        SisTitulo::create(['id'=>3,'s_titulo' => 'UPI/Dependencia de origen', 's_tooltip' => 'UPI/Dependencia de origen']);
        SisTitulo::create(['id'=>4,'s_titulo' => 'Tema general', 's_tooltip' => 'Tema general']);
        SisTitulo::create(['id'=>5,'s_titulo' => 'Nombre taller', 's_tooltip' => 'Nombre taller']);
        SisTitulo::create(['id'=>6,'s_titulo' => 'Subtemas', 's_tooltip' => 'Subtemas']);
        SisTitulo::create(['id'=>7,'s_titulo' => 'Taller y acciones transversales', 's_tooltip' => 'Taller y acciones transversales']);
        SisTitulo::create(['id'=>8,'s_titulo' => 'UPI/Dependencia/Espacios Externos donde se realiza la actividad y/o taller', 's_tooltip' => 'UPI/Dependencia/Espacios Externos donde se realiza la actividad y/o taller']);
        SisTitulo::create(['id'=>9,'s_titulo' => 'Lugares/Espacios Externos', 's_tooltip' => 'Lugares/Espacios Externos']);
        SisTitulo::create(['id'=>10,'s_titulo' => 'Espacio/lugar donde se llevó a cabo el taller/actividad', 's_tooltip' => 'Espacio/lugar donde se llevó a cabo el taller/actividad']);
        SisTitulo::create(['id'=>11,'s_titulo' => 'Dirigido a:', 's_tooltip' => 'Dirigido a:']);
        SisTitulo::create(['id'=>12,'s_titulo' => 'Entidad', 's_tooltip' => 'Entidad']);
        SisTitulo::create(['id'=>13,'s_titulo' => 'Buscar responsable', 's_tooltip' => 'Buscar responsable']);
        SisTitulo::create(['id'=>14,'s_titulo' => '¿Es responsable?', 's_tooltip' => '¿Es responsable?']);
        SisTitulo::create(['id'=>15,'s_titulo' => 'Buscar asistente', 's_tooltip' => 'Buscar asistente']);
        SisTitulo::create(['id'=>16,'s_titulo' => 'Buscar recurso', 's_tooltip' => 'Buscar recurso']);
        SisTitulo::create(['id'=>17,'s_titulo' => 'Cantidad', 's_tooltip' => 'Cantidad']);
        SisTitulo::create(['id'=>18,'s_titulo' => 'Introducción', 's_tooltip' => 'Introducción']);
        SisTitulo::create(['id'=>19,'s_titulo' => 'Justificación', 's_tooltip' => 'Justificación']);
        SisTitulo::create(['id'=>20,'s_titulo' => 'Objetivo', 's_tooltip' => 'Objetivo']);
        SisTitulo::create(['id'=>21,'s_titulo' => 'Metodología', 's_tooltip' => 'Metodología']);
        SisTitulo::create(['id'=>22,'s_titulo' => 'Categosría', 's_tooltip' => 'Categosría']);
        SisTitulo::create(['id'=>23,'s_titulo' => 'Contenido temático', 's_tooltip' => 'Contenido temático']);
        SisTitulo::create(['id'=>24,'s_titulo' => 'Estrategia de convocatoria (si aplica)', 's_tooltip' => 'Estrategia de convocatoria (si aplica)']);
        SisTitulo::create(['id'=>25,'s_titulo' => 'Resultado y/o productos', 's_tooltip' => 'Resultado y/o productos']);
        SisTitulo::create(['id'=>26,'s_titulo' => 'Evaluación', 's_tooltip' => 'Evaluación']);
        SisTitulo::create(['id'=>27,'s_titulo' => 'Observaciones', 's_tooltip' => 'Observaciones']);
        SisTitulo::create(['id'=>28,'s_titulo' => 'Seleccione archivo con extensió jpg.', 's_tooltip' => 'Seleccione archivo con extensión jpg.']);
        SisTitulo::create(['id'=>29,'s_titulo' => 'espacio/lugar', 's_tooltip' => 'espacio/lugar']);
        SisTitulo::create(['id'=>30,'s_titulo' => 'volver a', 's_tooltip' => 'volver a']);
        SisTitulo::create(['id'=>31,'s_titulo' => 'dependencia espacio/lugar', 's_tooltip' => 'dependencia espacio/lugar']);
        SisTitulo::create(['id'=>32,'s_titulo' => 'listado de dependencias', 's_tooltip' => 'listado de dependencias']);
        SisTitulo::create(['id'=>33,'s_titulo' => 'seleccionar todo', 's_tooltip' => 'seleccionar todo']);
        SisTitulo::create(['id'=>34,'s_titulo' => 'LISTADO LUGARES', 's_tooltip' => 'LISTADO LUGARES']);
        SisTitulo::create(['id'=>35,'s_titulo' => 'OBSERVACION DEL REGIRSTRO', 's_tooltip' => 'OBSERVACION DEL REGIRSTRO']);
        SisTitulo::create(['id'=>36,'s_titulo' => 'RESPONSABLE', 's_tooltip' => 'RESPONSABLE']);
        SisTitulo::create(['id'=>37,'s_titulo' => 'ACCIONES GRUPALES', 's_tooltip' => 'ACCIONES GRUPALES']);
        SisTitulo::create(['id'=>38,'s_titulo' => 'NUEVO RESPONSABLE', 's_tooltip' => 'NUEVO RESPONSABLE']);
        // SisTitulo::create(['s_titulo' => '', 's_tooltip' => '']);
    }
}
