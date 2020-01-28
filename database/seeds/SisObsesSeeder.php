<?php

use App\Models\sistema\SisEsta;
use Illuminate\Database\Seeder;

class SisObsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisEsta::create(["s_observ"=>"ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"CREACION Y PERMISO PRACTICANTE-APOYOEQUIPO PSICOSOCIAL-FICHA DE INGRESO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"DAR PERMISO DE VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"RESTAURACION CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"SE DA PERMISO A OTRA UPI, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"Q.E.D.P.","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"ENCARGO VACACIONES","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"FINALIZACION VINCULACION CON EL IDIPRON","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"TERMINACIÓN DE CONTRATO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisEsta::create(["s_observ"=>"SESIÓN DE CONTRATO","i_estado"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
    }
}
