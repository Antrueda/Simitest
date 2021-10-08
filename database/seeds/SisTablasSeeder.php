<?php

use App\Models\Sistema\SisTabla;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SisTablasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tablasxx = DB::select("SELECT table_name
        FROM USER_TAB_COLUMNS  where table_name not like 'h_%' group by table_name order by  table_name asc");

        foreach ($tablasxx as $tablaxxx) {
            SisTabla::create(['sis_docfuen_id' => 2,
            's_tabla' => $tablaxxx->table_name,
            's_descripcion' => $tablaxxx->table_name,
            'sis_esta_id' => 1,
            'user_crea_id' => 1,
            'user_edita_id' => 1]); //1
        }
    }
}
