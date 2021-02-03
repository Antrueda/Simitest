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
        $this->getReg(
            ['CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE', 2325]
        ); //1
        $this->getReg(
            ['TERMINACIÓN DE CONTRATO', 2325]
        ); //2

        $this->getReg(
            ['CARGO NUEVO SEGUN CONTRATO', 2326]
        ); //3

        $this->getReg(
            ['CARGO DESIGNADO POR LIDER AREA', 2326]
        ); //4

        $this->getReg(
            ['ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN', 2325]
        ); //5
        $this->getReg(
            ['Q.E.D.P.', 2325]
        ); //6
        $this->getReg(
            ['FINALIZACION VINCULACION CON EL IDIPRON', 2325]
        ); //7
        $this->getReg(
            ['SE MODIFICA INFORMACIÓN AL USUARIO  Y/O  SE RESTAURA CLAVE', 2325]
        ); //8
        $this->getReg(
            ['CAMBIO DE NOMBRE', 2327]
        ); //9
        $this->getReg(
            ['CAMBIO DE NOMBRE UPI', 2327]
        ); //10
        $this->getReg(
            ['CAMBIO NOMBRE AREA', 2328]
        ); //11
        $this->getReg(
            ['ACTUALIZACION AREA', 2328]
        ); //12
        $this->getReg(
            ['NUEVO REGISTRO', 2328]
        ); //13
        $this->getReg(
            ['NUEVO REGISTRO', 2480]
        ); //14

        $this->getReg(
            ['NUEVO REGISTRO', 2481]
        ); //15

        $this->getReg(
            ['NUEVO REGISTRO', 2498]
        ); //16
        $this->getReg(
            ['NUEVO REGISTRO', 2499]
        ); //17

        $this->getReg(
            ['ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE', 2325]
        ); //18
        $this->getReg(
            ['SE DA PERMISO A OTRA UPI, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO', 2325]
        ); //19

        $this->getReg(
            ['SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURAR CLAVE', 2325]
        ); //20
        $this->getReg(
            ['VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS', 2325]
        ); //21
        $this->getReg(
            ['PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 2325]
        ); //22
        $this->getReg(
            ['PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA', 2325]
        ); //23

        $this->getReg(
            ['NUEVO REGISTRO', 2501]
        ); //24
        $this->getReg(
            ['NUEVO REGISTRO', 2327]
        ); //25

        // $this->getReg(
        //     ['',]
        // );//2
    }
}
