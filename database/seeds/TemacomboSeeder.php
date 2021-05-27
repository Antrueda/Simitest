<?php

use App\Models\Temacombo;
use Illuminate\Database\Seeder;

class TemacomboSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        $tema = Temacombo::create(
            [
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'nombre' => strtoupper($dataxxxx['nombrexx']),
                'tema_id' => $dataxxxx['temaidxx'],
                'sis_tcampo_id'=>$dataxxxx['campoxxx']
            ]
        );
        return $tema;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function getCM($dataxxxx)
    {
        return  ['user_crea_id' => 1, 'user_edita_id' => 1, 'simianti_id' => $dataxxxx['simianti']];
    }
    public function run()
    {
        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 1,  'nombrexx' => 'Orden Sucesoral']);
        $tema->parametros()->sync([
            1 => $this->getCM(['simianti' => '']),
            2 => $this->getCM(['simianti' => '']),
            3 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 2,  'nombrexx' => 'Documento Soporte Poliza']);
        $tema->parametros()->sync([
            4 => $this->getCM(['simianti' => '']),
            5 => $this->getCM(['simianti' => '']),
            6 => $this->getCM(['simianti' => '']),
            7 => $this->getCM(['simianti' => '']),
            8 => $this->getCM(['simianti' => '']),
            9 => $this->getCM(['simianti' => '']),
            10 => $this->getCM(['simianti' => '']),
            11 => $this->getCM(['simianti' => '']),
            12 => $this->getCM(['simianti' => '']),
            13 => $this->getCM(['simianti' => '']),
            14 => $this->getCM(['simianti' => '']),
            15 => $this->getCM(['simianti' => '']),
            2494 => $this->getCM(['simianti' => '']),
            2495 => $this->getCM(['simianti' => '']),
            2496 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 3,  'nombrexx' => 'Tipo de Documento']);
        $tema->parametros()->sync([
            16 => $this->getCM(['simianti' => 'RC']),
            17 => $this->getCM(['simianti' => 'NU']),
            18 => $this->getCM(['simianti' => 'TI']),
            19 => $this->getCM(['simianti' => 'CC']),
            142 => $this->getCM(['simianti' => 'CE']),
            143 => $this->getCM(['simianti' => 6]),
            144 => $this->getCM(['simianti' => 8]),
            145 => $this->getCM(['simianti' => 'SD']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 4,  'nombrexx' => 'TIPO TIEMPO']);
        $tema->parametros()->sync([
            1509 => $this->getCM(['simianti' => '']),
            400 => $this->getCM(['simianti' => '']),
            401 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 5,  'nombrexx' => 'AM/PM']);
        $tema->parametros()->sync([
            298 => $this->getCM(['simianti' => '']),
            299 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 6,  'nombrexx' => 'Frecuencia VSI']);
        $tema->parametros()->sync([
            980 => $this->getCM(['simianti' => '']),
            1057 => $this->getCM(['simianti' => '']),
            982 => $this->getCM(['simianti' => '']),
            983 => $this->getCM(['simianti' => '']),
            984 => $this->getCM(['simianti' => '']),
            985 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 7,  'nombrexx' => 'VIOLENCIA DISCRIMINACIÓN']);
        $tema->parametros()->sync([
            664 => $this->getCM(['simianti' => '']),
            665 => $this->getCM(['simianti' => '']),
            956 => $this->getCM(['simianti' => '']),
            957 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 8,  'nombrexx' => 'Frecuencia de Consumo de Alimentos']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 9,  'nombrexx' => 'Alimentos']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 10,  'nombrexx' => 'Acción Plan Alimentario']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 11,  'nombrexx' => 'Sexo']);
        $tema->parametros()->sync([
            20 => $this->getCM(['simianti' => 'M']),
            21 => $this->getCM(['simianti' => 'F']),
            22 => $this->getCM(['simianti' => 'IN']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 12,  'nombrexx' => 'IDENTIDAD DE GÉNERO']);
        $tema->parametros()->sync([
            23 => $this->getCM(['simianti' => 1]),
            24 => $this->getCM(['simianti' => 2]),
            25 => $this->getCM(['simianti' => 3]),
            26 => $this->getCM(['simianti' => 4]),
            27 => $this->getCM(['simianti' => 5]),
            445 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 13,  'nombrexx' => 'Orientación Sexual']);
        $tema->parametros()->sync([
            27 => $this->getCM(['simianti' => 4]),
            29 => $this->getCM(['simianti' => '1']),
            30 => $this->getCM(['simianti' => '2']),
            31 => $this->getCM(['simianti' => '3']),
            445 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 14,  'nombrexx' => 'Pieza Dental']);
        $tema->parametros()->sync([
            33 => $this->getCM(['simianti' => '']),
            34 => $this->getCM(['simianti' => '']),
            35 => $this->getCM(['simianti' => '']),
            36 => $this->getCM(['simianti' => '']),
            37 => $this->getCM(['simianti' => '']),
            38 => $this->getCM(['simianti' => '']),
            39 => $this->getCM(['simianti' => '']),
            40 => $this->getCM(['simianti' => '']),
            41 => $this->getCM(['simianti' => '']),
            42 => $this->getCM(['simianti' => '']),
            43 => $this->getCM(['simianti' => '']),
            44 => $this->getCM(['simianti' => '']),
            45 => $this->getCM(['simianti' => '']),
            46 => $this->getCM(['simianti' => '']),
            47 => $this->getCM(['simianti' => '']),
            48 => $this->getCM(['simianti' => '']),
            49 => $this->getCM(['simianti' => '']),
            50 => $this->getCM(['simianti' => '']),
            51 => $this->getCM(['simianti' => '']),
            52 => $this->getCM(['simianti' => '']),
            53 => $this->getCM(['simianti' => '']),
            54 => $this->getCM(['simianti' => '']),
            55 => $this->getCM(['simianti' => '']),
            56 => $this->getCM(['simianti' => '']),
            57 => $this->getCM(['simianti' => '']),
            58 => $this->getCM(['simianti' => '']),
            59 => $this->getCM(['simianti' => '']),
            60 => $this->getCM(['simianti' => '']),
            61 => $this->getCM(['simianti' => '']),
            62 => $this->getCM(['simianti' => '']),
            63 => $this->getCM(['simianti' => '']),
            64 => $this->getCM(['simianti' => '']),
            65 => $this->getCM(['simianti' => '']),
            66 => $this->getCM(['simianti' => '']),
            67 => $this->getCM(['simianti' => '']),
            68 => $this->getCM(['simianti' => '']),
            69 => $this->getCM(['simianti' => '']),
            70 => $this->getCM(['simianti' => '']),
            71 => $this->getCM(['simianti' => '']),
            72 => $this->getCM(['simianti' => '']),
            73 => $this->getCM(['simianti' => '']),
            74 => $this->getCM(['simianti' => '']),
            75 => $this->getCM(['simianti' => '']),
            76 => $this->getCM(['simianti' => '']),
            77 => $this->getCM(['simianti' => '']),
            78 => $this->getCM(['simianti' => '']),
            79 => $this->getCM(['simianti' => '']),
            80 => $this->getCM(['simianti' => '']),
            81 => $this->getCM(['simianti' => '']),
            82 => $this->getCM(['simianti' => '']),
            83 => $this->getCM(['simianti' => '']),
            84 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 15,  'nombrexx' => 'Superficie Dental']);
        $tema->parametros()->sync([
            85 => $this->getCM(['simianti' => '']),
            86 => $this->getCM(['simianti' => '']),
            87 => $this->getCM(['simianti' => '']),
            88 => $this->getCM(['simianti' => '']),
            89 => $this->getCM(['simianti' => '']),
            90 => $this->getCM(['simianti' => '']),
            91 => $this->getCM(['simianti' => '']),
            92 => $this->getCM(['simianti' => '']),
            93 => $this->getCM(['simianti' => '']),
            94 => $this->getCM(['simianti' => '']),
            95 => $this->getCM(['simianti' => '']),
            96 => $this->getCM(['simianti' => '']),
            97 => $this->getCM(['simianti' => '']),
            98 => $this->getCM(['simianti' => '']),
            99 => $this->getCM(['simianti' => '']),
            100 => $this->getCM(['simianti' => '']),
            101 => $this->getCM(['simianti' => '']),
            102 => $this->getCM(['simianti' => '']),
            103 => $this->getCM(['simianti' => '']),
            104 => $this->getCM(['simianti' => '']),
            105 => $this->getCM(['simianti' => '']),
            106 => $this->getCM(['simianti' => '']),
            107 => $this->getCM(['simianti' => '']),
            108 => $this->getCM(['simianti' => '']),
            109 => $this->getCM(['simianti' => '']),
            110 => $this->getCM(['simianti' => '']),
            111 => $this->getCM(['simianti' => '']),
            112 => $this->getCM(['simianti' => '']),
            113 => $this->getCM(['simianti' => '']),
            114 => $this->getCM(['simianti' => '']),
            115 => $this->getCM(['simianti' => '']),
            116 => $this->getCM(['simianti' => '']),
            117 => $this->getCM(['simianti' => '']),
            118 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 16,  'nombrexx' => 'Diagnostico Dental']);
        $tema->parametros()->sync([
            119 => $this->getCM(['simianti' => '']),
            120 => $this->getCM(['simianti' => '']),
            121 => $this->getCM(['simianti' => '']),
            122 => $this->getCM(['simianti' => '']),
            123 => $this->getCM(['simianti' => '']),
            124 => $this->getCM(['simianti' => '']),
            125 => $this->getCM(['simianti' => '']),
            126 => $this->getCM(['simianti' => '']),
            127 => $this->getCM(['simianti' => '']),
            128 => $this->getCM(['simianti' => '']),
            129 => $this->getCM(['simianti' => '']),
            130 => $this->getCM(['simianti' => '']),
            131 => $this->getCM(['simianti' => '']),
            132 => $this->getCM(['simianti' => '']),
            133 => $this->getCM(['simianti' => '']),
            134 => $this->getCM(['simianti' => '']),
            135 => $this->getCM(['simianti' => '']),
            136 => $this->getCM(['simianti' => '']),
            137 => $this->getCM(['simianti' => '']),
            138 => $this->getCM(['simianti' => '']),
            139 => $this->getCM(['simianti' => '']),
            140 => $this->getCM(['simianti' => '']),
            141 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 17,  'nombrexx' => 'Grupo Sanguíneo']);
        $tema->parametros()->sync([
            146 => $this->getCM(['simianti' => '']),
            147 => $this->getCM(['simianti' => '']),
            148 => $this->getCM(['simianti' => '']),
            149 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 18,  'nombrexx' => 'RH']);
        $tema->parametros()->sync([
            150 => $this->getCM(['simianti' => '']),
            151 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 19,  'nombrexx' => 'Estado Civil']);
        $tema->parametros()->sync([
            152 => $this->getCM(['simianti' => '1']),
            153 => $this->getCM(['simianti' => '2']),
            154 => $this->getCM(['simianti' => '3']),
            155 => $this->getCM(['simianti' => '4']),
            156 => $this->getCM(['simianti' => '']),
            445 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 20,  'nombrexx' => 'Grupo Étnico']);
        $tema->parametros()->sync([
            157 => $this->getCM(['simianti' => 'INDG']),
            158 => $this->getCM(['simianti' => 'ROM']),
            159 => $this->getCM(['simianti' => 'MEST']),
            160 => $this->getCM(['simianti' => 'PALQ']),
            161 => $this->getCM(['simianti' => 'BLNC']),
            162 => $this->getCM(['simianti' => 'RSAN']),
            163 => $this->getCM(['simianti' => 'NEGR']),
            164 => $this->getCM(['simianti' => 'N/A']),
            445 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 21,  'nombrexx' => 'Estado Afiliación']);
        $tema->parametros()->sync([
            165 => $this->getCM(['simianti' => '']),
            166 => $this->getCM(['simianti' => '']),
            167 => $this->getCM(['simianti' => '']),
            1631 => $this->getCM(['simianti' => '']),
            168 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 22,  'nombrexx' => 'Entidad Promotora de Salud']);
        $tema->parametros()->sync([
            169 => $this->getCM(['simianti' => '']),
            170 => $this->getCM(['simianti' => '']),
            171 => $this->getCM(['simianti' => '']),
            172 => $this->getCM(['simianti' => '']),
            173 => $this->getCM(['simianti' => '']),
            174 => $this->getCM(['simianti' => '']),
            175 => $this->getCM(['simianti' => '']),
            176 => $this->getCM(['simianti' => '']),
            177 => $this->getCM(['simianti' => '']),
            178 => $this->getCM(['simianti' => '']),
            179 => $this->getCM(['simianti' => '']),
            180 => $this->getCM(['simianti' => '']),
            181 => $this->getCM(['simianti' => '']),
            182 => $this->getCM(['simianti' => '']),
            183 => $this->getCM(['simianti' => '']),
            184 => $this->getCM(['simianti' => '']),
            185 => $this->getCM(['simianti' => '']),
            186 => $this->getCM(['simianti' => '']),
            187 => $this->getCM(['simianti' => '']),
            188 => $this->getCM(['simianti' => '']),
            189 => $this->getCM(['simianti' => '']),
            190 => $this->getCM(['simianti' => '']),
            191 => $this->getCM(['simianti' => '']),
            192 => $this->getCM(['simianti' => '']),
            193 => $this->getCM(['simianti' => '']),
            194 => $this->getCM(['simianti' => '']),
            195 => $this->getCM(['simianti' => '']),
            196 => $this->getCM(['simianti' => '']),
            197 => $this->getCM(['simianti' => '']),
            198 => $this->getCM(['simianti' => '']),
            199 => $this->getCM(['simianti' => '']),
            200 => $this->getCM(['simianti' => '']),
            201 => $this->getCM(['simianti' => '']),
            202 => $this->getCM(['simianti' => '']),
            203 => $this->getCM(['simianti' => '']),
            204 => $this->getCM(['simianti' => '']),
            205 => $this->getCM(['simianti' => '']),
            206 => $this->getCM(['simianti' => '']),
            207 => $this->getCM(['simianti' => '']),
            208 => $this->getCM(['simianti' => '']),
            209 => $this->getCM(['simianti' => '']),
            210 => $this->getCM(['simianti' => '']),
            211 => $this->getCM(['simianti' => '']),
            212 => $this->getCM(['simianti' => '']),
            213 => $this->getCM(['simianti' => '']),
            214 => $this->getCM(['simianti' => '']),
            215 => $this->getCM(['simianti' => '']),
            216 => $this->getCM(['simianti' => '']),
            217 => $this->getCM(['simianti' => '']),
            218 => $this->getCM(['simianti' => '']),
            219 => $this->getCM(['simianti' => '']),
            220 => $this->getCM(['simianti' => '']),
            221 => $this->getCM(['simianti' => '']),
            222 => $this->getCM(['simianti' => '']),
            223 => $this->getCM(['simianti' => '']),
            224 => $this->getCM(['simianti' => '']),
            225 => $this->getCM(['simianti' => '']),
            226 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 23,  'nombrexx' => 'SI/NO']);
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 24,  'nombrexx' => 'Tipo Discapacidad']);
        $tema->parametros()->sync([
            229 => $this->getCM(['simianti' => '']),
            230 => $this->getCM(['simianti' => '']),
            231 => $this->getCM(['simianti' => '']),
            232 => $this->getCM(['simianti' => '']),
            233 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 25,  'nombrexx' => 'Condicional No Aplica']);
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '']),
            228 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 26,  'nombrexx' => 'Aplicación Sisben']);
        $tema->parametros()->sync([
            236 => $this->getCM(['simianti' => '']),
            237 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 27,  'nombrexx' => 'Método Anticonceptivo']);
        $tema->parametros()->sync([
            238 => $this->getCM(['simianti' => '']),
            239 => $this->getCM(['simianti' => '']),
            240 => $this->getCM(['simianti' => '']),
            241 => $this->getCM(['simianti' => '']),
            242 => $this->getCM(['simianti' => '']),
            243 => $this->getCM(['simianti' => '']),
            244 => $this->getCM(['simianti' => '']),
            245 => $this->getCM(['simianti' => '']),
            2478 => $this->getCM(['simianti' => '']),
            2479 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 28,  'nombrexx' => 'Número Comidas']);
        $tema->parametros()->sync([
            246 => $this->getCM(['simianti' => '']),
            247 => $this->getCM(['simianti' => '']),
            248 => $this->getCM(['simianti' => '']),
            300 => $this->getCM(['simianti' => '']),
            301 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 29,  'nombrexx' => 'Motivo Comidas Diarias']);
        $tema->parametros()->sync([
            249 => $this->getCM(['simianti' => '']),
            250 => $this->getCM(['simianti' => '']),
            251 => $this->getCM(['simianti' => '']),
            252 => $this->getCM(['simianti' => '']),
            253 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 30,  'nombrexx' => 'Tipo Proceso']);
        $tema->parametros()->sync([
            254 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 31,  'nombrexx' => 'Por Qué']);
        $tema->parametros()->sync([
            255 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 32,  'nombrexx' => 'Radio Button sino']);
        $tema->parametros()->sync([
            257 => $this->getCM(['simianti' => '']),
            258 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 33,  'nombrexx' => 'Clase Libreta']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => 'NA']),
            260 => $this->getCM(['simianti' => 'P']),
            261 => $this->getCM(['simianti' => 'LSE']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 34,  'nombrexx' => 'RESIDENCIA RHC']);
        $tema->parametros()->sync([
            262 => $this->getCM(['simianti' => '1']),
            263 => $this->getCM(['simianti' => '2']),
            264 => $this->getCM(['simianti' => '3']),
            265 => $this->getCM(['simianti' => '4']),
            266 => $this->getCM(['simianti' => '5']),
            267 => $this->getCM(['simianti' => '6']),
            509 => $this->getCM(['simianti' => '7']),
            269 => $this->getCM(['simianti' => '8']),
            270 => $this->getCM(['simianti' => '9']),
            271 => $this->getCM(['simianti' => '10']),
            272 => $this->getCM(['simianti' => '11']),
            273 => $this->getCM(['simianti' => '12']),
            274 => $this->getCM(['simianti' => '13']),
            275 => $this->getCM(['simianti' => '14']),
            276 => $this->getCM(['simianti' => '16']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 35,  'nombrexx' => 'La Residencia es']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => 'N/A1']),
            278 => $this->getCM(['simianti' => 'PR']),
            279 => $this->getCM(['simianti' => 'AR']),
            280 => $this->getCM(['simianti' => '3']),
            281 => $this->getCM(['simianti' => '4']),
            282 => $this->getCM(['simianti' => 'FM']),
            283 => $this->getCM(['simianti' => '6']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 36,  'nombrexx' => 'Tipo Dirección']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => '3']),
            285 => $this->getCM(['simianti' => '1']),
            286 => $this->getCM(['simianti' => '2']),
        ]);
        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 37,  'nombrexx' => 'Zona Donde Vive']);
        $tema->parametros()->sync([
            287 => $this->getCM(['simianti' => 'UR']),
            288 => $this->getCM(['simianti' => 'RR']),
            289 => $this->getCM(['simianti' => 'SI']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 38,  'nombrexx' => 'Cuadrante']);
        $tema->parametros()->sync([
            290 => $this->getCM(['simianti' => 'ESTE']),
            291 => $this->getCM(['simianti' => 'SUR']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 39,  'nombrexx' => 'Alfabeto']);
        $tema->parametros()->sync([
            89 => $this->getCM(['simianti' => '']),
            93 => $this->getCM(['simianti' => '']),
            138 => $this->getCM(['simianti' => '']),
            149 => $this->getCM(['simianti' => '']),
            146 => $this->getCM(['simianti' => '']),
            147 => $this->getCM(['simianti' => '']),
            294 => $this->getCM(['simianti' => '']),
            462 => $this->getCM(['simianti' => '']),
            85 => $this->getCM(['simianti' => '']),
            701 => $this->getCM(['simianti' => '']),
            743 => $this->getCM(['simianti' => '']),
            744 => $this->getCM(['simianti' => '']),
            745 => $this->getCM(['simianti' => '']),
            746 => $this->getCM(['simianti' => '']),
            747 => $this->getCM(['simianti' => '']),
            748 => $this->getCM(['simianti' => '']),
            749 => $this->getCM(['simianti' => '']),
            750 => $this->getCM(['simianti' => '']),
            751 => $this->getCM(['simianti' => '']),
            752 => $this->getCM(['simianti' => '']),
            753 => $this->getCM(['simianti' => '']),
            754 => $this->getCM(['simianti' => '']),
            755 => $this->getCM(['simianti' => '']),
            756 => $this->getCM(['simianti' => '']),
            757 => $this->getCM(['simianti' => '']),
            758 => $this->getCM(['simianti' => '']),
            759 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 40,  'nombrexx' => 'Bis']);
        $tema->parametros()->sync([
            296 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 41,  'nombrexx' => 'Estrato Socioeconómico']);
        $tema->parametros()->sync([
            27 => $this->getCM(['simianti' => '8']),
            246 => $this->getCM(['simianti' => '1']),
            247 => $this->getCM(['simianti' => '2']),
            248 => $this->getCM(['simianti' => '3']),
            300 => $this->getCM(['simianti' => '4']),
            301 => $this->getCM(['simianti' => '5']),
            302 => $this->getCM(['simianti' => '6']),
            303 => $this->getCM(['simianti' => '7']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 42,  'nombrexx' => 'Condiciones del Ambiente']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '12']),
            305 => $this->getCM(['simianti' => '1']),
            306 => $this->getCM(['simianti' => '2']),
            307 => $this->getCM(['simianti' => '3']),
            308 => $this->getCM(['simianti' => '4']),
            309 => $this->getCM(['simianti' => '5']),
            310 => $this->getCM(['simianti' => '6']),
            311 => $this->getCM(['simianti' => '7']),
            312 => $this->getCM(['simianti' => '8']),
            313 => $this->getCM(['simianti' => '9']),
            314 => $this->getCM(['simianti' => '10']),
            315 => $this->getCM(['simianti' => '11']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 43,  'nombrexx' => 'Eventos médicos']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            318 => $this->getCM(['simianti' => '']),
            319 => $this->getCM(['simianti' => '']),
            320 => $this->getCM(['simianti' => '']),
            321 => $this->getCM(['simianti' => '']),
            322 => $this->getCM(['simianti' => '']),
            323 => $this->getCM(['simianti' => '']),
            324 => $this->getCM(['simianti' => '']),
            325 => $this->getCM(['simianti' => '']),
            326 => $this->getCM(['simianti' => '']),
            327 => $this->getCM(['simianti' => '']),
            328 => $this->getCM(['simianti' => '']),
            329 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 44,  'nombrexx' => 'Tipo Teléfono']);
        $tema->parametros()->sync([
            330 => $this->getCM(['simianti' => '']),
            331 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 45,  'nombrexx' => 'Motivo PARD']);
        $tema->parametros()->sync([
            332 => $this->getCM(['simianti' => '']),
            334 => $this->getCM(['simianti' => '']),
            335 => $this->getCM(['simianti' => '']),
            336 => $this->getCM(['simianti' => '']),
            337 => $this->getCM(['simianti' => '']),
            338 => $this->getCM(['simianti' => '']),
            339 => $this->getCM(['simianti' => '']),
            340 => $this->getCM(['simianti' => '']),
            341 => $this->getCM(['simianti' => '']),
            342 => $this->getCM(['simianti' => '']),
            343 => $this->getCM(['simianti' => '']),
            344 => $this->getCM(['simianti' => '']),
            345 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 46,  'nombrexx' => 'motivo vinculacion SRPA']);
        $tema->parametros()->sync([
            346 => $this->getCM(['simianti' => '']),
            347 => $this->getCM(['simianti' => '']),
            348 => $this->getCM(['simianti' => '']),
            349 => $this->getCM(['simianti' => '']),
            350 => $this->getCM(['simianti' => '']),
            351 => $this->getCM(['simianti' => '']),
            352 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 47,  'nombrexx' => 'medida pedagogica SRPA']);
        $tema->parametros()->sync([
            354 => $this->getCM(['simianti' => '']),
            355 => $this->getCM(['simianti' => '']),
            356 => $this->getCM(['simianti' => '']),
            357 => $this->getCM(['simianti' => '']),
            358 => $this->getCM(['simianti' => '']),
            359 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 48,  'nombrexx' => 'Motivo de la vinculación al SRPA']);
        $tema->parametros()->sync([
            346 => $this->getCM(['simianti' => '']),
            347 => $this->getCM(['simianti' => '']),
            348 => $this->getCM(['simianti' => '']),
            349 => $this->getCM(['simianti' => '']),
            350 => $this->getCM(['simianti' => '']),
            351 => $this->getCM(['simianti' => '']),
            352 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 49,  'nombrexx' => 'sanciones SPOA']);
        $tema->parametros()->sync([
            362 => $this->getCM(['simianti' => '']),
            364 => $this->getCM(['simianti' => '']),
            2475 => $this->getCM(['simianti' => '']),
            2474 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 50,  'nombrexx' => 'CAUSAS VINCUALCIÓN DELINCUENCIA']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 51,  'nombrexx' => 'Lugar PARD']);
        $tema->parametros()->sync([
            371 => $this->getCM(['simianti' => '']),
            372 => $this->getCM(['simianti' => '']),
            373 => $this->getCM(['simianti' => '']),
            374 => $this->getCM(['simianti' => '']),
            375 => $this->getCM(['simianti' => '']),
            378 => $this->getCM(['simianti' => '']),
            379 => $this->getCM(['simianti' => '']),
            380 => $this->getCM(['simianti' => '']),
            390 => $this->getCM(['simianti' => '']),
            391 => $this->getCM(['simianti' => '']),
            392 => $this->getCM(['simianti' => '']),
            393 => $this->getCM(['simianti' => '']),
            394 => $this->getCM(['simianti' => '']),
            395 => $this->getCM(['simianti' => '']),
            396 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 52,  'nombrexx' => 'NIVEL DE AVANCE']);
        $tema->parametros()->sync([
            512 => $this->getCM(['simianti' => '']),
            514 => $this->getCM(['simianti' => '']),
            559 => $this->getCM(['simianti' => '']),
            1688 => $this->getCM(['simianti' => '']),
        ]);;

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 53,  'nombrexx' => 'Sustancia Psicoactiva']);
        $tema->parametros()->sync([
            402 => $this->getCM(['simianti' => '2']),
            403 => $this->getCM(['simianti' => '1']),
            404 => $this->getCM(['simianti' => '5']),
            405 => $this->getCM(['simianti' => '6']),
            406 => $this->getCM(['simianti' => '3']),
            760 => $this->getCM(['simianti' => '7']),
            1606 => $this->getCM(['simianti' => '9']),
            1603 => $this->getCM(['simianti' => '25']),
            1613 => $this->getCM(['simianti' => '28']),
            1617 => $this->getCM(['simianti' => '10']),
            1618 => $this->getCM(['simianti' => '16']),
            1621 => $this->getCM(['simianti' => '18']),
            2461 => $this->getCM(['simianti' => '31']),
            2462 => $this->getCM(['simianti' => '32']),
            2463 => $this->getCM(['simianti' => '33']),
            2464 => $this->getCM(['simianti' => '34']),
            2465 => $this->getCM(['simianti' => '35']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 54,  'nombrexx' => 'Frecuencia Uso Sustancia']);
        $tema->parametros()->sync([
            429 => $this->getCM(['simianti' => '']),
            430 => $this->getCM(['simianti' => '']),
            431 => $this->getCM(['simianti' => '']),
            432 => $this->getCM(['simianti' => '']),
            433 => $this->getCM(['simianti' => '']),
            434 => $this->getCM(['simianti' => '']),
            435 => $this->getCM(['simianti' => '']),
            436 => $this->getCM(['simianti' => '']),
            437 => $this->getCM(['simianti' => '']),
            438 => $this->getCM(['simianti' => '']),
            439 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 55,  'nombrexx' => 'Via Administracion']);
        $tema->parametros()->sync([
            439 => $this->getCM(['simianti' => '']),
            440 => $this->getCM(['simianti' => '']),
            441 => $this->getCM(['simianti' => '']),
            442 => $this->getCM(['simianti' => '']),
            443 => $this->getCM(['simianti' => '']),
            444 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 56,  'nombrexx' => 'Plano Afectacion']);
        $tema->parametros()->sync([
            446 => $this->getCM(['simianti' => '']),
            447 => $this->getCM(['simianti' => '']),
            448 => $this->getCM(['simianti' => '']),
            449 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 57,  'nombrexx' => 'condiciones especiales']);
        $tema->parametros()->sync([
            450 => $this->getCM(['simianti' => '']),
            451 => $this->getCM(['simianti' => '']),
            452 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
            454 => $this->getCM(['simianti' => '']),
            936 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 58,  'nombrexx' => 'RIESGO ESCNNA']);
        $tema->parametros()->sync([
            472 => $this->getCM(['simianti' => '']),
            473 => $this->getCM(['simianti' => '']),
            474 => $this->getCM(['simianti' => '']),
            475 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 59,  'nombrexx' => 'BENEFICIOS']);
        $tema->parametros()->sync([
            498 => $this->getCM(['simianti' => '']),
            557 => $this->getCM(['simianti' => '']),
            773 => $this->getCM(['simianti' => '']),
            774 => $this->getCM(['simianti' => '']),
            775 => $this->getCM(['simianti' => '']),
            1625 => $this->getCM(['simianti' => '']),
            1626 => $this->getCM(['simianti' => '']),
            1627 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 60,  'nombrexx' => 'SITUACIÓN MILITAR']);
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '']),
            228 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
            562 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 61,  'nombrexx' => 'POBLACIÓN INDÍGENA']);
        $poblacio = [
            565 => $this->getCM(['simianti' => '']),
            648 => $this->getCM(['simianti' => '']),
            649 => $this->getCM(['simianti' => '']),
            652 => $this->getCM(['simianti' => '']),
            653 => $this->getCM(['simianti' => '']),
            654 => $this->getCM(['simianti' => '']),
            692 => $this->getCM(['simianti' => '']),
            693 => $this->getCM(['simianti' => '']),
            694 => $this->getCM(['simianti' => '']),
            695 => $this->getCM(['simianti' => '']),
            2456 => $this->getCM(['simianti' => '']),
        ];
        for ($i = 2355; $i <= 2448; $i++) {
            $poblacio[$i] = $this->getCM(['simianti' => '']);
        }
        $tema->parametros()->sync($poblacio);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 62,  'nombrexx' => 'TIPO VIA PRINCIPAL']);
        $tema->parametros()->sync([
            276 => $this->getCM(['simianti' => 'CL']),
            736 => $this->getCM(['simianti' => 'AV']),
            737 => $this->getCM(['simianti' => 'KR']),
            739 => $this->getCM(['simianti' => 'AC']),
            740 => $this->getCM(['simianti' => 'TV']),
            741 => $this->getCM(['simianti' => 'AK']),
            742 => $this->getCM(['simianti' => 'DG']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 63,  'nombrexx' => 'MOTIVO VINCULACION IDIPRON']);
        $tema->parametros()->sync([

            761 => $this->getCM(['simianti' => '']),
            762 => $this->getCM(['simianti' => '']),
            763 => $this->getCM(['simianti' => '']),
            764 => $this->getCM(['simianti' => '']),
            765 => $this->getCM(['simianti' => '']),
            766 => $this->getCM(['simianti' => '']),
            767 => $this->getCM(['simianti' => '']),
            768 => $this->getCM(['simianti' => '']),
            769 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 64,  'nombrexx' => 'REPRESENTACION LEGAL']);
        $tema->parametros()->sync([
            770 => $this->getCM(['simianti' => '']),
            771 => $this->getCM(['simianti' => '']),
            772 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 65,  'nombrexx' => 'MODALIDAD']);
        $tema->parametros()->sync([
            773 => $this->getCM(['simianti' => '']),
            774 => $this->getCM(['simianti' => '']),
            775 => $this->getCM(['simianti' => '']),
            1487 => $this->getCM(['simianti' => '']),
            1668 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 66,  'nombrexx' => 'CONVENCION B, PARENTESCO O PERSONA']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => '']),
            600 => $this->getCM(['simianti' => '']),
            770 => $this->getCM(['simianti' => '']),
            771 => $this->getCM(['simianti' => '']),
            776 => $this->getCM(['simianti' => '']),
            777 => $this->getCM(['simianti' => '']),
            778 => $this->getCM(['simianti' => '']),
            779 => $this->getCM(['simianti' => '']),
            780 => $this->getCM(['simianti' => '']),
            781 => $this->getCM(['simianti' => '']),
            782 => $this->getCM(['simianti' => '']),
            783 => $this->getCM(['simianti' => '']),
            784 => $this->getCM(['simianti' => '']),
            785 => $this->getCM(['simianti' => '']),
            786 => $this->getCM(['simianti' => '']),
            787 => $this->getCM(['simianti' => '']),
            788 => $this->getCM(['simianti' => '']),
            789 => $this->getCM(['simianti' => '']),
            790 => $this->getCM(['simianti' => '']),
            791 => $this->getCM(['simianti' => '']),
            792 => $this->getCM(['simianti' => '']),
            793 => $this->getCM(['simianti' => '']),
            794 => $this->getCM(['simianti' => '']),
            795 => $this->getCM(['simianti' => '']),
            796 => $this->getCM(['simianti' => '']),
            797 => $this->getCM(['simianti' => '']),
            798 => $this->getCM(['simianti' => '']),
            799 => $this->getCM(['simianti' => '']),
            800 => $this->getCM(['simianti' => '']),
            801 => $this->getCM(['simianti' => '']),
            802 => $this->getCM(['simianti' => '']),
            803 => $this->getCM(['simianti' => '']),
            805 => $this->getCM(['simianti' => '']),
            808 => $this->getCM(['simianti' => '']),
            809 => $this->getCM(['simianti' => '']),
            810 => $this->getCM(['simianti' => '']),
            1479 => $this->getCM(['simianti' => '']),
            1480 => $this->getCM(['simianti' => '']),

        ]);
        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 67,  'nombrexx' => 'CSD - RÉGIMEN ESPECIAL EN SALUD']);
        $tema->parametros()->sync([
            201  => $this->getCM(['simianti' => '']),
            1746 => $this->getCM(['simianti' => '']),
            1747 => $this->getCM(['simianti' => '']),
            1748 => $this->getCM(['simianti' => '']),
            1749 => $this->getCM(['simianti' => '']),
            343  => $this->getCM(['simianti' => '']),
            1750 => $this->getCM(['simianti' => '']),
            1751 => $this->getCM(['simianti' => '']),
            1752 => $this->getCM(['simianti' => '']),
            1753 => $this->getCM(['simianti' => '']),
            1754 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 68,  'nombrexx' => 'CSD - RÉGIMEN VINCULADO']);
        $tema->parametros()->sync([
            1755 => $this->getCM(['simianti' => '']),
            1756 => $this->getCM(['simianti' => '']),
            1757 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 69,  'nombrexx' => 'ÚLTIMO GRADO CSD']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 70,  'nombrexx' => 'Presenta dificultades para acceder a alguna red de apoyo? VI']);
        $tema->parametros()->sync([
            447 => $this->getCM(['simianti' => '']),
            805 => $this->getCM(['simianti' => '']),
            2457 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 71,  'nombrexx' => 'Motivos de restricción de acceso a espacios, servicio o redes de apoyo VI']);
        $tema->parametros()->sync([
            955 => $this->getCM(['simianti' => '']),
            953 => $this->getCM(['simianti' => '']),
            295 => $this->getCM(['simianti' => '']),
            292 => $this->getCM(['simianti' => '']),
            297 => $this->getCM(['simianti' => '']),
            293 => $this->getCM(['simianti' => '']),
            1038 => $this->getCM(['simianti' => '']),
            1400 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 72,  'nombrexx' => 'Motivos por el cual se presenta la restricción']);
        $tema->parametros()->sync([
            32  => $this->getCM(['simianti' => '']),
            115 => $this->getCM(['simianti' => '']),
            139 => $this->getCM(['simianti' => '']),
            571 => $this->getCM(['simianti' => '']),
            258 => $this->getCM(['simianti' => '']),
            292 => $this->getCM(['simianti' => '']),
            293 => $this->getCM(['simianti' => '']),
            1803 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 73,  'nombrexx' => 'CONVENCIÓN A']);
        $tema->parametros()->sync([
            567 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 74,  'nombrexx' => 'QUÉ PERSONA(S) PARECEN PRODUCIR O EMPEORAR ESTAS DIFICULTADES']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 75,  'nombrexx' => 'TIEMPO AL DIA']);
        $tema->parametros()->sync([
            485 => $this->getCM(['simianti' => '']),
            486 => $this->getCM(['simianti' => '']),
            492 => $this->getCM(['simianti' => '']),
            529 => $this->getCM(['simianti' => '']),
            529 => $this->getCM(['simianti' => '']),
            529 => $this->getCM(['simianti' => '']),
            530 => $this->getCM(['simianti' => '']),
            531 => $this->getCM(['simianti' => '']),
            532 => $this->getCM(['simianti' => '']),
            533 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 76,  'nombrexx' => 'DIAS SEMANA CANTIDAD']);
        $tema->parametros()->sync([
            487 => $this->getCM(['simianti' => '']),
            490 => $this->getCM(['simianti' => '']),
            491 => $this->getCM(['simianti' => '']),
            515 => $this->getCM(['simianti' => '']),
            516 => $this->getCM(['simianti' => '']),
            517 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 77,  'nombrexx' => 'ACTIVIDADES REALIZADAS']);
        $tema->parametros()->sync([
            488 => $this->getCM(['simianti' => '']),
            489 => $this->getCM(['simianti' => '']),
            1581 => $this->getCM(['simianti' => '']),
            1582 => $this->getCM(['simianti' => '']),
            1583 => $this->getCM(['simianti' => '']),
            1584 => $this->getCM(['simianti' => '']),
            1585 => $this->getCM(['simianti' => '']),
            1586 => $this->getCM(['simianti' => '']),
            1587 => $this->getCM(['simianti' => '']),
            1588 => $this->getCM(['simianti' => '']),
            1589 => $this->getCM(['simianti' => '']),
            1590 => $this->getCM(['simianti' => '']),
            1591 => $this->getCM(['simianti' => '']),
            1592 => $this->getCM(['simianti' => '']),
            2337 => $this->getCM(['simianti' => '']),
            2354 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 78,  'nombrexx' => 'RELIGION QUE PROFESA']);
        $tema->parametros()->sync([
            494 => $this->getCM(['simianti' => '']),
            1513 => $this->getCM(['simianti' => '']),
            1514 => $this->getCM(['simianti' => '']),
            1515 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 79,  'nombrexx' => 'SACRAMENTOS REALIZADOS']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            495 => $this->getCM(['simianti' => '']),
            1623 => $this->getCM(['simianti' => '']),
            1624 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 80,  'nombrexx' => 'PROCESOS']);
        $tema->parametros()->sync([
            496 => $this->getCM(['simianti' => '']),
            497 => $this->getCM(['simianti' => '']),
            498 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 81,  'nombrexx' => 'TALLA PANTALON']);
        $tema->parametros()->sync([
            46 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 82,  'nombrexx' => 'TALLA CAMISA']);
        $tema->parametros()->sync([
            300 => $this->getCM(['simianti' => '']),
            302 => $this->getCM(['simianti' => '']),
            518 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 83,  'nombrexx' => 'TALLA ZAPATOS']);
        $tema->parametros()->sync([
            46 => $this->getCM(['simianti' => '']),
            47 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 84,  'nombrexx' => 'AÑO PRESTACION SERVICIO']);
        $tema->parametros()->sync([
            541 => $this->getCM(['simianti' => '']),
            542 => $this->getCM(['simianti' => '']),
            543 => $this->getCM(['simianti' => '']),
            544 => $this->getCM(['simianti' => '']),
            545 => $this->getCM(['simianti' => '']),
            549 => $this->getCM(['simianti' => '']),
            550 => $this->getCM(['simianti' => '']),
            2283 => $this->getCM(['simianti' => '']),
            2279 => $this->getCM(['simianti' => '']),
            2314 => $this->getCM(['simianti' => '']),
            2299 => $this->getCM(['simianti' => '']),
            2311 => $this->getCM(['simianti' => '']),
            2449 => $this->getCM(['simianti' => '']),
            2450 => $this->getCM(['simianti' => '']),
            2451 => $this->getCM(['simianti' => '']),
            2452 => $this->getCM(['simianti' => '']),
            2453 => $this->getCM(['simianti' => '']),
            2454 => $this->getCM(['simianti' => '']),
            2455 => $this->getCM(['simianti' => '']),
            2218 => $this->getCM(['simianti' => '']),
            2219 => $this->getCM(['simianti' => '']),
            2220 => $this->getCM(['simianti' => '']),
            2221 => $this->getCM(['simianti' => '']),
            2222 => $this->getCM(['simianti' => '']),
            2223 => $this->getCM(['simianti' => '']),
            2224 => $this->getCM(['simianti' => '']),
            2225 => $this->getCM(['simianti' => '']),
            2226 => $this->getCM(['simianti' => '']),
            2227 => $this->getCM(['simianti' => '']),
            2510 => $this->getCM(['simianti' => '']),
            2316 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 85,  'nombrexx' => 'TEMA PARAMETRO CORREGIR']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            521 => $this->getCM(['simianti' => '']),
            522 => $this->getCM(['simianti' => '']),
            523 => $this->getCM(['simianti' => '']),
            524 => $this->getCM(['simianti' => '']),
            525 => $this->getCM(['simianti' => '']),
            526 => $this->getCM(['simianti' => '']),
            527 => $this->getCM(['simianti' => '']),
            528 => $this->getCM(['simianti' => '']),
            543 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 86,  'nombrexx' => 'TEMAS INDICADORES']);
        $tema->parametros()->sync([
            544 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 87,  'nombrexx' => 'ANTECEDENTES SALUD VSI']);
        $tema->parametros()->sync([
            979 => $this->getCM(['simianti' => '']),
            981 => $this->getCM(['simianti' => '']),
            1034 => $this->getCM(['simianti' => '']),
            1035 => $this->getCM(['simianti' => '']),
            1036 => $this->getCM(['simianti' => '']),
            1037 => $this->getCM(['simianti' => '']),
            869 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 88,  'nombrexx' => 'TIPO DE RED']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            1805 => $this->getCM(['simianti' => '']),
            547 => $this->getCM(['simianti' => '']),
            548 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 89,  'nombrexx' => 'SITUACION VULNERACION RIESGO']);
        $tema->parametros()->sync([
            256 => $this->getCM(['simianti' => '']),
            333 => $this->getCM(['simianti' => '']),
            340 => $this->getCM(['simianti' => '']),
            334 => $this->getCM(['simianti' => '']),
            366 => $this->getCM(['simianti' => '']),
            381 => $this->getCM(['simianti' => '']),
            168 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 90,  'nombrexx' => 'MATERIAL PISOS']);
        $tema->parametros()->sync([
            382 => $this->getCM(['simianti' => '']),
            383 => $this->getCM(['simianti' => '']),
            384 => $this->getCM(['simianti' => '']),
            385 => $this->getCM(['simianti' => '']),
            386 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 91,  'nombrexx' => 'MATERIAL MUROS']);
        $tema->parametros()->sync([
            387 => $this->getCM(['simianti' => '']),
            388 => $this->getCM(['simianti' => '']),
            389 => $this->getCM(['simianti' => '']),
            408 => $this->getCM(['simianti' => '']),
            409 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 92,  'nombrexx' => 'CONDICIONES AMBIENTALES CSD']);
        $tema->parametros()->sync([
            410 => $this->getCM(['simianti' => '']),
            411 => $this->getCM(['simianti' => '']),
            412 => $this->getCM(['simianti' => '']),
            413 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 93,  'nombrexx' => 'ESTADO CONDICIONES AMBIENTALES']);
        $tema->parametros()->sync([
            414 => $this->getCM(['simianti' => '']),
            415 => $this->getCM(['simianti' => '']),
            416 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 94,  'nombrexx' => 'SERVICIOS PUBLICOS']);
        $tema->parametros()->sync([
            417 => $this->getCM(['simianti' => '']),
            418 => $this->getCM(['simianti' => '']),
            419 => $this->getCM(['simianti' => '']),
            420 => $this->getCM(['simianti' => '']),
            421 => $this->getCM(['simianti' => '']),
            422 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 95,  'nombrexx' => 'LEGALIDAD']);
        $tema->parametros()->sync([
            423 => $this->getCM(['simianti' => '']),
            424 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 96,  'nombrexx' => 'ESPACIOS HOGAR']);
        $tema->parametros()->sync([
            425 => $this->getCM(['simianti' => '']),
            426 => $this->getCM(['simianti' => '']),
            427 => $this->getCM(['simianti' => '']),
            428 => $this->getCM(['simianti' => '']),
            456 => $this->getCM(['simianti' => '']),
            457 => $this->getCM(['simianti' => '']),
            458 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 97,  'nombrexx' => 'ANTECEDENTES PROBLEMAS SOCIALES']);
        $tema->parametros()->sync([
            337 => $this->getCM(['simianti' => '']),
            339 => $this->getCM(['simianti' => '']),
            459 => $this->getCM(['simianti' => '']),
            460 => $this->getCM(['simianti' => '']),
            461 => $this->getCM(['simianti' => '']),
            463 => $this->getCM(['simianti' => '']),
            464 => $this->getCM(['simianti' => '']),
            465 => $this->getCM(['simianti' => '']),
            466 => $this->getCM(['simianti' => '']),
            468 => $this->getCM(['simianti' => '']),
            470 => $this->getCM(['simianti' => '']),
            334 => $this->getCM(['simianti' => '']),
            2473 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 98,  'nombrexx' => 'TIPOLOGIA FAMILIAR']);
        $tema->parametros()->sync([
            471 => $this->getCM(['simianti' => '']),
            484 => $this->getCM(['simianti' => '']),
            493 => $this->getCM(['simianti' => '']),
            520 => $this->getCM(['simianti' => '']),
            534 => $this->getCM(['simianti' => '']),
            546 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 99,  'nombrexx' => 'TIPOLOGIA DE HOGAR']);
        $tema->parametros()->sync([
            552 => $this->getCM(['simianti' => '']),
            553 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 100,  'nombrexx' => 'RAZON TRASLADO']);
        $tema->parametros()->sync([
            554 => $this->getCM(['simianti' => '']),
            555 => $this->getCM(['simianti' => '']),
            556 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 101,  'nombrexx' => 'MOTIVO VINCULACION']);
        $tema->parametros()->sync([
            335 => $this->getCM(['simianti' => '']),
            337 => $this->getCM(['simianti' => '']),
            557 => $this->getCM(['simianti' => '']),
            558 => $this->getCM(['simianti' => '']),
            559 => $this->getCM(['simianti' => '']),
            560 => $this->getCM(['simianti' => '']),
            561 => $this->getCM(['simianti' => '']),
            563 => $this->getCM(['simianti' => '']),
            564 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 102,  'nombrexx' => 'PROBLEMATICA FAMILAR']);
        $tema->parametros()->sync([
            567 => $this->getCM(['simianti' => '']),
            568 => $this->getCM(['simianti' => '']),
            569 => $this->getCM(['simianti' => '']),
            561 => $this->getCM(['simianti' => '']),
            572 => $this->getCM(['simianti' => '']),
            573 => $this->getCM(['simianti' => '']),
            574 => $this->getCM(['simianti' => '']),
            575 => $this->getCM(['simianti' => '']),
            576 => $this->getCM(['simianti' => '']),
            579 => $this->getCM(['simianti' => '']),
            2466 => $this->getCM(['simianti' => '']),
            581 => $this->getCM(['simianti' => '']),
            583 => $this->getCM(['simianti' => '']),
            582 => $this->getCM(['simianti' => '']),
            974 => $this->getCM(['simianti' => '']),
            571 => $this->getCM(['simianti' => '']),
            655 => $this->getCM(['simianti' => '']),
            578 => $this->getCM(['simianti' => '']),
            975 => $this->getCM(['simianti' => '']),
            976 => $this->getCM(['simianti' => '']),
            978 => $this->getCM(['simianti' => '']),
            563 => $this->getCM(['simianti' => '']),
            339 => $this->getCM(['simianti' => '']),
            973 => $this->getCM(['simianti' => '']),
            1788 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 103,  'nombrexx' => 'FORMA ESTABLECER REGLAS HOGAR']);
        $tema->parametros()->sync([
            584 => $this->getCM(['simianti' => '']),
            585 => $this->getCM(['simianti' => '']),
            586 => $this->getCM(['simianti' => '']),
            1759 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 104,  'nombrexx' => 'FORMA ACTUAR NORMAS']);
        $tema->parametros()->sync([
            587 => $this->getCM(['simianti' => '']),
            588 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 105,  'nombrexx' => 'SOLUCION PROBLEMAS CASA']);
        $tema->parametros()->sync([
            589 => $this->getCM(['simianti' => '']),
            590 => $this->getCM(['simianti' => '']),
            591 => $this->getCM(['simianti' => '']),
            592 => $this->getCM(['simianti' => '']),
            593 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 106,  'nombrexx' => 'ACUDE PROBLEMAS CASA']);
        $tema->parametros()->sync([
            594 => $this->getCM(['simianti' => '']),
            1006 => $this->getCM(['simianti' => '']),
            596 => $this->getCM(['simianti' => '']),
            597 => $this->getCM(['simianti' => '']),
            1639 => $this->getCM(['simianti' => '']),
            599 => $this->getCM(['simianti' => '']),
            600 => $this->getCM(['simianti' => '']),
            601 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 107,  'nombrexx' => 'MODO ACTUAR INCUMPLIMIENTO REGLAS']);
        $tema->parametros()->sync([
            602 => $this->getCM(['simianti' => '']),
            603 => $this->getCM(['simianti' => '']),
            604 => $this->getCM(['simianti' => '']),
            605 => $this->getCM(['simianti' => '']),
            606 => $this->getCM(['simianti' => '']),
            1478 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 108,  'nombrexx' => 'MIEMBROS FAMILA DESTACAN']);
        $tema->parametros()->sync([
            607 => $this->getCM(['simianti' => '']),
            608 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 109,  'nombrexx' => 'ACTUA FAMILIA SUCESOS POSITIVOS']);
        $tema->parametros()->sync([
            609 => $this->getCM(['simianti' => '']),
            610 => $this->getCM(['simianti' => '']),
            611 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 110,  'nombrexx' => 'PERIODICIDAD']);
        $tema->parametros()->sync([
            367 => $this->getCM(['simianti' => '']),
            612 => $this->getCM(['simianti' => '']),
            613 => $this->getCM(['simianti' => '']),
            614 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 111,  'nombrexx' => 'DONDE COMPRA ALIMENTOS']);
        $tema->parametros()->sync([
            615 => $this->getCM(['simianti' => '']),
            616 => $this->getCM(['simianti' => '']),
            617 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 112,  'nombrexx' => 'ALIMENTACION DIARIA']);
        $tema->parametros()->sync([
            618 => $this->getCM(['simianti' => '']),
            619 => $this->getCM(['simianti' => '']),
            620 => $this->getCM(['simianti' => '']),
            621 => $this->getCM(['simianti' => '']),
            622 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 113,  'nombrexx' => 'ENTIDAD RECIBE ALIMENTACION']);
        $tema->parametros()->sync([
            426 => $this->getCM(['simianti' => '']),
            623 => $this->getCM(['simianti' => '']),
            625 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 114,  'nombrexx' => 'ACTIVIDAD GENERA INGRESO']);
        $tema->parametros()->sync([
            626 => $this->getCM(['simianti' => '']),
            627 => $this->getCM(['simianti' => '']),
            628 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 115,  'nombrexx' => 'TRABAJO INFORMAL']);
        $tema->parametros()->sync([
            630 => $this->getCM(['simianti' => '']),
            631 => $this->getCM(['simianti' => '']),
            632 => $this->getCM(['simianti' => '']),
            633 => $this->getCM(['simianti' => '']),
            634 => $this->getCM(['simianti' => '']),
            // 635 => $this-> getCM(['simianti'=>'']),
            2177 => $this->getCM(['simianti' => '']),
            2217 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 116,  'nombrexx' => 'OTRAS ACTIVIDADES']);
        $tema->parametros()->sync([

            637 => $this->getCM(['simianti' => '']),
            2168 => $this->getCM(['simianti' => '']),
            639 => $this->getCM(['simianti' => '']),
            640 => $this->getCM(['simianti' => '']),
            641 => $this->getCM(['simianti' => '']),
            2486 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 117,  'nombrexx' => 'TIPO RELACION LABORAL']);
        $tema->parametros()->sync([
            642 => $this->getCM(['simianti' => '']),
            643 => $this->getCM(['simianti' => '']),
            644 => $this->getCM(['simianti' => '']),
            645 => $this->getCM(['simianti' => '']),
            646 => $this->getCM(['simianti' => '']),
            1561 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 118,  'nombrexx' => 'MOTIVO RETIRO']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 119,  'nombrexx' => 'TIPO POBLACION FI']);
        $tema->parametros()->sync([
            650 => $this->getCM(['simianti' => '1']),
            651 => $this->getCM(['simianti' => '2']),
            445 => $this->getCM(['simianti' => '3']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 120,  'nombrexx' => 'CAUSAS VINCULACION DELINCUENCIA']);
        $tema->parametros()->sync([
            499 => $this->getCM(['simianti' => '']),
            500 => $this->getCM(['simianti' => '']),
            501 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 121,  'nombrexx' => 'TIPO RESIDENCIA DUERME']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 122,  'nombrexx' => 'NINGUNA FUENTE INGRESO']);
        $tema->parametros()->sync([
            277 => $this->getCM(['simianti' => '']),
            284 => $this->getCM(['simianti' => '']),
            317 => $this->getCM(['simianti' => '']),
            353 => $this->getCM(['simianti' => '']),
            711 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 123,  'nombrexx' => 'JORNADA INGRESOS']);
        $tema->parametros()->sync([
            365 => $this->getCM(['simianti' => '']),
            397 => $this->getCM(['simianti' => '']),
            407 => $this->getCM(['simianti' => '']),
            467 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 124,  'nombrexx' => 'DIAS SEMANA NOMBRE']);
        $tema->parametros()->sync([
            469 => $this->getCM(['simianti' => '']),
            478 => $this->getCM(['simianti' => '']),
            479 => $this->getCM(['simianti' => '']),
            480 => $this->getCM(['simianti' => '']),
            481 => $this->getCM(['simianti' => '']),
            482 => $this->getCM(['simianti' => '']),
            483 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 125,  'nombrexx' => 'FRECUENCIA INGRESOS']);
        $tema->parametros()->sync([
            367 => $this->getCM(['simianti' => '']),
            612 => $this->getCM(['simianti' => '']),
            613 => $this->getCM(['simianti' => '']),
            614 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 126,  'nombrexx' => 'VICTIMA ESCNNA']);
        $tema->parametros()->sync([
            656 => $this->getCM(['simianti' => '']),
            657 => $this->getCM(['simianti' => '']),
            658 => $this->getCM(['simianti' => '']),
            659 => $this->getCM(['simianti' => '']),
            660 => $this->getCM(['simianti' => '']),
            661 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 127,  'nombrexx' => 'INICIO HABITANCIA CALLE']);
        $tema->parametros()->sync([
            662 => $this->getCM(['simianti' => '']),
            663 => $this->getCM(['simianti' => '']),
            664 => $this->getCM(['simianti' => '']),
            665 => $this->getCM(['simianti' => '']),
            666 => $this->getCM(['simianti' => '']),
            667 => $this->getCM(['simianti' => '']),
            668 => $this->getCM(['simianti' => '']),
            669 => $this->getCM(['simianti' => '']),
            670 => $this->getCM(['simianti' => '']),
            671 => $this->getCM(['simianti' => '']),
            672 => $this->getCM(['simianti' => '']),
            673 => $this->getCM(['simianti' => '']),
            674 => $this->getCM(['simianti' => '']),
            675 => $this->getCM(['simianti' => '']),
            676 => $this->getCM(['simianti' => '']),
            677 => $this->getCM(['simianti' => '']),
            678 => $this->getCM(['simianti' => '']),
            679 => $this->getCM(['simianti' => '']),
            680 => $this->getCM(['simianti' => '']),
            681 => $this->getCM(['simianti' => '']),
            682 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 128,  'nombrexx' => 'CONTINUACION HABITANCIA CALLE']);
        $tema->parametros()->sync([
            662 => $this->getCM(['simianti' => '']),
            667 => $this->getCM(['simianti' => '']),
            668 => $this->getCM(['simianti' => '']),
            669 => $this->getCM(['simianti' => '']),
            670 => $this->getCM(['simianti' => '']),
            671 => $this->getCM(['simianti' => '']),
            672 => $this->getCM(['simianti' => '']),
            673 => $this->getCM(['simianti' => '']),
            675 => $this->getCM(['simianti' => '']),
            676 => $this->getCM(['simianti' => '']),
            677 => $this->getCM(['simianti' => '']),
            678 => $this->getCM(['simianti' => '']),
            681 => $this->getCM(['simianti' => '']),
            682 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 129,  'nombrexx' => 'DIAS DE SEMANA']);
        $tema->parametros()->sync([
            469 => $this->getCM(['simianti' => '']),
            478 => $this->getCM(['simianti' => '']),
            479 => $this->getCM(['simianti' => '']),
            480 => $this->getCM(['simianti' => '']),
            481 => $this->getCM(['simianti' => '']),
            482 => $this->getCM(['simianti' => '']),
            483 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 130,  'nombrexx' => 'NATURALEZA COL']);
        $tema->parametros()->sync([
            690 => $this->getCM(['simianti' => '']),
            691 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 131,  'nombrexx' => 'CONVENCIÓN D']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => '']),
            673 => $this->getCM(['simianti' => '']),
            879 => $this->getCM(['simianti' => '']),
            986 => $this->getCM(['simianti' => '']),
            987 => $this->getCM(['simianti' => '']),
            988 => $this->getCM(['simianti' => '']),
            989 => $this->getCM(['simianti' => '']),
            990 => $this->getCM(['simianti' => '']),
            991 => $this->getCM(['simianti' => '']),
            992 => $this->getCM(['simianti' => '']),
            993 => $this->getCM(['simianti' => '']),
            994 => $this->getCM(['simianti' => '']),
            995 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 132,  'nombrexx' => 'TALLA PANTALON CAMISO NIÑO NIÑA']);
        $tema->parametros()->sync([
            34 => $this->getCM(['simianti' => '']),
            36 => $this->getCM(['simianti' => '']),
            38 => $this->getCM(['simianti' => '']),
            300 => $this->getCM(['simianti' => '']),
            302 => $this->getCM(['simianti' => '']),
            518 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 133,  'nombrexx' => 'TALLA CAM NIÑO']);
        $tema->parametros()->sync([
            34 => $this->getCM(['simianti' => '']),
            36 => $this->getCM(['simianti' => '']),
            38 => $this->getCM(['simianti' => '']),
            300 => $this->getCM(['simianti' => '']),
            302 => $this->getCM(['simianti' => '']),
            518 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 134,  'nombrexx' => 'TALLA PAL HOM ADULT']);
        $tema->parametros()->sync([
            48 => $this->getCM(['simianti' => '']),
            50 => $this->getCM(['simianti' => '']),
            52 => $this->getCM(['simianti' => '']),
            54 => $this->getCM(['simianti' => '']),
            56 => $this->getCM(['simianti' => '']),
            697 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 135,  'nombrexx' => 'TALLA PAL MUJ ADULT']);
        $tema->parametros()->sync([
            34 => $this->getCM(['simianti' => '']),
            36 => $this->getCM(['simianti' => '']),
            38 => $this->getCM(['simianti' => '']),
            302 => $this->getCM(['simianti' => '']),
            518 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 136,  'nombrexx' => 'TALLA CAM HOM ADULT']);
        $tema->parametros()->sync([
            93 => $this->getCM(['simianti' => '']),
            138 => $this->getCM(['simianti' => '']),
            701 => $this->getCM(['simianti' => '']),
            702 => $this->getCM(['simianti' => '']),
            703 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 137,  'nombrexx' => 'TALLA CAM MUJ ADULT']);
        $tema->parametros()->sync([
            93 => $this->getCM(['simianti' => '']),
            138 => $this->getCM(['simianti' => '']),
            700 => $this->getCM(['simianti' => '']),
            701 => $this->getCM(['simianti' => '']),
            702 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 138,  'nombrexx' => 'TALLA ZAPATO']);
        $tema->parametros()->sync([
            47 => $this->getCM(['simianti' => '']),
            48 => $this->getCM(['simianti' => '']),
            49 => $this->getCM(['simianti' => '']),
            50 => $this->getCM(['simianti' => '']),
            51 => $this->getCM(['simianti' => '']),
            52 => $this->getCM(['simianti' => '']),
            53 => $this->getCM(['simianti' => '']),
            54 => $this->getCM(['simianti' => '']),
            55 => $this->getCM(['simianti' => '']),
            56 => $this->getCM(['simianti' => '']),
            57 => $this->getCM(['simianti' => '']),
            58 => $this->getCM(['simianti' => '']),
            59 => $this->getCM(['simianti' => '']),
            696 => $this->getCM(['simianti' => '']),
            697 => $this->getCM(['simianti' => '']),
            698 => $this->getCM(['simianti' => '']),
            699 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 139,  'nombrexx' => 'SEXO Y ETARIO']);
        $tema->parametros()->sync([
            505 => $this->getCM(['simianti' => '']),
            705 => $this->getCM(['simianti' => '']),
            496 => $this->getCM(['simianti' => '']),
            707 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 140,  'nombrexx' => 'HORAS LABORALES']);
        $tema->parametros()->sync([
            712 => $this->getCM(['simianti' => '']),
            713 => $this->getCM(['simianti' => '']),
            714 => $this->getCM(['simianti' => '']),
            715 => $this->getCM(['simianti' => '']),
            716 => $this->getCM(['simianti' => '']),
            717 => $this->getCM(['simianti' => '']),
            718 => $this->getCM(['simianti' => '']),
            719 => $this->getCM(['simianti' => '']),
            720 => $this->getCM(['simianti' => '']),
            721 => $this->getCM(['simianti' => '']),
            722 => $this->getCM(['simianti' => '']),
            723 => $this->getCM(['simianti' => '']),
            724 => $this->getCM(['simianti' => '']),
            725 => $this->getCM(['simianti' => '']),
            726 => $this->getCM(['simianti' => '']),
            727 => $this->getCM(['simianti' => '']),
            728 => $this->getCM(['simianti' => '']),
            729 => $this->getCM(['simianti' => '']),
            730 => $this->getCM(['simianti' => '']),
            731 => $this->getCM(['simianti' => '']),
            732 => $this->getCM(['simianti' => '']),
            733 => $this->getCM(['simianti' => '']),
            734 => $this->getCM(['simianti' => '']),
            735 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 141,  'nombrexx' => 'TAMA1']);
        $tema->parametros()->sync([
            812 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 142,  'nombrexx' => 'ÁMBITO VIOLENCIA']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            446 => $this->getCM(['simianti' => '']),
            521 => $this->getCM(['simianti' => '']),
            522 => $this->getCM(['simianti' => '']),
            523 => $this->getCM(['simianti' => '']),
            548 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 143,  'nombrexx' => 'TIPO VIOLENCIA']);
        $tema->parametros()->sync([
            528 => $this->getCM(['simianti' => '']),
            524 => $this->getCM(['simianti' => '']),
            525 => $this->getCM(['simianti' => '']),
            526 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 144,  'nombrexx' => 'SERVICIOS DOMÉSTICOS']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 145,  'nombrexx' => 'RESIDENCIA CHC']);
        $tema->parametros()->sync([
            269 => $this->getCM(['simianti' => '']),
            270 => $this->getCM(['simianti' => '']),
            271 => $this->getCM(['simianti' => '']),
            272 => $this->getCM(['simianti' => '']),
            273 => $this->getCM(['simianti' => '']),
            509 => $this->getCM(['simianti' => '']),
            274 => $this->getCM(['simianti' => '']),
            275 => $this->getCM(['simianti' => '']),
            276 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 146,  'nombrexx' => 'MANERA CONTACTO IDIPRON']);
        $tema->parametros()->sync([
            813 => $this->getCM(['simianti' => '']),
            814 => $this->getCM(['simianti' => '']),
            815 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 147,  'nombrexx' => 'INGRESOS POR OPCIÓN']);
        $tema->parametros()->sync([
            816 => $this->getCM(['simianti' => '']),
            817 => $this->getCM(['simianti' => '']),
            818 => $this->getCM(['simianti' => '']),
            819 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 148,  'nombrexx' => 'PROBAR']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 149,  'nombrexx' => 'MOTIVO INGRESO PROTECCION']);
        $tema->parametros()->sync([
            820 => $this->getCM(['simianti' => '']),
            821 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 150,  'nombrexx' => 'DOCUMENTO NNA']);
        $tema->parametros()->sync([
            16 => $this->getCM(['simianti' => '']),
            18 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 151,  'nombrexx' => 'JORNADA ESTUDIO']);
        $tema->parametros()->sync([
            2213 => $this->getCM(['simianti' => '']),
            823 => $this->getCM(['simianti' => '']),
            824 => $this->getCM(['simianti' => '']),
            825 => $this->getCM(['simianti' => '']),
            2352 => $this->getCM(['simianti' => '']),
            2353 => $this->getCM(['simianti' => '']),
            828 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 152,  'nombrexx' => 'TIEMPO EXTENSO']);
        $tema->parametros()->sync([
            400 => $this->getCM(['simianti' => '']),
            401 => $this->getCM(['simianti' => '']),
            1509 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 153,  'nombrexx' => 'NIVEL ESTUDIO']);
        $tema->parametros()->sync([
            829 => $this->getCM(['simianti' => '']),
            830 => $this->getCM(['simianti' => '']),
            831 => $this->getCM(['simianti' => '']),
            832 => $this->getCM(['simianti' => '']),
            833 => $this->getCM(['simianti' => '']),
            834 => $this->getCM(['simianti' => '']),
            835 => $this->getCM(['simianti' => '']),
            836 => $this->getCM(['simianti' => '']),
            837 => $this->getCM(['simianti' => '']),
            838 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 154,  'nombrexx' => 'GRADO APROBADO']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => '']),
            2260 => $this->getCM(['simianti' => '']),
            246 => $this->getCM(['simianti' => '']),
            247 => $this->getCM(['simianti' => '']),
            248 => $this->getCM(['simianti' => '']),
            300 => $this->getCM(['simianti' => '']),
            301 => $this->getCM(['simianti' => '']),
            302 => $this->getCM(['simianti' => '']),
            518 => $this->getCM(['simianti' => '']),
            840 => $this->getCM(['simianti' => '']),
            841 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
            33 => $this->getCM(['simianti' => '']),
            34 => $this->getCM(['simianti' => '']),
            754 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 155,  'nombrexx' => 'DOCUMENTOS ANEXOS INGRESO']);
        $tema->parametros()->sync([
            5 => $this->getCM(['simianti' => '']),
            843 => $this->getCM(['simianti' => '']),
            844 => $this->getCM(['simianti' => '']),
            845 => $this->getCM(['simianti' => '']),
            846 => $this->getCM(['simianti' => '']),
            847 => $this->getCM(['simianti' => '']),
            849 => $this->getCM(['simianti' => '']),
            850 => $this->getCM(['simianti' => '']),
            851 => $this->getCM(['simianti' => '']),
            2468 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 156,  'nombrexx' => 'OCUPACIÓN']);
        $tema->parametros()->sync([
            235 => $this->getCM(['simianti' => 'N/A']),
            1262 => $this->getCM(['simianti' => '']),
            812 => $this->getCM(['simianti' => 'HOGAR']),
            647 => $this->getCM(['simianti' => 'INDEPENDIENTE']),
            1534 => $this->getCM(['simianti' => 'AB']),
            1535 => $this->getCM(['simianti' => 'ADMINISTRADO(A)']),
            1536 => $this->getCM(['simianti' => 'AGR']),
            1537 => $this->getCM(['simianti' => 'AMA DE CASA']),
            1538 => $this->getCM(['simianti' => 'AUX_COCINA']),
            1539 => $this->getCM(['simianti' => 'AUX_RES']),
            1540 => $this->getCM(['simianti' => 'AYUDANTE_CONS']),
            1541 => $this->getCM(['simianti' => 'BEN_IDIPRON']),
            1542 => $this->getCM(['simianti' => 'COND']),
            1543 => $this->getCM(['simianti' => 'CONSTRUCTOR(A)']),
            1544 => $this->getCM(['simianti' => 'DEAMBULAR']),
            1545 => $this->getCM(['simianti' => 'DESEMP']),
            1546 => $this->getCM(['simianti' => 'DISC']),
            1547 => $this->getCM(['simianti' => 'ELC']),
            1548 => $this->getCM(['simianti' => 'EMP_DIAS']),
            1549 => $this->getCM(['simianti' => 'EMPLEEE']),
            1550 => $this->getCM(['simianti' => 'EMPLEO_INFORMAL']),
            1551 => $this->getCM(['simianti' => 'ESTILISTA']),
            1552 => $this->getCM(['simianti' => 'ESJ']),
            1553 => $this->getCM(['simianti' => '202']),
            1554 => $this->getCM(['simianti' => 'EST_COL']),
            1555 => $this->getCM(['simianti' => 'EST_UN']),
            1556 => $this->getCM(['simianti' => 'FLL']),
            1557 => $this->getCM(['simianti' => '201']),
            1558 => $this->getCM(['simianti' => 'GUARDIA_SEG']),
            1559 => $this->getCM(['simianti' => '200']),
            1560 => $this->getCM(['simianti' => 'IMPULSADOR']),
            1561 => $this->getCM(['simianti' => 'INDEPENDIENTE']),
            1562 => $this->getCM(['simianti' => 'JEFE_COCINA']),
            1563 => $this->getCM(['simianti' => 'LAV_CARROS']),
            1564 => $this->getCM(['simianti' => 'MAESTRO_CONS']),
            1565 => $this->getCM(['simianti' => 'MECÁNICO(A)']),
            1566 => $this->getCM(['simianti' => 'MSJ']),
            1567 => $this->getCM(['simianti' => '205']),
            1568 => $this->getCM(['simianti' => 'MÉDICO(A)']),
            1569 => $this->getCM(['simianti' => '207']),
            1570 => $this->getCM(['simianti' => 'RECLUSO']),
            1571 => $this->getCM(['simianti' => 'SECRETARIA']),
            1572 => $this->getCM(['simianti' => 'SOLD']),
            1573 => $this->getCM(['simianti' => 'SUPERVISOR']),
            1574 => $this->getCM(['simianti' => 'TAXISTA']),
            1575 => $this->getCM(['simianti' => 'TORNERO SOLDADOR']),
            1576 => $this->getCM(['simianti' => 'T_SEXUAL']),
            1577 => $this->getCM(['simianti' => 'VENDEDOR']),
            1578 => $this->getCM(['simianti' => '204']),
            1776 => $this->getCM(['simianti' => 'OFICIOS_V']),
            2523 => $this->getCM(['simianti' => 'PUBLICISTA']),//
            1349 => $this->getCM(['simianti' => 'QUIMICO FARMACÉUTICO']),
            2524 => $this->getCM(['simianti' => 'QUINESIÓLOGO']),
            2525 => $this->getCM(['simianti' => 'VITRALISTA']),
            637 => $this->getCM(['simianti' => 'PROSTITUCION']),
            1591 => $this->getCM(['simianti' => 'PRÁCTICA DEPORTES']),
            2526 => $this->getCM(['simianti' => '206']),
            2177 => $this->getCM(['simianti' => 'EMPLEADA_DOM']),
            2527 => $this->getCM(['simianti' => 'ZAPATERO']),
            666 => $this->getCM(['simianti' => 'EMPLEADO_EM']),
            1695 => $this->getCM(['simianti' => 'PENSIONADO']),
            2528 => $this->getCM(['simianti' => 'RADIOCOMUNICACION']),
            2528 => $this->getCM(['simianti' => 'RADIOCOMUNICACION']),
            2529 => $this->getCM(['simianti' => 'SECRETARIA AUXILIAR CONTABLE']),
            2530 => $this->getCM(['simianti' => 'SUPERVISORE EN LOGÍSTICA']),
            2531 => $this->getCM(['simianti' => 'TÉCNICO(A)']),
            2532 => $this->getCM(['simianti' => 'TECNÓLOGO(A)']),
            2533 => $this->getCM(['simianti' => 'TERAPEUTA OCUPACIONAL']),
            2534 => $this->getCM(['simianti' => 'TERAPEUTA RESPIRATORIO']),
            2535 => $this->getCM(['simianti' => 'TOPÓGRAFO(A)']),
            2536 => $this->getCM(['simianti' => 'TORNERO INDUSTRIAL Y SOLDADOR']),
            2537 => $this->getCM(['simianti' => 'TRABAJADOR SOCIAL']),
            2538 => $this->getCM(['simianti' => 'TRADUCTOR E INTÉRPRETE OFICIAL']),
            2539 => $this->getCM(['simianti' => 'ZOOTECNISTA']),
            2540 => $this->getCM(['simianti' => 'ENFEREMERA']),
            2541 => $this->getCM(['simianti' => 'GUARDERIA']),
            2542 => $this->getCM(['simianti' => 'INSTITUCIONALIZADO']),
            2543 => $this->getCM(['simianti' => 'ORNAMENTADOR']),
            2544 => $this->getCM(['simianti' => 'ZORRERO']),
            2545 => $this->getCM(['simianti' => 'DESESCOLARIZADO']),
            2546 => $this->getCM(['simianti' => 'ENSAMBLADOR']),
            2547 => $this->getCM(['simianti' => 'PINTOR']),
            2548 => $this->getCM(['simianti' => 'SERVICIO MILITAR']),
            2549 => $this->getCM(['simianti' => 'RETACAR']),
            2550 => $this->getCM(['simianti' => 'ANALISTA']),
            2551 => $this->getCM(['simianti' => 'ANTROPOLOGO(A)']),
            2552 => $this->getCM(['simianti' => 'ARCHIVISTA(A)']),
            2553 => $this->getCM(['simianti' => 'ARQUITECTO(A)']),
            2554 => $this->getCM(['simianti' => 'AUXILIAR']),
            2555 => $this->getCM(['simianti' => 'BACTERIOLOGO(A)']),
            2556 => $this->getCM(['simianti' => 'BIBLIOTECOLOGO(A)']),
            2557 => $this->getCM(['simianti' => 'CIRUJANO(A)']),
            2558 => $this->getCM(['simianti' => 'CITOHISTOTECNOLOGOS']),
            2559 => $this->getCM(['simianti' => 'COMUNICADOR(A) SOCIAL']),
            2560 => $this->getCM(['simianti' => 'CONTADOR(A)']),
            2561 => $this->getCM(['simianti' => 'PROFESIONAL EN DESARROLLO FAMILIAR']),
            2562 => $this->getCM(['simianti' => 'DIBUJANTE ARQUITECTONICO']),
            2563 => $this->getCM(['simianti' => 'DIBUJANTE TECNICO MECANICOS']),
            2564 => $this->getCM(['simianti' => 'DISEÑADOR(A)']),
            2565 => $this->getCM(['simianti' => 'DOCTOR(A) EN EDUCACION']),
            2566 => $this->getCM(['simianti' => 'ECONOMISTA']),
            2567 => $this->getCM(['simianti' => 'EDAFOLOGO(A)']),
            2568 => $this->getCM(['simianti' => 'ERGONOMISTA Y DISENADOR(A)']),
            2569 => $this->getCM(['simianti' => 'FARMACEUTA']),
            2570 => $this->getCM(['simianti' => 'FILÓSOFO']),
            1634 => $this->getCM(['simianti' => 'FÍSICO']),
            2571 => $this->getCM(['simianti' => 'FISIOTERAPEUTA']),
            2572 => $this->getCM(['simianti' => 'FONOAUDIÓLOGO']),
            2573 => $this->getCM(['simianti' => 'GEÓMORFOLOGO']),
            2574 => $this->getCM(['simianti' => 'GERENTE']),
            2575 => $this->getCM(['simianti' => 'GUIA TURÍSTICO']),
            2576 => $this->getCM(['simianti' => 'HIGIENISTA ORAL']),
            2577 => $this->getCM(['simianti' => 'PROFESIONALE EN HOTELERIA Y TURISMO']),
            2578 => $this->getCM(['simianti' => 'INGENIERO(A)']),
            2579 => $this->getCM(['simianti' => 'KINESIOLOGO(A)']),
            2580 => $this->getCM(['simianti' => 'LABORATORISTA DENTAL']),
            2581 => $this->getCM(['simianti' => 'LICENCIADO(A)']),
            2582 => $this->getCM(['simianti' => 'LOCUTOR(A)']),
            2583 => $this->getCM(['simianti' => 'MAESTRO(A) EN ARTES PLASTICAS']),
            2584 => $this->getCM(['simianti' => 'MERCADOLOGO(A)']),
            2585 => $this->getCM(['simianti' => 'MÚSICO']),
            2586 => $this->getCM(['simianti' => 'NUTRICIONISTA DIETISTA']),
            2587 => $this->getCM(['simianti' => 'ODONTÓLOGO(A)']),
            2588 => $this->getCM(['simianti' => 'OPERADOR(A) DE MAQUINAS']),
            2589 => $this->getCM(['simianti' => 'PERIODISTA']),
            2590 => $this->getCM(['simianti' => 'PRESBITERO']),
            2591 => $this->getCM(['simianti' => 'PROFESIONAL EN ADMINISTRACIÓN Y FINANZAS']),
            2592 => $this->getCM(['simianti' => 'PROFESIONAL EN COMERCIO INTERNACIONAL']),
            2593 => $this->getCM(['simianti' => 'PROFESIONAL EN ESTADÍSTICA']),
            2594 => $this->getCM(['simianti' => 'PROFESIONAL EN GUIANZA TURISTICA']),
            2595 => $this->getCM(['simianti' => 'PROFESIONAL EN MERCADEO']),
            2596 => $this->getCM(['simianti' => 'PROFESIONAL EN SALUD OCUPACIONAL']),
            2597 => $this->getCM(['simianti' => 'PROFESIONAL NORMALISTA']),
            2598 => $this->getCM(['simianti' => 'PROMOTOR(A) DE SALUD']),
            2599 => $this->getCM(['simianti' => 'PSICOORIENTADOR(A)']),
            2600 => $this->getCM(['simianti' => 'PSIQUIATRA']),
            2601 => $this->getCM(['simianti' => 'ESCULTOR(A) EN MADERA']),
            2602 => $this->getCM(['simianti' => 'GEÓLOGO']),
            2603 => $this->getCM(['simianti' => 'EMPLEEE']),



        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 157,  'nombrexx' => 'REPETIDOS']);
        $tema->parametros()->sync([
            683 => $this->getCM(['simianti' => '']),
            684 => $this->getCM(['simianti' => '']),
            685 => $this->getCM(['simianti' => '']),
            686 => $this->getCM(['simianti' => '']),
            687 => $this->getCM(['simianti' => '']),
            688 => $this->getCM(['simianti' => '']),
            689 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 158,  'nombrexx' => 'QUÉ EMOCIONES LE GENERAN ESTAS DIFICULTADES?  (CONVENCIÓN E) VI']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 159,  'nombrexx' => 'TIPO PERSONA VINCULACION']);
        $tema->parametros()->sync([
            857 => $this->getCM(['simianti' => '']),
            858 => $this->getCM(['simianti' => '']),
            859 => $this->getCM(['simianti' => '']),
            860 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 160,  'nombrexx' => 'EN QUÉ CONTEXTOS SE LE FACILITA INTERACTUAR CON OTRAS PERSONAS? VI']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            446 => $this->getCM(['simianti' => '']),
            521 => $this->getCM(['simianti' => '']),
            522 => $this->getCM(['simianti' => '']),
            523 => $this->getCM(['simianti' => '']),
            548 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 161,  'nombrexx' => 'JEFATURA HOGAR']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 162,  'nombrexx' => 'ÁREA EMOCIONAL VSI']);
        $tema->parametros()->sync([
            865 => $this->getCM(['simianti' => '']),
            866 => $this->getCM(['simianti' => '']),
            867 => $this->getCM(['simianti' => '']),
            868 => $this->getCM(['simianti' => '']),
            869 => $this->getCM(['simianti' => '']),
            870 => $this->getCM(['simianti' => '']),
            871 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 163,  'nombrexx' => 'ÁREA SEXUAL VSI']);
        $tema->parametros()->sync([
            581 => $this->getCM(['simianti' => '']),
            872 => $this->getCM(['simianti' => '']),
            873 => $this->getCM(['simianti' => '']),
            563 => $this->getCM(['simianti' => '']),
            874 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 164,  'nombrexx' => 'ÁREA COMPORTAMENTAL VSI']);
        $tema->parametros()->sync([
            875 => $this->getCM(['simianti' => '']),
            876 => $this->getCM(['simianti' => '']),
            877 => $this->getCM(['simianti' => '']),
            878 => $this->getCM(['simianti' => '']),
            1632 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 165,  'nombrexx' => 'ÁREA ACADÉMICA VSI']);
        $tema->parametros()->sync([
            879 => $this->getCM(['simianti' => '']),
            880 => $this->getCM(['simianti' => '']),
            881 => $this->getCM(['simianti' => '']),
            882 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 166,  'nombrexx' => 'ÁREA SOCIAL VSI']);
        $tema->parametros()->sync([
            883 => $this->getCM(['simianti' => '']),
            884 => $this->getCM(['simianti' => '']),
            885 => $this->getCM(['simianti' => '']),
            886 => $this->getCM(['simianti' => '']),
            887 => $this->getCM(['simianti' => '']),
            888 => $this->getCM(['simianti' => '']),
            2137 => $this->getCM(['simianti' => '']),
            1633 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 167,  'nombrexx' => 'ÁREA FAMILIAR']);
        $tema->parametros()->sync([
            889 => $this->getCM(['simianti' => '']),
            890 => $this->getCM(['simianti' => '']),
            891 => $this->getCM(['simianti' => '']),
            893 => $this->getCM(['simianti' => '']),
            894 => $this->getCM(['simianti' => '']),
            896 => $this->getCM(['simianti' => '']),
            898 => $this->getCM(['simianti' => '']),
            900 => $this->getCM(['simianti' => '']),
            663 => $this->getCM(['simianti' => '']),
            576 => $this->getCM(['simianti' => '']),
            892 => $this->getCM(['simianti' => '']),
            339 => $this->getCM(['simianti' => '']),
            895 => $this->getCM(['simianti' => '']),
            897 => $this->getCM(['simianti' => '']),
            899 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 168,  'nombrexx' => 'EN QUÉ CONTEXTOS SE LE DIFICULTA INTERACTUAR CON OTRAS PERSONAS? VI']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            446 => $this->getCM(['simianti' => '']),
            521 => $this->getCM(['simianti' => '']),
            522 => $this->getCM(['simianti' => '']),
            523 => $this->getCM(['simianti' => '']),
            548 => $this->getCM(['simianti' => '']),
            689 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 169,  'nombrexx' => 'CUÁL ES LA DIFICULTAD PARA LOGRAR LA INTERACCIÓN? VI']);
        $tema->parametros()->sync([
            875 => $this->getCM(['simianti' => '']),
            1008 => $this->getCM(['simianti' => '']),
            1009 => $this->getCM(['simianti' => '']),
            2155 => $this->getCM(['simianti' => '']),
            1011 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 170,  'nombrexx' => 'CÓMO SE SIENTE LA MAYOR PARTE DEL TIEMPO? VI']);
        $tema->parametros()->sync([

            909 => $this->getCM(['simianti' => '']),
            910 => $this->getCM(['simianti' => '']),
            911 => $this->getCM(['simianti' => '']),
            912 => $this->getCM(['simianti' => '']),
            952 => $this->getCM(['simianti' => '']),
            2467 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 171,  'nombrexx' => 'EN QUÉ CONTEXTO PREDOMINAN ESTOS ESTADOS DE ANIMO? VI']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            521 => $this->getCM(['simianti' => '']),
            522 => $this->getCM(['simianti' => '']),
            446 => $this->getCM(['simianti' => '']),
            548 => $this->getCM(['simianti' => '']),
            523 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 172,  'nombrexx' => 'INDIQUE CUÁL ES LA PERSONA MÁS REPRESENTATIVA DE SU FAMILIA?    (CONVENCIÓN B) VI']);
        $tema->parametros()->sync([
            770 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 173,  'nombrexx' => 'CUÁL ES LA PERSONA CON QUIEN NO TIENE BUENAS RELACIONES EN SU FAMILIA? (CONVENCIÓN B)   VI']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 174,  'nombrexx' => 'MENCIONE EL/LOS MOTIVOS POR LO CUAL NO EXISTEN BUENAS RELACIONES VI']);
        $tema->parametros()->sync([
            664 => $this->getCM(['simianti' => '']),
            665 => $this->getCM(['simianti' => '']),
            904 => $this->getCM(['simianti' => '']),
            956 => $this->getCM(['simianti' => '']),
            957 => $this->getCM(['simianti' => '']),
            958 => $this->getCM(['simianti' => '']),
            959 => $this->getCM(['simianti' => '']),
            960 => $this->getCM(['simianti' => '']),
            961 => $this->getCM(['simianti' => '']),
            962 => $this->getCM(['simianti' => '']),


        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 175,  'nombrexx' => 'CÓMO ES LA RELACIÓN CON SU FAMILIA? VI']);
        $tema->parametros()->sync([
            905 => $this->getCM(['simianti' => '']),
            963 => $this->getCM(['simianti' => '']),
            964 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 176,  'nombrexx' => 'QUÉ TIPO DE DIFICULTADES PRESENTA CON SU PAREJA? VI']);
        $tema->parametros()->sync([
            664 => $this->getCM(['simianti' => '']),
            665 => $this->getCM(['simianti' => '']),
            335 => $this->getCM(['simianti' => '']),
            956 => $this->getCM(['simianti' => '']),
            957 => $this->getCM(['simianti' => '']),
            965 => $this->getCM(['simianti' => '']),
            966 => $this->getCM(['simianti' => '']),
            967 => $this->getCM(['simianti' => '']),
            968 => $this->getCM(['simianti' => '']),
            969 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 177,  'nombrexx' => 'CÓMO AFRONTAN LAS DIFICULTADES? VI']);
        $tema->parametros()->sync([
            875  => $this->getCM(['simianti' => '']),
            915  => $this->getCM(['simianti' => '']),
            970  => $this->getCM(['simianti' => '']),
            971  => $this->getCM(['simianti' => '']),
            1310 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 178,  'nombrexx' => 'ENTIDAD EN LA QUE SE DENUNCIA EL DELITO? VI']);
        $tema->parametros()->sync([
            906 => $this->getCM(['simianti' => '']),
            1004 => $this->getCM(['simianti' => '']),
            1005 => $this->getCM(['simianti' => '']),
            1006 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 179,  'nombrexx' => 'PREGUNTAS VALIDADORAS DE LOS INDICADORES']);
        $tema->parametros()->sync([
            906 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 180,  'nombrexx' => 'Motivo presenta SPA']);
        $tema->parametros()->sync([
            574 => $this->getCM(['simianti' => '']),
            683 => $this->getCM(['simianti' => '']),
            684 => $this->getCM(['simianti' => '']),
            685 => $this->getCM(['simianti' => '']),
            869 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 181,  'nombrexx' => 'Expectativa consumo SPA']);
        $tema->parametros()->sync([
            686 => $this->getCM(['simianti' => '']),
            687 => $this->getCM(['simianti' => '']),
            688 => $this->getCM(['simianti' => '']),
            689 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 182,  'nombrexx' => 'CODIFICACIÓN TALLA / EDAD']);
        $tema->parametros()->sync([
            1077 => $this->getCM(['simianti' => '']),
            1078 => $this->getCM(['simianti' => '']),
            1079 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 183,  'nombrexx' => 'ENFERMEDADES']);
        $tema->parametros()->sync([
            326 => $this->getCM(['simianti' => '']),
            327 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
            855 => $this->getCM(['simianti' => '']),
            1080 => $this->getCM(['simianti' => '']),
            1081 => $this->getCM(['simianti' => '']),
            1082 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 184,  'nombrexx' => 'ACTIVIDAD FÍSICA']);
        $tema->parametros()->sync([
            1083 => $this->getCM(['simianti' => '']),
            1084 => $this->getCM(['simianti' => '']),
            1085 => $this->getCM(['simianti' => '']),
            1087 => $this->getCM(['simianti' => '']),
            1100 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 185,  'nombrexx' => 'APETITO']);
        $tema->parametros()->sync([
            1086 => $this->getCM(['simianti' => '']),
            1087 => $this->getCM(['simianti' => '']),
            1088 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 186,  'nombrexx' => 'ALIMENTOS ANTES DE INGRESAR AL IDIPRON']);
        $tema->parametros()->sync([
            1101 => $this->getCM(['simianti' => '']),
            1102 => $this->getCM(['simianti' => '']),
            1103 => $this->getCM(['simianti' => '']),
            1104 => $this->getCM(['simianti' => '']),
            1105 => $this->getCM(['simianti' => '']),
            1106 => $this->getCM(['simianti' => '']),
            1107 => $this->getCM(['simianti' => '']),
            1108 => $this->getCM(['simianti' => '']),
            1109 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 187,  'nombrexx' => 'FRECUENCIA DE CONSUMO DE ALIMENTOS ANTES DE INGRESAR AL IDIPRON']);
        $tema->parametros()->sync([
            1110 => $this->getCM(['simianti' => '']),
            1111 => $this->getCM(['simianti' => '']),
            1112 => $this->getCM(['simianti' => '']),
            1113 => $this->getCM(['simianti' => '']),
            1114 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 188,  'nombrexx' => 'ACCIONES A AUMENTAR']);
        $tema->parametros()->sync([
            1089 => $this->getCM(['simianti' => '']),
            1090 => $this->getCM(['simianti' => '']),
            1091 => $this->getCM(['simianti' => '']),
            1092 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 189,  'nombrexx' => 'ACCIONES A DISMINUIR']);
        $tema->parametros()->sync([
            1093 => $this->getCM(['simianti' => '']),
            1094 => $this->getCM(['simianti' => '']),
            1095 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 190,  'nombrexx' => 'ACCIONES PLAN ALIMENTARIO']);
        $tema->parametros()->sync([
            1096 => $this->getCM(['simianti' => '']),
            1097 => $this->getCM(['simianti' => '']),
            1098 => $this->getCM(['simianti' => '']),
            1099 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 191,  'nombrexx' => 'CODIFICACIÓN IMC / EDAD']);
        $tema->parametros()->sync([
            1068 => $this->getCM(['simianti' => '']),
            1069 => $this->getCM(['simianti' => '']),
            1070 => $this->getCM(['simianti' => '']),
            1071 => $this->getCM(['simianti' => '']),
            1072 => $this->getCM(['simianti' => '']),
            1073 => $this->getCM(['simianti' => '']),
            1074 => $this->getCM(['simianti' => '']),
            1075 => $this->getCM(['simianti' => '']),
            1076 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 192,  'nombrexx' => 'TIPO DE DEPENDENCIA']);
        $tema->parametros()->sync([
            773 => $this->getCM(['simianti' => '']),
            774 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 193,  'nombrexx' => 'TIPO DE MATRÍCULA']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 194,  'nombrexx' => 'CÓMO REACCIONA ANTE EVENTOS O SITUACIONES QUE LE GENEREN UN CAMBIO EMOCIONAL SIGNIFICATIVO']);
        $tema->parametros()->sync([
            875 => $this->getCM(['simianti' => '']),
            915 => $this->getCM(['simianti' => '']),
            916 => $this->getCM(['simianti' => '']),
            // 926 => $this-> getCM(['simianti'=>'']),
            970 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 195,  'nombrexx' => 'SENTIMIENTOS Y  EMOCIONES  VI']);
        $tema->parametros()->sync([

            917 => $this->getCM(['simianti' => '']),
            918 => $this->getCM(['simianti' => '']),
            919 => $this->getCM(['simianti' => '']),
            1861 => $this->getCM(['simianti' => '']),
            922 => $this->getCM(['simianti' => '']),

            924 => $this->getCM(['simianti' => '']),
            925 => $this->getCM(['simianti' => '']),

            928 => $this->getCM(['simianti' => '']),
            929 => $this->getCM(['simianti' => '']),
            931 => $this->getCM(['simianti' => '']),
            1857 => $this->getCM(['simianti' => '']),
            1783 => $this->getCM(['simianti' => '']),
            1784 => $this->getCM(['simianti' => '']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 196,  'nombrexx' => 'NIVELES LÍNEA BASE']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 197,  'nombrexx' => 'HA OCURRIDO EN SU VIDA ALGÚN ACONTECIMIENTO ESTRESANTE O TRAUMÁTICO']);
        $tema->parametros()->sync([
            339 => $this->getCM(['simianti' => '']),
            338 => $this->getCM(['simianti' => '']),
            581 => $this->getCM(['simianti' => '']),
            663 => $this->getCM(['simianti' => '']),
            682 => $this->getCM(['simianti' => '']),
            932 => $this->getCM(['simianti' => '']),
            933 => $this->getCM(['simianti' => '']),
            934 => $this->getCM(['simianti' => '']),
            936 => $this->getCM(['simianti' => '']),
            953 => $this->getCM(['simianti' => '']),
            954 => $this->getCM(['simianti' => '']),
            955 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 198,  'nombrexx' => 'NIVEL DE RIESGO VI']);
        $tema->parametros()->sync([
            938 => $this->getCM(['simianti' => '']),
            939 => $this->getCM(['simianti' => '']),
            940 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 199,  'nombrexx' => 'INDIQUE LOS MOTIVOS O SITUACIONES POR EL CUAL SE HA TENIDO PENSAMIENTOS, AMENAZAS E INTENTOS']);
        $tema->parametros()->sync([
            339 => $this->getCM(['simianti' => '']),
            574 => $this->getCM(['simianti' => '']),
            581 => $this->getCM(['simianti' => '']),
            682 => $this->getCM(['simianti' => '']),
            932 => $this->getCM(['simianti' => '']),
            933 => $this->getCM(['simianti' => '']),
            934 => $this->getCM(['simianti' => '']),
            935 => $this->getCM(['simianti' => '']),
            936 => $this->getCM(['simianti' => '']),
            937 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 200,  'nombrexx' => 'QUÉ TIPO DE CONDUCTAS AUTO LESIVAS? VI']);
        $tema->parametros()->sync([
            941 => $this->getCM(['simianti' => '']),
            942 => $this->getCM(['simianti' => '']),
            943 => $this->getCM(['simianti' => '']),
            944 => $this->getCM(['simianti' => '']),
            945 => $this->getCM(['simianti' => '']),
            946 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 201,  'nombrexx' => 'QUÉ ACTIVACIONES FISIOLÓGICAS LE GENERA? VI']);
        $tema->parametros()->sync([
            947 => $this->getCM(['simianti' => '']),
            948 => $this->getCM(['simianti' => '']),
            949 => $this->getCM(['simianti' => '']),
            950 => $this->getCM(['simianti' => '']),
            951 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 202,  'nombrexx' => 'MOMENTO EVENTO']);
        $tema->parametros()->sync([
            1013 => $this->getCM(['simianti' => '']),
            1014 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 203,  'nombrexx' => 'TIPO EVENTO SEXUAL NEGATIVO']);
        $tema->parametros()->sync([
            338 => $this->getCM(['simianti' => '']),
            1015 => $this->getCM(['simianti' => '']),
            1016 => $this->getCM(['simianti' => '']),
            1017 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 204,  'nombrexx' => 'ESTADO PROCESO TERAPÉUTICO']);
        $tema->parametros()->sync([
            1018 => $this->getCM(['simianti' => '']),
            1019 => $this->getCM(['simianti' => '']),
            1020 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 205,  'nombrexx' => 'MOTIVO POR EL CUAL NO ESTÁ ESCOLARIZADO']);
        $tema->parametros()->sync([
            1021 => $this->getCM(['simianti' => '']),
            1022 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 206,  'nombrexx' => 'RENDIMIENTO ACADÉMICO']);
        $tema->parametros()->sync([
            938 => $this->getCM(['simianti' => '']),
            940 => $this->getCM(['simianti' => '']),
            1023 => $this->getCM(['simianti' => '']),
            1024 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 207,  'nombrexx' => 'CAUSA DE DESERCIÓN']);
        $tema->parametros()->sync([
            879 => $this->getCM(['simianti' => '']),
            1027 => $this->getCM(['simianti' => '']),
            1028 => $this->getCM(['simianti' => '']),
            1029 => $this->getCM(['simianti' => '']),
            1030 => $this->getCM(['simianti' => '']),
            1031 => $this->getCM(['simianti' => '']),
            1032 => $this->getCM(['simianti' => '']),
            1033 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 208,  'nombrexx' => 'MATERIAS']);
        $tema->parametros()->sync([
            996 => $this->getCM(['simianti' => '']),
            997 => $this->getCM(['simianti' => '']),
            998 => $this->getCM(['simianti' => '']),
            999 => $this->getCM(['simianti' => '']),
            1000 => $this->getCM(['simianti' => '']),
            1001 => $this->getCM(['simianti' => '']),
            1002 => $this->getCM(['simianti' => '']),
            1003 => $this->getCM(['simianti' => '']),
            1854 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 209,  'nombrexx' => 'TIPO DE DIFICULTAD']);
        $tema->parametros()->sync([
            1043 => $this->getCM(['simianti' => '']),
            1044 => $this->getCM(['simianti' => '']),
            1045 => $this->getCM(['simianti' => '']),
            1046 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 210,  'nombrexx' => 'IDENTIFICA ALGÚN TIPO DE DIFICULTAD']);
        $tema->parametros()->sync([
            1047 => $this->getCM(['simianti' => '']),
            1048 => $this->getCM(['simianti' => '']),
            1049 => $this->getCM(['simianti' => '']),
            1050 => $this->getCM(['simianti' => '']),
            1051 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 211,  'nombrexx' => 'AREA']);
        $tema->parametros()->sync([
            1052 => $this->getCM(['simianti' => '']),
            1053 => $this->getCM(['simianti' => '']),
            1054 => $this->getCM(['simianti' => '']),
            1055 => $this->getCM(['simianti' => '']),
            1056 => $this->getCM(['simianti' => '']),
            1669 => $this->getCM(['simianti' => '']),
            1670 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 212,  'nombrexx' => 'ÁREAS AJUSTE']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            448 => $this->getCM(['simianti' => '']),
            449 => $this->getCM(['simianti' => '']),
            525 => $this->getCM(['simianti' => '']),
            1058 => $this->getCM(['simianti' => '']),
            1059 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 213,  'nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN PSICOLOGO']);
        $tema->parametros()->sync([
            1060 => $this->getCM(['simianti' => '']),
            1061 => $this->getCM(['simianti' => '']),
            1064 => $this->getCM(['simianti' => '']),
            1065 => $this->getCM(['simianti' => '']),
            1067 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 214,  'nombrexx' => 'ESTADO AUDICION']);
        $tema->parametros()->sync([
            1115 => $this->getCM(['simianti' => '']),
            1116 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 215,  'nombrexx' => 'ESTADO HABLA EXPLORACION FUNCIONAL']);
        $tema->parametros()->sync([
            1117 => $this->getCM(['simianti' => '']),
            1118 => $this->getCM(['simianti' => '']),
            1119 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 216,  'nombrexx' => 'IMPRESION DIAGNOSTICA VALORACIÓN INICIAL FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1120 => $this->getCM(['simianti' => '']),
            1121 => $this->getCM(['simianti' => '']),
            1122 => $this->getCM(['simianti' => '']),
            1123 => $this->getCM(['simianti' => '']),
            1124 => $this->getCM(['simianti' => '']),
            1125 => $this->getCM(['simianti' => '']),
            1126 => $this->getCM(['simianti' => '']),
            1127 => $this->getCM(['simianti' => '']),
            1128 => $this->getCM(['simianti' => '']),
            1129 => $this->getCM(['simianti' => '']),
            1130 => $this->getCM(['simianti' => '']),
            1131 => $this->getCM(['simianti' => '']),
            1132 => $this->getCM(['simianti' => '']),
            1133 => $this->getCM(['simianti' => '']),
            1134 => $this->getCM(['simianti' => '']),
            1135 => $this->getCM(['simianti' => '']),
            1136 => $this->getCM(['simianti' => '']),
            1166 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 217,  'nombrexx' => 'TIPO SEGUIMIENTO FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            1144 => $this->getCM(['simianti' => '']),
            1145 => $this->getCM(['simianti' => '']),
            1146 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 218,  'nombrexx' => 'TIPO EVOLUCIÓN FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1147 => $this->getCM(['simianti' => '']),
            1148 => $this->getCM(['simianti' => '']),
            1149 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 219,  'nombrexx' => 'IMPRESION DIAGNOSTICA VALORACIÓN TAMIZ AUDITIVO']);
        $tema->parametros()->sync([
            1120 => $this->getCM(['simianti' => '']),
            1121 => $this->getCM(['simianti' => '']),
            1122 => $this->getCM(['simianti' => '']),
            1123 => $this->getCM(['simianti' => '']),
            1134 => $this->getCM(['simianti' => '']),
            1150 => $this->getCM(['simianti' => '']),
            1151 => $this->getCM(['simianti' => '']),
            1152 => $this->getCM(['simianti' => '']),
            1166 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 220,  'nombrexx' => 'REMISIÓN VALORACIÓN INICIAL FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1137 => $this->getCM(['simianti' => '']),
            1138 => $this->getCM(['simianti' => '']),
            1139 => $this->getCM(['simianti' => '']),
            1140 => $this->getCM(['simianti' => '']),
            1141 => $this->getCM(['simianti' => '']),
            1142 => $this->getCM(['simianti' => '']),
            1143 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 221,  'nombrexx' => 'REMISIÓN VALORACIÓN TAMIZ AUDITIVO']);
        $tema->parametros()->sync([
            1137 => $this->getCM(['simianti' => '']),
            1138 => $this->getCM(['simianti' => '']),
            1139 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 222,  'nombrexx' => 'MOTIVO ATENCIÓN VALORACIÓN MÉDICA']);
        $tema->parametros()->sync([
            1153 => $this->getCM(['simianti' => '']),
            1154 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 223,  'nombrexx' => 'PERIODICIDAD PARA VALORACIÓN MÉDICA']);
        $tema->parametros()->sync([
            1155 => $this->getCM(['simianti' => '']),
            1156 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 224,  'nombrexx' => 'DIAGNÓSTICO DE EVOLUCIÓN']);
        $tema->parametros()->sync([
            1157 => $this->getCM(['simianti' => '']),
            1158 => $this->getCM(['simianti' => '']),
            1159 => $this->getCM(['simianti' => '']),
            1160 => $this->getCM(['simianti' => '']),
            1161 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 225,  'nombrexx' => 'CONDUCTA PARA VALORACIÓN MÉDICA']);
        $tema->parametros()->sync([
            1156 => $this->getCM(['simianti' => '']),
            1162 => $this->getCM(['simianti' => '']),
            1163 => $this->getCM(['simianti' => '']),
            1164 => $this->getCM(['simianti' => '']),
            1165 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 226,  'nombrexx' => 'TRAMITE ENTREGA DOCUMENTO']);
        $tema->parametros()->sync([
            1167 => $this->getCM(['simianti' => '']),
            1168 => $this->getCM(['simianti' => '']),
            1169 => $this->getCM(['simianti' => '']),
            1170 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 227,  'nombrexx' => 'INSTRUMENTOS NUTRICIÓN']);
        $tema->parametros()->sync([
            1171 => $this->getCM(['simianti' => '']),
            1172 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 228,  'nombrexx' => 'INSTRUMENTOS FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1173 => $this->getCM(['simianti' => '']),
            1174 => $this->getCM(['simianti' => '']),
            1175 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 229,  'nombrexx' => 'INSTRUMENTOS AUXILIAR DE ENFERMERÍA']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 230,  'nombrexx' => 'TIPO DE ACCIDENTE']);
        $tema->parametros()->sync([
            564 => $this->getCM(['simianti' => '']),
            1176 => $this->getCM(['simianti' => '']),
            1177 => $this->getCM(['simianti' => '']),
            1178 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 231,  'nombrexx' => 'CAUSA DE ACCIDENTE']);
        $tema->parametros()->sync([
            1179 => $this->getCM(['simianti' => '']),
            1180 => $this->getCM(['simianti' => '']),
            1181 => $this->getCM(['simianti' => '']),
            1182 => $this->getCM(['simianti' => '']),
            1183 => $this->getCM(['simianti' => '']),
            1184 => $this->getCM(['simianti' => '']),
            1185 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 232,  'nombrexx' => 'LUGAR DONDE OCURRIO ACCIDENTE']);
        $tema->parametros()->sync([
            1186 => $this->getCM(['simianti' => '']),
            1187 => $this->getCM(['simianti' => '']),
            1188 => $this->getCM(['simianti' => '']),
            1189 => $this->getCM(['simianti' => '']),
            1190 => $this->getCM(['simianti' => '']),
            1191 => $this->getCM(['simianti' => '']),
            1192 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 233,  'nombrexx' => 'AGENTE DEL ACCIDENTE']);
        $tema->parametros()->sync([
            1193 => $this->getCM(['simianti' => '']),
            1194 => $this->getCM(['simianti' => '']),
            1195 => $this->getCM(['simianti' => '']),
            1196 => $this->getCM(['simianti' => '']),
            1197 => $this->getCM(['simianti' => '']),
            1198 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 234,  'nombrexx' => 'PARTE DEL CUERPO AFECTADO']);
        $tema->parametros()->sync([
            1199 => $this->getCM(['simianti' => '']),
            1200 => $this->getCM(['simianti' => '']),
            1201 => $this->getCM(['simianti' => '']),
            1202 => $this->getCM(['simianti' => '']),
            1203 => $this->getCM(['simianti' => '']),
            1204 => $this->getCM(['simianti' => '']),
            1205 => $this->getCM(['simianti' => '']),
            1206 => $this->getCM(['simianti' => '']),
            1207 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 235,  'nombrexx' => 'SÍNTOMA PEDICULOSIS']);
        $tema->parametros()->sync([
            1208 => $this->getCM(['simianti' => '']),
            1209 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 236,  'nombrexx' => 'USO DEL CABELLO']);
        $tema->parametros()->sync([
            1210 => $this->getCM(['simianti' => '']),
            1211 => $this->getCM(['simianti' => '']),
            1212 => $this->getCM(['simianti' => '']),
            1213 => $this->getCM(['simianti' => '']),
            1214 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 237,  'nombrexx' => 'TIEMPO SUFRE PEDICULOSIS']);
        $tema->parametros()->sync([
            1114 => $this->getCM(['simianti' => '']),
            1215 => $this->getCM(['simianti' => '']),
            1216 => $this->getCM(['simianti' => '']),
            1217 => $this->getCM(['simianti' => '']),
            1218 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 238,  'nombrexx' => 'TRATAMIENTO PEDICULOSIS']);
        $tema->parametros()->sync([
            1219 => $this->getCM(['simianti' => '']),
            1220 => $this->getCM(['simianti' => '']),
            1221 => $this->getCM(['simianti' => '']),
            1222 => $this->getCM(['simianti' => '']),
            1223 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 239,  'nombrexx' => 'CONSECUENCIA PEDICULOSIS CABEZA']);
        $tema->parametros()->sync([
            1224 => $this->getCM(['simianti' => '']),
            1225 => $this->getCM(['simianti' => '']),
            1226 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 240,  'nombrexx' => 'CONSECUENCIA PEDICULOSIS CUELLO']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            1227 => $this->getCM(['simianti' => '']),
            1228 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 241,  'nombrexx' => 'CONSECUENCIA PEDICULOSIS TÓRAX']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            1229 => $this->getCM(['simianti' => '']),
            1230 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 242,  'nombrexx' => 'CONSECUENCIA PEDICULOSIS BRAZOS Y AXILAS']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            1229 => $this->getCM(['simianti' => '']),
            1230 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 243,  'nombrexx' => 'CONSECUENCIA PEDICULOSIS PIEL DE TÓRAX']);
        $tema->parametros()->sync([
            168 => $this->getCM(['simianti' => '']),
            1231 => $this->getCM(['simianti' => '']),
            1232 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 244,  'nombrexx' => 'TIPO DE ACCESO AL SISTEMA']);
        $tema->parametros()->sync([
            1233 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 245,  'nombrexx' => 'MOTIVO ATENCIÓN MITIGACIÓN']);
        $tema->parametros()->sync([
            1154 => $this->getCM(['simianti' => '']),
            1240 => $this->getCM(['simianti' => '']),
            1241 => $this->getCM(['simianti' => '']),
            1242 => $this->getCM(['simianti' => '']),
            1243 => $this->getCM(['simianti' => '']),
            1244 => $this->getCM(['simianti' => '']),
            1245 => $this->getCM(['simianti' => '']),
            1246 => $this->getCM(['simianti' => '']),
            1247 => $this->getCM(['simianti' => '']),
            1248 => $this->getCM(['simianti' => '']),
            1249 => $this->getCM(['simianti' => '']),
            1250 => $this->getCM(['simianti' => '']),
            1251 => $this->getCM(['simianti' => '']),
            1252 => $this->getCM(['simianti' => '']),
            1253 => $this->getCM(['simianti' => '']),
            1254 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 246,  'nombrexx' => 'DIAGNÓSTICO EVOLUCIÓN MITIGACIÓN']);
        $tema->parametros()->sync([
            1157 => $this->getCM(['simianti' => '']),
            1158 => $this->getCM(['simianti' => '']),
            1159 => $this->getCM(['simianti' => '']),
            1160 => $this->getCM(['simianti' => '']),
            1161 => $this->getCM(['simianti' => '']),
            1236 => $this->getCM(['simianti' => '']),
            1237 => $this->getCM(['simianti' => '']),
            1238 => $this->getCM(['simianti' => '']),
            1239 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 247,  'nombrexx' => 'CONDUCTA MITIGACIÓN']);
        $tema->parametros()->sync([
            1156 => $this->getCM(['simianti' => '']),
            1162 => $this->getCM(['simianti' => '']),
            1163 => $this->getCM(['simianti' => '']),
            1164 => $this->getCM(['simianti' => '']),
            1165 => $this->getCM(['simianti' => '']),
            1234 => $this->getCM(['simianti' => '']),
            1235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 248,  'nombrexx' => 'TRATAMIENTO DENTAL']);
        $tema->parametros()->sync([
            1255 => $this->getCM(['simianti' => '']),
            1256 => $this->getCM(['simianti' => '']),
            1257 => $this->getCM(['simianti' => '']),
            1258 => $this->getCM(['simianti' => '']),
            1259 => $this->getCM(['simianti' => '']),
            1260 => $this->getCM(['simianti' => '']),
            1261 => $this->getCM(['simianti' => '']),
            1262 => $this->getCM(['simianti' => '']),
            1263 => $this->getCM(['simianti' => '']),
            1264 => $this->getCM(['simianti' => '']),
            1265 => $this->getCM(['simianti' => '']),
            1266 => $this->getCM(['simianti' => '']),
            1267 => $this->getCM(['simianti' => '']),
            1268 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 249,  'nombrexx' => 'CALIFICACIÓN AUTOCUIDADO']);
        $tema->parametros()->sync([
            1270 => $this->getCM(['simianti' => '']),
            1271 => $this->getCM(['simianti' => '']),
            1272 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 250,  'nombrexx' => 'CALIFICACIÓN COMUNICACIÓN']);
        $tema->parametros()->sync([
            1273 => $this->getCM(['simianti' => '']),
            1274 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 251,  'nombrexx' => 'CALIFICACIÓN HABILIDADES']);
        $tema->parametros()->sync([
            1273 => $this->getCM(['simianti' => '']),
            1275 => $this->getCM(['simianti' => '']),
            1276 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 252,  'nombrexx' => 'CALIFICACIÓN SENSOPERCEPTUAL']);
        $tema->parametros()->sync([
            1069 => $this->getCM(['simianti' => '']),
            1277 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 253,  'nombrexx' => 'CALIFICACIÓN NEUROSENSORIAL']);
        $tema->parametros()->sync([
            1278 => $this->getCM(['simianti' => '']),
            1279 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 254,  'nombrexx' => 'PLAN DE MANEJO']);
        $tema->parametros()->sync([
            1280 => $this->getCM(['simianti' => '']),
            1281 => $this->getCM(['simianti' => '']),
            1282 => $this->getCM(['simianti' => '']),
            1283 => $this->getCM(['simianti' => '']),
            1284 => $this->getCM(['simianti' => '']),
            1285 => $this->getCM(['simianti' => '']),
            1286 => $this->getCM(['simianti' => '']),
            1287 => $this->getCM(['simianti' => '']),
            1288 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 255,  'nombrexx' => 'REMISIÓN DESDE TERAPIA']);
        $tema->parametros()->sync([
            1289 => $this->getCM(['simianti' => '']),
            1290 => $this->getCM(['simianti' => '']),
            1291 => $this->getCM(['simianti' => '']),
            1292 => $this->getCM(['simianti' => '']),
            1293 => $this->getCM(['simianti' => '']),
            1294 => $this->getCM(['simianti' => '']),
            1295 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 256,  'nombrexx' => 'COMPONENTE NEUROSENSORIAL']);
        $tema->parametros()->sync([
            1296 => $this->getCM(['simianti' => '']),
            1297 => $this->getCM(['simianti' => '']),
            1298 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 257,  'nombrexx' => 'IMPRESIÓN DIAGNÓSTICA']);
        $tema->parametros()->sync([
            1299 => $this->getCM(['simianti' => '']),
            1300 => $this->getCM(['simianti' => '']),
            1301 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 258,  'nombrexx' => 'TEMA A TRABAJAR SEGUIMIENTO TERAPIA']);
        $tema->parametros()->sync([
            1302 => $this->getCM(['simianti' => '']),
            1303 => $this->getCM(['simianti' => '']),
            1304 => $this->getCM(['simianti' => '']),
            1305 => $this->getCM(['simianti' => '']),
            1306 => $this->getCM(['simianti' => '']),
            1307 => $this->getCM(['simianti' => '']),
            1308 => $this->getCM(['simianti' => '']),
            1309 => $this->getCM(['simianti' => '']),
            1310 => $this->getCM(['simianti' => '']),
            1311 => $this->getCM(['simianti' => '']),
            1312 => $this->getCM(['simianti' => '']),
            1313 => $this->getCM(['simianti' => '']),
            1314 => $this->getCM(['simianti' => '']),
            1315 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 259,  'nombrexx' => 'RESULTADO DE LA INTERVENCIÓN']);
        $tema->parametros()->sync([
            1316 => $this->getCM(['simianti' => '']),
            1317 => $this->getCM(['simianti' => '']),
            1318 => $this->getCM(['simianti' => '']),
            1319 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 260,  'nombrexx' => 'NIVEL PERFIL OCUPACIONAL']);
        $tema->parametros()->sync([
            1322 => $this->getCM(['simianti' => '']),
            1323 => $this->getCM(['simianti' => '']),
            1324 => $this->getCM(['simianti' => '']),
            1325 => $this->getCM(['simianti' => '']),
            1326 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 261,  'nombrexx' => 'MOTIVO DE LA ATENCIÓN']);
        $tema->parametros()->sync([
            1327 => $this->getCM(['simianti' => '']),
            1328 => $this->getCM(['simianti' => '']),
            1330 => $this->getCM(['simianti' => '']),
            1331 => $this->getCM(['simianti' => '']),
            1332 => $this->getCM(['simianti' => '']),
            1333 => $this->getCM(['simianti' => '']),
            1334 => $this->getCM(['simianti' => '']),
            1335 => $this->getCM(['simianti' => '']),
            1336 => $this->getCM(['simianti' => '']),
            1337 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 262,  'nombrexx' => 'TIPO DE ACOMPAÑAMIENTO']);
        $tema->parametros()->sync([
            1339 => $this->getCM(['simianti' => '']),
            1340 => $this->getCM(['simianti' => '']),
            1341 => $this->getCM(['simianti' => '']),
            1342 => $this->getCM(['simianti' => '']),
            1343 => $this->getCM(['simianti' => '']),
            1344 => $this->getCM(['simianti' => '']),
            1345 => $this->getCM(['simianti' => '']),
            1346 => $this->getCM(['simianti' => '']),
            1347 => $this->getCM(['simianti' => '']),
            1348 => $this->getCM(['simianti' => '']),
            1349 => $this->getCM(['simianti' => '']),
            1350 => $this->getCM(['simianti' => '']),
            1395 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 263,  'nombrexx' => 'TIPO DE APOYO DIAGNÓSTICO']);
        $tema->parametros()->sync([
            1351 => $this->getCM(['simianti' => '']),
            1352 => $this->getCM(['simianti' => '']),
            1353 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 264,  'nombrexx' => 'TIPO DE ESPECIALIDAD MÉDICA']);
        $tema->parametros()->sync([
            1354 => $this->getCM(['simianti' => '']),
            1355 => $this->getCM(['simianti' => '']),
            1356 => $this->getCM(['simianti' => '']),
            1357 => $this->getCM(['simianti' => '']),
            1358 => $this->getCM(['simianti' => '']),
            1359 => $this->getCM(['simianti' => '']),
            1360 => $this->getCM(['simianti' => '']),
            1361 => $this->getCM(['simianti' => '']),
            1362 => $this->getCM(['simianti' => '']),
            1363 => $this->getCM(['simianti' => '']),
            1364 => $this->getCM(['simianti' => '']),
            1365 => $this->getCM(['simianti' => '']),
            1366 => $this->getCM(['simianti' => '']),
            1367 => $this->getCM(['simianti' => '']),
            1368 => $this->getCM(['simianti' => '']),
            1369 => $this->getCM(['simianti' => '']),
            1370 => $this->getCM(['simianti' => '']),
            1371 => $this->getCM(['simianti' => '']),
            1372 => $this->getCM(['simianti' => '']),
            1373 => $this->getCM(['simianti' => '']),
            1374 => $this->getCM(['simianti' => '']),
            1375 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 265,  'nombrexx' => 'CALIDAD DEL AFILIADO']);
        $tema->parametros()->sync([
            1376 => $this->getCM(['simianti' => '']),
            1377 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 266,  'nombrexx' => 'TIPO DE PROCEDIMIENTO']);
        $tema->parametros()->sync([
            1378 => $this->getCM(['simianti' => '']),
            1379 => $this->getCM(['simianti' => '']),
            1380 => $this->getCM(['simianti' => '']),
            1381 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 267,  'nombrexx' => 'TIPO DE PYP']);
        $tema->parametros()->sync([
            1382 => $this->getCM(['simianti' => '']),
            1383 => $this->getCM(['simianti' => '']),
            1384 => $this->getCM(['simianti' => '']),
            1385 => $this->getCM(['simianti' => '']),
            1386 => $this->getCM(['simianti' => '']),
            1387 => $this->getCM(['simianti' => '']),
            1388 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 268,  'nombrexx' => 'TIPO DE BRIGADA']);
        $tema->parametros()->sync([
            1389 => $this->getCM(['simianti' => '']),
            1390 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 269,  'nombrexx' => 'TIPO DE CHARLA']);
        $tema->parametros()->sync([
            1391 => $this->getCM(['simianti' => '']),
            1392 => $this->getCM(['simianti' => '']),
            1393 => $this->getCM(['simianti' => '']),
            1394 => $this->getCM(['simianti' => '']),
            1395 => $this->getCM(['simianti' => '']),
            1396 => $this->getCM(['simianti' => '']),
            1397 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 270,  'nombrexx' => 'TIPO DE TAMIZAJE']);
        $tema->parametros()->sync([
            1398 => $this->getCM(['simianti' => '']),
            1399 => $this->getCM(['simianti' => '']),
            1400 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 271,  'nombrexx' => 'VACUNA']);
        $tema->parametros()->sync([
            1401 => $this->getCM(['simianti' => '']),
            1402 => $this->getCM(['simianti' => '']),
            1403 => $this->getCM(['simianti' => '']),
            1404 => $this->getCM(['simianti' => '']),
            1405 => $this->getCM(['simianti' => '']),
            1406 => $this->getCM(['simianti' => '']),
            1407 => $this->getCM(['simianti' => '']),
            1408 => $this->getCM(['simianti' => '']),
            1409 => $this->getCM(['simianti' => '']),
            1410 => $this->getCM(['simianti' => '']),
            1411 => $this->getCM(['simianti' => '']),
            1412 => $this->getCM(['simianti' => '']),
            1413 => $this->getCM(['simianti' => '']),
            1414 => $this->getCM(['simianti' => '']),
            1415 => $this->getCM(['simianti' => '']),
            1416 => $this->getCM(['simianti' => '']),
            1417 => $this->getCM(['simianti' => '']),
            1418 => $this->getCM(['simianti' => '']),
            1419 => $this->getCM(['simianti' => '']),
            1420 => $this->getCM(['simianti' => '']),
            1421 => $this->getCM(['simianti' => '']),
            1422 => $this->getCM(['simianti' => '']),
            1423 => $this->getCM(['simianti' => '']),
            1424 => $this->getCM(['simianti' => '']),
            1425 => $this->getCM(['simianti' => '']),
            1426 => $this->getCM(['simianti' => '']),
            1427 => $this->getCM(['simianti' => '']),
            1429 => $this->getCM(['simianti' => '']),
            1430 => $this->getCM(['simianti' => '']),
            1431 => $this->getCM(['simianti' => '']),
            1432 => $this->getCM(['simianti' => '']),
            1433 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 272,  'nombrexx' => 'RAZONES SALIDA UPI']);
        $tema->parametros()->sync([
            1434 => $this->getCM(['simianti' => '']),
            1435 => $this->getCM(['simianti' => '']),
            1436 => $this->getCM(['simianti' => '']),
            1437 => $this->getCM(['simianti' => '']),
            1438 => $this->getCM(['simianti' => '']),
            2491 => $this->getCM(['simianti' => '']),
            2492 => $this->getCM(['simianti' => '']),
            2493 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 273,  'nombrexx' => 'CONTEXTURA']);
        $tema->parametros()->sync([
            1439 => $this->getCM(['simianti' => '']),
            1440 => $this->getCM(['simianti' => '']),
            1441 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 274,  'nombrexx' => 'TIPO DE ROSTRO']);
        $tema->parametros()->sync([
            1442 => $this->getCM(['simianti' => '']),
            1443 => $this->getCM(['simianti' => '']),
            1444 => $this->getCM(['simianti' => '']),
            1445 => $this->getCM(['simianti' => '']),
            1446 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 275,  'nombrexx' => 'COLOR DE PIEL']);
        $tema->parametros()->sync([
            1447 => $this->getCM(['simianti' => '']),
            1448 => $this->getCM(['simianti' => '']),
            1449 => $this->getCM(['simianti' => '']),
            1450 => $this->getCM(['simianti' => '']),
            1451 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 276,  'nombrexx' => 'COLOR DE CABELLO']);
        $tema->parametros()->sync([
            1452 => $this->getCM(['simianti' => '']),
            1453 => $this->getCM(['simianti' => '']),
            1454 => $this->getCM(['simianti' => '']),
            1455 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 277,  'nombrexx' => 'TIPO DE CABELLO']);
        $tema->parametros()->sync([
            1456 => $this->getCM(['simianti' => '']),
            1457 => $this->getCM(['simianti' => '']),
            1458 => $this->getCM(['simianti' => '']),
            1459 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 278,  'nombrexx' => 'CORTE DE CABELLO']);
        $tema->parametros()->sync([
            939 => $this->getCM(['simianti' => '']),
            1210 => $this->getCM(['simianti' => '']),
            1211 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 279,  'nombrexx' => 'COLOR DE OJOS']);
        $tema->parametros()->sync([
            1453 => $this->getCM(['simianti' => '']),
            1460 => $this->getCM(['simianti' => '']),
            1461 => $this->getCM(['simianti' => '']),
            1462 => $this->getCM(['simianti' => '']),
            1463 => $this->getCM(['simianti' => '']),
            1464 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 280,  'nombrexx' => 'NARIZ']);
        $tema->parametros()->sync([
            1465 => $this->getCM(['simianti' => '']),
            1466 => $this->getCM(['simianti' => '']),
            1467 => $this->getCM(['simianti' => '']),
            1468 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 281,  'nombrexx' => 'TAMAÑO DEL LUNAR']);
        $tema->parametros()->sync([
            1469 => $this->getCM(['simianti' => '']),
            1470 => $this->getCM(['simianti' => '']),
            1471 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 282,  'nombrexx' => 'TIPO DE CONVENIO']);
        // $tema->parametros()->sync([

        // ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 283,  'nombrexx' => 'TIPO RECURSO']);
        $tema->parametros()->sync([
            1764 => $this->getCM(['simianti' => '']),
            1765 => $this->getCM(['simianti' => '']),
            1766 => $this->getCM(['simianti' => '']),
            1767 => $this->getCM(['simianti' => '']),
            1768 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 284,  'nombrexx' => 'TIPO DEPENDENCIA']);
        $tema->parametros()->sync([
            805 => $this->getCM(['simianti' => '']), //opcional
            1473 => $this->getCM(['simianti' => '']), //opcional
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 285,  'nombrexx' => 'DIRIGIDO A:']);
        $tema->parametros()->sync([
            805 => $this->getCM(['simianti' => '']),
            1473 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 286,  'nombrexx' => 'CUENTA DOCUMENTO']);
        $tema->parametros()->sync([
            1474 => $this->getCM(['simianti' => '']),
            1475 => $this->getCM(['simianti' => '']),
            1476 => $this->getCM(['simianti' => '']),
            1477 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 287,  'nombrexx' => 'VINCULADO']);
        $tema->parametros()->sync([
            775 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
            1481 => $this->getCM(['simianti' => '']),
            1482 => $this->getCM(['simianti' => '']),
            1483 => $this->getCM(['simianti' => '']),
            1484 => $this->getCM(['simianti' => '']),
            1485 => $this->getCM(['simianti' => '']),
            1486 => $this->getCM(['simianti' => '']),
            1487 => $this->getCM(['simianti' => '']),
            1488 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 288,  'nombrexx' => 'UNIDAD DE MEDIDA']);
        $tema->parametros()->sync([
            1680 => $this->getCM(['simianti' => '']), //CENTÍMETROS
            1681 => $this->getCM(['simianti' => '']), //METROS
            1682 => $this->getCM(['simianti' => '']), //PULGADAS
            1683 => $this->getCM(['simianti' => '']), //LITROS
            1684 => $this->getCM(['simianti' => '']), //MILIMETROS
            1685 => $this->getCM(['simianti' => '']), //KILOS
            1686 => $this->getCM(['simianti' => '']), //GRAMOS
            1687 => $this->getCM(['simianti' => '']), //LIBRAS
            1769 => $this->getCM(['simianti' => '']), //PLIEGO
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 289,  'nombrexx' => 'ESTADO TABLAS']);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 290,  'nombrexx' => 'TIPO DE VESTIMENTA']);
        $tema->parametros()->sync([
            2484 => $this->getCM(['simianti' => '1']),
            2485 => $this->getCM(['simianti' => '2']),
            445 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 291,  'nombrexx' => 'ESPACIO DONDE PARCHA']);
        $tema->parametros()->sync([
            234 => $this->getCM(['simianti' => '']),
            262 => $this->getCM(['simianti' => '17']),
            398 => $this->getCM(['simianti' => '']),
            437 => $this->getCM(['simianti' => '']),
            1506 => $this->getCM(['simianti' => '4']),
            594 => $this->getCM(['simianti' => '5']),
            477 => $this->getCM(['simianti' => '']),
            1504 => $this->getCM(['simianti' => '30']),
            502 => $this->getCM(['simianti' => '16']),
            503 => $this->getCM(['simianti' => '']),
            504 => $this->getCM(['simianti' => '']),
            270 => $this->getCM(['simianti' => '8']),
            506 => $this->getCM(['simianti' => '']),
            507 => $this->getCM(['simianti' => '']),
            508 => $this->getCM(['simianti' => '']),
            509 => $this->getCM(['simianti' => '']),
            1501 => $this->getCM(['simianti' => '26']),
            511 => $this->getCM(['simianti' => '10']),
            1492 => $this->getCM(['simianti' => '11']),
            513 => $this->getCM(['simianti' => '12']),
            616 => $this->getCM(['simianti' => '']),
            515 => $this->getCM(['simianti' => '']),
            539 => $this->getCM(['simianti' => '']),
            1493 => $this->getCM(['simianti' => '14']),
            570 => $this->getCM(['simianti' => '']),
            595 => $this->getCM(['simianti' => '']),
            598 => $this->getCM(['simianti' => '']),
            624 => $this->getCM(['simianti' => '7']),
            668 => $this->getCM(['simianti' => '23']),
            682 => $this->getCM(['simianti' => '']),
            704 => $this->getCM(['simianti' => '']),
            706 => $this->getCM(['simianti' => '22']),
            708 => $this->getCM(['simianti' => '6']),
            709 => $this->getCM(['simianti' => '13']),
            1490 => $this->getCM(['simianti' => '1']),
            1503 => $this->getCM(['simianti' => '29']),
            1495 => $this->getCM(['simianti' => '18']),
            1496 => $this->getCM(['simianti' => '20']),
            1497 => $this->getCM(['simianti' => '21']),
            1498 => $this->getCM(['simianti' => '23']),
            1499 => $this->getCM(['simianti' => '24']),
            1500 => $this->getCM(['simianti' => '12']),
            308 => $this->getCM(['simianti' => '12']),
            1502 => $this->getCM(['simianti' => '27']),
            1505 => $this->getCM(['simianti' => '31']),

        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 292,  'nombrexx' => 'MOTIVOS DE AUSENCIA']);
        $tema->parametros()->sync([
            268 => $this->getCM(['simianti' => '']),
            335 => $this->getCM(['simianti' => '']),
            476 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
            1799 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 293,  'nombrexx' => 'ACONTECIMIENTOS GENERADORES DE AFECTACIONES EMOCIONALES']);
        $tema->parametros()->sync([
            932 => $this->getCM(['simianti' => '']),
            933 => $this->getCM(['simianti' => '']),
            934 => $this->getCM(['simianti' => '']),
            955 => $this->getCM(['simianti' => '']),
            953 => $this->getCM(['simianti' => '']),
            954 => $this->getCM(['simianti' => '']),
            581 => $this->getCM(['simianti' => '']),
            338 => $this->getCM(['simianti' => '']),
            936 => $this->getCM(['simianti' => '']),
            663 => $this->getCM(['simianti' => '']),
            339 => $this->getCM(['simianti' => '']),

            2320 => $this->getCM(['simianti' => '']),

            2458 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 294,  'nombrexx' => 'POSICIÓN OCUPACIONAL',]);
        $tema->parametros()->sync([
            666  => $this->getCM(['simianti' => '']),
            710  => $this->getCM(['simianti' => '']),
            738  => $this->getCM(['simianti' => '']),
            804  => $this->getCM(['simianti' => '']),
            806  => $this->getCM(['simianti' => '']),
            863  => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
            1545 => $this->getCM(['simianti' => '']),
            1553 => $this->getCM(['simianti' => '']),
            1561 => $this->getCM(['simianti' => '']),
            812  => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 295,  'nombrexx' => 'CATEGORIA INDICADORES',]);
        $tema->parametros()->sync([
            246  => $this->getCM(['simianti' => '']),
            247  => $this->getCM(['simianti' => '']),
            248  => $this->getCM(['simianti' => '']),
            300  => $this->getCM(['simianti' => '']),
            301  => $this->getCM(['simianti' => '']),
            302  => $this->getCM(['simianti' => '']),
            840  => $this->getCM(['simianti' => '']),
            518  => $this->getCM(['simianti' => '']),
            841  => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 296,  'nombrexx' => 'ACTIVIDAD GENERA INGRESO CHC']);
        $tema->parametros()->sync([
            627 => $this->getCM(['simianti' => '']),
            628 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 297,  'nombrexx' => 'RESPUESTA VALIDACIONES INDICADORES']);
        $tema->parametros()->sync([
            627 => $this->getCM(['simianti' => '']),
            628 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 298,  'nombrexx' => 'ACCIONES VIOLENCIA VI']);
        $tema->parametros()->sync([
            1323 => $this->getCM(['simianti' => '']),
            1368 => $this->getCM(['simianti' => '']),
            1395 => $this->getCM(['simianti' => '']),
            853 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 299,  'nombrexx' => 'TIPO DE RED VI']);
        $tema->parametros()->sync([
            282 => $this->getCM(['simianti' => '']),
            1805 => $this->getCM(['simianti' => '']),
            547 => $this->getCM(['simianti' => '']),
            548 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 300,  'nombrexx' => 'MOTIVOS QUE HA TENIDO PARA QUITARSE LA VIDA (VI)']);
        $tema->parametros()->sync([
            932 => $this->getCM(['simianti' => '']),
            933 => $this->getCM(['simianti' => '']),
            934 => $this->getCM(['simianti' => '']),
            935 => $this->getCM(['simianti' => '']),
            574 => $this->getCM(['simianti' => '']),
            581 => $this->getCM(['simianti' => '']),
            936 => $this->getCM(['simianti' => '']),
            338 => $this->getCM(['simianti' => '']),
            339 => $this->getCM(['simianti' => '']),
            937 => $this->getCM(['simianti' => '']),
            340 => $this->getCM(['simianti' => '']),
            2458 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 301,  'nombrexx' => 'PROBLEMAS DE SALUD']);
        $tema->parametros()->sync([
            318 => $this->getCM(['simianti' => '']),
            319 => $this->getCM(['simianti' => '']),
            320 => $this->getCM(['simianti' => '']),
            321 => $this->getCM(['simianti' => '']),
            322 => $this->getCM(['simianti' => '']),
            324 => $this->getCM(['simianti' => '']),
            325 => $this->getCM(['simianti' => '']),
            327 => $this->getCM(['simianti' => '']),
            328 => $this->getCM(['simianti' => '']),
            329 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 302,  'nombrexx' => 'TIPO DE DILIGENCIAMIENTO']);
        $tema->parametros()->sync([
            1634 => $this->getCM(['simianti' => '']),
            1635 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 303,  'nombrexx' => 'ESTADO DE INGRESO']);
        $tema->parametros()->sync([
            1636 => $this->getCM(['simianti' => '']),
            1637 => $this->getCM(['simianti' => '']),
            1638 => $this->getCM(['simianti' => '']),
            1671 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 304,  'nombrexx' => 'PRENDAS DE VESTIR']);
        $tema->parametros()->sync([
            1640 => $this->getCM(['simianti' => '']),
            1641 => $this->getCM(['simianti' => '']),
            1642 => $this->getCM(['simianti' => '']),
            1643 => $this->getCM(['simianti' => '']),
            1644 => $this->getCM(['simianti' => '']),
            1645 => $this->getCM(['simianti' => '']),
            1646 => $this->getCM(['simianti' => '']),
            1647 => $this->getCM(['simianti' => '']),
            1648 => $this->getCM(['simianti' => '']),
            1649 => $this->getCM(['simianti' => '']),
            1650 => $this->getCM(['simianti' => '']),
            1651 => $this->getCM(['simianti' => '']),
            1652 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 305,  'nombrexx' => 'MATERIAL DE LAS PRENDAS']);
        $tema->parametros()->sync([
            1653 => $this->getCM(['simianti' => '']),
            1654 => $this->getCM(['simianti' => '']),
            1655 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 306,  'nombrexx' => 'LÍNEAS DE ATENCIÓN']);
        $tema->parametros()->sync([
            1656 => $this->getCM(['simianti' => '']),
            1657 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 307,  'nombrexx' => 'OBJETIVOS DE SALIDA AI']);
        $tema->parametros()->sync([
            1658 => $this->getCM(['simianti' => '']),
            1659 => $this->getCM(['simianti' => '']),
            1660 => $this->getCM(['simianti' => '']),
            1661 => $this->getCM(['simianti' => '']),
            1662 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 308,  'nombrexx' => 'ESTADO A LA SALIDA AI']);
        $tema->parametros()->sync([
            1663 => $this->getCM(['simianti' => '']),
            1664 => $this->getCM(['simianti' => '']),
            1665 => $this->getCM(['simianti' => '']),
            1666 => $this->getCM(['simianti' => '']),
            1667 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 309,  'nombrexx' => 'ESTADO DEL REGISTRO',]); //309
        $tema->parametros()->sync([
            1636 => $this->getCM(['simianti' => '']),
            1637 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 310,  'nombrexx' => 'TIPO DE VINCULACION',]); //310
        $tema->parametros()->sync([
            1672 => $this->getCM(['simianti' => '']),
            1673 => $this->getCM(['simianti' => '']),
            1674 => $this->getCM(['simianti' => '']),
            1675 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 311,  'nombrexx' => 'CICLO VITAL',]); //311
        $tema->parametros()->sync([
            1676 => $this->getCM(['simianti' => '']),
            1677 => $this->getCM(['simianti' => '']),
            1678 => $this->getCM(['simianti' => '']),
            1679 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 312,  'nombrexx' => 'VSPA - TIPO DE VALORACIÓN',]);
        $tema->parametros()->sync([
            1689 => $this->getCM(['simianti' => '']),
            1690 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 313,  'nombrexx' => 'VSPA - CONDICIÓN ESCOLAR',]);
        $tema->parametros()->sync([
            1691 => $this->getCM(['simianti' => '']),
            1692 => $this->getCM(['simianti' => '']),
            1693 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 314,  'nombrexx' => 'VSPA - FUENTE DE INGRESOS',]);
        $tema->parametros()->sync([
            642  => $this->getCM(['simianti' => '']),
            643  => $this->getCM(['simianti' => '']),
            636  => $this->getCM(['simianti' => '']),
            1694 => $this->getCM(['simianti' => '']),
            627  => $this->getCM(['simianti' => '']),
            1695 => $this->getCM(['simianti' => '']),
            639  => $this->getCM(['simianti' => '']),
            1696 => $this->getCM(['simianti' => '']),
            439  => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 315,  'nombrexx' => 'VSPA - MODALIDAD DE ATENCIÓN',]);
        $tema->parametros()->sync([
            1697 => $this->getCM(['simianti' => '']),
            1698 => $this->getCM(['simianti' => '']),
            1699 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 316,  'nombrexx' => 'VSPA - CÓMO ACUDUDIÓ A LA INSTITUCIÓN',]);
        $tema->parametros()->sync([
            1700 => $this->getCM(['simianti' => '']),
            1701 => $this->getCM(['simianti' => '']),
            1702 => $this->getCM(['simianti' => '']),
            1704 => $this->getCM(['simianti' => '']),
            1705 => $this->getCM(['simianti' => '']),
            1706 => $this->getCM(['simianti' => '']),
            439  => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 317,  'nombrexx' => 'VSPA - SITIO HABITUAL DE CONSUMO',]);
        $tema->parametros()->sync([
            1707 => $this->getCM(['simianti' => '']),
            1490 => $this->getCM(['simianti' => '']),
            1708 => $this->getCM(['simianti' => '']),
            1709 => $this->getCM(['simianti' => '']),
            1710 => $this->getCM(['simianti' => '']),
            1711 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 318,  'nombrexx' => 'VSPA - FRECUENCIA DE USO',]);
        $tema->parametros()->sync([
            429 => $this->getCM(['simianti' => '']),
            432 => $this->getCM(['simianti' => '']),
            433 => $this->getCM(['simianti' => '']),
            435 => $this->getCM(['simianti' => '']),
            434 => $this->getCM(['simianti' => '']),
            436 => $this->getCM(['simianti' => '']),
            438 => $this->getCM(['simianti' => '']),
            430 => $this->getCM(['simianti' => '']),
            431 => $this->getCM(['simianti' => '']),
            439 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 319,  'nombrexx' => 'VSPA - IMPACTO NEGATIVO',]);
        $tema->parametros()->sync([
            246 => $this->getCM(['simianti' => '']),
            247 => $this->getCM(['simianti' => '']),
            248 => $this->getCM(['simianti' => '']),
            300 => $this->getCM(['simianti' => '']),
            301 => $this->getCM(['simianti' => '']),
            302 => $this->getCM(['simianti' => '']),
            840 => $this->getCM(['simianti' => '']),
            518 => $this->getCM(['simianti' => '']),
            841 => $this->getCM(['simianti' => '']),
            519 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 320,  'nombrexx' => 'VSPA - TIPO DE DROGA',]);
        $tema->parametros()->sync([
            403  => $this->getCM(['simianti' => '']),
            402  => $this->getCM(['simianti' => '']),
            406  => $this->getCM(['simianti' => '']),
            1712 => $this->getCM(['simianti' => '']),
            404  => $this->getCM(['simianti' => '']),
            405  => $this->getCM(['simianti' => '']),
            760  => $this->getCM(['simianti' => '']),
            1609 => $this->getCM(['simianti' => '']),
            1713 => $this->getCM(['simianti' => '']),
            1714 => $this->getCM(['simianti' => '']),
            1715 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 321,  'nombrexx' => 'VSPA - CANTIDAD DE CIGARRILLOS',]);
        $tema->parametros()->sync([
            1716 => $this->getCM(['simianti' => '']),
            1717 => $this->getCM(['simianti' => '']),
            1718 => $this->getCM(['simianti' => '']),
            1719 => $this->getCM(['simianti' => '']),
            1720 => $this->getCM(['simianti' => '']),
            1721 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 322,  'nombrexx' => 'VSPA - COMO OBTIENE LA SUSTANCIA',]);
        $tema->parametros()->sync([
            1722 => $this->getCM(['simianti' => '']),
            1723 => $this->getCM(['simianti' => '']),
            1724 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 323,  'nombrexx' => 'VSPA - UNIDAD DE MEDIDA',]);
        $tema->parametros()->sync([
            1686 => $this->getCM(['simianti' => '']),
            244 => $this->getCM(['simianti' => '']),
            1725 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 324,  'nombrexx' => 'VSPA - ACOSTUMBRA A UTILIZAR LA SUSTANCIA',]);
        $tema->parametros()->sync([
            1726 => $this->getCM(['simianti' => '']),
            1727 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 325,  'nombrexx' => 'VSPA - ACOSTUMBRA A COMPARTIR AGUJAS',]);
        $tema->parametros()->sync([
            1728 => $this->getCM(['simianti' => '']),
            1729 => $this->getCM(['simianti' => '']),
            1114 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 326,  'nombrexx' => 'RIESGO O VICTIMA ESCNNA',]); //326
        $tema->parametros()->sync([
            563 => $this->getCM(['simianti' => '']),
            976 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 327,  'nombrexx' => '¿CUáLES FUERON LAS RAZONES PARA HABER INICIADO LA HABITANZA EN CALLE?',]); //327
        $tema->parametros()->sync([
            662 => $this->getCM(['simianti' => '']),
            663 => $this->getCM(['simianti' => '']),
            664 => $this->getCM(['simianti' => '']),
            665 => $this->getCM(['simianti' => '']),
            666 => $this->getCM(['simianti' => '']),
            936 => $this->getCM(['simianti' => '']),
            667 => $this->getCM(['simianti' => '']),
            335 => $this->getCM(['simianti' => '']),
            669 => $this->getCM(['simianti' => '']),
            670 => $this->getCM(['simianti' => '']),
            671 => $this->getCM(['simianti' => '']),
            672 => $this->getCM(['simianti' => '']),
            673 => $this->getCM(['simianti' => '']),
            674 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 328,  'nombrexx' => '¿RAZONES POR LAS CUALES CONTINUA LA HABITANZA EN CALLE?',]); //328
        $tema->parametros()->sync([
            335 => $this->getCM(['simianti' => '']),
            338 => $this->getCM(['simianti' => '']),
            662 => $this->getCM(['simianti' => '']),
            667 => $this->getCM(['simianti' => '']),
            669 => $this->getCM(['simianti' => '']),
            670 => $this->getCM(['simianti' => '']),
            671 => $this->getCM(['simianti' => '']),
            672 => $this->getCM(['simianti' => '']),
            673 => $this->getCM(['simianti' => '']),
            676 => $this->getCM(['simianti' => '']),
            677 => $this->getCM(['simianti' => '']),
            678 => $this->getCM(['simianti' => '']),
            681 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 329,  'nombrexx' => 'VMA - TIPO DE TRASTORNO',]);
        $tema->parametros()->sync([
            1730 => $this->getCM(['simianti' => '']),
            1731 => $this->getCM(['simianti' => '']),
            1732 => $this->getCM(['simianti' => '']),
            1733 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 330,  'nombrexx' => 'VMA - TIPO DE APETITO',]);
        $tema->parametros()->sync([
            1115 => $this->getCM(['simianti' => '']),
            1734 => $this->getCM(['simianti' => '']),
            1735 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 331,  'nombrexx' => 'VMA - SUDORACIÓN',]);
        $tema->parametros()->sync([
            1115 => $this->getCM(['simianti' => '']),
            1736 => $this->getCM(['simianti' => '']),
            1737 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 332,  'nombrexx' => 'VMA - ESTADO DE ÁNIMO',]);
        $tema->parametros()->sync([
            1738 => $this->getCM(['simianti' => '']),
            1739 => $this->getCM(['simianti' => '']),
            1740 => $this->getCM(['simianti' => '']),
            1741 => $this->getCM(['simianti' => '']),
            1742 => $this->getCM(['simianti' => '']),
            1743 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 333,  'nombrexx' => 'VMA - TRATAMIENTO',]);
        $tema->parametros()->sync([
            1240 => $this->getCM(['simianti' => '']),
            1243 => $this->getCM(['simianti' => '']),
            1241 => $this->getCM(['simianti' => '']),
            1244 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 334,  'nombrexx' => 'VMA - CONDUCTA',]);
        $tema->parametros()->sync([
            1156 => $this->getCM(['simianti' => '']),
            1235 => $this->getCM(['simianti' => '']),
            1744 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 335,  'nombrexx' => 'VMA - TIPO DE DIAGNÓSTICO',]);
        $tema->parametros()->sync([
            1160 => $this->getCM(['simianti' => '']),
            1161 => $this->getCM(['simianti' => '']),
            1745 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 336,  'nombrexx' => 'LUGARES/ESPACIOS EXTERNOS',]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 337,  'nombrexx' => 'TIPO LETRA TITULOS',]);
        $tema->parametros()->sync([
            1760 => $this->getCM(['simianti' => '']),
            1761 => $this->getCM(['simianti' => '']),
            1762 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 338,  'nombrexx' => 'RESPONSABLE DE LA ACTIVIDAD',]);
        $tema->parametros()->sync([
            1770 => $this->getCM(['simianti' => '']),
            808 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 339,  'nombrexx' => 'SEXO DEPENDENCIAS',]);
        $tema->parametros()->sync([
            23 => $this->getCM(['simianti' => '']),
            24 => $this->getCM(['simianti' => '']),
            2324 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 340,  'nombrexx' => 'FORMULARIO MOTIVO DE ESTADO PARA EL REGISTRO',]);
        $tema->parametros()->sync([
            2325 => $this->getCM(['simianti' => '']),
            2326 => $this->getCM(['simianti' => '']),
            2327 => $this->getCM(['simianti' => '']),
            2328 => $this->getCM(['simianti' => '']),
            2351 => $this->getCM(['simianti' => '']),
            2482 => $this->getCM(['simianti' => '']),
            2483 => $this->getCM(['simianti' => '']),
            2498 => $this->getCM(['simianti' => '']),
            2499 => $this->getCM(['simianti' => '']),
            2500 => $this->getCM(['simianti' => '']),
            2501 => $this->getCM(['simianti' => '']),
            2505 => $this->getCM(['simianti' => '']),
            2504 => $this->getCM(['simianti' => '']),
            2509 => $this->getCM(['simianti' => '']),
        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 341,  'nombrexx' => 'LA DISCAPACIDAD FUE PRODUCIDA POR LA COMISION DE ALGUN ACTO ILEGAL',]);
        $tema->parametros()->sync([
            27 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
            2329 => $this->getCM(['simianti' => '']),
            2330 => $this->getCM(['simianti' => '']),
            2331 => $this->getCM(['simianti' => '']),
            2332 => $this->getCM(['simianti' => '']),
            2333 => $this->getCM(['simianti' => '']),

        ]);


        $tema = $this->getR(['campoxxx'=>null,'temaidxx' => 342,  'nombrexx' => 'HA SIDO VICTIMA DE ATAQUES CON',]);
        $tema->parametros()->sync([
            853 => $this->getCM(['simianti' => '']),
            2334 => $this->getCM(['simianti' => '']),
            2335 => $this->getCM(['simianti' => '']),
            2336 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 343,
            'nombrexx' => '¿QUE ACTIVIDADES REALIZA EN SU TIEMPO LIBRE?',
        ]);
        $tema->parametros()->sync(
            [
                488 => $this->getCM(['simianti' => '']),
                489 => $this->getCM(['simianti' => '']),
                1581 => $this->getCM(['simianti' => '']),
                1582 => $this->getCM(['simianti' => '']),
                1583 => $this->getCM(['simianti' => '']),
                1584 => $this->getCM(['simianti' => '']),
                1585 => $this->getCM(['simianti' => '']),
                1586 => $this->getCM(['simianti' => '']),
                1587 => $this->getCM(['simianti' => '']),
                1588 => $this->getCM(['simianti' => '']),
                1589 => $this->getCM(['simianti' => '']),
                1590 => $this->getCM(['simianti' => '']),
                1591 => $this->getCM(['simianti' => '']),
                1592 => $this->getCM(['simianti' => '']),
                2354 => $this->getCM(['simianti' => '']),
            ]
        ); //343



        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 344,

            'nombrexx' => '¿POR LAS ACCIONES EN LAS CUALES PRESUNTAMENTE ESTA EN CONFLICTO CON LA LEY HA ACTUADO EN?',
        ]);
        $tema->parametros()->sync(
            [
                2338 => $this->getCM(['simianti' => '']),
                2339 => $this->getCM(['simianti' => '']),
                2340 => $this->getCM(['simianti' => '']),
                2341 => $this->getCM(['simianti' => '']),
                2342 => $this->getCM(['simianti' => '']),
                2343 => $this->getCM(['simianti' => '']),
                1726 => $this->getCM(['simianti' => '']),
            ]
        ); //344
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 345,
            'nombrexx' => '12.1 ¿Presenta algún tipo de violencia?',
        ]);
        $tema->parametros()->sync(
            [
                227 => $this->getCM(['simianti' => '']),
                228 => $this->getCM(['simianti' => '']),
            ]
        ); //345
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 346,
            'nombrexx' => '12.1 A Ha ejercido algún tipo de presunta violencia durante la actividad en conflicto con la ley?',
        ]);
        $tema->parametros()->sync(
            [
                227 => $this->getCM(['simianti' => '']),
                228 => $this->getCM(['simianti' => '']),
            ]
        ); //346

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 347,
            'nombrexx' => 'COMBO VIOLENCIA PARA: (VIOLENCIAS Y CONDICION ESPECIAL)',
        ]);
        $tema->parametros()->sync(
            [
                528 => $this->getCM(['simianti' => '']),
                524 => $this->getCM(['simianti' => '']),
                525 => $this->getCM(['simianti' => '']),
                526 => $this->getCM(['simianti' => '']),
            ]
        ); //347

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 348,
            'nombrexx' => 'COMBO CONTEXTOS PARA: (VIOLENCIAS Y CONDICION ESPECIAL)',
        ]);
        $tema->parametros()->sync(
            [
                282 => $this->getCM(['simianti' => '']),
                521 => $this->getCM(['simianti' => '']),
                522 => $this->getCM(['simianti' => '']),
                523 => $this->getCM(['simianti' => '']),
            ]
        ); //348

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 349,
            'nombrexx' => '12.2 El tipo de violencia referenciado corresponde a violencia basada en',
        ]);
        $tema->parametros()->sync(
            [
                235 => $this->getCM(['simianti' => '']),
                2344 => $this->getCM(['simianti' => '']),
                2345 => $this->getCM(['simianti' => '']),
                2346 => $this->getCM(['simianti' => '']),
            ]
        ); //349

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 350,
            'nombrexx' => '12.1.B  Que tipo de presuntas lesiones ha cometido durante la actividad?',
        ]);
        $tema->parametros()->sync(
            [
                337 => $this->getCM(['simianti' => '']),
                2347 => $this->getCM(['simianti' => '']),
                2348 => $this->getCM(['simianti' => '']),
                2349 => $this->getCM(['simianti' => '']),
                2350 => $this->getCM(['simianti' => '']),
            ]
        ); //350
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 351,
            'nombrexx' => 'condiciones especiales  CR',
        ]);
        $tema->parametros()->sync(
            [
                450 => $this->getCM(['simianti' => '']),
                451 => $this->getCM(['simianti' => '']),
                452 => $this->getCM(['simianti' => '']),
                454 => $this->getCM(['simianti' => '']),
                853 => $this->getCM(['simianti' => '']),
                936 => $this->getCM(['simianti' => '']),
            ]
        ); //351
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 352,
            'nombrexx' => '¿Es cabeza de familia? cr',
        ]);
        $tema->parametros()->sync(
            [
                227 => $this->getCM(['simianti' => '']),
                228 => $this->getCM(['simianti' => '']),
                235 => $this->getCM(['simianti' => '']),
            ]
        ); //352
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 353,
            'nombrexx' => '¿Es usted Joven en presunto conflicto con la ley?',
        ]);
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '']),
            228 => $this->getCM(['simianti' => '']),
            235 => $this->getCM(['simianti' => '']),
        ]); //353

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 354,
            'nombrexx' => 'ESTRATEGIA'
        ]);
        $tema->parametros()->sync([
            651 => $this->getCM(['simianti' => '']),
            2323 => $this->getCM(['simianti' => '']),
            445 => $this->getCM(['simianti' => '']),
        ]); //354
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 355,
            'nombrexx' => 'SIN ESTRATEGIA',
        ]);
        $tema->parametros()->sync([
         235 => $this->getCM(['simianti' => '']),
         445 => $this->getCM(['simianti' => '']),
         ]); //355
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 356,
            'nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN TRABAJADOR SOCIAL',
        ]);
        $tema->parametros()->sync(
            [
                1062 => $this->getCM(['simianti' => '']),
                1063 => $this->getCM(['simianti' => '']),
                1064 => $this->getCM(['simianti' => '']),
                1065 => $this->getCM(['simianti' => '']),
                1067 => $this->getCM(['simianti' => '']),
            ]
        ); //356
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 357,
            'nombrexx' => 'motivo vinculacion SPOA',
        ]);
        $tema->parametros()->sync(
            [
                346 => $this->getCM(['simianti' => '']),
                347 => $this->getCM(['simianti' => '']),
                348 => $this->getCM(['simianti' => '']),
                349 => $this->getCM(['simianti' => '']),
                350 => $this->getCM(['simianti' => '']),
                360 => $this->getCM(['simianti' => '']),
                352 => $this->getCM(['simianti' => '']),
                351 => $this->getCM(['simianti' => '']),
            ]
        ); //357
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 358,
            'nombrexx' => 'PARENTESCO FI',
        ]);
        $tema->parametros()->sync(
            [
                235 => $this->getCM(['simianti' => '']),
                600 => $this->getCM(['simianti' => 'VECINO']),
                770 => $this->getCM(['simianti' => 'PADRE']),
                771 => $this->getCM(['simianti' => 'MADRE']),
                776 => $this->getCM(['simianti' => 'HERMANO']),
                777 => $this->getCM(['simianti' => 'HERMANA']),
                778 => $this->getCM(['simianti' => 'PRIMO']),
                779 => $this->getCM(['simianti' => 'PRIMA']),
                780 => $this->getCM(['simianti' => 'PADRASTRO']),
                781 => $this->getCM(['simianti' => 'MADRASTRA']),
                782 => $this->getCM(['simianti' => 'HERMANASTRA']),
                783 => $this->getCM(['simianti' => 'HERMANASTRO']),
                784 => $this->getCM(['simianti' => 'CÓNYUGE']),
                785 => $this->getCM(['simianti' => 'HIJO']),
                786 => $this->getCM(['simianti' => 'HIJA']),
                787 => $this->getCM(['simianti' => 'SOBRINO']),
                788 => $this->getCM(['simianti' => 'SOBRINA']),
                789 => $this->getCM(['simianti' => 'CUÑADO']),
                790 => $this->getCM(['simianti' => 'CUÑADA']),
                791 => $this->getCM(['simianti' => 'PADRINO']),
                792 => $this->getCM(['simianti' => 'MADRINA']),
                793 => $this->getCM(['simianti' => 'TIO_P']),
                794 => $this->getCM(['simianti' => 'TIO_M']),
                795 => $this->getCM(['simianti' => 'ABUELO_P']),
                796 => $this->getCM(['simianti' => 'ABUELO_M']),
                797 => $this->getCM(['simianti' => 'ABUELASTRO']),
                798 => $this->getCM(['simianti' => 'SUO']),
                799 => $this->getCM(['simianti' => 'SUE']),
                800 => $this->getCM(['simianti' => 'DEFENSOR_F']),
                801 => $this->getCM(['simianti' => '']),
                802 => $this->getCM(['simianti' => '']),
                803 => $this->getCM(['simianti' => 'AMIGO']),
                805 => $this->getCM(['simianti' => '']),
                808 => $this->getCM(['simianti' => 'ACOMPAÑANTE']),
                809 => $this->getCM(['simianti' => 'COM']),
                810 => $this->getCM(['simianti' => '']),
                1479 => $this->getCM(['simianti' => '']),
                1480 => $this->getCM(['simianti' => '']),
                1594 => $this->getCM(['simianti' => 'CDF']),
                2511 => $this->getCM(['simianti' => 'TIA_P']),
                2512 => $this->getCM(['simianti' => 'TIA_M']),
                2513 => $this->getCM(['simianti' => 'ABUELA_P']),
                2514 => $this->getCM(['simianti' => 'ABUELA_M']),
                2515 => $this->getCM(['simianti' => 'ABUELASTRA']),
                2516 => $this->getCM(['simianti' => 'AMIGA']),
                2517 => $this->getCM(['simianti' => 'ABUELO']),
                2518 => $this->getCM(['simianti' => 'ABUELA']),
                2519 => $this->getCM(['simianti' => '3']),
                2520 => $this->getCM(['simianti' => 'CONYUGUE']),
                2521 => $this->getCM(['simianti' => 'TIO']),
                2522 => $this->getCM(['simianti' => 'TIA']),
            ]
        ); //358
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 359,
            'nombrexx' => 'TIPO POBLACION CSD',
        ]);
        $tema->parametros()->sync(
            [
                650 => $this->getCM(['simianti' => '']),
                651 => $this->getCM(['simianti' => '']),
                235 => $this->getCM(['simianti' => '']),
            ]
        );

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 360,
            'nombrexx' => 'PROBLEMA CSD',
        ]);
        $tema->parametros()->sync(
            [
                567 => $this->getCM(['simianti' => '']),
                568 => $this->getCM(['simianti' => '']),
                569 => $this->getCM(['simianti' => '']),
                561 => $this->getCM(['simianti' => '']),
                572 => $this->getCM(['simianti' => '']),
                573 => $this->getCM(['simianti' => '']),
                574 => $this->getCM(['simianti' => '']),
                575 => $this->getCM(['simianti' => '']),
                576 => $this->getCM(['simianti' => '']),
                579 => $this->getCM(['simianti' => '']),
                581 => $this->getCM(['simianti' => '']),
                583 => $this->getCM(['simianti' => '']),
                582 => $this->getCM(['simianti' => '']),
                577 => $this->getCM(['simianti' => '']),
                571 => $this->getCM(['simianti' => '']),
                655 => $this->getCM(['simianti' => '']),
                578 => $this->getCM(['simianti' => '']),
                580 => $this->getCM(['simianti' => '']), //  2322,
            ]
        ); //360


        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 361,
            'nombrexx' => 'TIPO DE DOCUMENTO CSD',
        ]);
        $tema->parametros()->sync(
            [
                19 => $this->getCM(['simianti' => '']),
                142 => $this->getCM(['simianti' => '']),
                143 => $this->getCM(['simianti' => '']),
                144 => $this->getCM(['simianti' => '']),
                145 => $this->getCM(['simianti' => '']), //  2322,
            ]
        ); //361

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 362,
            'nombrexx' => 'motivo vinculacion justicia',
        ]);
        $tema->parametros()->sync(
            [
                346 => $this->getCM(['simianti' => '']),
                347 => $this->getCM(['simianti' => '']),
                348 => $this->getCM(['simianti' => '']),
                349 => $this->getCM(['simianti' => '']),
                350 => $this->getCM(['simianti' => '']),
                360 => $this->getCM(['simianti' => '']),
                352 => $this->getCM(['simianti' => '']),
                351 => $this->getCM(['simianti' => '']),
                2480 => $this->getCM(['simianti' => '']),
                2481 => $this->getCM(['simianti' => '']),
            ]
        ); //362

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 363,
            'nombrexx' => 'Autorización de respuesta',
        ]);
        $tema->parametros()->sync(
            [
                2487 => $this->getCM(['simianti' => '']),
                2488 => $this->getCM(['simianti' => '']),
                2489 => $this->getCM(['simianti' => '']),
                2490 => $this->getCM(['simianti' => '']),
            ]
        ); //363

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 364,
            'nombrexx' => 'Documentos talleres',
        ]);
        $tema->parametros()->sync(
            [
                2506 => $this->getCM(['simianti' => '']),
                2507 => $this->getCM(['simianti' => '']),
                2508 => $this->getCM(['simianti' => '']),
            ]
        ); //364

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 365,
            'nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN PSICOLOGO CLINICO',
        ]); //365
        $tema->parametros()->sync(
            [
                1060 => $this->getCM(['simianti' => '']),
                1061 => $this->getCM(['simianti' => '']),
                1064 => $this->getCM(['simianti' => '']),
                1065 => $this->getCM(['simianti' => '']),
                1066 => $this->getCM(['simianti' => '']),
                1067 => $this->getCM(['simianti' => '']),
            ]
        );

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '1.12 ¿Cuenta con el documento físico?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //366
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
            235=>$this->getCM(['simianti' => '4']),
            445 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '1.15 ¿Tiene definida su situación militar?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //367
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
            235=>$this->getCM(['simianti' => '4']),
            445 => $this->getCM(['simianti' => '']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '¿Actualmente se encuentra en el PARD?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //368
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
        ]);
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '10.4 ¿Se encuentra vinculado a la delincuencia o a la violencia?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //369
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
        ]);
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '10.5 ¿Se cuentra en riesgo de participar en actos delictivos?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //370
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
        ]);
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '¿Actualmente se encuentra vinculado al SRPA?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //371
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 25,
            'nombrexx' => '10.3 ¿Ha estado vinculado al Sistema Penal Oral Acusatorio - SPOA?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //372
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
            235 => $this->getCM(['simianti' => '3']),
        ]);
        $tema = $this->getR([
            'temaidxx' => 23,
            'nombrexx' => '10.1 ¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos - PARD?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //373
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
        ]);
        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 23,
            'nombrexx' => '10.2 ¿Ha estado vinculado al Sistema de Responsabilidad Penal Adolescente - SRPA?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //374
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),

        ]);

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 25,
            'nombrexx' => '10.3A ¿Ha estado privado de la libertad?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //375
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
            235 => $this->getCM(['simianti' => '3']),
        ]);

        $tema = $this->getR(['campoxxx'=>null,
            'temaidxx' => 25,
            'nombrexx' => '¿Actualmente se encuentra en conflicto con la ley - SPOA?' // esto se debe cambiar por el contenido de la pregunta en el formulario que se asigna el combo
            ]); //376
        $tema->parametros()->sync([
            227 => $this->getCM(['simianti' => '1']),
            228 => $this->getCM(['simianti' => '2']),
            235 => $this->getCM(['simianti' => '3']),
        ]);


    }
}
