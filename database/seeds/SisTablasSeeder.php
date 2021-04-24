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
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $data) {
            $tablaxxx = explode('_', $data->Tables_in_laravel);
            /**
             * encontrar las tablas padre
             */
            if ($tablaxxx[0] == 'h') {
                $tablsinh = str_replace('h_', '', $data->Tables_in_laravel);
                $table = SisTabla::create([
                    'sis_docfuen_id'    => 2,
                    's_tabla'           => $tablsinh,
                    's_descripcion'     => $tablsinh,
                    'sis_esta_id'       => 1,
                    'user_crea_id'      => 1,
                    'user_edita_id'     => 1
                ]);
            }
        }
    }
}
