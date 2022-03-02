<?php

namespace App\Traits\Interfaz\Antisimi;

use App\Models\sistema\SisMunicipio;
use Illuminate\Support\Facades\DB;

/**
 * actuliza un nnaj en el nuevo desarrollo con la información que se encuentra en el antiguo simi
 */
trait BkProduccionTrait
{
    private $anterior = 0;
    private $maximoxx = 0;
    private $posterio = 0;
    private $diferenc = 0;
    private $original = [];
    private $usenotin = [];
    private $fidatosx = 0;
    private $tablaxxx = '';
    private $incremen = 0;
    private $fichfalt = [
        1486, 1499, 1500, 1616, 1650, 1760, 1761, 1865, 1871, 1872, 1873, 1874, 1876, 1889, 1890, 1891, 1892, 1947, 2035, 2036, 2037, 2105, 2106, 2119, 2370, 2504,
        2566, 2567, 2568, 2569, 2570, 2593, 2594, 2595, 2596, 2599, 2689, 2690, 2691, 2692, 2775, 2935, 3115, 3202, 3204, 3240, 3241, 3242, 3244, 3254, 3262, 3289,
        3304, 3305, 3311, 3312, 3313, 3314, 3315, 3316, 3317, 3318, 3320, 3321, 3344, 3409, 3410, 3411, 3413, 3501, 3502, 3531, 3537, 3538, 3547, 3548, 3549, 3552,
        3554, 3573, 3574, 3575, 3583, 3637, 3644, 3645, 3646, 3651, 3652, 3656, 3660, 3661, 3675, 3685, 3686, 3693, 3694, 3732, 3790, 3792, 3793, 3812, 3813, 3815,
        3816, 3817, 3818, 3819, 3820, 3984, 3985, 3986, 4056, 4204, 4255, 4257, 4282, 4287, 4288, 4290, 4306, 4323, 4324, 4325, 4356, 4357, 4358, 4359, 4360, 4363,
        4364, 4365, 4403, 4405, 4457, 4458, 4489, 4513, 4514, 4558, 4742, 4743, 4861, 4862, 4864, 4866, 4958, 5149, 5174, 5175, 5177, 5178, 5179, 5192, 5310, 5311,
        5312, 5313, 5365, 5366, 5369, 5402, 5403, 5404, 5405, 5406, 5668, 5669, 5670, 5692, 5693, 5937, 5938, 5939, 5940, 5941, 5942, 5957, 5958, 5959, 5960, 6080,
        6081, 6082, 6083, 6240, 6725, 6937, 7006, 7007, 7177, 7247, 7266, 7362, 7394, 7395, 7450, 7457, 7481, 7483, 7503, 7512, 7563, 7565, 7594, 7596, 7597, 7598,
        7613, 7614, 7615, 7616, 7703, 7704, 7784, 8181, 8182, 8183, 8184, 8228, 8229, 8230, 8231, 8296, 8297, 8299, 8300, 8601, 8602, 8603, 8654, 8655, 8748, 8752,
        8755, 8831, 8866, 8872, 8913, 8920, 9253, 9403, 9693, 9694, 9695, 9724, 9725, 9726, 9727, 9954, 9955, 9956, 9957, 9958, 9959, 10133, 10134, 10135, 10136,
        10205, 10211, 10212, 10213, 10215, 10216, 10217, 10219, 10220, 10221, 10222, 10223, 10248, 10253, 10254, 10255, 10256, 10257, 10260, 10261, 10326, 10354,
        10425, 10426, 10427, 10451, 10493, 10494, 10495, 10497, 10511, 10513, 10574, 10635, 10636, 10637, 10638, 10639, 10640, 10641, 10642, 10643, 10644, 10834,
        10835, 10855, 10879, 10967, 11006, 11092, 11106, 11120, 11121, 11180, 11181, 11182, 11401, 11569, 11570, 11714, 11716, 11876, 11878, 11879, 11921, 11929,
        12003, 12004, 12005, 12112, 12189, 12190, 12191, 12192, 12193, 12194, 12195, 12196, 12197, 12198, 12199, 12200, 12201, 12202, 12203, 12227, 12242, 12276,
        12280, 12303, 12318, 12319, 12333, 12532, 12849,
    ];


    /**
     * Saber qué id hacen falta en la tabla que se esta migrando
     */
    public function getAnterior($key, $value, $respuest)
    {
        // * anterio y posterior se inicializan con el primer id
        $this->anterior =  $this->posterio = $value->id;
        // * obtener el id anterior
        if ($key > 0) {
            $this->anterior = $respuest[$key - 1]->id;
        }
        // * saber cuatos registros hacen falta en ese intérvalo
        $this->diferenc = $this->posterio - $this->anterior;
    }

    public function getArmarScriptCuerpo($value, $i = 0)
    {
        $noxxxxxx = ['id', 'deleted_at', 'rn', 'sis_municipio', 'sis_tcampo_id'];
        $camposxx = ['user_crea_id', 'user_edita_id'];
        $tablaxxx = ['users'];
        $scriptxx =  '';

        foreach ((array)$value as $key => $values) {
            if (!in_array($key, $noxxxxxx) && $values != '') {
                if (in_array($this->tablaxxx, $tablaxxx) && in_array($key, $camposxx)) {
                    if ($values > $this->incremen) {
                        $values = 1;
                    }
                }
                $scriptxx .= "'$key'=>'$values',";
            }
        }
        return $scriptxx;
    }

    public function getArmarScriptCabecera($cuerpoxx, $i)
    {
        $this->incremen =  $i;
        $modeloxx = str_replace([' '], '', ucwords(str_replace(['_'], ' ', $this->tablaxxx)));
        $validaxx = substr($modeloxx, -1);
        if ($validaxx == 's') {
            $modeloxx = substr($modeloxx, 0, -1);
        }
        $scriptxx =  $modeloxx . '::create([';
        $scriptxx .= $cuerpoxx;
        $scriptxx .= "]); // " . $i . '<br>';
        echo $scriptxx;
    }

    public function getNotInxxx($dataxxxx)
    {
        $notinxxx = [];
        foreach ($dataxxxx as $key => $value) {
            $notinxxx[] = $value->id;
        }
        return $notinxxx;
    }

    /**
     * armar los insert de los registro que no se encuentran en produccion
     */
    public function getGeneraNoExiste($value)
    {
        $metodoxx = $this->tablaxxx . '_noexiste';
        if ($this->diferenc > 1) {
            echo '// NO EXISTE EN PRODUCCION <br>';
            for ($j = $this->anterior + 1; $j < $this->posterio; $j++) {
                $this->$metodoxx($value, $j);
            }
            echo '// FIN NO EXISTE EN PRODUCCION <br>';
        }
    }


    public function sis_depen_user_noexiste($value, $j)
    {
        $value->sis_depen_id = DB::table('sis_depens')
            ->whereNotIn('id', $this->usenotin[$value->user_id])
            ->first()->id;
        if (!in_array($value->sis_depen_id, $this->usenotin[$value->user_id])) {
            $this->usenotin[$value->user_id][] = $value->sis_depen_id;
        }
        $cuerpoxx = $this->getArmarScriptCuerpo($value);
        $this->getArmarScriptCabecera($cuerpoxx, $j);
    }

    /**
     * hallar las dependencias que no tiene el usuario y armar el script que se va a mostrar
     */
    public function sis_depen_user($value, $cuerpoxx)
    {
        if (!array_key_exists($value->user_id, $this->usenotin)) {
            $notinxxx = DB::table($this->tablaxxx)
                ->where('user_id', $value->user_id)
                ->get(['sis_depen_id as id']);
            $this->usenotin[$value->user_id] = $this->getNotInxxx($notinxxx);
        }
        $this->getArmarScriptCabecera($cuerpoxx, $value->id);
    }

    public function fi_datos_basicos($cuerpoxx, $value)
    {
        # code...
    }

    public function sis_nnajs_noexiste($value, $j)
    {
        $cuerpoxx = $this->getArmarScriptCuerpo($value);
        $this->getArmarScriptCabecera($cuerpoxx, $j);
    }


    public function sis_nnajs($value, $cuerpoxx)
    {
        $this->getArmarScriptCabecera($cuerpoxx, $value->id);
    }

    public function getEliminaPosicion($arrayxxx)
    {
        foreach ($this->$arrayxxx as $key => $valuexxx) {
            if ($valuexxx < $this->fidatosx) {
                array_shift($this->$arrayxxx);
            } else {
                $this->fidatosx = $valuexxx;
                break;
            }
        }
    }

    public function nnaj_docus_noexiste($value, $j)
    {
        $original = [$value->s_documento, $value->fi_datos_basico_id];
        $value->s_documento = str_replace(['-'], '', date('Y-m-d')) . $j;
        $this->getEliminaPosicion('fichfalt');
        $value->fi_datos_basico_id = $this->fidatosx;

        $municipi = SisMunicipio::where('id', $value->sis_municipio_id)->first();
        $value->sis_departam_id = $municipi->sis_departam_id;
        $value->sis_pai_id = $municipi->sis_departam->sis_pai_id;

        $cuerpoxx = $this->getArmarScriptCuerpo($value);
        $this->getArmarScriptCabecera($cuerpoxx, $j);
        array_shift($this->fichfalt);
        $this->fidatosx = $this->fichfalt[array_key_first($this->fichfalt)];
        $value->s_documento = $original[0];
        $value->fi_datos_basico_id = $original[1];
    }

    public function nnaj_docus($value, $cuerpoxx)
    {
        $municipi = SisMunicipio::where('id', $value->sis_municipio_id)->first();
        $value->sis_departam_id = $municipi->sis_departam_id;
        $value->sis_pai_id = $municipi->sis_departam->sis_pai_id;
        $this->getArmarScriptCabecera($cuerpoxx, $value->id);
    }
    public function users_noexiste($value, $j)
    {
        $value->s_documento = str_replace(['-'], '', date('Y-m-d')) . $j;
        $value->email = "reutilizar$j@idipron.gov.co";
        $cuerpoxx = $this->getArmarScriptCuerpo($value);
        $this->getArmarScriptCabecera($cuerpoxx, $j);
    }
    public function users($value, $cuerpoxx)
    {
        $this->getArmarScriptCabecera($cuerpoxx, $value->id);
    }

    public function fi_diligencs_noexiste($value, $j)
    {
        $cuerpoxx = $this->getArmarScriptCuerpo($value);
        $this->getArmarScriptCabecera($cuerpoxx, $j);
    }
    public function fi_diligencs($value, $cuerpoxx)
    {
       
        $this->getArmarScriptCabecera($cuerpoxx, $value->id);
    }
}
