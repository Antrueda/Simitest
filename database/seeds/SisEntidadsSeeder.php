<?php

use App\Models\Sistema\SisDepen;
use App\Models\Sistema\SisEntidad;
use App\Models\Sistema\SisServicio;
use Illuminate\Database\Seeder;

class SisEntidadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'user_edita_id' => 1];
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'N/A']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'EXTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'ESTÍMULO DE CORRESPONSABILIDAD']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DISTRITO JOVEN EXTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DORMIDA TRANSITORIA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SERVICIO NO IDENTIFICADO EN EL NUEVO DESARROLLO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'EGRESO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO (COLECTIVO IMAGO)']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO (COLECTIVO ENTREREDES)']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO (PROCESO 1)']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GENERADORA INGRESOS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'COMEDOR']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INGRESO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CALLES ALTERNATIVAS INTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'REVISION CONTRATACION']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GENERACION DE INGRESOS COMUNIDAD']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'EXTERNO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GARANTIA DE PERMANENCIA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO DE SOSTENIMIENTO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'PROCESO SOCIAL']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INCAP']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'FUMDIR']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'ALTA VOZ PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 1 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 2 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 3 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 6 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'BODEGA 20 DE JULIO PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => '80 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'AMERICAS PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'BANDERAS PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DORADO PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SOACHA PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CICLO PARQUEADEROS PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 4 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 5 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 7 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 11 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO BUS IDIPRON PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO MBH  PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GRUPO STOMP PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'MUSEO NACIONAL PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'JIMENEZ PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TTUNAL PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'USME PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'NORTE  PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUBA PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'RICAURTE PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 8 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 9 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 10 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 11 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SECRETARIA MUJER  1 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SECRETARIA MUJER 3 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SECRETARIA MUJER 4OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'NORTE OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => '80 OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUBA OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'AMERICAS BANDERAS OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'RICAURTE OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'JIMENEZ OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUR OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TUNAL OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'USME OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'PORTAL 20 DE JULIO OPS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 14 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DISTRITO JOVEN']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'OBSERVATORIO PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'MODULO INTRODCUTORIO PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'OBSERVATORIO 2PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUR PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'PORTAL 20 DE JULIO PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 9 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 10 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO IDIPRON PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APYO ARCHIVO GENERAL PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO ALCALDIA PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'LOGISTICO PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GESTANTES C.P.S']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'MISION BOGOTA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 12 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 13 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 15 PAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'BANDERAS']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CONTRATO PRESTACION DE SERVICIO (CPS)']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CALLES ALTERNATIVAS EXTERNADO']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CPS MAYORES']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'FORMACION TECNICA']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO CONVENIO 149/2016 TRANS.']);
        SisServicio::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INTERNO']);


        
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'N/A']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'IDIPRON']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'POLICIA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS JARDIN INFANTIL DIURNO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS JARDIN INFANTIL NOCTURNO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CASA DE PENSAMIENTO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO AMAR']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO FORJAR']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO PROTEGER ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS DISTRITO JOVEN ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CONTACTO Y ATENCIÓN EN CALLE ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS CENTRO DE ATENCIÓN TRANSITORIA ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS ALTA DEPENDENCIA FUNCIONAL']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS HOGAR DE PASO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'SDIS ATENCIÓN INTEGRAL A LA DIVERSIDAD SEXUAL Y DE GÉNEROS']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'COMEDOR COMUNITARIO ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'COMISARIA DE FAMILIA']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ATENCIÓN TRANSITORIA AL MIGRANTE']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF INTERNADO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF EXTERNADO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF CENTRO DE EME']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ICBF CENTRO DE EMERGENCIA ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'JARDIN INFANTIL ICBF ']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'ONG']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);

        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'UNICEF']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);
        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'DEFENSORIA DEL PUEBLO']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);

        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'JÓVENES EN ACCIÓN']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);

        $entidadx = SisEntidad::create(['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'nombre' => 'FAMILIAS EN ACCIÓN']);
        $entidadx->sis_servicios()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
            4 => $camposmagicos,
            5 => $camposmagicos,
        ]);



        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, ];
        foreach ( SisDepen::get() as $key => $value) {
            $value->sis_servicios()->sync(
                [
                    2 => $camposmagicos,
                    3 => $camposmagicos,
                    4 => $camposmagicos,
                    5 => $camposmagicos,
                    6 => $camposmagicos,
                ]

            );
        }



    }
}
