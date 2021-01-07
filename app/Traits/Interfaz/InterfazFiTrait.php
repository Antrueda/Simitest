<?php

namespace App\Traits\Interfaz;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\NnajDocu;

/**
 * realiza la comunicación entre las dos bases de datos, que se busca?
 * * que a traves de una api desarrollada en java la interfaz pueda realizar consultas e insertar registros
 * * al crar un nnaj se digite la cédula y se realice una búsqueda en la db del simi antiguo y este existe alla lo traiga y lo inserte en la nueva base de datos
 * * sino existe lo debe crear en las dos db
 */
trait InterfazFiTrait
{

    private $upisxxxx = [
        1 => 0, 2 => 0, 3 => 0, 4 => 15, 5 => 6, 6 => 12, 7 => 19, 8 => 20, 9 => 0, 10 => 10, 11 => 0, 12 => 0,
        13 => 2, 14 => 8, 15 => 7, 16 => 3, 17 => 5, 18 => 4, 19 => 140, 20 => 212, 21 => 21, 22 => 16, 23 => 14, 24 => 0, 25 => 9, 26 => 18, 27 => 17, 28 => 0, 29 => 0,
    ];
    public function getNnajSimi(NnajDocu $nnajdocu)
    {
        $yaestanx=[1010164075,
        1024551560,
        1007718192,
        1000575432,
        1193402156,
        1023019338,
        1026591560,
        1026257228,
        1000217561,
        1027521534,
        1001050206,
        1000986285,
        1026585295,
        1019074083,
        1018479554,
        1030626549,
        1012399339,
        1014239338,
        1022429552,
        1013643455,
        1022393066,
        1025524269,
        1023927704,
        1013650511,
        1016712295,
        1022983954,
        1020806837,
        1023943919,
        1031153030,
        1019111097,
        1033802575,
        1023016049,
        1030653425,
        1024572783,
        1024534163,
        1024555604,
        1022992513,
        1023951038,
        1024467364,
        1023960123,
        1031147084,
        1000000648,
        1010210761,
        1010227496,
        1024530994,
        1007519805,
        1026584051,
        1026576152,
        1026281493,
        1010211330,
        1001270713,
        1022976614,
        1001168345,
        1024578366,
        1023016626,
        1024548370,
        1000802740,
        1033803228,
        1012415832,
        1007402499,
        1030657940,
        1032470944,
        1012416414,
        1033782611,
        1032469334,
        1022996031,
        1014252494,
        1031148040,
        1022980981,
        1033790169,
        1024572744,
        1023946092,
        1023928268,
        1031167358,
        1000619406,
        1023015254,
        1026570595,
        1011200665,
        1000788000,
        1023963442,
        1001286741,
        1026299103,
        1019126702,
        1001061367,
        1003907957,
        1033753158,
        1010165735,
        1033680586,
        1007422361,
        1000806226,
        1016713308,
        1026299392,
        1024580875,
        1001279407,
        1000005770,
        1000974072,
        1033100218,
        1031139589,
        1007443844,
        1012436958,
        1001059787,
        1007297242,
        1001294598,
        1000783396,
        1001060478,
        1022990481,
        1013651578,
        1000792810,
        1001057125,
        1193234630,
        1023946412,
        1136911590,
        1026573084,
        1031166434,
        1000807042,
        1026296716,
        1033799036,
        1031167171,
        1010241029,
        1033782443,
        1000064089,
        1032476417,
        1000241348,
        1023036928,
        1020816173,
        1002089013,
        1000006306,
        1033742922,
        1010018627,
        1007228728,
        1032494700,
        1010223224,
        1013664223,
        1023010118,
        1015461314,
        1000224629,
        1010223299,
        1020814807,
        1000691322,
        1024573421,
        1026588215,
        1026596584,
        1000465925,
        1000792366,
        1033805373,
        1032368805,
        1001277098,
        1000046902,
        1024569448,
        1022935519,
        1012419134,
        1033796261,
        1023946593,
        1071170332,
        1031170408,
        1033782069,
        1019117266,
        1014269674,
        1014255766,
        1000617533,
        1033681135,
        1000929845,
        1007454024,
        1023957869,
        1091812593,
        1003764317,
        1013652450,
        1001077090,
        1026289460,
        1010223953,
        1022976518,
        1026576687,
        1007106409,
        1000931516,
        1030614424,
        1026583580,
        1026288796,
        1026296221,
        1007700073,
        1193074061,
        1010055430,
        1026572678,
        1000627016,
        1065995511,
        1192817444,
        1001175024,
        1143261614,
        1024590968,
        1233893696,
        1025141347,
        1032491942,
        1015444496,
        1033769134,
        1010211605,
        1000832707];
        $consecut = 98358;
        $upinnajx = 470938;
        foreach (NnajDocu::where('fi_datos_basico_id', '>', 394)->get() as $key => $value) {
            # code...

            $datobasi = $value->fi_datos_basico;
if ($datobasi->sis_nnaj->prm_escomfam_id == 227 && !in_array($datobasi->nnaj_docu->s_documento,$yaestanx)) {

    $upixxxxx='INSERT INTO "IADMIN"."GE_UPI_NNAJ" (ID_UPI_NNAJ, ID_UPI, MOTIVO, TIEMPO, ANIO, ID_NNAJ, FECHA_INSERCION,
    USUARIO_INSERCION, ID_VALORACION_INICIAL, FECHA_INGRESO, ESTADO, ORIGEN, FUENTE, SERVICIO, ESTADO_COMPARTIDO) VALUES (';
    $upixxxxx.=$upinnajx.", '165', 'Migración desde el nuevo sistema', '0', '0', '".$consecut."',
    TO_DATE('" . date('Y-m-d') . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'), '214', '0',
    TO_DATE('" . date('Y-m-d') . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'), 'A', 'Ficha Ingreso', 'FI', '7', 'N');
    <br>";
    //  echo $upixxxxx;

    $document='INSERT INTO "IADMIN"."GE_NNAJ_DOCUMENTO" (ID_NNAJ, TIPO_DOCUMENTO, NUMERO_DOCUMENTO, ID_LUGAR_EXPEDICION,
    FECHA_INSERCION, USUARIO_INSERCION, FECHA_MODIFICACION, USUARIO_MODIFICACION, ESTADO) VALUES (';
    $document.=$consecut.", '" . $datobasi->nnaj_docu->tipoDocumento->nombre . "', '" . $datobasi->nnaj_docu->s_documento . "', '" . $datobasi->nnaj_docu->sis_municipio_id . "', TO_DATE('" . date('Y-m-d') . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'),
    '214', TO_DATE('" . date('Y-m-d') . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'), '214', 'A');";


    $upinnajx++;

    echo $document.'<br>';
            $ficsdxxx = $datobasi->nnaj_fi_csd;

                $queryxxx= 'INSERT INTO "IADMIN"."GE_NNAJ" (
                    ID_NNAJ,
                    PRIMER_APELLIDO,
                    SEGUNDO_APELLIDO,
                    PRIMER_NOMBRE,
                    SEGUNDO_NOMBRE,
                    APODO,
        FECHA_NACIMIENTO,
        ID_NACIMIENTO,
        FECHA_INSERCION,
        USUARIO_INSERCION,
        FECHA_MODIFICACION,
        USUARIO_MODIFICACION,
        RH,
        GENERO,
        TIPO_DOCUMENTO,
        NUMERO_DOCUMENTO,
        ID_LUGAR_EXPEDICION,
        ESTADO,
        NUMERO_LIBRETA_MILITAR,
        FECHA_NACIMIENTO_ESTIMADA,
        ETNIA,
        ESTADO_CIVIL,
        GENERO_IDENTIFICA,
        SEXO_ORIENTA,
        CUENTA_DOC,
        CONDICION_VESTIDO,
        AUTOCUIDADO,
        SITUACION_MIL,
        TIPO_POBLACION,
        ID_PAIS_NACIMIENTO)
        VALUES (';
           $queryxxx.= $consecut . ",
            '" . $datobasi->s_primer_apellido . "',
        '" . $datobasi->s_segundo_apellido . "',
        '" . $datobasi->s_primer_nombre . "',
        '" . $datobasi->s_segundo_nombre . "',
        '" . $datobasi->s_apodo . "',
        TO_DATE('" . $datobasi->nnaj_nacimi->d_nacimiento . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'),
        '11001',
        TO_DATE('" . date('Y-m-d') . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'),
        '214',
        TO_DATE('" . date('Y-m-d') . " 00:00:00', 'YYYY-MM-DD HH24:MI:SS'),
        '214',
        '" . $ficsdxxx->gsanguino->nombre . $ficsdxxx->factorh->nombre . "',
        '" . $datobasi->nnaj_sexo->prmSexo->nombre . "',
        '" . $datobasi->nnaj_docu->tipoDocumento->nombre . "',
        '" . $datobasi->nnaj_docu->s_documento . "',
        '" . $datobasi->nnaj_docu->sis_municipio_id . "',
        'AEU',
        '" . $datobasi->nnaj_docu->s_documento . "',
        'N',
        '" . $ficsdxxx->prm_etnia_id . "',
        '',
        '" . $datobasi->nnaj_sexo->prm_identidad_genero_id . "',
        '" . $datobasi->nnaj_sexo->prm_orientacion_sexual_id . "',
        '',
        '',
        '" . $datobasi->nnaj_docu->docFisico->nombre . "',
        '" . $datobasi->nnaj_sit_mil->prm_situacion_militar_id . "',
         '" . $datobasi->prm_tipoblaci_id . "',
         '" . $datobasi->nnaj_nacimi->sis_municipio->sis_departamento->sis_pai_id . "');
        <br>";
//  echo $queryxxx;
                $consecut++;
            }
        }
        // $nnjaxxxx = [
        //     'primapel' => $datobasi->s_primer_apellido,
        //     'seguapel' => $datobasi->s_segundo_apellido,
        //     'primnomb' => $datobasi->s_primer_nombre,
        //     'segunomb' => $datobasi->s_segundo_nombre,
        //     'apodoxxx' => $datobasi->s_apodo,
        //     'fechnaci' => $datobasi->nnaj_nacimi->d_nacimiento,
        //     'rhxxxxxx' => $ficsdxxx->gsanguino->nombre . $ficsdxxx->factorh->nombre,
        //     'generoxx' => $datobasi->nnaj_sexo->prmSexo->nombre,
        //     'tipodocu' => $datobasi->nnaj_docu->tipoDocumento->nombre,
        //     'document' => $datobasi->nnaj_docu->s_documento,
        //     'notariax' => '',
        //     'registra' => '',
        //     'lugaexpe' => $datobasi->nnaj_docu->sis_municipio_id,
        //     'clalibmi' => $datobasi->nnaj_sit_mil->prm_clase_libreta_id,
        //     'estadoxx' => 'AEU',
        //     'numlibmi' => $datobasi->nnaj_docu->s_documento,
        //     'ultgrapr' => '',
        //     'etniaxxx' =>  $ficsdxxx->prmEtnia->nombre,
        //     'emailxxx' => '',
        //     'nombiden' => $datobasi->nnaj_sexo->s_nombre_identitario,
        //     'estacovi' => '',
        //     'geneiden' => $datobasi->nnaj_sexo->prm_identidad_genero_id,
        //     'oriesexo' => $datobasi->nnaj_sexo->prm_orientacion_sexual_id,
        //     'condvest' => '',
        //     'autocuid' => '',
        //     'sinidpor' => '',
        //     'cuentdoc' => $datobasi->nnaj_docu->docFisico->nombre,
        //     'situmili' => $datobasi->nnaj_sit_mil->prm_situacion_militar_id,
        //     'tipoblac' => $datobasi->prm_tipoblaci_id,
        //     'paisnaci' => $datobasi->nnaj_nacimi->sis_municipio->sis_departamento->sis_pai_id,
        //     'idnacimi' => 11001,

        //     'fechinse' => date('Y-m-d'),
        //     'usuainse' => 214,
        //     'fechmodi'  => date('Y-m-d'),
        //     'usuamodi' => 214
        // ];
        // return $nnjaxxxx;
    }
    public function getBuscarNnaj($request)
    {
        print_r($request->search['value']);
        // $respuest = Http::get('http://localhost:8085/areas',)->json();
        // // echo '<pre>';
        // // print_r($respuest);

    }
}
