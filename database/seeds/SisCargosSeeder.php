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
        SisCargo::create([
            's_cargo' => 'INGENIERO DE SISTEMAS',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'TÉCNICO',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'ABOGADO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'ADMINISTRADOR-SIMI',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'AUXILIAR ADMINISTRATIVO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'AUXILIAR ENFERMERIA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'ESTILISTA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'FACILITADOR (A) DE CONVIVENCIA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'FONOAUDIOLOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'MEDICO(A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'NUTRICIONISTA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'ODONTOLOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'PSICOLOGO(A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'PSICOLOGO(A) CLINICO',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'PSICOPEDAGOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'SOCIOLOGO (A)',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'TRABAJADOR(A) SOCIAL',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'TUTOR (A) DE CONVIVENCIA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'TUTOR (A) DE VIVIENDA',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
        SisCargo::create([
            's_cargo' => 'TERAPEUTA OCUPACIONAL',
            'sis_esta_id' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1','itiestan'=>10,'itiegabe'=>0
        ]);
    }
}
