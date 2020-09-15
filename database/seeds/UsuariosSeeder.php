<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        $registro['s_primer_nombre'] = $dataxxxx['pnombrex'];
        $registro['s_segundo_nombre'] = $dataxxxx['snombrex'];
        $registro['s_primer_apellido'] = $dataxxxx['papellid'];
        $registro['s_segundo_apellido'] = $dataxxxx['sapellid'];

        $registro['name'] = $dataxxxx['namexxxx'];


        $registro['email'] = $dataxxxx['emailxxx'];
        $registro['password'] = $dataxxxx['document'];
        $registro['user_crea_id'] = 1;
        $registro['user_edita_id'] = 1;
        $registro['sis_esta_id'] = 1;
        $registro['s_telefono'] = '3173809970';
        $registro['prm_tvinculacion_id'] = '1672';
        $registro['itiestan'] = 10;
        $registro['itiegabe'] = 0;
        $registro['s_matriculap'] = 'ALGO';
        $registro['sis_cargo_id'] = $dataxxxx['cargoxxx'];
        $registro['d_finvinculacion'] = '2021-02-04';
        $registro['d_vinculacion'] = '2021-02-04';
        $registro['s_documento'] = $dataxxxx['document'];

        $registro['prm_documento_id'] = 1;

        $registro['sis_municipio_id'] = 1;
        if (isset($dataxxxx['excepcio'])) {
            $registro['password_change_at'] = date("Y-m-d", strtotime(date('Y-m-d') . "+ 1 month"));
        } else {
            $registro['password_change_at'] = date('Y-m-d', time());
            $registro['password_reset_at'] = date('Y-m-d', time());
        }


        User::create($registro)->assignRole($dataxxxx['rolxxxxx']);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx['pnombrex'] = 'JOSE';
        $dataxxxx['snombrex'] = 'DUMAR';
        $dataxxxx['papellid'] = 'JIMENEZ';
        $dataxxxx['sapellid'] = 'RUIZ';
        $dataxxxx['document'] = '17496705';
        $dataxxxx['cargoxxx'] = '1';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'josej@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'super-administrador';
        $dataxxxx['namexxxx'] = 'Usuario Super Administrador';
        $this->getR($dataxxxx); // 1

        $dataxxxx['pnombrex'] = 'FERNANDO';
        $dataxxxx['snombrex'] = 'FERNANDO';
        $dataxxxx['papellid'] = 'SANABRIA';
        $dataxxxx['sapellid'] = 'SANABRIA';
        $dataxxxx['document'] = '12345678';
        $dataxxxx['cargoxxx'] = '1';
        // $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'nuevosimi@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'super-administrador';
        $dataxxxx['namexxxx'] = 'FERNANDO SANABRIA';
        $this->getR($dataxxxx); // 2

        $dataxxxx['pnombrex'] = 'YENNY';
        $dataxxxx['snombrex'] = 'ADREA';
        $dataxxxx['papellid'] = 'CORZO';
        $dataxxxx['sapellid'] = 'CÁCERES';
        $dataxxxx['document'] = '1031143437';
        $dataxxxx['cargoxxx'] = '1';
        // $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'YENNYCC@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'PSICÓLOGO(A)';
        $dataxxxx['namexxxx'] = 'YENNY ADREA CORZO CÁCERES';
        $this->getR($dataxxxx); // 3

        $dataxxxx['pnombrex'] = 'EDITH';
        $dataxxxx['snombrex'] = 'JOHANNA';
        $dataxxxx['papellid'] = 'FUENTES';
        $dataxxxx['sapellid'] = 'VIDAL';
        $dataxxxx['document'] = '52796926';
        $dataxxxx['cargoxxx'] = '1';
        // $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'edithf@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'PSICÓLOGO(A)';
        $dataxxxx['namexxxx'] = 'EDITH JOHANNA FUENTES VIDAL';
        $this->getR($dataxxxx); // 4

        $dataxxxx['pnombrex'] = 'SOL';
        $dataxxxx['snombrex'] = 'MARINA';
        $dataxxxx['papellid'] = 'RODRIGUEZ';
        $dataxxxx['sapellid'] = 'MARIN';
        $dataxxxx['document'] = '53141198';
        $dataxxxx['cargoxxx'] = '1';
        // $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'solr@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'aux_administrativo_territorio';
        $dataxxxx['namexxxx'] = 'SOL MARINA RODRIGUEZ MARIN';
        $this->getR($dataxxxx); // 5
        $dataxxxx['pnombrex'] = 'LUZ';
        $dataxxxx['snombrex'] = 'FARYDE';
        $dataxxxx['papellid'] = 'RODRIGUEZ';
        $dataxxxx['sapellid'] = 'CORRALES';
        $dataxxxx['document'] = '52223097';
        $dataxxxx['cargoxxx'] = '1';
        // $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'LUZAC@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'aux_administrativo_territorio';
        $dataxxxx['namexxxx'] = 'LUZ FARYDE AYA CORRALES';
        $this->getR($dataxxxx); // 6

        $dataxxxx['pnombrex'] = 'FICHA';
        $dataxxxx['snombrex'] = 'DE';
        $dataxxxx['papellid'] = 'INGRESO';
        $dataxxxx['sapellid'] = 'INGRESO';
        $dataxxxx['document'] = '34567890';
        $dataxxxx['cargoxxx'] = '1';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'fi@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'FICHA DE INGRESO';
        $dataxxxx['namexxxx'] = 'FICHA DE INGRESO';
        $this->getR($dataxxxx); // 7
    }
}
