<?php

use App\Models\Sistema\SisFsoporte;
use Illuminate\Database\Seeder;

class SisFsoportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = ['nombre' => '', 'sis_actividad_id' => 7, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'created_at' => '2019-12-03 00:18:26', 'updated_at' => '2019-12-03 00:18:26',];

        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-T- 007  Comunicación Asertiva';                              //1
        
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 Habilidades Sociales';                                //2
        SisFsoporte::create($dataxxxx);
        $dataxxxx['sis_actividad_id'] = 8;

        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 Resolución de conflictos y figuras de autoridad';     //3
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 expresión de sentimientos y pensamientos.';           //4
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 Liderazgo y Trabajo en Equipo';                       //5
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Ficha de Observación y/o Seguimiento M-MEX-FT-011';                                    //6
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Intervención Psicosocial M-MSS-FT-003';                                                //7
        SisFsoporte::create($dataxxxx);


        $dataxxxx['sis_actividad_id'] = 9;
        $dataxxxx['nombre'] = 'Consulta social en domicilio M-MSS-FT-002';                                            //8

        $dataxxxx['sis_actividad_id'] = 10;

        $dataxxxx['nombre'] = 'INFORME SICOSOCIAL';                                                                   //9
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'FORMATO 1';                                                                            //10
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 Resolución de conflictos y figuras de autoridad';     //11
        SisFsoporte::create($dataxxxx);

        $dataxxxx['nombre'] = 'Consulta social en domicilio M-MSS-FT-002';                                            //12
        SisFsoporte::create($dataxxxx);

        $dataxxxx['sis_actividad_id'] = 11;
        $dataxxxx['nombre'] = 'Intervención Psicosocial M-MSS-FT-003';                                                //13
        SisFsoporte::create($dataxxxx);
        $dataxxxx['sis_actividad_id'] = 7;
        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 Liderazgo y Trabajo en Equipo';                       //14                                            //13
        SisFsoporte::create($dataxxxx);
        $dataxxxx['nombre'] = 'Talleres Educativos M-MEX-FT-007 expresión de sentimientos y pensamientos.';           //4
        SisFsoporte::create($dataxxxx);
    }
}
