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
                'prm_vestimenta_id' => $faker->randomElement(['2484', '2485']),
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
                'prm_etnia_id' => 161,
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
                'sis_municipio_id' => 2,
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
                'prm_orientacion_sexual_id' => $faker->randomElement(['27','28','29','30','31']),
                'sis_docfuen_id' => 2,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
            ]);
            NnajSitMil::create([
                'fi_datos_basico_id' => $i + 1,
                'prm_situacion_militar_id' => 227,
                'prm_clase_libreta_id' => 260,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_docfuen_id' => 2,
            ]);

            NnajUpi::create([
                'sis_nnaj_id' => $i + 1,
                'sis_depen_id' => 2,
                'prm_principa_id' => 227,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
            ]);

            FiDiligenc::create([
                'diligenc' => date('Y-m-d'),
                'fi_datos_basico_id' => $i + 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
            ]);
        }

        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:23:19', 'updated_at' => '2020-10-07 15:23:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-07 15:36:14', 'updated_at' => '2020-10-07 15:36:14',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 10:42:54', 'updated_at' => '2020-10-09 10:42:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 10:54:28', 'updated_at' => '2020-10-09 10:54:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 10:57:51', 'updated_at' => '2020-10-09 10:57:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:27:38', 'updated_at' => '2020-10-09 11:27:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:38:13', 'updated_at' => '2020-10-09 11:38:13',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:43:52', 'updated_at' => '2020-10-09 11:43:52',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 11:50:09', 'updated_at' => '2020-10-09 11:50:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:08:46', 'updated_at' => '2020-10-09 12:08:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:12:15', 'updated_at' => '2020-10-09 12:12:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 12:14:56', 'updated_at' => '2020-10-09 12:14:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 13:13:56', 'updated_at' => '2020-10-09 13:13:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 13:40:48', 'updated_at' => '2020-10-09 13:40:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 13:43:51', 'updated_at' => '2020-10-09 13:43:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 14:25:29', 'updated_at' => '2020-10-09 14:25:29',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 15:09:30', 'updated_at' => '2020-10-09 15:09:30',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 15:55:33', 'updated_at' => '2020-10-09 15:55:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-09 16:01:53', 'updated_at' => '2020-10-09 16:01:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 15:39:07', 'updated_at' => '2020-10-11 15:39:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 16:06:40', 'updated_at' => '2020-10-11 16:06:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 16:58:56', 'updated_at' => '2020-10-11 16:58:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 17:06:28', 'updated_at' => '2020-10-11 17:06:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 17:12:07', 'updated_at' => '2020-10-11 17:12:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 17:28:29', 'updated_at' => '2020-10-11 17:28:29',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 19:39:10', 'updated_at' => '2020-10-11 19:39:10',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 19:53:47', 'updated_at' => '2020-10-11 19:53:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 19:55:44', 'updated_at' => '2020-10-11 19:55:44',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 20:19:00', 'updated_at' => '2020-10-11 20:19:00',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 20:21:25', 'updated_at' => '2020-10-11 20:21:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 21:44:35', 'updated_at' => '2020-10-11 21:44:35',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 22:02:27', 'updated_at' => '2020-10-11 22:02:27',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-11 22:04:24', 'updated_at' => '2020-10-11 22:04:24',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 15:37:48', 'updated_at' => '2020-10-12 15:37:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 16:48:52', 'updated_at' => '2020-10-12 16:48:52',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 16:56:58', 'updated_at' => '2020-10-12 16:56:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 18:16:26', 'updated_at' => '2020-10-12 18:16:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 19:03:16', 'updated_at' => '2020-10-12 19:03:16',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 21:12:21', 'updated_at' => '2020-10-12 21:12:21',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 21:20:39', 'updated_at' => '2020-10-12 21:20:39',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-12 21:51:00', 'updated_at' => '2020-10-12 21:51:00',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 15:35:26', 'updated_at' => '2020-10-13 15:35:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 16:29:57', 'updated_at' => '2020-10-13 16:29:57',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 16:50:38', 'updated_at' => '2020-10-13 16:50:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 16:53:35', 'updated_at' => '2020-10-13 16:53:35',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-13 17:02:59', 'updated_at' => '2020-10-13 17:02:59',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 08:29:09', 'updated_at' => '2020-10-14 08:29:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 08:47:30', 'updated_at' => '2020-10-14 08:47:30',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 08:52:49', 'updated_at' => '2020-10-14 08:52:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 09:47:55', 'updated_at' => '2020-10-14 09:47:55',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 10:33:37', 'updated_at' => '2020-10-14 10:33:37',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 10:41:08', 'updated_at' => '2020-10-14 10:41:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:21:39', 'updated_at' => '2020-10-14 11:21:39',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:28:50', 'updated_at' => '2020-10-14 11:28:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:40:47', 'updated_at' => '2020-10-14 11:40:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:47:58', 'updated_at' => '2020-10-14 11:47:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:50:11', 'updated_at' => '2020-10-14 11:50:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:50:40', 'updated_at' => '2020-10-14 11:50:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:57:29', 'updated_at' => '2020-10-14 11:57:29',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 11:59:25', 'updated_at' => '2020-10-14 11:59:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 12:45:26', 'updated_at' => '2020-10-14 12:45:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:17:07', 'updated_at' => '2020-10-14 13:17:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:19:40', 'updated_at' => '2020-10-14 13:19:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 13:39:10', 'updated_at' => '2020-10-14 13:39:10',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 14:21:58', 'updated_at' => '2020-10-14 14:21:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 14:55:40', 'updated_at' => '2020-10-14 14:55:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 15:20:15', 'updated_at' => '2020-10-14 15:20:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 15:27:38', 'updated_at' => '2020-10-14 15:27:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 16:18:03', 'updated_at' => '2020-10-14 16:18:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 16:34:20', 'updated_at' => '2020-10-14 16:34:20',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 09:42:49', 'updated_at' => '2020-10-15 09:42:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 09:52:32', 'updated_at' => '2020-10-15 09:52:32',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:32:58', 'updated_at' => '2020-10-15 10:32:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:35:47', 'updated_at' => '2020-10-15 10:35:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:38:59', 'updated_at' => '2020-10-15 10:38:59',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:39:11', 'updated_at' => '2020-10-15 10:39:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:54:01', 'updated_at' => '2020-10-15 10:54:01',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 10:55:19', 'updated_at' => '2020-10-15 10:55:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 11:21:52', 'updated_at' => '2020-10-15 11:21:52',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:14:33', 'updated_at' => '2020-10-15 13:14:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:24:03', 'updated_at' => '2020-10-15 13:24:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:35:36', 'updated_at' => '2020-10-15 13:35:36',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:43:16', 'updated_at' => '2020-10-15 13:43:16',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:44:56', 'updated_at' => '2020-10-15 13:44:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:45:24', 'updated_at' => '2020-10-15 13:45:24',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:48:44', 'updated_at' => '2020-10-15 13:48:44',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:52:31', 'updated_at' => '2020-10-15 13:52:31',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:57:21', 'updated_at' => '2020-10-15 13:57:21',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 13:57:23', 'updated_at' => '2020-10-15 13:57:23',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 14:00:09', 'updated_at' => '2020-10-15 14:00:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 14:04:12', 'updated_at' => '2020-10-15 14:04:12',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 14:12:42', 'updated_at' => '2020-10-15 14:12:42',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:14:09', 'updated_at' => '2020-10-15 15:14:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:15:49', 'updated_at' => '2020-10-15 15:15:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:23:06', 'updated_at' => '2020-10-15 15:23:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:29:24', 'updated_at' => '2020-10-15 15:29:24',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:37:47', 'updated_at' => '2020-10-15 15:37:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 15:47:53', 'updated_at' => '2020-10-15 15:47:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 16:00:48', 'updated_at' => '2020-10-15 16:00:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 16:11:20', 'updated_at' => '2020-10-15 16:11:20',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 09:58:18', 'updated_at' => '2020-10-16 09:58:18',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:05:08', 'updated_at' => '2020-10-16 10:05:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:07:25', 'updated_at' => '2020-10-16 10:07:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:11:56', 'updated_at' => '2020-10-16 10:11:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:18:41', 'updated_at' => '2020-10-16 10:18:41',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:20:48', 'updated_at' => '2020-10-16 10:20:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:23:03', 'updated_at' => '2020-10-16 10:23:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:27:01', 'updated_at' => '2020-10-16 10:27:01',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:32:08', 'updated_at' => '2020-10-16 10:32:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 10:48:41', 'updated_at' => '2020-10-16 10:48:41',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:06:30', 'updated_at' => '2020-10-16 11:06:30',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:09:51', 'updated_at' => '2020-10-16 11:09:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:19:30', 'updated_at' => '2020-10-16 11:19:30',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:22:03', 'updated_at' => '2020-10-16 11:22:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:29:47', 'updated_at' => '2020-10-16 11:29:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:44:11', 'updated_at' => '2020-10-16 11:44:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:50:18', 'updated_at' => '2020-10-16 11:50:18',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:54:01', 'updated_at' => '2020-10-16 11:54:01',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 11:55:28', 'updated_at' => '2020-10-16 11:55:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:05:33', 'updated_at' => '2020-10-16 12:05:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:07:26', 'updated_at' => '2020-10-16 12:07:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:28:53', 'updated_at' => '2020-10-16 12:28:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:31:02', 'updated_at' => '2020-10-16 12:31:02',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:32:22', 'updated_at' => '2020-10-16 12:32:22',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:33:37', 'updated_at' => '2020-10-16 12:33:37',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:34:45', 'updated_at' => '2020-10-16 12:34:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 13:26:05', 'updated_at' => '2020-10-16 13:26:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 13:31:03', 'updated_at' => '2020-10-16 13:31:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 13:38:11', 'updated_at' => '2020-10-16 13:38:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:18:11', 'updated_at' => '2020-10-16 14:18:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:26:17', 'updated_at' => '2020-10-16 14:26:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:27:14', 'updated_at' => '2020-10-16 14:27:14',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:38:51', 'updated_at' => '2020-10-16 14:38:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:02:14', 'updated_at' => '2020-10-16 15:02:14',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:27:51', 'updated_at' => '2020-10-16 15:27:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:33:10', 'updated_at' => '2020-10-16 15:33:10',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:39:28', 'updated_at' => '2020-10-16 15:39:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:40:22', 'updated_at' => '2020-10-16 15:40:22',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:42:11', 'updated_at' => '2020-10-16 15:42:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:56:47', 'updated_at' => '2020-10-16 15:56:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:18:41', 'updated_at' => '2020-10-16 16:18:41',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:21:27', 'updated_at' => '2020-10-16 16:21:27',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:22:44', 'updated_at' => '2020-10-16 16:22:44',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 16:39:46', 'updated_at' => '2020-10-16 16:39:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:15:58', 'updated_at' => '2020-10-20 09:15:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:24:32', 'updated_at' => '2020-10-20 09:24:32',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:27:38', 'updated_at' => '2020-10-20 09:27:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:30:31', 'updated_at' => '2020-10-20 09:30:31',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:44:15', 'updated_at' => '2020-10-20 09:44:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:48:28', 'updated_at' => '2020-10-20 09:48:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:52:39', 'updated_at' => '2020-10-20 09:52:39',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:53:50', 'updated_at' => '2020-10-20 09:53:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:56:21', 'updated_at' => '2020-10-20 09:56:21',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:04:45', 'updated_at' => '2020-10-20 10:04:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:11:53', 'updated_at' => '2020-10-20 10:11:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:16:35', 'updated_at' => '2020-10-20 10:16:35',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:28:23', 'updated_at' => '2020-10-20 10:28:23',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:31:14', 'updated_at' => '2020-10-20 10:31:14',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:33:00', 'updated_at' => '2020-10-20 10:33:00',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 10:37:12', 'updated_at' => '2020-10-20 10:37:12',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:18:37', 'updated_at' => '2020-10-20 11:18:37',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:23:06', 'updated_at' => '2020-10-20 11:23:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:34:14', 'updated_at' => '2020-10-20 11:34:14',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:39:33', 'updated_at' => '2020-10-20 11:39:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:41:01', 'updated_at' => '2020-10-20 11:41:01',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:43:38', 'updated_at' => '2020-10-20 11:43:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:48:17', 'updated_at' => '2020-10-20 11:48:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 13:31:33', 'updated_at' => '2020-10-20 13:31:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 13:39:48', 'updated_at' => '2020-10-20 13:39:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:09:25', 'updated_at' => '2020-10-20 14:09:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:16:15', 'updated_at' => '2020-10-20 14:16:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:17:51', 'updated_at' => '2020-10-20 14:17:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:21:11', 'updated_at' => '2020-10-20 14:21:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:22:12', 'updated_at' => '2020-10-20 14:22:12',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:40:48', 'updated_at' => '2020-10-20 14:40:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:00:50', 'updated_at' => '2020-10-20 15:00:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:02:11', 'updated_at' => '2020-10-20 15:02:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:28:46', 'updated_at' => '2020-10-20 15:28:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:43:17', 'updated_at' => '2020-10-20 15:43:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:46:05', 'updated_at' => '2020-10-20 15:46:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:52:15', 'updated_at' => '2020-10-20 15:52:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:53:03', 'updated_at' => '2020-10-20 15:53:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:55:19', 'updated_at' => '2020-10-20 15:55:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:56:56', 'updated_at' => '2020-10-20 15:56:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:58:07', 'updated_at' => '2020-10-20 15:58:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:59:27', 'updated_at' => '2020-10-20 15:59:27',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 15:59:42', 'updated_at' => '2020-10-20 15:59:42',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:01:26', 'updated_at' => '2020-10-20 16:01:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:10:13', 'updated_at' => '2020-10-20 16:10:13',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:12:29', 'updated_at' => '2020-10-20 16:12:29',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 16:23:09', 'updated_at' => '2020-10-20 16:23:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 10:49:02', 'updated_at' => '2020-10-21 10:49:02',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:00:05', 'updated_at' => '2020-10-21 11:00:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:13:31', 'updated_at' => '2020-10-21 11:13:31',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:29:45', 'updated_at' => '2020-10-21 11:29:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:36:45', 'updated_at' => '2020-10-21 11:36:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 11:57:43', 'updated_at' => '2020-10-21 11:57:43',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:02:00', 'updated_at' => '2020-10-21 12:02:00',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:27:51', 'updated_at' => '2020-10-21 12:27:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:27:57', 'updated_at' => '2020-10-21 12:27:57',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 12:34:09', 'updated_at' => '2020-10-21 12:34:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 13:54:42', 'updated_at' => '2020-10-21 13:54:42',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 14:26:54', 'updated_at' => '2020-10-21 14:26:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 14:28:45', 'updated_at' => '2020-10-21 14:28:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-21 14:38:50', 'updated_at' => '2020-10-21 14:38:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 09:30:47', 'updated_at' => '2020-10-22 09:30:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 10:39:51', 'updated_at' => '2020-10-22 10:39:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 10:40:08', 'updated_at' => '2020-10-22 10:40:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:02:54', 'updated_at' => '2020-10-22 11:02:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:05:05', 'updated_at' => '2020-10-22 11:05:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:16:50', 'updated_at' => '2020-10-22 11:16:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:22:51', 'updated_at' => '2020-10-22 11:22:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 11:51:47', 'updated_at' => '2020-10-22 11:51:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 12:02:45', 'updated_at' => '2020-10-22 12:02:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:16:11', 'updated_at' => '2020-10-22 14:16:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:22:02', 'updated_at' => '2020-10-22 14:22:02',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:23:35', 'updated_at' => '2020-10-22 14:23:35',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:25:54', 'updated_at' => '2020-10-22 14:25:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:28:08', 'updated_at' => '2020-10-22 14:28:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:30:12', 'updated_at' => '2020-10-22 14:30:12',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:32:49', 'updated_at' => '2020-10-22 14:32:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 14:55:15', 'updated_at' => '2020-10-22 14:55:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 15:04:32', 'updated_at' => '2020-10-22 15:04:32',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 15:25:46', 'updated_at' => '2020-10-22 15:25:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 15:57:03', 'updated_at' => '2020-10-22 15:57:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-22 16:02:17', 'updated_at' => '2020-10-22 16:02:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:04:24', 'updated_at' => '2020-10-23 09:04:24',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:11:11', 'updated_at' => '2020-10-23 09:11:11',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:13:19', 'updated_at' => '2020-10-23 09:13:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 09:16:01', 'updated_at' => '2020-10-23 09:16:01',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 10:35:19', 'updated_at' => '2020-10-23 10:35:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 10:46:25', 'updated_at' => '2020-10-23 10:46:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 10:58:13', 'updated_at' => '2020-10-23 10:58:13',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:03:53', 'updated_at' => '2020-10-23 11:03:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:19:15', 'updated_at' => '2020-10-23 11:19:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:25:17', 'updated_at' => '2020-10-23 11:25:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:28:15', 'updated_at' => '2020-10-23 11:28:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:31:25', 'updated_at' => '2020-10-23 11:31:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:32:52', 'updated_at' => '2020-10-23 11:32:52',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:40:12', 'updated_at' => '2020-10-23 11:40:12',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 11:55:30', 'updated_at' => '2020-10-23 11:55:30',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 12:03:09', 'updated_at' => '2020-10-23 12:03:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:20:49', 'updated_at' => '2020-10-23 14:20:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:45:25', 'updated_at' => '2020-10-23 14:45:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:50:13', 'updated_at' => '2020-10-23 14:50:13',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:54:04', 'updated_at' => '2020-10-23 14:54:04',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 14:54:16', 'updated_at' => '2020-10-23 14:54:16',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:17:39', 'updated_at' => '2020-10-23 15:17:39',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:43:06', 'updated_at' => '2020-10-23 15:43:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:46:26', 'updated_at' => '2020-10-23 15:46:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 16:22:54', 'updated_at' => '2020-10-23 16:22:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 16:28:46', 'updated_at' => '2020-10-23 16:28:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 16:30:17', 'updated_at' => '2020-10-23 16:30:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:28:25', 'updated_at' => '2020-10-27 09:28:25',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:46:41', 'updated_at' => '2020-10-27 09:46:41',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:55:28', 'updated_at' => '2020-10-27 09:55:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 09:58:36', 'updated_at' => '2020-10-27 09:58:36',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:08:46', 'updated_at' => '2020-10-27 10:08:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:16:30', 'updated_at' => '2020-10-27 10:16:30',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:26:27', 'updated_at' => '2020-10-27 10:26:27',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:32:18', 'updated_at' => '2020-10-27 10:32:18',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 10:57:49', 'updated_at' => '2020-10-27 10:57:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:06:04', 'updated_at' => '2020-10-27 11:06:04',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:07:41', 'updated_at' => '2020-10-27 11:07:41',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:07:46', 'updated_at' => '2020-10-27 11:07:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:09:52', 'updated_at' => '2020-10-27 11:09:52',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:11:53', 'updated_at' => '2020-10-27 11:11:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:13:33', 'updated_at' => '2020-10-27 11:13:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:14:59', 'updated_at' => '2020-10-27 11:14:59',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:18:05', 'updated_at' => '2020-10-27 11:18:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:21:58', 'updated_at' => '2020-10-27 11:21:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:43:46', 'updated_at' => '2020-10-27 11:43:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:51:03', 'updated_at' => '2020-10-27 11:51:03',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:53:19', 'updated_at' => '2020-10-27 11:53:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 11:54:46', 'updated_at' => '2020-10-27 11:54:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 12:05:15', 'updated_at' => '2020-10-27 12:05:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 12:11:46', 'updated_at' => '2020-10-27 12:11:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 12:13:40', 'updated_at' => '2020-10-27 12:13:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:18:36', 'updated_at' => '2020-10-27 13:18:36',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:19:54', 'updated_at' => '2020-10-27 13:19:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:35:48', 'updated_at' => '2020-10-27 13:35:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 13:57:06', 'updated_at' => '2020-10-27 13:57:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:04:50', 'updated_at' => '2020-10-27 14:04:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:06:46', 'updated_at' => '2020-10-27 14:06:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:30:58', 'updated_at' => '2020-10-27 14:30:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 10:19:33', 'updated_at' => '2020-10-28 10:19:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 10:39:28', 'updated_at' => '2020-10-28 10:39:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:05:38', 'updated_at' => '2020-10-28 11:05:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:10:37', 'updated_at' => '2020-10-28 11:10:37',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:15:29', 'updated_at' => '2020-10-28 11:15:29',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:21:06', 'updated_at' => '2020-10-28 11:21:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:26:48', 'updated_at' => '2020-10-28 11:26:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 11:42:38', 'updated_at' => '2020-10-28 11:42:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:05:40', 'updated_at' => '2020-10-28 12:05:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:12:07', 'updated_at' => '2020-10-28 12:12:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:18:08', 'updated_at' => '2020-10-28 12:18:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 12:20:31', 'updated_at' => '2020-10-28 12:20:31',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:06:48', 'updated_at' => '2020-10-28 14:06:48',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:18:06', 'updated_at' => '2020-10-28 14:18:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:26:34', 'updated_at' => '2020-10-28 14:26:34',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:27:33', 'updated_at' => '2020-10-28 14:27:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:50:45', 'updated_at' => '2020-10-28 14:50:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 14:54:54', 'updated_at' => '2020-10-28 14:54:54',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:06:08', 'updated_at' => '2020-10-28 15:06:08',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:09:09', 'updated_at' => '2020-10-28 15:09:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:10:36', 'updated_at' => '2020-10-28 15:10:36',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:11:19', 'updated_at' => '2020-10-28 15:11:19',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:12:06', 'updated_at' => '2020-10-28 15:12:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:13:07', 'updated_at' => '2020-10-28 15:13:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:14:29', 'updated_at' => '2020-10-28 15:14:29',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:44:13', 'updated_at' => '2020-10-28 15:44:13',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 15:48:56', 'updated_at' => '2020-10-28 15:48:56',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 16:26:01', 'updated_at' => '2020-10-28 16:26:01',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 16:31:37', 'updated_at' => '2020-10-28 16:31:37',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-28 16:33:31', 'updated_at' => '2020-10-28 16:33:31',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 09:46:17', 'updated_at' => '2020-10-29 09:46:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:29:15', 'updated_at' => '2020-10-29 10:29:15',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:37:57', 'updated_at' => '2020-10-29 10:37:57',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:48:58', 'updated_at' => '2020-10-29 10:48:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:52:43', 'updated_at' => '2020-10-29 10:52:43',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 10:56:21', 'updated_at' => '2020-10-29 10:56:21',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 11:19:21', 'updated_at' => '2020-10-29 11:19:21',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 11:56:51', 'updated_at' => '2020-10-29 11:56:51',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:00:04', 'updated_at' => '2020-10-29 12:00:04',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:05:45', 'updated_at' => '2020-10-29 12:05:45',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:07:05', 'updated_at' => '2020-10-29 12:07:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:10:46', 'updated_at' => '2020-10-29 12:10:46',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:24:34', 'updated_at' => '2020-10-29 12:24:34',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:29:55', 'updated_at' => '2020-10-29 12:29:55',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 12:39:39', 'updated_at' => '2020-10-29 12:39:39',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 15:31:02', 'updated_at' => '2020-10-29 15:31:02',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 15:42:59', 'updated_at' => '2020-10-29 15:42:59',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:34:40', 'updated_at' => '2020-10-29 16:34:40',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:45:50', 'updated_at' => '2020-10-29 16:45:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:47:41', 'updated_at' => '2020-10-29 16:47:41',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 16:49:31', 'updated_at' => '2020-10-29 16:49:31',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 07:41:18', 'updated_at' => '2020-10-30 07:41:18',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 07:46:44', 'updated_at' => '2020-10-30 07:46:44',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:09:37', 'updated_at' => '2020-10-30 08:09:37',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:14:53', 'updated_at' => '2020-10-30 08:14:53',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:27:23', 'updated_at' => '2020-10-30 08:27:23',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:50:28', 'updated_at' => '2020-10-30 08:50:28',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 08:57:09', 'updated_at' => '2020-10-30 08:57:09',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 09:35:26', 'updated_at' => '2020-10-30 09:35:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 09:44:57', 'updated_at' => '2020-10-30 09:44:57',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:01:49', 'updated_at' => '2020-10-30 10:01:49',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:07:21', 'updated_at' => '2020-10-30 10:07:21',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:08:50', 'updated_at' => '2020-10-30 10:08:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:36:47', 'updated_at' => '2020-10-30 10:36:47',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:47:33', 'updated_at' => '2020-10-30 10:47:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 10:49:33', 'updated_at' => '2020-10-30 10:49:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 11:05:50', 'updated_at' => '2020-10-30 11:05:50',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 13:09:33', 'updated_at' => '2020-10-30 13:09:33',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 13:26:07', 'updated_at' => '2020-10-30 13:26:07',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 13:54:26', 'updated_at' => '2020-10-30 13:54:26',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:02:23', 'updated_at' => '2020-10-30 14:02:23',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:03:52', 'updated_at' => '2020-10-30 14:03:52',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:23:16', 'updated_at' => '2020-10-30 14:23:16',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 14:35:57', 'updated_at' => '2020-10-30 14:35:57',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 15:03:06', 'updated_at' => '2020-10-30 15:03:06',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 15:47:58', 'updated_at' => '2020-10-30 15:47:58',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 07:35:17', 'updated_at' => '2020-11-01 07:35:17',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 08:40:32', 'updated_at' => '2020-11-01 08:40:32',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 11:25:38', 'updated_at' => '2020-11-01 11:25:38',]);
        SisNnaj::create([ 'prm_escomfam_id' => 228, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 11:31:43', 'updated_at' => '2020-11-01 11:31:43',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 12:00:05', 'updated_at' => '2020-11-01 12:00:05',]);
        SisNnaj::create([ 'prm_escomfam_id' => 227, 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-11-01 13:24:50', 'updated_at' => '2020-11-01 13:24:50',]);
    }
}
