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
        SisServicio::create(['simianti_id'=>'','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'N/A']);
        SisServicio::create(['simianti_id'=>'2','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INTERNADO']);
        SisServicio::create(['simianti_id'=>'1','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'EXTERNADO']);
        SisServicio::create(['simianti_id'=>'97','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'ESTÍMULO DE CORRESPONSABILIDAD']);
        SisServicio::create(['simianti_id'=>'103','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DISTRITO JOVEN EXTERNADO']);
        SisServicio::create(['simianti_id'=>'7','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO']);
        SisServicio::create(['simianti_id'=>'106','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DORMIDA TRANSITORIA']);
        SisServicio::create(['simianti_id'=>'9','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'EGRESO']);
        SisServicio::create(['simianti_id'=>'8','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO (COLECTIVO IMAGO)']);
        SisServicio::create(['simianti_id'=>'10','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO (COLECTIVO ENTREREDES)']);
        SisServicio::create(['simianti_id'=>'14','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TERRITORIO (PROCESO 1)']);
        SisServicio::create(['simianti_id'=>'3','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GENERADORA INGRESOS']);
        SisServicio::create(['simianti_id'=>'4','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'COMEDOR']);
        SisServicio::create(['simianti_id'=>'5','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INGRESO']);
        SisServicio::create(['simianti_id'=>'100','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CALLES ALTERNATIVAS INTERNADO']);
        SisServicio::create(['simianti_id'=>'104','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CPS']);
        SisServicio::create(['simianti_id'=>'23','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'REVISION CONTRATACION']);
        SisServicio::create(['simianti_id'=>'GIC','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GENERACION DE INGRESOS COMUNIDAD']);
        SisServicio::create(['simianti_id'=>'22','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GARANTIA DE PERMANENCIA']);
        SisServicio::create(['simianti_id'=>'27','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO DE SOSTENIMIENTO']);
        SisServicio::create(['simianti_id'=>'21','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'PROCESO SOCIAL']);
        SisServicio::create(['simianti_id'=>'28','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'INCAP']);
        SisServicio::create(['simianti_id'=>'29','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'FUMDIR']);
        SisServicio::create(['simianti_id'=>'43','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'ALTA VOZ PAS']);
        SisServicio::create(['simianti_id'=>'44','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 1 PAS']);
        SisServicio::create(['simianti_id'=>'45','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 2 PAS']);
        SisServicio::create(['simianti_id'=>'46','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 3 PAS']);
        SisServicio::create(['simianti_id'=>'47','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 6 PAS']);
        SisServicio::create(['simianti_id'=>'48','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'BODEGA 20 DE JULIO PAS']);
        SisServicio::create(['simianti_id'=>'49','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => '80 PAS']);
        SisServicio::create(['simianti_id'=>'50','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'AMERICAS PAS']);
        SisServicio::create(['simianti_id'=>'51','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'BANDERAS PAS']);
        SisServicio::create(['simianti_id'=>'52','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DORADO PAS']);
        SisServicio::create(['simianti_id'=>'53','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SOACHA PAS']);
        SisServicio::create(['simianti_id'=>'54','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CICLO PARQUEADEROS PAS']);
        SisServicio::create(['simianti_id'=>'55','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 4 PAS']);
        SisServicio::create(['simianti_id'=>'56','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 5 PAS']);
        SisServicio::create(['simianti_id'=>'57','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 7 PAS']);
        SisServicio::create(['simianti_id'=>'58','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 11 PAS']);
        SisServicio::create(['simianti_id'=>'59','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO BUS IDIPRON PAS']);
        SisServicio::create(['simianti_id'=>'60','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO MBH  PAS']);
        SisServicio::create(['simianti_id'=>'61','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GRUPO STOMP PAS']);
        SisServicio::create(['simianti_id'=>'62','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'MUSEO NACIONAL PAS']);
        SisServicio::create(['simianti_id'=>'63','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'JIMENEZ PAS']);
        SisServicio::create(['simianti_id'=>'64','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TTUNAL PAS']);
        SisServicio::create(['simianti_id'=>'65','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'USME PAS']);
        SisServicio::create(['simianti_id'=>'66','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'NORTE  PAS']);
        SisServicio::create(['simianti_id'=>'67','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUBA PAS']);
        SisServicio::create(['simianti_id'=>'68','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'RICAURTE PAS']);
        SisServicio::create(['simianti_id'=>'69','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 8 OPS']);
        SisServicio::create(['simianti_id'=>'70','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 9 OPS']);
        SisServicio::create(['simianti_id'=>'71','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 10 OPS']);
        SisServicio::create(['simianti_id'=>'72','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 11 OPS']);
        SisServicio::create(['simianti_id'=>'73','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SECRETARIA MUJER  1 OPS']);
        SisServicio::create(['simianti_id'=>'75','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SECRETARIA MUJER 3 OPS']);
        SisServicio::create(['simianti_id'=>'76','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SECRETARIA MUJER 4OPS']);
        SisServicio::create(['simianti_id'=>'31','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'NORTE OPS']);
        SisServicio::create(['simianti_id'=>'32','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => '80 OPS']);
        SisServicio::create(['simianti_id'=>'33','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUBA OPS']);
        SisServicio::create(['simianti_id'=>'34','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'AMERICAS BANDERAS OPS']);
        SisServicio::create(['simianti_id'=>'36','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'RICAURTE OPS']);
        SisServicio::create(['simianti_id'=>'37','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'JIMENEZ OPS']);
        SisServicio::create(['simianti_id'=>'38','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUR OPS']);
        SisServicio::create(['simianti_id'=>'39','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'TUNAL OPS']);
        SisServicio::create(['simianti_id'=>'41','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'USME OPS']);
        SisServicio::create(['simianti_id'=>'42','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'PORTAL 20 DE JULIO OPS']);
        SisServicio::create(['simianti_id'=>'94','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 14 PAS']);
        SisServicio::create(['simianti_id'=>'98','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'DISTRITO JOVEN']);
        SisServicio::create(['simianti_id'=>'77','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'OBSERVATORIO PAS']);
        SisServicio::create(['simianti_id'=>'78','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'MODULO INTRODCUTORIO PAS']);
        SisServicio::create(['simianti_id'=>'79','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'OBSERVATORIO 2PAS']);
        SisServicio::create(['simianti_id'=>'80','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SUR PAS']);
        SisServicio::create(['simianti_id'=>'81','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'PORTAL 20 DE JULIO PAS']);
        SisServicio::create(['simianti_id'=>'82','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 9 PAS']);
        SisServicio::create(['simianti_id'=>'83','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 10 PAS']);
        SisServicio::create(['simianti_id'=>'84','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO IDIPRON PAS']);
        SisServicio::create(['simianti_id'=>'86','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APYO ARCHIVO GENERAL PAS']);
        SisServicio::create(['simianti_id'=>'87','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO ALCALDIA PAS']);
        SisServicio::create(['simianti_id'=>'88','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'LOGISTICO PAS']);
        SisServicio::create(['simianti_id'=>'80','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'GESTANTES C.P.S']);
        SisServicio::create(['simianti_id'=>'89','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'MISION BOGOTA']);
        SisServicio::create(['simianti_id'=>'91','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 12 PAS']);
        SisServicio::create(['simianti_id'=>'93','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 13 PAS']);
        SisServicio::create(['simianti_id'=>'95','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'SITP 15 PAS']);
        SisServicio::create(['simianti_id'=>'BAN','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'BANDERAS']);
        SisServicio::create(['simianti_id'=>'99','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CONTRATO PRESTACION DE SERVICIO (CPS)']);
        SisServicio::create(['simianti_id'=>'101','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CALLES ALTERNATIVAS EXTERNADO']);
        SisServicio::create(['simianti_id'=>'105','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'CPS MAYORES']);
        SisServicio::create(['simianti_id'=>'96','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'FORMACION TECNICA']);
        SisServicio::create(['simianti_id'=>'APY','user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'s_servicio' => 'APOYO CONVENIO 149/2016 TRANS.']);
        
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

    }
}
