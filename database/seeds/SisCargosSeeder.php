<?php

use App\Models\sistema\SisCargo;
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
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'TÉCNICO',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'ABOGADO (A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'ADMINISTRADOR-SIMI',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'AUXILIAR ADMINISTRATIVO (A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'AUXILIAR ENFERMERIA',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'ESTILISTA',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'FACILITADOR (A) DE CONVIVENCIA',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'FONOAUDIOLOGO (A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'MEDICO(A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'NUTRICIONISTA',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'ODONTOLOGO (A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'PSICOLOGO(A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'PSICOLOGO(A) CLINICO',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'PSICOPEDAGOGO (A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'SOCIOLOGO (A)',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'TRABAJADOR(A) SOCIAL',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'TUTOR (A) DE CONVIVENCIA',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'TUTOR (A) DE VIVIENDA',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'TERAPEUTA OCUPACIONAL',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
    }
}
