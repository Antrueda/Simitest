<?php

use App\Models\Usuario\Estusuario;
use Illuminate\Database\Seeder;

class EstusuariosSeeder extends Seeder
{
    private function getReg($dataxxxx)
    {
        Estusuario::create([
            'estado' => strtoupper($dataxxxx[0]),
            'prm_formular_id' => $dataxxxx[1],
            'user_crea_id' => 1,
            'user_edita_id' => 1,
            'sis_esta_id' => 1,
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->getReg(['CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE', 2325]);
        $this->getReg(['TERMINACIÓN DE CONTRATO', 2325]);
        $this->getReg(['CARGO NUEVO SEGUN CONTRATO', 2326]);
        $this->getReg(['CARGO DESIGNADO POR LIDER AREA', 2326]);
        $this->getReg(['ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN', 2325]);
        $this->getReg(['Q.E.D.P.', 2325]);
        $this->getReg(['FINALIZACION VINCULACION CON EL IDIPRON', 2325]);
        $this->getReg(['SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE', 2325]);
        $this->getReg(['CAMBIO DE NOMBRE', 2327]);
        $this->getReg(['CAMBIO DE NOMBRE UPI', 2327]);
        $this->getReg(['CAMBIO NOMBRE AREA', 2328]);
        $this->getReg(['ACTUALIZACION AREA', 2328]);
        $this->getReg(['NUEVO REGISTRO', 2328]);
        $this->getReg(['NUEVO REGISTRO', 2480]);
        $this->getReg(['NUEVO REGISTRO', 2481]);
        $this->getReg(['NUEVO REGISTRO', 2498]);
        $this->getReg(['NUEVO REGISTRO', 2499]);
        $this->getReg(['ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE', 2325]);
        $this->getReg(['SE DA PERMISO A OTRA UPI O AC, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO', 2325]);
        $this->getReg(['SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURAR CLAVE', 2325]);
        $this->getReg(['VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS', 2325]);
        $this->getReg(['PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 2325]);
        $this->getReg(['PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 2325]);
        $this->getReg(['NUEVO REGISTRO', 2501]);
        $this->getReg(['NUEVO REGISTRO', 2500]);
        $this->getReg(['NUEVO REGISTRO', 2505]);
        $this->getReg(['NUEVO REGISTRO', 2504]);
        $this->getReg(['NUEVO REGISTRO', 2509]);
        $this->getReg(['CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE', 2325]);
        $this->getReg(['SUSCRIPCION NUEVO CONTRATO Y/O SE RESTAURA CLAVE', 2325]);
        $this->getReg(['DAR PERMISO VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA', 2325]);
        $this->getReg(['SESION CONTRATO DE OTRO PROFESIONAL', 2325]);
        $this->getReg(['SUSCRIPCION PRACTICA Y/O SE RESTAURA CLAVE', 2325]);
        $this->getReg(['RESTAURACION CLAVE', 2325]);
        $this->getReg(['INGRESO PERIODO DE VACACIONES Y/O SE RESTAURA CLAVE', 2325]);
        $this->getReg(['ENCARGO VACACIONES', 2325]);
        $this->getReg(['PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS', 2325]);
        $this->getReg(['PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 2504]);
        $this->getReg(['CREACION ESTADO POR LIDER AREA Y CONTEXTOS', 2499]);
        $this->getReg(['PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 2499]);
        $this->getReg(['PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 2505]);
        $this->getReg(['PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 2498]);
        $this->getReg(['SE REQUIERE SUBTEMA EN EL TALLER EDUCATIVO Y/O ACCION FORMATIVA', 2505]);
        $this->getReg(['EQUIVOCACIÓN AL CRER EL PARÁMETRO', 2504]);
        $this->getReg(['EQUIVOCACIÓN AL CRER EL PARÁMETRO', 2505]);
        $this->getReg(['PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 2482]);
        $this->getReg(['EQUIVOCACIÓN AL CRER EL PARÁMETRO', 2482]);
        $this->getReg(['EQUIVOCACIÓN AL CRER EL PARÁMETRO', 2483]);
        $this->getReg(['PARÁMETRO CREADO A SOLICITUD DEL ÁREA DE DERECHO O CONTEXTO PEDAGOGICO Y APROBADO POR STMEO', 2483]);

        // $this->getReg(
        //     ['',]
        // );//2
    }
}

