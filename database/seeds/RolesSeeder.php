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
<<<<<<< HEAD
        // crear roles y asignar los permisos
        $this->getR(['rolexxxx' => 'super-administrador']); //1
        $this->getR(['rolexxxx' => 'administrador']); //2
        $this->getR(['rolexxxx' => 'PSICÓLOGO(A)']); //3
        $this->getR(['rolexxxx' => 'TRABAJADOR(A) SOCIAL']); //4
        $this->getR(['rolexxxx' => 'FICHA DE INGRESO']); //5
        $this->getR(['rolexxxx' => 'AUXILIAR DE ENFERMERÍA']); //6
        $this->getR(['rolexxxx' => 'PSICÓLOGO(A) CLÍNICO']); //7
        $this->getR(['rolexxxx' => 'AUXILIAR ADIMINISTRATIVO TERRITORIO']); //8
        $this->getR(['rolexxxx' => 'PROMOTOR (A) SOCIAL']); //9
        $this->getR(['rolexxxx' => 'REFERENTE LOCAL']); //10
        $this->getR(['rolexxxx' => 'AREA MITIGACION']); //11
        $this->getR(['rolexxxx' => 'AREA-ESPIRITUALIDAD']); //12
        $this->getR(['rolexxxx' => 'COORDINADOR (A)']); //13
        $this->getR(['rolexxxx' => 'DOCENTES']); //14
        $this->getR(['rolexxxx' => 'EQUIPO EMPRENDER']); //15
        $this->getR(['rolexxxx' => 'FACILITADOR (A) DE CONVIVENCIA']); //16
        $this->getR(['rolexxxx' => 'FACILITADOR DE ZONA']); //17
        $this->getR(['rolexxxx' => 'FORMADOR ESTRATEGIA CULTURA CIUDADANA']); //18
        $this->getR(['rolexxxx' => 'PSICÓLOGO-SOCIO LEGAL']); //19
        $this->getR(['rolexxxx' => 'RESPONSABLE UPI/AREA/COORDINADOR']); //20
        $this->getR(['rolexxxx' => 'TALLERISTA']); //21
        $this->getR(['rolexxxx' => 'TERAPEUTA OCUPACIONAL']); //22
        $this->getR(['rolexxxx' => 'TUTOR (A) DE CONVIVENCIA']); //23
        $this->getR(['rolexxxx' => 'USUARIOS-CONSULTA']); //24
        $this->getR(['rolexxxx' => 'AUXILIAR ADMINISTRATIVO (A)']); //25
<<<<<<< HEAD
        $this->getR(['rolexxxx' => 'USUARIO CONSULTA TERRITORIO']); //26
        $this->getR(['rolexxxx' => 'APOYO ADMINISTRATIVO']); //27
=======
        Role::create(['id'=>41 ,'name' => 'USUARIO CONSULTA TERRITORIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>42 ,'name' => 'APOYO ADMINISTRATIVO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
>>>>>>> jorge
=======
        Role::create(['id'=>1,'name' => 'SUPER-ADMINISTRADOR', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>2,'name' => 'ADMINISTRADOR', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>3,'name' => 'PSICÓLOGO(A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>4,'name' => 'TRABAJADOR(A) SOCIAL', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>5,'name' => 'FICHA DE INGRESO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>6,'name' => 'AUXILIAR DE ENFERMERÍA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>7,'name' => 'PSICÓLOGO(A) CLÍNICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>8,'name' => 'AUXILIAR ADIMINISTRATIVO TERRITORIO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
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
        Role::create(['id'=>24,'name' => 'USUARIOS-CONSULTA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>25,'name' => 'AUXILIAR ADMINISTRATIVO (A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['id'=>26,'name' => 'USUARIO CONSULTA TERRITORIO', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>27,'name' => 'APOYO ADMINISTRATIVO', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Role::create(['id'=>28,'name' => 'EQUIPO SOCIAL CONVENIOS', 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
>>>>>>> master
    }
}
