<?php

use App\Models\Sistema\SisUpzbarri;
use Illuminate\Database\Seeder;

class SisUpzbarrisSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        foreach ($dataxxxx as $key => $value) {
            $value['sis_esta_id'] = 1;
            $value['user_crea_id'] = 1;
            $value['user_edita_id'] = 1;
            SisUpzbarri::create($value);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx = [
            ['simianti_id' =>8544, 'sis_localupz_id' =>1, 'sis_barrio_id' =>1],//1
            ['simianti_id' =>0, 'sis_localupz_id' =>1, 'sis_barrio_id' =>2],//2
            ['simianti_id' =>10238, 'sis_localupz_id' =>1, 'sis_barrio_id' =>3],//3
            ['simianti_id' =>0, 'sis_localupz_id' =>2, 'sis_barrio_id' =>1158],//4
            ['simianti_id' =>107101, 'sis_localupz_id' =>3, 'sis_barrio_id' =>1159],//5
            ['simianti_id' =>110837, 'sis_localupz_id' =>3, 'sis_barrio_id' =>1160],//6
            ['simianti_id' =>0, 'sis_localupz_id' =>4, 'sis_barrio_id' =>4],//7
            ['simianti_id' =>10012, 'sis_localupz_id' =>4, 'sis_barrio_id' =>5],//8
            ['simianti_id' =>10014, 'sis_localupz_id' =>4, 'sis_barrio_id' =>6],//9
            ['simianti_id' =>8535, 'sis_localupz_id' =>4, 'sis_barrio_id' =>7],//10
            ['simianti_id' =>10061, 'sis_localupz_id' =>4, 'sis_barrio_id' =>8],//11
            ['simianti_id' =>10073, 'sis_localupz_id' =>4, 'sis_barrio_id' =>9],//12
            ['simianti_id' =>10083, 'sis_localupz_id' =>4, 'sis_barrio_id' =>10],//13
            ['simianti_id' =>10087, 'sis_localupz_id' =>4, 'sis_barrio_id' =>11],//14
            ['simianti_id' =>10098, 'sis_localupz_id' =>4, 'sis_barrio_id' =>12],//15
            ['simianti_id' =>10115, 'sis_localupz_id' =>4, 'sis_barrio_id' =>13],//16
            ['simianti_id' =>10117, 'sis_localupz_id' =>4, 'sis_barrio_id' =>14],//17
            ['simianti_id' =>10122, 'sis_localupz_id' =>4, 'sis_barrio_id' =>15],//18
            ['simianti_id' =>10141, 'sis_localupz_id' =>4, 'sis_barrio_id' =>16],//19
            ['simianti_id' =>10146, 'sis_localupz_id' =>4, 'sis_barrio_id' =>17],//20
            ['simianti_id' =>0, 'sis_localupz_id' =>4, 'sis_barrio_id' =>18],//21
            ['simianti_id' =>10147, 'sis_localupz_id' =>4, 'sis_barrio_id' =>19],//22
            ['simianti_id' =>10149, 'sis_localupz_id' =>4, 'sis_barrio_id' =>20],//23
            ['simianti_id' =>10153, 'sis_localupz_id' =>4, 'sis_barrio_id' =>21],//24
            ['simianti_id' =>8523, 'sis_localupz_id' =>4, 'sis_barrio_id' =>22],//25
            ['simianti_id' =>10222, 'sis_localupz_id' =>4, 'sis_barrio_id' =>23],//26
            ['simianti_id' =>8521, 'sis_localupz_id' =>4, 'sis_barrio_id' =>24],//27
            ['simianti_id' =>10251, 'sis_localupz_id' =>4, 'sis_barrio_id' =>25],//28
            ['simianti_id' =>10028, 'sis_localupz_id' =>5, 'sis_barrio_id' =>26],//29
            ['simianti_id' =>10126, 'sis_localupz_id' =>5, 'sis_barrio_id' =>27],//30
            ['simianti_id' =>10081, 'sis_localupz_id' =>5, 'sis_barrio_id' =>28],//31
            ['simianti_id' =>8532, 'sis_localupz_id' =>5, 'sis_barrio_id' =>29],//32
            ['simianti_id' =>8504, 'sis_localupz_id' =>5, 'sis_barrio_id' =>30],//33
            ['simianti_id' =>8524, 'sis_localupz_id' =>5, 'sis_barrio_id' =>31],//34
            ['simianti_id' =>8525, 'sis_localupz_id' =>5, 'sis_barrio_id' =>32],//35
            ['simianti_id' =>10142, 'sis_localupz_id' =>5, 'sis_barrio_id' =>33],//36
            ['simianti_id' =>10198, 'sis_localupz_id' =>5, 'sis_barrio_id' =>34],//37
            ['simianti_id' =>0, 'sis_localupz_id' =>5, 'sis_barrio_id' =>35],//38
            ['simianti_id' =>0, 'sis_localupz_id' =>6, 'sis_barrio_id' =>36],//39
            ['simianti_id' =>0, 'sis_localupz_id' =>6, 'sis_barrio_id' =>37],//40
            ['simianti_id' =>8507, 'sis_localupz_id' =>6, 'sis_barrio_id' =>38],//41
            ['simianti_id' =>10044, 'sis_localupz_id' =>6, 'sis_barrio_id' =>39],//42
            ['simianti_id' =>0, 'sis_localupz_id' =>6, 'sis_barrio_id' =>40],//43
            ['simianti_id' =>2519, 'sis_localupz_id' =>6, 'sis_barrio_id' =>41],//44
            ['simianti_id' =>10069, 'sis_localupz_id' =>6, 'sis_barrio_id' =>42],//45
            ['simianti_id' =>10125, 'sis_localupz_id' =>6, 'sis_barrio_id' =>43],//46
            ['simianti_id' =>10129, 'sis_localupz_id' =>6, 'sis_barrio_id' =>44],//47
            ['simianti_id' =>10148, 'sis_localupz_id' =>6, 'sis_barrio_id' =>45],//48
            ['simianti_id' =>8502, 'sis_localupz_id' =>6, 'sis_barrio_id' =>46],//49
            ['simianti_id' =>8505, 'sis_localupz_id' =>6, 'sis_barrio_id' =>47],//50
            ['simianti_id' =>0, 'sis_localupz_id' =>6, 'sis_barrio_id' =>48],//51
            ['simianti_id' =>0, 'sis_localupz_id' =>6, 'sis_barrio_id' =>49],//52
            ['simianti_id' =>8503, 'sis_localupz_id' =>6, 'sis_barrio_id' =>50],//53
            ['simianti_id' =>10224, 'sis_localupz_id' =>6, 'sis_barrio_id' =>51],//54
            ['simianti_id' =>10242, 'sis_localupz_id' =>6, 'sis_barrio_id' =>52],//55
            ['simianti_id' =>0, 'sis_localupz_id' =>6, 'sis_barrio_id' =>53],//56
            ['simianti_id' =>10253, 'sis_localupz_id' =>6, 'sis_barrio_id' =>54],//57
            ['simianti_id' =>10235, 'sis_localupz_id' =>7, 'sis_barrio_id' =>55],//58
            ['simianti_id' =>10010, 'sis_localupz_id' =>7, 'sis_barrio_id' =>56],//59
            ['simianti_id' =>0, 'sis_localupz_id' =>7, 'sis_barrio_id' =>57],//60
            ['simianti_id' =>8519, 'sis_localupz_id' =>7, 'sis_barrio_id' =>58],//61
            ['simianti_id' =>0, 'sis_localupz_id' =>7, 'sis_barrio_id' =>59],//62
            ['simianti_id' =>10103, 'sis_localupz_id' =>7, 'sis_barrio_id' =>60],//63
            ['simianti_id' =>8517, 'sis_localupz_id' =>7, 'sis_barrio_id' =>61],//64
            ['simianti_id' =>8502, 'sis_localupz_id' =>7, 'sis_barrio_id' =>62],//65
            ['simianti_id' =>8516, 'sis_localupz_id' =>7, 'sis_barrio_id' =>63],//66
            ['simianti_id' =>10154, 'sis_localupz_id' =>7, 'sis_barrio_id' =>64],//67
            ['simianti_id' =>10220, 'sis_localupz_id' =>7, 'sis_barrio_id' =>65],//68
            ['simianti_id' =>10252, 'sis_localupz_id' =>7, 'sis_barrio_id' =>66],//69
            ['simianti_id' =>10255, 'sis_localupz_id' =>7, 'sis_barrio_id' =>67],//70
            ['simianti_id' =>10256, 'sis_localupz_id' =>7, 'sis_barrio_id' =>68],//71
            ['simianti_id' =>0, 'sis_localupz_id' =>7, 'sis_barrio_id' =>69],//72
            ['simianti_id' =>8510, 'sis_localupz_id' =>8, 'sis_barrio_id' =>70],//73
            ['simianti_id' =>0, 'sis_localupz_id' =>8, 'sis_barrio_id' =>71],//74
            ['simianti_id' =>10024, 'sis_localupz_id' =>8, 'sis_barrio_id' =>72],//75
            ['simianti_id' =>8520, 'sis_localupz_id' =>8, 'sis_barrio_id' =>73],//76
            ['simianti_id' =>8518, 'sis_localupz_id' =>8, 'sis_barrio_id' =>74],//77
            ['simianti_id' =>10048, 'sis_localupz_id' =>8, 'sis_barrio_id' =>75],//78
            ['simianti_id' =>8512, 'sis_localupz_id' =>8, 'sis_barrio_id' =>76],//79
            ['simianti_id' =>10051, 'sis_localupz_id' =>8, 'sis_barrio_id' =>77],//80
            ['simianti_id' =>0, 'sis_localupz_id' =>8, 'sis_barrio_id' =>78],//81
            ['simianti_id' =>10053, 'sis_localupz_id' =>8, 'sis_barrio_id' =>79],//82
            ['simianti_id' =>8511, 'sis_localupz_id' =>8, 'sis_barrio_id' =>80],//83
            ['simianti_id' =>8508, 'sis_localupz_id' =>8, 'sis_barrio_id' =>81],//84
            ['simianti_id' =>8514, 'sis_localupz_id' =>8, 'sis_barrio_id' =>82],//85
            ['simianti_id' =>10131, 'sis_localupz_id' =>8, 'sis_barrio_id' =>83],//86
            ['simianti_id' =>0, 'sis_localupz_id' =>8, 'sis_barrio_id' =>84],//87
            ['simianti_id' =>8530, 'sis_localupz_id' =>8, 'sis_barrio_id' =>85],//88
            ['simianti_id' =>8513, 'sis_localupz_id' =>8, 'sis_barrio_id' =>86],//89
            ['simianti_id' =>8515, 'sis_localupz_id' =>8, 'sis_barrio_id' =>87],//90
            ['simianti_id' =>8509, 'sis_localupz_id' =>8, 'sis_barrio_id' =>88],//91
            ['simianti_id' =>10151, 'sis_localupz_id' =>8, 'sis_barrio_id' =>89],//92
            ['simianti_id' =>0, 'sis_localupz_id' =>8, 'sis_barrio_id' =>90],//93
            ['simianti_id' =>10152, 'sis_localupz_id' =>8, 'sis_barrio_id' =>91],//94
            ['simianti_id' =>10223, 'sis_localupz_id' =>8, 'sis_barrio_id' =>92],//95
            ['simianti_id' =>8404, 'sis_localupz_id' =>9, 'sis_barrio_id' =>93],//96
            ['simianti_id' =>10023, 'sis_localupz_id' =>9, 'sis_barrio_id' =>94],//97
            ['simianti_id' =>10030, 'sis_localupz_id' =>9, 'sis_barrio_id' =>95],//98
            ['simianti_id' =>10078, 'sis_localupz_id' =>9, 'sis_barrio_id' =>96],//99
            ['simianti_id' =>2563, 'sis_localupz_id' =>9, 'sis_barrio_id' =>97],//100
            ['simianti_id' =>8409, 'sis_localupz_id' =>9, 'sis_barrio_id' =>98],//101
            ['simianti_id' =>8410, 'sis_localupz_id' =>9, 'sis_barrio_id' =>99],//102
            ['simianti_id' =>0, 'sis_localupz_id' =>9, 'sis_barrio_id' =>100],//103
            ['simianti_id' =>8405, 'sis_localupz_id' =>9, 'sis_barrio_id' =>101],//104
            ['simianti_id' =>10114, 'sis_localupz_id' =>9, 'sis_barrio_id' =>102],//105
            ['simianti_id' =>10118, 'sis_localupz_id' =>9, 'sis_barrio_id' =>103],//106
            ['simianti_id' =>10068, 'sis_localupz_id' =>9, 'sis_barrio_id' =>104],//107
            ['simianti_id' =>10181, 'sis_localupz_id' =>9, 'sis_barrio_id' =>105],//108
            ['simianti_id' =>8406, 'sis_localupz_id' =>9, 'sis_barrio_id' =>106],//109
            ['simianti_id' =>8408, 'sis_localupz_id' =>9, 'sis_barrio_id' =>107],//110
            ['simianti_id' =>8414, 'sis_localupz_id' =>9, 'sis_barrio_id' =>108],//111
            ['simianti_id' =>0, 'sis_localupz_id' =>9, 'sis_barrio_id' =>109],//112
            ['simianti_id' =>10203, 'sis_localupz_id' =>9, 'sis_barrio_id' =>110],//113
            ['simianti_id' =>8413, 'sis_localupz_id' =>9, 'sis_barrio_id' =>111],//114
            ['simianti_id' =>0, 'sis_localupz_id' =>9, 'sis_barrio_id' =>112],//115
            ['simianti_id' =>8407, 'sis_localupz_id' =>9, 'sis_barrio_id' =>113],//116
            ['simianti_id' =>8402, 'sis_localupz_id' =>10, 'sis_barrio_id' =>114],//117
            ['simianti_id' =>8401, 'sis_localupz_id' =>10, 'sis_barrio_id' =>115],//118
            ['simianti_id' =>8403, 'sis_localupz_id' =>10, 'sis_barrio_id' =>116],//119
            ['simianti_id' =>0, 'sis_localupz_id' =>10, 'sis_barrio_id' =>117],//120
            ['simianti_id' =>0, 'sis_localupz_id' =>10, 'sis_barrio_id' =>118],//121
            ['simianti_id' =>10163, 'sis_localupz_id' =>10, 'sis_barrio_id' =>119],//122
            ['simianti_id' =>10108, 'sis_localupz_id' =>10, 'sis_barrio_id' =>120],//123
            ['simianti_id' =>0, 'sis_localupz_id' =>10, 'sis_barrio_id' =>121],//124
            ['simianti_id' =>10237, 'sis_localupz_id' =>10, 'sis_barrio_id' =>122],//125
            ['simianti_id' =>10243, 'sis_localupz_id' =>10, 'sis_barrio_id' =>123],//126
            ['simianti_id' =>0, 'sis_localupz_id' =>10, 'sis_barrio_id' =>124],//127
            ['simianti_id' =>8417, 'sis_localupz_id' =>11, 'sis_barrio_id' =>125],//128
            ['simianti_id' =>0, 'sis_localupz_id' =>11, 'sis_barrio_id' =>126],//129
            ['simianti_id' =>8416, 'sis_localupz_id' =>11, 'sis_barrio_id' =>127],//130
            ['simianti_id' =>0, 'sis_localupz_id' =>11, 'sis_barrio_id' =>128],//131
            ['simianti_id' =>0, 'sis_localupz_id' =>11, 'sis_barrio_id' =>129],//132
            ['simianti_id' =>8411, 'sis_localupz_id' =>11, 'sis_barrio_id' =>130],//133
            ['simianti_id' =>8418, 'sis_localupz_id' =>11, 'sis_barrio_id' =>131],//134
            ['simianti_id' =>8413, 'sis_localupz_id' =>11, 'sis_barrio_id' =>109],//135
            ['simianti_id' =>8415, 'sis_localupz_id' =>11, 'sis_barrio_id' =>132],//136
            ['simianti_id' =>8412, 'sis_localupz_id' =>11, 'sis_barrio_id' =>133],//137
            ['simianti_id' =>10165, 'sis_localupz_id' =>11, 'sis_barrio_id' =>134],//138
            ['simianti_id' =>0, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1161],//139
            ['simianti_id' =>110230, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1162],//140
            ['simianti_id' =>9133, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1163],//141
            ['simianti_id' =>9120, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1164],//142
            ['simianti_id' =>110410, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1165],//143
            ['simianti_id' =>110560, 'sis_localupz_id' =>12, 'sis_barrio_id' =>484],//144
            ['simianti_id' =>110571, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1166],//145
            ['simianti_id' =>110597, 'sis_localupz_id' =>12, 'sis_barrio_id' =>897],//146
            ['simianti_id' =>110634, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1167],//147
            ['simianti_id' =>110816, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1168],//148
            ['simianti_id' =>9129, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1169],//149
            ['simianti_id' =>0, 'sis_localupz_id' =>12, 'sis_barrio_id' =>1170],//150
            ['simianti_id' =>9102, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1171],//151
            ['simianti_id' =>110060, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1172],//152
            ['simianti_id' =>110086, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1173],//153
            ['simianti_id' =>9103, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1174],//154
            ['simianti_id' =>110095, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1175],//155
            ['simianti_id' =>110179, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1176],//156
            ['simianti_id' =>9114, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1177],//157
            ['simianti_id' =>9101, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1178],//158
            ['simianti_id' =>110227, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1179],//159
            ['simianti_id' =>110076, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1180],//160
            ['simianti_id' =>110735, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1181],//161
            ['simianti_id' =>110054, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1182],//162
            ['simianti_id' =>9135, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1183],//163
            ['simianti_id' =>110494, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1184],//164
            ['simianti_id' =>110799, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1185],//165
            ['simianti_id' =>110818, 'sis_localupz_id' =>13, 'sis_barrio_id' =>1186],//166
            ['simianti_id' =>4407, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1187],//167
            ['simianti_id' =>110092, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1188],//168
            ['simianti_id' =>110044, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1189],//169
            ['simianti_id' =>0, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1190],//170
            ['simianti_id' =>9130, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1191],//171
            ['simianti_id' =>110305, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1192],//172
            ['simianti_id' =>0, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1193],//173
            ['simianti_id' =>110451, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1194],//174
            ['simianti_id' =>0, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1195],//175
            ['simianti_id' =>110026, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1196],//176
            ['simianti_id' =>9110, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1197],//177
            ['simianti_id' =>110448, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1198],//178
            ['simianti_id' =>9105, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1199],//179
            ['simianti_id' =>110441, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1200],//180
            ['simianti_id' =>9107, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1201],//181
            ['simianti_id' =>9116, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1202],//182
            ['simianti_id' =>9117, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1203],//183
            ['simianti_id' =>0, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1204],//184
            ['simianti_id' =>110572, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1205],//185
            ['simianti_id' =>9131, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1206],//186
            ['simianti_id' =>0, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1046],//187
            ['simianti_id' =>110093, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1207],//188
            ['simianti_id' =>9104, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1208],//189
            ['simianti_id' =>0, 'sis_localupz_id' =>14, 'sis_barrio_id' =>1209],//190
            ['simianti_id' =>110260, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1210],//191
            ['simianti_id' =>9118, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1211],//192
            ['simianti_id' =>0, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1212],//193
            ['simianti_id' =>9126, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1213],//194
            ['simianti_id' =>110245, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1214],//195
            ['simianti_id' =>110355, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1215],//196
            ['simianti_id' =>9111, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1216],//197
            ['simianti_id' =>9125, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1217],//198
            ['simianti_id' =>9124, 'sis_localupz_id' =>15, 'sis_barrio_id' =>1218],//199
            ['simianti_id' =>120020, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1371],//200
            ['simianti_id' =>5306, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1372],//201
            ['simianti_id' =>5304, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1373],//202
            ['simianti_id' =>5305, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1374],//203
            ['simianti_id' =>5307, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1375],//204
            ['simianti_id' =>5308, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1376],//205
            ['simianti_id' =>120052, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1377],//206
            ['simianti_id' =>120035, 'sis_localupz_id' =>16, 'sis_barrio_id' =>1378],//207
            ['simianti_id' =>5202, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1379],//208
            ['simianti_id' =>5201, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1380],//209
            ['simianti_id' =>5101, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1381],//210
            ['simianti_id' =>120024, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1382],//211
            ['simianti_id' =>120049, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1383],//212
            ['simianti_id' =>0, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1384],//213
            ['simianti_id' =>120036, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1065],//214
            ['simianti_id' =>0, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1385],//215
            ['simianti_id' =>5203, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1386],//216
            ['simianti_id' =>5103, 'sis_localupz_id' =>17, 'sis_barrio_id' =>364],//217
            ['simianti_id' =>120062, 'sis_localupz_id' =>17, 'sis_barrio_id' =>1387],//218
            ['simianti_id' =>9119, 'sis_localupz_id' =>18, 'sis_barrio_id' =>299],//219
            ['simianti_id' =>0, 'sis_localupz_id' =>18, 'sis_barrio_id' =>1219],//220
            ['simianti_id' =>110101, 'sis_localupz_id' =>18, 'sis_barrio_id' =>1220],//221
            ['simianti_id' =>9215, 'sis_localupz_id' =>18, 'sis_barrio_id' =>1221],//222
            ['simianti_id' =>9246, 'sis_localupz_id' =>18, 'sis_barrio_id' =>1222],//223
            ['simianti_id' =>70102, 'sis_localupz_id' =>18, 'sis_barrio_id' =>1223],//224
            ['simianti_id' =>9132, 'sis_localupz_id' =>18, 'sis_barrio_id' =>1224],//225
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1225],//226
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1226],//227
            ['simianti_id' =>110124, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1227],//228
            ['simianti_id' =>110130, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1228],//229
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1229],//230
            ['simianti_id' =>110311, 'sis_localupz_id' =>19, 'sis_barrio_id' =>308],//231
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1230],//232
            ['simianti_id' =>110228, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1231],//233
            ['simianti_id' =>9115, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1232],//234
            ['simianti_id' =>110311, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1233],//235
            ['simianti_id' =>9122, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1234],//236
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1235],//237
            ['simianti_id' =>9109, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1236],//238
            ['simianti_id' =>9123, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1237],//239
            ['simianti_id' =>9112, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1238],//240
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1239],//241
            ['simianti_id' =>0, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1240],//242
            ['simianti_id' =>110455, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1241],//243
            ['simianti_id' =>110203, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1242],//244
            ['simianti_id' =>110625, 'sis_localupz_id' =>19, 'sis_barrio_id' =>1243],//245
            ['simianti_id' =>9127, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1244],//246
            ['simianti_id' =>9121, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1245],//247
            ['simianti_id' =>110129, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1246],//248
            ['simianti_id' =>5403, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1247],//249
            ['simianti_id' =>110259, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1248],//250
            ['simianti_id' =>110290, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1249],//251
            ['simianti_id' =>0, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1250],//252
            ['simianti_id' =>110407, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1251],//253
            ['simianti_id' =>110757, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1252],//254
            ['simianti_id' =>110433, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1253],//255
            ['simianti_id' =>5402, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1254],//256
            ['simianti_id' =>110584, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1255],//257
            ['simianti_id' =>110637, 'sis_localupz_id' =>20, 'sis_barrio_id' =>1256],//258
            ['simianti_id' =>100001, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1050],//259
            ['simianti_id' =>5503, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1051],//260
            ['simianti_id' =>100087, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1052],//261
            ['simianti_id' =>5505, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1053],//262
            ['simianti_id' =>0, 'sis_localupz_id' =>21, 'sis_barrio_id' =>178],//263
            ['simianti_id' =>100074, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1054],//264
            ['simianti_id' =>5509, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1055],//265
            ['simianti_id' =>0, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1056],//266
            ['simianti_id' =>5510, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1057],//267
            ['simianti_id' =>100274, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1058],//268
            ['simianti_id' =>5502, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1059],//269
            ['simianti_id' =>100043, 'sis_localupz_id' =>21, 'sis_barrio_id' =>415],//270
            ['simianti_id' =>5504, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1060],//271
            ['simianti_id' =>100049, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1061],//272
            ['simianti_id' =>100102, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1062],//273
            ['simianti_id' =>100282, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1063],//274
            ['simianti_id' =>5404, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1064],//275
            ['simianti_id' =>0, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1065],//276
            ['simianti_id' =>5501, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1066],//277
            ['simianti_id' =>100234, 'sis_localupz_id' =>21, 'sis_barrio_id' =>1067],//278
            ['simianti_id' =>110001, 'sis_localupz_id' =>22, 'sis_barrio_id' =>70],//279
            ['simianti_id' =>110005, 'sis_localupz_id' =>22, 'sis_barrio_id' =>424],//280
            ['simianti_id' =>110694, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1257],//281
            ['simianti_id' =>110332, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1258],//282
            ['simianti_id' =>110010, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1259],//283
            ['simianti_id' =>9241, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1260],//284
            ['simianti_id' =>9219, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1261],//285
            ['simianti_id' =>110137, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1262],//286
            ['simianti_id' =>110180, 'sis_localupz_id' =>22, 'sis_barrio_id' =>807],//287
            ['simianti_id' =>110135, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1263],//288
            ['simianti_id' =>1324, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1264],//289
            ['simianti_id' =>0, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1265],//290
            ['simianti_id' =>0, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1266],//291
            ['simianti_id' =>5110, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1267],//292
            ['simianti_id' =>110834, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1268],//293
            ['simianti_id' =>110268, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1269],//294
            ['simianti_id' =>110723, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1270],//295
            ['simianti_id' =>110224, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1271],//296
            ['simianti_id' =>10133, 'sis_localupz_id' =>22, 'sis_barrio_id' =>63],//297
            ['simianti_id' =>110329, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1272],//298
            ['simianti_id' =>110359, 'sis_localupz_id' =>22, 'sis_barrio_id' =>257],//299
            ['simianti_id' =>110343, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1273],//300
            ['simianti_id' =>110733, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1274],//301
            ['simianti_id' =>110453, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1275],//302
            ['simianti_id' =>110191, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1276],//303
            ['simianti_id' =>110006, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1277],//304
            ['simianti_id' =>9210, 'sis_localupz_id' =>22, 'sis_barrio_id' =>545],//305
            ['simianti_id' =>110726, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1278],//306
            ['simianti_id' =>110828, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1279],//307
            ['simianti_id' =>110562, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1280],//308
            ['simianti_id' =>110706, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1281],//309
            ['simianti_id' =>0, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1282],//310
            ['simianti_id' =>9214, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1283],//311
            ['simianti_id' =>9242, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1284],//312
            ['simianti_id' =>110666, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1285],//313
            ['simianti_id' =>110783, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1286],//314
            ['simianti_id' =>110796, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1287],//315
            ['simianti_id' =>110803, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1288],//316
            ['simianti_id' =>9244, 'sis_localupz_id' =>22, 'sis_barrio_id' =>586],//317
            ['simianti_id' =>110815, 'sis_localupz_id' =>22, 'sis_barrio_id' =>1289],//318
            ['simianti_id' =>110330, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1290],//319
            ['simianti_id' =>9218, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1291],//320
            ['simianti_id' =>110008, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1292],//321
            ['simianti_id' =>9222, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1293],//322
            ['simianti_id' =>110014, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1294],//323
            ['simianti_id' =>110201, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1295],//324
            ['simianti_id' =>110674, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1296],//325
            ['simianti_id' =>110335, 'sis_localupz_id' =>23, 'sis_barrio_id' =>425],//326
            ['simianti_id' =>9205, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1297],//327
            ['simianti_id' =>110683, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1298],//328
            ['simianti_id' =>110779, 'sis_localupz_id' =>23, 'sis_barrio_id' =>880],//329
            ['simianti_id' =>9235, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1299],//330
            ['simianti_id' =>0, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1300],//331
            ['simianti_id' =>9208, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1262],//332
            ['simianti_id' =>110829, 'sis_localupz_id' =>23, 'sis_barrio_id' =>410],//333
            ['simianti_id' =>110802, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1301],//334
            ['simianti_id' =>110145, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1302],//335
            ['simianti_id' =>110152, 'sis_localupz_id' =>23, 'sis_barrio_id' =>988],//336
            ['simianti_id' =>8527, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1303],//337
            ['simianti_id' =>110478, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1304],//338
            ['simianti_id' =>110168, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1305],//339
            ['simianti_id' =>9211, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1306],//340
            ['simianti_id' =>110830, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1307],//341
            ['simianti_id' =>110176, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1308],//342
            ['simianti_id' =>110299, 'sis_localupz_id' =>23, 'sis_barrio_id' =>706],//343
            ['simianti_id' =>110703, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1266],//344
            ['simianti_id' =>110195, 'sis_localupz_id' =>23, 'sis_barrio_id' =>639],//345
            ['simianti_id' =>110467, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1309],//346
            ['simianti_id' =>110208, 'sis_localupz_id' =>23, 'sis_barrio_id' =>538],//347
            ['simianti_id' =>110708, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1310],//348
            ['simianti_id' =>110224, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1311],//349
            ['simianti_id' =>110231, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1312],//350
            ['simianti_id' =>110247, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1313],//351
            ['simianti_id' =>110248, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1314],//352
            ['simianti_id' =>110251, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1315],//353
            ['simianti_id' =>110257, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1316],//354
            ['simianti_id' =>110258, 'sis_localupz_id' =>23, 'sis_barrio_id' =>193],//355
            ['simianti_id' =>110267, 'sis_localupz_id' =>23, 'sis_barrio_id' =>473],//356
            ['simianti_id' =>9221, 'sis_localupz_id' =>23, 'sis_barrio_id' =>812],//357
            ['simianti_id' =>110278, 'sis_localupz_id' =>23, 'sis_barrio_id' =>649],//358
            ['simianti_id' =>110281, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1317],//359
            ['simianti_id' =>110283, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1318],//360
            ['simianti_id' =>110287, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1319],//361
            ['simianti_id' =>110208, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1320],//362
            ['simianti_id' =>110295, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1321],//363
            ['simianti_id' =>110725, 'sis_localupz_id' =>23, 'sis_barrio_id' =>659],//364
            ['simianti_id' =>0, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1322],//365
            ['simianti_id' =>110314, 'sis_localupz_id' =>23, 'sis_barrio_id' =>545],//366
            ['simianti_id' =>9228, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1323],//367
            ['simianti_id' =>110335, 'sis_localupz_id' =>23, 'sis_barrio_id' =>418],//368
            ['simianti_id' =>9201, 'sis_localupz_id' =>23, 'sis_barrio_id' =>33],//369
            ['simianti_id' =>110745, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1324],//370
            ['simianti_id' =>110368, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1325],//371
            ['simianti_id' =>110414, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1326],//372
            ['simianti_id' =>9240, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1327],//373
            ['simianti_id' =>0, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1328],//374
            ['simianti_id' =>9203, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1329],//375
            ['simianti_id' =>110474, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1330],//376
            ['simianti_id' =>110478, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1331],//377
            ['simianti_id' =>110479, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1332],//378
            ['simianti_id' =>110763, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1333],//379
            ['simianti_id' =>110483, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1334],//380
            ['simianti_id' =>9230, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1335],//381
            ['simianti_id' =>110567, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1336],//382
            ['simianti_id' =>110569, 'sis_localupz_id' =>23, 'sis_barrio_id' =>676],//383
            ['simianti_id' =>110583, 'sis_localupz_id' =>23, 'sis_barrio_id' =>364],//384
            ['simianti_id' =>110586, 'sis_localupz_id' =>23, 'sis_barrio_id' =>678],//385
            ['simianti_id' =>110593, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1337],//386
            ['simianti_id' =>110631, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1338],//387
            ['simianti_id' =>110635, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1339],//388
            ['simianti_id' =>110638, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1340],//389
            ['simianti_id' =>9233, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1341],//390
            ['simianti_id' =>110271, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1342],//391
            ['simianti_id' =>110788, 'sis_localupz_id' =>23, 'sis_barrio_id' =>964],//392
            ['simianti_id' =>110789, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1343],//393
            ['simianti_id' =>9207, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1344],//394
            ['simianti_id' =>9209, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1345],//395
            ['simianti_id' =>110817, 'sis_localupz_id' =>23, 'sis_barrio_id' =>1346],//396
            ['simianti_id' =>100007, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1068],//397
            ['simianti_id' =>5630, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1069],//398
            ['simianti_id' =>100157, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1070],//399
            ['simianti_id' =>100065, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1071],//400
            ['simianti_id' =>0, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1072],//401
            ['simianti_id' =>100236, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1073],//402
            ['simianti_id' =>100073, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1074],//403
            ['simianti_id' =>5613, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1075],//404
            ['simianti_id' =>5616, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1076],//405
            ['simianti_id' =>5661, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1077],//406
            ['simianti_id' =>100155, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1078],//407
            ['simianti_id' =>5601, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1079],//408
            ['simianti_id' =>0, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1080],//409
            ['simianti_id' =>5612, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1081],//410
            ['simianti_id' =>100106, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1082],//411
            ['simianti_id' =>5683, 'sis_localupz_id' =>24, 'sis_barrio_id' =>1083],//412
            ['simianti_id' =>5603, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1084],//413
            ['simianti_id' =>100128, 'sis_localupz_id' =>25, 'sis_barrio_id' =>936],//414
            ['simianti_id' =>100176, 'sis_localupz_id' =>25, 'sis_barrio_id' =>138],//415
            ['simianti_id' =>5620, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1012],//416
            ['simianti_id' =>5621, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1085],//417
            ['simianti_id' =>100086, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1086],//418
            ['simianti_id' =>5610, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1087],//419
            ['simianti_id' =>5615, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1088],//420
            ['simianti_id' =>100108, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1089],//421
            ['simianti_id' =>100150, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1090],//422
            ['simianti_id' =>100029, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1091],//423
            ['simianti_id' =>5619, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1092],//424
            ['simianti_id' =>5608, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1093],//425
            ['simianti_id' =>100229, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1094],//426
            ['simianti_id' =>100233, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1095],//427
            ['simianti_id' =>5609, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1096],//428
            ['simianti_id' =>100241, 'sis_localupz_id' =>25, 'sis_barrio_id' =>195],//429
            ['simianti_id' =>100272, 'sis_localupz_id' =>25, 'sis_barrio_id' =>1097],//430
            ['simianti_id' =>5605, 'sis_localupz_id' =>26, 'sis_barrio_id' =>310],//431
            ['simianti_id' =>100066, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1098],//432
            ['simianti_id' =>5604, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1099],//433
            ['simianti_id' =>100149, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1100],//434
            ['simianti_id' =>5507, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1101],//435
            ['simianti_id' =>5606, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1102],//436
            ['simianti_id' =>5607, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1103],//437
            ['simianti_id' =>100225, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1104],//438
            ['simianti_id' =>5638, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1045],//439
            ['simianti_id' =>5614, 'sis_localupz_id' =>26, 'sis_barrio_id' =>1105],//440
            ['simianti_id' =>100281, 'sis_localupz_id' =>27, 'sis_barrio_id' =>219],//441
            ['simianti_id' =>1342, 'sis_localupz_id' =>27, 'sis_barrio_id' =>220],//442
            ['simianti_id' =>40006, 'sis_localupz_id' =>27, 'sis_barrio_id' =>221],//443
            ['simianti_id' =>40007, 'sis_localupz_id' =>27, 'sis_barrio_id' =>222],//444
            ['simianti_id' =>40045, 'sis_localupz_id' =>27, 'sis_barrio_id' =>223],//445
            ['simianti_id' =>40014, 'sis_localupz_id' =>27, 'sis_barrio_id' =>224],//446
            ['simianti_id' =>1313, 'sis_localupz_id' =>27, 'sis_barrio_id' =>225],//447
            ['simianti_id' =>1313, 'sis_localupz_id' =>27, 'sis_barrio_id' =>226],//448
            ['simianti_id' =>1339, 'sis_localupz_id' =>27, 'sis_barrio_id' =>227],//449
            ['simianti_id' =>40021, 'sis_localupz_id' =>27, 'sis_barrio_id' =>228],//450
            ['simianti_id' =>40032, 'sis_localupz_id' =>27, 'sis_barrio_id' =>229],//451
            ['simianti_id' =>40213, 'sis_localupz_id' =>27, 'sis_barrio_id' =>230],//452
            ['simianti_id' =>40036, 'sis_localupz_id' =>27, 'sis_barrio_id' =>231],//453
            ['simianti_id' =>0, 'sis_localupz_id' =>27, 'sis_barrio_id' =>232],//454
            ['simianti_id' =>40045, 'sis_localupz_id' =>27, 'sis_barrio_id' =>233],//455
            ['simianti_id' =>40048, 'sis_localupz_id' =>27, 'sis_barrio_id' =>234],//456
            ['simianti_id' =>40055, 'sis_localupz_id' =>27, 'sis_barrio_id' =>235],//457
            ['simianti_id' =>40056, 'sis_localupz_id' =>27, 'sis_barrio_id' =>236],//458
            ['simianti_id' =>201310, 'sis_localupz_id' =>27, 'sis_barrio_id' =>237],//459
            ['simianti_id' =>40220, 'sis_localupz_id' =>27, 'sis_barrio_id' =>238],//460
            ['simianti_id' =>40071, 'sis_localupz_id' =>27, 'sis_barrio_id' =>239],//461
            ['simianti_id' =>0, 'sis_localupz_id' =>27, 'sis_barrio_id' =>240],//462
            ['simianti_id' =>40076, 'sis_localupz_id' =>27, 'sis_barrio_id' =>241],//463
            ['simianti_id' =>40223, 'sis_localupz_id' =>27, 'sis_barrio_id' =>242],//464
            ['simianti_id' =>40078, 'sis_localupz_id' =>27, 'sis_barrio_id' =>243],//465
            ['simianti_id' =>40083, 'sis_localupz_id' =>27, 'sis_barrio_id' =>244],//466
            ['simianti_id' =>40259, 'sis_localupz_id' =>27, 'sis_barrio_id' =>245],//467
            ['simianti_id' =>40084, 'sis_localupz_id' =>27, 'sis_barrio_id' =>246],//468
            ['simianti_id' =>40090, 'sis_localupz_id' =>27, 'sis_barrio_id' =>157],//469
            ['simianti_id' =>0, 'sis_localupz_id' =>27, 'sis_barrio_id' =>247],//470
            ['simianti_id' =>1107, 'sis_localupz_id' =>27, 'sis_barrio_id' =>248],//471
            ['simianti_id' =>40102, 'sis_localupz_id' =>27, 'sis_barrio_id' =>249],//472
            ['simianti_id' =>1312, 'sis_localupz_id' =>27, 'sis_barrio_id' =>250],//473
            ['simianti_id' =>1312, 'sis_localupz_id' =>27, 'sis_barrio_id' =>251],//474
            ['simianti_id' =>40097, 'sis_localupz_id' =>27, 'sis_barrio_id' =>252],//475
            ['simianti_id' =>40101, 'sis_localupz_id' =>27, 'sis_barrio_id' =>253],//476
            ['simianti_id' =>40114, 'sis_localupz_id' =>27, 'sis_barrio_id' =>254],//477
            ['simianti_id' =>40062, 'sis_localupz_id' =>27, 'sis_barrio_id' =>255],//478
            ['simianti_id' =>40117, 'sis_localupz_id' =>27, 'sis_barrio_id' =>256],//479
            ['simianti_id' =>40120, 'sis_localupz_id' =>27, 'sis_barrio_id' =>257],//480
            ['simianti_id' =>201310, 'sis_localupz_id' =>27, 'sis_barrio_id' =>258],//481
            ['simianti_id' =>40121, 'sis_localupz_id' =>27, 'sis_barrio_id' =>259],//482
            ['simianti_id' =>40126, 'sis_localupz_id' =>27, 'sis_barrio_id' =>260],//483
            ['simianti_id' =>40127, 'sis_localupz_id' =>27, 'sis_barrio_id' =>261],//484
            ['simianti_id' =>1307, 'sis_localupz_id' =>27, 'sis_barrio_id' =>262],//485
            ['simianti_id' =>40059, 'sis_localupz_id' =>27, 'sis_barrio_id' =>263],//486
            ['simianti_id' =>40084, 'sis_localupz_id' =>27, 'sis_barrio_id' =>264],//487
            ['simianti_id' =>1106, 'sis_localupz_id' =>27, 'sis_barrio_id' =>265],//488
            ['simianti_id' =>1106, 'sis_localupz_id' =>27, 'sis_barrio_id' =>266],//489
            ['simianti_id' =>1113, 'sis_localupz_id' =>27, 'sis_barrio_id' =>267],//490
            ['simianti_id' =>40175, 'sis_localupz_id' =>27, 'sis_barrio_id' =>268],//491
            ['simianti_id' =>40176, 'sis_localupz_id' =>27, 'sis_barrio_id' =>269],//492
            ['simianti_id' =>1306, 'sis_localupz_id' =>27, 'sis_barrio_id' =>270],//493
            ['simianti_id' =>1309, 'sis_localupz_id' =>27, 'sis_barrio_id' =>271],//494
            ['simianti_id' =>40242, 'sis_localupz_id' =>27, 'sis_barrio_id' =>272],//495
            ['simianti_id' =>40190, 'sis_localupz_id' =>27, 'sis_barrio_id' =>273],//496
            ['simianti_id' =>40191, 'sis_localupz_id' =>27, 'sis_barrio_id' =>274],//497
            ['simianti_id' =>40196, 'sis_localupz_id' =>27, 'sis_barrio_id' =>198],//498
            ['simianti_id' =>40197, 'sis_localupz_id' =>27, 'sis_barrio_id' =>275],//499
            ['simianti_id' =>40261, 'sis_localupz_id' =>27, 'sis_barrio_id' =>276],//500
            ['simianti_id' =>40206, 'sis_localupz_id' =>27, 'sis_barrio_id' =>277],//501
            ['simianti_id' =>40206, 'sis_localupz_id' =>27, 'sis_barrio_id' =>278],//502
            ['simianti_id' =>40149, 'sis_localupz_id' =>27, 'sis_barrio_id' =>279],//503
            ['simianti_id' =>40236, 'sis_localupz_id' =>27, 'sis_barrio_id' =>280],//504
            ['simianti_id' =>40258, 'sis_localupz_id' =>27, 'sis_barrio_id' =>218],//505
            ['simianti_id' =>40219, 'sis_localupz_id' =>28, 'sis_barrio_id' =>281],//506
            ['simianti_id' =>1112, 'sis_localupz_id' =>28, 'sis_barrio_id' =>282],//507
            ['simianti_id' =>1102, 'sis_localupz_id' =>28, 'sis_barrio_id' =>283],//508
            ['simianti_id' =>1210, 'sis_localupz_id' =>28, 'sis_barrio_id' =>284],//509
            ['simianti_id' =>1109, 'sis_localupz_id' =>28, 'sis_barrio_id' =>285],//510
            ['simianti_id' =>1101, 'sis_localupz_id' =>28, 'sis_barrio_id' =>286],//511
            ['simianti_id' =>40099, 'sis_localupz_id' =>28, 'sis_barrio_id' =>287],//512
            ['simianti_id' =>1209, 'sis_localupz_id' =>28, 'sis_barrio_id' =>288],//513
            ['simianti_id' =>40123, 'sis_localupz_id' =>28, 'sis_barrio_id' =>289],//514
            ['simianti_id' =>1206, 'sis_localupz_id' =>28, 'sis_barrio_id' =>290],//515
            ['simianti_id' =>0, 'sis_localupz_id' =>28, 'sis_barrio_id' =>291],//516
            ['simianti_id' =>1108, 'sis_localupz_id' =>28, 'sis_barrio_id' =>292],//517
            ['simianti_id' =>1110, 'sis_localupz_id' =>28, 'sis_barrio_id' =>293],//518
            ['simianti_id' =>40192, 'sis_localupz_id' =>28, 'sis_barrio_id' =>107],//519
            ['simianti_id' =>1111, 'sis_localupz_id' =>28, 'sis_barrio_id' =>294],//520
            ['simianti_id' =>40060, 'sis_localupz_id' =>28, 'sis_barrio_id' =>295],//521
            ['simianti_id' =>40247, 'sis_localupz_id' =>28, 'sis_barrio_id' =>296],//522
            ['simianti_id' =>40248, 'sis_localupz_id' =>28, 'sis_barrio_id' =>297],//523
            ['simianti_id' =>40255, 'sis_localupz_id' =>28, 'sis_barrio_id' =>298],//524
            ['simianti_id' =>1305, 'sis_localupz_id' =>29, 'sis_barrio_id' =>299],//525
            ['simianti_id' =>40137, 'sis_localupz_id' =>29, 'sis_barrio_id' =>300],//526
            ['simianti_id' =>40010, 'sis_localupz_id' =>29, 'sis_barrio_id' =>301],//527
            ['simianti_id' =>40209, 'sis_localupz_id' =>29, 'sis_barrio_id' =>302],//528
            ['simianti_id' =>1424, 'sis_localupz_id' =>29, 'sis_barrio_id' =>303],//529
            ['simianti_id' =>1424, 'sis_localupz_id' =>29, 'sis_barrio_id' =>304],//530
            ['simianti_id' =>40013, 'sis_localupz_id' =>29, 'sis_barrio_id' =>305],//531
            ['simianti_id' =>1304, 'sis_localupz_id' =>29, 'sis_barrio_id' =>306],//532
            ['simianti_id' =>40018, 'sis_localupz_id' =>29, 'sis_barrio_id' =>307],//533
            ['simianti_id' =>40040, 'sis_localupz_id' =>29, 'sis_barrio_id' =>308],//534
            ['simianti_id' =>40044, 'sis_localupz_id' =>29, 'sis_barrio_id' =>309],//535
            ['simianti_id' =>40047, 'sis_localupz_id' =>29, 'sis_barrio_id' =>310],//536
            ['simianti_id' =>2541, 'sis_localupz_id' =>29, 'sis_barrio_id' =>311],//537
            ['simianti_id' =>40064, 'sis_localupz_id' =>29, 'sis_barrio_id' =>312],//538
            ['simianti_id' =>40078, 'sis_localupz_id' =>29, 'sis_barrio_id' =>313],//539
            ['simianti_id' =>40243, 'sis_localupz_id' =>29, 'sis_barrio_id' =>314],//540
            ['simianti_id' =>40116, 'sis_localupz_id' =>29, 'sis_barrio_id' =>315],//541
            ['simianti_id' =>1302, 'sis_localupz_id' =>29, 'sis_barrio_id' =>316],//542
            ['simianti_id' =>1406, 'sis_localupz_id' =>29, 'sis_barrio_id' =>145],//543
            ['simianti_id' =>1406, 'sis_localupz_id' =>29, 'sis_barrio_id' =>317],//544
            ['simianti_id' =>40179, 'sis_localupz_id' =>29, 'sis_barrio_id' =>318],//545
            ['simianti_id' =>0, 'sis_localupz_id' =>29, 'sis_barrio_id' =>319],//546
            ['simianti_id' =>40202, 'sis_localupz_id' =>29, 'sis_barrio_id' =>320],//547
            ['simianti_id' =>1408, 'sis_localupz_id' =>29, 'sis_barrio_id' =>321],//548
            ['simianti_id' =>1430, 'sis_localupz_id' =>29, 'sis_barrio_id' =>322],//549
            ['simianti_id' =>40256, 'sis_localupz_id' =>29, 'sis_barrio_id' =>323],//550
            ['simianti_id' =>1211, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1446],//551
            ['simianti_id' =>1203, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1447],//552
            ['simianti_id' =>1202, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1448],//553
            ['simianti_id' =>1204, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1449],//554
            ['simianti_id' =>1201, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1450],//555
            ['simianti_id' =>150010, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1451],//556
            ['simianti_id' =>1208, 'sis_localupz_id' =>30, 'sis_barrio_id' =>1452],//557
            ['simianti_id' =>180009, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1509],//558
            ['simianti_id' =>180012, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1510],//559
            ['simianti_id' =>1402, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1511],//560
            ['simianti_id' =>180083, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1512],//561
            ['simianti_id' =>1401, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1513],//562
            ['simianti_id' =>1426, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1514],//563
            ['simianti_id' =>1404, 'sis_localupz_id' =>31, 'sis_barrio_id' =>1515],//564
            ['simianti_id' =>4105, 'sis_localupz_id' =>32, 'sis_barrio_id' =>1430],//565
            ['simianti_id' =>4111, 'sis_localupz_id' =>32, 'sis_barrio_id' =>639],//566
            ['simianti_id' =>4106, 'sis_localupz_id' =>32, 'sis_barrio_id' =>844],//567
            ['simianti_id' =>4108, 'sis_localupz_id' =>32, 'sis_barrio_id' =>1281],//568
            ['simianti_id' =>4109, 'sis_localupz_id' =>32, 'sis_barrio_id' =>1431],//569
            ['simianti_id' =>2103, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1453],//570
            ['simianti_id' =>150026, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1454],//571
            ['simianti_id' =>150019, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1455],//572
            ['simianti_id' =>150027, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1456],//573
            ['simianti_id' =>150005, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1457],//574
            ['simianti_id' =>2102, 'sis_localupz_id' =>33, 'sis_barrio_id' =>672],//575
            ['simianti_id' =>2107, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1458],//576
            ['simianti_id' =>2101, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1459],//577
            ['simianti_id' =>2105, 'sis_localupz_id' =>33, 'sis_barrio_id' =>1000],//578
            ['simianti_id' =>2308, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1516],//579
            ['simianti_id' =>2306, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1517],//580
            ['simianti_id' =>2303, 'sis_localupz_id' =>34, 'sis_barrio_id' =>986],//581
            ['simianti_id' =>0, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1518],//582
            ['simianti_id' =>2310, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1519],//583
            ['simianti_id' =>2201, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1520],//584
            ['simianti_id' =>2202, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1521],//585
            ['simianti_id' =>2205, 'sis_localupz_id' =>34, 'sis_barrio_id' =>737],//586
            ['simianti_id' =>2304, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1522],//587
            ['simianti_id' =>2307, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1523],//588
            ['simianti_id' =>2311, 'sis_localupz_id' =>34, 'sis_barrio_id' =>1524],//589
            ['simianti_id' =>160032, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1460],//590
            ['simianti_id' =>4211, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1106],//591
            ['simianti_id' =>160037, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1461],//592
            ['simianti_id' =>160012, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1462],//593
            ['simianti_id' =>160019, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1463],//594
            ['simianti_id' =>160017, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1464],//595
            ['simianti_id' =>4210, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1465],//596
            ['simianti_id' =>160069, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1466],//597
            ['simianti_id' =>160029, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1467],//598
            ['simianti_id' =>4309, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1468],//599
            ['simianti_id' =>4202, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1469],//600
            ['simianti_id' =>160034, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1470],//601
            ['simianti_id' =>5617, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1471],//602
            ['simianti_id' =>4402, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1472],//603
            ['simianti_id' =>4401, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1473],//604
            ['simianti_id' =>4209, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1474],//605
            ['simianti_id' =>4212, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1475],//606
            ['simianti_id' =>160064, 'sis_localupz_id' =>35, 'sis_barrio_id' =>1476],//607
            ['simianti_id' =>4407, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1187],//608
            ['simianti_id' =>4409, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1477],//609
            ['simianti_id' =>4404, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1478],//610
            ['simianti_id' =>0, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1479],//611
            ['simianti_id' =>0, 'sis_localupz_id' =>36, 'sis_barrio_id' =>666],//612
            ['simianti_id' =>4403, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1480],//613
            ['simianti_id' =>160043, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1481],//614
            ['simianti_id' =>160060, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1363],//615
            ['simianti_id' =>4408, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1482],//616
            ['simianti_id' =>160068, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1483],//617
            ['simianti_id' =>160070, 'sis_localupz_id' =>36, 'sis_barrio_id' =>1484],//618
            ['simianti_id' =>60010, 'sis_localupz_id' =>37, 'sis_barrio_id' =>599],//619
            ['simianti_id' =>2411, 'sis_localupz_id' =>37, 'sis_barrio_id' =>600],//620
            ['simianti_id' =>60012, 'sis_localupz_id' =>37, 'sis_barrio_id' =>601],//621
            ['simianti_id' =>2409, 'sis_localupz_id' =>37, 'sis_barrio_id' =>602],//622
            ['simianti_id' =>60018, 'sis_localupz_id' =>37, 'sis_barrio_id' =>603],//623
            ['simianti_id' =>60019, 'sis_localupz_id' =>37, 'sis_barrio_id' =>604],//624
            ['simianti_id' =>2406, 'sis_localupz_id' =>37, 'sis_barrio_id' =>605],//625
            ['simianti_id' =>2402, 'sis_localupz_id' =>37, 'sis_barrio_id' =>606],//626
            ['simianti_id' =>60026, 'sis_localupz_id' =>37, 'sis_barrio_id' =>607],//627
            ['simianti_id' =>2404, 'sis_localupz_id' =>37, 'sis_barrio_id' =>608],//628
            ['simianti_id' =>2410, 'sis_localupz_id' =>37, 'sis_barrio_id' =>609],//629
            ['simianti_id' =>4303, 'sis_localupz_id' =>38, 'sis_barrio_id' =>303],//630
            ['simianti_id' =>160008, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1485],//631
            ['simianti_id' =>160030, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1486],//632
            ['simianti_id' =>4308, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1487],//633
            ['simianti_id' =>160021, 'sis_localupz_id' =>38, 'sis_barrio_id' =>911],//634
            ['simianti_id' =>4305, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1488],//635
            ['simianti_id' =>4306, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1489],//636
            ['simianti_id' =>160015, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1490],//637
            ['simianti_id' =>160041, 'sis_localupz_id' =>38, 'sis_barrio_id' =>816],//638
            ['simianti_id' =>4206, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1280],//639
            ['simianti_id' =>4307, 'sis_localupz_id' =>38, 'sis_barrio_id' =>106],//640
            ['simianti_id' =>2539, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1491],//641
            ['simianti_id' =>4301, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1492],//642
            ['simianti_id' =>6212, 'sis_localupz_id' =>38, 'sis_barrio_id' =>1493],//643
            ['simianti_id' =>80226, 'sis_localupz_id' =>39, 'sis_barrio_id' =>772],//644
            ['simianti_id' =>80312, 'sis_localupz_id' =>39, 'sis_barrio_id' =>773],//645
            ['simianti_id' =>80003, 'sis_localupz_id' =>39, 'sis_barrio_id' =>774],//646
            ['simianti_id' =>80053, 'sis_localupz_id' =>39, 'sis_barrio_id' =>775],//647
            ['simianti_id' =>80012, 'sis_localupz_id' =>39, 'sis_barrio_id' =>776],//648
            ['simianti_id' =>0, 'sis_localupz_id' =>39, 'sis_barrio_id' =>777],//649
            ['simianti_id' =>6531, 'sis_localupz_id' =>39, 'sis_barrio_id' =>778],//650
            ['simianti_id' =>80020, 'sis_localupz_id' =>39, 'sis_barrio_id' =>779],//651
            ['simianti_id' =>80336, 'sis_localupz_id' =>39, 'sis_barrio_id' =>780],//652
            ['simianti_id' =>80053, 'sis_localupz_id' =>39, 'sis_barrio_id' =>781],//653
            ['simianti_id' =>4509, 'sis_localupz_id' =>39, 'sis_barrio_id' =>782],//654
            ['simianti_id' =>4531, 'sis_localupz_id' =>39, 'sis_barrio_id' =>783],//655
            ['simianti_id' =>80127, 'sis_localupz_id' =>39, 'sis_barrio_id' =>784],//656
            ['simianti_id' =>0, 'sis_localupz_id' =>39, 'sis_barrio_id' =>785],//657
            ['simianti_id' =>80128, 'sis_localupz_id' =>39, 'sis_barrio_id' =>786],//658
            ['simianti_id' =>4501, 'sis_localupz_id' =>39, 'sis_barrio_id' =>787],//659
            ['simianti_id' =>80151, 'sis_localupz_id' =>39, 'sis_barrio_id' =>788],//660
            ['simianti_id' =>0, 'sis_localupz_id' =>39, 'sis_barrio_id' =>789],//661
            ['simianti_id' =>80166, 'sis_localupz_id' =>39, 'sis_barrio_id' =>790],//662
            ['simianti_id' =>0, 'sis_localupz_id' =>39, 'sis_barrio_id' =>666],//663
            ['simianti_id' =>4531, 'sis_localupz_id' =>39, 'sis_barrio_id' =>791],//664
            ['simianti_id' =>80203, 'sis_localupz_id' =>39, 'sis_barrio_id' =>792],//665
            ['simianti_id' =>80201, 'sis_localupz_id' =>39, 'sis_barrio_id' =>793],//666
            ['simianti_id' =>0, 'sis_localupz_id' =>39, 'sis_barrio_id' =>351],//667
            ['simianti_id' =>4503, 'sis_localupz_id' =>39, 'sis_barrio_id' =>794],//668
            ['simianti_id' =>80268, 'sis_localupz_id' =>39, 'sis_barrio_id' =>795],//669
            ['simianti_id' =>80295, 'sis_localupz_id' =>39, 'sis_barrio_id' =>796],//670
            ['simianti_id' =>80302, 'sis_localupz_id' =>39, 'sis_barrio_id' =>797],//671
            ['simianti_id' =>80005, 'sis_localupz_id' =>40, 'sis_barrio_id' =>798],//672
            ['simianti_id' =>80031, 'sis_localupz_id' =>40, 'sis_barrio_id' =>799],//673
            ['simianti_id' =>80040, 'sis_localupz_id' =>40, 'sis_barrio_id' =>800],//674
            ['simianti_id' =>80041, 'sis_localupz_id' =>40, 'sis_barrio_id' =>801],//675
            ['simianti_id' =>80336, 'sis_localupz_id' =>40, 'sis_barrio_id' =>802],//676
            ['simianti_id' =>0, 'sis_localupz_id' =>40, 'sis_barrio_id' =>803],//677
            ['simianti_id' =>0, 'sis_localupz_id' =>40, 'sis_barrio_id' =>804],//678
            ['simianti_id' =>4544, 'sis_localupz_id' =>40, 'sis_barrio_id' =>805],//679
            ['simianti_id' =>4549, 'sis_localupz_id' =>40, 'sis_barrio_id' =>806],//680
            ['simianti_id' =>80098, 'sis_localupz_id' =>40, 'sis_barrio_id' =>807],//681
            ['simianti_id' =>80103, 'sis_localupz_id' =>40, 'sis_barrio_id' =>808],//682
            ['simianti_id' =>80116, 'sis_localupz_id' =>40, 'sis_barrio_id' =>573],//683
            ['simianti_id' =>80125, 'sis_localupz_id' =>40, 'sis_barrio_id' =>809],//684
            ['simianti_id' =>0, 'sis_localupz_id' =>40, 'sis_barrio_id' =>810],//685
            ['simianti_id' =>4563, 'sis_localupz_id' =>40, 'sis_barrio_id' =>811],//686
            ['simianti_id' =>80147, 'sis_localupz_id' =>40, 'sis_barrio_id' =>812],//687
            ['simianti_id' =>80177, 'sis_localupz_id' =>40, 'sis_barrio_id' =>813],//688
            ['simianti_id' =>80035, 'sis_localupz_id' =>40, 'sis_barrio_id' =>814],//689
            ['simianti_id' =>80183, 'sis_localupz_id' =>40, 'sis_barrio_id' =>815],//690
            ['simianti_id' =>80190, 'sis_localupz_id' =>40, 'sis_barrio_id' =>816],//691
            ['simianti_id' =>4549, 'sis_localupz_id' =>40, 'sis_barrio_id' =>817],//692
            ['simianti_id' =>4504, 'sis_localupz_id' =>40, 'sis_barrio_id' =>818],//693
            ['simianti_id' =>4505, 'sis_localupz_id' =>40, 'sis_barrio_id' =>819],//694
            ['simianti_id' =>80252, 'sis_localupz_id' =>40, 'sis_barrio_id' =>820],//695
            ['simianti_id' =>80253, 'sis_localupz_id' =>40, 'sis_barrio_id' =>821],//696
            ['simianti_id' =>80273, 'sis_localupz_id' =>40, 'sis_barrio_id' =>822],//697
            ['simianti_id' =>0, 'sis_localupz_id' =>40, 'sis_barrio_id' =>823],//698
            ['simianti_id' =>80289, 'sis_localupz_id' =>40, 'sis_barrio_id' =>824],//699
            ['simianti_id' =>80323, 'sis_localupz_id' =>40, 'sis_barrio_id' =>825],//700
            ['simianti_id' =>80188, 'sis_localupz_id' =>41, 'sis_barrio_id' =>826],//701
            ['simianti_id' =>6505, 'sis_localupz_id' =>41, 'sis_barrio_id' =>827],//702
            ['simianti_id' =>80016, 'sis_localupz_id' =>41, 'sis_barrio_id' =>695],//703
            ['simianti_id' =>80024, 'sis_localupz_id' =>41, 'sis_barrio_id' =>828],//704
            ['simianti_id' =>80033, 'sis_localupz_id' =>41, 'sis_barrio_id' =>829],//705
            ['simianti_id' =>80048, 'sis_localupz_id' =>41, 'sis_barrio_id' =>830],//706
            ['simianti_id' =>0, 'sis_localupz_id' =>41, 'sis_barrio_id' =>831],//707
            ['simianti_id' =>80049, 'sis_localupz_id' =>41, 'sis_barrio_id' =>832],//708
            ['simianti_id' =>0, 'sis_localupz_id' =>41, 'sis_barrio_id' =>833],//709
            ['simianti_id' =>0, 'sis_localupz_id' =>41, 'sis_barrio_id' =>834],//710
            ['simianti_id' =>0, 'sis_localupz_id' =>41, 'sis_barrio_id' =>835],//711
            ['simianti_id' =>80055, 'sis_localupz_id' =>41, 'sis_barrio_id' =>836],//712
            ['simianti_id' =>80123, 'sis_localupz_id' =>41, 'sis_barrio_id' =>837],//713
            ['simianti_id' =>80074, 'sis_localupz_id' =>41, 'sis_barrio_id' =>838],//714
            ['simianti_id' =>80084, 'sis_localupz_id' =>41, 'sis_barrio_id' =>150],//715
            ['simianti_id' =>80086, 'sis_localupz_id' =>41, 'sis_barrio_id' =>839],//716
            ['simianti_id' =>80099, 'sis_localupz_id' =>41, 'sis_barrio_id' =>840],//717
            ['simianti_id' =>80234, 'sis_localupz_id' =>41, 'sis_barrio_id' =>841],//718
            ['simianti_id' =>80108, 'sis_localupz_id' =>41, 'sis_barrio_id' =>842],//719
            ['simianti_id' =>80113, 'sis_localupz_id' =>41, 'sis_barrio_id' =>843],//720
            ['simianti_id' =>80120, 'sis_localupz_id' =>41, 'sis_barrio_id' =>844],//721
            ['simianti_id' =>80160, 'sis_localupz_id' =>41, 'sis_barrio_id' =>845],//722
            ['simianti_id' =>6508, 'sis_localupz_id' =>41, 'sis_barrio_id' =>846],//723
            ['simianti_id' =>80194, 'sis_localupz_id' =>41, 'sis_barrio_id' =>847],//724
            ['simianti_id' =>0, 'sis_localupz_id' =>41, 'sis_barrio_id' =>848],//725
            ['simianti_id' =>105203, 'sis_localupz_id' =>41, 'sis_barrio_id' =>849],//726
            ['simianti_id' =>90079, 'sis_localupz_id' =>41, 'sis_barrio_id' =>850],//727
            ['simianti_id' =>6505, 'sis_localupz_id' =>41, 'sis_barrio_id' =>851],//728
            ['simianti_id' =>0, 'sis_localupz_id' =>41, 'sis_barrio_id' =>852],//729
            ['simianti_id' =>80262, 'sis_localupz_id' =>41, 'sis_barrio_id' =>853],//730
            ['simianti_id' =>6515, 'sis_localupz_id' =>41, 'sis_barrio_id' =>854],//731
            ['simianti_id' =>6512, 'sis_localupz_id' =>41, 'sis_barrio_id' =>855],//732
            ['simianti_id' =>80301, 'sis_localupz_id' =>41, 'sis_barrio_id' =>856],//733
            ['simianti_id' =>80314, 'sis_localupz_id' =>41, 'sis_barrio_id' =>857],//734
            ['simianti_id' =>80316, 'sis_localupz_id' =>41, 'sis_barrio_id' =>858],//735
            ['simianti_id' =>80317, 'sis_localupz_id' =>41, 'sis_barrio_id' =>859],//736
            ['simianti_id' =>80329, 'sis_localupz_id' =>41, 'sis_barrio_id' =>860],//737
            ['simianti_id' =>80334, 'sis_localupz_id' =>42, 'sis_barrio_id' =>610],//738
            ['simianti_id' =>80045, 'sis_localupz_id' =>42, 'sis_barrio_id' =>861],//739
            ['simianti_id' =>80044, 'sis_localupz_id' =>42, 'sis_barrio_id' =>862],//740
            ['simianti_id' =>4511, 'sis_localupz_id' =>42, 'sis_barrio_id' =>863],//741
            ['simianti_id' =>4514, 'sis_localupz_id' =>42, 'sis_barrio_id' =>864],//742
            ['simianti_id' =>4508, 'sis_localupz_id' =>42, 'sis_barrio_id' =>865],//743
            ['simianti_id' =>4510, 'sis_localupz_id' =>42, 'sis_barrio_id' =>866],//744
            ['simianti_id' =>4507, 'sis_localupz_id' =>42, 'sis_barrio_id' =>867],//745
            ['simianti_id' =>80088, 'sis_localupz_id' =>42, 'sis_barrio_id' =>868],//746
            ['simianti_id' =>80150, 'sis_localupz_id' =>42, 'sis_barrio_id' =>869],//747
            ['simianti_id' =>80192, 'sis_localupz_id' =>42, 'sis_barrio_id' =>870],//748
            ['simianti_id' =>0, 'sis_localupz_id' =>42, 'sis_barrio_id' =>871],//749
            ['simianti_id' =>80208, 'sis_localupz_id' =>42, 'sis_barrio_id' =>872],//750
            ['simianti_id' =>4525, 'sis_localupz_id' =>42, 'sis_barrio_id' =>873],//751
            ['simianti_id' =>4548, 'sis_localupz_id' =>42, 'sis_barrio_id' =>874],//752
            ['simianti_id' =>80060, 'sis_localupz_id' =>42, 'sis_barrio_id' =>875],//753
            ['simianti_id' =>80001, 'sis_localupz_id' =>43, 'sis_barrio_id' =>876],//754
            ['simianti_id' =>0, 'sis_localupz_id' =>43, 'sis_barrio_id' =>877],//755
            ['simianti_id' =>80028, 'sis_localupz_id' =>43, 'sis_barrio_id' =>622],//756
            ['simianti_id' =>80029, 'sis_localupz_id' =>43, 'sis_barrio_id' =>878],//757
            ['simianti_id' =>80043, 'sis_localupz_id' =>43, 'sis_barrio_id' =>879],//758
            ['simianti_id' =>4545, 'sis_localupz_id' =>43, 'sis_barrio_id' =>880],//759
            ['simianti_id' =>4540, 'sis_localupz_id' =>43, 'sis_barrio_id' =>881],//760
            ['simianti_id' =>80085, 'sis_localupz_id' =>43, 'sis_barrio_id' =>882],//761
            ['simianti_id' =>80089, 'sis_localupz_id' =>43, 'sis_barrio_id' =>464],//762
            ['simianti_id' =>80092, 'sis_localupz_id' =>43, 'sis_barrio_id' =>883],//763
            ['simianti_id' =>80101, 'sis_localupz_id' =>43, 'sis_barrio_id' =>429],//764
            ['simianti_id' =>4536, 'sis_localupz_id' =>43, 'sis_barrio_id' =>538],//765
            ['simianti_id' =>4517, 'sis_localupz_id' =>43, 'sis_barrio_id' =>884],//766
            ['simianti_id' =>80139, 'sis_localupz_id' =>43, 'sis_barrio_id' =>885],//767
            ['simianti_id' =>4532, 'sis_localupz_id' =>43, 'sis_barrio_id' =>240],//768
            ['simianti_id' =>80158, 'sis_localupz_id' =>43, 'sis_barrio_id' =>886],//769
            ['simianti_id' =>80161, 'sis_localupz_id' =>43, 'sis_barrio_id' =>887],//770
            ['simianti_id' =>80172, 'sis_localupz_id' =>43, 'sis_barrio_id' =>888],//771
            ['simianti_id' =>80196, 'sis_localupz_id' =>43, 'sis_barrio_id' =>889],//772
            ['simianti_id' =>80205, 'sis_localupz_id' =>43, 'sis_barrio_id' =>890],//773
            ['simianti_id' =>80209, 'sis_localupz_id' =>43, 'sis_barrio_id' =>891],//774
            ['simianti_id' =>80215, 'sis_localupz_id' =>43, 'sis_barrio_id' =>873],//775
            ['simianti_id' =>80217, 'sis_localupz_id' =>43, 'sis_barrio_id' =>892],//776
            ['simianti_id' =>80221, 'sis_localupz_id' =>43, 'sis_barrio_id' =>893],//777
            ['simianti_id' =>80231, 'sis_localupz_id' =>43, 'sis_barrio_id' =>894],//778
            ['simianti_id' =>4534, 'sis_localupz_id' =>43, 'sis_barrio_id' =>895],//779
            ['simianti_id' =>80236, 'sis_localupz_id' =>43, 'sis_barrio_id' =>896],//780
            ['simianti_id' =>80250, 'sis_localupz_id' =>43, 'sis_barrio_id' =>105],//781
            ['simianti_id' =>80260, 'sis_localupz_id' =>43, 'sis_barrio_id' =>164],//782
            ['simianti_id' =>4584, 'sis_localupz_id' =>43, 'sis_barrio_id' =>897],//783
            ['simianti_id' =>4512, 'sis_localupz_id' =>43, 'sis_barrio_id' =>898],//784
            ['simianti_id' =>80278, 'sis_localupz_id' =>43, 'sis_barrio_id' =>899],//785
            ['simianti_id' =>4565, 'sis_localupz_id' =>43, 'sis_barrio_id' =>900],//786
            ['simianti_id' =>4515, 'sis_localupz_id' =>43, 'sis_barrio_id' =>901],//787
            ['simianti_id' =>80292, 'sis_localupz_id' =>43, 'sis_barrio_id' =>902],//788
            ['simianti_id' =>80310, 'sis_localupz_id' =>43, 'sis_barrio_id' =>903],//789
            ['simianti_id' =>80324, 'sis_localupz_id' =>43, 'sis_barrio_id' =>904],//790
            ['simianti_id' =>4529, 'sis_localupz_id' =>44, 'sis_barrio_id' =>614],//791
            ['simianti_id' =>70072, 'sis_localupz_id' =>44, 'sis_barrio_id' =>615],//792
            ['simianti_id' =>0, 'sis_localupz_id' =>44, 'sis_barrio_id' =>616],//793
            ['simianti_id' =>70158, 'sis_localupz_id' =>44, 'sis_barrio_id' =>617],//794
            ['simianti_id' =>70219, 'sis_localupz_id' =>44, 'sis_barrio_id' =>618],//795
            ['simianti_id' =>4538, 'sis_localupz_id' =>44, 'sis_barrio_id' =>619],//796
            ['simianti_id' =>4546, 'sis_localupz_id' =>44, 'sis_barrio_id' =>620],//797
            ['simianti_id' =>1315, 'sis_localupz_id' =>45, 'sis_barrio_id' =>324],//798
            ['simianti_id' =>40002, 'sis_localupz_id' =>45, 'sis_barrio_id' =>325],//799
            ['simianti_id' =>1333, 'sis_localupz_id' =>45, 'sis_barrio_id' =>326],//800
            ['simianti_id' =>40208, 'sis_localupz_id' =>45, 'sis_barrio_id' =>327],//801
            ['simianti_id' =>1331, 'sis_localupz_id' =>45, 'sis_barrio_id' =>328],//802
            ['simianti_id' =>40140, 'sis_localupz_id' =>45, 'sis_barrio_id' =>329],//803
            ['simianti_id' =>0, 'sis_localupz_id' =>45, 'sis_barrio_id' =>330],//804
            ['simianti_id' =>40015, 'sis_localupz_id' =>45, 'sis_barrio_id' =>331],//805
            ['simianti_id' =>40022, 'sis_localupz_id' =>45, 'sis_barrio_id' =>283],//806
            ['simianti_id' =>0, 'sis_localupz_id' =>45, 'sis_barrio_id' =>332],//807
            ['simianti_id' =>1318, 'sis_localupz_id' =>45, 'sis_barrio_id' =>333],//808
            ['simianti_id' =>40057, 'sis_localupz_id' =>45, 'sis_barrio_id' =>334],//809
            ['simianti_id' =>40218, 'sis_localupz_id' =>45, 'sis_barrio_id' =>335],//810
            ['simianti_id' =>40073, 'sis_localupz_id' =>45, 'sis_barrio_id' =>336],//811
            ['simianti_id' =>40074, 'sis_localupz_id' =>45, 'sis_barrio_id' =>337],//812
            ['simianti_id' =>40075, 'sis_localupz_id' =>45, 'sis_barrio_id' =>338],//813
            ['simianti_id' =>40074, 'sis_localupz_id' =>45, 'sis_barrio_id' =>339],//814
            ['simianti_id' =>1311, 'sis_localupz_id' =>45, 'sis_barrio_id' =>340],//815
            ['simianti_id' =>1319, 'sis_localupz_id' =>45, 'sis_barrio_id' =>341],//816
            ['simianti_id' =>40075, 'sis_localupz_id' =>45, 'sis_barrio_id' =>342],//817
            ['simianti_id' =>40077, 'sis_localupz_id' =>45, 'sis_barrio_id' =>343],//818
            ['simianti_id' =>1310, 'sis_localupz_id' =>45, 'sis_barrio_id' =>344],//819
            ['simianti_id' =>40088, 'sis_localupz_id' =>45, 'sis_barrio_id' =>345],//820
            ['simianti_id' =>40089, 'sis_localupz_id' =>45, 'sis_barrio_id' =>346],//821
            ['simianti_id' =>0, 'sis_localupz_id' =>45, 'sis_barrio_id' =>347],//822
            ['simianti_id' =>1334, 'sis_localupz_id' =>45, 'sis_barrio_id' =>348],//823
            ['simianti_id' =>40091, 'sis_localupz_id' =>45, 'sis_barrio_id' =>349],//824
            ['simianti_id' =>1355, 'sis_localupz_id' =>45, 'sis_barrio_id' =>350],//825
            ['simianti_id' =>0, 'sis_localupz_id' =>45, 'sis_barrio_id' =>351],//826
            ['simianti_id' =>40115, 'sis_localupz_id' =>45, 'sis_barrio_id' =>352],//827
            ['simianti_id' =>40120, 'sis_localupz_id' =>45, 'sis_barrio_id' =>257],//828
            ['simianti_id' =>1316, 'sis_localupz_id' =>45, 'sis_barrio_id' =>353],//829
            ['simianti_id' =>50163, 'sis_localupz_id' =>45, 'sis_barrio_id' =>354],//830
            ['simianti_id' =>40216, 'sis_localupz_id' =>45, 'sis_barrio_id' =>355],//831
            ['simianti_id' =>1317, 'sis_localupz_id' =>45, 'sis_barrio_id' =>356],//832
            ['simianti_id' =>40132, 'sis_localupz_id' =>45, 'sis_barrio_id' =>357],//833
            ['simianti_id' =>40133, 'sis_localupz_id' =>45, 'sis_barrio_id' =>358],//834
            ['simianti_id' =>0, 'sis_localupz_id' =>45, 'sis_barrio_id' =>359],//835
            ['simianti_id' =>40182, 'sis_localupz_id' =>45, 'sis_barrio_id' =>360],//836
            ['simianti_id' =>40183, 'sis_localupz_id' =>45, 'sis_barrio_id' =>361],//837
            ['simianti_id' =>40185, 'sis_localupz_id' =>45, 'sis_barrio_id' =>362],//838
            ['simianti_id' =>1321, 'sis_localupz_id' =>45, 'sis_barrio_id' =>363],//839
            ['simianti_id' =>40186, 'sis_localupz_id' =>45, 'sis_barrio_id' =>364],//840
            ['simianti_id' =>40051, 'sis_localupz_id' =>46, 'sis_barrio_id' =>365],//841
            ['simianti_id' =>1330, 'sis_localupz_id' =>46, 'sis_barrio_id' =>366],//842
            ['simianti_id' =>40033, 'sis_localupz_id' =>46, 'sis_barrio_id' =>367],//843
            ['simianti_id' =>40034, 'sis_localupz_id' =>46, 'sis_barrio_id' =>368],//844
            ['simianti_id' =>40146, 'sis_localupz_id' =>46, 'sis_barrio_id' =>369],//845
            ['simianti_id' =>40147, 'sis_localupz_id' =>46, 'sis_barrio_id' =>231],//846
            ['simianti_id' =>1329, 'sis_localupz_id' =>46, 'sis_barrio_id' =>151],//847
            ['simianti_id' =>40053, 'sis_localupz_id' =>46, 'sis_barrio_id' =>370],//848
            ['simianti_id' =>40128, 'sis_localupz_id' =>46, 'sis_barrio_id' =>209],//849
            ['simianti_id' =>1325, 'sis_localupz_id' =>46, 'sis_barrio_id' =>371],//850
            ['simianti_id' =>1338, 'sis_localupz_id' =>46, 'sis_barrio_id' =>372],//851
            ['simianti_id' =>40079, 'sis_localupz_id' =>46, 'sis_barrio_id' =>373],//852
            ['simianti_id' =>40080, 'sis_localupz_id' =>46, 'sis_barrio_id' =>374],//853
            ['simianti_id' =>40081, 'sis_localupz_id' =>46, 'sis_barrio_id' =>375],//854
            ['simianti_id' =>40086, 'sis_localupz_id' =>46, 'sis_barrio_id' =>376],//855
            ['simianti_id' =>1327, 'sis_localupz_id' =>46, 'sis_barrio_id' =>377],//856
            ['simianti_id' =>40105, 'sis_localupz_id' =>46, 'sis_barrio_id' =>378],//857
            ['simianti_id' =>40106, 'sis_localupz_id' =>46, 'sis_barrio_id' =>379],//858
            ['simianti_id' =>40107, 'sis_localupz_id' =>46, 'sis_barrio_id' =>380],//859
            ['simianti_id' =>40108, 'sis_localupz_id' =>46, 'sis_barrio_id' =>381],//860
            ['simianti_id' =>40109, 'sis_localupz_id' =>46, 'sis_barrio_id' =>382],//861
            ['simianti_id' =>40110, 'sis_localupz_id' =>46, 'sis_barrio_id' =>383],//862
            ['simianti_id' =>40111, 'sis_localupz_id' =>46, 'sis_barrio_id' =>384],//863
            ['simianti_id' =>40104, 'sis_localupz_id' =>46, 'sis_barrio_id' =>385],//864
            ['simianti_id' =>110348, 'sis_localupz_id' =>46, 'sis_barrio_id' =>386],//865
            ['simianti_id' =>40112, 'sis_localupz_id' =>46, 'sis_barrio_id' =>387],//866
            ['simianti_id' =>40113, 'sis_localupz_id' =>46, 'sis_barrio_id' =>388],//867
            ['simianti_id' =>1323, 'sis_localupz_id' =>46, 'sis_barrio_id' =>389],//868
            ['simianti_id' =>1320, 'sis_localupz_id' =>46, 'sis_barrio_id' =>390],//869
            ['simianti_id' =>40230, 'sis_localupz_id' =>46, 'sis_barrio_id' =>391],//870
            ['simianti_id' =>40128, 'sis_localupz_id' =>46, 'sis_barrio_id' =>392],//871
            ['simianti_id' =>40136, 'sis_localupz_id' =>46, 'sis_barrio_id' =>393],//872
            ['simianti_id' =>40136, 'sis_localupz_id' =>46, 'sis_barrio_id' =>394],//873
            ['simianti_id' =>40180, 'sis_localupz_id' =>46, 'sis_barrio_id' =>395],//874
            ['simianti_id' =>40184, 'sis_localupz_id' =>46, 'sis_barrio_id' =>396],//875
            ['simianti_id' =>40188, 'sis_localupz_id' =>46, 'sis_barrio_id' =>397],//876
            ['simianti_id' =>1322, 'sis_localupz_id' =>46, 'sis_barrio_id' =>398],//877
            ['simianti_id' =>1328, 'sis_localupz_id' =>46, 'sis_barrio_id' =>399],//878
            ['simianti_id' =>0, 'sis_localupz_id' =>46, 'sis_barrio_id' =>351],//879
            ['simianti_id' =>1328, 'sis_localupz_id' =>46, 'sis_barrio_id' =>400],//880
            ['simianti_id' =>40246, 'sis_localupz_id' =>46, 'sis_barrio_id' =>401],//881
            ['simianti_id' =>40249, 'sis_localupz_id' =>46, 'sis_barrio_id' =>402],//882
            ['simianti_id' =>40251, 'sis_localupz_id' =>46, 'sis_barrio_id' =>403],//883
            ['simianti_id' =>1356, 'sis_localupz_id' =>46, 'sis_barrio_id' =>166],//884
            ['simianti_id' =>1332, 'sis_localupz_id' =>46, 'sis_barrio_id' =>404],//885
            ['simianti_id' =>1350, 'sis_localupz_id' =>46, 'sis_barrio_id' =>405],//886
            ['simianti_id' =>40249, 'sis_localupz_id' =>46, 'sis_barrio_id' =>406],//887
            ['simianti_id' =>40050, 'sis_localupz_id' =>46, 'sis_barrio_id' =>407],//888
            ['simianti_id' =>40260, 'sis_localupz_id' =>46, 'sis_barrio_id' =>408],//889
            ['simianti_id' =>40252, 'sis_localupz_id' =>46, 'sis_barrio_id' =>409],//890
            ['simianti_id' =>50027, 'sis_localupz_id' =>47, 'sis_barrio_id' =>283],//891
            ['simianti_id' =>50045, 'sis_localupz_id' =>47, 'sis_barrio_id' =>410],//892
            ['simianti_id' =>50048, 'sis_localupz_id' =>47, 'sis_barrio_id' =>411],//893
            ['simianti_id' =>50051, 'sis_localupz_id' =>47, 'sis_barrio_id' =>412],//894
            ['simianti_id' =>50099, 'sis_localupz_id' =>47, 'sis_barrio_id' =>413],//895
            ['simianti_id' =>50100, 'sis_localupz_id' =>47, 'sis_barrio_id' =>414],//896
            ['simianti_id' =>50106, 'sis_localupz_id' =>47, 'sis_barrio_id' =>415],//897
            ['simianti_id' =>50109, 'sis_localupz_id' =>47, 'sis_barrio_id' =>102],//898
            ['simianti_id' =>50118, 'sis_localupz_id' =>47, 'sis_barrio_id' =>416],//899
            ['simianti_id' =>50138, 'sis_localupz_id' =>47, 'sis_barrio_id' =>417],//900
            ['simianti_id' =>50143, 'sis_localupz_id' =>47, 'sis_barrio_id' =>418],//901
            ['simianti_id' =>1344, 'sis_localupz_id' =>47, 'sis_barrio_id' =>419],//902
            ['simianti_id' =>50267, 'sis_localupz_id' =>47, 'sis_barrio_id' =>420],//903
            ['simianti_id' =>50100, 'sis_localupz_id' =>47, 'sis_barrio_id' =>421],//904
            ['simianti_id' =>1335, 'sis_localupz_id' =>47, 'sis_barrio_id' =>422],//905
            ['simianti_id' =>50288, 'sis_localupz_id' =>47, 'sis_barrio_id' =>423],//906
            ['simianti_id' =>180076, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1525],//907
            ['simianti_id' =>180116, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1526],//908
            ['simianti_id' =>180051, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1527],//909
            ['simianti_id' =>1425, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1528],//910
            ['simianti_id' =>1413, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1529],//911
            ['simianti_id' =>1409, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1530],//912
            ['simianti_id' =>180085, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1531],//913
            ['simianti_id' =>180088, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1532],//914
            ['simianti_id' =>180116, 'sis_localupz_id' =>48, 'sis_barrio_id' =>1533],//915
            ['simianti_id' =>180155, 'sis_localupz_id' =>48, 'sis_barrio_id' =>676],//916
            ['simianti_id' =>1423, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1534],//917
            ['simianti_id' =>1419, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1535],//918
            ['simianti_id' =>1428, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1536],//919
            ['simianti_id' =>90019, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1537],//920
            ['simianti_id' =>0, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1538],//921
            ['simianti_id' =>180028, 'sis_localupz_id' =>49, 'sis_barrio_id' =>204],//922
            ['simianti_id' =>180039, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1539],//923
            ['simianti_id' =>180040, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1540],//924
            ['simianti_id' =>0, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1541],//925
            ['simianti_id' =>1429, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1542],//926
            ['simianti_id' =>180062, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1543],//927
            ['simianti_id' =>2511, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1544],//928
            ['simianti_id' =>180067, 'sis_localupz_id' =>49, 'sis_barrio_id' =>244],//929
            ['simianti_id' =>1418, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1545],//930
            ['simianti_id' =>180031, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1546],//931
            ['simianti_id' =>1417, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1547],//932
            ['simianti_id' =>180098, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1548],//933
            ['simianti_id' =>180108, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1549],//934
            ['simianti_id' =>1427, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1550],//935
            ['simianti_id' =>0, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1551],//936
            ['simianti_id' =>180109, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1106],//937
            ['simianti_id' =>180179, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1152],//938
            ['simianti_id' =>180182, 'sis_localupz_id' =>49, 'sis_barrio_id' =>1552],//939
            ['simianti_id' =>180151, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1553],//940
            ['simianti_id' =>1421, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1554],//941
            ['simianti_id' =>30000, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1011],//942
            ['simianti_id' =>180059, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1555],//943
            ['simianti_id' =>2566, 'sis_localupz_id' =>50, 'sis_barrio_id' =>660],//944
            ['simianti_id' =>2510, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1556],//945
            ['simianti_id' =>2535, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1557],//946
            ['simianti_id' =>2551, 'sis_localupz_id' =>51, 'sis_barrio_id' =>424],//947
            ['simianti_id' =>2624, 'sis_localupz_id' =>51, 'sis_barrio_id' =>425],//948
            ['simianti_id' =>50046, 'sis_localupz_id' =>51, 'sis_barrio_id' =>426],//949
            ['simianti_id' =>50047, 'sis_localupz_id' =>51, 'sis_barrio_id' =>427],//950
            ['simianti_id' =>2550, 'sis_localupz_id' =>51, 'sis_barrio_id' =>428],//951
            ['simianti_id' =>50069, 'sis_localupz_id' =>51, 'sis_barrio_id' =>429],//952
            ['simianti_id' =>50070, 'sis_localupz_id' =>51, 'sis_barrio_id' =>430],//953
            ['simianti_id' =>50091, 'sis_localupz_id' =>51, 'sis_barrio_id' =>431],//954
            ['simianti_id' =>50092, 'sis_localupz_id' =>51, 'sis_barrio_id' =>432],//955
            ['simianti_id' =>50113, 'sis_localupz_id' =>51, 'sis_barrio_id' =>433],//956
            ['simianti_id' =>2590, 'sis_localupz_id' =>51, 'sis_barrio_id' =>434],//957
            ['simianti_id' =>2597, 'sis_localupz_id' =>51, 'sis_barrio_id' =>435],//958
            ['simianti_id' =>50115, 'sis_localupz_id' =>51, 'sis_barrio_id' =>436],//959
            ['simianti_id' =>50116, 'sis_localupz_id' =>51, 'sis_barrio_id' =>437],//960
            ['simianti_id' =>50117, 'sis_localupz_id' =>51, 'sis_barrio_id' =>438],//961
            ['simianti_id' =>50123, 'sis_localupz_id' =>51, 'sis_barrio_id' =>439],//962
            ['simianti_id' =>50124, 'sis_localupz_id' =>51, 'sis_barrio_id' =>440],//963
            ['simianti_id' =>50152, 'sis_localupz_id' =>51, 'sis_barrio_id' =>441],//964
            ['simianti_id' =>50155, 'sis_localupz_id' =>51, 'sis_barrio_id' =>442],//965
            ['simianti_id' =>0, 'sis_localupz_id' =>51, 'sis_barrio_id' =>187],//966
            ['simianti_id' =>0, 'sis_localupz_id' =>51, 'sis_barrio_id' =>443],//967
            ['simianti_id' =>50204, 'sis_localupz_id' =>51, 'sis_barrio_id' =>444],//968
            ['simianti_id' =>2589, 'sis_localupz_id' =>51, 'sis_barrio_id' =>445],//969
            ['simianti_id' =>50007, 'sis_localupz_id' =>52, 'sis_barrio_id' =>446],//970
            ['simianti_id' =>50009, 'sis_localupz_id' =>52, 'sis_barrio_id' =>447],//971
            ['simianti_id' =>50012, 'sis_localupz_id' =>52, 'sis_barrio_id' =>448],//972
            ['simianti_id' =>2525, 'sis_localupz_id' =>52, 'sis_barrio_id' =>449],//973
            ['simianti_id' =>50016, 'sis_localupz_id' =>52, 'sis_barrio_id' =>450],//974
            ['simianti_id' =>50017, 'sis_localupz_id' =>52, 'sis_barrio_id' =>451],//975
            ['simianti_id' =>50018, 'sis_localupz_id' =>52, 'sis_barrio_id' =>452],//976
            ['simianti_id' =>2605, 'sis_localupz_id' =>52, 'sis_barrio_id' =>453],//977
            ['simianti_id' =>50028, 'sis_localupz_id' =>52, 'sis_barrio_id' =>454],//978
            ['simianti_id' =>190033, 'sis_localupz_id' =>52, 'sis_barrio_id' =>455],//979
            ['simianti_id' =>50029, 'sis_localupz_id' =>52, 'sis_barrio_id' =>456],//980
            ['simianti_id' =>50030, 'sis_localupz_id' =>52, 'sis_barrio_id' =>457],//981
            ['simianti_id' =>50040, 'sis_localupz_id' =>52, 'sis_barrio_id' =>458],//982
            ['simianti_id' =>50041, 'sis_localupz_id' =>52, 'sis_barrio_id' =>459],//983
            ['simianti_id' =>50042, 'sis_localupz_id' =>52, 'sis_barrio_id' =>460],//984
            ['simianti_id' =>2609, 'sis_localupz_id' =>52, 'sis_barrio_id' =>461],//985
            ['simianti_id' =>50053, 'sis_localupz_id' =>52, 'sis_barrio_id' =>462],//986
            ['simianti_id' =>2606, 'sis_localupz_id' =>52, 'sis_barrio_id' =>463],//987
            ['simianti_id' =>50057, 'sis_localupz_id' =>52, 'sis_barrio_id' =>464],//988
            ['simianti_id' =>2631, 'sis_localupz_id' =>52, 'sis_barrio_id' =>465],//989
            ['simianti_id' =>2563, 'sis_localupz_id' =>52, 'sis_barrio_id' =>97],//990
            ['simianti_id' =>50072, 'sis_localupz_id' =>52, 'sis_barrio_id' =>466],//991
            ['simianti_id' =>50073, 'sis_localupz_id' =>52, 'sis_barrio_id' =>138],//992
            ['simianti_id' =>50075, 'sis_localupz_id' =>52, 'sis_barrio_id' =>467],//993
            ['simianti_id' =>50076, 'sis_localupz_id' =>52, 'sis_barrio_id' =>468],//994
            ['simianti_id' =>50078, 'sis_localupz_id' =>52, 'sis_barrio_id' =>469],//995
            ['simianti_id' =>50095, 'sis_localupz_id' =>52, 'sis_barrio_id' =>470],//996
            ['simianti_id' =>2506, 'sis_localupz_id' =>52, 'sis_barrio_id' =>471],//997
            ['simianti_id' =>2524, 'sis_localupz_id' =>52, 'sis_barrio_id' =>472],//998
            ['simianti_id' =>2503, 'sis_localupz_id' =>52, 'sis_barrio_id' =>473],//999
            ['simianti_id' =>50105, 'sis_localupz_id' =>52, 'sis_barrio_id' =>415],//1000
            ['simianti_id' =>2607, 'sis_localupz_id' =>52, 'sis_barrio_id' =>102],//1001
            ['simianti_id' =>50119, 'sis_localupz_id' =>52, 'sis_barrio_id' =>474],//1002
            ['simianti_id' =>50129, 'sis_localupz_id' =>52, 'sis_barrio_id' =>475],//1003
            ['simianti_id' =>50130, 'sis_localupz_id' =>52, 'sis_barrio_id' =>476],//1004
            ['simianti_id' =>50098, 'sis_localupz_id' =>52, 'sis_barrio_id' =>477],//1005
            ['simianti_id' =>50139, 'sis_localupz_id' =>52, 'sis_barrio_id' =>478],//1006
            ['simianti_id' =>50144, 'sis_localupz_id' =>52, 'sis_barrio_id' =>479],//1007
            ['simianti_id' =>50159, 'sis_localupz_id' =>52, 'sis_barrio_id' =>480],//1008
            ['simianti_id' =>50161, 'sis_localupz_id' =>52, 'sis_barrio_id' =>481],//1009
            ['simianti_id' =>50233, 'sis_localupz_id' =>52, 'sis_barrio_id' =>482],//1010
            ['simianti_id' =>50234, 'sis_localupz_id' =>52, 'sis_barrio_id' =>483],//1011
            ['simianti_id' =>50236, 'sis_localupz_id' =>52, 'sis_barrio_id' =>484],//1012
            ['simianti_id' =>50237, 'sis_localupz_id' =>52, 'sis_barrio_id' =>318],//1013
            ['simianti_id' =>2555, 'sis_localupz_id' =>52, 'sis_barrio_id' =>485],//1014
            ['simianti_id' =>50239, 'sis_localupz_id' =>52, 'sis_barrio_id' =>486],//1015
            ['simianti_id' =>50240, 'sis_localupz_id' =>52, 'sis_barrio_id' =>487],//1016
            ['simianti_id' =>50292, 'sis_localupz_id' =>52, 'sis_barrio_id' =>488],//1017
            ['simianti_id' =>0, 'sis_localupz_id' =>52, 'sis_barrio_id' =>319],//1018
            ['simianti_id' =>50245, 'sis_localupz_id' =>52, 'sis_barrio_id' =>489],//1019
            ['simianti_id' =>2526, 'sis_localupz_id' =>52, 'sis_barrio_id' =>490],//1020
            ['simianti_id' =>50249, 'sis_localupz_id' =>52, 'sis_barrio_id' =>491],//1021
            ['simianti_id' =>50250, 'sis_localupz_id' =>52, 'sis_barrio_id' =>492],//1022
            ['simianti_id' =>50251, 'sis_localupz_id' =>52, 'sis_barrio_id' =>493],//1023
            ['simianti_id' =>2528, 'sis_localupz_id' =>52, 'sis_barrio_id' =>494],//1024
            ['simianti_id' =>50254, 'sis_localupz_id' =>52, 'sis_barrio_id' =>495],//1025
            ['simianti_id' =>50255, 'sis_localupz_id' =>52, 'sis_barrio_id' =>496],//1026
            ['simianti_id' =>50252, 'sis_localupz_id' =>52, 'sis_barrio_id' =>497],//1027
            ['simianti_id' =>50253, 'sis_localupz_id' =>52, 'sis_barrio_id' =>498],//1028
            ['simianti_id' =>50257, 'sis_localupz_id' =>52, 'sis_barrio_id' =>499],//1029
            ['simianti_id' =>50259, 'sis_localupz_id' =>52, 'sis_barrio_id' =>500],//1030
            ['simianti_id' =>50262, 'sis_localupz_id' =>52, 'sis_barrio_id' =>501],//1031
            ['simianti_id' =>50265, 'sis_localupz_id' =>52, 'sis_barrio_id' =>502],//1032
            ['simianti_id' =>50045, 'sis_localupz_id' =>52, 'sis_barrio_id' =>503],//1033
            ['simianti_id' =>0, 'sis_localupz_id' =>52, 'sis_barrio_id' =>504],//1034
            ['simianti_id' =>50021, 'sis_localupz_id' =>52, 'sis_barrio_id' =>505],//1035
            ['simianti_id' =>0, 'sis_localupz_id' =>52, 'sis_barrio_id' =>506],//1036
            ['simianti_id' =>2524, 'sis_localupz_id' =>52, 'sis_barrio_id' =>507],//1037
            ['simianti_id' =>50104, 'sis_localupz_id' =>52, 'sis_barrio_id' =>508],//1038
            ['simianti_id' =>50149, 'sis_localupz_id' =>52, 'sis_barrio_id' =>509],//1039
            ['simianti_id' =>50266, 'sis_localupz_id' =>52, 'sis_barrio_id' =>510],//1040
            ['simianti_id' =>0, 'sis_localupz_id' =>52, 'sis_barrio_id' =>511],//1041
            ['simianti_id' =>50274, 'sis_localupz_id' =>52, 'sis_barrio_id' =>512],//1042
            ['simianti_id' =>50276, 'sis_localupz_id' =>52, 'sis_barrio_id' =>513],//1043
            ['simianti_id' =>50287, 'sis_localupz_id' =>52, 'sis_barrio_id' =>514],//1044
            ['simianti_id' =>50289, 'sis_localupz_id' =>52, 'sis_barrio_id' =>515],//1045
            ['simianti_id' =>50290, 'sis_localupz_id' =>52, 'sis_barrio_id' =>516],//1046
            ['simianti_id' =>50291, 'sis_localupz_id' =>52, 'sis_barrio_id' =>517],//1047
            ['simianti_id' =>50004, 'sis_localupz_id' =>53, 'sis_barrio_id' =>518],//1048
            ['simianti_id' =>50010, 'sis_localupz_id' =>53, 'sis_barrio_id' =>519],//1049
            ['simianti_id' =>0, 'sis_localupz_id' =>53, 'sis_barrio_id' =>351],//1050
            ['simianti_id' =>50014, 'sis_localupz_id' =>53, 'sis_barrio_id' =>520],//1051
            ['simianti_id' =>50015, 'sis_localupz_id' =>53, 'sis_barrio_id' =>521],//1052
            ['simianti_id' =>50019, 'sis_localupz_id' =>53, 'sis_barrio_id' =>522],//1053
            ['simianti_id' =>50020, 'sis_localupz_id' =>53, 'sis_barrio_id' =>523],//1054
            ['simianti_id' =>50022, 'sis_localupz_id' =>53, 'sis_barrio_id' =>524],//1055
            ['simianti_id' =>2591, 'sis_localupz_id' =>53, 'sis_barrio_id' =>525],//1056
            ['simianti_id' =>50023, 'sis_localupz_id' =>53, 'sis_barrio_id' =>526],//1057
            ['simianti_id' =>50024, 'sis_localupz_id' =>53, 'sis_barrio_id' =>527],//1058
            ['simianti_id' =>0, 'sis_localupz_id' =>53, 'sis_barrio_id' =>528],//1059
            ['simianti_id' =>2610, 'sis_localupz_id' =>53, 'sis_barrio_id' =>529],//1060
            ['simianti_id' =>4595, 'sis_localupz_id' =>53, 'sis_barrio_id' =>530],//1061
            ['simianti_id' =>50034, 'sis_localupz_id' =>53, 'sis_barrio_id' =>531],//1062
            ['simianti_id' =>50037, 'sis_localupz_id' =>53, 'sis_barrio_id' =>532],//1063
            ['simianti_id' =>0, 'sis_localupz_id' =>53, 'sis_barrio_id' =>533],//1064
            ['simianti_id' =>2543, 'sis_localupz_id' =>53, 'sis_barrio_id' =>534],//1065
            ['simianti_id' =>50052, 'sis_localupz_id' =>53, 'sis_barrio_id' =>535],//1066
            ['simianti_id' =>50055, 'sis_localupz_id' =>53, 'sis_barrio_id' =>536],//1067
            ['simianti_id' =>50060, 'sis_localupz_id' =>53, 'sis_barrio_id' =>537],//1068
            ['simianti_id' =>50077, 'sis_localupz_id' =>53, 'sis_barrio_id' =>538],//1069
            ['simianti_id' =>2634, 'sis_localupz_id' =>53, 'sis_barrio_id' =>539],//1070
            ['simianti_id' =>50084, 'sis_localupz_id' =>53, 'sis_barrio_id' =>540],//1071
            ['simianti_id' =>50088, 'sis_localupz_id' =>53, 'sis_barrio_id' =>541],//1072
            ['simianti_id' =>50090, 'sis_localupz_id' =>53, 'sis_barrio_id' =>542],//1073
            ['simianti_id' =>50108, 'sis_localupz_id' =>53, 'sis_barrio_id' =>543],//1074
            ['simianti_id' =>50110, 'sis_localupz_id' =>53, 'sis_barrio_id' =>544],//1075
            ['simianti_id' =>50134, 'sis_localupz_id' =>53, 'sis_barrio_id' =>286],//1076
            ['simianti_id' =>50136, 'sis_localupz_id' =>53, 'sis_barrio_id' =>545],//1077
            ['simianti_id' =>50137, 'sis_localupz_id' =>53, 'sis_barrio_id' =>248],//1078
            ['simianti_id' =>50140, 'sis_localupz_id' =>53, 'sis_barrio_id' =>546],//1079
            ['simianti_id' =>50141, 'sis_localupz_id' =>53, 'sis_barrio_id' =>547],//1080
            ['simianti_id' =>50142, 'sis_localupz_id' =>53, 'sis_barrio_id' =>548],//1081
            ['simianti_id' =>50148, 'sis_localupz_id' =>53, 'sis_barrio_id' =>549],//1082
            ['simianti_id' =>2536, 'sis_localupz_id' =>53, 'sis_barrio_id' =>550],//1083
            ['simianti_id' =>50151, 'sis_localupz_id' =>53, 'sis_barrio_id' =>551],//1084
            ['simianti_id' =>50160, 'sis_localupz_id' =>53, 'sis_barrio_id' =>552],//1085
            ['simianti_id' =>50085, 'sis_localupz_id' =>53, 'sis_barrio_id' =>553],//1086
            ['simianti_id' =>50097, 'sis_localupz_id' =>53, 'sis_barrio_id' =>554],//1087
            ['simianti_id' =>50264, 'sis_localupz_id' =>53, 'sis_barrio_id' =>555],//1088
            ['simianti_id' =>50036, 'sis_localupz_id' =>53, 'sis_barrio_id' =>556],//1089
            ['simianti_id' =>0, 'sis_localupz_id' =>53, 'sis_barrio_id' =>557],//1090
            ['simianti_id' =>50058, 'sis_localupz_id' =>53, 'sis_barrio_id' =>558],//1091
            ['simianti_id' =>2529, 'sis_localupz_id' =>53, 'sis_barrio_id' =>559],//1092
            ['simianti_id' =>2538, 'sis_localupz_id' =>53, 'sis_barrio_id' =>560],//1093
            ['simianti_id' =>50277, 'sis_localupz_id' =>53, 'sis_barrio_id' =>561],//1094
            ['simianti_id' =>50278, 'sis_localupz_id' =>53, 'sis_barrio_id' =>562],//1095
            ['simianti_id' =>2619, 'sis_localupz_id' =>53, 'sis_barrio_id' =>563],//1096
            ['simianti_id' =>2594, 'sis_localupz_id' =>53, 'sis_barrio_id' =>564],//1097
            ['simianti_id' =>50286, 'sis_localupz_id' =>53, 'sis_barrio_id' =>565],//1098
            ['simianti_id' =>50003, 'sis_localupz_id' =>54, 'sis_barrio_id' =>566],//1099
            ['simianti_id' =>50005, 'sis_localupz_id' =>54, 'sis_barrio_id' =>567],//1100
            ['simianti_id' =>2635, 'sis_localupz_id' =>54, 'sis_barrio_id' =>568],//1101
            ['simianti_id' =>2616, 'sis_localupz_id' =>54, 'sis_barrio_id' =>569],//1102
            ['simianti_id' =>50063, 'sis_localupz_id' =>54, 'sis_barrio_id' =>151],//1103
            ['simianti_id' =>50068, 'sis_localupz_id' =>54, 'sis_barrio_id' =>570],//1104
            ['simianti_id' =>2613, 'sis_localupz_id' =>54, 'sis_barrio_id' =>571],//1105
            ['simianti_id' =>50074, 'sis_localupz_id' =>54, 'sis_barrio_id' =>572],//1106
            ['simianti_id' =>50081, 'sis_localupz_id' =>54, 'sis_barrio_id' =>573],//1107
            ['simianti_id' =>50086, 'sis_localupz_id' =>54, 'sis_barrio_id' =>574],//1108
            ['simianti_id' =>2636, 'sis_localupz_id' =>54, 'sis_barrio_id' =>575],//1109
            ['simianti_id' =>2614, 'sis_localupz_id' =>54, 'sis_barrio_id' =>576],//1110
            ['simianti_id' =>2627, 'sis_localupz_id' =>54, 'sis_barrio_id' =>577],//1111
            ['simianti_id' =>50157, 'sis_localupz_id' =>54, 'sis_barrio_id' =>578],//1112
            ['simianti_id' =>50158, 'sis_localupz_id' =>54, 'sis_barrio_id' =>579],//1113
            ['simianti_id' =>50166, 'sis_localupz_id' =>54, 'sis_barrio_id' =>580],//1114
            ['simianti_id' =>50167, 'sis_localupz_id' =>54, 'sis_barrio_id' =>581],//1115
            ['simianti_id' =>2630, 'sis_localupz_id' =>54, 'sis_barrio_id' =>582],//1116
            ['simianti_id' =>50169, 'sis_localupz_id' =>54, 'sis_barrio_id' =>583],//1117
            ['simianti_id' =>50170, 'sis_localupz_id' =>54, 'sis_barrio_id' =>584],//1118
            ['simianti_id' =>2617, 'sis_localupz_id' =>54, 'sis_barrio_id' =>585],//1119
            ['simianti_id' =>50284, 'sis_localupz_id' =>54, 'sis_barrio_id' =>586],//1120
            ['simianti_id' =>2625, 'sis_localupz_id' =>55, 'sis_barrio_id' =>425],//1121
            ['simianti_id' =>2626, 'sis_localupz_id' =>55, 'sis_barrio_id' =>453],//1122
            ['simianti_id' =>102406, 'sis_localupz_id' =>55, 'sis_barrio_id' =>587],//1123
            ['simianti_id' =>2620, 'sis_localupz_id' =>55, 'sis_barrio_id' =>588],//1124
            ['simianti_id' =>2617, 'sis_localupz_id' =>55, 'sis_barrio_id' =>589],//1125
            ['simianti_id' =>6315, 'sis_localupz_id' =>55, 'sis_barrio_id' =>590],//1126
            ['simianti_id' =>2604, 'sis_localupz_id' =>55, 'sis_barrio_id' =>591],//1127
            ['simianti_id' =>102405, 'sis_localupz_id' =>55, 'sis_barrio_id' =>592],//1128
            ['simianti_id' =>50268, 'sis_localupz_id' =>55, 'sis_barrio_id' =>593],//1129
            ['simianti_id' =>102412, 'sis_localupz_id' =>55, 'sis_barrio_id' =>594],//1130
            ['simianti_id' =>50039, 'sis_localupz_id' =>56, 'sis_barrio_id' =>595],//1131
            ['simianti_id' =>50025, 'sis_localupz_id' =>56, 'sis_barrio_id' =>568],//1132
            ['simianti_id' =>2599, 'sis_localupz_id' =>56, 'sis_barrio_id' =>596],//1133
            ['simianti_id' =>50051, 'sis_localupz_id' =>56, 'sis_barrio_id' =>412],//1134
            ['simianti_id' =>50065, 'sis_localupz_id' =>56, 'sis_barrio_id' =>597],//1135
            ['simianti_id' =>50079, 'sis_localupz_id' =>56, 'sis_barrio_id' =>598],//1136
            ['simianti_id' =>50122, 'sis_localupz_id' =>56, 'sis_barrio_id' =>285],//1137
            ['simianti_id' =>2507, 'sis_localupz_id' =>57, 'sis_barrio_id' =>610],//1138
            ['simianti_id' =>2509, 'sis_localupz_id' =>57, 'sis_barrio_id' =>611],//1139
            ['simianti_id' =>2501, 'sis_localupz_id' =>57, 'sis_barrio_id' =>612],//1140
            ['simianti_id' =>2593, 'sis_localupz_id' =>57, 'sis_barrio_id' =>613],//1141
            ['simianti_id' =>50121, 'sis_localupz_id' =>58, 'sis_barrio_id' =>1558],//1142
            ['simianti_id' =>2563, 'sis_localupz_id' =>58, 'sis_barrio_id' =>97],//1143
            ['simianti_id' =>190264, 'sis_localupz_id' =>58, 'sis_barrio_id' =>1559],//1144
            ['simianti_id' =>2520, 'sis_localupz_id' =>58, 'sis_barrio_id' =>1560],//1145
            ['simianti_id' =>2522, 'sis_localupz_id' =>58, 'sis_barrio_id' =>1561],//1146
            ['simianti_id' =>204129, 'sis_localupz_id' =>59, 'sis_barrio_id' =>1562],//1147
            ['simianti_id' =>190022, 'sis_localupz_id' =>59, 'sis_barrio_id' =>1563],//1148
            ['simianti_id' =>190070, 'sis_localupz_id' =>59, 'sis_barrio_id' =>1564],//1149
            ['simianti_id' =>190107, 'sis_localupz_id' =>59, 'sis_barrio_id' =>1565],//1150
            ['simianti_id' =>190143, 'sis_localupz_id' =>59, 'sis_barrio_id' =>1566],//1151
            ['simianti_id' =>190014, 'sis_localupz_id' =>59, 'sis_barrio_id' =>1567],//1152
            ['simianti_id' =>2432, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1568],//1153
            ['simianti_id' =>2422, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1569],//1154
            ['simianti_id' =>190102, 'sis_localupz_id' =>60, 'sis_barrio_id' =>244],//1155
            ['simianti_id' =>2415, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1570],//1156
            ['simianti_id' =>2421, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1571],//1157
            ['simianti_id' =>190227, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1206],//1158
            ['simianti_id' =>190228, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1572],//1159
            ['simianti_id' =>190263, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1573],//1160
            ['simianti_id' =>0, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1574],//1161
            ['simianti_id' =>190094, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1479],//1162
            ['simianti_id' =>190147, 'sis_localupz_id' =>60, 'sis_barrio_id' =>1575],//1163
            ['simianti_id' =>2515, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1280],//1164
            ['simianti_id' =>2513, 'sis_localupz_id' =>61, 'sis_barrio_id' =>157],//1165
            ['simianti_id' =>2531, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1576],//1166
            ['simianti_id' =>190076, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1161],//1167
            ['simianti_id' =>190039, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1577],//1168
            ['simianti_id' =>190087, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1578],//1169
            ['simianti_id' =>2557, 'sis_localupz_id' =>61, 'sis_barrio_id' =>413],//1170
            ['simianti_id' =>190223, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1514],//1171
            ['simianti_id' =>190209, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1579],//1172
            ['simianti_id' =>190003, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1580],//1173
            ['simianti_id' =>190132, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1581],//1174
            ['simianti_id' =>190148, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1582],//1175
            ['simianti_id' =>190231, 'sis_localupz_id' =>61, 'sis_barrio_id' =>679],//1176
            ['simianti_id' =>190048, 'sis_localupz_id' =>61, 'sis_barrio_id' =>1583],//1177
            ['simianti_id' =>190231, 'sis_localupz_id' =>61, 'sis_barrio_id' =>640],//1178
            ['simianti_id' =>190006, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1584],//1179
            ['simianti_id' =>2521, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1585],//1180
            ['simianti_id' =>190122, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1586],//1181
            ['simianti_id' =>190120, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1587],//1182
            ['simianti_id' =>190042, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1588],//1183
            ['simianti_id' =>190046, 'sis_localupz_id' =>62, 'sis_barrio_id' =>461],//1184
            ['simianti_id' =>20028, 'sis_localupz_id' =>62, 'sis_barrio_id' =>150],//1185
            ['simianti_id' =>190055, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1589],//1186
            ['simianti_id' =>2580, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1590],//1187
            ['simianti_id' =>2581, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1591],//1188
            ['simianti_id' =>2540, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1592],//1189
            ['simianti_id' =>190069, 'sis_localupz_id' =>62, 'sis_barrio_id' =>209],//1190
            ['simianti_id' =>2554, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1593],//1191
            ['simianti_id' =>2552, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1594],//1192
            ['simianti_id' =>2523, 'sis_localupz_id' =>62, 'sis_barrio_id' =>193],//1193
            ['simianti_id' =>190091, 'sis_localupz_id' =>62, 'sis_barrio_id' =>415],//1194
            ['simianti_id' =>190096, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1595],//1195
            ['simianti_id' =>190111, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1596],//1196
            ['simianti_id' =>190114, 'sis_localupz_id' =>62, 'sis_barrio_id' =>250],//1197
            ['simianti_id' =>2545, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1597],//1198
            ['simianti_id' =>190115, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1598],//1199
            ['simianti_id' =>190099, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1599],//1200
            ['simianti_id' =>190038, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1600],//1201
            ['simianti_id' =>2504, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1350],//1202
            ['simianti_id' =>190105, 'sis_localupz_id' =>62, 'sis_barrio_id' =>7],//1203
            ['simianti_id' =>190126, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1146],//1204
            ['simianti_id' =>2514, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1601],//1205
            ['simianti_id' =>2587, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1602],//1206
            ['simianti_id' =>190129, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1603],//1207
            ['simianti_id' =>190140, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1604],//1208
            ['simianti_id' =>2546, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1605],//1209
            ['simianti_id' =>0, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1207],//1210
            ['simianti_id' =>190270, 'sis_localupz_id' =>62, 'sis_barrio_id' =>929],//1211
            ['simianti_id' =>190154, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1606],//1212
            ['simianti_id' =>190271, 'sis_localupz_id' =>62, 'sis_barrio_id' =>75],//1213
            ['simianti_id' =>2578, 'sis_localupz_id' =>63, 'sis_barrio_id' =>980],//1214
            ['simianti_id' =>190004, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1050],//1215
            ['simianti_id' =>190024, 'sis_localupz_id' =>63, 'sis_barrio_id' =>283],//1216
            ['simianti_id' =>190019, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1607],//1217
            ['simianti_id' =>190274, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1608],//1218
            ['simianti_id' =>2534, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1609],//1219
            ['simianti_id' =>190050, 'sis_localupz_id' =>63, 'sis_barrio_id' =>204],//1220
            ['simianti_id' =>2547, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1610],//1221
            ['simianti_id' =>190066, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1611],//1222
            ['simianti_id' =>2584, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1612],//1223
            ['simianti_id' =>190280, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1613],//1224
            ['simianti_id' =>190095, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1614],//1225
            ['simianti_id' =>190116, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1615],//1226
            ['simianti_id' =>190079, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1616],//1227
            ['simianti_id' =>190137, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1617],//1228
            ['simianti_id' =>2564, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1618],//1229
            ['simianti_id' =>190141, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1619],//1230
            ['simianti_id' =>2530, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1620],//1231
            ['simianti_id' =>190145, 'sis_localupz_id' =>63, 'sis_barrio_id' =>671],//1232
            ['simianti_id' =>190151, 'sis_localupz_id' =>63, 'sis_barrio_id' =>291],//1233
            ['simianti_id' =>190150, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1621],//1234
            ['simianti_id' =>190226, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1622],//1235
            ['simianti_id' =>190220, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1623],//1236
            ['simianti_id' =>2533, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1624],//1237
            ['simianti_id' =>190260, 'sis_localupz_id' =>63, 'sis_barrio_id' =>1625],//1238
            ['simianti_id' =>190015, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1626],//1239
            ['simianti_id' =>2417, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1627],//1240
            ['simianti_id' =>2445, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1628],//1241
            ['simianti_id' =>190021, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1629],//1242
            ['simianti_id' =>190035, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1630],//1243
            ['simianti_id' =>190049, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1631],//1244
            ['simianti_id' =>190065, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1539],//1245
            ['simianti_id' =>2423, 'sis_localupz_id' =>64, 'sis_barrio_id' =>536],//1246
            ['simianti_id' =>2414, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1632],//1247
            ['simianti_id' =>190061, 'sis_localupz_id' =>64, 'sis_barrio_id' =>429],//1248
            ['simianti_id' =>190064, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1633],//1249
            ['simianti_id' =>2427, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1634],//1250
            ['simianti_id' =>190092, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1635],//1251
            ['simianti_id' =>190133, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1636],//1252
            ['simianti_id' =>190134, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1637],//1253
            ['simianti_id' =>2448, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1638],//1254
            ['simianti_id' =>190152, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1639],//1255
            ['simianti_id' =>190153, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1640],//1256
            ['simianti_id' =>2419, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1641],//1257
            ['simianti_id' =>2451, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1642],//1258
            ['simianti_id' =>190213, 'sis_localupz_id' =>64, 'sis_barrio_id' =>145],//1259
            ['simianti_id' =>2429, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1643],//1260
            ['simianti_id' =>190225, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1644],//1261
            ['simianti_id' =>2442, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1645],//1262
            ['simianti_id' =>2426, 'sis_localupz_id' =>64, 'sis_barrio_id' =>1067],//1263
            ['simianti_id' =>2438, 'sis_localupz_id' =>64, 'sis_barrio_id' =>501],//1264
            ['simianti_id' =>2568, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1646],//1265
            ['simianti_id' =>110038, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1647],//1266
            ['simianti_id' =>190074, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1648],//1267
            ['simianti_id' =>190081, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1649],//1268
            ['simianti_id' =>2437, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1488],//1269
            ['simianti_id' =>2430, 'sis_localupz_id' =>65, 'sis_barrio_id' =>286],//1270
            ['simianti_id' =>2431, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1253],//1271
            ['simianti_id' =>190113, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1650],//1272
            ['simianti_id' =>190266, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1651],//1273
            ['simianti_id' =>2412, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1367],//1274
            ['simianti_id' =>110028, 'sis_localupz_id' =>66, 'sis_barrio_id' =>299],//1275
            ['simianti_id' =>9259, 'sis_localupz_id' =>66, 'sis_barrio_id' =>622],//1276
            ['simianti_id' =>9252, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1347],//1277
            ['simianti_id' =>110085, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1348],//1278
            ['simianti_id' =>0, 'sis_localupz_id' =>66, 'sis_barrio_id' =>351],//1279
            ['simianti_id' =>110099, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1349],//1280
            ['simianti_id' =>110154, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1115],//1281
            ['simianti_id' =>110473, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1350],//1282
            ['simianti_id' =>110846, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1351],//1283
            ['simianti_id' =>9216, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1352],//1284
            ['simianti_id' =>110294, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1353],//1285
            ['simianti_id' =>9254, 'sis_localupz_id' =>66, 'sis_barrio_id' =>86],//1286
            ['simianti_id' =>110737, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1354],//1287
            ['simianti_id' =>110360, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1355],//1288
            ['simianti_id' =>9224, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1356],//1289
            ['simianti_id' =>110406, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1357],//1290
            ['simianti_id' =>110452, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1328],//1291
            ['simianti_id' =>110468, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1358],//1292
            ['simianti_id' =>9232, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1359],//1293
            ['simianti_id' =>9251, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1360],//1294
            ['simianti_id' =>110557, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1361],//1295
            ['simianti_id' =>110585, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1362],//1296
            ['simianti_id' =>9256, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1045],//1297
            ['simianti_id' =>110608, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1363],//1298
            ['simianti_id' =>9225, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1364],//1299
            ['simianti_id' =>9229, 'sis_localupz_id' =>66, 'sis_barrio_id' =>142],//1300
            ['simianti_id' =>0, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1365],//1301
            ['simianti_id' =>110785, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1366],//1302
            ['simianti_id' =>110786, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1367],//1303
            ['simianti_id' =>110793, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1368],//1304
            ['simianti_id' =>110795, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1369],//1305
            ['simianti_id' =>2549, 'sis_localupz_id' =>66, 'sis_barrio_id' =>1370],//1306
            ['simianti_id' =>5644, 'sis_localupz_id' =>67, 'sis_barrio_id' =>1106],//1307
            ['simianti_id' =>100013, 'sis_localupz_id' =>67, 'sis_barrio_id' =>1107],//1308
            ['simianti_id' =>5622, 'sis_localupz_id' =>67, 'sis_barrio_id' =>1108],//1309
            ['simianti_id' =>5650, 'sis_localupz_id' =>67, 'sis_barrio_id' =>1109],//1310
            ['simianti_id' =>5634, 'sis_localupz_id' =>67, 'sis_barrio_id' =>1110],//1311
            ['simianti_id' =>100080, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1111],//1312
            ['simianti_id' =>5643, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1112],//1313
            ['simianti_id' =>5643, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1113],//1314
            ['simianti_id' =>100024, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1114],//1315
            ['simianti_id' =>5629, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1115],//1316
            ['simianti_id' =>100137, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1116],//1317
            ['simianti_id' =>100158, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1117],//1318
            ['simianti_id' =>100169, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1118],//1319
            ['simianti_id' =>100218, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1119],//1320
            ['simianti_id' =>100231, 'sis_localupz_id' =>68, 'sis_barrio_id' =>65],//1321
            ['simianti_id' =>5648, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1120],//1322
            ['simianti_id' =>5658, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1121],//1323
            ['simianti_id' =>5647, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1122],//1324
            ['simianti_id' =>100271, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1123],//1325
            ['simianti_id' =>100269, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1124],//1326
            ['simianti_id' =>100023, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1125],//1327
            ['simianti_id' =>0, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1126],//1328
            ['simianti_id' =>0, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1127],//1329
            ['simianti_id' =>100278, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1128],//1330
            ['simianti_id' =>0, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1129],//1331
            ['simianti_id' =>0, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1130],//1332
            ['simianti_id' =>0, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1131],//1333
            ['simianti_id' =>100267, 'sis_localupz_id' =>68, 'sis_barrio_id' =>1132],//1334
            ['simianti_id' =>100002, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1133],//1335
            ['simianti_id' =>100038, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1134],//1336
            ['simianti_id' =>5662, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1115],//1337
            ['simianti_id' =>100055, 'sis_localupz_id' =>69, 'sis_barrio_id' =>207],//1338
            ['simianti_id' =>5652, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1135],//1339
            ['simianti_id' =>100060, 'sis_localupz_id' =>69, 'sis_barrio_id' =>706],//1340
            ['simianti_id' =>100068, 'sis_localupz_id' =>69, 'sis_barrio_id' =>573],//1341
            ['simianti_id' =>100069, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1136],//1342
            ['simianti_id' =>5667, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1137],//1343
            ['simianti_id' =>100098, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1138],//1344
            ['simianti_id' =>100089, 'sis_localupz_id' =>69, 'sis_barrio_id' =>415],//1345
            ['simianti_id' =>100091, 'sis_localupz_id' =>69, 'sis_barrio_id' =>102],//1346
            ['simianti_id' =>5666, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1139],//1347
            ['simianti_id' =>5670, 'sis_localupz_id' =>69, 'sis_barrio_id' =>724],//1348
            ['simianti_id' =>100237, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1140],//1349
            ['simianti_id' =>100264, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1141],//1350
            ['simianti_id' =>100118, 'sis_localupz_id' =>69, 'sis_barrio_id' =>248],//1351
            ['simianti_id' =>100120, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1142],//1352
            ['simianti_id' =>100126, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1143],//1353
            ['simianti_id' =>100147, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1144],//1354
            ['simianti_id' =>5657, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1145],//1355
            ['simianti_id' =>5665, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1146],//1356
            ['simianti_id' =>100171, 'sis_localupz_id' =>69, 'sis_barrio_id' =>445],//1357
            ['simianti_id' =>100173, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1147],//1358
            ['simianti_id' =>100280, 'sis_localupz_id' =>69, 'sis_barrio_id' =>22],//1359
            ['simianti_id' =>0, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1119],//1360
            ['simianti_id' =>100224, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1148],//1361
            ['simianti_id' =>100227, 'sis_localupz_id' =>69, 'sis_barrio_id' =>490],//1362
            ['simianti_id' =>100245, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1149],//1363
            ['simianti_id' =>50282, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1150],//1364
            ['simianti_id' =>100250, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1151],//1365
            ['simianti_id' =>5637, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1152],//1366
            ['simianti_id' =>100260, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1153],//1367
            ['simianti_id' =>100262, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1154],//1368
            ['simianti_id' =>100263, 'sis_localupz_id' =>69, 'sis_barrio_id' =>1155],//1369
            ['simianti_id' =>100242, 'sis_localupz_id' =>69, 'sis_barrio_id' =>25],//1370
            ['simianti_id' =>90138, 'sis_localupz_id' =>70, 'sis_barrio_id' =>980],//1371
            ['simianti_id' =>6416, 'sis_localupz_id' =>70, 'sis_barrio_id' =>981],//1372
            ['simianti_id' =>90007, 'sis_localupz_id' =>70, 'sis_barrio_id' =>982],//1373
            ['simianti_id' =>90008, 'sis_localupz_id' =>70, 'sis_barrio_id' =>983],//1374
            ['simianti_id' =>6409, 'sis_localupz_id' =>70, 'sis_barrio_id' =>984],//1375
            ['simianti_id' =>90142, 'sis_localupz_id' =>70, 'sis_barrio_id' =>451],//1376
            ['simianti_id' =>90012, 'sis_localupz_id' =>70, 'sis_barrio_id' =>985],//1377
            ['simianti_id' =>90016, 'sis_localupz_id' =>70, 'sis_barrio_id' =>986],//1378
            ['simianti_id' =>90017, 'sis_localupz_id' =>70, 'sis_barrio_id' =>987],//1379
            ['simianti_id' =>6408, 'sis_localupz_id' =>70, 'sis_barrio_id' =>988],//1380
            ['simianti_id' =>90030, 'sis_localupz_id' =>70, 'sis_barrio_id' =>989],//1381
            ['simianti_id' =>90050, 'sis_localupz_id' =>70, 'sis_barrio_id' =>990],//1382
            ['simianti_id' =>90031, 'sis_localupz_id' =>70, 'sis_barrio_id' =>464],//1383
            ['simianti_id' =>90034, 'sis_localupz_id' =>70, 'sis_barrio_id' =>97],//1384
            ['simianti_id' =>110209, 'sis_localupz_id' =>70, 'sis_barrio_id' =>991],//1385
            ['simianti_id' =>90039, 'sis_localupz_id' =>70, 'sis_barrio_id' =>992],//1386
            ['simianti_id' =>90045, 'sis_localupz_id' =>70, 'sis_barrio_id' =>993],//1387
            ['simianti_id' =>90046, 'sis_localupz_id' =>70, 'sis_barrio_id' =>994],//1388
            ['simianti_id' =>90017, 'sis_localupz_id' =>70, 'sis_barrio_id' =>995],//1389
            ['simianti_id' =>90037, 'sis_localupz_id' =>70, 'sis_barrio_id' =>415],//1390
            ['simianti_id' =>6420, 'sis_localupz_id' =>70, 'sis_barrio_id' =>996],//1391
            ['simianti_id' =>6415, 'sis_localupz_id' =>70, 'sis_barrio_id' =>997],//1392
            ['simianti_id' =>90069, 'sis_localupz_id' =>70, 'sis_barrio_id' =>545],//1393
            ['simianti_id' =>90080, 'sis_localupz_id' =>70, 'sis_barrio_id' =>998],//1394
            ['simianti_id' =>70228, 'sis_localupz_id' =>70, 'sis_barrio_id' =>999],//1395
            ['simianti_id' =>90126, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1000],//1396
            ['simianti_id' =>90188, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1001],//1397
            ['simianti_id' =>6523, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1002],//1398
            ['simianti_id' =>90133, 'sis_localupz_id' =>70, 'sis_barrio_id' =>52],//1399
            ['simianti_id' =>90075, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1003],//1400
            ['simianti_id' =>90169, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1004],//1401
            ['simianti_id' =>90172, 'sis_localupz_id' =>70, 'sis_barrio_id' =>195],//1402
            ['simianti_id' =>6401, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1005],//1403
            ['simianti_id' =>90177, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1006],//1404
            ['simianti_id' =>6417, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1007],//1405
            ['simianti_id' =>6406, 'sis_localupz_id' =>70, 'sis_barrio_id' =>1008],//1406
            ['simianti_id' =>90004, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1009],//1407
            ['simianti_id' =>90160, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1010],//1408
            ['simianti_id' =>90035, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1011],//1409
            ['simianti_id' =>6419, 'sis_localupz_id' =>71, 'sis_barrio_id' =>138],//1410
            ['simianti_id' =>90042, 'sis_localupz_id' =>71, 'sis_barrio_id' =>573],//1411
            ['simianti_id' =>90087, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1012],//1412
            ['simianti_id' =>90056, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1013],//1413
            ['simianti_id' =>90013, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1014],//1414
            ['simianti_id' =>0, 'sis_localupz_id' =>71, 'sis_barrio_id' =>723],//1415
            ['simianti_id' =>50127, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1015],//1416
            ['simianti_id' =>90036, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1016],//1417
            ['simianti_id' =>90068, 'sis_localupz_id' =>71, 'sis_barrio_id' =>286],//1418
            ['simianti_id' =>90083, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1017],//1419
            ['simianti_id' =>6418, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1018],//1420
            ['simianti_id' =>90121, 'sis_localupz_id' =>71, 'sis_barrio_id' =>489],//1421
            ['simianti_id' =>90130, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1019],//1422
            ['simianti_id' =>90180, 'sis_localupz_id' =>71, 'sis_barrio_id' =>858],//1423
            ['simianti_id' =>0, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1020],//1424
            ['simianti_id' =>0, 'sis_localupz_id' =>71, 'sis_barrio_id' =>1021],//1425
            ['simianti_id' =>90102, 'sis_localupz_id' =>72, 'sis_barrio_id' =>1022],//1426
            ['simianti_id' =>6519, 'sis_localupz_id' =>72, 'sis_barrio_id' =>1023],//1427
            ['simianti_id' =>6532, 'sis_localupz_id' =>72, 'sis_barrio_id' =>1024],//1428
            ['simianti_id' =>6521, 'sis_localupz_id' =>72, 'sis_barrio_id' =>1025],//1429
            ['simianti_id' =>80267, 'sis_localupz_id' =>73, 'sis_barrio_id' =>905],//1430
            ['simianti_id' =>105105, 'sis_localupz_id' =>73, 'sis_barrio_id' =>906],//1431
            ['simianti_id' =>80037, 'sis_localupz_id' =>74, 'sis_barrio_id' =>907],//1432
            ['simianti_id' =>4601, 'sis_localupz_id' =>74, 'sis_barrio_id' =>908],//1433
            ['simianti_id' =>0, 'sis_localupz_id' =>74, 'sis_barrio_id' =>909],//1434
            ['simianti_id' =>0, 'sis_localupz_id' =>74, 'sis_barrio_id' =>910],//1435
            ['simianti_id' =>80165, 'sis_localupz_id' =>74, 'sis_barrio_id' =>911],//1436
            ['simianti_id' =>6518, 'sis_localupz_id' =>74, 'sis_barrio_id' =>849],//1437
            ['simianti_id' =>0, 'sis_localupz_id' =>74, 'sis_barrio_id' =>912],//1438
            ['simianti_id' =>6516, 'sis_localupz_id' =>74, 'sis_barrio_id' =>913],//1439
            ['simianti_id' =>80359, 'sis_localupz_id' =>74, 'sis_barrio_id' =>914],//1440
            ['simianti_id' =>0, 'sis_localupz_id' =>74, 'sis_barrio_id' =>915],//1441
            ['simianti_id' =>80015, 'sis_localupz_id' =>75, 'sis_barrio_id' =>916],//1442
            ['simianti_id' =>4621, 'sis_localupz_id' =>75, 'sis_barrio_id' =>917],//1443
            ['simianti_id' =>80082, 'sis_localupz_id' =>75, 'sis_barrio_id' =>918],//1444
            ['simianti_id' =>80090, 'sis_localupz_id' =>75, 'sis_barrio_id' =>919],//1445
            ['simianti_id' =>80091, 'sis_localupz_id' =>75, 'sis_barrio_id' =>920],//1446
            ['simianti_id' =>80112, 'sis_localupz_id' =>75, 'sis_barrio_id' =>921],//1447
            ['simianti_id' =>20023, 'sis_localupz_id' =>83, 'sis_barrio_id' =>135],//1448
            ['simianti_id' =>8305, 'sis_localupz_id' =>83, 'sis_barrio_id' =>94],//1449
            ['simianti_id' =>20019, 'sis_localupz_id' =>83, 'sis_barrio_id' =>136],//1450
            ['simianti_id' =>8311, 'sis_localupz_id' =>83, 'sis_barrio_id' =>137],//1451
            ['simianti_id' =>8303, 'sis_localupz_id' =>83, 'sis_barrio_id' =>138],//1452
            ['simianti_id' =>8309, 'sis_localupz_id' =>83, 'sis_barrio_id' =>139],//1453
            ['simianti_id' =>8304, 'sis_localupz_id' =>83, 'sis_barrio_id' =>140],//1454
            ['simianti_id' =>8302, 'sis_localupz_id' =>83, 'sis_barrio_id' =>141],//1455
            ['simianti_id' =>0, 'sis_localupz_id' =>83, 'sis_barrio_id' =>142],//1456
            ['simianti_id' =>20042, 'sis_localupz_id' =>84, 'sis_barrio_id' =>143],//1457
            ['simianti_id' =>20044, 'sis_localupz_id' =>84, 'sis_barrio_id' =>144],//1458
            ['simianti_id' =>20092, 'sis_localupz_id' =>84, 'sis_barrio_id' =>145],//1459
            ['simianti_id' =>208110, 'sis_localupz_id' =>84, 'sis_barrio_id' =>146],//1460
            ['simianti_id' =>8207, 'sis_localupz_id' =>85, 'sis_barrio_id' =>147],//1461
            ['simianti_id' =>20005, 'sis_localupz_id' =>85, 'sis_barrio_id' =>148],//1462
            ['simianti_id' =>0, 'sis_localupz_id' =>85, 'sis_barrio_id' =>149],//1463
            ['simianti_id' =>20018, 'sis_localupz_id' =>85, 'sis_barrio_id' =>150],//1464
            ['simianti_id' =>8110, 'sis_localupz_id' =>85, 'sis_barrio_id' =>151],//1465
            ['simianti_id' =>8202, 'sis_localupz_id' =>85, 'sis_barrio_id' =>152],//1466
            ['simianti_id' =>8204, 'sis_localupz_id' =>85, 'sis_barrio_id' =>153],//1467
            ['simianti_id' =>8215, 'sis_localupz_id' =>85, 'sis_barrio_id' =>154],//1468
            ['simianti_id' =>8211, 'sis_localupz_id' =>85, 'sis_barrio_id' =>155],//1469
            ['simianti_id' =>8206, 'sis_localupz_id' =>85, 'sis_barrio_id' =>156],//1470
            ['simianti_id' =>8203, 'sis_localupz_id' =>85, 'sis_barrio_id' =>157],//1471
            ['simianti_id' =>10143, 'sis_localupz_id' =>85, 'sis_barrio_id' =>158],//1472
            ['simianti_id' =>8205, 'sis_localupz_id' =>85, 'sis_barrio_id' =>159],//1473
            ['simianti_id' =>20050, 'sis_localupz_id' =>85, 'sis_barrio_id' =>160],//1474
            ['simianti_id' =>20051, 'sis_localupz_id' =>85, 'sis_barrio_id' =>161],//1475
            ['simianti_id' =>0, 'sis_localupz_id' =>85, 'sis_barrio_id' =>162],//1476
            ['simianti_id' =>8208, 'sis_localupz_id' =>85, 'sis_barrio_id' =>163],//1477
            ['simianti_id' =>20096, 'sis_localupz_id' =>85, 'sis_barrio_id' =>164],//1478
            ['simianti_id' =>20112, 'sis_localupz_id' =>85, 'sis_barrio_id' =>165],//1479
            ['simianti_id' =>20113, 'sis_localupz_id' =>85, 'sis_barrio_id' =>166],//1480
            ['simianti_id' =>8314, 'sis_localupz_id' =>92, 'sis_barrio_id' =>167],//1481
            ['simianti_id' =>8307, 'sis_localupz_id' =>92, 'sis_barrio_id' =>168],//1482
            ['simianti_id' =>20024, 'sis_localupz_id' =>92, 'sis_barrio_id' =>169],//1483
            ['simianti_id' =>8315, 'sis_localupz_id' =>92, 'sis_barrio_id' =>170],//1484
            ['simianti_id' =>0, 'sis_localupz_id' =>92, 'sis_barrio_id' =>171],//1485
            ['simianti_id' =>8308, 'sis_localupz_id' =>92, 'sis_barrio_id' =>172],//1486
            ['simianti_id' =>8310, 'sis_localupz_id' =>92, 'sis_barrio_id' =>173],//1487
            ['simianti_id' =>8312, 'sis_localupz_id' =>92, 'sis_barrio_id' =>174],//1488
            ['simianti_id' =>8309, 'sis_localupz_id' =>92, 'sis_barrio_id' =>139],//1489
            ['simianti_id' =>8313, 'sis_localupz_id' =>92, 'sis_barrio_id' =>175],//1490
            ['simianti_id' =>8306, 'sis_localupz_id' =>92, 'sis_barrio_id' =>176],//1491
            ['simianti_id' =>8201, 'sis_localupz_id' =>92, 'sis_barrio_id' =>177],//1492
            ['simianti_id' =>8111, 'sis_localupz_id' =>94, 'sis_barrio_id' =>178],//1493
            ['simianti_id' =>8213, 'sis_localupz_id' =>94, 'sis_barrio_id' =>179],//1494
            ['simianti_id' =>8214, 'sis_localupz_id' =>94, 'sis_barrio_id' =>180],//1495
            ['simianti_id' =>8212, 'sis_localupz_id' =>94, 'sis_barrio_id' =>181],//1496
            ['simianti_id' =>8112, 'sis_localupz_id' =>94, 'sis_barrio_id' =>182],//1497
            ['simianti_id' =>8103, 'sis_localupz_id' =>86, 'sis_barrio_id' =>183],//1498
            ['simianti_id' =>0, 'sis_localupz_id' =>86, 'sis_barrio_id' =>184],//1499
            ['simianti_id' =>8101, 'sis_localupz_id' =>86, 'sis_barrio_id' =>105],//1500
            ['simianti_id' =>8107, 'sis_localupz_id' =>86, 'sis_barrio_id' =>185],//1501
            ['simianti_id' =>8108, 'sis_localupz_id' =>86, 'sis_barrio_id' =>186],//1502
            ['simianti_id' =>8109, 'sis_localupz_id' =>86, 'sis_barrio_id' =>187],//1503
            ['simianti_id' =>8106, 'sis_localupz_id' =>87, 'sis_barrio_id' =>188],//1504
            ['simianti_id' =>0, 'sis_localupz_id' =>87, 'sis_barrio_id' =>189],//1505
            ['simianti_id' =>8105, 'sis_localupz_id' =>87, 'sis_barrio_id' =>190],//1506
            ['simianti_id' =>30022, 'sis_localupz_id' =>87, 'sis_barrio_id' =>191],//1507
            ['simianti_id' =>8104, 'sis_localupz_id' =>87, 'sis_barrio_id' =>192],//1508
            ['simianti_id' =>3101, 'sis_localupz_id' =>88, 'sis_barrio_id' =>193],//1509
            ['simianti_id' =>3108, 'sis_localupz_id' =>88, 'sis_barrio_id' =>194],//1510
            ['simianti_id' =>3109, 'sis_localupz_id' =>88, 'sis_barrio_id' =>195],//1511
            ['simianti_id' =>3102, 'sis_localupz_id' =>88, 'sis_barrio_id' =>196],//1512
            ['simianti_id' =>0, 'sis_localupz_id' =>88, 'sis_barrio_id' =>197],//1513
            ['simianti_id' =>30048, 'sis_localupz_id' =>88, 'sis_barrio_id' =>198],//1514
            ['simianti_id' =>3202, 'sis_localupz_id' =>90, 'sis_barrio_id' =>199],//1515
            ['simianti_id' =>10187, 'sis_localupz_id' =>90, 'sis_barrio_id' =>200],//1516
            ['simianti_id' =>30001, 'sis_localupz_id' =>91, 'sis_barrio_id' =>201],//1517
            ['simianti_id' =>30003, 'sis_localupz_id' =>91, 'sis_barrio_id' =>202],//1518
            ['simianti_id' =>30005, 'sis_localupz_id' =>91, 'sis_barrio_id' =>203],//1519
            ['simianti_id' =>30006, 'sis_localupz_id' =>91, 'sis_barrio_id' =>204],//1520
            ['simianti_id' =>3209, 'sis_localupz_id' =>91, 'sis_barrio_id' =>205],//1521
            ['simianti_id' =>3205, 'sis_localupz_id' =>91, 'sis_barrio_id' =>206],//1522
            ['simianti_id' =>30011, 'sis_localupz_id' =>91, 'sis_barrio_id' =>207],//1523
            ['simianti_id' =>3208, 'sis_localupz_id' =>91, 'sis_barrio_id' =>208],//1524
            ['simianti_id' =>30013, 'sis_localupz_id' =>91, 'sis_barrio_id' =>209],//1525
            ['simianti_id' =>30015, 'sis_localupz_id' =>91, 'sis_barrio_id' =>210],//1526
            ['simianti_id' =>30016, 'sis_localupz_id' =>91, 'sis_barrio_id' =>211],//1527
            ['simianti_id' =>30023, 'sis_localupz_id' =>91, 'sis_barrio_id' =>212],//1528
            ['simianti_id' =>3207, 'sis_localupz_id' =>91, 'sis_barrio_id' =>213],//1529
            ['simianti_id' =>3212, 'sis_localupz_id' =>91, 'sis_barrio_id' =>214],//1530
            ['simianti_id' =>3210, 'sis_localupz_id' =>91, 'sis_barrio_id' =>215],//1531
            ['simianti_id' =>30045, 'sis_localupz_id' =>91, 'sis_barrio_id' =>216],//1532
            ['simianti_id' =>30049, 'sis_localupz_id' =>91, 'sis_barrio_id' =>217],//1533
            ['simianti_id' =>1103, 'sis_localupz_id' =>91, 'sis_barrio_id' =>218],//1534
            ['simianti_id' =>70004, 'sis_localupz_id' =>79, 'sis_barrio_id' =>621],//1535
            ['simianti_id' =>70014, 'sis_localupz_id' =>79, 'sis_barrio_id' =>622],//1536
            ['simianti_id' =>70014, 'sis_localupz_id' =>79, 'sis_barrio_id' =>623],//1537
            ['simianti_id' =>4628, 'sis_localupz_id' =>79, 'sis_barrio_id' =>451],//1538
            ['simianti_id' =>4526, 'sis_localupz_id' =>79, 'sis_barrio_id' =>624],//1539
            ['simianti_id' =>70018, 'sis_localupz_id' =>79, 'sis_barrio_id' =>625],//1540
            ['simianti_id' =>70019, 'sis_localupz_id' =>79, 'sis_barrio_id' =>626],//1541
            ['simianti_id' =>4622, 'sis_localupz_id' =>79, 'sis_barrio_id' =>627],//1542
            ['simianti_id' =>4604, 'sis_localupz_id' =>79, 'sis_barrio_id' =>628],//1543
            ['simianti_id' =>70037, 'sis_localupz_id' =>79, 'sis_barrio_id' =>629],//1544
            ['simianti_id' =>70042, 'sis_localupz_id' =>79, 'sis_barrio_id' =>630],//1545
            ['simianti_id' =>4605, 'sis_localupz_id' =>79, 'sis_barrio_id' =>631],//1546
            ['simianti_id' =>70048, 'sis_localupz_id' =>79, 'sis_barrio_id' =>632],//1547
            ['simianti_id' =>70058, 'sis_localupz_id' =>79, 'sis_barrio_id' =>633],//1548
            ['simianti_id' =>70059, 'sis_localupz_id' =>79, 'sis_barrio_id' =>634],//1549
            ['simianti_id' =>70061, 'sis_localupz_id' =>79, 'sis_barrio_id' =>635],//1550
            ['simianti_id' =>70064, 'sis_localupz_id' =>79, 'sis_barrio_id' =>636],//1551
            ['simianti_id' =>70074, 'sis_localupz_id' =>79, 'sis_barrio_id' =>637],//1552
            ['simianti_id' =>4593, 'sis_localupz_id' =>79, 'sis_barrio_id' =>638],//1553
            ['simianti_id' =>70081, 'sis_localupz_id' =>79, 'sis_barrio_id' =>429],//1554
            ['simianti_id' =>4567, 'sis_localupz_id' =>79, 'sis_barrio_id' =>639],//1555
            ['simianti_id' =>70089, 'sis_localupz_id' =>79, 'sis_barrio_id' =>640],//1556
            ['simianti_id' =>70095, 'sis_localupz_id' =>79, 'sis_barrio_id' =>641],//1557
            ['simianti_id' =>70096, 'sis_localupz_id' =>79, 'sis_barrio_id' =>335],//1558
            ['simianti_id' =>70098, 'sis_localupz_id' =>79, 'sis_barrio_id' =>642],//1559
            ['simianti_id' =>4519, 'sis_localupz_id' =>79, 'sis_barrio_id' =>643],//1560
            ['simianti_id' =>70107, 'sis_localupz_id' =>79, 'sis_barrio_id' =>542],//1561
            ['simianti_id' =>70113, 'sis_localupz_id' =>79, 'sis_barrio_id' =>644],//1562
            ['simianti_id' =>70118, 'sis_localupz_id' =>79, 'sis_barrio_id' =>645],//1563
            ['simianti_id' =>4568, 'sis_localupz_id' =>79, 'sis_barrio_id' =>646],//1564
            ['simianti_id' =>70140, 'sis_localupz_id' =>79, 'sis_barrio_id' =>647],//1565
            ['simianti_id' =>70143, 'sis_localupz_id' =>79, 'sis_barrio_id' =>648],//1566
            ['simianti_id' =>70145, 'sis_localupz_id' =>79, 'sis_barrio_id' =>649],//1567
            ['simianti_id' =>70153, 'sis_localupz_id' =>79, 'sis_barrio_id' =>650],//1568
            ['simianti_id' =>100097, 'sis_localupz_id' =>79, 'sis_barrio_id' =>651],//1569
            ['simianti_id' =>70156, 'sis_localupz_id' =>79, 'sis_barrio_id' =>652],//1570
            ['simianti_id' =>4641, 'sis_localupz_id' =>79, 'sis_barrio_id' =>653],//1571
            ['simianti_id' =>4593, 'sis_localupz_id' =>79, 'sis_barrio_id' =>654],//1572
            ['simianti_id' =>0, 'sis_localupz_id' =>79, 'sis_barrio_id' =>655],//1573
            ['simianti_id' =>0, 'sis_localupz_id' =>79, 'sis_barrio_id' =>656],//1574
            ['simianti_id' =>0, 'sis_localupz_id' =>79, 'sis_barrio_id' =>657],//1575
            ['simianti_id' =>70165, 'sis_localupz_id' =>79, 'sis_barrio_id' =>658],//1576
            ['simianti_id' =>70167, 'sis_localupz_id' =>79, 'sis_barrio_id' =>285],//1577
            ['simianti_id' =>70169, 'sis_localupz_id' =>79, 'sis_barrio_id' =>659],//1578
            ['simianti_id' =>4520, 'sis_localupz_id' =>79, 'sis_barrio_id' =>660],//1579
            ['simianti_id' =>70174, 'sis_localupz_id' =>79, 'sis_barrio_id' =>661],//1580
            ['simianti_id' =>70177, 'sis_localupz_id' =>79, 'sis_barrio_id' =>662],//1581
            ['simianti_id' =>70185, 'sis_localupz_id' =>79, 'sis_barrio_id' =>663],//1582
            ['simianti_id' =>4637, 'sis_localupz_id' =>79, 'sis_barrio_id' =>85],//1583
            ['simianti_id' =>80178, 'sis_localupz_id' =>79, 'sis_barrio_id' =>664],//1584
            ['simianti_id' =>70194, 'sis_localupz_id' =>79, 'sis_barrio_id' =>665],//1585
            ['simianti_id' =>4587, 'sis_localupz_id' =>79, 'sis_barrio_id' =>666],//1586
            ['simianti_id' =>70199, 'sis_localupz_id' =>79, 'sis_barrio_id' =>667],//1587
            ['simianti_id' =>70204, 'sis_localupz_id' =>79, 'sis_barrio_id' =>668],//1588
            ['simianti_id' =>70211, 'sis_localupz_id' =>79, 'sis_barrio_id' =>669],//1589
            ['simianti_id' =>70213, 'sis_localupz_id' =>79, 'sis_barrio_id' =>670],//1590
            ['simianti_id' =>70214, 'sis_localupz_id' =>79, 'sis_barrio_id' =>442],//1591
            ['simianti_id' =>70237, 'sis_localupz_id' =>79, 'sis_barrio_id' =>445],//1592
            ['simianti_id' =>70288, 'sis_localupz_id' =>79, 'sis_barrio_id' =>671],//1593
            ['simianti_id' =>4594, 'sis_localupz_id' =>79, 'sis_barrio_id' =>672],//1594
            ['simianti_id' =>4594, 'sis_localupz_id' =>79, 'sis_barrio_id' =>673],//1595
            ['simianti_id' =>70285, 'sis_localupz_id' =>79, 'sis_barrio_id' =>674],//1596
            ['simianti_id' =>3201, 'sis_localupz_id' =>79, 'sis_barrio_id' =>675],//1597
            ['simianti_id' =>70296, 'sis_localupz_id' =>79, 'sis_barrio_id' =>293],//1598
            ['simianti_id' =>70298, 'sis_localupz_id' =>79, 'sis_barrio_id' =>676],//1599
            ['simianti_id' =>70307, 'sis_localupz_id' =>79, 'sis_barrio_id' =>677],//1600
            ['simianti_id' =>4592, 'sis_localupz_id' =>79, 'sis_barrio_id' =>187],//1601
            ['simianti_id' =>4589, 'sis_localupz_id' =>79, 'sis_barrio_id' =>678],//1602
            ['simianti_id' =>70324, 'sis_localupz_id' =>79, 'sis_barrio_id' =>198],//1603
            ['simianti_id' =>4587, 'sis_localupz_id' =>79, 'sis_barrio_id' =>679],//1604
            ['simianti_id' =>70329, 'sis_localupz_id' =>79, 'sis_barrio_id' =>680],//1605
            ['simianti_id' =>70149, 'sis_localupz_id' =>79, 'sis_barrio_id' =>681],//1606
            ['simianti_id' =>70344, 'sis_localupz_id' =>79, 'sis_barrio_id' =>682],//1607
            ['simianti_id' =>70349, 'sis_localupz_id' =>79, 'sis_barrio_id' =>683],//1608
            ['simianti_id' =>70350, 'sis_localupz_id' =>79, 'sis_barrio_id' =>684],//1609
            ['simianti_id' =>70351, 'sis_localupz_id' =>79, 'sis_barrio_id' =>685],//1610
            ['simianti_id' =>70353, 'sis_localupz_id' =>79, 'sis_barrio_id' =>686],//1611
            ['simianti_id' =>70354, 'sis_localupz_id' =>79, 'sis_barrio_id' =>687],//1612
            ['simianti_id' =>70165, 'sis_localupz_id' =>79, 'sis_barrio_id' =>688],//1613
            ['simianti_id' =>70361, 'sis_localupz_id' =>79, 'sis_barrio_id' =>689],//1614
            ['simianti_id' =>0, 'sis_localupz_id' =>79, 'sis_barrio_id' =>690],//1615
            ['simianti_id' =>70367, 'sis_localupz_id' =>79, 'sis_barrio_id' =>691],//1616
            ['simianti_id' =>190269, 'sis_localupz_id' =>79, 'sis_barrio_id' =>692],//1617
            ['simianti_id' =>70370, 'sis_localupz_id' =>79, 'sis_barrio_id' =>693],//1618
            ['simianti_id' =>0, 'sis_localupz_id' =>79, 'sis_barrio_id' =>694],//1619
            ['simianti_id' =>4553, 'sis_localupz_id' =>80, 'sis_barrio_id' =>695],//1620
            ['simianti_id' =>4570, 'sis_localupz_id' =>80, 'sis_barrio_id' =>696],//1621
            ['simianti_id' =>80335, 'sis_localupz_id' =>80, 'sis_barrio_id' =>697],//1622
            ['simianti_id' =>4522, 'sis_localupz_id' =>80, 'sis_barrio_id' =>698],//1623
            ['simianti_id' =>0, 'sis_localupz_id' =>80, 'sis_barrio_id' =>699],//1624
            ['simianti_id' =>70034, 'sis_localupz_id' =>80, 'sis_barrio_id' =>700],//1625
            ['simianti_id' =>70038, 'sis_localupz_id' =>80, 'sis_barrio_id' =>701],//1626
            ['simianti_id' =>4574, 'sis_localupz_id' =>80, 'sis_barrio_id' =>702],//1627
            ['simianti_id' =>70050, 'sis_localupz_id' =>80, 'sis_barrio_id' =>703],//1628
            ['simianti_id' =>70062, 'sis_localupz_id' =>80, 'sis_barrio_id' =>704],//1629
            ['simianti_id' =>50059, 'sis_localupz_id' =>80, 'sis_barrio_id' =>705],//1630
            ['simianti_id' =>70073, 'sis_localupz_id' =>80, 'sis_barrio_id' =>706],//1631
            ['simianti_id' =>70076, 'sis_localupz_id' =>80, 'sis_barrio_id' =>707],//1632
            ['simianti_id' =>4580, 'sis_localupz_id' =>80, 'sis_barrio_id' =>708],//1633
            ['simianti_id' =>70087, 'sis_localupz_id' =>80, 'sis_barrio_id' =>639],//1634
            ['simianti_id' =>4533, 'sis_localupz_id' =>80, 'sis_barrio_id' =>709],//1635
            ['simianti_id' =>70099, 'sis_localupz_id' =>80, 'sis_barrio_id' =>710],//1636
            ['simianti_id' =>70108, 'sis_localupz_id' =>80, 'sis_barrio_id' =>711],//1637
            ['simianti_id' =>4539, 'sis_localupz_id' =>80, 'sis_barrio_id' =>712],//1638
            ['simianti_id' =>4552, 'sis_localupz_id' =>80, 'sis_barrio_id' =>713],//1639
            ['simianti_id' =>70112, 'sis_localupz_id' =>80, 'sis_barrio_id' =>714],//1640
            ['simianti_id' =>70119, 'sis_localupz_id' =>80, 'sis_barrio_id' =>715],//1641
            ['simianti_id' =>4642, 'sis_localupz_id' =>80, 'sis_barrio_id' =>716],//1642
            ['simianti_id' =>70039, 'sis_localupz_id' =>80, 'sis_barrio_id' =>717],//1643
            ['simianti_id' =>70124, 'sis_localupz_id' =>80, 'sis_barrio_id' =>718],//1644
            ['simianti_id' =>70127, 'sis_localupz_id' =>80, 'sis_barrio_id' =>719],//1645
            ['simianti_id' =>4550, 'sis_localupz_id' =>80, 'sis_barrio_id' =>720],//1646
            ['simianti_id' =>70129, 'sis_localupz_id' =>80, 'sis_barrio_id' =>721],//1647
            ['simianti_id' =>70133, 'sis_localupz_id' =>80, 'sis_barrio_id' =>722],//1648
            ['simianti_id' =>70150, 'sis_localupz_id' =>80, 'sis_barrio_id' =>723],//1649
            ['simianti_id' =>70179, 'sis_localupz_id' =>80, 'sis_barrio_id' =>724],//1650
            ['simianti_id' =>4575, 'sis_localupz_id' =>80, 'sis_barrio_id' =>725],//1651
            ['simianti_id' =>70342, 'sis_localupz_id' =>80, 'sis_barrio_id' =>726],//1652
            ['simianti_id' =>70068, 'sis_localupz_id' =>80, 'sis_barrio_id' =>727],//1653
            ['simianti_id' =>70197, 'sis_localupz_id' =>80, 'sis_barrio_id' =>728],//1654
            ['simianti_id' =>70201, 'sis_localupz_id' =>80, 'sis_barrio_id' =>729],//1655
            ['simianti_id' =>70347, 'sis_localupz_id' =>80, 'sis_barrio_id' =>730],//1656
            ['simianti_id' =>70215, 'sis_localupz_id' =>80, 'sis_barrio_id' =>161],//1657
            ['simianti_id' =>70168, 'sis_localupz_id' =>80, 'sis_barrio_id' =>731],//1658
            ['simianti_id' =>4528, 'sis_localupz_id' =>80, 'sis_barrio_id' =>732],//1659
            ['simianti_id' =>70222, 'sis_localupz_id' =>80, 'sis_barrio_id' =>733],//1660
            ['simianti_id' =>70178, 'sis_localupz_id' =>80, 'sis_barrio_id' =>734],//1661
            ['simianti_id' =>70293, 'sis_localupz_id' =>80, 'sis_barrio_id' =>735],//1662
            ['simianti_id' =>70313, 'sis_localupz_id' =>80, 'sis_barrio_id' =>736],//1663
            ['simianti_id' =>70317, 'sis_localupz_id' =>80, 'sis_barrio_id' =>678],//1664
            ['simianti_id' =>70326, 'sis_localupz_id' =>80, 'sis_barrio_id' =>737],//1665
            ['simianti_id' =>70001, 'sis_localupz_id' =>80, 'sis_barrio_id' =>738],//1666
            ['simianti_id' =>4628, 'sis_localupz_id' =>80, 'sis_barrio_id' =>451],//1667
            ['simianti_id' =>70300, 'sis_localupz_id' =>80, 'sis_barrio_id' =>739],//1668
            ['simianti_id' =>70340, 'sis_localupz_id' =>80, 'sis_barrio_id' =>102],//1669
            ['simianti_id' =>4598, 'sis_localupz_id' =>80, 'sis_barrio_id' =>740],//1670
            ['simianti_id' =>70348, 'sis_localupz_id' =>80, 'sis_barrio_id' =>741],//1671
            ['simianti_id' =>70362, 'sis_localupz_id' =>80, 'sis_barrio_id' =>690],//1672
            ['simianti_id' =>70372, 'sis_localupz_id' =>80, 'sis_barrio_id' =>742],//1673
            ['simianti_id' =>70036, 'sis_localupz_id' =>81, 'sis_barrio_id' =>743],//1674
            ['simianti_id' =>70008, 'sis_localupz_id' =>81, 'sis_barrio_id' =>744],//1675
            ['simianti_id' =>70037, 'sis_localupz_id' =>81, 'sis_barrio_id' =>629],//1676
            ['simianti_id' =>4634, 'sis_localupz_id' =>81, 'sis_barrio_id' =>745],//1677
            ['simianti_id' =>70057, 'sis_localupz_id' =>81, 'sis_barrio_id' =>746],//1678
            ['simianti_id' =>4631, 'sis_localupz_id' =>81, 'sis_barrio_id' =>747],//1679
            ['simianti_id' =>70082, 'sis_localupz_id' =>81, 'sis_barrio_id' =>429],//1680
            ['simianti_id' =>70090, 'sis_localupz_id' =>81, 'sis_barrio_id' =>640],//1681
            ['simianti_id' =>70090, 'sis_localupz_id' =>81, 'sis_barrio_id' =>748],//1682
            ['simianti_id' =>70093, 'sis_localupz_id' =>81, 'sis_barrio_id' =>749],//1683
            ['simianti_id' =>40069, 'sis_localupz_id' =>81, 'sis_barrio_id' =>750],//1684
            ['simianti_id' =>70254, 'sis_localupz_id' =>81, 'sis_barrio_id' =>415],//1685
            ['simianti_id' =>70157, 'sis_localupz_id' =>81, 'sis_barrio_id' =>751],//1686
            ['simianti_id' =>70138, 'sis_localupz_id' =>81, 'sis_barrio_id' =>752],//1687
            ['simianti_id' =>70181, 'sis_localupz_id' =>81, 'sis_barrio_id' =>753],//1688
            ['simianti_id' =>0, 'sis_localupz_id' =>81, 'sis_barrio_id' =>754],//1689
            ['simianti_id' =>105210, 'sis_localupz_id' =>81, 'sis_barrio_id' =>755],//1690
            ['simianti_id' =>70266, 'sis_localupz_id' =>81, 'sis_barrio_id' =>756],//1691
            ['simianti_id' =>4630, 'sis_localupz_id' =>81, 'sis_barrio_id' =>757],//1692
            ['simianti_id' =>4635, 'sis_localupz_id' =>81, 'sis_barrio_id' =>758],//1693
            ['simianti_id' =>70311, 'sis_localupz_id' =>81, 'sis_barrio_id' =>364],//1694
            ['simianti_id' =>70323, 'sis_localupz_id' =>81, 'sis_barrio_id' =>759],//1695
            ['simianti_id' =>4633, 'sis_localupz_id' =>81, 'sis_barrio_id' =>760],//1696
            ['simianti_id' =>70345, 'sis_localupz_id' =>81, 'sis_barrio_id' =>761],//1697
            ['simianti_id' =>70346, 'sis_localupz_id' =>81, 'sis_barrio_id' =>762],//1698
            ['simianti_id' =>70357, 'sis_localupz_id' =>81, 'sis_barrio_id' =>763],//1699
            ['simianti_id' =>70359, 'sis_localupz_id' =>81, 'sis_barrio_id' =>764],//1700
            ['simianti_id' =>70071, 'sis_localupz_id' =>82, 'sis_barrio_id' =>765],//1701
            ['simianti_id' =>70071, 'sis_localupz_id' =>82, 'sis_barrio_id' =>766],//1702
            ['simianti_id' =>70101, 'sis_localupz_id' =>82, 'sis_barrio_id' =>209],//1703
            ['simianti_id' =>70101, 'sis_localupz_id' =>82, 'sis_barrio_id' =>767],//1704
            ['simianti_id' =>70184, 'sis_localupz_id' =>82, 'sis_barrio_id' =>768],//1705
            ['simianti_id' =>0, 'sis_localupz_id' =>82, 'sis_barrio_id' =>671],//1706
            ['simianti_id' =>70272, 'sis_localupz_id' =>82, 'sis_barrio_id' =>769],//1707
            ['simianti_id' =>70273, 'sis_localupz_id' =>82, 'sis_barrio_id' =>770],//1708
            ['simianti_id' =>4573, 'sis_localupz_id' =>82, 'sis_barrio_id' =>771],//1709
            ['simianti_id' =>80148, 'sis_localupz_id' =>75, 'sis_barrio_id' =>922],//1710
            ['simianti_id' =>80200, 'sis_localupz_id' =>75, 'sis_barrio_id' =>102],//1711
            ['simianti_id' =>80154, 'sis_localupz_id' =>75, 'sis_barrio_id' =>285],//1712
            ['simianti_id' =>4562, 'sis_localupz_id' =>75, 'sis_barrio_id' =>923],//1713
            ['simianti_id' =>6517, 'sis_localupz_id' =>75, 'sis_barrio_id' =>924],//1714
            ['simianti_id' =>80224, 'sis_localupz_id' =>75, 'sis_barrio_id' =>925],//1715
            ['simianti_id' =>80255, 'sis_localupz_id' =>75, 'sis_barrio_id' =>612],//1716
            ['simianti_id' =>80306, 'sis_localupz_id' =>75, 'sis_barrio_id' =>926],//1717
            ['simianti_id' =>80308, 'sis_localupz_id' =>75, 'sis_barrio_id' =>927],//1718
            ['simianti_id' =>80313, 'sis_localupz_id' =>75, 'sis_barrio_id' =>928],//1719
            ['simianti_id' =>80330, 'sis_localupz_id' =>75, 'sis_barrio_id' =>929],//1720
            ['simianti_id' =>80004, 'sis_localupz_id' =>76, 'sis_barrio_id' =>930],//1721
            ['simianti_id' =>0, 'sis_localupz_id' =>76, 'sis_barrio_id' =>931],//1722
            ['simianti_id' =>80038, 'sis_localupz_id' =>76, 'sis_barrio_id' =>932],//1723
            ['simianti_id' =>4537, 'sis_localupz_id' =>76, 'sis_barrio_id' =>933],//1724
            ['simianti_id' =>4535, 'sis_localupz_id' =>76, 'sis_barrio_id' =>934],//1725
            ['simianti_id' =>80081, 'sis_localupz_id' =>76, 'sis_barrio_id' =>935],//1726
            ['simianti_id' =>4559, 'sis_localupz_id' =>76, 'sis_barrio_id' =>936],//1727
            ['simianti_id' =>4557, 'sis_localupz_id' =>76, 'sis_barrio_id' =>937],//1728
            ['simianti_id' =>80149, 'sis_localupz_id' =>76, 'sis_barrio_id' =>102],//1729
            ['simianti_id' =>80265, 'sis_localupz_id' =>76, 'sis_barrio_id' =>285],//1730
            ['simianti_id' =>80216, 'sis_localupz_id' =>76, 'sis_barrio_id' =>938],//1731
            ['simianti_id' =>0, 'sis_localupz_id' =>76, 'sis_barrio_id' =>939],//1732
            ['simianti_id' =>80293, 'sis_localupz_id' =>76, 'sis_barrio_id' =>940],//1733
            ['simianti_id' =>90176, 'sis_localupz_id' =>76, 'sis_barrio_id' =>941],//1734
            ['simianti_id' =>80300, 'sis_localupz_id' =>76, 'sis_barrio_id' =>165],//1735
            ['simianti_id' =>80321, 'sis_localupz_id' =>76, 'sis_barrio_id' =>514],//1736
            ['simianti_id' =>80326, 'sis_localupz_id' =>76, 'sis_barrio_id' =>942],//1737
            ['simianti_id' =>80327, 'sis_localupz_id' =>76, 'sis_barrio_id' =>943],//1738
            ['simianti_id' =>80010, 'sis_localupz_id' =>77, 'sis_barrio_id' =>944],//1739
            ['simianti_id' =>80019, 'sis_localupz_id' =>77, 'sis_barrio_id' =>945],//1740
            ['simianti_id' =>80021, 'sis_localupz_id' =>77, 'sis_barrio_id' =>449],//1741
            ['simianti_id' =>80026, 'sis_localupz_id' =>77, 'sis_barrio_id' =>94],//1742
            ['simianti_id' =>4558, 'sis_localupz_id' =>77, 'sis_barrio_id' =>629],//1743
            ['simianti_id' =>4607, 'sis_localupz_id' =>77, 'sis_barrio_id' =>946],//1744
            ['simianti_id' =>80056, 'sis_localupz_id' =>77, 'sis_barrio_id' =>947],//1745
            ['simianti_id' =>80057, 'sis_localupz_id' =>77, 'sis_barrio_id' =>948],//1746
            ['simianti_id' =>4612, 'sis_localupz_id' =>77, 'sis_barrio_id' =>949],//1747
            ['simianti_id' =>4603, 'sis_localupz_id' =>77, 'sis_barrio_id' =>151],//1748
            ['simianti_id' =>80097, 'sis_localupz_id' =>77, 'sis_barrio_id' =>950],//1749
            ['simianti_id' =>80109, 'sis_localupz_id' =>77, 'sis_barrio_id' =>951],//1750
            ['simianti_id' =>80112, 'sis_localupz_id' =>77, 'sis_barrio_id' =>921],//1751
            ['simianti_id' =>80118, 'sis_localupz_id' =>77, 'sis_barrio_id' =>209],//1752
            ['simianti_id' =>80135, 'sis_localupz_id' =>77, 'sis_barrio_id' =>952],//1753
            ['simianti_id' =>80137, 'sis_localupz_id' =>77, 'sis_barrio_id' =>953],//1754
            ['simianti_id' =>80156, 'sis_localupz_id' =>77, 'sis_barrio_id' =>954],//1755
            ['simianti_id' =>4626, 'sis_localupz_id' =>77, 'sis_barrio_id' =>157],//1756
            ['simianti_id' =>80168, 'sis_localupz_id' =>77, 'sis_barrio_id' =>286],//1757
            ['simianti_id' =>80175, 'sis_localupz_id' =>77, 'sis_barrio_id' =>955],//1758
            ['simianti_id' =>4609, 'sis_localupz_id' =>77, 'sis_barrio_id' =>956],//1759
            ['simianti_id' =>80213, 'sis_localupz_id' =>77, 'sis_barrio_id' =>957],//1760
            ['simianti_id' =>4554, 'sis_localupz_id' =>77, 'sis_barrio_id' =>958],//1761
            ['simianti_id' =>80232, 'sis_localupz_id' =>77, 'sis_barrio_id' =>959],//1762
            ['simianti_id' =>80256, 'sis_localupz_id' =>77, 'sis_barrio_id' =>216],//1763
            ['simianti_id' =>80259, 'sis_localupz_id' =>77, 'sis_barrio_id' =>960],//1764
            ['simianti_id' =>80266, 'sis_localupz_id' =>77, 'sis_barrio_id' =>65],//1765
            ['simianti_id' =>2553, 'sis_localupz_id' =>77, 'sis_barrio_id' =>961],//1766
            ['simianti_id' =>80274, 'sis_localupz_id' =>77, 'sis_barrio_id' =>962],//1767
            ['simianti_id' =>4617, 'sis_localupz_id' =>77, 'sis_barrio_id' =>963],//1768
            ['simianti_id' =>80282, 'sis_localupz_id' =>77, 'sis_barrio_id' =>900],//1769
            ['simianti_id' =>80296, 'sis_localupz_id' =>77, 'sis_barrio_id' =>964],//1770
            ['simianti_id' =>80299, 'sis_localupz_id' =>77, 'sis_barrio_id' =>965],//1771
            ['simianti_id' =>80315, 'sis_localupz_id' =>77, 'sis_barrio_id' =>586],//1772
            ['simianti_id' =>80320, 'sis_localupz_id' =>77, 'sis_barrio_id' =>966],//1773
            ['simianti_id' =>4316, 'sis_localupz_id' =>78, 'sis_barrio_id' =>85],//1774
            ['simianti_id' =>4615, 'sis_localupz_id' =>78, 'sis_barrio_id' =>967],//1775
            ['simianti_id' =>80099, 'sis_localupz_id' =>78, 'sis_barrio_id' =>968],//1776
            ['simianti_id' =>80189, 'sis_localupz_id' =>108, 'sis_barrio_id' =>969],//1777
            ['simianti_id' =>80009, 'sis_localupz_id' =>108, 'sis_barrio_id' =>970],//1778
            ['simianti_id' =>0, 'sis_localupz_id' =>108, 'sis_barrio_id' =>971],//1779
            ['simianti_id' =>6501, 'sis_localupz_id' =>108, 'sis_barrio_id' =>972],//1780
            ['simianti_id' =>80087, 'sis_localupz_id' =>108, 'sis_barrio_id' =>973],//1781
            ['simianti_id' =>80182, 'sis_localupz_id' =>108, 'sis_barrio_id' =>974],//1782
            ['simianti_id' =>6509, 'sis_localupz_id' =>108, 'sis_barrio_id' =>975],//1783
            ['simianti_id' =>6502, 'sis_localupz_id' =>108, 'sis_barrio_id' =>976],//1784
            ['simianti_id' =>80199, 'sis_localupz_id' =>108, 'sis_barrio_id' =>669],//1785
            ['simianti_id' =>80257, 'sis_localupz_id' =>108, 'sis_barrio_id' =>852],//1786
            ['simianti_id' =>0, 'sis_localupz_id' =>108, 'sis_barrio_id' =>977],//1787
            ['simianti_id' =>80022, 'sis_localupz_id' =>108, 'sis_barrio_id' =>978],//1788
            ['simianti_id' =>80009, 'sis_localupz_id' =>108, 'sis_barrio_id' =>979],//1789
            ['simianti_id' =>90015, 'sis_localupz_id' =>105, 'sis_barrio_id' =>1026],//1790
            ['simianti_id' =>6303, 'sis_localupz_id' =>105, 'sis_barrio_id' =>1027],//1791
            ['simianti_id' =>90023, 'sis_localupz_id' =>105, 'sis_barrio_id' =>1028],//1792
            ['simianti_id' =>90129, 'sis_localupz_id' =>105, 'sis_barrio_id' =>1029],//1793
            ['simianti_id' =>6308, 'sis_localupz_id' =>107, 'sis_barrio_id' =>1030],//1794
            ['simianti_id' =>6306, 'sis_localupz_id' =>107, 'sis_barrio_id' =>1031],//1795
            ['simianti_id' =>6307, 'sis_localupz_id' =>107, 'sis_barrio_id' =>551],//1796
            ['simianti_id' =>90081, 'sis_localupz_id' =>107, 'sis_barrio_id' =>1032],//1797
            ['simianti_id' =>90182, 'sis_localupz_id' =>107, 'sis_barrio_id' =>1033],//1798
            ['simianti_id' =>6316, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1034],//1799
            ['simianti_id' =>0, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1035],//1800
            ['simianti_id' =>6302, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1036],//1801
            ['simianti_id' =>90090, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1037],//1802
            ['simianti_id' =>0, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1038],//1803
            ['simianti_id' =>6320, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1039],//1804
            ['simianti_id' =>90144, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1040],//1805
            ['simianti_id' =>0, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1041],//1806
            ['simianti_id' =>90060, 'sis_localupz_id' =>109, 'sis_barrio_id' =>102],//1807
            ['simianti_id' =>90072, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1042],//1808
            ['simianti_id' =>6311, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1043],//1809
            ['simianti_id' =>6312, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1044],//1810
            ['simianti_id' =>6301, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1045],//1811
            ['simianti_id' =>0, 'sis_localupz_id' =>109, 'sis_barrio_id' =>1046],//1812
            ['simianti_id' =>90149, 'sis_localupz_id' =>110, 'sis_barrio_id' =>704],//1813
            ['simianti_id' =>0, 'sis_localupz_id' =>110, 'sis_barrio_id' =>1047],//1814
            ['simianti_id' =>6404, 'sis_localupz_id' =>110, 'sis_barrio_id' =>1048],//1815
            ['simianti_id' =>6403, 'sis_localupz_id' =>110, 'sis_barrio_id' =>359],//1816
            ['simianti_id' =>90171, 'sis_localupz_id' =>110, 'sis_barrio_id' =>195],//1817
            ['simianti_id' =>90010, 'sis_localupz_id' =>112, 'sis_barrio_id' =>1049],//1818
            ['simianti_id' =>100067, 'sis_localupz_id' =>100, 'sis_barrio_id' =>1156],//1819
            ['simianti_id' =>100130, 'sis_localupz_id' =>111, 'sis_barrio_id' =>1157],//1820
            ['simianti_id' =>120066, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1388],//1821
            ['simianti_id' =>7404, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1389],//1822
            ['simianti_id' =>7306, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1390],//1823
            ['simianti_id' =>120002, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1391],//1824
            ['simianti_id' =>0, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1392],//1825
            ['simianti_id' =>7303, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1393],//1826
            ['simianti_id' =>7304, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1394],//1827
            ['simianti_id' =>7402, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1395],//1828
            ['simianti_id' =>7407, 'sis_localupz_id' =>93, 'sis_barrio_id' =>473],//1829
            ['simianti_id' =>7305, 'sis_localupz_id' =>93, 'sis_barrio_id' =>102],//1830
            ['simianti_id' =>7301, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1396],//1831
            ['simianti_id' =>7310, 'sis_localupz_id' =>93, 'sis_barrio_id' =>660],//1832
            ['simianti_id' =>120027, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1397],//1833
            ['simianti_id' =>7307, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1398],//1834
            ['simianti_id' =>7401, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1399],//1835
            ['simianti_id' =>7308, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1400],//1836
            ['simianti_id' =>7312, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1401],//1837
            ['simianti_id' =>7403, 'sis_localupz_id' =>93, 'sis_barrio_id' =>484],//1838
            ['simianti_id' =>7406, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1402],//1839
            ['simianti_id' =>7311, 'sis_localupz_id' =>93, 'sis_barrio_id' =>1403],//1840
            ['simianti_id' =>5104, 'sis_localupz_id' =>98, 'sis_barrio_id' =>951],//1841
            ['simianti_id' =>7201, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1404],//1842
            ['simianti_id' =>7202, 'sis_localupz_id' =>95, 'sis_barrio_id' =>319],//1843
            ['simianti_id' =>7203, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1405],//1844
            ['simianti_id' =>130025, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1406],//1845
            ['simianti_id' =>7208, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1407],//1846
            ['simianti_id' =>7204, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1408],//1847
            ['simianti_id' =>7206, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1409],//1848
            ['simianti_id' =>7209, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1410],//1849
            ['simianti_id' =>7205, 'sis_localupz_id' =>95, 'sis_barrio_id' =>1411],//1850
            ['simianti_id' =>7101, 'sis_localupz_id' =>96, 'sis_barrio_id' =>1412],//1851
            ['simianti_id' =>7102, 'sis_localupz_id' =>96, 'sis_barrio_id' =>1413],//1852
            ['simianti_id' =>6524, 'sis_localupz_id' =>96, 'sis_barrio_id' =>1414],//1853
            ['simianti_id' =>7104, 'sis_localupz_id' =>96, 'sis_barrio_id' =>1415],//1854
            ['simianti_id' =>7107, 'sis_localupz_id' =>96, 'sis_barrio_id' =>790],//1855
            ['simianti_id' =>7106, 'sis_localupz_id' =>96, 'sis_barrio_id' =>1416],//1856
            ['simianti_id' =>7105, 'sis_localupz_id' =>96, 'sis_barrio_id' =>1417],//1857
            ['simianti_id' =>130042, 'sis_localupz_id' =>99, 'sis_barrio_id' =>1418],//1858
            ['simianti_id' =>70221, 'sis_localupz_id' =>101, 'sis_barrio_id' =>1419],//1859
            ['simianti_id' =>5106, 'sis_localupz_id' =>101, 'sis_barrio_id' =>1420],//1860
            ['simianti_id' =>5105, 'sis_localupz_id' =>101, 'sis_barrio_id' =>1421],//1861
            ['simianti_id' =>130047, 'sis_localupz_id' =>101, 'sis_barrio_id' =>1422],//1862
            ['simianti_id' =>5111, 'sis_localupz_id' =>101, 'sis_barrio_id' =>649],//1863
            ['simianti_id' =>5107, 'sis_localupz_id' =>102, 'sis_barrio_id' =>1423],//1864
            ['simianti_id' =>6201, 'sis_localupz_id' =>102, 'sis_barrio_id' =>640],//1865
            ['simianti_id' =>130026, 'sis_localupz_id' =>102, 'sis_barrio_id' =>1424],//1866
            ['simianti_id' =>130013, 'sis_localupz_id' =>102, 'sis_barrio_id' =>1425],//1867
            ['simianti_id' =>6209, 'sis_localupz_id' =>102, 'sis_barrio_id' =>1426],//1868
            ['simianti_id' =>130034, 'sis_localupz_id' =>102, 'sis_barrio_id' =>1427],//1869
            ['simianti_id' =>6217, 'sis_localupz_id' =>104, 'sis_barrio_id' =>1428],//1870
            ['simianti_id' =>6216, 'sis_localupz_id' =>104, 'sis_barrio_id' =>1429],//1871
            ['simianti_id' =>6106, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1432],//1872
            ['simianti_id' =>4102, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1433],//1873
            ['simianti_id' =>4104, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1318],//1874
            ['simianti_id' =>6104, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1434],//1875
            ['simianti_id' =>4110, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1435],//1876
            ['simianti_id' =>6107, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1436],//1877
            ['simianti_id' =>6101, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1437],//1878
            ['simianti_id' =>4101, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1438],//1879
            ['simianti_id' =>6108, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1439],//1880
            ['simianti_id' =>6105, 'sis_localupz_id' =>97, 'sis_barrio_id' =>197],//1881
            ['simianti_id' =>6103, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1440],//1882
            ['simianti_id' =>4103, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1441],//1883
            ['simianti_id' =>6110, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1442],//1884
            ['simianti_id' =>6109, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1443],//1885
            ['simianti_id' =>140016, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1444],//1886
            ['simianti_id' =>0, 'sis_localupz_id' =>97, 'sis_barrio_id' =>1445],//1887
            ['simianti_id' =>6211, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1494],//1888
            ['simianti_id' =>6206, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1495],//1889
            ['simianti_id' =>4207, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1496],//1890
            ['simianti_id' =>6205, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1497],//1891
            ['simianti_id' =>6203, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1498],//1892
            ['simianti_id' =>4208, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1499],//1893
            ['simianti_id' =>4201, 'sis_localupz_id' =>103, 'sis_barrio_id' =>1500],//1894
            ['simianti_id' =>160005, 'sis_localupz_id' =>106, 'sis_barrio_id' =>1501],//1895
            ['simianti_id' =>6218, 'sis_localupz_id' =>106, 'sis_barrio_id' =>1502],//1896
            ['simianti_id' =>6208, 'sis_localupz_id' =>106, 'sis_barrio_id' =>1427],//1897
            ['simianti_id' =>6215, 'sis_localupz_id' =>106, 'sis_barrio_id' =>1503],//1898
            ['simianti_id' =>3110, 'sis_localupz_id' =>89, 'sis_barrio_id' =>1504],//1899
            ['simianti_id' =>3104, 'sis_localupz_id' =>89, 'sis_barrio_id' =>922],//1900
            ['simianti_id' =>3103, 'sis_localupz_id' =>89, 'sis_barrio_id' =>1505],//1901
            ['simianti_id' =>3106, 'sis_localupz_id' =>89, 'sis_barrio_id' =>1506],//1902
            ['simianti_id' =>3105, 'sis_localupz_id' =>89, 'sis_barrio_id' =>1507],//1903
            ['simianti_id' =>3204, 'sis_localupz_id' =>89, 'sis_barrio_id' =>984],//1904
            ['simianti_id' =>3203, 'sis_localupz_id' =>89, 'sis_barrio_id' =>1508],//1905
            ['simianti_id' =>0, 'sis_localupz_id' =>113, 'sis_barrio_id' =>1652],//1906
            ['simianti_id' =>0, 'sis_localupz_id' =>90, 'sis_barrio_id' =>1652],//1907
            ['simianti_id' =>0, 'sis_localupz_id' =>114, 'sis_barrio_id' =>1652],//1908
            ['simianti_id' =>0, 'sis_localupz_id' =>80, 'sis_barrio_id' =>1652],//1909
            ['simianti_id' =>0, 'sis_localupz_id' =>86, 'sis_barrio_id' =>1652],//1910
            ['simianti_id' =>0, 'sis_localupz_id' =>84, 'sis_barrio_id' =>1652],//1911
            ['simianti_id' =>0, 'sis_localupz_id' =>65, 'sis_barrio_id' =>1652],//1912
            ['simianti_id' =>0, 'sis_localupz_id' =>115, 'sis_barrio_id' =>1652],//1913
            ['simianti_id' =>0, 'sis_localupz_id' =>62, 'sis_barrio_id' =>1652],//1914
            ['simianti_id' =>0, 'sis_localupz_id' =>51, 'sis_barrio_id' =>1652],//1915
            ['simianti_id' =>0, 'sis_localupz_id' =>50, 'sis_barrio_id' =>1652],//1916
            ['simianti_id' =>0, 'sis_localupz_id' =>116, 'sis_barrio_id' =>1652],//1917
            ['simianti_id' =>0, 'sis_localupz_id' =>52, 'sis_barrio_id' =>1652],//1918
            ['simianti_id' =>0, 'sis_localupz_id' =>55, 'sis_barrio_id' =>1652],//1919
            ['simianti_id' =>0, 'sis_localupz_id' =>77, 'sis_barrio_id' =>1652],//1920
            ['simianti_id' =>0, 'sis_localupz_id' =>117, 'sis_barrio_id' =>1652],//1921
            ['simianti_id' =>0, 'sis_localupz_id' =>118, 'sis_barrio_id' =>1652],//1922
            ['simianti_id' =>0, 'sis_localupz_id' =>119, 'sis_barrio_id' =>1652],//1923
            ['simianti_id' =>0, 'sis_localupz_id' =>120, 'sis_barrio_id' =>1653],//1924
            ['simianti_id' =>0, 'sis_localupz_id' =>121, 'sis_barrio_id' =>1653],//1925
            ['simianti_id' =>0, 'sis_localupz_id' =>81, 'sis_barrio_id' =>1654],//1926
            ['simianti_id' =>0, 'sis_localupz_id' =>122, 'sis_barrio_id' =>1653],//1927
            ['simianti_id' =>0, 'sis_localupz_id' =>123, 'sis_barrio_id' =>1655],//1928
            ['simianti_id' => 4000011, 'sis_localupz_id' => 124, 'sis_barrio_id' => 1656], // 1929
        ];
        $this->getR($dataxxxx);
    }
}
/*

        ['simianti_id' => 0, 'sis_localupz_id' => 1, 'sis_barrio_id' => 1], // 1
            ['simianti_id' => 0, 'sis_localupz_id' => 1, 'sis_barrio_id' => 2], // 2
            ['simianti_id' => 0, 'sis_localupz_id' => 1, 'sis_barrio_id' => 3], // 3
            ['simianti_id' => 0, 'sis_localupz_id' => 2, 'sis_barrio_id' => 1158], // 4
            ['simianti_id' => 0, 'sis_localupz_id' => 3, 'sis_barrio_id' => 1159], // 5
            ['simianti_id' => 0, 'sis_localupz_id' => 3, 'sis_barrio_id' => 1160], // 6
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 4], // 7
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 5], // 8
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 6], // 9
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 7], // 10
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 8], // 11
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 9], // 12
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 10], // 13
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 11], // 14
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 12], // 15
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 13], // 16
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 14], // 17
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 15], // 18
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 16], // 19
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 17], // 20
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 18], // 21
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 19], // 22
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 20], // 23
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 21], // 24
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 22], // 25
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 23], // 26
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 24], // 27
            ['simianti_id' => 0, 'sis_localupz_id' => 4, 'sis_barrio_id' => 25], // 28
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 26], // 29
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 27], // 30
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 28], // 31
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 29], // 32
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 30], // 33
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 31], // 34
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 32], // 35
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 33], // 36
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 34], // 37
            ['simianti_id' => 0, 'sis_localupz_id' => 5, 'sis_barrio_id' => 35], // 38
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 36], // 39
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 37], // 40
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 38], // 41
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 39], // 42
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 40], // 43
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 41], // 44
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 42], // 45
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 43], // 46
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 44], // 47
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 45], // 48
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 46], // 49
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 47], // 50
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 48], // 51
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 49], // 52
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 50], // 53
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 51], // 54
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 52], // 55
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 53], // 56
            ['simianti_id' => 0, 'sis_localupz_id' => 6, 'sis_barrio_id' => 54], // 57
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 55], // 58
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 56], // 59
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 57], // 60
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 58], // 61
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 59], // 62
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 60], // 63
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 61], // 64
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 62], // 65
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 63], // 66
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 64], // 67
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 65], // 68
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 66], // 69
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 67], // 70
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 68], // 71
            ['simianti_id' => 0, 'sis_localupz_id' => 7, 'sis_barrio_id' => 69], // 72
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 70], // 73
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 71], // 74
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 72], // 75
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 73], // 76
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 74], // 77
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 75], // 78
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 76], // 79
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 77], // 80
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 78], // 81
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 79], // 82
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 80], // 83
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 81], // 84
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 82], // 85
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 83], // 86
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 84], // 87
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 85], // 88
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 86], // 89
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 87], // 90
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 88], // 91
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 89], // 92
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 90], // 93
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 91], // 94
            ['simianti_id' => 0, 'sis_localupz_id' => 8, 'sis_barrio_id' => 92], // 95
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 93], // 96
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 94], // 97
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 95], // 98
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 96], // 99
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 97], // 100
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 98], // 101
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 99], // 102
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 100], // 103
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 101], // 104
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 102], // 105
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 103], // 106
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 104], // 107
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 105], // 108
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 106], // 109
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 107], // 110
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 108], // 111
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 109], // 112
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 110], // 113
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 111], // 114
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 112], // 115
            ['simianti_id' => 0, 'sis_localupz_id' => 9, 'sis_barrio_id' => 113], // 116
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 114], // 117
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 115], // 118
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 116], // 119
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 117], // 120
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 118], // 121
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 119], // 122
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 120], // 123
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 121], // 124
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 122], // 125
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 123], // 126
            ['simianti_id' => 0, 'sis_localupz_id' => 10, 'sis_barrio_id' => 124], // 127
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 125], // 128
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 126], // 129
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 127], // 130
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 128], // 131
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 129], // 132
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 130], // 133
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 131], // 134
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 109], // 135
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 132], // 136
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 133], // 137
            ['simianti_id' => 0, 'sis_localupz_id' => 11, 'sis_barrio_id' => 134], // 138
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1161], // 139
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1162], // 140
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1163], // 141
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1164], // 142
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1165], // 143
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 484], // 144
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1166], // 145
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 897], // 146
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1167], // 147
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1168], // 148
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1169], // 149
            ['simianti_id' => 0, 'sis_localupz_id' => 12, 'sis_barrio_id' => 1170], // 150
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1171], // 151
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1172], // 152
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1173], // 153
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1174], // 154
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1175], // 155
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1176], // 156
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1177], // 157
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1178], // 158
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1179], // 159
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1180], // 160
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1181], // 161
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1182], // 162
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1183], // 163
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1184], // 164
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1185], // 165
            ['simianti_id' => 0, 'sis_localupz_id' => 13, 'sis_barrio_id' => 1186], // 166
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1187], // 167
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1188], // 168
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1189], // 169
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1190], // 170
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1191], // 171
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1192], // 172
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1193], // 173
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1194], // 174
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1195], // 175
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1196], // 176
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1197], // 177
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1198], // 178
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1199], // 179
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1200], // 180
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1201], // 181
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1202], // 182
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1203], // 183
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1204], // 184
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1205], // 185
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1206], // 186
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1046], // 187
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1207], // 188
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1208], // 189
            ['simianti_id' => 0, 'sis_localupz_id' => 14, 'sis_barrio_id' => 1209], // 190
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1210], // 191
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1211], // 192
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1212], // 193
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1213], // 194
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1214], // 195
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1215], // 196
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1216], // 197
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1217], // 198
            ['simianti_id' => 0, 'sis_localupz_id' => 15, 'sis_barrio_id' => 1218], // 199
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1371], // 200
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1372], // 201
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1373], // 202
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1374], // 203
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1375], // 204
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1376], // 205
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1377], // 206
            ['simianti_id' => 0, 'sis_localupz_id' => 16, 'sis_barrio_id' => 1378], // 207
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1379], // 208
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1380], // 209
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1381], // 210
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1382], // 211
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1383], // 212
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1384], // 213
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1065], // 214
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1385], // 215
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1386], // 216
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 364], // 217
            ['simianti_id' => 0, 'sis_localupz_id' => 17, 'sis_barrio_id' => 1387], // 218
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 299], // 219
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 1219], // 220
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 1220], // 221
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 1221], // 222
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 1222], // 223
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 1223], // 224
            ['simianti_id' => 0, 'sis_localupz_id' => 18, 'sis_barrio_id' => 1224], // 225
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1225], // 226
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1226], // 227
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1227], // 228
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1228], // 229
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1229], // 230
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 308], // 231
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1230], // 232
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1231], // 233
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1232], // 234
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1233], // 235
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1234], // 236
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1235], // 237
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1236], // 238
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1237], // 239
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1238], // 240
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1239], // 241
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1240], // 242
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1241], // 243
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1242], // 244
            ['simianti_id' => 0, 'sis_localupz_id' => 19, 'sis_barrio_id' => 1243], // 245
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1244], // 246
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1245], // 247
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1246], // 248
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1247], // 249
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1248], // 250
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1249], // 251
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1250], // 252
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1251], // 253
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1252], // 254
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1253], // 255
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1254], // 256
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1255], // 257
            ['simianti_id' => 0, 'sis_localupz_id' => 20, 'sis_barrio_id' => 1256], // 258
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1050], // 259
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1051], // 260
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1052], // 261
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1053], // 262
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 178], // 263
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1054], // 264
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1055], // 265
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1056], // 266
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1057], // 267
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1058], // 268
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1059], // 269
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 415], // 270
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1060], // 271
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1061], // 272
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1062], // 273
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1063], // 274
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1064], // 275
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1065], // 276
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1066], // 277
            ['simianti_id' => 0, 'sis_localupz_id' => 21, 'sis_barrio_id' => 1067], // 278
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 70], // 279
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 424], // 280
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1257], // 281
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1258], // 282
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1259], // 283
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1260], // 284
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1261], // 285
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1262], // 286
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 807], // 287
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1263], // 288
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1264], // 289
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1265], // 290
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1266], // 291
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1267], // 292
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1268], // 293
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1269], // 294
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1270], // 295
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1271], // 296
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 63], // 297
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1272], // 298
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 257], // 299
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1273], // 300
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1274], // 301
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1275], // 302
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1276], // 303
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1277], // 304
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 545], // 305
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1278], // 306
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1279], // 307
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1280], // 308
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1281], // 309
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1282], // 310
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1283], // 311
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1284], // 312
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1285], // 313
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1286], // 314
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1287], // 315
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1288], // 316
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 586], // 317
            ['simianti_id' => 0, 'sis_localupz_id' => 22, 'sis_barrio_id' => 1289], // 318
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1290], // 319
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1291], // 320
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1292], // 321
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1293], // 322
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1294], // 323
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1295], // 324
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1296], // 325
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 425], // 326
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1297], // 327
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1298], // 328
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 880], // 329
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1299], // 330
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1300], // 331
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1262], // 332
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 410], // 333
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1301], // 334
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1302], // 335
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 988], // 336
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1303], // 337
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1304], // 338
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1305], // 339
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1306], // 340
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1307], // 341
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1308], // 342
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 706], // 343
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1266], // 344
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 639], // 345
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1309], // 346
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 538], // 347
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1310], // 348
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1311], // 349
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1312], // 350
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1313], // 351
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1314], // 352
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1315], // 353
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1316], // 354
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 193], // 355
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 473], // 356
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 812], // 357
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 649], // 358
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1317], // 359
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1318], // 360
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1319], // 361
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1320], // 362
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1321], // 363
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 659], // 364
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1322], // 365
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 545], // 366
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1323], // 367
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 418], // 368
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 33], // 369
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1324], // 370
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1325], // 371
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1326], // 372
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1327], // 373
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1328], // 374
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1329], // 375
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1330], // 376
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1331], // 377
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1332], // 378
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1333], // 379
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1334], // 380
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1335], // 381
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1336], // 382
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 676], // 383
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 364], // 384
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 678], // 385
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1337], // 386
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1338], // 387
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1339], // 388
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1340], // 389
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1341], // 390
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1342], // 391
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 964], // 392
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1343], // 393
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1344], // 394
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1345], // 395
            ['simianti_id' => 0, 'sis_localupz_id' => 23, 'sis_barrio_id' => 1346], // 396
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1068], // 397
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1069], // 398
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1070], // 399
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1071], // 400
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1072], // 401
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1073], // 402
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1074], // 403
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1075], // 404
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1076], // 405
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1077], // 406
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1078], // 407
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1079], // 408
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1080], // 409
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1081], // 410
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1082], // 411
            ['simianti_id' => 0, 'sis_localupz_id' => 24, 'sis_barrio_id' => 1083], // 412
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1084], // 413
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 936], // 414
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 138], // 415
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1012], // 416
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1085], // 417
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1086], // 418
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1087], // 419
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1088], // 420
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1089], // 421
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1090], // 422
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1091], // 423
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1092], // 424
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1093], // 425
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1094], // 426
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1095], // 427
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1096], // 428
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 195], // 429
            ['simianti_id' => 0, 'sis_localupz_id' => 25, 'sis_barrio_id' => 1097], // 430
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 310], // 431
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1098], // 432
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1099], // 433
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1100], // 434
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1101], // 435
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1102], // 436
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1103], // 437
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1104], // 438
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1045], // 439
            ['simianti_id' => 0, 'sis_localupz_id' => 26, 'sis_barrio_id' => 1105], // 440
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 219], // 441
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 220], // 442
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 221], // 443
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 222], // 444
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 223], // 445
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 224], // 446
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 225], // 447
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 226], // 448
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 227], // 449
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 228], // 450
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 229], // 451
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 230], // 452
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 231], // 453
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 232], // 454
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 233], // 455
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 234], // 456
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 235], // 457
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 236], // 458
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 237], // 459
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 238], // 460
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 239], // 461
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 240], // 462
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 241], // 463
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 242], // 464
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 243], // 465
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 244], // 466
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 245], // 467
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 246], // 468
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 157], // 469
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 247], // 470
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 248], // 471
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 249], // 472
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 250], // 473
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 251], // 474
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 252], // 475
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 253], // 476
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 254], // 477
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 255], // 478
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 256], // 479
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 257], // 480
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 258], // 481
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 259], // 482
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 260], // 483
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 261], // 484
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 262], // 485
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 263], // 486
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 264], // 487
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 265], // 488
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 266], // 489
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 267], // 490
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 268], // 491
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 269], // 492
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 270], // 493
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 271], // 494
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 272], // 495
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 273], // 496
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 274], // 497
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 198], // 498
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 275], // 499
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 276], // 500
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 277], // 501
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 278], // 502
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 279], // 503
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 280], // 504
            ['simianti_id' => 0, 'sis_localupz_id' => 27, 'sis_barrio_id' => 218], // 505
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 281], // 506
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 282], // 507
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 283], // 508
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 284], // 509
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 285], // 510
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 286], // 511
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 287], // 512
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 288], // 513
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 289], // 514
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 290], // 515
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 291], // 516
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 292], // 517
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 293], // 518
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 107], // 519
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 294], // 520
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 295], // 521
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 296], // 522
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 297], // 523
            ['simianti_id' => 0, 'sis_localupz_id' => 28, 'sis_barrio_id' => 298], // 524
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 299], // 525
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 300], // 526
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 301], // 527
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 302], // 528
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 303], // 529
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 304], // 530
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 305], // 531
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 306], // 532
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 307], // 533
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 308], // 534
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 309], // 535
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 310], // 536
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 311], // 537
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 312], // 538
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 313], // 539
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 314], // 540
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 315], // 541
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 316], // 542
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 145], // 543
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 317], // 544
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 318], // 545
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 319], // 546
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 320], // 547
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 321], // 548
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 322], // 549
            ['simianti_id' => 0, 'sis_localupz_id' => 29, 'sis_barrio_id' => 323], // 550
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1446], // 551
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1447], // 552
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1448], // 553
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1449], // 554
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1450], // 555
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1451], // 556
            ['simianti_id' => 0, 'sis_localupz_id' => 30, 'sis_barrio_id' => 1452], // 557
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1509], // 558
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1510], // 559
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1511], // 560
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1512], // 561
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1513], // 562
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1514], // 563
            ['simianti_id' => 0, 'sis_localupz_id' => 31, 'sis_barrio_id' => 1515], // 564
            ['simianti_id' => 0, 'sis_localupz_id' => 32, 'sis_barrio_id' => 1430], // 565
            ['simianti_id' => 0, 'sis_localupz_id' => 32, 'sis_barrio_id' => 639], // 566
            ['simianti_id' => 0, 'sis_localupz_id' => 32, 'sis_barrio_id' => 844], // 567
            ['simianti_id' => 0, 'sis_localupz_id' => 32, 'sis_barrio_id' => 1281], // 568
            ['simianti_id' => 0, 'sis_localupz_id' => 32, 'sis_barrio_id' => 1431], // 569
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1453], // 570
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1454], // 571
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1455], // 572
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1456], // 573
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1457], // 574
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 672], // 575
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1458], // 576
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1459], // 577
            ['simianti_id' => 0, 'sis_localupz_id' => 33, 'sis_barrio_id' => 1000], // 578
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1516], // 579
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1517], // 580
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 986], // 581
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1518], // 582
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1519], // 583
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1520], // 584
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1521], // 585
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 737], // 586
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1522], // 587
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1523], // 588
            ['simianti_id' => 0, 'sis_localupz_id' => 34, 'sis_barrio_id' => 1524], // 589
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1460], // 590
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1106], // 591
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1461], // 592
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1462], // 593
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1463], // 594
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1464], // 595
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1465], // 596
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1466], // 597
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1467], // 598
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1468], // 599
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1469], // 600
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1470], // 601
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1471], // 602
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1472], // 603
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1473], // 604
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1474], // 605
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1475], // 606
            ['simianti_id' => 0, 'sis_localupz_id' => 35, 'sis_barrio_id' => 1476], // 607
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1187], // 608
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1477], // 609
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1478], // 610
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1479], // 611
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 666], // 612
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1480], // 613
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1481], // 614
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1363], // 615
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1482], // 616
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1483], // 617
            ['simianti_id' => 0, 'sis_localupz_id' => 36, 'sis_barrio_id' => 1484], // 618
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 599], // 619
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 600], // 620
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 601], // 621
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 602], // 622
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 603], // 623
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 604], // 624
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 605], // 625
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 606], // 626
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 607], // 627
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 608], // 628
            ['simianti_id' => 0, 'sis_localupz_id' => 37, 'sis_barrio_id' => 609], // 629
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 303], // 630
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1485], // 631
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1486], // 632
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1487], // 633
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 911], // 634
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1488], // 635
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1489], // 636
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1490], // 637
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 816], // 638
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1280], // 639
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 106], // 640
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1491], // 641
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1492], // 642
            ['simianti_id' => 0, 'sis_localupz_id' => 38, 'sis_barrio_id' => 1493], // 643
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 772], // 644
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 773], // 645
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 774], // 646
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 775], // 647
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 776], // 648
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 777], // 649
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 778], // 650
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 779], // 651
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 780], // 652
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 781], // 653
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 782], // 654
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 783], // 655
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 784], // 656
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 785], // 657
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 786], // 658
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 787], // 659
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 788], // 660
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 789], // 661
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 790], // 662
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 666], // 663
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 791], // 664
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 792], // 665
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 793], // 666
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 351], // 667
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 794], // 668
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 795], // 669
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 796], // 670
            ['simianti_id' => 0, 'sis_localupz_id' => 39, 'sis_barrio_id' => 797], // 671
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 798], // 672
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 799], // 673
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 800], // 674
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 801], // 675
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 802], // 676
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 803], // 677
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 804], // 678
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 805], // 679
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 806], // 680
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 807], // 681
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 808], // 682
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 573], // 683
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 809], // 684
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 810], // 685
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 811], // 686
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 812], // 687
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 813], // 688
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 814], // 689
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 815], // 690
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 816], // 691
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 817], // 692
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 818], // 693
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 819], // 694
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 820], // 695
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 821], // 696
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 822], // 697
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 823], // 698
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 824], // 699
            ['simianti_id' => 0, 'sis_localupz_id' => 40, 'sis_barrio_id' => 825], // 700
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 826], // 701
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 827], // 702
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 695], // 703
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 828], // 704
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 829], // 705
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 830], // 706
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 831], // 707
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 832], // 708
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 833], // 709
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 834], // 710
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 835], // 711
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 836], // 712
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 837], // 713
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 838], // 714
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 150], // 715
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 839], // 716
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 840], // 717
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 841], // 718
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 842], // 719
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 843], // 720
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 844], // 721
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 845], // 722
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 846], // 723
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 847], // 724
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 848], // 725
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 849], // 726
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 850], // 727
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 851], // 728
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 852], // 729
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 853], // 730
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 854], // 731
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 855], // 732
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 856], // 733
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 857], // 734
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 858], // 735
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 859], // 736
            ['simianti_id' => 0, 'sis_localupz_id' => 41, 'sis_barrio_id' => 860], // 737
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 610], // 738
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 861], // 739
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 862], // 740
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 863], // 741
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 864], // 742
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 865], // 743
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 866], // 744
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 867], // 745
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 868], // 746
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 869], // 747
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 870], // 748
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 871], // 749
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 872], // 750
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 873], // 751
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 874], // 752
            ['simianti_id' => 0, 'sis_localupz_id' => 42, 'sis_barrio_id' => 875], // 753
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 876], // 754
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 877], // 755
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 622], // 756
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 878], // 757
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 879], // 758
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 880], // 759
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 881], // 760
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 882], // 761
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 464], // 762
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 883], // 763
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 429], // 764
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 538], // 765
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 884], // 766
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 885], // 767
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 240], // 768
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 886], // 769
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 887], // 770
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 888], // 771
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 889], // 772
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 890], // 773
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 891], // 774
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 873], // 775
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 892], // 776
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 893], // 777
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 894], // 778
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 895], // 779
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 896], // 780
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 105], // 781
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 164], // 782
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 897], // 783
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 898], // 784
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 899], // 785
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 900], // 786
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 901], // 787
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 902], // 788
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 903], // 789
            ['simianti_id' => 0, 'sis_localupz_id' => 43, 'sis_barrio_id' => 904], // 790
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 614], // 791
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 615], // 792
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 616], // 793
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 617], // 794
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 618], // 795
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 619], // 796
            ['simianti_id' => 0, 'sis_localupz_id' => 44, 'sis_barrio_id' => 620], // 797
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 324], // 798
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 325], // 799
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 326], // 800
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 327], // 801
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 328], // 802
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 329], // 803
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 330], // 804
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 331], // 805
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 283], // 806
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 332], // 807
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 333], // 808
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 334], // 809
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 335], // 810
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 336], // 811
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 337], // 812
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 338], // 813
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 339], // 814
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 340], // 815
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 341], // 816
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 342], // 817
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 343], // 818
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 344], // 819
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 345], // 820
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 346], // 821
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 347], // 822
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 348], // 823
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 349], // 824
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 350], // 825
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 351], // 826
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 352], // 827
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 257], // 828
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 353], // 829
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 354], // 830
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 355], // 831
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 356], // 832
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 357], // 833
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 358], // 834
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 359], // 835
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 360], // 836
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 361], // 837
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 362], // 838
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 363], // 839
            ['simianti_id' => 0, 'sis_localupz_id' => 45, 'sis_barrio_id' => 364], // 840
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 365], // 841
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 366], // 842
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 367], // 843
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 368], // 844
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 369], // 845
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 231], // 846
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 151], // 847
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 370], // 848
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 209], // 849
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 371], // 850
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 372], // 851
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 373], // 852
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 374], // 853
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 375], // 854
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 376], // 855
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 377], // 856
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 378], // 857
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 379], // 858
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 380], // 859
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 381], // 860
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 382], // 861
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 383], // 862
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 384], // 863
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 385], // 864
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 386], // 865
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 387], // 866
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 388], // 867
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 389], // 868
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 390], // 869
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 391], // 870
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 392], // 871
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 393], // 872
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 394], // 873
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 395], // 874
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 396], // 875
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 397], // 876
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 398], // 877
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 399], // 878
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 351], // 879
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 400], // 880
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 401], // 881
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 402], // 882
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 403], // 883
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 166], // 884
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 404], // 885
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 405], // 886
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 406], // 887
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 407], // 888
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 408], // 889
            ['simianti_id' => 0, 'sis_localupz_id' => 46, 'sis_barrio_id' => 409], // 890
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 283], // 891
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 410], // 892
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 411], // 893
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 412], // 894
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 413], // 895
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 414], // 896
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 415], // 897
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 102], // 898
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 416], // 899
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 417], // 900
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 418], // 901
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 419], // 902
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 420], // 903
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 421], // 904
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 422], // 905
            ['simianti_id' => 0, 'sis_localupz_id' => 47, 'sis_barrio_id' => 423], // 906
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1525], // 907
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1526], // 908
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1527], // 909
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1528], // 910
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1529], // 911
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1530], // 912
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1531], // 913
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1532], // 914
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 1533], // 915
            ['simianti_id' => 0, 'sis_localupz_id' => 48, 'sis_barrio_id' => 676], // 916
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1534], // 917
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1535], // 918
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1536], // 919
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1537], // 920
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1538], // 921
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 204], // 922
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1539], // 923
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1540], // 924
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1541], // 925
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1542], // 926
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1543], // 927
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1544], // 928
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 244], // 929
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1545], // 930
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1546], // 931
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1547], // 932
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1548], // 933
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1549], // 934
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1550], // 935
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1551], // 936
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1106], // 937
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1152], // 938
            ['simianti_id' => 0, 'sis_localupz_id' => 49, 'sis_barrio_id' => 1552], // 939
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1553], // 940
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1554], // 941
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1011], // 942
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1555], // 943
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 660], // 944
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1556], // 945
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1557], // 946
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 424], // 947
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 425], // 948
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 426], // 949
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 427], // 950
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 428], // 951
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 429], // 952
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 430], // 953
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 431], // 954
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 432], // 955
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 433], // 956
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 434], // 957
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 435], // 958
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 436], // 959
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 437], // 960
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 438], // 961
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 439], // 962
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 440], // 963
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 441], // 964
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 442], // 965
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 187], // 966
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 443], // 967
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 444], // 968
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 445], // 969
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 446], // 970
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 447], // 971
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 448], // 972
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 449], // 973
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 450], // 974
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 451], // 975
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 452], // 976
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 453], // 977
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 454], // 978
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 455], // 979
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 456], // 980
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 457], // 981
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 458], // 982
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 459], // 983
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 460], // 984
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 461], // 985
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 462], // 986
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 463], // 987
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 464], // 988
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 465], // 989
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 97], // 990
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 466], // 991
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 138], // 992
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 467], // 993
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 468], // 994
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 469], // 995
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 470], // 996
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 471], // 997
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 472], // 998
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 473], // 999
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 415], // 1000
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 102], // 1001
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 474], // 1002
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 475], // 1003
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 476], // 1004
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 477], // 1005
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 478], // 1006
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 479], // 1007
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 480], // 1008
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 481], // 1009
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 482], // 1010
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 483], // 1011
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 484], // 1012
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 318], // 1013
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 485], // 1014
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 486], // 1015
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 487], // 1016
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 488], // 1017
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 319], // 1018
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 489], // 1019
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 490], // 1020
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 491], // 1021
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 492], // 1022
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 493], // 1023
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 494], // 1024
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 495], // 1025
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 496], // 1026
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 497], // 1027
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 498], // 1028
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 499], // 1029
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 500], // 1030
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 501], // 1031
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 502], // 1032
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 503], // 1033
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 504], // 1034
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 505], // 1035
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 506], // 1036
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 507], // 1037
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 508], // 1038
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 509], // 1039
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 510], // 1040
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 511], // 1041
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 512], // 1042
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 513], // 1043
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 514], // 1044
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 515], // 1045
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 516], // 1046
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 517], // 1047
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 518], // 1048
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 519], // 1049
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 351], // 1050
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 520], // 1051
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 521], // 1052
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 522], // 1053
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 523], // 1054
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 524], // 1055
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 525], // 1056
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 526], // 1057
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 527], // 1058
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 528], // 1059
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 529], // 1060
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 530], // 1061
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 531], // 1062
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 532], // 1063
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 533], // 1064
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 534], // 1065
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 535], // 1066
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 536], // 1067
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 537], // 1068
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 538], // 1069
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 539], // 1070
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 540], // 1071
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 541], // 1072
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 542], // 1073
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 543], // 1074
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 544], // 1075
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 286], // 1076
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 545], // 1077
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 248], // 1078
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 546], // 1079
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 547], // 1080
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 548], // 1081
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 549], // 1082
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 550], // 1083
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 551], // 1084
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 552], // 1085
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 553], // 1086
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 554], // 1087
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 555], // 1088
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 556], // 1089
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 557], // 1090
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 558], // 1091
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 559], // 1092
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 560], // 1093
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 561], // 1094
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 562], // 1095
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 563], // 1096
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 564], // 1097
            ['simianti_id' => 0, 'sis_localupz_id' => 53, 'sis_barrio_id' => 565], // 1098
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 566], // 1099
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 567], // 1100
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 568], // 1101
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 569], // 1102
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 151], // 1103
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 570], // 1104
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 571], // 1105
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 572], // 1106
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 573], // 1107
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 574], // 1108
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 575], // 1109
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 576], // 1110
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 577], // 1111
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 578], // 1112
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 579], // 1113
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 580], // 1114
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 581], // 1115
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 582], // 1116
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 583], // 1117
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 584], // 1118
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 585], // 1119
            ['simianti_id' => 0, 'sis_localupz_id' => 54, 'sis_barrio_id' => 586], // 1120
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 425], // 1121
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 453], // 1122
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 587], // 1123
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 588], // 1124
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 589], // 1125
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 590], // 1126
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 591], // 1127
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 592], // 1128
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 593], // 1129
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 594], // 1130
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 595], // 1131
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 568], // 1132
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 596], // 1133
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 412], // 1134
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 597], // 1135
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 598], // 1136
            ['simianti_id' => 0, 'sis_localupz_id' => 56, 'sis_barrio_id' => 285], // 1137
            ['simianti_id' => 0, 'sis_localupz_id' => 57, 'sis_barrio_id' => 610], // 1138
            ['simianti_id' => 0, 'sis_localupz_id' => 57, 'sis_barrio_id' => 611], // 1139
            ['simianti_id' => 0, 'sis_localupz_id' => 57, 'sis_barrio_id' => 612], // 1140
            ['simianti_id' => 0, 'sis_localupz_id' => 57, 'sis_barrio_id' => 613], // 1141
            ['simianti_id' => 0, 'sis_localupz_id' => 58, 'sis_barrio_id' => 1558], // 1142
            ['simianti_id' => 0, 'sis_localupz_id' => 58, 'sis_barrio_id' => 97], // 1143
            ['simianti_id' => 0, 'sis_localupz_id' => 58, 'sis_barrio_id' => 1559], // 1144
            ['simianti_id' => 0, 'sis_localupz_id' => 58, 'sis_barrio_id' => 1560], // 1145
            ['simianti_id' => 0, 'sis_localupz_id' => 58, 'sis_barrio_id' => 1561], // 1146
            ['simianti_id' => 0, 'sis_localupz_id' => 59, 'sis_barrio_id' => 1562], // 1147
            ['simianti_id' => 0, 'sis_localupz_id' => 59, 'sis_barrio_id' => 1563], // 1148
            ['simianti_id' => 0, 'sis_localupz_id' => 59, 'sis_barrio_id' => 1564], // 1149
            ['simianti_id' => 0, 'sis_localupz_id' => 59, 'sis_barrio_id' => 1565], // 1150
            ['simianti_id' => 0, 'sis_localupz_id' => 59, 'sis_barrio_id' => 1566], // 1151
            ['simianti_id' => 0, 'sis_localupz_id' => 59, 'sis_barrio_id' => 1567], // 1152
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1568], // 1153
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1569], // 1154
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 244], // 1155
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1570], // 1156
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1571], // 1157
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1206], // 1158
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1572], // 1159
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1573], // 1160
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1574], // 1161
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1479], // 1162
            ['simianti_id' => 0, 'sis_localupz_id' => 60, 'sis_barrio_id' => 1575], // 1163
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1280], // 1164
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 157], // 1165
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1576], // 1166
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1161], // 1167
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1577], // 1168
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1578], // 1169
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 413], // 1170
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1514], // 1171
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1579], // 1172
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1580], // 1173
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1581], // 1174
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1582], // 1175
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 679], // 1176
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 1583], // 1177
            ['simianti_id' => 0, 'sis_localupz_id' => 61, 'sis_barrio_id' => 640], // 1178
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1584], // 1179
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1585], // 1180
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1586], // 1181
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1587], // 1182
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1588], // 1183
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 461], // 1184
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 150], // 1185
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1589], // 1186
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1590], // 1187
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1591], // 1188
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1592], // 1189
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 209], // 1190
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1593], // 1191
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1594], // 1192
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 193], // 1193
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 415], // 1194
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1595], // 1195
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1596], // 1196
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 250], // 1197
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1597], // 1198
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1598], // 1199
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1599], // 1200
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1600], // 1201
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1350], // 1202
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 7], // 1203
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1146], // 1204
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1601], // 1205
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1602], // 1206
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1603], // 1207
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1604], // 1208
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1605], // 1209
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1207], // 1210
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 929], // 1211
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1606], // 1212
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 75], // 1213
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 980], // 1214
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1050], // 1215
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 283], // 1216
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1607], // 1217
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1608], // 1218
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1609], // 1219
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 204], // 1220
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1610], // 1221
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1611], // 1222
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1612], // 1223
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1613], // 1224
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1614], // 1225
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1615], // 1226
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1616], // 1227
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1617], // 1228
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1618], // 1229
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1619], // 1230
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1620], // 1231
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 671], // 1232
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 291], // 1233
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1621], // 1234
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1622], // 1235
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1623], // 1236
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1624], // 1237
            ['simianti_id' => 0, 'sis_localupz_id' => 63, 'sis_barrio_id' => 1625], // 1238
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1626], // 1239
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1627], // 1240
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1628], // 1241
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1629], // 1242
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1630], // 1243
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1631], // 1244
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1539], // 1245
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 536], // 1246
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1632], // 1247
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 429], // 1248
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1633], // 1249
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1634], // 1250
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1635], // 1251
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1636], // 1252
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1637], // 1253
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1638], // 1254
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1639], // 1255
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1640], // 1256
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1641], // 1257
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1642], // 1258
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 145], // 1259
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1643], // 1260
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1644], // 1261
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1645], // 1262
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 1067], // 1263
            ['simianti_id' => 0, 'sis_localupz_id' => 64, 'sis_barrio_id' => 501], // 1264
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1646], // 1265
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1647], // 1266
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1648], // 1267
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1649], // 1268
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1488], // 1269
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 286], // 1270
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1253], // 1271
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1650], // 1272
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1651], // 1273
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1367], // 1274
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 299], // 1275
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 622], // 1276
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1347], // 1277
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1348], // 1278
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 351], // 1279
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1349], // 1280
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1115], // 1281
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1350], // 1282
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1351], // 1283
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1352], // 1284
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1353], // 1285
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 86], // 1286
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1354], // 1287
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1355], // 1288
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1356], // 1289
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1357], // 1290
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1328], // 1291
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1358], // 1292
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1359], // 1293
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1360], // 1294
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1361], // 1295
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1362], // 1296
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1045], // 1297
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1363], // 1298
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1364], // 1299
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 142], // 1300
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1365], // 1301
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1366], // 1302
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1367], // 1303
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1368], // 1304
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1369], // 1305
            ['simianti_id' => 0, 'sis_localupz_id' => 66, 'sis_barrio_id' => 1370], // 1306
            ['simianti_id' => 0, 'sis_localupz_id' => 67, 'sis_barrio_id' => 1106], // 1307
            ['simianti_id' => 0, 'sis_localupz_id' => 67, 'sis_barrio_id' => 1107], // 1308
            ['simianti_id' => 0, 'sis_localupz_id' => 67, 'sis_barrio_id' => 1108], // 1309
            ['simianti_id' => 0, 'sis_localupz_id' => 67, 'sis_barrio_id' => 1109], // 1310
            ['simianti_id' => 0, 'sis_localupz_id' => 67, 'sis_barrio_id' => 1110], // 1311
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1111], // 1312
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1112], // 1313
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1113], // 1314
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1114], // 1315
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1115], // 1316
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1116], // 1317
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1117], // 1318
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1118], // 1319
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1119], // 1320
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 65], // 1321
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1120], // 1322
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1121], // 1323
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1122], // 1324
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1123], // 1325
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1124], // 1326
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1125], // 1327
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1126], // 1328
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1127], // 1329
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1128], // 1330
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1129], // 1331
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1130], // 1332
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1131], // 1333
            ['simianti_id' => 0, 'sis_localupz_id' => 68, 'sis_barrio_id' => 1132], // 1334
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1133], // 1335
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1134], // 1336
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1115], // 1337
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 207], // 1338
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1135], // 1339
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 706], // 1340
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 573], // 1341
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1136], // 1342
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1137], // 1343
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1138], // 1344
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 415], // 1345
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 102], // 1346
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1139], // 1347
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 724], // 1348
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1140], // 1349
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1141], // 1350
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 248], // 1351
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1142], // 1352
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1143], // 1353
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1144], // 1354
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1145], // 1355
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1146], // 1356
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 445], // 1357
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1147], // 1358
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 22], // 1359
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1119], // 1360
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1148], // 1361
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 490], // 1362
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1149], // 1363
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1150], // 1364
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1151], // 1365
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1152], // 1366
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1153], // 1367
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1154], // 1368
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 1155], // 1369
            ['simianti_id' => 0, 'sis_localupz_id' => 69, 'sis_barrio_id' => 25], // 1370
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 980], // 1371
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 981], // 1372
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 982], // 1373
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 983], // 1374
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 984], // 1375
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 451], // 1376
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 985], // 1377
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 986], // 1378
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 987], // 1379
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 988], // 1380
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 989], // 1381
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 990], // 1382
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 464], // 1383
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 97], // 1384
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 991], // 1385
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 992], // 1386
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 993], // 1387
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 994], // 1388
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 995], // 1389
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 415], // 1390
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 996], // 1391
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 997], // 1392
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 545], // 1393
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 998], // 1394
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 999], // 1395
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1000], // 1396
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1001], // 1397
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1002], // 1398
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 52], // 1399
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1003], // 1400
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1004], // 1401
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 195], // 1402
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1005], // 1403
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1006], // 1404
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1007], // 1405
            ['simianti_id' => 0, 'sis_localupz_id' => 70, 'sis_barrio_id' => 1008], // 1406
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1009], // 1407
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1010], // 1408
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1011], // 1409
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 138], // 1410
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 573], // 1411
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1012], // 1412
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1013], // 1413
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1014], // 1414
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 723], // 1415
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1015], // 1416
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1016], // 1417
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 286], // 1418
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1017], // 1419
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1018], // 1420
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 489], // 1421
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1019], // 1422
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 858], // 1423
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1020], // 1424
            ['simianti_id' => 0, 'sis_localupz_id' => 71, 'sis_barrio_id' => 1021], // 1425
            ['simianti_id' => 0, 'sis_localupz_id' => 72, 'sis_barrio_id' => 1022], // 1426
            ['simianti_id' => 0, 'sis_localupz_id' => 72, 'sis_barrio_id' => 1023], // 1427
            ['simianti_id' => 0, 'sis_localupz_id' => 72, 'sis_barrio_id' => 1024], // 1428
            ['simianti_id' => 0, 'sis_localupz_id' => 72, 'sis_barrio_id' => 1025], // 1429
            ['simianti_id' => 0, 'sis_localupz_id' => 73, 'sis_barrio_id' => 905], // 1430
            ['simianti_id' => 0, 'sis_localupz_id' => 73, 'sis_barrio_id' => 906], // 1431
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 907], // 1432
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 908], // 1433
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 909], // 1434
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 910], // 1435
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 911], // 1436
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 849], // 1437
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 912], // 1438
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 913], // 1439
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 914], // 1440
            ['simianti_id' => 0, 'sis_localupz_id' => 74, 'sis_barrio_id' => 915], // 1441
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 916], // 1442
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 917], // 1443
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 918], // 1444
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 919], // 1445
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 920], // 1446
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 921], // 1447
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 135], // 1448
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 94], // 1449
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 136], // 1450
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 137], // 1451
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 138], // 1452
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 139], // 1453
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 140], // 1454
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 141], // 1455
            ['simianti_id' => 0, 'sis_localupz_id' => 83, 'sis_barrio_id' => 142], // 1456
            ['simianti_id' => 0, 'sis_localupz_id' => 84, 'sis_barrio_id' => 143], // 1457
            ['simianti_id' => 0, 'sis_localupz_id' => 84, 'sis_barrio_id' => 144], // 1458
            ['simianti_id' => 0, 'sis_localupz_id' => 84, 'sis_barrio_id' => 145], // 1459
            ['simianti_id' => '20095', 'sis_localupz_id' => 84, 'sis_barrio_id' => 146], // 1460
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 147], // 1461
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 148], // 1462
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 149], // 1463
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 150], // 1464
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 151], // 1465
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 152], // 1466
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 153], // 1467
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 154], // 1468
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 155], // 1469
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 156], // 1470
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 157], // 1471
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 158], // 1472
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 159], // 1473
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 160], // 1474
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 161], // 1475
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 162], // 1476
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 163], // 1477
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 164], // 1478
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 165], // 1479
            ['simianti_id' => 0, 'sis_localupz_id' => 85, 'sis_barrio_id' => 166], // 1480
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 167], // 1481
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 168], // 1482
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 169], // 1483
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 170], // 1484
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 171], // 1485
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 172], // 1486
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 173], // 1487
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 174], // 1488
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 139], // 1489
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 175], // 1490
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 176], // 1491
            ['simianti_id' => 0, 'sis_localupz_id' => 92, 'sis_barrio_id' => 177], // 1492
            ['simianti_id' => 0, 'sis_localupz_id' => 94, 'sis_barrio_id' => 178], // 1493
            ['simianti_id' => 0, 'sis_localupz_id' => 94, 'sis_barrio_id' => 179], // 1494
            ['simianti_id' => 0, 'sis_localupz_id' => 94, 'sis_barrio_id' => 180], // 1495
            ['simianti_id' => 0, 'sis_localupz_id' => 94, 'sis_barrio_id' => 181], // 1496
            ['simianti_id' => 0, 'sis_localupz_id' => 94, 'sis_barrio_id' => 182], // 1497
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 183], // 1498
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 184], // 1499
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 105], // 1500
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 185], // 1501
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 186], // 1502
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 187], // 1503
            ['simianti_id' => 0, 'sis_localupz_id' => 87, 'sis_barrio_id' => 188], // 1504
            ['simianti_id' => 0, 'sis_localupz_id' => 87, 'sis_barrio_id' => 189], // 1505
            ['simianti_id' => 0, 'sis_localupz_id' => 87, 'sis_barrio_id' => 190], // 1506
            ['simianti_id' => 0, 'sis_localupz_id' => 87, 'sis_barrio_id' => 191], // 1507
            ['simianti_id' => 0, 'sis_localupz_id' => 87, 'sis_barrio_id' => 192], // 1508
            ['simianti_id' => 0, 'sis_localupz_id' => 88, 'sis_barrio_id' => 193], // 1509
            ['simianti_id' => 0, 'sis_localupz_id' => 88, 'sis_barrio_id' => 194], // 1510
            ['simianti_id' => 0, 'sis_localupz_id' => 88, 'sis_barrio_id' => 195], // 1511
            ['simianti_id' => 0, 'sis_localupz_id' => 88, 'sis_barrio_id' => 196], // 1512
            ['simianti_id' => 0, 'sis_localupz_id' => 88, 'sis_barrio_id' => 197], // 1513
            ['simianti_id' => 0, 'sis_localupz_id' => 88, 'sis_barrio_id' => 198], // 1514
            ['simianti_id' => 0, 'sis_localupz_id' => 90, 'sis_barrio_id' => 199], // 1515
            ['simianti_id' => 0, 'sis_localupz_id' => 90, 'sis_barrio_id' => 200], // 1516
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 201], // 1517
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 202], // 1518
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 203], // 1519
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 204], // 1520
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 205], // 1521
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 206], // 1522
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 207], // 1523
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 208], // 1524
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 209], // 1525
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 210], // 1526
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 211], // 1527
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 212], // 1528
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 213], // 1529
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 214], // 1530
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 215], // 1531
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 216], // 1532
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 217], // 1533
            ['simianti_id' => 0, 'sis_localupz_id' => 91, 'sis_barrio_id' => 218], // 1534
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 621], // 1535
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 622], // 1536
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 623], // 1537
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 451], // 1538
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 624], // 1539
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 625], // 1540
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 626], // 1541
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 627], // 1542
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 628], // 1543
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 629], // 1544
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 630], // 1545
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 631], // 1546
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 632], // 1547
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 633], // 1548
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 634], // 1549
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 635], // 1550
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 636], // 1551
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 637], // 1552
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 638], // 1553
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 429], // 1554
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 639], // 1555
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 640], // 1556
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 641], // 1557
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 335], // 1558
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 642], // 1559
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 643], // 1560
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 542], // 1561
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 644], // 1562
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 645], // 1563
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 646], // 1564
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 647], // 1565
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 648], // 1566
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 649], // 1567
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 650], // 1568
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 651], // 1569
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 652], // 1570
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 653], // 1571
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 654], // 1572
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 655], // 1573
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 656], // 1574
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 657], // 1575
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 658], // 1576
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 285], // 1577
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 659], // 1578
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 660], // 1579
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 661], // 1580
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 662], // 1581
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 663], // 1582
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 85], // 1583
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 664], // 1584
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 665], // 1585
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 666], // 1586
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 667], // 1587
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 668], // 1588
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 669], // 1589
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 670], // 1590
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 442], // 1591
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 445], // 1592
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 671], // 1593
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 672], // 1594
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 673], // 1595
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 674], // 1596
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 675], // 1597
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 293], // 1598
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 676], // 1599
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 677], // 1600
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 187], // 1601
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 678], // 1602
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 198], // 1603
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 679], // 1604
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 680], // 1605
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 681], // 1606
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 682], // 1607
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 683], // 1608
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 684], // 1609
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 685], // 1610
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 686], // 1611
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 687], // 1612
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 688], // 1613
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 689], // 1614
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 690], // 1615
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 691], // 1616
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 692], // 1617
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 693], // 1618
            ['simianti_id' => 0, 'sis_localupz_id' => 79, 'sis_barrio_id' => 694], // 1619
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 695], // 1620
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 696], // 1621
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 697], // 1622
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 698], // 1623
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 699], // 1624
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 700], // 1625
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 701], // 1626
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 702], // 1627
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 703], // 1628
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 704], // 1629
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 705], // 1630
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 706], // 1631
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 707], // 1632
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 708], // 1633
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 639], // 1634
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 709], // 1635
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 710], // 1636
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 711], // 1637
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 712], // 1638
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 713], // 1639
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 714], // 1640
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 715], // 1641
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 716], // 1642
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 717], // 1643
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 718], // 1644
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 719], // 1645
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 720], // 1646
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 721], // 1647
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 722], // 1648
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 723], // 1649
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 724], // 1650
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 725], // 1651
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 726], // 1652
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 727], // 1653
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 728], // 1654
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 729], // 1655
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 730], // 1656
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 161], // 1657
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 731], // 1658
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 732], // 1659
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 733], // 1660
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 734], // 1661
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 735], // 1662
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 736], // 1663
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 678], // 1664
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 737], // 1665
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 738], // 1666
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 451], // 1667
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 739], // 1668
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 102], // 1669
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 740], // 1670
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 741], // 1671
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 690], // 1672
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 742], // 1673
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 743], // 1674
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 744], // 1675
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 629], // 1676
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 745], // 1677
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 746], // 1678
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 747], // 1679
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 429], // 1680
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 640], // 1681
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 748], // 1682
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 749], // 1683
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 750], // 1684
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 415], // 1685
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 751], // 1686
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 752], // 1687
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 753], // 1688
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 754], // 1689
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 755], // 1690
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 756], // 1691
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 757], // 1692
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 758], // 1693
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 364], // 1694
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 759], // 1695
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 760], // 1696
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 761], // 1697
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 762], // 1698
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 763], // 1699
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 764], // 1700
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 765], // 1701
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 766], // 1702
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 209], // 1703
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 767], // 1704
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 768], // 1705
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 671], // 1706
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 769], // 1707
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 770], // 1708
            ['simianti_id' => 0, 'sis_localupz_id' => 82, 'sis_barrio_id' => 771], // 1709
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 922], // 1710
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 102], // 1711
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 285], // 1712
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 923], // 1713
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 924], // 1714
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 925], // 1715
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 612], // 1716
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 926], // 1717
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 927], // 1718
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 928], // 1719
            ['simianti_id' => 0, 'sis_localupz_id' => 75, 'sis_barrio_id' => 929], // 1720
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 930], // 1721
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 931], // 1722
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 932], // 1723
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 933], // 1724
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 934], // 1725
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 935], // 1726
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 936], // 1727
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 937], // 1728
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 102], // 1729
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 285], // 1730
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 938], // 1731
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 939], // 1732
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 940], // 1733
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 941], // 1734
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 165], // 1735
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 514], // 1736
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 942], // 1737
            ['simianti_id' => 0, 'sis_localupz_id' => 76, 'sis_barrio_id' => 943], // 1738
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 944], // 1739
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 945], // 1740
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 449], // 1741
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 94], // 1742
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 629], // 1743
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 946], // 1744
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 947], // 1745
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 948], // 1746
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 949], // 1747
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 151], // 1748
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 950], // 1749
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 951], // 1750
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 921], // 1751
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 209], // 1752
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 952], // 1753
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 953], // 1754
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 954], // 1755
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 157], // 1756
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 286], // 1757
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 955], // 1758
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 956], // 1759
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 957], // 1760
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 958], // 1761
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 959], // 1762
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 216], // 1763
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 960], // 1764
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 65], // 1765
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 961], // 1766
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 962], // 1767
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 963], // 1768
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 900], // 1769
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 964], // 1770
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 965], // 1771
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 586], // 1772
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 966], // 1773
            ['simianti_id' => 0, 'sis_localupz_id' => 78, 'sis_barrio_id' => 85], // 1774
            ['simianti_id' => 0, 'sis_localupz_id' => 78, 'sis_barrio_id' => 967], // 1775
            ['simianti_id' => 0, 'sis_localupz_id' => 78, 'sis_barrio_id' => 968], // 1776
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 969], // 1777
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 970], // 1778
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 971], // 1779
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 972], // 1780
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 973], // 1781
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 974], // 1782
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 975], // 1783
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 976], // 1784
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 669], // 1785
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 852], // 1786
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 977], // 1787
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 978], // 1788
            ['simianti_id' => 0, 'sis_localupz_id' => 108, 'sis_barrio_id' => 979], // 1789
            ['simianti_id' => 0, 'sis_localupz_id' => 105, 'sis_barrio_id' => 1026], // 1790
            ['simianti_id' => 0, 'sis_localupz_id' => 105, 'sis_barrio_id' => 1027], // 1791
            ['simianti_id' => 0, 'sis_localupz_id' => 105, 'sis_barrio_id' => 1028], // 1792
            ['simianti_id' => 0, 'sis_localupz_id' => 105, 'sis_barrio_id' => 1029], // 1793
            ['simianti_id' => 0, 'sis_localupz_id' => 107, 'sis_barrio_id' => 1030], // 1794
            ['simianti_id' => 0, 'sis_localupz_id' => 107, 'sis_barrio_id' => 1031], // 1795
            ['simianti_id' => 0, 'sis_localupz_id' => 107, 'sis_barrio_id' => 551], // 1796
            ['simianti_id' => 0, 'sis_localupz_id' => 107, 'sis_barrio_id' => 1032], // 1797
            ['simianti_id' => 0, 'sis_localupz_id' => 107, 'sis_barrio_id' => 1033], // 1798
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1034], // 1799
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1035], // 1800
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1036], // 1801
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1037], // 1802
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1038], // 1803
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1039], // 1804
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1040], // 1805
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1041], // 1806
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 102], // 1807
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1042], // 1808
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1043], // 1809
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1044], // 1810
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1045], // 1811
            ['simianti_id' => 0, 'sis_localupz_id' => 109, 'sis_barrio_id' => 1046], // 1812
            ['simianti_id' => 0, 'sis_localupz_id' => 110, 'sis_barrio_id' => 704], // 1813
            ['simianti_id' => 0, 'sis_localupz_id' => 110, 'sis_barrio_id' => 1047], // 1814
            ['simianti_id' => 0, 'sis_localupz_id' => 110, 'sis_barrio_id' => 1048], // 1815
            ['simianti_id' => 0, 'sis_localupz_id' => 110, 'sis_barrio_id' => 359], // 1816
            ['simianti_id' => 0, 'sis_localupz_id' => 110, 'sis_barrio_id' => 195], // 1817
            ['simianti_id' => 0, 'sis_localupz_id' => 112, 'sis_barrio_id' => 1049], // 1818
            ['simianti_id' => 0, 'sis_localupz_id' => 100, 'sis_barrio_id' => 1156], // 1819
            ['simianti_id' => 0, 'sis_localupz_id' => 111, 'sis_barrio_id' => 1157], // 1820
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1388], // 1821
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1389], // 1822
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1390], // 1823
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1391], // 1824
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1392], // 1825
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1393], // 1826
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1394], // 1827
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1395], // 1828
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 473], // 1829
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 102], // 1830
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1396], // 1831
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 660], // 1832
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1397], // 1833
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1398], // 1834
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1399], // 1835
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1400], // 1836
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1401], // 1837
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 484], // 1838
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1402], // 1839
            ['simianti_id' => 0, 'sis_localupz_id' => 93, 'sis_barrio_id' => 1403], // 1840
            ['simianti_id' => 0, 'sis_localupz_id' => 98, 'sis_barrio_id' => 951], // 1841
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1404], // 1842
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 319], // 1843
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1405], // 1844
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1406], // 1845
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1407], // 1846
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1408], // 1847
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1409], // 1848
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1410], // 1849
            ['simianti_id' => 0, 'sis_localupz_id' => 95, 'sis_barrio_id' => 1411], // 1850
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 1412], // 1851
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 1413], // 1852
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 1414], // 1853
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 1415], // 1854
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 790], // 1855
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 1416], // 1856
            ['simianti_id' => 0, 'sis_localupz_id' => 96, 'sis_barrio_id' => 1417], // 1857
            ['simianti_id' => 0, 'sis_localupz_id' => 99, 'sis_barrio_id' => 1418], // 1858
            ['simianti_id' => 0, 'sis_localupz_id' => 101, 'sis_barrio_id' => 1419], // 1859
            ['simianti_id' => 0, 'sis_localupz_id' => 101, 'sis_barrio_id' => 1420], // 1860
            ['simianti_id' => 0, 'sis_localupz_id' => 101, 'sis_barrio_id' => 1421], // 1861
            ['simianti_id' => 0, 'sis_localupz_id' => 101, 'sis_barrio_id' => 1422], // 1862
            ['simianti_id' => 0, 'sis_localupz_id' => 101, 'sis_barrio_id' => 649], // 1863
            ['simianti_id' => 0, 'sis_localupz_id' => 102, 'sis_barrio_id' => 1423], // 1864
            ['simianti_id' => 0, 'sis_localupz_id' => 102, 'sis_barrio_id' => 640], // 1865
            ['simianti_id' => 0, 'sis_localupz_id' => 102, 'sis_barrio_id' => 1424], // 1866
            ['simianti_id' => 0, 'sis_localupz_id' => 102, 'sis_barrio_id' => 1425], // 1867
            ['simianti_id' => 0, 'sis_localupz_id' => 102, 'sis_barrio_id' => 1426], // 1868
            ['simianti_id' => 0, 'sis_localupz_id' => 102, 'sis_barrio_id' => 1427], // 1869
            ['simianti_id' => 0, 'sis_localupz_id' => 104, 'sis_barrio_id' => 1428], // 1870
            ['simianti_id' => 0, 'sis_localupz_id' => 104, 'sis_barrio_id' => 1429], // 1871
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1432], // 1872
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1433], // 1873
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1318], // 1874
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1434], // 1875
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1435], // 1876
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1436], // 1877
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1437], // 1878
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1438], // 1879
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1439], // 1880
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 197], // 1881
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1440], // 1882
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1441], // 1883
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1442], // 1884
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1443], // 1885
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1444], // 1886
            ['simianti_id' => 0, 'sis_localupz_id' => 97, 'sis_barrio_id' => 1445], // 1887
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1494], // 1888
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1495], // 1889
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1496], // 1890
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1497], // 1891
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1498], // 1892
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1499], // 1893
            ['simianti_id' => 0, 'sis_localupz_id' => 103, 'sis_barrio_id' => 1500], // 1894
            ['simianti_id' => 0, 'sis_localupz_id' => 106, 'sis_barrio_id' => 1501], // 1895
            ['simianti_id' => 0, 'sis_localupz_id' => 106, 'sis_barrio_id' => 1502], // 1896
            ['simianti_id' => 0, 'sis_localupz_id' => 106, 'sis_barrio_id' => 1427], // 1897
            ['simianti_id' => 0, 'sis_localupz_id' => 106, 'sis_barrio_id' => 1503], // 1898
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 1504], // 1899
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 922], // 1900
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 1505], // 1901
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 1506], // 1902
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 1507], // 1903
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 984], // 1904
            ['simianti_id' => 0, 'sis_localupz_id' => 89, 'sis_barrio_id' => 1508], // 1905
            ['simianti_id' => 0, 'sis_localupz_id' => 113, 'sis_barrio_id' => 1652], // 1906
            ['simianti_id' => 0, 'sis_localupz_id' => 90, 'sis_barrio_id' => 1652], // 1907
            ['simianti_id' => 0, 'sis_localupz_id' => 114, 'sis_barrio_id' => 1652], // 1908
            ['simianti_id' => 0, 'sis_localupz_id' => 80, 'sis_barrio_id' => 1652], // 1909
            ['simianti_id' => 0, 'sis_localupz_id' => 86, 'sis_barrio_id' => 1652], // 1910
            ['simianti_id' => 0, 'sis_localupz_id' => 84, 'sis_barrio_id' => 1652], // 1911
            ['simianti_id' => 0, 'sis_localupz_id' => 65, 'sis_barrio_id' => 1652], // 1912
            ['simianti_id' => 0, 'sis_localupz_id' => 115, 'sis_barrio_id' => 1652], // 1913
            ['simianti_id' => 0, 'sis_localupz_id' => 62, 'sis_barrio_id' => 1652], // 1914
            ['simianti_id' => 0, 'sis_localupz_id' => 51, 'sis_barrio_id' => 1652], // 1915
            ['simianti_id' => 0, 'sis_localupz_id' => 50, 'sis_barrio_id' => 1652], // 1916
            ['simianti_id' => 0, 'sis_localupz_id' => 116, 'sis_barrio_id' => 1652], // 1917
            ['simianti_id' => 0, 'sis_localupz_id' => 52, 'sis_barrio_id' => 1652], // 1918
            ['simianti_id' => 0, 'sis_localupz_id' => 55, 'sis_barrio_id' => 1652], // 1919
            ['simianti_id' => 0, 'sis_localupz_id' => 77, 'sis_barrio_id' => 1652], // 1920
            ['simianti_id' => 0, 'sis_localupz_id' => 117, 'sis_barrio_id' => 1652], // 1921
            ['simianti_id' => 0, 'sis_localupz_id' => 118, 'sis_barrio_id' => 1652], // 1922
            ['simianti_id' => 0, 'sis_localupz_id' => 119, 'sis_barrio_id' => 1652], // 1923
            ['simianti_id' => 0, 'sis_localupz_id' => 120, 'sis_barrio_id' => 1653], // 1924
            ['simianti_id' => 0, 'sis_localupz_id' => 121, 'sis_barrio_id' => 1653], // 1925
            ['simianti_id' => 0, 'sis_localupz_id' => 81, 'sis_barrio_id' => 1654], // 1926
            ['simianti_id' => 0, 'sis_localupz_id' => 122, 'sis_barrio_id' => 1653], // 1927
            ['simianti_id' => 0, 'sis_localupz_id' => 123, 'sis_barrio_id' => 1655], // 1928
