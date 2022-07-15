<?php


use App\Models\Acciones\Individuales\Educacion\AdministracionCursos\Curso;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Curso::create(['id' => 1,'s_cursos' => 'ASISTENCIA ADMINISTRATIVA Y CONTABLE', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 2, 's_cursos' => 'ASISTENCIA SOCIAL', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 3, 's_cursos' => 'ENTRENAMIENTO Y JUZGAMIENTO DEPORTIVO', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 4, 's_cursos' => 'GESTIÓN DEL SOFTWARE Y SISTEMAS', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 5, 's_cursos' => 'MECÁNICA AUTOMOTRÍZ', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 6, 's_cursos' => 'MANTENIMIENTO DE REDES Y EQUIPOS DE CÓMPUTO', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 7, 's_cursos' => 'PANADERÍA Y PASTELERÍA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 8, 's_cursos' => 'PREPARATORIO MUSICAL', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 9, 's_cursos' => 'BELLEZA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 10, 's_cursos' => 'COCINA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 11, 's_cursos' => 'BICICLETAS', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 12, 's_cursos' => 'EBANISTERÍA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 13, 's_cursos' => 'ELECTRICIDAD', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 14, 's_cursos' => 'SERIGRAFÍA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 15, 's_cursos' => 'PANADERÍA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 16, 's_cursos' => 'CONFECCIÓN', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 17, 's_cursos' => 'MECÁNICA DE MOTOS', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 18, 's_cursos' => 'JOYERÍA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 19, 's_cursos' => 'SOLDADURA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 20, 's_cursos' => 'MARROQUINERIA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
        Curso::create(['id' => 21, 's_cursos' => 'AGRICULTURA URBANA', 'descripcion' => 'pruebas', 'user_crea_id' => 1, 'user_edita_id'=> 1]);
    }
    }

