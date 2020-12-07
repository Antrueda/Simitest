<?php

use App\Models\fichaIngreso\FiDiligenc;
use App\Models\fichaIngreso\NnajDocu;
use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\fichaIngreso\NnajFocali;
use App\Models\fichaIngreso\NnajNacimi;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\fichaIngreso\NnajSitMil;
use App\Models\fichaIngreso\NnajUpi;
use Illuminate\Database\Seeder;

use App\Models\Sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SisNnajsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * llena de cedulas y de otros datos aleatorios la tabla fi_datos_basicos
     * @return void
     */
    public function run()
    {
        $cedulasx = [
            '29334',
            '4644654',
            '25041102',
            '26612675',
            '29729974',
            '31541100',
            '31976426',
            '32378972',
            '101372815',
            '102694667',
            '103381957',
            '107588192',
            '1000002291',
            '1000002765',
            '1000003150',
            '1000004379',
            '1000061963',
            '1000115305',
            '1000120317',
            '1000121678',
            '1000124736',
            '1000127111',
            '1000137272',
            '1000213345',
            '1000217225',
            '1000225916',
            '1000226636',
            '1000240084',
            '1000257329',
            '1000319663',
            '1000334511',
            '1000339408',
            '1000455649',
            '1000470322',
            '1000474609',
            '1000514139',
            '1000573373',
            '1000576414',
            '1000579329',
            '1000602752',
            '1000620869',
            '1000713777',
            '1000720867',
            '1000726161',
            '1000778261',
            '1000784048',
            '1000786565',
            '1000787048',
            '1000791849',
            '1000805534',
            '1000806398',
            '1000806722',
            '1000862779',
            '1000932035',
            '1000957529',
            '1000986209',
            '1000988337',
            '1001049268',
            '1001049465',
            '1001054756',
            '1001060603',
            '1001061045',
            '1001083637',
            '1001115874',
            '1001170949',
            '1001173764',
            '1001174664',
            '1001197355',
            '1001201283',
            '1001271904',
            '1001276119',
            '1001278287',
            '1001315431',
            '1001340869',
            '1001343523',
            '1001346680',
            '1002460995',
            '1002744344',
            '1003306452',
            '1003520049',
            '1003648325',
            '1003710186',
            '1004473216',
            '1005084922',
            '1005205920',
            '1005605346',
            '1005725987',
            '1005726624',
            '1005927639',
            '1006026311',
            '1006122418',
            '1006594481',
            '1006769380',
            '1006993027',
            '1007099736',
            '1007106355',
            '1007242891',
            '1007296051',
            '1007297731',
            '1007372967',
            '1007473425',
            '1007497112',
            '1007513356',
            '1007514628',
            '1007538412',
            '1007614607',
            '1007718692',
            '1007727475',
            '1007773535',
            '1007952202',
            '1010007840',
            '1010056972',
            '1010115807',
            '1010142341',
            '1010146820',
            '1010160064',
            '1010174877',
            '1010183843',
            '1010184655',
            '1010189738',
            '1010207018',
            '1010220266',
            '1010223005',
            '1010224239',
            '1010224277',
            '1010224595',
            '1010226168',
            '1010226625',
            '1010243283',
            '1010246508',
            '1010841509',
            '1011202116',
            '1012329323',
            '1012398709',
            '1012398915',
            '1012417118',
            '1012423020',
            '1012423535',
            '1012429490',
            '1012431914',
            '1012433275',
            '1012442485',
            '1012444049',
            '1012458892',
            '1012464471',
            '1012464900',
            '1012464959',
            '1012468629',
            '1012549889',
            '1012916603',
            '1013117993',
            '1013269110',
            '1013594610',
            '1013595682',
            '1013602552',
            '1013641146',
            '1013647124',
            '1013647290',
            '1013648368',
            '1013658414',
            '1013689581',
            '1014088436',
            '1014243805',
            '1014257122',
            '1014295204',
            '1014479782',
            '1015463198',
            '1015470632',
            '1016003182',
            '1016055962',
            '1016095436',
            '1017165114',
            '1018408165',
            '1019002170',
            '1019119237',
            '1019127253',
            '1019762294',
            '1020750387',
            '1020754401',
            '1020828809',
            '1021316304',
            '1021392322',
            '1021392332',
            '1021666948',
            '1021667895',
            '1021680326',
            '1022371239',
            '1022371432',
            '1022390600',
            '1022393420',
            '1022394231',
            '1022395927',
            '1022396898',
            '1022402555',
            '1022433179',
            '1022483620',
            '1022925858',
            '1022937598',
            '1022947180',
            '1022948387',
            '1022974154',
            '1022979898',
            '1022985423',
            '1022990696',
            '1022991072',
            '1022992318',
            '1022992980',
            '1023005445',
            '1023010369',
            '1023016071',
            '1023034048',
            '1023034724',
            '1023037292',
            '1023038168',
            '1023242481',
            '1023366448',
            '1023389948',
            '1023866137',
            '1023885006',
            '1023921799',
            '1023923534',
            '1023929163',
            '1023939602',
            '1023947623',
            '1023955185',
            '1023955612',
            '1023957204',
            '1023960746',
            '1023971986',
            '1023972501',
            '1023975028',
            '1023977781',
            '1024476556',
            '1024480672',
            '1024557877',
            '1024563959',
            '1024566327',
            '1024569414',
            '1024570168',
            '1024574110',
            '1024577921',
            '1024578024',
            '1024581726',
            '1024583024',
            '1024586717',
            '1024591222',
            '1024597253',
            '1024597521',
            '1024602396',
            '1025140013',
            '1025140812',
            '1026255706',
            '1026276085',
            '1026276088',
            '1026279953',
            '1026295239',
            '1026295523',
            '1026301359',
            '1026304172',
            '1026304611',
            '1026573726',
            '1026580019',
            '1026585631',
            '1027523600',
            '1028782482',
            '1028782484',
            '1028784648',
            '1028785975',
            '1028821401',
            '1028843055',
            '1028864723',
            '1028892399',
            '1029280968',
            '1029283922',
            '1029284586',
            '1029285268',
            '1029288009',
            '1030521941',
            '1030558660',
            '1030609578',
            '1030634943',
            '1030643126',
            '1030651089',
            '1030656001',
            '1030657797',
            '1030694722',
            '1031120234',
            '1031129322',
            '1031137015',
            '1031138139',
            '1031146329',
            '1031148876',
            '1031154408',
            '1031156087',
            '1031166570',
            '1031179920',
            '1031640944',
            '1032429826',
            '1032677830',
            '1033676217',
            '1033676654',
            '1033685689',
            '1033691393',
            '1033698603',
            '1033717340',
            '1033739704',
            '1033743521',
            '1033764169',
            '1033772791',
            '1033780940',
            '1033782501',
            '1033783887',
            '1033788858',
            '1033789462',
            '1033790024',
            '1033791659',
            '1033792358',
            '1033799702',
            '1033807237',
            '1033808776',
            '1033816489',
            '1034288230',
            '1034298572',
            '1034657270',
            '1036645788',
            '1045715582',
            '1050726501',
            '1055750520',
            '1056506610',
            '1064187348',
            '1066058699',
            '1066085699',
            '1068046762',
            '1070584671',
            '1070782456',
            '1072006084',
            '1072492566',
            '1073668986',
            '1073669005',
            '1073669065',
            '1073670977',
            '1073673608',
            '1073696608',
            '1073713472',
            '1078747511',
            '1079187520',
            '1080262351',
            '1086721711',
            '1088315846',
            '1088336980',
            '1096482098',
            '1096482935',
            '1096807296',
            '1098796339',
            '1106776854',
            '1111784611',
            '1112416885',
            '1115421294',
            '1115914427',
            '1118120541',
            '1118121902',
            '1121219320',
            '1121706129',
            '1121707845',
            '1121885555',
            '1136684518',
            '1136886564',
            '1136911233',
            '1141340707',
            '1151200265',
            '1185442104',
            '1192756080',
            '1192814633',
            '1193521981',
            '1193522409',
            '1206214750',
            '1206218267',
            '1218213218',
            '1218213914',
            '1233498468',
            '1233507121',
            '1233512604',
            '1233888432',
            '1233888638',
            '1233899264',
            '1233907998',
            '10000002730',
            '10000003150',
            '10001057297',
            '10001342704',
            '10123566069',
            '10229898948',
            '10300678294',
            '10779755741',


        ];
        $faker = Faker::create('es_ES');
        for ($i = 0; $i < count($cedulasx); $i++) {
            SisNnaj::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'prm_escomfam_id' => 227]);
            DB::table('fi_datos_basicos')->insert(array(
                's_primer_nombre' => $faker->firstName,
                's_segundo_nombre' => $faker->firstName,
                's_primer_apellido' => $faker->lastName,
                's_segundo_apellido' => $faker->lastName,
                's_apodo' => $faker->firstName,
                'sis_nnaj_id' => $i + 1,
                // 'sis_nnaj_id' => '1',
                'prm_vestimenta_id' => 1,
                'prm_tipoblaci_id' => $faker->randomElement(['650', '651', '2323']),
                'prm_estrateg_id' => $faker->randomElement(['651', '235', '2323']),
                'sis_esta_id' => '1',
                'user_crea_id' => '1',
                'user_edita_id' => '1',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'sis_docfuen_id' => 2,

            ));
            NnajFiCsd::create([
                'fi_datos_basico_id' => $i + 1,
                'prm_etnia_id' => 1,
                'prm_poblacion_etnia_id' => 1,

                'prm_gsanguino_id' => $faker->randomElement(['146', '147', '148', '149']),
                'prm_factor_rh_id' => $faker->randomElement(['150', '151']),
                'prm_estado_civil_id' => $faker->randomElement(['152', '153', '154', '155', '156']),
                'sis_docfuen_id' => 2,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
            ]);
            NnajDocu::create([
                's_documento' =>  $cedulasx[$i],
                'fi_datos_basico_id' => $i + 1,
                'prm_ayuda_id' => 1,
                'prm_tipodocu_id' => $faker->randomElement(['16', '17', '18', '19']),
                'prm_doc_fisico_id' => $faker->randomElement(['228', '227']),
                'sis_municipio_id' => 2,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_docfuen_id' => 2,
            ]);
            NnajFocali::create([
                's_nombre_focalizacion' => 'NA',
                's_lugar_focalizacion' => 'NA',
                'fi_datos_basico_id' => $i + 1,

                'sis_upzbarri_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_docfuen_id' => 2,
            ]);

            NnajNacimi::create([
                'fi_datos_basico_id' => $i + 1,
                'd_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'sis_municipio_id' => '2',
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_docfuen_id' => 2,
            ]);

            NnajSexo::create([
                'fi_datos_basico_id' => $i + 1,
                's_nombre_identitario' => $faker->firstName,
                'prm_sexo_id' => $faker->randomElement(['20', '21', '22']),
                'prm_identidad_genero_id' => $faker->randomElement(['23', '24', '25', '26', '27']),
                'prm_orientacion_sexual_id' => 1,
                'sis_docfuen_id' => 2,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
            ]);
            NnajSitMil::create([
                'fi_datos_basico_id' => $i + 1,
                'prm_situacion_militar_id' => 1,
                'prm_clase_libreta_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_docfuen_id' => 2,
            ]);
            NnajUpi::create([
                'sis_nnaj_id' => $i + 1,
                'sis_depen_id' => 2,
                'prm_principa_id' => 227,
            ]);

            FiDiligenc::create([
                'diligenc' => date('Y-m-d'),
                'fi_datos_basico_id' => $i + 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
            ]);
        }
        SisNnaj::create(['id' => 395, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:23:19', 'updated_at' => '2020-10-07 15:23:19',]);
        SisNnaj::create(['id' => 396, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:36:14', 'updated_at' => '2020-10-07 15:36:14',]);
        SisNnaj::create(['id' => 397, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 10:42:54', 'updated_at' => '2020-10-09 10:42:54',]);
        SisNnaj::create(['id' => 398, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 10:54:28', 'updated_at' => '2020-10-09 10:54:28',]);
        SisNnaj::create(['id' => 399, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 10:57:51', 'updated_at' => '2020-10-09 10:57:51',]);
        SisNnaj::create(['id' => 400, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:27:38', 'updated_at' => '2020-10-09 11:27:38',]);
        SisNnaj::create(['id' => 401, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:38:13', 'updated_at' => '2020-10-09 11:38:13',]);
        SisNnaj::create(['id' => 402, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:43:52', 'updated_at' => '2020-10-09 11:43:52',]);
        SisNnaj::create(['id' => 403, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:50:09', 'updated_at' => '2020-10-09 11:50:09',]);
        SisNnaj::create(['id' => 404, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:08:46', 'updated_at' => '2020-10-09 12:08:46',]);
        SisNnaj::create(['id' => 405, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:12:15', 'updated_at' => '2020-10-09 12:12:15',]);
        SisNnaj::create(['id' => 406, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:14:56', 'updated_at' => '2020-10-09 12:14:56',]);
        SisNnaj::create(['id' => 407, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 13:13:56', 'updated_at' => '2020-10-09 13:13:56',]);
        SisNnaj::create(['id' => 408, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 13:40:48', 'updated_at' => '2020-10-09 13:40:48',]);
        SisNnaj::create(['id' => 409, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 13:43:51', 'updated_at' => '2020-10-09 13:43:51',]);
        SisNnaj::create(['id' => 410, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 14:25:29', 'updated_at' => '2020-10-09 14:25:29',]);
        SisNnaj::create(['id' => 411, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 15:09:30', 'updated_at' => '2020-10-09 15:09:30',]);
        SisNnaj::create(['id' => 412, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 15:55:33', 'updated_at' => '2020-10-09 15:55:33',]);
        SisNnaj::create(['id' => 413, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 16:01:53', 'updated_at' => '2020-10-09 16:01:53',]);
        SisNnaj::create(['id' => 414, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 15:39:07', 'updated_at' => '2020-10-11 15:39:07',]);
        SisNnaj::create(['id' => 415, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 16:06:40', 'updated_at' => '2020-10-11 16:06:40',]);
        SisNnaj::create(['id' => 416, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 16:58:56', 'updated_at' => '2020-10-11 16:58:56',]);
        SisNnaj::create(['id' => 417, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 17:06:28', 'updated_at' => '2020-10-11 17:06:28',]);
        SisNnaj::create(['id' => 418, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 17:12:07', 'updated_at' => '2020-10-11 17:12:07',]);
        SisNnaj::create(['id' => 419, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 17:28:29', 'updated_at' => '2020-10-11 17:28:29',]);
        SisNnaj::create(['id' => 420, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 19:39:10', 'updated_at' => '2020-10-11 19:39:10',]);
        SisNnaj::create(['id' => 421, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 19:53:47', 'updated_at' => '2020-10-11 19:53:47',]);
        SisNnaj::create(['id' => 422, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 19:55:44', 'updated_at' => '2020-10-11 19:55:44',]);
        SisNnaj::create(['id' => 423, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 20:19:00', 'updated_at' => '2020-10-11 20:19:00',]);
        SisNnaj::create(['id' => 424, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 20:21:25', 'updated_at' => '2020-10-11 20:21:25',]);
        SisNnaj::create(['id' => 425, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 21:44:35', 'updated_at' => '2020-10-11 21:44:35',]);
        SisNnaj::create(['id' => 426, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 22:02:27', 'updated_at' => '2020-10-11 22:02:27',]);
        SisNnaj::create(['id' => 427, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 22:04:24', 'updated_at' => '2020-10-11 22:04:24',]);
        SisNnaj::create(['id' => 428, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 15:37:48', 'updated_at' => '2020-10-12 15:37:48',]);
        SisNnaj::create(['id' => 429, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 16:48:52', 'updated_at' => '2020-10-12 16:48:52',]);
        SisNnaj::create(['id' => 430, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 16:56:58', 'updated_at' => '2020-10-12 16:56:58',]);
        SisNnaj::create(['id' => 431, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 18:16:26', 'updated_at' => '2020-10-12 18:16:26',]);
        SisNnaj::create(['id' => 432, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 19:03:16', 'updated_at' => '2020-10-12 19:03:16',]);
        SisNnaj::create(['id' => 433, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 21:12:21', 'updated_at' => '2020-10-12 21:12:21',]);
        SisNnaj::create(['id' => 434, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 21:20:39', 'updated_at' => '2020-10-12 21:20:39',]);
        SisNnaj::create(['id' => 435, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 21:51:00', 'updated_at' => '2020-10-12 21:51:00',]);
        SisNnaj::create(['id' => 436, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 15:35:26', 'updated_at' => '2020-10-13 15:35:26',]);
        SisNnaj::create(['id' => 437, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 16:29:57', 'updated_at' => '2020-10-13 16:29:57',]);
        SisNnaj::create(['id' => 438, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 16:50:38', 'updated_at' => '2020-10-13 16:50:38',]);
        SisNnaj::create(['id' => 439, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 16:53:35', 'updated_at' => '2020-10-13 16:53:35',]);
        SisNnaj::create(['id' => 440, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 17:02:59', 'updated_at' => '2020-10-13 17:02:59',]);
        SisNnaj::create(['id' => 441, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 08:29:09', 'updated_at' => '2020-10-14 08:29:09',]);
        SisNnaj::create(['id' => 442, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 08:47:30', 'updated_at' => '2020-10-14 08:47:30',]);
        SisNnaj::create(['id' => 443, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 08:52:49', 'updated_at' => '2020-10-14 08:52:49',]);
        SisNnaj::create(['id' => 444, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 09:47:55', 'updated_at' => '2020-10-14 09:47:55',]);
        SisNnaj::create(['id' => 445, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 10:33:37', 'updated_at' => '2020-10-14 10:33:37',]);
        SisNnaj::create(['id' => 446, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 10:41:08', 'updated_at' => '2020-10-14 10:41:08',]);
        SisNnaj::create(['id' => 447, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:21:39', 'updated_at' => '2020-10-14 11:21:39',]);
        SisNnaj::create(['id' => 448, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:28:50', 'updated_at' => '2020-10-14 11:28:50',]);
        SisNnaj::create(['id' => 449, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:40:47', 'updated_at' => '2020-10-14 11:40:47',]);
        SisNnaj::create(['id' => 450, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:47:58', 'updated_at' => '2020-10-14 11:47:58',]);
        SisNnaj::create(['id' => 451, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:50:11', 'updated_at' => '2020-10-14 11:50:11',]);
        SisNnaj::create(['id' => 452, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:50:40', 'updated_at' => '2020-10-14 11:50:40',]);
        SisNnaj::create(['id' => 453, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:57:29', 'updated_at' => '2020-10-14 11:57:29',]);
        SisNnaj::create(['id' => 454, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:59:25', 'updated_at' => '2020-10-14 11:59:25',]);
        SisNnaj::create(['id' => 455, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 12:45:26', 'updated_at' => '2020-10-14 12:45:26',]);
        SisNnaj::create(['id' => 456, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:17:07', 'updated_at' => '2020-10-14 13:17:07',]);
        SisNnaj::create(['id' => 457, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:19:40', 'updated_at' => '2020-10-14 13:19:40',]);
        SisNnaj::create(['id' => 458, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:39:10', 'updated_at' => '2020-10-14 13:39:10',]);
        SisNnaj::create(['id' => 459, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 14:21:58', 'updated_at' => '2020-10-14 14:21:58',]);
        SisNnaj::create(['id' => 460, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 14:55:40', 'updated_at' => '2020-10-14 14:55:40',]);
        SisNnaj::create(['id' => 461, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 15:20:15', 'updated_at' => '2020-10-14 15:20:15',]);
        SisNnaj::create(['id' => 462, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 15:27:38', 'updated_at' => '2020-10-14 15:27:38',]);
        SisNnaj::create(['id' => 463, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 16:18:03', 'updated_at' => '2020-10-14 16:18:03',]);
        SisNnaj::create(['id' => 464, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 16:34:20', 'updated_at' => '2020-10-14 16:34:20',]);
        SisNnaj::create(['id' => 465, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 09:42:49', 'updated_at' => '2020-10-15 09:42:49',]);
        SisNnaj::create(['id' => 466, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 09:52:32', 'updated_at' => '2020-10-15 09:52:32',]);
        SisNnaj::create(['id' => 467, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:32:58', 'updated_at' => '2020-10-15 10:32:58',]);
        SisNnaj::create(['id' => 468, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:35:47', 'updated_at' => '2020-10-15 10:35:47',]);
        SisNnaj::create(['id' => 469, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:38:59', 'updated_at' => '2020-10-15 10:38:59',]);
        SisNnaj::create(['id' => 470, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:39:11', 'updated_at' => '2020-10-15 10:39:11',]);
        SisNnaj::create(['id' => 471, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:54:01', 'updated_at' => '2020-10-15 10:54:01',]);
        SisNnaj::create(['id' => 472, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:55:19', 'updated_at' => '2020-10-15 10:55:19',]);
        SisNnaj::create(['id' => 473, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 11:21:52', 'updated_at' => '2020-10-15 11:21:52',]);
        SisNnaj::create(['id' => 474, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:14:33', 'updated_at' => '2020-10-15 13:14:33',]);
        SisNnaj::create(['id' => 475, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:24:03', 'updated_at' => '2020-10-15 13:24:03',]);
        SisNnaj::create(['id' => 476, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:35:36', 'updated_at' => '2020-10-15 13:35:36',]);
        SisNnaj::create(['id' => 477, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:43:16', 'updated_at' => '2020-10-15 13:43:16',]);
        SisNnaj::create(['id' => 478, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:44:56', 'updated_at' => '2020-10-15 13:44:56',]);
        SisNnaj::create(['id' => 479, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:45:24', 'updated_at' => '2020-10-15 13:45:24',]);
        SisNnaj::create(['id' => 480, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:48:44', 'updated_at' => '2020-10-15 13:48:44',]);
        SisNnaj::create(['id' => 481, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:52:31', 'updated_at' => '2020-10-15 13:52:31',]);
        SisNnaj::create(['id' => 482, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:57:21', 'updated_at' => '2020-10-15 13:57:21',]);
        SisNnaj::create(['id' => 483, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:57:23', 'updated_at' => '2020-10-15 13:57:23',]);
        SisNnaj::create(['id' => 484, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 14:00:09', 'updated_at' => '2020-10-15 14:00:09',]);
        SisNnaj::create(['id' => 485, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 14:04:12', 'updated_at' => '2020-10-15 14:04:12',]);
        SisNnaj::create(['id' => 486, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 14:12:42', 'updated_at' => '2020-10-15 14:12:42',]);
        SisNnaj::create(['id' => 487, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:14:09', 'updated_at' => '2020-10-15 15:14:09',]);
        SisNnaj::create(['id' => 488, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:15:49', 'updated_at' => '2020-10-15 15:15:49',]);
        SisNnaj::create(['id' => 489, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:23:06', 'updated_at' => '2020-10-15 15:23:06',]);
        SisNnaj::create(['id' => 490, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:29:24', 'updated_at' => '2020-10-15 15:29:24',]);
        SisNnaj::create(['id' => 491, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:37:47', 'updated_at' => '2020-10-15 15:37:47',]);
        SisNnaj::create(['id' => 492, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:47:53', 'updated_at' => '2020-10-15 15:47:53',]);
        SisNnaj::create(['id' => 493, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 16:00:48', 'updated_at' => '2020-10-15 16:00:48',]);
        SisNnaj::create(['id' => 494, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 16:11:20', 'updated_at' => '2020-10-15 16:11:20',]);
        SisNnaj::create(['id' => 495, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 09:58:18', 'updated_at' => '2020-10-16 09:58:18',]);
        SisNnaj::create(['id' => 496, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:05:08', 'updated_at' => '2020-10-16 10:05:08',]);
        SisNnaj::create(['id' => 497, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:07:25', 'updated_at' => '2020-10-16 10:07:25',]);
        SisNnaj::create(['id' => 498, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:11:56', 'updated_at' => '2020-10-16 10:11:56',]);
        SisNnaj::create(['id' => 499, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:18:41', 'updated_at' => '2020-10-16 10:18:41',]);
        SisNnaj::create(['id' => 500, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:20:48', 'updated_at' => '2020-10-16 10:20:48',]);
        SisNnaj::create(['id' => 501, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:23:03', 'updated_at' => '2020-10-16 10:23:03',]);
        SisNnaj::create(['id' => 502, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:27:01', 'updated_at' => '2020-10-16 10:27:01',]);
        SisNnaj::create(['id' => 503, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:32:08', 'updated_at' => '2020-10-16 10:32:08',]);
        SisNnaj::create(['id' => 504, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:48:41', 'updated_at' => '2020-10-16 10:48:41',]);
        SisNnaj::create(['id' => 505, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:06:30', 'updated_at' => '2020-10-16 11:06:30',]);
        SisNnaj::create(['id' => 506, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:09:51', 'updated_at' => '2020-10-16 11:09:51',]);
        SisNnaj::create(['id' => 507, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:19:30', 'updated_at' => '2020-10-16 11:19:30',]);
        SisNnaj::create(['id' => 508, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:22:03', 'updated_at' => '2020-10-16 11:22:03',]);
        SisNnaj::create(['id' => 509, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:29:47', 'updated_at' => '2020-10-16 11:29:47',]);
        SisNnaj::create(['id' => 510, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:44:11', 'updated_at' => '2020-10-16 11:44:11',]);
        SisNnaj::create(['id' => 511, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:50:18', 'updated_at' => '2020-10-16 11:50:18',]);
        SisNnaj::create(['id' => 512, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:54:01', 'updated_at' => '2020-10-16 11:54:01',]);
        SisNnaj::create(['id' => 513, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:55:28', 'updated_at' => '2020-10-16 11:55:28',]);
        SisNnaj::create(['id' => 514, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:05:33', 'updated_at' => '2020-10-16 12:05:33',]);
        SisNnaj::create(['id' => 515, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:07:26', 'updated_at' => '2020-10-16 12:07:26',]);
        SisNnaj::create(['id' => 516, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:28:53', 'updated_at' => '2020-10-16 12:28:53',]);
        SisNnaj::create(['id' => 517, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:31:02', 'updated_at' => '2020-10-16 12:31:02',]);
        SisNnaj::create(['id' => 518, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:32:22', 'updated_at' => '2020-10-16 12:32:22',]);
        SisNnaj::create(['id' => 519, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:33:37', 'updated_at' => '2020-10-16 12:33:37',]);
        SisNnaj::create(['id' => 520, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:34:45', 'updated_at' => '2020-10-16 12:34:45',]);
        SisNnaj::create(['id' => 521, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 13:26:05', 'updated_at' => '2020-10-16 13:26:05',]);
        SisNnaj::create(['id' => 522, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 13:31:03', 'updated_at' => '2020-10-16 13:31:03',]);
        SisNnaj::create(['id' => 523, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 13:38:11', 'updated_at' => '2020-10-16 13:38:11',]);
        SisNnaj::create(['id' => 524, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:18:11', 'updated_at' => '2020-10-16 14:18:11',]);
        SisNnaj::create(['id' => 525, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:26:17', 'updated_at' => '2020-10-16 14:26:17',]);
        SisNnaj::create(['id' => 526, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:27:14', 'updated_at' => '2020-10-16 14:27:14',]);
        SisNnaj::create(['id' => 527, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:38:51', 'updated_at' => '2020-10-16 14:38:51',]);
        SisNnaj::create(['id' => 528, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:02:14', 'updated_at' => '2020-10-16 15:02:14',]);
        SisNnaj::create(['id' => 529, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:27:51', 'updated_at' => '2020-10-16 15:27:51',]);
        SisNnaj::create(['id' => 530, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:33:10', 'updated_at' => '2020-10-16 15:33:10',]);
        SisNnaj::create(['id' => 531, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:39:28', 'updated_at' => '2020-10-16 15:39:28',]);
        SisNnaj::create(['id' => 532, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:40:22', 'updated_at' => '2020-10-16 15:40:22',]);
        SisNnaj::create(['id' => 533, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:42:11', 'updated_at' => '2020-10-16 15:42:11',]);
        SisNnaj::create(['id' => 534, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:56:47', 'updated_at' => '2020-10-16 15:56:47',]);
        SisNnaj::create(['id' => 535, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:18:41', 'updated_at' => '2020-10-16 16:18:41',]);
        SisNnaj::create(['id' => 536, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:21:27', 'updated_at' => '2020-10-16 16:21:27',]);
        SisNnaj::create(['id' => 537, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:22:44', 'updated_at' => '2020-10-16 16:22:44',]);
        SisNnaj::create(['id' => 538, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:39:46', 'updated_at' => '2020-10-16 16:39:46',]);
        SisNnaj::create(['id' => 539, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:15:58', 'updated_at' => '2020-10-20 09:15:58',]);
        SisNnaj::create(['id' => 540, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:24:32', 'updated_at' => '2020-10-20 09:24:32',]);
        SisNnaj::create(['id' => 541, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:27:38', 'updated_at' => '2020-10-20 09:27:38',]);
        SisNnaj::create(['id' => 542, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:30:31', 'updated_at' => '2020-10-20 09:30:31',]);
        SisNnaj::create(['id' => 543, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:44:15', 'updated_at' => '2020-10-20 09:44:15',]);
        SisNnaj::create(['id' => 544, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:48:28', 'updated_at' => '2020-10-20 09:48:28',]);
        SisNnaj::create(['id' => 545, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:52:39', 'updated_at' => '2020-10-20 09:52:39',]);
        SisNnaj::create(['id' => 546, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:53:50', 'updated_at' => '2020-10-20 09:53:50',]);
        SisNnaj::create(['id' => 547, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:56:21', 'updated_at' => '2020-10-20 09:56:21',]);
        SisNnaj::create(['id' => 548, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:04:45', 'updated_at' => '2020-10-20 10:04:45',]);
        SisNnaj::create(['id' => 549, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:11:53', 'updated_at' => '2020-10-20 10:11:53',]);
        SisNnaj::create(['id' => 550, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:16:35', 'updated_at' => '2020-10-20 10:16:35',]);
        SisNnaj::create(['id' => 551, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:28:23', 'updated_at' => '2020-10-20 10:28:23',]);
        SisNnaj::create(['id' => 552, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:31:14', 'updated_at' => '2020-10-20 10:31:14',]);
        SisNnaj::create(['id' => 553, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:33:00', 'updated_at' => '2020-10-20 10:33:00',]);
        SisNnaj::create(['id' => 554, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:37:12', 'updated_at' => '2020-10-20 10:37:12',]);
        SisNnaj::create(['id' => 555, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:18:37', 'updated_at' => '2020-10-20 11:18:37',]);
        SisNnaj::create(['id' => 556, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:23:06', 'updated_at' => '2020-10-20 11:23:06',]);
        SisNnaj::create(['id' => 557, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:34:14', 'updated_at' => '2020-10-20 11:34:14',]);
        SisNnaj::create(['id' => 558, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:39:33', 'updated_at' => '2020-10-20 11:39:33',]);
        SisNnaj::create(['id' => 559, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:41:01', 'updated_at' => '2020-10-20 11:41:01',]);
        SisNnaj::create(['id' => 560, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:43:38', 'updated_at' => '2020-10-20 11:43:38',]);
        SisNnaj::create(['id' => 561, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:48:17', 'updated_at' => '2020-10-20 11:48:17',]);
        SisNnaj::create(['id' => 562, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 13:31:33', 'updated_at' => '2020-10-20 13:31:33',]);
        SisNnaj::create(['id' => 563, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 13:39:48', 'updated_at' => '2020-10-20 13:39:48',]);
        SisNnaj::create(['id' => 564, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:09:25', 'updated_at' => '2020-10-20 14:09:25',]);
        SisNnaj::create(['id' => 565, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:16:15', 'updated_at' => '2020-10-20 14:16:15',]);
        SisNnaj::create(['id' => 566, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:17:51', 'updated_at' => '2020-10-20 14:17:51',]);
        SisNnaj::create(['id' => 567, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:21:11', 'updated_at' => '2020-10-20 14:21:11',]);
        SisNnaj::create(['id' => 568, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:22:12', 'updated_at' => '2020-10-20 14:22:12',]);
        SisNnaj::create(['id' => 569, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:40:48', 'updated_at' => '2020-10-20 14:40:48',]);
        SisNnaj::create(['id' => 570, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:00:50', 'updated_at' => '2020-10-20 15:00:50',]);
        SisNnaj::create(['id' => 571, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:02:11', 'updated_at' => '2020-10-20 15:02:11',]);
        SisNnaj::create(['id' => 572, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:28:46', 'updated_at' => '2020-10-20 15:28:46',]);
        SisNnaj::create(['id' => 573, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:43:17', 'updated_at' => '2020-10-20 15:43:17',]);
        SisNnaj::create(['id' => 574, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:46:05', 'updated_at' => '2020-10-20 15:46:05',]);
        SisNnaj::create(['id' => 575, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:52:15', 'updated_at' => '2020-10-20 15:52:15',]);
        SisNnaj::create(['id' => 576, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:53:03', 'updated_at' => '2020-10-20 15:53:03',]);
        SisNnaj::create(['id' => 577, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:55:19', 'updated_at' => '2020-10-20 15:55:19',]);
        SisNnaj::create(['id' => 578, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:56:56', 'updated_at' => '2020-10-20 15:56:56',]);
        SisNnaj::create(['id' => 579, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:58:07', 'updated_at' => '2020-10-20 15:58:07',]);
        SisNnaj::create(['id' => 580, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:59:27', 'updated_at' => '2020-10-20 15:59:27',]);
        SisNnaj::create(['id' => 581, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:59:42', 'updated_at' => '2020-10-20 15:59:42',]);
        SisNnaj::create(['id' => 582, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:01:26', 'updated_at' => '2020-10-20 16:01:26',]);
        SisNnaj::create(['id' => 583, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:10:13', 'updated_at' => '2020-10-20 16:10:13',]);
        SisNnaj::create(['id' => 584, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:12:29', 'updated_at' => '2020-10-20 16:12:29',]);
        SisNnaj::create(['id' => 585, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:23:09', 'updated_at' => '2020-10-20 16:23:09',]);
        SisNnaj::create(['id' => 586, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 10:49:02', 'updated_at' => '2020-10-21 10:49:02',]);
        SisNnaj::create(['id' => 587, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:00:05', 'updated_at' => '2020-10-21 11:00:05',]);
        SisNnaj::create(['id' => 588, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:13:31', 'updated_at' => '2020-10-21 11:13:31',]);
        SisNnaj::create(['id' => 589, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:29:45', 'updated_at' => '2020-10-21 11:29:45',]);
        SisNnaj::create(['id' => 590, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:36:45', 'updated_at' => '2020-10-21 11:36:45',]);
        SisNnaj::create(['id' => 591, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:57:43', 'updated_at' => '2020-10-21 11:57:43',]);
        SisNnaj::create(['id' => 592, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:02:00', 'updated_at' => '2020-10-21 12:02:00',]);
        SisNnaj::create(['id' => 593, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:27:51', 'updated_at' => '2020-10-21 12:27:51',]);
        SisNnaj::create(['id' => 594, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:27:57', 'updated_at' => '2020-10-21 12:27:57',]);
        SisNnaj::create(['id' => 595, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:34:09', 'updated_at' => '2020-10-21 12:34:09',]);
        SisNnaj::create(['id' => 596, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 13:54:42', 'updated_at' => '2020-10-21 13:54:42',]);
        SisNnaj::create(['id' => 597, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 14:26:54', 'updated_at' => '2020-10-21 14:26:54',]);
        SisNnaj::create(['id' => 598, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 14:28:45', 'updated_at' => '2020-10-21 14:28:45',]);
        SisNnaj::create(['id' => 599, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 14:38:50', 'updated_at' => '2020-10-21 14:38:50',]);
        SisNnaj::create(['id' => 600, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 09:30:47', 'updated_at' => '2020-10-22 09:30:47',]);
        SisNnaj::create(['id' => 601, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 10:39:51', 'updated_at' => '2020-10-22 10:39:51',]);
        SisNnaj::create(['id' => 602, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 10:40:08', 'updated_at' => '2020-10-22 10:40:08',]);
        SisNnaj::create(['id' => 603, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:02:54', 'updated_at' => '2020-10-22 11:02:54',]);
        SisNnaj::create(['id' => 604, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:05:05', 'updated_at' => '2020-10-22 11:05:05',]);
        SisNnaj::create(['id' => 605, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:16:50', 'updated_at' => '2020-10-22 11:16:50',]);
        SisNnaj::create(['id' => 606, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:22:51', 'updated_at' => '2020-10-22 11:22:51',]);
        SisNnaj::create(['id' => 607, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:51:47', 'updated_at' => '2020-10-22 11:51:47',]);
        SisNnaj::create(['id' => 608, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 12:02:45', 'updated_at' => '2020-10-22 12:02:45',]);
        SisNnaj::create(['id' => 609, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:16:11', 'updated_at' => '2020-10-22 14:16:11',]);
        SisNnaj::create(['id' => 610, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:22:02', 'updated_at' => '2020-10-22 14:22:02',]);
        SisNnaj::create(['id' => 611, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:23:35', 'updated_at' => '2020-10-22 14:23:35',]);
        SisNnaj::create(['id' => 612, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:25:54', 'updated_at' => '2020-10-22 14:25:54',]);
        SisNnaj::create(['id' => 613, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:28:08', 'updated_at' => '2020-10-22 14:28:08',]);
        SisNnaj::create(['id' => 614, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:30:12', 'updated_at' => '2020-10-22 14:30:12',]);
        SisNnaj::create(['id' => 615, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:32:49', 'updated_at' => '2020-10-22 14:32:49',]);
        SisNnaj::create(['id' => 616, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:55:15', 'updated_at' => '2020-10-22 14:55:15',]);
        SisNnaj::create(['id' => 617, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 15:04:32', 'updated_at' => '2020-10-22 15:04:32',]);
        SisNnaj::create(['id' => 618, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 15:25:46', 'updated_at' => '2020-10-22 15:25:46',]);
        SisNnaj::create(['id' => 619, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 15:57:03', 'updated_at' => '2020-10-22 15:57:03',]);
        SisNnaj::create(['id' => 620, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 16:02:17', 'updated_at' => '2020-10-22 16:02:17',]);
        SisNnaj::create(['id' => 621, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:04:24', 'updated_at' => '2020-10-23 09:04:24',]);
        SisNnaj::create(['id' => 622, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:11:11', 'updated_at' => '2020-10-23 09:11:11',]);
        SisNnaj::create(['id' => 623, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:13:19', 'updated_at' => '2020-10-23 09:13:19',]);
        SisNnaj::create(['id' => 624, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:16:01', 'updated_at' => '2020-10-23 09:16:01',]);
        SisNnaj::create(['id' => 625, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 10:35:19', 'updated_at' => '2020-10-23 10:35:19',]);
        SisNnaj::create(['id' => 626, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 10:46:25', 'updated_at' => '2020-10-23 10:46:25',]);
        SisNnaj::create(['id' => 627, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 10:58:13', 'updated_at' => '2020-10-23 10:58:13',]);
        SisNnaj::create(['id' => 628, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:03:53', 'updated_at' => '2020-10-23 11:03:53',]);
        SisNnaj::create(['id' => 629, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:19:15', 'updated_at' => '2020-10-23 11:19:15',]);
        SisNnaj::create(['id' => 630, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:25:17', 'updated_at' => '2020-10-23 11:25:17',]);
        SisNnaj::create(['id' => 631, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:28:15', 'updated_at' => '2020-10-23 11:28:15',]);
        SisNnaj::create(['id' => 632, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:31:25', 'updated_at' => '2020-10-23 11:31:25',]);
        SisNnaj::create(['id' => 633, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:32:52', 'updated_at' => '2020-10-23 11:32:52',]);
        SisNnaj::create(['id' => 634, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:40:12', 'updated_at' => '2020-10-23 11:40:12',]);
        SisNnaj::create(['id' => 635, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:55:30', 'updated_at' => '2020-10-23 11:55:30',]);
        SisNnaj::create(['id' => 636, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 12:03:09', 'updated_at' => '2020-10-23 12:03:09',]);
        SisNnaj::create(['id' => 637, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:20:49', 'updated_at' => '2020-10-23 14:20:49',]);
        SisNnaj::create(['id' => 638, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:45:25', 'updated_at' => '2020-10-23 14:45:25',]);
        SisNnaj::create(['id' => 639, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:50:13', 'updated_at' => '2020-10-23 14:50:13',]);
        SisNnaj::create(['id' => 640, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:54:04', 'updated_at' => '2020-10-23 14:54:04',]);
        SisNnaj::create(['id' => 641, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:54:16', 'updated_at' => '2020-10-23 14:54:16',]);
        SisNnaj::create(['id' => 642, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:17:39', 'updated_at' => '2020-10-23 15:17:39',]);
        SisNnaj::create(['id' => 643, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:43:06', 'updated_at' => '2020-10-23 15:43:06',]);
        SisNnaj::create(['id' => 644, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:46:26', 'updated_at' => '2020-10-23 15:46:26',]);
        SisNnaj::create(['id' => 645, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 16:22:54', 'updated_at' => '2020-10-23 16:22:54',]);
        SisNnaj::create(['id' => 646, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 16:28:46', 'updated_at' => '2020-10-23 16:28:46',]);
        SisNnaj::create(['id' => 647, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 16:30:17', 'updated_at' => '2020-10-23 16:30:17',]);
        SisNnaj::create(['id' => 648, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:28:25', 'updated_at' => '2020-10-27 09:28:25',]);
        SisNnaj::create(['id' => 649, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:46:41', 'updated_at' => '2020-10-27 09:46:41',]);
        SisNnaj::create(['id' => 650, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:55:28', 'updated_at' => '2020-10-27 09:55:28',]);
        SisNnaj::create(['id' => 651, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:58:36', 'updated_at' => '2020-10-27 09:58:36',]);
        SisNnaj::create(['id' => 652, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:08:46', 'updated_at' => '2020-10-27 10:08:46',]);
        SisNnaj::create(['id' => 653, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:16:30', 'updated_at' => '2020-10-27 10:16:30',]);
        SisNnaj::create(['id' => 654, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:26:27', 'updated_at' => '2020-10-27 10:26:27',]);
        SisNnaj::create(['id' => 655, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:32:18', 'updated_at' => '2020-10-27 10:32:18',]);
        SisNnaj::create(['id' => 656, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:57:49', 'updated_at' => '2020-10-27 10:57:49',]);
        SisNnaj::create(['id' => 657, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:06:04', 'updated_at' => '2020-10-27 11:06:04',]);
        SisNnaj::create(['id' => 658, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:07:41', 'updated_at' => '2020-10-27 11:07:41',]);
        SisNnaj::create(['id' => 659, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:07:46', 'updated_at' => '2020-10-27 11:07:46',]);
        SisNnaj::create(['id' => 660, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:09:52', 'updated_at' => '2020-10-27 11:09:52',]);
        SisNnaj::create(['id' => 661, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:11:53', 'updated_at' => '2020-10-27 11:11:53',]);
        SisNnaj::create(['id' => 662, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:13:33', 'updated_at' => '2020-10-27 11:13:33',]);
        SisNnaj::create(['id' => 663, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:14:59', 'updated_at' => '2020-10-27 11:14:59',]);
        SisNnaj::create(['id' => 664, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:18:05', 'updated_at' => '2020-10-27 11:18:05',]);
        SisNnaj::create(['id' => 665, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:21:58', 'updated_at' => '2020-10-27 11:21:58',]);
        SisNnaj::create(['id' => 666, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:43:46', 'updated_at' => '2020-10-27 11:43:46',]);
        SisNnaj::create(['id' => 667, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:51:03', 'updated_at' => '2020-10-27 11:51:03',]);
        SisNnaj::create(['id' => 668, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:53:19', 'updated_at' => '2020-10-27 11:53:19',]);
        SisNnaj::create(['id' => 669, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:54:46', 'updated_at' => '2020-10-27 11:54:46',]);
        SisNnaj::create(['id' => 670, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 12:05:15', 'updated_at' => '2020-10-27 12:05:15',]);
        SisNnaj::create(['id' => 671, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 12:11:46', 'updated_at' => '2020-10-27 12:11:46',]);
        SisNnaj::create(['id' => 672, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 12:13:40', 'updated_at' => '2020-10-27 12:13:40',]);
        SisNnaj::create(['id' => 673, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:18:36', 'updated_at' => '2020-10-27 13:18:36',]);
        SisNnaj::create(['id' => 674, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:19:54', 'updated_at' => '2020-10-27 13:19:54',]);
        SisNnaj::create(['id' => 675, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:35:48', 'updated_at' => '2020-10-27 13:35:48',]);
        SisNnaj::create(['id' => 676, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:57:06', 'updated_at' => '2020-10-27 13:57:06',]);
        SisNnaj::create(['id' => 677, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:04:50', 'updated_at' => '2020-10-27 14:04:50',]);
        SisNnaj::create(['id' => 678, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:06:46', 'updated_at' => '2020-10-27 14:06:46',]);
        SisNnaj::create(['id' => 679, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:30:58', 'updated_at' => '2020-10-27 14:30:58',]);
        SisNnaj::create(['id' => 680, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 10:19:33', 'updated_at' => '2020-10-28 10:19:33',]);
        SisNnaj::create(['id' => 681, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 10:39:28', 'updated_at' => '2020-10-28 10:39:28',]);
        SisNnaj::create(['id' => 682, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:05:38', 'updated_at' => '2020-10-28 11:05:38',]);
        SisNnaj::create(['id' => 683, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:10:37', 'updated_at' => '2020-10-28 11:10:37',]);
        SisNnaj::create(['id' => 684, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:15:29', 'updated_at' => '2020-10-28 11:15:29',]);
        SisNnaj::create(['id' => 685, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:21:06', 'updated_at' => '2020-10-28 11:21:06',]);
        SisNnaj::create(['id' => 686, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:26:48', 'updated_at' => '2020-10-28 11:26:48',]);
        SisNnaj::create(['id' => 687, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:42:38', 'updated_at' => '2020-10-28 11:42:38',]);
        SisNnaj::create(['id' => 688, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:05:40', 'updated_at' => '2020-10-28 12:05:40',]);
        SisNnaj::create(['id' => 689, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:12:07', 'updated_at' => '2020-10-28 12:12:07',]);
        SisNnaj::create(['id' => 690, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:18:08', 'updated_at' => '2020-10-28 12:18:08',]);
        SisNnaj::create(['id' => 691, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:20:31', 'updated_at' => '2020-10-28 12:20:31',]);
        SisNnaj::create(['id' => 692, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:06:48', 'updated_at' => '2020-10-28 14:06:48',]);
        SisNnaj::create(['id' => 693, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:18:06', 'updated_at' => '2020-10-28 14:18:06',]);
        SisNnaj::create(['id' => 694, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:26:34', 'updated_at' => '2020-10-28 14:26:34',]);
        SisNnaj::create(['id' => 695, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:27:33', 'updated_at' => '2020-10-28 14:27:33',]);
        SisNnaj::create(['id' => 696, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:50:45', 'updated_at' => '2020-10-28 14:50:45',]);
        SisNnaj::create(['id' => 697, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:54:54', 'updated_at' => '2020-10-28 14:54:54',]);
        SisNnaj::create(['id' => 698, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:06:08', 'updated_at' => '2020-10-28 15:06:08',]);
        SisNnaj::create(['id' => 699, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:09:09', 'updated_at' => '2020-10-28 15:09:09',]);
        SisNnaj::create(['id' => 700, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:10:36', 'updated_at' => '2020-10-28 15:10:36',]);
        SisNnaj::create(['id' => 701, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:11:19', 'updated_at' => '2020-10-28 15:11:19',]);
        SisNnaj::create(['id' => 702, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:12:06', 'updated_at' => '2020-10-28 15:12:06',]);
        SisNnaj::create(['id' => 703, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:13:07', 'updated_at' => '2020-10-28 15:13:07',]);
        SisNnaj::create(['id' => 704, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:14:29', 'updated_at' => '2020-10-28 15:14:29',]);
        SisNnaj::create(['id' => 705, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:44:13', 'updated_at' => '2020-10-28 15:44:13',]);
        SisNnaj::create(['id' => 706, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:48:56', 'updated_at' => '2020-10-28 15:48:56',]);
        SisNnaj::create(['id' => 707, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 16:26:01', 'updated_at' => '2020-10-28 16:26:01',]);
        SisNnaj::create(['id' => 708, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 16:31:37', 'updated_at' => '2020-10-28 16:31:37',]);
        SisNnaj::create(['id' => 709, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 16:33:31', 'updated_at' => '2020-10-28 16:33:31',]);
        SisNnaj::create(['id' => 710, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 09:46:17', 'updated_at' => '2020-10-29 09:46:17',]);
        SisNnaj::create(['id' => 711, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:29:15', 'updated_at' => '2020-10-29 10:29:15',]);
        SisNnaj::create(['id' => 712, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:37:57', 'updated_at' => '2020-10-29 10:37:57',]);
        SisNnaj::create(['id' => 713, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:48:58', 'updated_at' => '2020-10-29 10:48:58',]);
        SisNnaj::create(['id' => 714, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:52:43', 'updated_at' => '2020-10-29 10:52:43',]);
        SisNnaj::create(['id' => 715, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:56:21', 'updated_at' => '2020-10-29 10:56:21',]);
        SisNnaj::create(['id' => 716, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 11:19:21', 'updated_at' => '2020-10-29 11:19:21',]);
        SisNnaj::create(['id' => 717, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 11:56:51', 'updated_at' => '2020-10-29 11:56:51',]);
        SisNnaj::create(['id' => 718, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:00:04', 'updated_at' => '2020-10-29 12:00:04',]);
        SisNnaj::create(['id' => 719, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:05:45', 'updated_at' => '2020-10-29 12:05:45',]);
        SisNnaj::create(['id' => 720, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:07:05', 'updated_at' => '2020-10-29 12:07:05',]);
        SisNnaj::create(['id' => 721, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:10:46', 'updated_at' => '2020-10-29 12:10:46',]);
        SisNnaj::create(['id' => 722, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:24:34', 'updated_at' => '2020-10-29 12:24:34',]);
        SisNnaj::create(['id' => 723, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:29:55', 'updated_at' => '2020-10-29 12:29:55',]);
        SisNnaj::create(['id' => 724, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:39:39', 'updated_at' => '2020-10-29 12:39:39',]);
        SisNnaj::create(['id' => 725, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 15:31:02', 'updated_at' => '2020-10-29 15:31:02',]);
        SisNnaj::create(['id' => 726, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 15:42:59', 'updated_at' => '2020-10-29 15:42:59',]);
        SisNnaj::create(['id' => 727, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:34:40', 'updated_at' => '2020-10-29 16:34:40',]);
        SisNnaj::create(['id' => 728, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:45:50', 'updated_at' => '2020-10-29 16:45:50',]);
        SisNnaj::create(['id' => 729, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:47:41', 'updated_at' => '2020-10-29 16:47:41',]);
        SisNnaj::create(['id' => 730, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:49:31', 'updated_at' => '2020-10-29 16:49:31',]);
        SisNnaj::create(['id' => 731, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 07:41:18', 'updated_at' => '2020-10-30 07:41:18',]);
        SisNnaj::create(['id' => 732, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 07:46:44', 'updated_at' => '2020-10-30 07:46:44',]);
        SisNnaj::create(['id' => 733, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:09:37', 'updated_at' => '2020-10-30 08:09:37',]);
        SisNnaj::create(['id' => 734, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:14:53', 'updated_at' => '2020-10-30 08:14:53',]);
        SisNnaj::create(['id' => 735, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:27:23', 'updated_at' => '2020-10-30 08:27:23',]);
        SisNnaj::create(['id' => 736, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:50:28', 'updated_at' => '2020-10-30 08:50:28',]);
        SisNnaj::create(['id' => 737, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:57:09', 'updated_at' => '2020-10-30 08:57:09',]);
        SisNnaj::create(['id' => 738, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 09:35:26', 'updated_at' => '2020-10-30 09:35:26',]);
        SisNnaj::create(['id' => 739, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 09:44:57', 'updated_at' => '2020-10-30 09:44:57',]);
        SisNnaj::create(['id' => 740, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:01:49', 'updated_at' => '2020-10-30 10:01:49',]);
        SisNnaj::create(['id' => 741, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:07:21', 'updated_at' => '2020-10-30 10:07:21',]);
        SisNnaj::create(['id' => 742, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:08:50', 'updated_at' => '2020-10-30 10:08:50',]);
        SisNnaj::create(['id' => 743, 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:36:47', 'updated_at' => '2020-10-30 10:36:47',]);
        SisNnaj::create(['id' => 744, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:47:33', 'updated_at' => '2020-10-30 10:47:33',]);
        SisNnaj::create(['id' => 745, 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:49:33', 'updated_at' => '2020-10-30 10:49:33',]);
        SisNnaj::create(['id' => 746, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 11:05:50', 'updated_at' => '2020-10-30 11:05:50',]);
        SisNnaj::create(['id' => 747, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 13:09:33', 'updated_at' => '2020-10-30 13:09:33',]);
        SisNnaj::create(['id' => 748, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 13:26:07', 'updated_at' => '2020-10-30 13:26:07',]);
        SisNnaj::create(['id' => 749, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 13:54:26', 'updated_at' => '2020-10-30 13:54:26',]);
        SisNnaj::create(['id' => 750, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:02:23', 'updated_at' => '2020-10-30 14:02:23',]);
        SisNnaj::create(['id' => 751, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:03:52', 'updated_at' => '2020-10-30 14:03:52',]);
        SisNnaj::create(['id' => 752, 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:23:16', 'updated_at' => '2020-10-30 14:23:16',]);
        SisNnaj::create(['id' => 753, 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:35:57', 'updated_at' => '2020-10-30 14:35:57',]);
        SisNnaj::create(['id' => 754, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 15:03:06', 'updated_at' => '2020-10-30 15:03:06',]);
        SisNnaj::create(['id' => 755, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 15:47:58', 'updated_at' => '2020-10-30 15:47:58',]);
        SisNnaj::create(['id' => 756, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 07:35:17', 'updated_at' => '2020-11-01 07:35:17',]);
        SisNnaj::create(['id' => 757, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 08:40:32', 'updated_at' => '2020-11-01 08:40:32',]);
        SisNnaj::create(['id' => 758, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 11:25:38', 'updated_at' => '2020-11-01 11:25:38',]);
        SisNnaj::create(['id' => 759, 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 11:31:43', 'updated_at' => '2020-11-01 11:31:43',]);
        SisNnaj::create(['id' => 760, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 12:00:05', 'updated_at' => '2020-11-01 12:00:05',]);
        SisNnaj::create(['id' => 761, 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 13:24:50', 'updated_at' => '2020-11-01 13:24:50',]);
    }
}
