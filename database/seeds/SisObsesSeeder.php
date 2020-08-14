<?php

use App\Models\Sistema\SisObse;
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
        SisObse::create(["s_observ"=>"CREAR REGISTRO","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"CREACION Y PERMISO PRACTICANTE-APOYOEQUIPO PSICOSOCIAL-FICHA DE INGRESO","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"DAR PERMISO DE VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"RESTAURACION CLAVE","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"SE DA PERMISO A OTRA UPI, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"Q.E.D.P.","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"ENCARGO VACACIONES","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"FINALIZACION VINCULACION CON EL IDIPRON","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"TERMINACIÓN DE CONTRATO","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
        SisObse::create(["s_observ"=>"SESIÓN DE CONTRATO","sis_esta_id"=>1,"user_crea_id"=>1,"user_edita_id"=>1]);
    }
}
