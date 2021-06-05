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
        $this->getR(['rolexxxx' => 'USUARIO CONSULTA TERRITORIO']); //26
        $this->getR(['rolexxxx' => 'APOYO ADMINISTRATIVO']); //27
    }
}
