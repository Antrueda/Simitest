<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        Role::create(['name' => strtoupper($dataxxxx['rolexxxx']), 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['id'=>1,'name' => 'SUPER-ADMINISTRADOR', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>2,'name' => 'ADMINISTRADOR', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>3,'name' => 'PSICÓLOGO(A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>4,'name' => 'TRABAJADOR(A) SOCIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>5,'name' => 'FICHA DE INGRESO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>6,'name' => 'AUXILIAR DE ENFERMERÍA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>7,'name' => 'PSICÓLOGO(A) CLÍNICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>8,'name' => 'AUXILIAR ADMINISTRATIVO TERRITORIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>9,'name' => 'PROMOTOR (A) SOCIAL', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>10,'name' => 'REFERENTE LOCAL', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>11,'name' => 'AREA MITIGACION', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>12,'name' => 'AREA-ESPIRITUALIDAD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>13,'name' => 'COORDINADOR (A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>14,'name' => 'DOCENTES', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>15,'name' => 'EQUIPO EMPRENDER', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>16,'name' => 'FACILITADOR (A) DE CONVIVENCIA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>17,'name' => 'FACILITADOR DE ZONA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>18,'name' => 'FORMADOR ESTRATEGIA CULTURA CIUDADANA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>19,'name' => 'PSICÓLOGO-SOCIO LEGAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>20,'name' => 'RESPONSABLE UPI/AREA/COORDINADOR', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>21,'name' => 'TALLERISTA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>22,'name' => 'TERAPEUTA OCUPACIONAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>23,'name' => 'TUTOR (A) DE CONVIVENCIA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>24,'name' => 'USUARIOS-CONSULTA', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>25,'name' => 'AUXILIAR ADMINISTRATIVO (A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>26,'name' => 'USUARIO CONSULTA TERRITORIO', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>27,'name' => 'APOYO ADMINISTRATIVO', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>28,'name' => 'EQUIPO SOCIAL CONVENIOS', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        // Role::create(['id'=>41 ,'name' => 'USUARIO CONSULTA TERRITORIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        // Role::create(['id'=>42 ,'name' => 'APOYO ADMINISTRATIVO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

        Role::create(['id'=>41,'name' => 'USUARIO CONSULTA TERRITORIO', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>42,'name' => 'APOYO ADMINISTRATIVO', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>61,'name' => 'EQUIPO SOCIAL CONVENIOS', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>81,'name' => 'EDUCADOR (A)', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
    }
}
