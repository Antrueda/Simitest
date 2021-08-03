<?php

use App\Models\Usuario\Estusuario;
use Illuminate\Database\Seeder;

class EstusuariosSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estusuario::create(['id' => 1, 'estado' => 'CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 2, 'estado' => 'TERMINACIÓN DE CONTRATO', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 3, 'estado' => 'CARGO NUEVO SEGUN CONTRATO', 'prm_formular_id' => 2326, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 4, 'estado' => 'CARGO DESIGNADO POR LIDER AREA', 'prm_formular_id' => 2326, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 5, 'estado' => 'ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 6, 'estado' => 'Q.E.D.P.', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 7, 'estado' => 'FINALIZACION VINCULACION CON EL IDIPRON', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 8, 'estado' => 'SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 9, 'estado' => 'CAMBIO DE NOMBRE', 'prm_formular_id' => 2327, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 10, 'estado' => 'CAMBIO DE NOMBRE UPI', 'prm_formular_id' => 2327, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 11, 'estado' => 'CAMBIO NOMBRE AREA', 'prm_formular_id' => 2328, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 12, 'estado' => 'ACTUALIZACION AREA', 'prm_formular_id' => 2328, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 13, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2328, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 14, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2480, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 15, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2481, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 16, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2498, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 17, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2499, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 18, 'estado' => 'ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 19, 'estado' => 'SE DA PERMISO A OTRA UPI O AC, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 20, 'estado' => 'SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURAR CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 21, 'estado' => 'VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 22, 'estado' => 'PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 23, 'estado' => 'PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 24, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2501, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 25, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2500, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 26, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2505, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 27, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2504, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 28, 'estado' => 'NUEVO REGISTRO', 'prm_formular_id' => 2509, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 29, 'estado' => 'CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 30, 'estado' => 'SUSCRIPCION NUEVO CONTRATO Y/O SE RESTAURA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 31, 'estado' => 'DAR PERMISO VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 32, 'estado' => 'SESION CONTRATO DE OTRO PROFESIONAL', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 33, 'estado' => 'SUSCRIPCION PRACTICA Y/O SE RESTAURA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 34, 'estado' => 'RESTAURACION CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 35, 'estado' => 'INGRESO PERIODO DE VACACIONES Y/O SE RESTAURA CLAVE', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 36, 'estado' => 'ENCARGO VACACIONES', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 37, 'estado' => 'PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 38, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2504, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 39, 'estado' => 'CREACION ESTADO POR LIDER AREA Y CONTEXTOS', 'prm_formular_id' => 2499, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 40, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2499, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 41, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2505, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 42, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2498, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 43, 'estado' => 'SE REQUIERE SUBTEMA EN EL TALLER EDUCATIVO Y/O ACCION FORMATIVA', 'prm_formular_id' => 2505, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 44, 'estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => 2504, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 45, 'estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => 2505, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 46, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2482, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 47, 'estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => 2482, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 48, 'estado' => 'EQUIVOCACIÓN AL CRER EL PARÁMETRO', 'prm_formular_id' => 2483, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 49, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2483, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 50, 'estado' => 'ERROR DE ACTIVACIÓN', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 51, 'estado' => 'ACCESO AL NUEVO SISTEMA', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 9, 'user_edita_id' => 9, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 52, 'estado' => 'CREACIÓN PARÁMETRO A SOLICITUD DE LAS UPIS-DEPENDENCIAS', 'prm_formular_id' => 2509, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 53, 'estado' => 'PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 'prm_formular_id' => 2327, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 54, 'estado' => 'CREACION PARAMETRO APROBADO POR STMEO', 'prm_formular_id' => 2326, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 55, 'estado' => 'CREACION PARAMETRO APROBADO POR STMEO', 'prm_formular_id' => 2351, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 56, 'estado' => 'MAL REGISTRO', 'prm_formular_id' => 2504, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 57, 'estado' => 'SOLCITUD DE LA UPI/DEPENDENCIA', 'prm_formular_id' => 2509, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 58, 'estado' => 'UPI SIN SERVICIO', 'prm_formular_id' => 2327, 'estusuario_id' => null, 'user_crea_id' => 9, 'user_edita_id' => 9, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 59, 'estado' => 'SIN ATENCIÒN', 'prm_formular_id' => 2327, 'estusuario_id' => null, 'user_crea_id' => 9, 'user_edita_id' => 9, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 60, 'estado' => 'A SOLICITUD DE LAS UPIS-DEPENDENCIAS', 'prm_formular_id' => 2509, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 2]);
        Estusuario::create(['id' => 61, 'estado' => 'TRASLADO INFORMACIÓN SIMI VIGENTE A PRODUCCIÓN', 'prm_formular_id' => 2327, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
        Estusuario::create(['id' => 62, 'estado' => 'TRASLADO INFORMACIÓN SIMI VIGENTE A PRODUCCIÓN', 'prm_formular_id' => 2325, 'estusuario_id' => null, 'user_crea_id' => 861, 'user_edita_id' => 861, 'sis_esta_id' => 1]);
    }
}
