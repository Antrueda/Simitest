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
        $registro['s_telefono']= $dataxxxx['telefono'];
        $registro['name'] = $dataxxxx['namexxxx'];


        $registro['email'] = $dataxxxx['emailxxx'];
        $registro['password'] = $dataxxxx['document'];
        $registro['user_crea_id'] = 1;
        $registro['user_edita_id'] = 1;
        $registro['sis_esta_id'] = 1;
        //$registro['s_telefono'] = '3173809970';
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
        $dataxxxx['telefono'] = '3173809970';
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
        $dataxxxx['telefono'] = '3173809970';
        $dataxxxx['cargoxxx'] = '1';
        // $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'nuevosimi@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'super-administrador';
        $dataxxxx['namexxxx'] = 'FERNANDO SANABRIA';
        $this->getR($dataxxxx); // 2

        $dataxxxx['pnombrex'] = 'YENNY';
        $dataxxxx['snombrex'] = 'ANDREA';
        $dataxxxx['papellid'] = 'CORZO';
        $dataxxxx['sapellid'] = 'CÁCERES';
        $dataxxxx['document'] = '1031143437';
        $dataxxxx['telefono'] = '3173809970';
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
        $dataxxxx['telefono'] = '3173809970';
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
        $dataxxxx['telefono'] = '3173809970';
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
        $dataxxxx['telefono'] = '3173809970';
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
        $dataxxxx['telefono'] = '3173809970';
        $dataxxxx['cargoxxx'] = '1';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'fi@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'FICHA DE INGRESO';
        $dataxxxx['namexxxx'] = 'FICHA DE INGRESO';
        $this->getR($dataxxxx); // 7



        $dataxxxx['pnombrex'] = 'CAMILO';
        $dataxxxx['snombrex'] = 'ANDRES';
        $dataxxxx['papellid'] = 'CENDALES';
        $dataxxxx['sapellid'] = '';
        $dataxxxx['document'] = '1018495166';
        $dataxxxx['telefono'] = '3162767270';
        $dataxxxx['cargoxxx'] = '5';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'CAMILOC@IDIPRON.GOV.CO';
        $dataxxxx['rolxxxxx'] = 'FICHA DE INGRESO';
        $dataxxxx['namexxxx'] = 'CAMILO ANDRES CENDALES';
        $this->getR($dataxxxx); // 8


        $dataxxxx['pnombrex'] = 'WILMAR';
        $dataxxxx['snombrex'] = 'FERNANDO';
        $dataxxxx['papellid'] = 'SANABRIA';
        $dataxxxx['sapellid'] = 'HIGUERA';
        $dataxxxx['document'] = '74130816';
        $dataxxxx['telefono'] = '3103331041';
        $dataxxxx['cargoxxx'] = '2';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'wilmars@IDIPRON.GOV.CO';
        $dataxxxx['rolxxxxx'] = 'super-administrador';
        $dataxxxx['namexxxx'] = 'WILMAR FERNANDO SANABRIA HIGUERA';
        $this->getR($dataxxxx); // 9


        $dataxxxx['pnombrex'] = 'IVONNE';
        $dataxxxx['snombrex'] = 'ROCIO';
        $dataxxxx['papellid'] = 'PEÑA';
        $dataxxxx['sapellid'] = 'CASTAÑEDA';
        $dataxxxx['document'] = '52810740';
        $dataxxxx['telefono'] = '3115726733';
        $dataxxxx['cargoxxx'] = '22';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'ivonep@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'REFERENTE LOCAL';
        $dataxxxx['namexxxx'] = 'IVONNE ROCIO PEÑA CASTAÑEDA';
        $this->getR($dataxxxx); // 10


        $dataxxxx['pnombrex'] = 'ANA';
        $dataxxxx['snombrex'] = 'EDITH';
        $dataxxxx['papellid'] = 'CLAVIJO';
        $dataxxxx['sapellid'] = 'BELTRAN';
        $dataxxxx['document'] = '52449006';
        $dataxxxx['telefono'] = '3144131283';
        $dataxxxx['cargoxxx'] = '22';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'anacb@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'REFERENTE LOCAL';
        $dataxxxx['namexxxx'] = 'FICHA DE INGRESO';
        $this->getR($dataxxxx); // 11

        $dataxxxx['pnombrex'] = 'YENI';
        $dataxxxx['snombrex'] = 'ESMERALDA';
        $dataxxxx['papellid'] = 'ZAPATA';
        $dataxxxx['sapellid'] = 'SANABRIA';
        $dataxxxx['document'] = '52290925';
        $dataxxxx['telefono'] = '3115726733';
        $dataxxxx['cargoxxx'] = '21';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'yeniz@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'PROMOTOR (A) SOCIAL';
        $dataxxxx['namexxxx'] = 'YENI ESMERALDA ZAPATA SANABRIA';
        $this->getR($dataxxxx); // 12


        $dataxxxx['pnombrex'] = 'RAFAEL';
        $dataxxxx['snombrex'] = '';
        $dataxxxx['papellid'] = 'GONZALEZ';
        $dataxxxx['sapellid'] = 'RUEDAS';
        $dataxxxx['document'] = '88140302';
        $dataxxxx['telefono'] = '3142394572';
        $dataxxxx['cargoxxx'] = '21';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'rafaelg@idipron.gov.co';
        $dataxxxx['rolxxxxx'] = 'PROMOTOR (A) SOCIAL';
        $dataxxxx['namexxxx'] = 'RAFAEL GONZALEZ RUEDAS';
        $this->getR($dataxxxx); // 13


        $dataxxxx['pnombrex'] = 'HERNAN';
        $dataxxxx['snombrex'] = 'DARIO';
        $dataxxxx['papellid'] = 'RODRIGUEZ';
        $dataxxxx['sapellid'] = 'GARZON';
        $dataxxxx['document'] = '80793453';
        $dataxxxx['telefono'] = '3117348211';
        $dataxxxx['cargoxxx'] = '21';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'rodrigarzo@gmail.com';
        $dataxxxx['rolxxxxx'] = 'PROMOTOR (A) SOCIAL';
        $dataxxxx['namexxxx'] = 'HERNAN DARIO RODRIGUEZ GARZON';
        $this->getR($dataxxxx); // 14


        $dataxxxx['pnombrex'] = 'CAMILO';
        $dataxxxx['snombrex'] = 'ANDRES';
        $dataxxxx['papellid'] = 'SERRANO';
        $dataxxxx['sapellid'] = 'ESTRADA';
        $dataxxxx['document'] = '1032507610';
        $dataxxxx['telefono'] = '3016525108';
        $dataxxxx['cargoxxx'] = '21';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'camilo.estrada1099@gmail.com';
        $dataxxxx['rolxxxxx'] = 'PROMOTOR (A) SOCIAL';
        $dataxxxx['namexxxx'] = 'CAMILO ANDRES SERRANO ESTRADA';
        $registro['sis_esta_id'] = 2;
        $this->getR($dataxxxx); // 15

        $dataxxxx['pnombrex'] = 'LEIDY';
        $dataxxxx['snombrex'] = 'MABEL';
        $dataxxxx['papellid'] = 'DIAZ';
        $dataxxxx['sapellid'] = 'CAÑIZALES';
        $dataxxxx['document'] = '53131394';
        $dataxxxx['telefono'] = '3143459735';
        $dataxxxx['cargoxxx'] = '21';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'ladydiaz.08@gmail.com';
        $dataxxxx['rolxxxxx'] = 'PROMOTOR (A) SOCIAL';
        $dataxxxx['namexxxx'] = 'LEIDY MABEL DIAZ CAÑIZALES';
        $this->getR($dataxxxx); // 16

        $dataxxxx['pnombrex'] = 'ORIANA';
        $dataxxxx['snombrex'] = 'ANDREA';
        $dataxxxx['papellid'] = 'PINTO';
        $dataxxxx['sapellid'] = 'POVEDA';
        $dataxxxx['document'] = '1030524396';
        $dataxxxx['telefono'] = '3144783112';
        $dataxxxx['cargoxxx'] = '21';
        $dataxxxx['excepcio'] = '';
        $dataxxxx['emailxxx'] = 'ori-132@hotmail.com';
        $dataxxxx['rolxxxxx'] = 'PROMOTOR (A) SOCIAL';
        $dataxxxx['namexxxx'] = 'ORIANA ANDREA PINTO POVEDA';
        $this->getR($dataxxxx); // 17
    }
    
}
