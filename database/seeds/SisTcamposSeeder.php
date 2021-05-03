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

            $columnsData = DB::select("SELECT table_name, column_name, data_type, data_length
            FROM USER_TAB_COLUMNS
            WHERE table_name = '{$tablaxxx->s_tabla}'");
            foreach ($columnsData as $columnData) {
                $campoxxx = explode('_', $columnData->column_name);
                /**
                 * solo campos que son parámetros, los campos abiertos no sirven, ni los campos mágicos
                 */
                // if (in_array('prm', $campoxxx) || in_array('parametro', $campoxxx)) {
                    SisTcampo::create([
                        's_campo'           => $columnData->column_name,
                        's_descripcion'           => $columnData->column_name,
                        // 's_numero'          => '1',
                        // 'temacombo_id'    => 1,
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
