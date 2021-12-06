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
            $sqlxxxxx="SELECT *
            FROM information_schema.columns
            WHERE table_schema = 'laravel'
            AND  table_name = '.$tablaxxx->s_tabla.'";
            
            $columnsData = DB::select($sqlxxxxx); 
            foreach ($columnsData as $columnData) {
                /**
                 * solo campos que son parámetros, los campos abiertos no sirven, ni los campos mágicos
                 */
                    SisTcampo::create([
                        's_campo'           => $columnData->column_name,
                        's_descripcion'     => $columnData->column_name,
                        'sis_tabla_id'      => $tablaxxx->ordinal_position,
                        'user_crea_id'      => 1,
                        'user_edita_id'     => 1,
                        'sis_esta_id'       => 1
                    ]);
            }
        }
    }
}
