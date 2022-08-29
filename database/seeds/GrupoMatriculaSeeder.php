<?php

use App\Models\Acciones\Grupales\Educacion\GrupoDias;
use App\Models\Acciones\Grupales\Educacion\GrupoMatricula;

use Illuminate\Database\Seeder;

class GrupoMatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         GrupoMatricula::create(['id'=>1, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grupo' => 'A','horario' => '08:00','prm_jornada'=>2353,'observacion'=>'LUNES Y MARTES']); // 1
        GrupoMatricula::create(['id'=>2, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grupo' => 'B','horario' => '08:00','prm_jornada'=>2353,'observacion'=>'MIERCOLES Y JUEVES']); // 2
        GrupoMatricula::create(['id'=>3, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grupo' => 'C','horario' => '08:00','prm_jornada'=>2353,'observacion'=>'VIERNES Y SABADO']); // 3
        GrupoMatricula::create(['id'=>4, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grupo' => 'D','horario' => '08:00','prm_jornada'=>2353,'observacion'=>'UNO O VARIOS DÍAS DE LA SEMANA']); // 4
        GrupoMatricula::create(['id'=>5, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_grupo' => 'E','horario' => '08:00','prm_jornada'=>2353,'observacion'=>'TODOS LOS DIAS']); // 5
        

        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 469,'grupo_id' => 1]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 478,'grupo_id' => 1]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 479,'grupo_id' => 2]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 480,'grupo_id' => 2]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 481,'grupo_id' => 3]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 482,'grupo_id' => 3]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 469,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 478,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 479,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 480,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 481,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 482,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 483,'grupo_id' => 4]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 469,'grupo_id' => 5]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 478,'grupo_id' => 5]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 479,'grupo_id' => 5]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 480,'grupo_id' => 5]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 481,'grupo_id' => 5]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 482,'grupo_id' => 5]); // 5
        GrupoDias::create([ 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_dia_id' => 483,'grupo_id' => 5]); // 5


        
        

    }     
}
