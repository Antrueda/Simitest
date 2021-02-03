<?php

use App\Models\Tema;
use Illuminate\Database\Seeder;

class TemasTableSeeder extends Seeder
{
    public function getR($dataxxxx)
    {
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1];
        $tema = Tema::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => strtoupper($dataxxxx['nombrexx'])]);
        $parametr = [];
        foreach ($dataxxxx['parametr'] as  $value) {
            $parametr[$value] = $camposmagicos;
        }
        $tema->parametros()->sync($parametr);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1];


        $tema = Tema::create(['id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Orden Sucesoral']);
        $tema->parametros()->sync([
            1 => $camposmagicos,
            2 => $camposmagicos,
            3 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 2, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Documento Soporte Poliza']);
        $tema->parametros()->sync([
            4 => $camposmagicos,
            5 => $camposmagicos,
            6 => $camposmagicos,
            7 => $camposmagicos,
            8 => $camposmagicos,
            9 => $camposmagicos,
            10 => $camposmagicos,
            11 => $camposmagicos,
            12 => $camposmagicos,
            13 => $camposmagicos,
            14 => $camposmagicos,
            15 => $camposmagicos,
            2494 => $camposmagicos,
            2495 => $camposmagicos,
            2496=> $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 3, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Tipo de Documento']);
        $tema->parametros()->sync([
            16 => $camposmagicos,
            17 => $camposmagicos,
            18 => $camposmagicos,
            19 => $camposmagicos,
            142 => $camposmagicos,
            143 => $camposmagicos,
            144 => $camposmagicos,
            145 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 4, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO TIEMPO']);
        $tema->parametros()->sync([
            1509 => $camposmagicos,
            400 => $camposmagicos,
            401 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 5, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'AM/PM']);
        $tema->parametros()->sync([
            298 => $camposmagicos,
            299 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 6, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Frecuencia VSI']);
        $tema->parametros()->sync([
            980 => $camposmagicos,
            1057 => $camposmagicos,
            982 => $camposmagicos,
            983 => $camposmagicos,
            984 => $camposmagicos,
            985 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 7, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VIOLENCIA DISCRIMINACIÓN']);
        $tema->parametros()->sync([
            664 => $camposmagicos,
            665 => $camposmagicos,
            956 => $camposmagicos,
            957 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 8, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Frecuencia de Consumo de Alimentos']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 9, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Alimentos']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 10, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Acción Plan Alimentario']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 11, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Sexo']);
        $tema->parametros()->sync([
            20 => $camposmagicos,
            21 => $camposmagicos,
            22 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 12, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'IDENTIDADE DE GÉNERO']);
        $tema->parametros()->sync([
            23 => $camposmagicos,
            24 => $camposmagicos,
            25 => $camposmagicos,
            26 => $camposmagicos,
            27 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 13, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Orientación Sexual']);
        $tema->parametros()->sync([
            27 => $camposmagicos,
            29 => $camposmagicos,
            30 => $camposmagicos,
            31 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 14, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Pieza Dental']);
        $tema->parametros()->sync([
            33 => $camposmagicos,
            34 => $camposmagicos,
            35 => $camposmagicos,
            36 => $camposmagicos,
            37 => $camposmagicos,
            38 => $camposmagicos,
            39 => $camposmagicos,
            40 => $camposmagicos,
            41 => $camposmagicos,
            42 => $camposmagicos,
            43 => $camposmagicos,
            44 => $camposmagicos,
            45 => $camposmagicos,
            46 => $camposmagicos,
            47 => $camposmagicos,
            48 => $camposmagicos,
            49 => $camposmagicos,
            50 => $camposmagicos,
            51 => $camposmagicos,
            52 => $camposmagicos,
            53 => $camposmagicos,
            54 => $camposmagicos,
            55 => $camposmagicos,
            56 => $camposmagicos,
            57 => $camposmagicos,
            58 => $camposmagicos,
            59 => $camposmagicos,
            60 => $camposmagicos,
            61 => $camposmagicos,
            62 => $camposmagicos,
            63 => $camposmagicos,
            64 => $camposmagicos,
            65 => $camposmagicos,
            66 => $camposmagicos,
            67 => $camposmagicos,
            68 => $camposmagicos,
            69 => $camposmagicos,
            70 => $camposmagicos,
            71 => $camposmagicos,
            72 => $camposmagicos,
            73 => $camposmagicos,
            74 => $camposmagicos,
            75 => $camposmagicos,
            76 => $camposmagicos,
            77 => $camposmagicos,
            78 => $camposmagicos,
            79 => $camposmagicos,
            80 => $camposmagicos,
            81 => $camposmagicos,
            82 => $camposmagicos,
            83 => $camposmagicos,
            84 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 15, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Superficie Dental']);
        $tema->parametros()->sync([
            85 => $camposmagicos,
            86 => $camposmagicos,
            87 => $camposmagicos,
            88 => $camposmagicos,
            89 => $camposmagicos,
            90 => $camposmagicos,
            91 => $camposmagicos,
            92 => $camposmagicos,
            93 => $camposmagicos,
            94 => $camposmagicos,
            95 => $camposmagicos,
            96 => $camposmagicos,
            97 => $camposmagicos,
            98 => $camposmagicos,
            99 => $camposmagicos,
            100 => $camposmagicos,
            101 => $camposmagicos,
            102 => $camposmagicos,
            103 => $camposmagicos,
            104 => $camposmagicos,
            105 => $camposmagicos,
            106 => $camposmagicos,
            107 => $camposmagicos,
            108 => $camposmagicos,
            109 => $camposmagicos,
            110 => $camposmagicos,
            111 => $camposmagicos,
            112 => $camposmagicos,
            113 => $camposmagicos,
            114 => $camposmagicos,
            115 => $camposmagicos,
            116 => $camposmagicos,
            117 => $camposmagicos,
            118 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 16, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Diagnostico Dental']);
        $tema->parametros()->sync([
            119 => $camposmagicos,
            120 => $camposmagicos,
            121 => $camposmagicos,
            122 => $camposmagicos,
            123 => $camposmagicos,
            124 => $camposmagicos,
            125 => $camposmagicos,
            126 => $camposmagicos,
            127 => $camposmagicos,
            128 => $camposmagicos,
            129 => $camposmagicos,
            130 => $camposmagicos,
            131 => $camposmagicos,
            132 => $camposmagicos,
            133 => $camposmagicos,
            134 => $camposmagicos,
            135 => $camposmagicos,
            136 => $camposmagicos,
            137 => $camposmagicos,
            138 => $camposmagicos,
            139 => $camposmagicos,
            140 => $camposmagicos,
            141 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 17, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Grupo Sanguíneo']);
        $tema->parametros()->sync([
            146 => $camposmagicos,
            147 => $camposmagicos,
            148 => $camposmagicos,
            149 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 18, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RH']);
        $tema->parametros()->sync([
            150 => $camposmagicos,
            151 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 19, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Estado Civil']);
        $tema->parametros()->sync([
            152 => $camposmagicos,
            153 => $camposmagicos,
            154 => $camposmagicos,
            155 => $camposmagicos,
            156 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 20, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Grupo Étnico']);
        $tema->parametros()->sync([
            157 => $camposmagicos,
            158 => $camposmagicos,
            159 => $camposmagicos,
            160 => $camposmagicos,
            161 => $camposmagicos,
            162 => $camposmagicos,
            163 => $camposmagicos,
            164 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 21, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Estado Afiliación']);
        $tema->parametros()->sync([
            165 => $camposmagicos,
            166 => $camposmagicos,
            167 => $camposmagicos,
            1631 => $camposmagicos,
            168 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 22, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Entidad Promotora de Salud']);
        $tema->parametros()->sync([
            169 => $camposmagicos,
            170 => $camposmagicos,
            171 => $camposmagicos,
            172 => $camposmagicos,
            173 => $camposmagicos,
            174 => $camposmagicos,
            175 => $camposmagicos,
            176 => $camposmagicos,
            177 => $camposmagicos,
            178 => $camposmagicos,
            179 => $camposmagicos,
            180 => $camposmagicos,
            181 => $camposmagicos,
            182 => $camposmagicos,
            183 => $camposmagicos,
            184 => $camposmagicos,
            185 => $camposmagicos,
            186 => $camposmagicos,
            187 => $camposmagicos,
            188 => $camposmagicos,
            189 => $camposmagicos,
            190 => $camposmagicos,
            191 => $camposmagicos,
            192 => $camposmagicos,
            193 => $camposmagicos,
            194 => $camposmagicos,
            195 => $camposmagicos,
            196 => $camposmagicos,
            197 => $camposmagicos,
            198 => $camposmagicos,
            199 => $camposmagicos,
            200 => $camposmagicos,
            201 => $camposmagicos,
            202 => $camposmagicos,
            203 => $camposmagicos,
            204 => $camposmagicos,
            205 => $camposmagicos,
            206 => $camposmagicos,
            207 => $camposmagicos,
            208 => $camposmagicos,
            209 => $camposmagicos,
            210 => $camposmagicos,
            211 => $camposmagicos,
            212 => $camposmagicos,
            213 => $camposmagicos,
            214 => $camposmagicos,
            215 => $camposmagicos,
            216 => $camposmagicos,
            217 => $camposmagicos,
            218 => $camposmagicos,
            219 => $camposmagicos,
            220 => $camposmagicos,
            221 => $camposmagicos,
            222 => $camposmagicos,
            223 => $camposmagicos,
            224 => $camposmagicos,
            225 => $camposmagicos,
            226 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 23, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SI/NO']);
        $tema->parametros()->sync([
            227 => $camposmagicos,
            228 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 24, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Tipo Discapacidad']);
        $tema->parametros()->sync([
            229 => $camposmagicos,
            230 => $camposmagicos,
            231 => $camposmagicos,
            232 => $camposmagicos,
            233 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 25, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Condicional No Aplica']);
        $tema->parametros()->sync([
            227 => $camposmagicos,
            228 => $camposmagicos,
            235 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 26, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Aplicación Sisben']);
        $tema->parametros()->sync([
            236 => $camposmagicos,
            237 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 27, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Método Anticonceptivo']);
        $tema->parametros()->sync([
            238 => $camposmagicos,
            239 => $camposmagicos,
            240 => $camposmagicos,
            241 => $camposmagicos,
            242 => $camposmagicos,
            243 => $camposmagicos,
            244 => $camposmagicos,
            245 => $camposmagicos,
            2478 => $camposmagicos,
            2479 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 28, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Número Comidas']);
        $tema->parametros()->sync([
            246 => $camposmagicos,
            247 => $camposmagicos,
            248 => $camposmagicos,
            300 => $camposmagicos,
            301 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 29, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Motivo Comidas Diarias']);
        $tema->parametros()->sync([
            249 => $camposmagicos,
            250 => $camposmagicos,
            251 => $camposmagicos,
            252 => $camposmagicos,
            253 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 30, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Tipo Proceso']);
        $tema->parametros()->sync([
            254 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 31, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Por Qué']);
        $tema->parametros()->sync([
            255 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 32, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Radio Button sino']);
        $tema->parametros()->sync([
            257 => $camposmagicos,
            258 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 33, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Clase Libreta']);
        $tema->parametros()->sync([
            260 => $camposmagicos,
            261 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 34, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RESIDENCIA RHC']);
        $tema->parametros()->sync([
            262 => $camposmagicos,
            263 => $camposmagicos,
            264 => $camposmagicos,
            265 => $camposmagicos,
            266 => $camposmagicos,
            267 => $camposmagicos,
            269 => $camposmagicos,
            270 => $camposmagicos,
            271 => $camposmagicos,
            272 => $camposmagicos,
            273 => $camposmagicos,
            274 => $camposmagicos,
            275 => $camposmagicos,
            276 => $camposmagicos,

            509 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 35, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'La Residencia es']);
        $tema->parametros()->sync([
            278 => $camposmagicos,
            279 => $camposmagicos,
            280 => $camposmagicos,
            281 => $camposmagicos,
            282 => $camposmagicos,
            283 => $camposmagicos,
        ]);
        $this->getR([
            'nombrexx' => 'Tipo Dirección',
            'parametr' => [235, 285, 286,]
        ]); //36
        $tema = Tema::create(['id' => 37, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Zona Donde Vive']);
        $tema->parametros()->sync([
            287 => $camposmagicos,
            288 => $camposmagicos,
            289 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 38, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Cuadrante']);
        $tema->parametros()->sync([
            290 => $camposmagicos,
            291 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 39, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Alfabeto']);
        $tema->parametros()->sync([
            89 => $camposmagicos,
            93 => $camposmagicos,
            138 => $camposmagicos,
            149 => $camposmagicos,
            146 => $camposmagicos,
            147 => $camposmagicos,
            294 => $camposmagicos,
            462 => $camposmagicos,
            85 => $camposmagicos,
            701 => $camposmagicos,
            743 => $camposmagicos,
            744 => $camposmagicos,
            745 => $camposmagicos,
            746 => $camposmagicos,
            747 => $camposmagicos,
            748 => $camposmagicos,
            749 => $camposmagicos,
            750 => $camposmagicos,
            751 => $camposmagicos,
            752 => $camposmagicos,
            753 => $camposmagicos,
            754 => $camposmagicos,
            755 => $camposmagicos,
            756 => $camposmagicos,
            757 => $camposmagicos,
            758 => $camposmagicos,
            759 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 40, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Bis']);
        $tema->parametros()->sync([
            296 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 41, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Estrato Socioeconómico']);
        $tema->parametros()->sync([
            27 => $camposmagicos,
            246 => $camposmagicos,
            247 => $camposmagicos,
            248 => $camposmagicos,
            300 => $camposmagicos,
            301 => $camposmagicos,
            302 => $camposmagicos,
            303 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 42, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Condiciones del Ambiente']);
        $tema->parametros()->sync([
            168 => $camposmagicos,
            305 => $camposmagicos,
            306 => $camposmagicos,
            307 => $camposmagicos,
            308 => $camposmagicos,
            309 => $camposmagicos,
            310 => $camposmagicos,
            311 => $camposmagicos,
            312 => $camposmagicos,
            313 => $camposmagicos,
            314 => $camposmagicos,
            315 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 43, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Eventos médicos']);
        $tema->parametros()->sync([

            318 => $camposmagicos,
            319 => $camposmagicos,
            320 => $camposmagicos,
            321 => $camposmagicos,
            322 => $camposmagicos,
            323 => $camposmagicos,
            324 => $camposmagicos,
            325 => $camposmagicos,
            326 => $camposmagicos,
            327 => $camposmagicos,
            328 => $camposmagicos,
            329 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 44, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Tipo Teléfono']);
        $tema->parametros()->sync([
            330 => $camposmagicos,
            331 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 45, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Motivo PARD']);
        $tema->parametros()->sync([
            332 => $camposmagicos,
            334 => $camposmagicos,
            335 => $camposmagicos,
            336 => $camposmagicos,
            337 => $camposmagicos,
            338 => $camposmagicos,
            339 => $camposmagicos,
            340 => $camposmagicos,
            341 => $camposmagicos,
            342 => $camposmagicos,
            343 => $camposmagicos,
            344 => $camposmagicos,
            345 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'motivo vinculacion SRPA']);
        $tema->parametros()->sync([
            346 => $camposmagicos,
            347 => $camposmagicos,
            348 => $camposmagicos,
            349 => $camposmagicos,
            350 => $camposmagicos,
            351 => $camposmagicos,
            352 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 47, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'medida pedagogica SRPA']);
        $tema->parametros()->sync([
            354 => $camposmagicos,
            355 => $camposmagicos,
            356 => $camposmagicos,
            357 => $camposmagicos,
            358 => $camposmagicos,
            359 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 48, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Motivo de la vinculación al SRPA']);
        $tema->parametros()->sync([
            346 => $camposmagicos,
            347 => $camposmagicos,
            348 => $camposmagicos,
            349 => $camposmagicos,
            350 => $camposmagicos,
            351 => $camposmagicos,
            352 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 49, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'sanciones SPOA']);
        $tema->parametros()->sync([
            362 => $camposmagicos,
            364 => $camposmagicos,
            2475=> $camposmagicos,
            2474=> $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 50, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CAUSAS VINCUALCIÓN DELINCUENCIA']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 51, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Lugar PARD']);
        $tema->parametros()->sync([
            371 => $camposmagicos,
            372 => $camposmagicos,
            373 => $camposmagicos,
            374 => $camposmagicos,
            375 => $camposmagicos,
            378 => $camposmagicos,
            379 => $camposmagicos,
            380 => $camposmagicos,
            390 => $camposmagicos,
            391 => $camposmagicos,
            392 => $camposmagicos,
            393 => $camposmagicos,
            394 => $camposmagicos,
            395 => $camposmagicos,
            396 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 52, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NIVEL DE AVANCE']);
        $tema->parametros()->sync([
            512 => $camposmagicos,
            514 => $camposmagicos,
            559 => $camposmagicos,
            1688 => $camposmagicos,
        ]);;
        $tema = Tema::create(['id' => 53, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Sustancia Psicoactiva']);
        $tema->parametros()->sync([
            402 => $camposmagicos,
            403 => $camposmagicos,
            404 => $camposmagicos,
            405 => $camposmagicos,
            406 => $camposmagicos,
            760 => $camposmagicos,
            1606 => $camposmagicos,
            1603 => $camposmagicos,
            1613 => $camposmagicos,
            1617 => $camposmagicos,
            1618 => $camposmagicos,
            1621 => $camposmagicos,
            2460 => $camposmagicos,
            2461 => $camposmagicos,
            2462 => $camposmagicos,
            2463 => $camposmagicos,
            2464 => $camposmagicos,
            2465 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 54, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Frecuencia Uso Sustancia']);
        $tema->parametros()->sync([
            429 => $camposmagicos,
            430 => $camposmagicos,
            431 => $camposmagicos,
            432 => $camposmagicos,
            433 => $camposmagicos,
            434 => $camposmagicos,
            435 => $camposmagicos,
            436 => $camposmagicos,
            437 => $camposmagicos,
            438 => $camposmagicos,
            439 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 55, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Via Administracion']);
        $tema->parametros()->sync([
            439 => $camposmagicos,
            440 => $camposmagicos,
            441 => $camposmagicos,
            442 => $camposmagicos,
            443 => $camposmagicos,
            444 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 56, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Plano Afectacion']);
        $tema->parametros()->sync([
            446 => $camposmagicos,
            447 => $camposmagicos,
            448 => $camposmagicos,
            449 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 57, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'condiciones especiales']);
        $tema->parametros()->sync([
            450 => $camposmagicos,
            451 => $camposmagicos,
            452 => $camposmagicos,
            853 => $camposmagicos,
            454 => $camposmagicos,
            936 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 58, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RIESGO ESCNNA']);
        $tema->parametros()->sync([
            472 => $camposmagicos,
            473 => $camposmagicos,
            474 => $camposmagicos,
            475 => $camposmagicos,
            853 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 59, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'BENEFICIOS']);
        $tema->parametros()->sync([
            498 => $camposmagicos,
            557 => $camposmagicos,
            773 => $camposmagicos,
            774 => $camposmagicos,
            775 => $camposmagicos,
            1625 => $camposmagicos,
            1626 => $camposmagicos,
            1627 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 60, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SITUACIÓN MILITAR']);
        $tema->parametros()->sync([
            227 => $camposmagicos,
            228 => $camposmagicos,
            235 => $camposmagicos,
            562 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 61, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'POBLACIÓN INDÍGENA']);
        $poblacio = [
            565 => $camposmagicos,
            648 => $camposmagicos,
            649 => $camposmagicos,
            652 => $camposmagicos,
            653 => $camposmagicos,
            654 => $camposmagicos,
            692 => $camposmagicos,
            693 => $camposmagicos,
            694 => $camposmagicos,
            695 => $camposmagicos,
            2456 => $camposmagicos,
        ];
        for ($i = 2355; $i <= 2448; $i++) {
            $poblacio[$i] = $camposmagicos;
        }
        $tema->parametros()->sync($poblacio);
        $tema = Tema::create(['id' => 62, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO VIA PRINCIPAL']);
        $tema->parametros()->sync([
            276 => $camposmagicos,
            736 => $camposmagicos,
            737 => $camposmagicos,
            739 => $camposmagicos,
            740 => $camposmagicos,
            741 => $camposmagicos,
            742 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 63, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO VINCULACION IDIPRON']);
        $tema->parametros()->sync([

            761 => $camposmagicos,
            762 => $camposmagicos,
            763 => $camposmagicos,
            764 => $camposmagicos,
            765 => $camposmagicos,
            766 => $camposmagicos,
            767 => $camposmagicos,
            768 => $camposmagicos,
            769 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 64, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'REPRESENTACION LEGAL']);
        $tema->parametros()->sync([
            770 => $camposmagicos,
            771 => $camposmagicos,
            772 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 65, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MODALIDAD']);
        $tema->parametros()->sync([
            773 => $camposmagicos,
            774 => $camposmagicos,
            775 => $camposmagicos,
            1487 => $camposmagicos,
            1668 => $camposmagicos,
        ]);

        $this->getR([
            'nombrexx' => 'CONVENCION B, PARENTESCO O PERSONA',
            'parametr' => [
                235, 600, 770, 771, 776, 777, 778, 779, 780, 781, 782, 783, 784, 785, 786, 787, 788, 789, 790, 791, 792, 793, 794,
                795, 796, 797, 798, 799, 800, 801, 802, 803, 805, 808, 809, 810, 1479, 1480,
            ]
        ]); //66
        $tema = Tema::create(['id' => 67, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CSD - RÉGIMEN ESPECIAL EN SALUD']);
        $tema->parametros()->sync([
            201  => $camposmagicos,
            1746 => $camposmagicos,
            1747 => $camposmagicos,
            1748 => $camposmagicos,
            1749 => $camposmagicos,
            343  => $camposmagicos,
            1750 => $camposmagicos,
            1751 => $camposmagicos,
            1752 => $camposmagicos,
            1753 => $camposmagicos,
            1754 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 68, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CSD - RÉGIMEN VINCULADO']);
        $tema->parametros()->sync([
            1755 => $camposmagicos,
            1756 => $camposmagicos,
            1757 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 69, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÚLTIMO GRADO CSD']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 70, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Presenta dificultades para acceder a alguna red de apoyo? VI']);
        $tema->parametros()->sync([
            447 => $camposmagicos,
            805 => $camposmagicos,
            2457 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 71, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Motivos de restricción de acceso a espacios, servicio o redes de apoyo VI']);
        $tema->parametros()->sync([
            955 => $camposmagicos,
            953 => $camposmagicos,
            295 => $camposmagicos,
            292 => $camposmagicos,
            297 => $camposmagicos,
            293 => $camposmagicos,
            1038 => $camposmagicos,
            1400 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 72, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Motivos por el cual se presenta la restricción']);
        $tema->parametros()->sync([
            32  => $camposmagicos,
            115 => $camposmagicos,
            139 => $camposmagicos,
            571 => $camposmagicos,
            258 => $camposmagicos,
            292 => $camposmagicos,
            293 => $camposmagicos,
            1803 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 73, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONVENCIÓN A']);
        $tema->parametros()->sync([
            567 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 74, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'QUÉ PERSONA(S) PARECEN PRODUCIR O EMPEORAR ESTAS DIFICULTADES']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 75, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIEMPO AL DIA']);
        $tema->parametros()->sync([
            485 => $camposmagicos,
            486 => $camposmagicos,
            492 => $camposmagicos,
            529 => $camposmagicos,
            529 => $camposmagicos,
            529 => $camposmagicos,
            530 => $camposmagicos,
            531 => $camposmagicos,
            532 => $camposmagicos,
            533 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 76, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DIAS SEMANA CANTIDAD']);
        $tema->parametros()->sync([
            487 => $camposmagicos,
            490 => $camposmagicos,
            491 => $camposmagicos,
            515 => $camposmagicos,
            516 => $camposmagicos,
            517 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 77, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACTIVIDADES REALIZADAS']);
        $tema->parametros()->sync([
            488 => $camposmagicos,
            489 => $camposmagicos,
            1581 => $camposmagicos,
            1582 => $camposmagicos,
            1583 => $camposmagicos,
            1584 => $camposmagicos,
            1585 => $camposmagicos,
            1586 => $camposmagicos,
            1587 => $camposmagicos,
            1588 => $camposmagicos,
            1589 => $camposmagicos,
            1590 => $camposmagicos,
            1591 => $camposmagicos,
            1592 => $camposmagicos,
            2337 => $camposmagicos,
            2354 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 78, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RELIGION QUE PROFESA']);
        $tema->parametros()->sync([
            494 => $camposmagicos,
            1513 => $camposmagicos,
            1514 => $camposmagicos,
            1515 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 79, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SACRAMENTOS REALIZADOS']);
        $tema->parametros()->sync([
            495 => $camposmagicos,
            1623 => $camposmagicos,
            1624 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 80, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PROCESOS']);
        $tema->parametros()->sync([
            496 => $camposmagicos,
            497 => $camposmagicos,
            498 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 81, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA PANTALON']);
        $tema->parametros()->sync([
            46 => $camposmagicos,
            519 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 82, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA CAMISA']);
        $tema->parametros()->sync([
            300 => $camposmagicos,
            302 => $camposmagicos,
            518 => $camposmagicos,
            519 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 83, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA ZAPATOS']);
        $tema->parametros()->sync([
            46 => $camposmagicos,
            47 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 84, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'AÑO PRESTACION SERVICIO']);
        $tema->parametros()->sync([
            541 => $camposmagicos,
            542 => $camposmagicos,
            543 => $camposmagicos,
            544 => $camposmagicos,
            545 => $camposmagicos,
            549 => $camposmagicos,
            550 => $camposmagicos,
            2283 => $camposmagicos,
            2279 => $camposmagicos,
            2314 => $camposmagicos,
            2299 => $camposmagicos,
            2311 => $camposmagicos,
            2449 => $camposmagicos,
            2450 => $camposmagicos,
            2451 => $camposmagicos,
            2452 => $camposmagicos,
            2453 => $camposmagicos,
            2454 => $camposmagicos,
            2455 => $camposmagicos,
            2218 => $camposmagicos,
            2219 => $camposmagicos,
            2220 => $camposmagicos,
            2221 => $camposmagicos,
            2222 => $camposmagicos,
            2223 => $camposmagicos,
            2224 => $camposmagicos,
            2225 => $camposmagicos,
            2226 => $camposmagicos,
            2227 => $camposmagicos,
            2316 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 85, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TEMA PARAMETRO CORREGIR']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            521 => $camposmagicos,
            522 => $camposmagicos,
            523 => $camposmagicos,
            524 => $camposmagicos,
            525 => $camposmagicos,
            526 => $camposmagicos,
            527 => $camposmagicos,
            528 => $camposmagicos,
            543 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 86, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TEMAS INDICADORES']);
        $tema->parametros()->sync([
            544 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 87, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ANTECEDENTES SALUD VSI']);
        $tema->parametros()->sync([
            979 => $camposmagicos,
            981 => $camposmagicos,
            1034 => $camposmagicos,
            1035 => $camposmagicos,
            1036 => $camposmagicos,
            1037 => $camposmagicos,
            869 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 88, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE RED']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            1805 => $camposmagicos,
            547 => $camposmagicos,
            548 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 89, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SITUACION VULNERACION RIESGO']);
        $tema->parametros()->sync([
            256 => $camposmagicos,
            333 => $camposmagicos,
            340 => $camposmagicos,
            334 => $camposmagicos,
            366 => $camposmagicos,
            381 => $camposmagicos,
            168 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 90, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MATERIAL PISOS']);
        $tema->parametros()->sync([
            382 => $camposmagicos,
            383 => $camposmagicos,
            384 => $camposmagicos,
            385 => $camposmagicos,
            386 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 91, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MATERIAL MUROS']);
        $tema->parametros()->sync([
            387 => $camposmagicos,
            388 => $camposmagicos,
            389 => $camposmagicos,
            408 => $camposmagicos,
            409 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 92, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONDICIONES AMBIENTALES CSD']);
        $tema->parametros()->sync([
            410 => $camposmagicos,
            411 => $camposmagicos,
            412 => $camposmagicos,
            413 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 93, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO CONDICIONES AMBIENTALES']);
        $tema->parametros()->sync([
            414 => $camposmagicos,
            415 => $camposmagicos,
            416 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 94, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SERVICIOS PUBLICOS']);
        $tema->parametros()->sync([
            417 => $camposmagicos,
            418 => $camposmagicos,
            419 => $camposmagicos,
            420 => $camposmagicos,
            421 => $camposmagicos,
            422 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 95, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'LEGALIDAD']);
        $tema->parametros()->sync([
            423 => $camposmagicos,
            424 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 96, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESPACIOS HOGAR']);
        $tema->parametros()->sync([
            425 => $camposmagicos,
            426 => $camposmagicos,
            427 => $camposmagicos,
            428 => $camposmagicos,
            456 => $camposmagicos,
            457 => $camposmagicos,
            458 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 97, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ANTECEDENTES PROBLEMAS SOCIALES']);
        $tema->parametros()->sync([
            337 => $camposmagicos,
            339 => $camposmagicos,
            459 => $camposmagicos,
            460 => $camposmagicos,
            461 => $camposmagicos,
            463 => $camposmagicos,
            464 => $camposmagicos,
            465 => $camposmagicos,
            466 => $camposmagicos,
            468 => $camposmagicos,
            470 => $camposmagicos,
            334 => $camposmagicos,
            2473 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 98, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPOLOGIA FAMILIAR']);
        $tema->parametros()->sync([
            471 => $camposmagicos,
            484 => $camposmagicos,
            493 => $camposmagicos,
            520 => $camposmagicos,
            534 => $camposmagicos,
            546 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 99, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPOLOGIA DE HOGAR']);
        $tema->parametros()->sync([
            552 => $camposmagicos,
            553 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 100, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RAZON TRASLADO']);
        $tema->parametros()->sync([
            554 => $camposmagicos,
            555 => $camposmagicos,
            556 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 101, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO VINCULACION']);
        $tema->parametros()->sync([
            335 => $camposmagicos,
            337 => $camposmagicos,
            557 => $camposmagicos,
            558 => $camposmagicos,
            559 => $camposmagicos,
            560 => $camposmagicos,
            561 => $camposmagicos,
            563 => $camposmagicos,
            564 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 102, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PROBLEMATICA FAMILAR']);
        $tema->parametros()->sync([
            567 => $camposmagicos,
            568 => $camposmagicos,
            569 => $camposmagicos,
            561 => $camposmagicos,
            572 => $camposmagicos,
            573 => $camposmagicos,
            574 => $camposmagicos,
            575 => $camposmagicos,
            576 => $camposmagicos,
            579 => $camposmagicos,
            2466 => $camposmagicos,
            581 => $camposmagicos,
            583 => $camposmagicos,
            582 => $camposmagicos,
            974 => $camposmagicos,
            571 => $camposmagicos,
            655 => $camposmagicos,
            578 => $camposmagicos,
            975 => $camposmagicos,
            976 => $camposmagicos,
            978 => $camposmagicos,
            563 => $camposmagicos,
            339 => $camposmagicos,
            973 => $camposmagicos,
            1788 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 103, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'FORMA ESTABLECER REGLAS HOGAR']);
        $tema->parametros()->sync([
            584 => $camposmagicos,
            585 => $camposmagicos,
            586 => $camposmagicos,
            1759 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 104, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'FORMA ACTUAR NORMAS']);
        $tema->parametros()->sync([
            587 => $camposmagicos,
            588 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 105, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SOLUCION PROBLEMAS CASA']);
        $tema->parametros()->sync([
            589 => $camposmagicos,
            590 => $camposmagicos,
            591 => $camposmagicos,
            592 => $camposmagicos,
            593 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 106, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACUDE PROBLEMAS CASA']);
        $tema->parametros()->sync([
            594 => $camposmagicos,
            1006 => $camposmagicos,
            596 => $camposmagicos,
            597 => $camposmagicos,
            1639 => $camposmagicos,
            599 => $camposmagicos,
            600 => $camposmagicos,
            601 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 107, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MODO ACTUAR INCUMPLIMIENTO REGLAS']);
        $tema->parametros()->sync([
            602 => $camposmagicos,
            603 => $camposmagicos,
            604 => $camposmagicos,
            605 => $camposmagicos,
            606 => $camposmagicos,
            1478 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 108, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MIEMBROS FAMILA DESTACAN']);
        $tema->parametros()->sync([
            607 => $camposmagicos,
            608 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 109, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACTUA FAMILIA SUCESOS POSITIVOS']);
        $tema->parametros()->sync([
            609 => $camposmagicos,
            610 => $camposmagicos,
            611 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 110, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PERIODICIDAD']);
        $tema->parametros()->sync([
            367 => $camposmagicos,
            612 => $camposmagicos,
            613 => $camposmagicos,
            614 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 111, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DONDE COMPRA ALIMENTOS']);
        $tema->parametros()->sync([
            615 => $camposmagicos,
            616 => $camposmagicos,
            617 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 112, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ALIMENTACION DIARIA']);
        $tema->parametros()->sync([
            618 => $camposmagicos,
            619 => $camposmagicos,
            620 => $camposmagicos,
            621 => $camposmagicos,
            622 => $camposmagicos,
            853 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 113, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ENTIDAD RECIBE ALIMENTACION']);
        $tema->parametros()->sync([
            426 => $camposmagicos,
            623 => $camposmagicos,
            625 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 114, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACTIVIDAD GENERA INGRESO']);
        $tema->parametros()->sync([
            626 => $camposmagicos,
            627 => $camposmagicos,
            628 => $camposmagicos,
            853 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 115, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TRABAJO INFORMAL']);
        $tema->parametros()->sync([
            630 => $camposmagicos,
            631 => $camposmagicos,
            632 => $camposmagicos,
            633 => $camposmagicos,
            634 => $camposmagicos,
            // 635 => $camposmagicos,
            2177 => $camposmagicos,
            2217 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 116, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'OTRAS ACTIVIDADES']);
        $tema->parametros()->sync([

            637 => $camposmagicos,
            2168 => $camposmagicos,
            639 => $camposmagicos,
            640 => $camposmagicos,
            641 => $camposmagicos,
            2486 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 117, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO RELACION LABORAL']);
        $tema->parametros()->sync([
            642 => $camposmagicos,
            643 => $camposmagicos,
            644 => $camposmagicos,
            645 => $camposmagicos,
            646 => $camposmagicos,
            1561 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 118, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO RETIRO']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 119, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO POBLACION FI']);
        $tema->parametros()->sync([
            650 => $camposmagicos,
            651 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 120, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CAUSAS VINCULACION DELINCUENCIA']);
        $tema->parametros()->sync([
            499 => $camposmagicos,
            500 => $camposmagicos,
            501 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 121, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO RESIDENCIA DUERME']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 122, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NINGUNA FUENTE INGRESO']);
        $tema->parametros()->sync([
            277 => $camposmagicos,
            284 => $camposmagicos,
            317 => $camposmagicos,
            353 => $camposmagicos,
            711 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 123, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'JORNADA INGRESOS']);
        $tema->parametros()->sync([
            365 => $camposmagicos,
            397 => $camposmagicos,
            407 => $camposmagicos,
            467 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 124, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DIAS SEMANA NOMBRE']);
        $tema->parametros()->sync([
            469 => $camposmagicos,
            478 => $camposmagicos,
            479 => $camposmagicos,
            480 => $camposmagicos,
            481 => $camposmagicos,
            482 => $camposmagicos,
            483 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 125, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'FRECUENCIA INGRESOS']);
        $tema->parametros()->sync([
            367 => $camposmagicos,
            612 => $camposmagicos,
            613 => $camposmagicos,
            614 => $camposmagicos,
            235 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 126, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VICTIMA ESCNNA']);
        $tema->parametros()->sync([
            656 => $camposmagicos,
            657 => $camposmagicos,
            658 => $camposmagicos,
            659 => $camposmagicos,
            660 => $camposmagicos,
            661 => $camposmagicos,
            853 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 127, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INICIO HABITANCIA CALLE']);
        $tema->parametros()->sync([
            662 => $camposmagicos,
            663 => $camposmagicos,
            664 => $camposmagicos,
            665 => $camposmagicos,
            666 => $camposmagicos,
            667 => $camposmagicos,
            668 => $camposmagicos,
            669 => $camposmagicos,
            670 => $camposmagicos,
            671 => $camposmagicos,
            672 => $camposmagicos,
            673 => $camposmagicos,
            674 => $camposmagicos,
            675 => $camposmagicos,
            676 => $camposmagicos,
            677 => $camposmagicos,
            678 => $camposmagicos,
            679 => $camposmagicos,
            680 => $camposmagicos,
            681 => $camposmagicos,
            682 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 128, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONTINUACION HABITANCIA CALLE']);
        $tema->parametros()->sync([
            662 => $camposmagicos,
            667 => $camposmagicos,
            668 => $camposmagicos,
            669 => $camposmagicos,
            670 => $camposmagicos,
            671 => $camposmagicos,
            672 => $camposmagicos,
            673 => $camposmagicos,
            675 => $camposmagicos,
            676 => $camposmagicos,
            677 => $camposmagicos,
            678 => $camposmagicos,
            681 => $camposmagicos,
            682 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 129, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DIAS DE SEMANA']);
        $tema->parametros()->sync([
            469 => $camposmagicos,
            478 => $camposmagicos,
            479 => $camposmagicos,
            480 => $camposmagicos,
            481 => $camposmagicos,
            482 => $camposmagicos,
            483 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 130, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NATURALEZA COL']);
        $tema->parametros()->sync([
            690 => $camposmagicos,
            691 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 131, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONVENCIÓN D']);
        $tema->parametros()->sync([
            235 => $camposmagicos,
            673 => $camposmagicos,
            879 => $camposmagicos,
            986 => $camposmagicos,
            987 => $camposmagicos,
            988 => $camposmagicos,
            989 => $camposmagicos,
            990 => $camposmagicos,
            991 => $camposmagicos,
            992 => $camposmagicos,
            993 => $camposmagicos,
            994 => $camposmagicos,
            995 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 132, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA PANTALON CAMISO NIÑO NIÑA']);
        $tema->parametros()->sync([
            34 => $camposmagicos,
            36 => $camposmagicos,
            38 => $camposmagicos,
            300 => $camposmagicos,
            302 => $camposmagicos,
            518 => $camposmagicos,
            519 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 133, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA CAM NIÑO']);
        $tema->parametros()->sync([
            34 => $camposmagicos,
            36 => $camposmagicos,
            38 => $camposmagicos,
            300 => $camposmagicos,
            302 => $camposmagicos,
            518 => $camposmagicos,
            519 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 134, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA PAL HOM ADULT']);
        $tema->parametros()->sync([
            48 => $camposmagicos,
            50 => $camposmagicos,
            52 => $camposmagicos,
            54 => $camposmagicos,
            56 => $camposmagicos,
            697 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 135, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA PAL MUJ ADULT']);
        $tema->parametros()->sync([
            34 => $camposmagicos,
            36 => $camposmagicos,
            38 => $camposmagicos,
            302 => $camposmagicos,
            518 => $camposmagicos,
            519 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 136, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA CAM HOM ADULT']);
        $tema->parametros()->sync([
            93 => $camposmagicos,
            138 => $camposmagicos,
            701 => $camposmagicos,
            702 => $camposmagicos,
            703 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 137, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA CAM MUJ ADULT']);
        $tema->parametros()->sync([
            93 => $camposmagicos,
            138 => $camposmagicos,
            700 => $camposmagicos,
            701 => $camposmagicos,
            702 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 138, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TALLA ZAPATO']);
        $tema->parametros()->sync([
            47 => $camposmagicos,
            48 => $camposmagicos,
            49 => $camposmagicos,
            50 => $camposmagicos,
            51 => $camposmagicos,
            52 => $camposmagicos,
            53 => $camposmagicos,
            54 => $camposmagicos,
            55 => $camposmagicos,
            56 => $camposmagicos,
            57 => $camposmagicos,
            58 => $camposmagicos,
            59 => $camposmagicos,
            696 => $camposmagicos,
            697 => $camposmagicos,
            698 => $camposmagicos,
            699 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 139, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SEXO Y ETARIO']);
        $tema->parametros()->sync([
            505 => $camposmagicos,
            705 => $camposmagicos,
            496 => $camposmagicos,
            707 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 140, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'HORAS LABORALES']);
        $tema->parametros()->sync([
            712 => $camposmagicos,
            713 => $camposmagicos,
            714 => $camposmagicos,
            715 => $camposmagicos,
            716 => $camposmagicos,
            717 => $camposmagicos,
            718 => $camposmagicos,
            719 => $camposmagicos,
            720 => $camposmagicos,
            721 => $camposmagicos,
            722 => $camposmagicos,
            723 => $camposmagicos,
            724 => $camposmagicos,
            725 => $camposmagicos,
            726 => $camposmagicos,
            727 => $camposmagicos,
            728 => $camposmagicos,
            729 => $camposmagicos,
            730 => $camposmagicos,
            731 => $camposmagicos,
            732 => $camposmagicos,
            733 => $camposmagicos,
            734 => $camposmagicos,
            735 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 141, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TAMA1']);
        $tema->parametros()->sync([
            812 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 142, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁMBITO VIOLENCIA']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            446 => $camposmagicos,
            521 => $camposmagicos,
            522 => $camposmagicos,
            523 => $camposmagicos,
            548 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 143, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO VIOLENCIA']);
        $tema->parametros()->sync([
            528 => $camposmagicos,
            524 => $camposmagicos,
            525 => $camposmagicos,
            526 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 144, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SERVICIOS DOMÉSTICOS']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 145, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RESIDENCIA CHC']);
        $tema->parametros()->sync([
            269 => $camposmagicos,
            270 => $camposmagicos,
            271 => $camposmagicos,
            272 => $camposmagicos,
            273 => $camposmagicos,
            509 => $camposmagicos,
            274 => $camposmagicos,
            275 => $camposmagicos,
            276 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 146, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MANERA CONTACTO IDIPRON']);
        $tema->parametros()->sync([
            813 => $camposmagicos,
            814 => $camposmagicos,
            815 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 147, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INGRESOS POR OPCIÓN']);
        $tema->parametros()->sync([
            816 => $camposmagicos,
            817 => $camposmagicos,
            818 => $camposmagicos,
            819 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 148, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PROBAR']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO INGRESO PROTECCION']);
        $tema->parametros()->sync([
            820 => $camposmagicos,
            821 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DOCUMENTO NNA']);
        $tema->parametros()->sync([
            16 => $camposmagicos,
            18 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'JORNADA ESTUDIO']);
        $tema->parametros()->sync([
            2213 => $camposmagicos,
            823 => $camposmagicos,
            824 => $camposmagicos,
            825 => $camposmagicos,
            2352 => $camposmagicos,
            2353 => $camposmagicos,
            828 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIEMPO EXTENSO']);
        $tema->parametros()->sync([
            400 => $camposmagicos,
            401 => $camposmagicos,
            1509 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NIVEL ESTUDIO']);
        $tema->parametros()->sync([
            829 => $camposmagicos,
            830 => $camposmagicos,
            831 => $camposmagicos,
            832 => $camposmagicos,
            833 => $camposmagicos,
            834 => $camposmagicos,
            835 => $camposmagicos,
            836 => $camposmagicos,
            837 => $camposmagicos,
            838 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'GRADO APROBADO']);
        $tema->parametros()->sync([
            235 => $camposmagicos,
            2260 => $camposmagicos,
            246 => $camposmagicos,
            247 => $camposmagicos,
            248 => $camposmagicos,
            300 => $camposmagicos,
            301 => $camposmagicos,
            302 => $camposmagicos,
            518 => $camposmagicos,
            840 => $camposmagicos,
            841 => $camposmagicos,
            519 => $camposmagicos,
            33 => $camposmagicos,
            34 => $camposmagicos,
            754 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DOCUMENTOS ANEXOS INGRESO']);
        $tema->parametros()->sync([
            5 => $camposmagicos,
            843 => $camposmagicos,
            844 => $camposmagicos,
            845 => $camposmagicos,
            846 => $camposmagicos,
            847 => $camposmagicos,
            849 => $camposmagicos,
            850 => $camposmagicos,
            851 => $camposmagicos,
            2468 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'OCUPACIÓN']);
        $tema->parametros()->sync([
            235 => $camposmagicos,
            1262 => $camposmagicos,
            647 => $camposmagicos,
            1534 => $camposmagicos,
            1535 => $camposmagicos,
            1536 => $camposmagicos,
            1537 => $camposmagicos,
            1538 => $camposmagicos,
            1539 => $camposmagicos,
            1540 => $camposmagicos,
            1541 => $camposmagicos,
            1542 => $camposmagicos,
            1543 => $camposmagicos,
            1544 => $camposmagicos,
            1545 => $camposmagicos,
            1546 => $camposmagicos,
            1547 => $camposmagicos,
            1548 => $camposmagicos,
            1549 => $camposmagicos,
            1550 => $camposmagicos,
            1551 => $camposmagicos,
            1552 => $camposmagicos,
            1553 => $camposmagicos,
            1554 => $camposmagicos,
            1555 => $camposmagicos,
            1556 => $camposmagicos,
            1557 => $camposmagicos,
            1558 => $camposmagicos,
            1559 => $camposmagicos,
            1560 => $camposmagicos,
            1561 => $camposmagicos,
            1562 => $camposmagicos,
            1563 => $camposmagicos,
            1564 => $camposmagicos,
            1565 => $camposmagicos,
            1566 => $camposmagicos,
            1567 => $camposmagicos,
            1568 => $camposmagicos,
            1569 => $camposmagicos,
            1570 => $camposmagicos,
            1571 => $camposmagicos,
            1572 => $camposmagicos,
            1573 => $camposmagicos,
            1574 => $camposmagicos,
            1575 => $camposmagicos,
            1576 => $camposmagicos,
            1577 => $camposmagicos,
            1578 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 157, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'REPETIDOS']);
        $tema->parametros()->sync([
            683 => $camposmagicos,
            684 => $camposmagicos,
            685 => $camposmagicos,
            686 => $camposmagicos,
            687 => $camposmagicos,
            688 => $camposmagicos,
            689 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 158, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'QUÉ EMOCIONES LE GENERAN ESTAS DIFICULTADES?  (CONVENCIÓN E) VI']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 159, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO PERSONA VINCULACION']);
        $tema->parametros()->sync([
            857 => $camposmagicos,
            858 => $camposmagicos,
            859 => $camposmagicos,
            860 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 160, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'EN QUÉ CONTEXTOS SE LE FACILITA INTERACTUAR CON OTRAS PERSONAS? VI']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            446 => $camposmagicos,
            521 => $camposmagicos,
            522 => $camposmagicos,
            523 => $camposmagicos,
            548 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 161, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'JEFATURA HOGAR']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 162, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREA EMOCIONAL VSI']);
        $tema->parametros()->sync([
            865 => $camposmagicos,
            866 => $camposmagicos,
            867 => $camposmagicos,
            868 => $camposmagicos,
            869 => $camposmagicos,
            870 => $camposmagicos,
            871 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 163, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREA SEXUAL VSI']);
        $tema->parametros()->sync([
            581 => $camposmagicos,
            872 => $camposmagicos,
            873 => $camposmagicos,
            563 => $camposmagicos,
            874 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 164, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREA COMPORTAMENTAL VSI']);
        $tema->parametros()->sync([
            875 => $camposmagicos,
            876 => $camposmagicos,
            877 => $camposmagicos,
            878 => $camposmagicos,
            1632 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 165, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREA ACADÉMICA VSI']);
        $tema->parametros()->sync([
            879 => $camposmagicos,
            880 => $camposmagicos,
            881 => $camposmagicos,
            882 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 166, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREA SOCIAL VSI']);
        $tema->parametros()->sync([
            883 => $camposmagicos,
            884 => $camposmagicos,
            885 => $camposmagicos,
            886 => $camposmagicos,
            887 => $camposmagicos,
            888 => $camposmagicos,
            2137 => $camposmagicos,
            1633 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 167, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREA FAMILIAR']);
        $tema->parametros()->sync([
            889 => $camposmagicos,
            890 => $camposmagicos,
            891 => $camposmagicos,
            893 => $camposmagicos,
            894 => $camposmagicos,
            896 => $camposmagicos,
            898 => $camposmagicos,
            900 => $camposmagicos,
            663 => $camposmagicos,
            576 => $camposmagicos,
            892 => $camposmagicos,
            339 => $camposmagicos,
            895 => $camposmagicos,
            897 => $camposmagicos,
            899 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 168, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'EN QUÉ CONTEXTOS SE LE DIFICULTA INTERACTUAR CON OTRAS PERSONAS? VI']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            446 => $camposmagicos,
            521 => $camposmagicos,
            522 => $camposmagicos,
            523 => $camposmagicos,
            548 => $camposmagicos,
            689 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 169, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CUÁL ES LA DIFICULTAD PARA LOGRAR LA INTERACCIÓN? VI']);
        $tema->parametros()->sync([
            875 => $camposmagicos,
            1008 => $camposmagicos,
            1009 => $camposmagicos,
            2155 => $camposmagicos,
            1011 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 170, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CÓMO SE SIENTE LA MAYOR PARTE DEL TIEMPO? VI']);
        $tema->parametros()->sync([

            909 => $camposmagicos,
            910 => $camposmagicos,
            911 => $camposmagicos,
            912 => $camposmagicos,
            952 => $camposmagicos,
            2467 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 171, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'EN QUÉ CONTEXTO PREDOMINAN ESTOS ESTADOS DE ANIMO? VI']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            521 => $camposmagicos,
            522 => $camposmagicos,
            446 => $camposmagicos,
            548 => $camposmagicos,
            523 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 172, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INDIQUE CUÁL ES LA PERSONA MÁS REPRESENTATIVA DE SU FAMILIA?    (CONVENCIÓN B) VI']);
        $tema->parametros()->sync([
            770 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 173, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CUÁL ES LA PERSONA CON QUIEN NO TIENE BUENAS RELACIONES EN SU FAMILIA? (CONVENCIÓN B)   VI']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 174, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MENCIONE EL/LOS MOTIVOS POR LO CUAL NO EXISTEN BUENAS RELACIONES VI']);
        $tema->parametros()->sync([
            664 => $camposmagicos,
            665 => $camposmagicos,
            904 => $camposmagicos,
            956 => $camposmagicos,
            957 => $camposmagicos,
            958 => $camposmagicos,
            959 => $camposmagicos,
            960 => $camposmagicos,
            961 => $camposmagicos,
            962 => $camposmagicos,


        ]);
        $tema = Tema::create(['id' => 175, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CÓMO ES LA RELACIÓN CON SU FAMILIA? VI']);
        $tema->parametros()->sync([
            905 => $camposmagicos,
            963 => $camposmagicos,
            964 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 176, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'QUÉ TIPO DE DIFICULTADES PRESENTA CON SU PAREJA? VI']);
        $tema->parametros()->sync([
            664 => $camposmagicos,
            665 => $camposmagicos,
            335 => $camposmagicos,
            956 => $camposmagicos,
            957 => $camposmagicos,
            965 => $camposmagicos,
            966 => $camposmagicos,
            967 => $camposmagicos,
            968 => $camposmagicos,
            969 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 177, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CÓMO AFRONTAN LAS DIFICULTADES? VI']);
        $tema->parametros()->sync([
            875  => $camposmagicos,
            915  => $camposmagicos,
            970  => $camposmagicos,
            971  => $camposmagicos,
            1310 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 178, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ENTIDAD EN LA QUE SE DENUNCIA EL DELITO? VI']);
        $tema->parametros()->sync([
            906 => $camposmagicos,
            1004 => $camposmagicos,
            1005 => $camposmagicos,
            1006 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 179, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PREGUNTAS VALIDADORAS DE LOS INDICADORES']);
        $tema->parametros()->sync([
            906 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 180, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Motivo presenta SPA']);
        $tema->parametros()->sync([
            574 => $camposmagicos,
            683 => $camposmagicos,
            684 => $camposmagicos,
            685 => $camposmagicos,
            869 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 181, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'Expectativa consumo SPA']);
        $tema->parametros()->sync([
            686 => $camposmagicos,
            687 => $camposmagicos,
            688 => $camposmagicos,
            689 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 182, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CODIFICACIÓN TALLA / EDAD']);
        $tema->parametros()->sync([
            1077 => $camposmagicos,
            1078 => $camposmagicos,
            1079 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 183, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ENFERMEDADES']);
        $tema->parametros()->sync([
            326 => $camposmagicos,
            327 => $camposmagicos,
            853 => $camposmagicos,
            855 => $camposmagicos,
            1080 => $camposmagicos,
            1081 => $camposmagicos,
            1082 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 184, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACTIVIDAD FÍSICA']);
        $tema->parametros()->sync([
            1083 => $camposmagicos,
            1084 => $camposmagicos,
            1085 => $camposmagicos,
            1087 => $camposmagicos,
            1100 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 185, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'APETITO']);
        $tema->parametros()->sync([
            1086 => $camposmagicos,
            1087 => $camposmagicos,
            1088 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 186, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ALIMENTOS ANTES DE INGRESAR AL IDIPRON']);
        $tema->parametros()->sync([
            1101 => $camposmagicos,
            1102 => $camposmagicos,
            1103 => $camposmagicos,
            1104 => $camposmagicos,
            1105 => $camposmagicos,
            1106 => $camposmagicos,
            1107 => $camposmagicos,
            1108 => $camposmagicos,
            1109 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 187, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'FRECUENCIA DE CONSUMO DE ALIMENTOS ANTES DE INGRESAR AL IDIPRON']);
        $tema->parametros()->sync([
            1110 => $camposmagicos,
            1111 => $camposmagicos,
            1112 => $camposmagicos,
            1113 => $camposmagicos,
            1114 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 188, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACCIONES A AUMENTAR']);
        $tema->parametros()->sync([
            1089 => $camposmagicos,
            1090 => $camposmagicos,
            1091 => $camposmagicos,
            1092 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 189, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACCIONES A DISMINUIR']);
        $tema->parametros()->sync([
            1093 => $camposmagicos,
            1094 => $camposmagicos,
            1095 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 190, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACCIONES PLAN ALIMENTARIO']);
        $tema->parametros()->sync([
            1096 => $camposmagicos,
            1097 => $camposmagicos,
            1098 => $camposmagicos,
            1099 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 191, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CODIFICACIÓN IMC / EDAD']);
        $tema->parametros()->sync([
            1068 => $camposmagicos,
            1069 => $camposmagicos,
            1070 => $camposmagicos,
            1071 => $camposmagicos,
            1072 => $camposmagicos,
            1073 => $camposmagicos,
            1074 => $camposmagicos,
            1075 => $camposmagicos,
            1076 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 192, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE DEPENDENCIA']);
        $tema->parametros()->sync([
            773 => $camposmagicos,
            774 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 193, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE MATRÍCULA']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 194, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CÓMO REACCIONA ANTE EVENTOS O SITUACIONES QUE LE GENEREN UN CAMBIO EMOCIONAL SIGNIFICATIVO']);
        $tema->parametros()->sync([
            875 => $camposmagicos,
            915 => $camposmagicos,
            916 => $camposmagicos,
            // 926 => $camposmagicos,
            970 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 195, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SENTIMIENTOS Y  EMOCIONES  VI']);
        $tema->parametros()->sync([

            917 => $camposmagicos,
            918 => $camposmagicos,
            919 => $camposmagicos,
            1861 => $camposmagicos,
            922 => $camposmagicos,

            924 => $camposmagicos,
            925 => $camposmagicos,

            928 => $camposmagicos,
            929 => $camposmagicos,
            931 => $camposmagicos,
            1857 => $camposmagicos,
            1783 => $camposmagicos,
            1784 => $camposmagicos,

        ]);
        $tema = Tema::create(['id' => 196, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NIVELES LÍNEA BASE']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 197, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'HA OCURRIDO EN SU VIDA ALGÚN ACONTECIMIENTO ESTRESANTE O TRAUMÁTICO']);
        $tema->parametros()->sync([
            339 => $camposmagicos,
            338 => $camposmagicos,
            581 => $camposmagicos,
            663 => $camposmagicos,
            682 => $camposmagicos,
            932 => $camposmagicos,
            933 => $camposmagicos,
            934 => $camposmagicos,
            936 => $camposmagicos,
            953 => $camposmagicos,
            954 => $camposmagicos,
            955 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 198, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NIVEL DE RIESGO VI']);
        $tema->parametros()->sync([
            938 => $camposmagicos,
            939 => $camposmagicos,
            940 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 199, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INDIQUE LOS MOTIVOS O SITUACIONES POR EL CUAL SE HA TENIDO PENSAMIENTOS, AMENAZAS E INTENTOS']);
        $tema->parametros()->sync([
            339 => $camposmagicos,
            574 => $camposmagicos,
            581 => $camposmagicos,
            682 => $camposmagicos,
            932 => $camposmagicos,
            933 => $camposmagicos,
            934 => $camposmagicos,
            935 => $camposmagicos,
            936 => $camposmagicos,
            937 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 200, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'QUÉ TIPO DE CONDUCTAS AUTO LESIVAS? VI']);
        $tema->parametros()->sync([
            941 => $camposmagicos,
            942 => $camposmagicos,
            943 => $camposmagicos,
            944 => $camposmagicos,
            945 => $camposmagicos,
            946 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 201, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'QUÉ ACTIVACIONES FISIOLÓGICAS LE GENERA? VI']);
        $tema->parametros()->sync([
            947 => $camposmagicos,
            948 => $camposmagicos,
            949 => $camposmagicos,
            950 => $camposmagicos,
            951 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 202, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOMENTO EVENTO']);
        $tema->parametros()->sync([
            1013 => $camposmagicos,
            1014 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 203, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO EVENTO SEXUAL NEGATIVO']);
        $tema->parametros()->sync([
            338 => $camposmagicos,
            1015 => $camposmagicos,
            1016 => $camposmagicos,
            1017 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 204, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO PROCESO TERAPÉUTICO']);
        $tema->parametros()->sync([
            1018 => $camposmagicos,
            1019 => $camposmagicos,
            1020 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 205, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO POR EL CUAL NO ESTÁ ESCOLARIZADO']);
        $tema->parametros()->sync([
            1021 => $camposmagicos,
            1022 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 206, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RENDIMIENTO ACADÉMICO']);
        $tema->parametros()->sync([
            938 => $camposmagicos,
            940 => $camposmagicos,
            1023 => $camposmagicos,
            1024 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 207, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CAUSA DE DESERCIÓN']);
        $tema->parametros()->sync([
            879 => $camposmagicos,
            1027 => $camposmagicos,
            1028 => $camposmagicos,
            1029 => $camposmagicos,
            1030 => $camposmagicos,
            1031 => $camposmagicos,
            1032 => $camposmagicos,
            1033 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 208, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MATERIAS']);
        $tema->parametros()->sync([
            996 => $camposmagicos,
            997 => $camposmagicos,
            998 => $camposmagicos,
            999 => $camposmagicos,
            1000 => $camposmagicos,
            1001 => $camposmagicos,
            1002 => $camposmagicos,
            1003 => $camposmagicos,
            1854 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 209, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE DIFICULTAD']);
        $tema->parametros()->sync([
            1043 => $camposmagicos,
            1044 => $camposmagicos,
            1045 => $camposmagicos,
            1046 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 210, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'IDENTIFICA ALGÚN TIPO DE DIFICULTAD']);
        $tema->parametros()->sync([
            1047 => $camposmagicos,
            1048 => $camposmagicos,
            1049 => $camposmagicos,
            1050 => $camposmagicos,
            1051 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 211, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'AREA']);
        $tema->parametros()->sync([
            1052 => $camposmagicos,
            1053 => $camposmagicos,
            1054 => $camposmagicos,
            1055 => $camposmagicos,
            1056 => $camposmagicos,
            1669 => $camposmagicos,
            1670 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 212, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ÁREAS AJUSTE']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            448 => $camposmagicos,
            449 => $camposmagicos,
            525 => $camposmagicos,
            1058 => $camposmagicos,
            1059 => $camposmagicos,
            235 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 213, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO ATENCIÓN INTERVENCIÓN PSICOLOGO']);
        $tema->parametros()->sync([
            1060 => $camposmagicos,
            1061 => $camposmagicos,
            1064 => $camposmagicos,
            1065 => $camposmagicos,
            1066 => $camposmagicos,
            1067 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 214, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO AUDICION']);
        $tema->parametros()->sync([
            1115 => $camposmagicos,
            1116 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 215, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO HABLA EXPLORACION FUNCIONAL']);
        $tema->parametros()->sync([
            1117 => $camposmagicos,
            1118 => $camposmagicos,
            1119 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 216, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'IMPRESION DIAGNOSTICA VALORACIÓN INICIAL FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1120 => $camposmagicos,
            1121 => $camposmagicos,
            1122 => $camposmagicos,
            1123 => $camposmagicos,
            1124 => $camposmagicos,
            1125 => $camposmagicos,
            1126 => $camposmagicos,
            1127 => $camposmagicos,
            1128 => $camposmagicos,
            1129 => $camposmagicos,
            1130 => $camposmagicos,
            1131 => $camposmagicos,
            1132 => $camposmagicos,
            1133 => $camposmagicos,
            1134 => $camposmagicos,
            1135 => $camposmagicos,
            1136 => $camposmagicos,
            1166 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 217, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO SEGUIMIENTO FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            168 => $camposmagicos,
            1144 => $camposmagicos,
            1145 => $camposmagicos,
            1146 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 218, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO EVOLUCIÓN FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1147 => $camposmagicos,
            1148 => $camposmagicos,
            1149 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 219, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'IMPRESION DIAGNOSTICA VALORACIÓN TAMIZ AUDITIVO']);
        $tema->parametros()->sync([
            1120 => $camposmagicos,
            1121 => $camposmagicos,
            1122 => $camposmagicos,
            1123 => $camposmagicos,
            1134 => $camposmagicos,
            1150 => $camposmagicos,
            1151 => $camposmagicos,
            1152 => $camposmagicos,
            1166 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 220, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'REMISIÓN VALORACIÓN INICIAL FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1137 => $camposmagicos,
            1138 => $camposmagicos,
            1139 => $camposmagicos,
            1140 => $camposmagicos,
            1141 => $camposmagicos,
            1142 => $camposmagicos,
            1143 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 221, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'REMISIÓN VALORACIÓN TAMIZ AUDITIVO']);
        $tema->parametros()->sync([
            1137 => $camposmagicos,
            1138 => $camposmagicos,
            1139 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 222, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO ATENCIÓN VALORACIÓN MÉDICA']);
        $tema->parametros()->sync([
            1153 => $camposmagicos,
            1154 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 223, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PERIODICIDAD PARA VALORACIÓN MÉDICA']);
        $tema->parametros()->sync([
            1155 => $camposmagicos,
            1156 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 224, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DIAGNÓSTICO DE EVOLUCIÓN']);
        $tema->parametros()->sync([
            1157 => $camposmagicos,
            1158 => $camposmagicos,
            1159 => $camposmagicos,
            1160 => $camposmagicos,
            1161 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 225, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONDUCTA PARA VALORACIÓN MÉDICA']);
        $tema->parametros()->sync([
            1156 => $camposmagicos,
            1162 => $camposmagicos,
            1163 => $camposmagicos,
            1164 => $camposmagicos,
            1165 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 226, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TRAMITE ENTREGA DOCUMENTO']);
        $tema->parametros()->sync([
            1167 => $camposmagicos,
            1168 => $camposmagicos,
            1169 => $camposmagicos,
            1170 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 227, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INSTRUMENTOS NUTRICIÓN']);
        $tema->parametros()->sync([
            1171 => $camposmagicos,
            1172 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 228, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INSTRUMENTOS FONOAUDIOLOGÍA']);
        $tema->parametros()->sync([
            1173 => $camposmagicos,
            1174 => $camposmagicos,
            1175 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 229, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'INSTRUMENTOS AUXILIAR DE ENFERMERÍA']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 230, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE ACCIDENTE']);
        $tema->parametros()->sync([
            564 => $camposmagicos,
            1176 => $camposmagicos,
            1177 => $camposmagicos,
            1178 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 231, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CAUSA DE ACCIDENTE']);
        $tema->parametros()->sync([
            1179 => $camposmagicos,
            1180 => $camposmagicos,
            1181 => $camposmagicos,
            1182 => $camposmagicos,
            1183 => $camposmagicos,
            1184 => $camposmagicos,
            1185 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 232, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'LUGAR DONDE OCURRIO ACCIDENTE']);
        $tema->parametros()->sync([
            1186 => $camposmagicos,
            1187 => $camposmagicos,
            1188 => $camposmagicos,
            1189 => $camposmagicos,
            1190 => $camposmagicos,
            1191 => $camposmagicos,
            1192 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 233, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'AGENTE DEL ACCIDENTE']);
        $tema->parametros()->sync([
            1193 => $camposmagicos,
            1194 => $camposmagicos,
            1195 => $camposmagicos,
            1196 => $camposmagicos,
            1197 => $camposmagicos,
            1198 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 234, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PARTE DEL CUERPO AFECTADO']);
        $tema->parametros()->sync([
            1199 => $camposmagicos,
            1200 => $camposmagicos,
            1201 => $camposmagicos,
            1202 => $camposmagicos,
            1203 => $camposmagicos,
            1204 => $camposmagicos,
            1205 => $camposmagicos,
            1206 => $camposmagicos,
            1207 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 235, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SÍNTOMA PEDICULOSIS']);
        $tema->parametros()->sync([
            1208 => $camposmagicos,
            1209 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 236, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'USO DEL CABELLO']);
        $tema->parametros()->sync([
            1210 => $camposmagicos,
            1211 => $camposmagicos,
            1212 => $camposmagicos,
            1213 => $camposmagicos,
            1214 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 237, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIEMPO SUFRE PEDICULOSIS']);
        $tema->parametros()->sync([
            1114 => $camposmagicos,
            1215 => $camposmagicos,
            1216 => $camposmagicos,
            1217 => $camposmagicos,
            1218 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 238, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TRATAMIENTO PEDICULOSIS']);
        $tema->parametros()->sync([
            1219 => $camposmagicos,
            1220 => $camposmagicos,
            1221 => $camposmagicos,
            1222 => $camposmagicos,
            1223 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 239, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONSECUENCIA PEDICULOSIS CABEZA']);
        $tema->parametros()->sync([
            1224 => $camposmagicos,
            1225 => $camposmagicos,
            1226 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 240, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONSECUENCIA PEDICULOSIS CUELLO']);
        $tema->parametros()->sync([
            168 => $camposmagicos,
            1227 => $camposmagicos,
            1228 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 241, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONSECUENCIA PEDICULOSIS TÓRAX']);
        $tema->parametros()->sync([
            168 => $camposmagicos,
            1229 => $camposmagicos,
            1230 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 242, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONSECUENCIA PEDICULOSIS BRAZOS Y AXILAS']);
        $tema->parametros()->sync([
            168 => $camposmagicos,
            1229 => $camposmagicos,
            1230 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 243, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONSECUENCIA PEDICULOSIS PIEL DE TÓRAX']);
        $tema->parametros()->sync([
            168 => $camposmagicos,
            1231 => $camposmagicos,
            1232 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 244, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE ACCESO AL SISTEMA']);
        $tema->parametros()->sync([
            1233 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 245, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO ATENCIÓN MITIGACIÓN']);
        $tema->parametros()->sync([
            1154 => $camposmagicos,
            1240 => $camposmagicos,
            1241 => $camposmagicos,
            1242 => $camposmagicos,
            1243 => $camposmagicos,
            1244 => $camposmagicos,
            1245 => $camposmagicos,
            1246 => $camposmagicos,
            1247 => $camposmagicos,
            1248 => $camposmagicos,
            1249 => $camposmagicos,
            1250 => $camposmagicos,
            1251 => $camposmagicos,
            1252 => $camposmagicos,
            1253 => $camposmagicos,
            1254 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 246, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DIAGNÓSTICO EVOLUCIÓN MITIGACIÓN']);
        $tema->parametros()->sync([
            1157 => $camposmagicos,
            1158 => $camposmagicos,
            1159 => $camposmagicos,
            1160 => $camposmagicos,
            1161 => $camposmagicos,
            1236 => $camposmagicos,
            1237 => $camposmagicos,
            1238 => $camposmagicos,
            1239 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 247, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONDUCTA MITIGACIÓN']);
        $tema->parametros()->sync([
            1156 => $camposmagicos,
            1162 => $camposmagicos,
            1163 => $camposmagicos,
            1164 => $camposmagicos,
            1165 => $camposmagicos,
            1234 => $camposmagicos,
            1235 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 248, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TRATAMIENTO DENTAL']);
        $tema->parametros()->sync([
            1255 => $camposmagicos,
            1256 => $camposmagicos,
            1257 => $camposmagicos,
            1258 => $camposmagicos,
            1259 => $camposmagicos,
            1260 => $camposmagicos,
            1261 => $camposmagicos,
            1262 => $camposmagicos,
            1263 => $camposmagicos,
            1264 => $camposmagicos,
            1265 => $camposmagicos,
            1266 => $camposmagicos,
            1267 => $camposmagicos,
            1268 => $camposmagicos,
            235 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 249, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CALIFICACIÓN AUTOCUIDADO']);
        $tema->parametros()->sync([
            1270 => $camposmagicos,
            1271 => $camposmagicos,
            1272 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 250, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CALIFICACIÓN COMUNICACIÓN']);
        $tema->parametros()->sync([
            1273 => $camposmagicos,
            1274 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 251, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CALIFICACIÓN HABILIDADES']);
        $tema->parametros()->sync([
            1273 => $camposmagicos,
            1275 => $camposmagicos,
            1276 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 252, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CALIFICACIÓN SENSOPERCEPTUAL']);
        $tema->parametros()->sync([
            1069 => $camposmagicos,
            1277 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 253, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CALIFICACIÓN NEUROSENSORIAL']);
        $tema->parametros()->sync([
            1278 => $camposmagicos,
            1279 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 254, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PLAN DE MANEJO']);
        $tema->parametros()->sync([
            1280 => $camposmagicos,
            1281 => $camposmagicos,
            1282 => $camposmagicos,
            1283 => $camposmagicos,
            1284 => $camposmagicos,
            1285 => $camposmagicos,
            1286 => $camposmagicos,
            1287 => $camposmagicos,
            1288 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 255, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'REMISIÓN DESDE TERAPIA']);
        $tema->parametros()->sync([
            1289 => $camposmagicos,
            1290 => $camposmagicos,
            1291 => $camposmagicos,
            1292 => $camposmagicos,
            1293 => $camposmagicos,
            1294 => $camposmagicos,
            1295 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 256, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'COMPONENTE NEUROSENSORIAL']);
        $tema->parametros()->sync([
            1296 => $camposmagicos,
            1297 => $camposmagicos,
            1298 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 257, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'IMPRESIÓN DIAGNÓSTICA']);
        $tema->parametros()->sync([
            1299 => $camposmagicos,
            1300 => $camposmagicos,
            1301 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 258, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TEMA A TRABAJAR SEGUIMIENTO TERAPIA']);
        $tema->parametros()->sync([
            1302 => $camposmagicos,
            1303 => $camposmagicos,
            1304 => $camposmagicos,
            1305 => $camposmagicos,
            1306 => $camposmagicos,
            1307 => $camposmagicos,
            1308 => $camposmagicos,
            1309 => $camposmagicos,
            1310 => $camposmagicos,
            1311 => $camposmagicos,
            1312 => $camposmagicos,
            1313 => $camposmagicos,
            1314 => $camposmagicos,
            1315 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 259, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RESULTADO DE LA INTERVENCIÓN']);
        $tema->parametros()->sync([
            1316 => $camposmagicos,
            1317 => $camposmagicos,
            1318 => $camposmagicos,
            1319 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 260, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NIVEL PERFIL OCUPACIONAL']);
        $tema->parametros()->sync([
            1322 => $camposmagicos,
            1323 => $camposmagicos,
            1324 => $camposmagicos,
            1325 => $camposmagicos,
            1326 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 261, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVO DE LA ATENCIÓN']);
        $tema->parametros()->sync([
            1327 => $camposmagicos,
            1328 => $camposmagicos,
            1330 => $camposmagicos,
            1331 => $camposmagicos,
            1332 => $camposmagicos,
            1333 => $camposmagicos,
            1334 => $camposmagicos,
            1335 => $camposmagicos,
            1336 => $camposmagicos,
            1337 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 262, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE ACOMPAÑAMIENTO']);
        $tema->parametros()->sync([
            1339 => $camposmagicos,
            1340 => $camposmagicos,
            1341 => $camposmagicos,
            1342 => $camposmagicos,
            1343 => $camposmagicos,
            1344 => $camposmagicos,
            1345 => $camposmagicos,
            1346 => $camposmagicos,
            1347 => $camposmagicos,
            1348 => $camposmagicos,
            1349 => $camposmagicos,
            1350 => $camposmagicos,
            1395 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 263, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE APOYO DIAGNÓSTICO']);
        $tema->parametros()->sync([
            1351 => $camposmagicos,
            1352 => $camposmagicos,
            1353 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 264, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE ESPECIALIDAD MÉDICA']);
        $tema->parametros()->sync([
            1354 => $camposmagicos,
            1355 => $camposmagicos,
            1356 => $camposmagicos,
            1357 => $camposmagicos,
            1358 => $camposmagicos,
            1359 => $camposmagicos,
            1360 => $camposmagicos,
            1361 => $camposmagicos,
            1362 => $camposmagicos,
            1363 => $camposmagicos,
            1364 => $camposmagicos,
            1365 => $camposmagicos,
            1366 => $camposmagicos,
            1367 => $camposmagicos,
            1368 => $camposmagicos,
            1369 => $camposmagicos,
            1370 => $camposmagicos,
            1371 => $camposmagicos,
            1372 => $camposmagicos,
            1373 => $camposmagicos,
            1374 => $camposmagicos,
            1375 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 265, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CALIDAD DEL AFILIADO']);
        $tema->parametros()->sync([
            1376 => $camposmagicos,
            1377 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 266, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE PROCEDIMIENTO']);
        $tema->parametros()->sync([
            1378 => $camposmagicos,
            1379 => $camposmagicos,
            1380 => $camposmagicos,
            1381 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 267, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE PYP']);
        $tema->parametros()->sync([
            1382 => $camposmagicos,
            1383 => $camposmagicos,
            1384 => $camposmagicos,
            1385 => $camposmagicos,
            1386 => $camposmagicos,
            1387 => $camposmagicos,
            1388 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 268, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE BRIGADA']);
        $tema->parametros()->sync([
            1389 => $camposmagicos,
            1390 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 269, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE CHARLA']);
        $tema->parametros()->sync([
            1391 => $camposmagicos,
            1392 => $camposmagicos,
            1393 => $camposmagicos,
            1394 => $camposmagicos,
            1395 => $camposmagicos,
            1396 => $camposmagicos,
            1397 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 270, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE TAMIZAJE']);
        $tema->parametros()->sync([
            1398 => $camposmagicos,
            1399 => $camposmagicos,
            1400 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 271, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VACUNA']);
        $tema->parametros()->sync([
            1401 => $camposmagicos,
            1402 => $camposmagicos,
            1403 => $camposmagicos,
            1404 => $camposmagicos,
            1405 => $camposmagicos,
            1406 => $camposmagicos,
            1407 => $camposmagicos,
            1408 => $camposmagicos,
            1409 => $camposmagicos,
            1410 => $camposmagicos,
            1411 => $camposmagicos,
            1412 => $camposmagicos,
            1413 => $camposmagicos,
            1414 => $camposmagicos,
            1415 => $camposmagicos,
            1416 => $camposmagicos,
            1417 => $camposmagicos,
            1418 => $camposmagicos,
            1419 => $camposmagicos,
            1420 => $camposmagicos,
            1421 => $camposmagicos,
            1422 => $camposmagicos,
            1423 => $camposmagicos,
            1424 => $camposmagicos,
            1425 => $camposmagicos,
            1426 => $camposmagicos,
            1427 => $camposmagicos,
            1429 => $camposmagicos,
            1430 => $camposmagicos,
            1431 => $camposmagicos,
            1432 => $camposmagicos,
            1433 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 272, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RAZONES SALIDA UPI']);
        $tema->parametros()->sync([
            1434 => $camposmagicos,
            1435 => $camposmagicos,
            1436 => $camposmagicos,
            1437 => $camposmagicos,
            1438 => $camposmagicos,
            2491=> $camposmagicos,
            2492=> $camposmagicos,
            2493=> $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 273, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CONTEXTURA']);
        $tema->parametros()->sync([
            1439 => $camposmagicos,
            1440 => $camposmagicos,
            1441 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 274, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE ROSTRO']);
        $tema->parametros()->sync([
            1442 => $camposmagicos,
            1443 => $camposmagicos,
            1444 => $camposmagicos,
            1445 => $camposmagicos,
            1446 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 275, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'COLOR DE PIEL']);
        $tema->parametros()->sync([
            1447 => $camposmagicos,
            1448 => $camposmagicos,
            1449 => $camposmagicos,
            1450 => $camposmagicos,
            1451 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 276, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'COLOR DE CABELLO']);
        $tema->parametros()->sync([
            1452 => $camposmagicos,
            1453 => $camposmagicos,
            1454 => $camposmagicos,
            1455 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 277, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE CABELLO']);
        $tema->parametros()->sync([
            1456 => $camposmagicos,
            1457 => $camposmagicos,
            1458 => $camposmagicos,
            1459 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 278, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CORTE DE CABELLO']);
        $tema->parametros()->sync([
            939 => $camposmagicos,
            1210 => $camposmagicos,
            1211 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 279, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'COLOR DE OJOS']);
        $tema->parametros()->sync([
            1453 => $camposmagicos,
            1460 => $camposmagicos,
            1461 => $camposmagicos,
            1462 => $camposmagicos,
            1463 => $camposmagicos,
            1464 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 280, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'NARIZ']);
        $tema->parametros()->sync([
            1465 => $camposmagicos,
            1466 => $camposmagicos,
            1467 => $camposmagicos,
            1468 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 281, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TAMAÑO DEL LUNAR']);
        $tema->parametros()->sync([
            1469 => $camposmagicos,
            1470 => $camposmagicos,
            1471 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 282, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE CONVENIO']);
        // $tema->parametros()->sync([

        // ]);
        $tema = Tema::create(['id' => 283, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO RECURSO']);
        $tema->parametros()->sync([
            1764 => $camposmagicos,
            1765 => $camposmagicos,
            1766 => $camposmagicos,
            1767 => $camposmagicos,
            1768 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 284, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DEPENDENCIA']);
        $tema->parametros()->sync([
            805 => $camposmagicos, //opcional
            1473 => $camposmagicos, //opcional
        ]);
        $tema = Tema::create(['id' => 285, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'DIRIGIDO A:']);
        $tema->parametros()->sync([
            805 => $camposmagicos,
            1473 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 286, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CUENTA DOCUMENTO']);
        $tema->parametros()->sync([
            1474 => $camposmagicos,
            1475 => $camposmagicos,
            1476 => $camposmagicos,
            1477 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 287, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VINCULADO']);
        $tema->parametros()->sync([
            775 => $camposmagicos,
            853 => $camposmagicos,
            1481 => $camposmagicos,
            1482 => $camposmagicos,
            1483 => $camposmagicos,
            1484 => $camposmagicos,
            1485 => $camposmagicos,
            1486 => $camposmagicos,
            1487 => $camposmagicos,
            1488 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 288, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'UNIDAD DE MEDIDA']);
        $tema->parametros()->sync([
            1680 => $camposmagicos, //CENTÍMETROS
            1681 => $camposmagicos, //METROS
            1682 => $camposmagicos, //PULGADAS
            1683 => $camposmagicos, //LITROS
            1684 => $camposmagicos, //MILIMETROS
            1685 => $camposmagicos, //KILOS
            1686 => $camposmagicos, //GRAMOS
            1687 => $camposmagicos, //LIBRAS
            1769 => $camposmagicos, //PLIEGO
        ]);
        $tema = Tema::create(['id' => 289, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO TABLAS']);

        $tema = Tema::create(['id' => 290, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE VESTIMENTA']);
        $tema->parametros()->sync([
            2484 => $camposmagicos,
            2485 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 291, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESPACIO DONDE PARCHA']);
        $tema->parametros()->sync([
            234 => $camposmagicos,
            398 => $camposmagicos,
            437 => $camposmagicos,
            1506 => $camposmagicos,
            594 => $camposmagicos,
            477 => $camposmagicos,
            1504 => $camposmagicos,
            502 => $camposmagicos,
            503 => $camposmagicos,
            504 => $camposmagicos,
            270 => $camposmagicos,
            506 => $camposmagicos,
            507 => $camposmagicos,
            508 => $camposmagicos,
            509 => $camposmagicos,
            1501 => $camposmagicos,
            511 => $camposmagicos,
            1492 => $camposmagicos,
            513 => $camposmagicos,
            616 => $camposmagicos,
            515 => $camposmagicos,
            539 => $camposmagicos,
            1493 => $camposmagicos,
            570 => $camposmagicos,
            595 => $camposmagicos,
            598 => $camposmagicos,
            624 => $camposmagicos,
            1499 => $camposmagicos,
            668 => $camposmagicos,
            682 => $camposmagicos,
            704 => $camposmagicos,
            706 => $camposmagicos,
            708 => $camposmagicos,
            709 => $camposmagicos,
            1490 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 292, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVOS DE AUSENCIA']);
        $tema->parametros()->sync([
            268 => $camposmagicos,
            335 => $camposmagicos,
            476 => $camposmagicos,
            235 => $camposmagicos,
            1799 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 293, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACONTECIMIENTOS GENERADORES DE AFECTACIONES EMOCIONALES']);
        $tema->parametros()->sync([
            932 => $camposmagicos,
            933 => $camposmagicos,
            934 => $camposmagicos,
            955 => $camposmagicos,
            953 => $camposmagicos,
            954 => $camposmagicos,
            581 => $camposmagicos,
            338 => $camposmagicos,
            936 => $camposmagicos,
            663 => $camposmagicos,
            339 => $camposmagicos,

            2320 => $camposmagicos,

            2458 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 294, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'POSICIÓN OCUPACIONAL',]);
        $tema->parametros()->sync([
            666  => $camposmagicos,
            710  => $camposmagicos,
            738  => $camposmagicos,
            804  => $camposmagicos,
            806  => $camposmagicos,
            863  => $camposmagicos,
            235 => $camposmagicos,
            1545 => $camposmagicos,
            1553 => $camposmagicos,
            1561 => $camposmagicos,
            812  => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 295, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CATEGORIA INDICADORES',]);
        $tema->parametros()->sync([
            246  => $camposmagicos,
            247  => $camposmagicos,
            248  => $camposmagicos,
            300  => $camposmagicos,
            301  => $camposmagicos,
            302  => $camposmagicos,
            840  => $camposmagicos,
            518  => $camposmagicos,
            841  => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 296, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACTIVIDAD GENERA INGRESO CHC']);
        $tema->parametros()->sync([
            627 => $camposmagicos,
            628 => $camposmagicos,
            853 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 297, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RESPUESTA VALIDACIONES INDICADORES']);
        $tema->parametros()->sync([
            627 => $camposmagicos,
            628 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 298, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ACCIONES VIOLENCIA VI']);
        $tema->parametros()->sync([
            1323 => $camposmagicos,
            1368 => $camposmagicos,
            1395 => $camposmagicos,
            853 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 299, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE RED VI']);
        $tema->parametros()->sync([
            282 => $camposmagicos,
            1805 => $camposmagicos,
            547 => $camposmagicos,
            548 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 300, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MOTIVOS QUE HA TENIDO PARA QUITARSE LA VIDA (VI)']);
        $tema->parametros()->sync([
            932 => $camposmagicos,
            933 => $camposmagicos,
            934 => $camposmagicos,
            935 => $camposmagicos,
            574 => $camposmagicos,
            581 => $camposmagicos,
            936 => $camposmagicos,
            338 => $camposmagicos,
            339 => $camposmagicos,
            937 => $camposmagicos,
            340 => $camposmagicos,
            2458 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 301, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PROBLEMAS DE SALUD']);
        $tema->parametros()->sync([
            318 => $camposmagicos,
            319 => $camposmagicos,
            320 => $camposmagicos,
            321 => $camposmagicos,
            322 => $camposmagicos,
            324 => $camposmagicos,
            325 => $camposmagicos,
            327 => $camposmagicos,
            328 => $camposmagicos,
            329 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 302, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE DILIGENCIAMIENTO']);
        $tema->parametros()->sync([
            1634 => $camposmagicos,
            1635 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 303, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO DE INGRESO']);
        $tema->parametros()->sync([
            1636 => $camposmagicos,
            1637 => $camposmagicos,
            1638 => $camposmagicos,
            1671 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 304, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'PRENDAS DE VESTIR']);
        $tema->parametros()->sync([
            1640 => $camposmagicos,
            1641 => $camposmagicos,
            1642 => $camposmagicos,
            1643 => $camposmagicos,
            1644 => $camposmagicos,
            1645 => $camposmagicos,
            1646 => $camposmagicos,
            1647 => $camposmagicos,
            1648 => $camposmagicos,
            1649 => $camposmagicos,
            1650 => $camposmagicos,
            1651 => $camposmagicos,
            1652 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 305, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'MATERIAL DE LAS PRENDAS']);
        $tema->parametros()->sync([
            1653 => $camposmagicos,
            1654 => $camposmagicos,
            1655 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 306, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'LÍNEAS DE ATENCIÓN']);
        $tema->parametros()->sync([
            1656 => $camposmagicos,
            1657 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 307, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'OBJETIVOS DE SALIDA AI']);
        $tema->parametros()->sync([
            1658 => $camposmagicos,
            1659 => $camposmagicos,
            1660 => $camposmagicos,
            1661 => $camposmagicos,
            1662 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 308, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO A LA SALIDA AI']);
        $tema->parametros()->sync([
            1663 => $camposmagicos,
            1664 => $camposmagicos,
            1665 => $camposmagicos,
            1666 => $camposmagicos,
            1667 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 309, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'ESTADO DEL REGISTRO',]); //309
        $tema->parametros()->sync([
            1636 => $camposmagicos,
            1637 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 310, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO DE VINCULACION',]); //310
        $tema->parametros()->sync([
            1672 => $camposmagicos,
            1673 => $camposmagicos,
            1674 => $camposmagicos,
            1675 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 311, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'CICLO VITAL',]); //311
        $tema->parametros()->sync([
            1676 => $camposmagicos,
            1677 => $camposmagicos,
            1678 => $camposmagicos,
            1679 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 312, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - TIPO DE VALORACIÓN',]);
        $tema->parametros()->sync([
            1689 => $camposmagicos,
            1690 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 313, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - CONDICIÓN ESCOLAR',]);
        $tema->parametros()->sync([
            1691 => $camposmagicos,
            1692 => $camposmagicos,
            1693 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 314, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - FUENTE DE INGRESOS',]);
        $tema->parametros()->sync([
            642  => $camposmagicos,
            643  => $camposmagicos,
            636  => $camposmagicos,
            1694 => $camposmagicos,
            627  => $camposmagicos,
            1695 => $camposmagicos,
            639  => $camposmagicos,
            1696 => $camposmagicos,
            439  => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 315, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - MODALIDAD DE ATENCIÓN',]);
        $tema->parametros()->sync([
            1697 => $camposmagicos,
            1698 => $camposmagicos,
            1699 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 316, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - CÓMO ACUDUDIÓ A LA INSTITUCIÓN',]);
        $tema->parametros()->sync([
            1700 => $camposmagicos,
            1701 => $camposmagicos,
            1702 => $camposmagicos,
            1704 => $camposmagicos,
            1705 => $camposmagicos,
            1706 => $camposmagicos,
            439  => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 317, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - SITIO HABITUAL DE CONSUMO',]);
        $tema->parametros()->sync([
            1707 => $camposmagicos,
            1490 => $camposmagicos,
            1708 => $camposmagicos,
            1709 => $camposmagicos,
            1710 => $camposmagicos,
            1711 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 318, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - FRECUENCIA DE USO',]);
        $tema->parametros()->sync([
            429 => $camposmagicos,
            432 => $camposmagicos,
            433 => $camposmagicos,
            435 => $camposmagicos,
            434 => $camposmagicos,
            436 => $camposmagicos,
            438 => $camposmagicos,
            430 => $camposmagicos,
            431 => $camposmagicos,
            439 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 319, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - IMPACTO NEGATIVO',]);
        $tema->parametros()->sync([
            246 => $camposmagicos,
            247 => $camposmagicos,
            248 => $camposmagicos,
            300 => $camposmagicos,
            301 => $camposmagicos,
            302 => $camposmagicos,
            840 => $camposmagicos,
            518 => $camposmagicos,
            841 => $camposmagicos,
            519 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 320, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - TIPO DE DROGA',]);
        $tema->parametros()->sync([
            403  => $camposmagicos,
            402  => $camposmagicos,
            406  => $camposmagicos,
            1712 => $camposmagicos,
            404  => $camposmagicos,
            405  => $camposmagicos,
            760  => $camposmagicos,
            1609 => $camposmagicos,
            1713 => $camposmagicos,
            1714 => $camposmagicos,
            1715 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 321, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - CANTIDAD DE CIGARRILLOS',]);
        $tema->parametros()->sync([
            1716 => $camposmagicos,
            1717 => $camposmagicos,
            1718 => $camposmagicos,
            1719 => $camposmagicos,
            1720 => $camposmagicos,
            1721 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 322, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - COMO OBTIENE LA SUSTANCIA',]);
        $tema->parametros()->sync([
            1722 => $camposmagicos,
            1723 => $camposmagicos,
            1724 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 323, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - UNIDAD DE MEDIDA',]);
        $tema->parametros()->sync([
            1686 => $camposmagicos,
            244 => $camposmagicos,
            1725 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 324, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - ACOSTUMBRA A UTILIZAR LA SUSTANCIA',]);
        $tema->parametros()->sync([
            1726 => $camposmagicos,
            1727 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 325, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VSPA - ACOSTUMBRA A COMPARTIR AGUJAS',]);
        $tema->parametros()->sync([
            1728 => $camposmagicos,
            1729 => $camposmagicos,
            1114 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 326, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RIESGO O VICTIMA ESCNNA',]); //326
        $tema->parametros()->sync([
            563 => $camposmagicos,
            976 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 327, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => '¿CUáLES FUERON LAS RAZONES PARA HABER INICIADO LA HABITANZA EN CALLE?',]); //327
        $tema->parametros()->sync([
            662 => $camposmagicos,
            663 => $camposmagicos,
            664 => $camposmagicos,
            665 => $camposmagicos,
            666 => $camposmagicos,
            936 => $camposmagicos,
            667 => $camposmagicos,
            335 => $camposmagicos,
            669 => $camposmagicos,
            670 => $camposmagicos,
            671 => $camposmagicos,
            672 => $camposmagicos,
            673 => $camposmagicos,
            674 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 328, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => '¿RAZONES POR LAS CUALES CONTINUA LA HABITANZA EN CALLE?',]); //328
        $tema->parametros()->sync([
            335 => $camposmagicos,
            338 => $camposmagicos,
            662 => $camposmagicos,
            667 => $camposmagicos,
            669 => $camposmagicos,
            670 => $camposmagicos,
            671 => $camposmagicos,
            672 => $camposmagicos,
            673 => $camposmagicos,
            676 => $camposmagicos,
            677 => $camposmagicos,
            678 => $camposmagicos,
            681 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 329, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - TIPO DE TRASTORNO',]);
        $tema->parametros()->sync([
            1730 => $camposmagicos,
            1731 => $camposmagicos,
            1732 => $camposmagicos,
            1733 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 330, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - TIPO DE APETITO',]);
        $tema->parametros()->sync([
            1115 => $camposmagicos,
            1734 => $camposmagicos,
            1735 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 331, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - SUDORACIÓN',]);
        $tema->parametros()->sync([
            1115 => $camposmagicos,
            1736 => $camposmagicos,
            1737 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 332, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - ESTADO DE ÁNIMO',]);
        $tema->parametros()->sync([
            1738 => $camposmagicos,
            1739 => $camposmagicos,
            1740 => $camposmagicos,
            1741 => $camposmagicos,
            1742 => $camposmagicos,
            1743 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 333, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - TRATAMIENTO',]);
        $tema->parametros()->sync([
            1240 => $camposmagicos,
            1243 => $camposmagicos,
            1241 => $camposmagicos,
            1244 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 334, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - CONDUCTA',]);
        $tema->parametros()->sync([
            1156 => $camposmagicos,
            1235 => $camposmagicos,
            1744 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 335, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'VMA - TIPO DE DIAGNÓSTICO',]);
        $tema->parametros()->sync([
            1160 => $camposmagicos,
            1161 => $camposmagicos,
            1745 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 336, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'LUGARES/ESPACIOS EXTERNOS',]);
        $tema = Tema::create(['id' => 337, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'TIPO LETRA TITULOS',]);
        $tema->parametros()->sync([
            1760 => $camposmagicos,
            1761 => $camposmagicos,
            1762 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 338, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'RESPONSABLE DE LA ACTIVIDAD',]);
        $tema->parametros()->sync([
            1770 => $camposmagicos,
            808 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 339, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'SEXO DEPENDENCIAS',]);
        $tema->parametros()->sync([
            23 => $camposmagicos,
            24 => $camposmagicos,
            2324 => $camposmagicos,
        ]);
        $tema = Tema::create(['id' => 340, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'FORMULARIO MOTIVO DE ESTADO PARA EL REGISTRO',]);
        $tema->parametros()->sync([
            2325 => $camposmagicos,
            2326 => $camposmagicos,
            2327 => $camposmagicos,
            2328 => $camposmagicos,
            2351 => $camposmagicos,
            2482 => $camposmagicos,
            2483 => $camposmagicos,
            2498 => $camposmagicos,
            2499 => $camposmagicos,
            2500 => $camposmagicos,
            2501 => $camposmagicos,
        ]);

        $tema = Tema::create(['id' => 341, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'LA DISCAPACIDAD FUE PRODUCIDA POR LA COMISION DE ALGUN ACTO ILEGAL',]);
        $tema->parametros()->sync([
            27 => $camposmagicos,
            235 => $camposmagicos,
            2329 => $camposmagicos,
            2330 => $camposmagicos,
            2331 => $camposmagicos,
            2332 => $camposmagicos,
            2333 => $camposmagicos,

        ]);

        $tema = Tema::create(['id' => 342, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'nombre' => 'HA SIDO VICTIMA DE ATAQUES CON',]);
        $tema->parametros()->sync([
            853 => $camposmagicos,
            2334 => $camposmagicos,
            2335 => $camposmagicos,
            2336 => $camposmagicos,
        ]);

        $this->getR([
            'nombrexx' => '¿QUE ACTIVIDADES REALIZA EN SU TIEMPO LIBRE?',
            'parametr' => [488, 489, 1581, 1582, 1583, 1584, 1585, 1586, 1587, 1588, 1589, 1590, 1591, 1592, 2354]
        ]); //343



        $this->getR([
            'nombrexx' => '¿POR LAS ACCIONES EN LAS CUALES PRESUNTAMENTE ESTA EN CONFLICTO CON LA LEY HA ACTUADO EN?',
            'parametr' => [2338, 2339, 2340, 2341, 2342, 2343, 1726]
        ]); //344
        $this->getR([
            'nombrexx' => '12.1 ¿Presenta algún tipo de violencia?',
            'parametr' => [227, 228]
        ]); //345
        $this->getR([
            'nombrexx' => '12.1 A Ha ejercido algún tipo de presunta violencia durante la actividad en conflicto con la ley?',
            'parametr' => [227, 228]
        ]); //346

        $this->getR([
            'nombrexx' => 'COMBO VIOLENCIA PARA: (VIOLENCIAS Y CONDICION ESPECIAL)',
            'parametr' => [528, 524, 525, 526]
        ]); //347

        $this->getR([
            'nombrexx' => 'COMBO CONTEXTOS PARA: (VIOLENCIAS Y CONDICION ESPECIAL)',
            'parametr' => [282, 521, 522, 523]
        ]); //348

        $this->getR([
            'nombrexx' => '12.2 El tipo de violencia referenciado corresponde a violencia basada en',
            'parametr' => [235, 2344, 2345, 2346]
        ]); //349

        $this->getR([
            'nombrexx' => '12.1.B  Que tipo de presuntas lesiones ha cometido durante la actividad?',
            'parametr' => [337, 2347, 2348, 2349, 2350]
        ]); //350
        $this->getR([
            'nombrexx' => 'condiciones especiales  CR',
            'parametr' => [450, 451, 452, 454, 853, 936]
        ]); //351
        $this->getR([
            'nombrexx' => '¿Es cabeza de familia? cr',
            'parametr' => [227, 228, 235]
        ]); //352
        $this->getR([
            'nombrexx' => '¿Es usted Joven en presunto conflicto con la ley?',
            'parametr' => [227, 228, 235]
        ]); //353

        $this->getR([
            'nombrexx' => 'ESTRATEGIA',
            'parametr' => [651, 2323]
        ]); //354
        $this->getR([
            'nombrexx' => 'SIN ESTRATEGIA',
            'parametr' => [235]
        ]); //355
        $this->getR([
            'nombrexx' => 'TIPO ATENCIÓN INTERVENCIÓN TRABAJADOR SOCIAL',
            'parametr' => [1062, 1063, 1064, 1065, 1067]
        ]); //356
        $this->getR([
            'nombrexx' => 'motivo vinculacion SPOA',
            'parametr' => [346, 347, 348, 349, 350, 360, 352, 351]
        ]); //357
        $this->getR([
            'nombrexx' => 'PARENTESCO FI',
            'parametr' => [
                235, 600, 770, 771, 776, 777, 778, 779, 780, 781, 782, 783, 784, 785, 786, 787, 788, 789, 790, 791, 792, 793, 794,
                795, 796, 797, 798, 799, 800, 801, 802, 803, 805, 808, 809, 810, 1479, 1480, 1594,
            ]
        ]); //358
        $this->getR([
            'nombrexx' => 'TIPO POBLACION CSD',
            'parametr' => [
                650, 651, 235
            ]
        ]);

        $this->getR([
            'nombrexx' => 'PROBLEMA CSD',
            'parametr' => [
                567, 568, 569, 561, 572, 573, 574, 575, 576, 579, 581, 583, 582, 577, 571, 655, 578, 580 //  2322,
            ]
        ]); //360


        $this->getR([
            'nombrexx' => 'TIPO DE DOCUMENTO CSD',
            'parametr' => [
                19, 142, 143, 144, 145 //  2322,
            ]
        ]); //361

        $this->getR([
            'nombrexx' => 'motivo vinculacion justicia',
            'parametr' => [346, 347, 348, 349, 350, 360, 352, 351,2480,2481]
        ]); //362

        $this->getR([
            'nombrexx' => 'Autorización de respuesta',
            'parametr' => [2487,2488,2489,2490]
        ]); //363


        //359
        // $this->getR([
        //     'nombrexx' => '',
        //     'parametr' => []
        // ]); //362
    }
}

