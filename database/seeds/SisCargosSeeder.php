<?php

use App\Models\Sistema\SisCargo;
use Illuminate\Database\Seeder;

class SisCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisCargo::create([//1
            's_cargo' => 'INGENIERO DE SISTEMAS',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//2
            's_cargo' => 'TÉCNICO',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//3
            's_cargo' => 'ABOGADO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//4
            's_cargo' => 'ADMINISTRADOR-SIMI',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//5
            's_cargo' => 'AUXILIAR ADMINISTRATIVO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//6
            's_cargo' => 'AUXILIAR ENFERMERIA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//7
            's_cargo' => 'ESTILISTA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//8
            's_cargo' => 'FACILITADOR (A) DE CONVIVENCIA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//9
            's_cargo' => 'FONOAUDIOLOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//10
            's_cargo' => 'MEDICO(A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//11
            's_cargo' => 'NUTRICIONISTA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//12
            's_cargo' => 'ODONTOLOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//13
            's_cargo' => 'PSICOLOGO(A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//14
            's_cargo' => 'PSICOLOGO(A) CLINICO',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//15
            's_cargo' => 'PSICOPEDAGOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//16
            's_cargo' => 'SOCIOLOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//17
            's_cargo' => 'TRABAJADOR(A) SOCIAL',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//18
            's_cargo' => 'TUTOR (A) DE CONVIVENCIA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//19
            's_cargo' => 'TUTOR (A) DE VIVIENDA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([//20
            's_cargo' => 'TERAPEUTA OCUPACIONAL',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);

        SisCargo::create([//21
            's_cargo' => 'PROMOTOR (A) SOCIAL',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);

        SisCargo::create([//22
            's_cargo' => 'REFERENTE LOCAL',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
    }
}
