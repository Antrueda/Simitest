<?php

use App\Models\Sistema\SisTabla;
use App\Models\Sistema\SisTcampo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SisTcamposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tablasxx = SisTabla::all();
        foreach ($tablasxx as $tablaxxx) {
            $columnsData = DB::select("SELECT COLUMN_NAME, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_NAME = '{$tablaxxx->s_tabla}'");
            foreach ($columnsData as $columnData) {
                $campoxxx = explode('_', $columnData->COLUMN_NAME);
                /**
                 * solo campos que son parámetros, los campos abiertos no sirven, ni los campos mágicos
                 */
                // if (in_array('prm', $campoxxx) || in_array('parametro', $campoxxx)) {
                    SisTcampo::create([
                        's_campo'           => $columnData->COLUMN_NAME,
                        // 's_numero'          => '1',
                        'temacombo_id'    => 1,
                        // 'tema_id'           => 1,
                        'sis_tabla_id'      => $tablaxxx->id,
                        'user_crea_id'      => 1,
                        'user_edita_id'     => 1,
                        'sis_esta_id'       => 1
                    ]);
                // }
            }
        }
    }
}
