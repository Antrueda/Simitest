<?php

use App\Models\sistema\SisEsta;
use Illuminate\Database\Seeder;

class SisEstasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisEsta::create(["s_estado"=>"ACTIVO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"INACTIVO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"CREACION Y PERMISO PRACTICANTE-APOYOEQUIPO PSICOSOCIAL-FICHA DE INGRESO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"DAR PERMISO DE VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"RESTAURACION CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"SE DA PERMISO A OTRA UPI, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"Q.E.D.P.","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"ENCARGO VACACIONES","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"FINALIZACION VINCULACION CON EL IDIPRON","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"TERMINACIÓN DE CONTRATO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_estado"=>"SESIÓN DE CONTRATO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
    }
}
